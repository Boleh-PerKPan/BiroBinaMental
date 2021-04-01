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

    public function updatePostSubMenu($id)
    {
        $data['child'] = "1";
        $this->db
            ->where('id_menu', $id)
            ->update('web_menu', $data);
    }

    #hitung banyak child 
    private function countChild($parent)
    {
        $count = $this->db
            ->where('parent_id', $parent)
            ->get('web_menu');
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

    #GALERI

}
