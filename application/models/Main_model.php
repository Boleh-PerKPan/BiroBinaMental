<?php
class Main_model extends CI_Model
{
    // public function getHeaderData() {
    //     return $this->db
    //                 ->where('parent_id', 0)
    //                 ->get('web_menu')
    //                 ->result_array();
    // }
    public function getHeaderData($parentid = 0) {
        return $this->db
                    ->where('parent_id', $parentid)
                    ->get('web_menu')
                    ->result_array();
    }
}