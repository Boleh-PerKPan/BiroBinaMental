<?php
class Main_model extends CI_Model
{

    public function getHeaderData($parentid = 0) {
        return $this->db
                    ->where('parent_id', $parentid)
                    ->order_by('order_no')
                    ->get('web_menu')
                    ->result_array();
    }
    public function getDataCarousel() {
        return $this->db
                    ->where('id_galeri_kategori', 1)
                    ->where('status', 'Publish')
                    ->get('galeri_konten')
                    ->result_array();
    }
    public function getExtraPage($id) {
        return $this->db
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = extrapage_news.id_galeri_konten')
                    ->where('id_extrapage', $id)
                    ->get('extrapage_news')
                    ->result_array();
    }
    public function getAnotherExtraPage($id) {
        return $this->db
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = extrapage_news.id_galeri_konten')
                    ->where('id_extrapage !=', $id)
                    ->get('extrapage_news')
                    ->result_array();
    }
    public function getBeritaUtama() {
        return $this->db
                    ->select("*, SUBSTRING(isi,1,200) as isi")
                    ->where('nama_artikel_kategori', 'Berita Utama')
                    ->where('artikel_berita.status', 'Publish')
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = artikel_berita.id_galeri_konten')
                    ->join('artikel_kategori', 'artikel_kategori.id_artikel_kategori = artikel_berita.id_artikel_kategori')
                    ->join('user', 'user.id_user = artikel_berita.id_user')
                    ->order_by('tanggal_publish', 'DESC')
                    ->get('artikel_berita', 1)
                    ->result_array();
    }
    public function getBeritaTerkait($id = 0) {
        return $this->db
                    ->select("id_artikel_berita, nama_file, judul, nama_artikel_kategori, nama_lengkap, tanggal_publish ")
                    ->where('artikel_berita.status', 'Publish')
                    ->where('id_artikel_berita !=' , $id)
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = artikel_berita.id_galeri_konten')
                    ->join('artikel_kategori', 'artikel_kategori.id_artikel_kategori = artikel_berita.id_artikel_kategori')
                    ->join('user', 'user.id_user = artikel_berita.id_user')
                    ->order_by('artikel_kategori.id_artikel_kategori')
                    ->order_by('tanggal_publish', 'DESC')
                    ->get('artikel_berita', 4)
                    ->result_array();
    }
    public function getDetailKonten($tabel, $id) {
        return $this->db
                    ->where('id_artikel_berita', $id)
                    ->join('galeri_konten', 'galeri_konten.id_galeri_konten = artikel_berita.id_galeri_konten')
                    ->join('artikel_kategori', 'artikel_kategori.id_artikel_kategori = artikel_berita.id_artikel_kategori')
                    ->join('user', 'user.id_user = artikel_berita.id_user')
                    ->get($tabel)
                    ->result_array();
    }
}