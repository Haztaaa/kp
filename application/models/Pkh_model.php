<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pkh_model extends CI_Model
{
    public function import($data_penerima)
    {
        $jumlah = count($data_penerima);
       if($jumlah > 0){
           $this->db->replace('data_penerima', $data_penerima);
       }
    }
    public function getDataPenerima()
    {
       return $this->db->get('data_penerima')->result_array();
    }
    public function get()
    {
        
        $query = "SELECT `data_usulan`.*, `t_kecamatan`.`kecamatan`,`t_jbantuan`.`jenis_bantuan`,`t_tahun`.`tahun`
        FROM `data_usulan` 
                   JOIN `t_kecamatan` 
                   ON `data_usulan`.`id_kecamatan` = `t_kecamatan`.`id`
                   JOIN `t_jbantuan`
                   ON `data_usulan`.`id_jbantuan` = `t_jbantuan`.`id`
                   JOIN `t_tahun`
                   ON `data_usulan`.`id_tahun` = `t_tahun`.`id`
                   
                ";
       

       return $this->db->query($query);
    }
    public function getexcel()
    {
        $status = '1';
        $query = "SELECT `data_usulan`.*, `t_kecamatan`.`kecamatan`,`t_jbantuan`.`jenis_bantuan`,`t_tahun`.`tahun`
        FROM `data_usulan` 
                   JOIN `t_kecamatan` 
                   ON `data_usulan`.`id_kecamatan` = `t_kecamatan`.`id`
                   JOIN `t_jbantuan`
                   ON `data_usulan`.`id_jbantuan` = `t_jbantuan`.`id`
                   JOIN `t_tahun`
                   ON `data_usulan`.`id_tahun` = `t_tahun`.`id`
                    WHERE status = $status
                ";
       

       return $this->db->query($query);
    }
}