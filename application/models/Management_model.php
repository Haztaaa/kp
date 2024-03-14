<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management_model extends CI_Model{

    public function getManagement()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                  FROM `user` JOIN `user_role` 
                  ON `user`.`role_id` = `user_role`.`id`
                  ";

        return $this->db->query($query)->result_array();
    } 
    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function getOrang($limit, $start)
    {
        return $this->db->get('user', $limit, $start)->result_array();
    }
    
    
}