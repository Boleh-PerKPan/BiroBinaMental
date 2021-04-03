<?php
class Posts_model extends CI_Model
{
    #Menu
    public function getBanyakMenu()
    {
        return $this->db->from('web_menu')->count_all_results();
    }

    public function tambahPostMenu()
    {
        $data['nama_menu'] = $this->input->post('name');
        $data['icon'] = $this->input->post('icon');
        $data['link'] = $this->input->post('link');
        $data['parent_id'] = 0;
        $data['status'] = $this->input->post('status');
        $data['order_no'] = $this->input->post('order_no');
        $this->db->insert('web_menu', $data);
    }

    public function tambahPostSubMenu($id)
    {
        $data['nama_menu'] = $this->input->post('name');
        $data['icon'] = $this->input->post('icon');
        $data['link'] = $this->input->post('link');
        $data['parent_id'] = $id;
        $data['status'] = $this->input->post('status');
        $data['order_no'] = $this->input->post('order_no');
        $this->db->insert('web_menu', $data);
    }

    public function getMenu()
    {
        return $this->db
            ->get('web_menu')
            ->result_array();
    }
    #update menu
    public function getMenuId($id)
    {
        return $this->db
            ->where('id_menu', $id)
            ->get('web_menu')
            ->row_array();
    }

    public function updatePostMenu($id)
    {
        $data = array(
            'nama_menu' => $this->input->post('name', true),
            'icon' => $this->input->post('icon', true),
            'link' => $this->input->post('link', true),
            'parent_id' => $this->input->post('parent_id', true),
            'status' => $this->input->post('status', true),
            'order_no' => $this->input->post('order_no', true)
        );
        $this->db
            ->where('id_menu', $id)
            ->update('web_menu', $data);
    }

    #count child menu
    private function countChild($parent)
    {
        $count = $this->db
            ->where('parent_id', $parent)
            ->count_all('web_menu');
        return $count->num_rows();
    }

    #hapus menu
    public function hapusMenu($id, $parent)
    {
        $this->db
            ->where('id_menu', $id)
            ->delete('web_menu');
        if (!$this->countChild($parent)) {
            $child['child'] = 0;
            $this->db
                ->where('id_menu', $parent)
                ->update('web_menu', $child);
        }
    }
    #INSTANSI
    public function tambahPostInstansi()
    {
        $data['nama_instansi'] = $this->input->post('name');
        $data['parent_id'] = 0;
        $data['status'] = $this->input->post('status');
        $this->db->insert('user_instansi', $data);
    }

    public function tambahPostSubInstansi($id)
    {
        $data['nama_instansi'] = $this->input->post('name');
        $data['parent_id'] = $id;
        $data['status'] = $this->input->post('status');
        $this->db->insert('user_instansi', $data);
    }

    public function getInstansi()
    {
        return $this->db
            ->get('user_instansi')
            ->result_array();
    }

    #update instansi
    public function getInstansiId($id)
    {
        return $this->db
            ->where('id_instansi', $id)
            ->get('user_instansi')
            ->row_array();
    }

    public function updatePostInstansi($id)
    {
        $data = array(
            'nama_instansi' => $this->input->post('name', true),
            'status' => $this->input->post('status', true)
        );
        $this->db
            ->where('id_instansi', $id)
            ->update('user_instansi', $data);
    }

    #hapus instansi
    public function hapusInstansi($id)
    {
        $this->db
            ->where('id_instansi', $id)
            ->delete('user_instansi');
    }

    #USER
    public function tambahPostUser()
    {
        $data['username'] = $this->input->post('username');
        $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data['nama_lengkap'] = $this->input->post('name');
        $data['id_role'] = $this->input->post('role');
        $data['id_instansi'] = $this->input->post('instansi');
        $data['email'] = $this->input->post('email');
        $data['no_telp'] = $this->input->post('no_telp');
        $data['status'] = $this->input->post('status');
        $this->db->insert('user', $data);
    }

    public function getUser()
    {
        return $this->db
            ->join('user_instansi', 'user_instansi.id_instansi = user.id_instansi')
            ->join('user_role', 'user_role.id_role = user.id_role')
            ->select('user.id_user,user.username,user.nama_lengkap,user_role.nama_role,user_instansi.nama_instansi,user.email,user.no_telp,user.status')
            ->get('user')
            ->result_array();
    }

