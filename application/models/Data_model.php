<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model{



    public function getPenerima($id)
    {
        return $this->db->get_where('data_usulan', ['id' => $id])->row_array();
    }
    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('data_usulan');
    }
    
    public function hitungSemua()
    {
        return $this->db->get('data_usulan')->num_rows();
    }
    public function getDataUsulan()
    {
       //  $this->db->select('*');
      //   $this->db->from('data_usulan',);
     //    $this->db->join( 't_kecamatan','t_kecamatan.id = data_usulan.id_kecamatan','LEFT');
     //   $this->db->join( 't_jbantuan','t_jbantuan.id = data_usulan.id_jbantuan','LEFT');
      //  $this->db->join( 't_tahun','data_usulan.id_tahun = t_tahun.id','INNER');

       //  $query = $this->db->get();
      //   return $query;
       
        $query = "SELECT `data_usulan`.*, `t_kecamatan`.`kecamatan`,`t_jbantuan`.`jenis_bantuan`,`t_tahun`.`tahun`,`t_desa`.`desa`
         FROM `data_usulan` 
                    JOIN `t_kecamatan` 
                    ON `data_usulan`.`id_kecamatan` = `t_kecamatan`.`id`
                    JOIN `t_jbantuan`
                    ON `data_usulan`.`id_jbantuan` = `t_jbantuan`.`id`
                    JOIN `t_tahun`
                    ON `data_usulan`.`id_tahun` = `t_tahun`.`id`
                    JOIN `t_desa`
                   ON `data_usulan`.`id_desa` = `t_desa`.`id`
                
                 ";
        

        return $this->db->query($query);
    }
    
    
    public function ambilDesa($idkec)
    {
        return $this->db->get_where('t_desa', ['id_kecamatan'=>$idkec])->result();
    }
    

    public function getAll()
    {
        return $this->db->get('data_usulan')->result_array();
    }
    public function update($id)
    {
       
        $this->db->where('id', $id);
        $this->db->update('data_usulan','status',1);
    }
    
}