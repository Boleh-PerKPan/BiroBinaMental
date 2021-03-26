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
    #hapus menu
    public function hapusMenu($id)
    {
        $this->db
            ->where('id_menu', $id)
            ->delete('web_menu');
    }
}