    public function getRole()
    {
        return $this->db
            ->get('user_role')
            ->result_array();
    }

    #update User
    public function getUserId($id)
    {
        return $this->db
            ->where('id_user', $id)
            ->get('user')
            ->row_array();
    }

    public function updatePostUser($id)
    {
        $data = array(
            'username' => $this->input->post('username', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'nama_lengkap' => $this->input->post('name', true),
            'id_role' => $this->input->post('role', true),
            'id_instansi' => $this->input->post('instansi', true),
            'email' => $this->input->post('email', true),
            'no_telp' => $this->input->post('no_telp', true),
            'status' => $this->input->post('status', true)
        );
        $this->db
            ->where('id_user', $id)
            ->update('user', $data);
    }

    #hapus User
    public function hapusUser($id)
    {
        $this->db
            ->where('id_user', $id)
            ->delete('user');
    }

    #ARTIKEL KATEOGRI
    public function tambahPostArtikelKategori()
    {
        $data['nama_artikel_kategori'] = $this->input->post('name');
        $data['status'] = $this->input->post('status');
        $this->db->insert('artikel_kategori', $data);
    }

    public function getArtikelKategori()
    {
        return $this->db
            ->get('artikel_kategori')
            ->result_array();
    }


    #update artikel kategori
    public function getArtikelKategoriId($id)
    {
        return $this->db
            ->where('id_artikel_kategori', $id)
            ->get('artikel_kategori')
            ->row_array();
    }

    public function updatePostArtikelKategori($id)
    {
        $data = array(
            'nama_artikel_kategori' => $this->input->post('name'),
            'status' => $this->input->post('status')
        );
        $this->db
            ->where('id_artikel_kategori', $id)
            ->update('artikel_kategori', $data);
    }

    #hapus artikel kategori
    public function hapusArtikelKategori($id)
    {
        $this->db
            ->where('id_artikel_kategori', $id)
            ->delete('artikel_kategori');
    }

    #ARTIKEL BERITA

    public function tambahGaleriKontenBerita($foto, $userdata)
    {
        $data['nama_file'] = $foto;
        $data['id_user'] = $userdata;
        $data['status'] = $this->input->post('status');
        $data['id_galeri_kategori'] = "4";
        $this->db->insert('galeri_konten', $data);
    }

    public function getGaleriKontenLastID()
    {
        return $this->db
            ->order_by('id_galeri_konten', 'desc')
            ->get('galeri_konten', 1)
            ->row_array();
    }

    private function getArtikelBeritaLastId()
    {
        return $this->db
            ->order_by('id_artikel_berita', 'desc')
            ->get('artikel_berita', 1)
            ->row_array();
    }

    #tambah Berita Kategori
    public function tambahBeritakategori()
    {
        $artikel_berita = $this->getArtikelBeritaLastId();

        $data['id_artikel_berita'] = $artikel_berita['id_artikel_berita'];
        $data['id_artikel_kategori'] = $this->input->post('kategori');
        $this->db->insert('berita_kategori', $data);
    }

    #tambah Post berita
    public function tambahPostArtikelBerita($LastGaleriKonten, $userdata)
    {

        $data['tanggal_publish'] = $this->input->post('date');
        $data['id_user'] = $userdata;
        $data['judul'] = $this->input->post('judul');
        $data['isi'] = $this->input->post('isi');
        $data['id_galeri_konten'] = $LastGaleriKonten['id_galeri_konten'];
        $data['id_artikel_kategori'] = $this->input->post('kategori');
        $data['status'] = $this->input->post('status');
        $this->db->insert('artikel_berita', $data);
    }

    public function getArtikelBerita()
    {
        return $this->db
            ->join('artikel_kategori', 'artikel_kategori.id_artikel_kategori = artikel_berita.id_artikel_kategori')
            ->join('galeri_konten', 'galeri_konten.id_galeri_konten = artikel_berita.id_galeri_konten')
            ->select('artikel_berita.id_artikel_berita, 
                    artikel_berita.tanggal_publish, 
                    artikel_berita.judul,
                    artikel_berita.isi,
                    artikel_berita.hits,
                    artikel_berita.status,
                    artikel_kategori.nama_artikel_kategori')
            ->get('artikel_berita')
            ->result_array();
    }

    #update artikel berita
    public function getArtikelBeritaId($id)
    {
        return $this->db
            ->join('artikel_kategori', 'artikel_kategori.id_artikel_kategori = artikel_berita.id_artikel_kategori')
            ->join('galeri_konten', 'galeri_konten.id_galeri_konten = artikel_berita.id_galeri_konten')
            ->select('artikel_berita.id_artikel_berita, 
                    artikel_berita.tanggal_publish, 
                    artikel_berita.judul,
                    artikel_berita.isi,
                    artikel_berita.hits,
                    artikel_berita.status,
                    galeri_konten.nama_file')
            ->where('artikel_berita.id_artikel_berita', $id)
            ->get('artikel_berita')
            ->row_array();
    }

    public function updatePostArtikelBerita($id)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'id_artikel_kategori' => $this->input->post('kategori'),
            'status' => $this->input->post('status')
        );
        $this->db
            ->where('id_artikel_berita', $id)
            ->update('artikel_berita', $data);
    }

    #hapus artikel berita
    public function hapusArtikelBerita($id)
    {
        $this->db
            ->where('id_artikel_berita', $id)
            ->delete('artikel_berita');
    }

    #ARTIKEL UPLOAD 
    public function tambahPostArtikelUpload($file, $id)
    {
        $data['tanggal_publish'] = $this->input->post('date');
        $data['tahun_berkas'] = $this->input->post('tahun_berkas');
        $data['judul'] = $this->input->post('judul');
        $data['id_user'] = $id;
        $data['nama_file'] = $file;
        $data['status'] = $this->input->post('status');

        $this->db->insert('artikel_upload', $data);
    }

    public function getArtikelUpload()
    {
        return $this->db
            ->join('user', 'user.id_user = artikel_upload.id_user')
            ->select('user.nama_lengkap,
                      artikel_upload.id_artikel_upload,
                      artikel_upload.tanggal_publish,
                      artikel_upload.judul,
                      artikel_upload.tahun_berkas,
                      artikel_upload.hits,
                      artikel_upload.status')
            ->get('artikel_upload')
            ->result_array();
    }


    #update artikel Upload
    public function getArtikelUploadId($id)
    {
        return $this->db
            ->where('id_artikel_upload', $id)
            ->get('artikel_upload')
            ->row_array();
    }

    public function updatePostArtikelUpload($id)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'tahun_berkas' => $this->input->post('tahun_berkas'),
            'status' => $this->input->post('status')
        );
        $this->db
            ->where('id_artikel_upload', $id)
            ->update('artikel_upload', $data);
    }

