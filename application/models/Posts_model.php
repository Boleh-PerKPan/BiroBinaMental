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

    #hapus menu
    public function hapusMenu($id)
    {
        $this->db
            ->where('id_menu', $id)
            ->delete('web_menu');
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
}
