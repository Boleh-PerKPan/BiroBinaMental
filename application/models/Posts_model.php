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

    #instansi
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

    // #User
    // public function tambahPostUser()
    // {
    //     $data['nama_instansi'] = $this->input->post('name');
    //     $data['parent_id'] = 0;
    //     $data['status'] = $this->input->post('status');
    //     $this->db->insert('user_instansi', $data);
    // }

    // public function getUser()
    // {
    //     return $this->db
    //         ->get('user_instansi')
    //         ->result_array();
    // }

    // public function getRole()
    // {
    //     return $this->db
    //         ->get('user_instansi')
    //         ->result_array();
    // }

    // #update instansi
    // public function getUserId($id)
    // {
    //     return $this->db
    //         ->where('id_instansi', $id)
    //         ->get('user_instansi')
    //         ->row_array();
    // }
    // #hapus instansi
    // public function hapusUser($id)
    // {
    //     $this->db
    //         ->where('id_instansi', $id)
    //         ->delete('user_instansi');
    // }
}
