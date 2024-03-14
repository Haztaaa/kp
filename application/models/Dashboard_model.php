<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function totalUsulan()
    {
        $this->db->select('*');
        $this->db->from('data_usulan');

        return $this->db->get()->num_rows();
    }
    public function totalStatusTerima()
    {
        $belum = '1';
        $tes = $this->session->userdata('id');
        $this->db->select('status');
        $this->db->from('data_usulan');
        $this->db->where('status', $belum);
        $this->db->where('id_user', $tes);
        return $this->db->get()->num_rows();
    }
    public function totalStatusTerimaAdmin()
    {
        $belum = '1';

        $this->db->select('status');
        $this->db->from('data_usulan');
        $this->db->where('status', $belum);

        return $this->db->get()->num_rows();
    }
    public function totalStatusPending()
    {
        $belum = '0';
        $tes = $this->session->userdata('id');

        $this->db->select('status');
        $this->db->from('data_usulan');
        $this->db->where('status', $belum);
        $this->db->where('id_user', $tes);

        return $this->db->get()->num_rows();
    }


    public function totalStatusPendingAdmin()
    {
        $belum = '0';


        $this->db->select('status');
        $this->db->from('data_usulan');
        $this->db->where('status', $belum);


        return $this->db->get()->num_rows();
    }
    public function totalUsulanUser()
    {
        $id = $this->session->userdata('id');


        $this->db->select('id_user');
        $this->db->from('data_usulan');
        $this->db->where('id_user', $id);


        return $this->db->get()->num_rows();
    }
    public function totalStatusTolak()
    {
        $belum = '2';
        $tes = $this->session->userdata('id');
        $this->db->select('status');
        $this->db->from('data_usulan');
        $this->db->where('status', $belum);
        $this->db->where('id_user', $tes);
        return $this->db->get()->num_rows();
    }
    public function totalStatusTolakAdmin()
    {
        $belum = '2';

        $this->db->select('status');
        $this->db->from('data_usulan');
        $this->db->where('status', $belum);

        return $this->db->get()->num_rows();
    }
    public function tahunIni()
    {
        $tahunini = date('Y');

        $this->db->select('*');
        $this->db->from('data_usulan');
        $this->db->join('t_tahun', 't_tahun.id = data_usulan.id_tahun', 'LEFT');
        $this->db->where('tahun', $tahunini);

        return $this->db->get()->num_rows();
    }
    public function totalKecamatan()
    {


        $this->db->select('*');
        $this->db->from('t_kecamatan');


        return $this->db->get()->num_rows();
    }
    public function totalJb()
    {


        $this->db->select('*');
        $this->db->from('t_jbantuan');


        return $this->db->get()->num_rows();
    }


    public function getTahun($id)
    {
        $this->db->select('*');
        $this->db->from('data_usulan');
        $this->db->join('t_kecamatan', 't_kecamatan.id = data_usulan.id_kecamatan', 'LEFT');

        $this->db->join('t_jbantuan', 't_jbantuan.id = data_usulan.id_jbantuan', 'LEFT');

        $this->db->where('id_tahun', $id);
        $this->db->order_by('id_jbantuan', 'DESC');

        return  $this->db->get();
    }
    public function getData()
    {
        $status = '0';
        $pengusul = $this->session->userdata('id');
        //  $this->db->select('*');
        //  $this->db->from('data_usulan');
        //  $this->db->join( 't_kecamatan','t_kecamatan.id = data_usulan.id_kecamatan','LEFT');

        // $this->db->join( 't_jbantuan','t_jbantuan.id = data_usulan.id_jbantuan','LEFT');
        //  $this->db->join( 't_tahun','t_tahun.id = data_usulan.id_tahun','LEFT');
        //  $this->db->where('status',$status);
        // $this->db->where('id_tahun');
        // $this->db->order_by('id_jbantuan','DESC');

        $query = "SELECT `data_usulan`.*, `t_kecamatan`.`kecamatan`,`t_jbantuan`.`jenis_bantuan`,`t_tahun`.`tahun`
                ,`user`.`nama`
                FROM `data_usulan` 
               JOIN `t_kecamatan` 
                ON `data_usulan`.`id_kecamatan` = `t_kecamatan`.`id`
                JOIN `t_jbantuan`
               ON `data_usulan`.`id_jbantuan` = `t_jbantuan`.`id`
              JOIN `t_tahun`
               ON `data_usulan`.`id_tahun` = `t_tahun`.`id`
               JOIN `user`
               ON `data_usulan`.`id_user` = `user`.`id`
              WHERE `id_user` = $pengusul

               ";


        return $this->db->query($query);
    }
    public function getDataValidasi()
    {
        $status = '0';

        //  $this->db->select('*');
        //  $this->db->from('data_usulan');
        //  $this->db->join( 't_kecamatan','t_kecamatan.id = data_usulan.id_kecamatan','LEFT');

        // $this->db->join( 't_jbantuan','t_jbantuan.id = data_usulan.id_jbantuan','LEFT');
        //  $this->db->join( 't_tahun','t_tahun.id = data_usulan.id_tahun','LEFT');
        //  $this->db->where('status',$status);
        // $this->db->where('id_tahun');
        // $this->db->order_by('id_jbantuan','DESC');

        $query = "SELECT `data_usulan`.*, `t_kecamatan`.`kecamatan`,`t_jbantuan`.`jenis_bantuan`,`t_tahun`.`tahun`
                ,`user`.`nama`
                FROM `data_usulan` 
               JOIN `t_kecamatan` 
                ON `data_usulan`.`id_kecamatan` = `t_kecamatan`.`id`
                JOIN `t_jbantuan`
               ON `data_usulan`.`id_jbantuan` = `t_jbantuan`.`id`
              JOIN `t_tahun`
               ON `data_usulan`.`id_tahun` = `t_tahun`.`id`
               JOIN `user`
               ON `data_usulan`.`id_user` = `user`.`id`
              WHERE `status` = $status

               ";


        return $this->db->query($query);
    }
    public function getDataTerima()
    {
        $status = '1';

        //  $this->db->select('*');
        //  $this->db->from('data_usulan');
        //  $this->db->join( 't_kecamatan','t_kecamatan.id = data_usulan.id_kecamatan','LEFT');

        // $this->db->join( 't_jbantuan','t_jbantuan.id = data_usulan.id_jbantuan','LEFT');
        //  $this->db->join( 't_tahun','t_tahun.id = data_usulan.id_tahun','LEFT');
        //  $this->db->where('status',$status);
        // $this->db->where('id_tahun');
        // $this->db->order_by('id_jbantuan','DESC');

        $query = "SELECT `data_usulan`.*, `t_kecamatan`.`kecamatan`,`t_jbantuan`.`jenis_bantuan`,`t_tahun`.`tahun`
                ,`user`.`nama`
                FROM `data_usulan` 
               JOIN `t_kecamatan` 
                ON `data_usulan`.`id_kecamatan` = `t_kecamatan`.`id`
                JOIN `t_jbantuan`
               ON `data_usulan`.`id_jbantuan` = `t_jbantuan`.`id`
              JOIN `t_tahun`
               ON `data_usulan`.`id_tahun` = `t_tahun`.`id`
               JOIN `user`
               ON `data_usulan`.`id_user` = `user`.`id`
              WHERE `status` = $status
                ORDER BY id_tahun ASC 
               ";


        return $this->db->query($query);
    }
    public function getDataTolak()
    {
        $status = '2';

        //  $this->db->select('*');
        //  $this->db->from('data_usulan');
        //  $this->db->join( 't_kecamatan','t_kecamatan.id = data_usulan.id_kecamatan','LEFT');

        // $this->db->join( 't_jbantuan','t_jbantuan.id = data_usulan.id_jbantuan','LEFT');
        //  $this->db->join( 't_tahun','t_tahun.id = data_usulan.id_tahun','LEFT');
        //  $this->db->where('status',$status);
        // $this->db->where('id_tahun');
        // $this->db->order_by('id_jbantuan','DESC');

        $query = "SELECT `data_usulan`.*, `t_kecamatan`.`kecamatan`,`t_jbantuan`.`jenis_bantuan`,`t_tahun`.`tahun`
                ,`user`.`nama`
                FROM `data_usulan` 
               JOIN `t_kecamatan` 
                ON `data_usulan`.`id_kecamatan` = `t_kecamatan`.`id`
                JOIN `t_jbantuan`
               ON `data_usulan`.`id_jbantuan` = `t_jbantuan`.`id`
              JOIN `t_tahun`
               ON `data_usulan`.`id_tahun` = `t_tahun`.`id`
               JOIN `user`
               ON `data_usulan`.`id_user` = `user`.`id`
              WHERE `status` = $status

               ";


        return $this->db->query($query);
    }
    public function getPenerima($id)
    {
        return $this->db->get_where('data_usulan', ['id' => $id])->row_array();
    }
    public function getPenerimaDetail($id)
    {
        $this->db->select('*');
        $this->db->from('data_usulan');
        $this->db->join('t_kecamatan', 't_kecamatan.id = data_usulan.id_kecamatan', 'LEFT');
        $this->db->join('t_desa', 't_desa.id = data_usulan.id_desa', 'LEFT');

        $this->db->join('t_jbantuan', 't_jbantuan.id = data_usulan.id_jbantuan', 'LEFT');

        $this->db->where('data_usulan.id', $id);
        $this->db->order_by('id_jbantuan', 'DESC');

        return  $this->db->get();
    }
    public function detailValidasi($id)
    {


        //  $this->db->select('*');
        //  $this->db->from('data_usulan');
        //  $this->db->join( 't_kecamatan','t_kecamatan.id = data_usulan.id_kecamatan','LEFT');

        // $this->db->join( 't_jbantuan','t_jbantuan.id = data_usulan.id_jbantuan','LEFT');
        //  $this->db->join( 't_tahun','t_tahun.id = data_usulan.id_tahun','LEFT');
        //  $this->db->where('status',$status);
        // $this->db->where('id_tahun');
        // $this->db->order_by('id_jbantuan','DESC');

        $query = "SELECT `data_usulan`.*, `t_kecamatan`.`kecamatan`,`t_jbantuan`.`jenis_bantuan`,`t_tahun`.`tahun`
                ,`user`.`nama`,`t_desa`.`desa`
                FROM `data_usulan` 
               JOIN `t_kecamatan` 
                ON `data_usulan`.`id_kecamatan` = `t_kecamatan`.`id`
                JOIN `t_jbantuan`
               ON `data_usulan`.`id_jbantuan` = `t_jbantuan`.`id`
              JOIN `t_tahun`
               ON `data_usulan`.`id_tahun` = `t_tahun`.`id`
               JOIN `user`
               ON `data_usulan`.`id_user` = `user`.`id`
               JOIN `t_desa`
               ON `data_usulan`.`id_desa` = `t_desa`.`id`
              WHERE `data_usulan`.`id` = $id

               ";


        return $this->db->query($query);
    }
}
