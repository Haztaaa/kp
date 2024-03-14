<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model
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
    public function get()
    {
        $query = "SELECT `peminjaman`.*, `penerima`.`nama_buku`
                  FROM `peminjaman`
                  JOIN `penerima` 
                  ON `peminjaman`.`buku_id` = `penerima`.`id`
                 
                  ";
        

        return $this->db->query($query);
    }
    public function getDatas($id)
    {
        return $this->db->get_where('peminjaman', ['id' => $id])->row_array();
    }
}