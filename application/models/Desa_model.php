<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_model extends CI_Model
{
    public function getData()
    {
        $query = "SELECT `t_desa`.*, `t_kecamatan`.`kecamatan`
                  FROM `t_desa` 
                  JOIN `t_kecamatan` 
                  ON `t_desa`.`id_kecamatan` = `t_kecamatan`.`id`
                 
                  ";
        

        return $this->db->query($query);
    }
}