    #hapus artikel Upload
    public function hapusArtikelUpload($id)
    {
        $this->db
            ->where('id_artikel_upload', $id)
            ->delete('artikel_upload');
    }

    #SLIDE SHOW
    public function tambahPostSlideShow($file, $id)
    {
        $data['text'] = $this->input->post('judul');
        $data['id_user'] = $id;
        $data['nama_file'] = $file;
        $data['id_galeri_kategori'] = "1";
        $data['status'] = $this->input->post('status');

        $this->db
            ->insert('galeri_konten', $data);
    }

    public function getSlideShow()
    {
        return $this->db
            ->join('user', 'user.id_user = galeri_konten.id_user')
            ->select('user.nama_lengkap,
                      galeri_konten.id_galeri_konten,
                      galeri_konten.text,
                      galeri_konten.status,
                      galeri_konten.nama_file,
                      galeri_konten.hits,')
            ->where('id_galeri_kategori', "1")
            ->get('galeri_konten')
            ->result_array();
    }


    #update slide show
    public function getSlideShowId($id)
    {
        return $this->db
            ->where('id_galeri_konten', $id)
            ->get('galeri_konten')
            ->row_array();
    }

    public function updatePostSlideShow($id)
    {
        $data = array(
            'text' => $this->input->post('judul'),
            'status' => $this->input->post('status')
        );
        $this->db
            ->where('id_galeri_konten', $id)
            ->update('galeri_konten', $data);
    }

    #hapus slide show
    public function hapusSlideShow($id)
    {
        $this->db
            ->where('id_galeri_konten', $id)
            ->delete('galeri_konten');
    }

    #EXTRA PAGE NEWS
    public function tambahGaleriKontenExtraPage($foto, $userdata)
    {
        $data['nama_file'] = $foto;
        $data['id_user'] = $userdata;
        $data['status'] = $this->input->post('status');
        $data['id_galeri_kategori'] = "6";
        $this->db->insert('galeri_konten', $data);
    }

    // public function getGaleriKontenLastID()
    // {
    //     return $this->db
    //         ->order_by('id_galeri_konten', 'desc')
    //         ->get('galeri_konten', 1)
    //         ->row_array();
    // }

    public function tambahPostPageNews($LastGaleriKonten, $userdata)
    {
        $data['id_user'] = $userdata;
        $data['judul'] = $this->input->post('judul');
        $data['isi'] = $this->input->post('isi');
        $data['id_galeri_konten'] = $LastGaleriKonten['id_galeri_konten'];
        $data['status'] = $this->input->post('status');
        $this->db->insert('extrapage_news', $data);
    }

    public function getPageNews()
    {
        return $this->db
            ->join('user', 'user.id_user = extrapage_news.id_user')
            ->join('galeri_konten', 'galeri_konten.id_galeri_konten = extrapage_news.id_galeri_konten')
            ->select('extrapage_news.id_extrapage, 
                    extrapage_news.judul,
                    extrapage_news.isi,
                    extrapage_news.status,
                    user.nama_lengkap,
                    galeri_konten.nama_file')
            ->get('extrapage_news')
            ->result_array();
    }

    #update page news
    public function getPageNewsId($id)
    {
        return $this->db
            ->join('user', 'user.id_user = extrapage_news.id_user')
            ->join('galeri_konten', 'galeri_konten.id_galeri_konten = extrapage_news.id_galeri_konten')
            ->select('extrapage_news.id_extrapage, 
                    extrapage_news.judul,
                    extrapage_news.isi,
                    extrapage_news.status,
                    user.nama_lengkap,
                    galeri_konten.nama_file')
            ->where('extrapage_news.id_extrapage', $id)
            ->get('extrapage_news')
            ->row_array();
    }

    public function updatePostPageNews($id)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'status' => $this->input->post('status')
        );
        $this->db
            ->where('id_extrapage', $id)
            ->update('extrapage_news', $data);
    }

    #hapus page news
    public function hapusPageNews($id)
    {
        $this->db
            ->where('id_extrapage', $id)
            ->delete('extrapage_news');
    }

    #PHOTO
    public function tambahPostPhoto($file, $id)
    {
        $data['text'] = $this->input->post('judul');
        $data['id_user'] = $id;
        $data['nama_file'] = $file;
        $data['id_galeri_kategori'] = "2";
        $data['status'] = $this->input->post('status');

        $this->db
            ->insert('galeri_konten', $data);
    }

    public function getPhoto()
    {
        return $this->db
            ->join('user', 'user.id_user = galeri_konten.id_user')
            ->select('user.nama_lengkap,
                      galeri_konten.id_galeri_konten,
                      galeri_konten.text,
                      galeri_konten.status,
                      galeri_konten.nama_file,
                      galeri_konten.hits,')
            ->where('id_galeri_kategori', "2")
            ->get('galeri_konten')
            ->result_array();
    }


    #update photo
    public function getPhotoId($id)
    {
        return $this->db
            ->where('id_galeri_konten', $id)
            ->get('galeri_konten')
            ->row_array();
    }

    public function updatePostPhoto($id)
    {
        $data = array(
            'text' => $this->input->post('judul'),
            'status' => $this->input->post('status')
        );
        $this->db
            ->where('id_galeri_konten', $id)
            ->update('galeri_konten', $data);
    }

    #hapus photo
    public function hapusPhoto($id)
    {
        $this->db
            ->where('id_galeri_konten', $id)
            ->delete('galeri_konten');
    }

    #VIDEO
    public function tambahPostVideo($id)
    {
        $data['text'] = $this->input->post('judul');
        $data['id_user'] = $id;
        $data['nama_file'] = $this->input->post('nama_file');
        $data['id_galeri_kategori'] = "3";
        $data['status'] = $this->input->post('status');

        $this->db
            ->insert('galeri_konten', $data);
    }

    public function getVideo()
    {
        return $this->db
            ->join('user', 'user.id_user = galeri_konten.id_user')
            ->select('user.nama_lengkap,
                      galeri_konten.id_galeri_konten,
                      galeri_konten.text,
                      galeri_konten.status,
                      galeri_konten.hits,')
            ->where('id_galeri_kategori', "3")
            ->get('galeri_konten')
            ->result_array();
    }


    #update photo
    public function getVideoId($id)
    {
        return $this->db
            ->where('id_galeri_konten', $id)
            ->get('galeri_konten')
            ->row_array();
    }

    public function updatePostVideo($id)
    {
        $data = array(
            'text' => $this->input->post('judul'),
            'status' => $this->input->post('status')
        );
        $this->db
            ->where('id_galeri_konten', $id)
            ->update('galeri_konten', $data);
    }

    #hapus video
    public function hapusVideo($id)
    {
        $this->db
            ->where('id_galeri_konten', $id)
            ->delete('galeri_konten');
    }


    #AGENDA
    public function tambahGaleriKontenAgenda($foto, $userdata)
    {
        $data['nama_file'] = $foto;
        $data['id_user'] = $userdata;
        $data['status'] = $this->input->post('status');
        $data['id_galeri_kategori'] = "5";
        $this->db->insert('galeri_konten', $data);
    }

    // public function getGaleriKontenLastID()
    // {
    //     return $this->db
    //         ->order_by('id_galeri_konten', 'desc')
    //         ->get('galeri_konten', 1)
    //         ->row_array();
    // }

    #tambah Post berita
    public function tambahPostAgenda($LastGaleriKonten, $userdata)
    {

        $data['tanggal_pelaksanaan'] = $this->input->post('tanggal_pelaksanaan');
        $data['id_user'] = $userdata;
        $data['tempat_pelaksanaan'] = $this->input->post('tempat_pelaksanaan');
        $data['judul'] = $this->input->post('judul');
        $data['isi'] = $this->input->post('isi');
        $data['id_galeri_konten'] = $LastGaleriKonten['id_galeri_konten'];
        $data['status'] = $this->input->post('status');
        $this->db->insert('agenda', $data);
    }

    public function getAgenda()
    {
        return $this->db
            ->join('user', 'user.id_user = agenda.id_user')
            ->join('galeri_konten', 'galeri_konten.id_galeri_konten = agenda.id_galeri_konten')
            ->select('agenda.id_agenda, 
                    agenda.tanggal_pelaksanaan,
                    agenda.tempat_pelaksanaan, 
                    agenda.judul,
                    agenda.isi,
                    agenda.hits,
                    agenda.status,
                    galeri_konten.nama_file,
                    user.nama_lengkap')
            ->get('agenda')
            ->result_array();
    }

    #update artikel berita
    public function getAgendaId($id)
    {
        return $this->db
            ->join('user', 'user.id_user = agenda.id_user')
            ->join('galeri_konten', 'galeri_konten.id_galeri_konten = agenda.id_galeri_konten')
            ->select('agenda.id_agenda, 
                    agenda.tanggal_pelaksanaan,
                    agenda.tempat_pelaksanaan, 
                    agenda.judul,
                    agenda.isi,
                    agenda.hits,
                    agenda.status,
                    galeri_konten.nama_file')
            ->where('agenda.id_agenda', $id)
            ->get('agenda')
            ->row_array();
    }

    public function updatePostAgenda($id)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'tanggal_pelaksanaan' => $this->input->post('tanggal_pelaksanaan'),
            'tempat_pelaksanaan' => $this->input->post('tempat_pelaksanaan'),
            'status' => $this->input->post('status')
        );
        $this->db
            ->where('id_agenda', $id)
            ->update('agenda', $data);
    }

    #hapus artikel berita
    public function hapusAgenda($id)
    {
        $this->db
            ->where('id_agenda', $id)
            ->delete('agenda');
    }
}
