<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bst_model extends CI_Model
{
    public function get()
    {
        $query = "SELECT `data_usulan`.*, `t_kecamatan`.`kecamatan`,`t_jbantuan`.`jenis_bantuan`,`t_tahun`.`tahun`
                  FROM `penerima` 
                  JOIN `data_usulan` 
                  ON `penerima`.`id_usulan` = `data_usulan`.`id`
                  JOIN `t_kecamatan` 
                  ON `data_usulan`.`id_kecamatan` = `t_kecamatan`.`id`
                  JOIN `t_jbantuan`
                 ON `data_usulan`.`id_jbantuan` = `t_jbantuan`.`id`
                JOIN `t_tahun`
                 ON `data_usulan`.`id_tahun` = `t_tahun`.`id`
                  ";
        

        return $this->db->query($query);
    }
}