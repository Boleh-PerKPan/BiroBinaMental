<?php
class GetAll_model extends CI_Model
{
    public function getAllBerita() {
        return $this->db
                    ->select('*, SUBSTRING(isi,1,200) as isi')
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = artikel_berita.id_galeri_konten')
                    ->join('artikel_kategori', 'artikel_kategori.id_artikel_kategori = artikel_berita.id_artikel_kategori')
                    ->join('user', 'user.id_user = artikel_berita.id_user')
                    ->order_by('tanggal_publish', 'DESC')
                    ->get('artikel_berita')
                    ->result_array();
    }
    public function getAllbyKategori($filterid, $judul = "") {
        return $this->db
                    ->select('*, SUBSTRING(isi,1,200) as isi')
                    ->where('artikel_kategori.id_artikel_kategori', $filterid)
                    ->where('artikel_berita.status', 'Publish')
                    ->like('judul', $judul)
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = artikel_berita.id_galeri_konten')
                    ->join('artikel_kategori', 'artikel_kategori.id_artikel_kategori = artikel_berita.id_artikel_kategori')
                    ->join('user', 'user.id_user = artikel_berita.id_user')
                    ->get('artikel_berita')
                    ->result_array();
    }
    public function getAllAgenda() {
        return $this->db
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = agenda.id_galeri_konten')
                    ->join('user', 'user.id_user = agenda.id_user')
                    ->get('agenda')
                    ->result_array();
    }
    public function getAllArtikelKategori() {
        return $this->db
                    ->where('artikel_kategori.status', 'Aktif')
                    ->get('artikel_kategori')
                    ->result_array();
    }
    
    public function getAllVideo() {
        return $this->db
                    ->where('status', 'Publish')
                    ->where('id_galeri_kategori', 3)
                    ->order_by('id_galeri_konten', 'DESC')
                    ->get('galeri_konten')
                    ->result_array();
    }
    public function getAllFoto() {
        return $this->db
                    ->where('status', 'Publish')
                    ->where('id_galeri_kategori', 2)
                    ->order_by('id_galeri_konten', 'DESC')
                    ->get('galeri_konten')
                    ->result_array();
    }
    public function getAllArtikelUpload() {
        return $this->db
                    ->where('artikel_upload.status', 'Publish')
                    ->join('user', 'user.id_user = artikel_upload.id_user')
                    ->order_by('tahun_berkas', 'DESC')
                    ->get('artikel_upload')
                    ->result_array();
    }

}