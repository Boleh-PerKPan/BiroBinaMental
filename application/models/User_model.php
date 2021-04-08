<?php
class User_model extends CI_Model
{

    public function getUserByUsername($user)
    {
        return $this->db
            ->get_where('user', ['username' => $user])
            ->row_array();
    }
}
