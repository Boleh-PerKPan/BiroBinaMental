<?php
class GetAll_model extends CI_Model
{
    public function getAllBerita($limit, $start, $judul) {
        return $this->db
                    ->select('*, SUBSTRING(isi,1,200) as isi')
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = artikel_berita.id_galeri_konten')
                    ->join('artikel_kategori', 'artikel_kategori.id_artikel_kategori = artikel_berita.id_artikel_kategori')
                    ->join('user', 'user.id_user = artikel_berita.id_user')
                    ->like('judul', $judul)
                    ->order_by('tanggal_publish', 'DESC')
                    ->get('artikel_berita', $limit, $start)
                    ->result_array();
    }
    public function countAllBerita($judul) {
        return $this->db
                    ->like('judul', $judul)
                    ->from('artikel_berita')
                    ->count_all_results();
    }
    public function getAllbyKategori($filterid, $limit, $start, $judul ) {
        return $this->db
                    ->select('*, SUBSTRING(isi,1,200) as isi')
                    ->where('artikel_kategori.id_artikel_kategori', $filterid)
                    ->where('artikel_berita.status', 'Publish')
                    ->like('judul', $judul)
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = artikel_berita.id_galeri_konten')
                    ->join('artikel_kategori', 'artikel_kategori.id_artikel_kategori = artikel_berita.id_artikel_kategori')
                    ->join('user', 'user.id_user = artikel_berita.id_user')
                    ->get('artikel_berita', $limit, $start)
                    ->result_array();
    }
    public function countAllbyKategori($filterid, $judul) {
        return $this->db
                    ->where('id_artikel_kategori', $filterid)
                    ->where('status', 'Publish')
                    ->like('judul', $judul)
                    ->from('artikel_berita')
                    ->count_all_results();
    }
    public function getAllAgenda($limit, $start, $judul) {
        return $this->db
                    ->select('*, SUBSTRING(isi,1,200) as isi')
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = agenda.id_galeri_konten')
                    ->join('user', 'user.id_user = agenda.id_user')
                    ->where('agenda.status', 'Publish')
                    ->like('judul', $judul)
                    ->get('agenda', $limit, $start)
                    ->result_array();
    }
    public function countAllAgenda($judul) {
        return $this->db
                    ->where('status', 'Publish')
                    ->like('judul', $judul)
                    ->from('agenda')
                    ->count_all_results();
    }
    
    public function getAllVideo($limit, $start, $text) {
        return $this->db
                    ->where('status', 'Publish')
                    ->where('id_galeri_kategori', 3)
                    ->like('text', $text)
                    ->order_by('id_galeri_konten', 'DESC')
                    ->get('galeri_konten', $limit, $start)
                    ->result_array();
    }
    public function countAllVideo($text) {
        return $this->db
                    ->where('status', 'Publish')
                    ->where('id_galeri_kategori', 3)
                    ->like('text', $text)
                    ->from('galeri_konten')
                    ->count_all_results();
    
    }
    public function getAllFoto($limit, $start, $text) {
        return $this->db
                    ->where('status', 'Publish')
                    ->where('id_galeri_kategori', 2)
                    ->like('text', $text)
                    ->order_by('id_galeri_konten', 'DESC')
                    ->get('galeri_konten', $limit, $start)
                    ->result_array();
    }
    public function countAllFoto($text) {
        return $this->db
                    ->where('status', 'Publish')
                    ->where('id_galeri_kategori', 2)
                    ->like('text', $text)
                    ->from('galeri_konten')
                    ->count_all_results();
    }
    public function getAllArtikelUpload($limit, $start, $judul) {
        return $this->db
                    ->where('artikel_upload.status', 'Publish')
                    ->join('user', 'user.id_user = artikel_upload.id_user')
                    ->like('judul', $judul)
                    ->order_by('tahun_berkas', 'DESC')
                    ->get('artikel_upload', $limit, $start)
                    ->result_array();
    }
    public function countAllArtikelUpload($judul) {
        return $this->db
                    ->where('status', 'Publish')
                    ->like('judul', $judul)
                    ->from('artikel_upload')
                    ->count_all_results();
    }
}