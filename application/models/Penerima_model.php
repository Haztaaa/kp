<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerima_model extends CI_Model
{
    public function get($id_kecamatan = null, $id_desa = null)
    {

        if ($id_kecamatan == null  && $id_desa == null) {
            $status = '1';
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
                    WHERE status = $status 
                ";
        } else {
            $status = '1';
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
                    WHERE status = $status and `data_usulan`.`id_kecamatan` = $id_kecamatan 
                    and `data_usulan`.`id_desa` = $id_desa 
                ";
        }


        return $this->db->query($query);
    }
    public function getKecamatan()
    {
        return $this->db->get('t_kecamatan');
    }
    public function getDesa()
    {
        return $this->db->get('t_desa');
    }
    public function ambilDesa($idkec)
    {
        return $this->db->get_where('t_desa', ['id_kecamatan' => $idkec])->result();
    }
    public function getexcel($id)
    {
        $status = '1';
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
                    WHERE status = $status AND
                     id_tahun = $id
                ";


        return $this->db->query($query);
    }
    public function getPenerima()
    {
        $status = '1';
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
                    WHERE status = $status
                ";


        return $this->db->query($query);
    }
}
