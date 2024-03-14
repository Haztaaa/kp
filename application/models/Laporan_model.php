<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function getTahun($id)
    {
        $this->db->select('*');
        $this->db->from('data_usulan');
        $this->db->join( 't_kecamatan','t_kecamatan.id = data_usulan.id_kecamatan','LEFT');
        $this->db->join( 't_desa','t_desa.id = data_usulan.id_desa','LEFT');
        $this->db->join( 't_jbantuan','t_jbantuan.id = data_usulan.id_jbantuan','LEFT');
        $this->db->join( 't_tahun','t_tahun.id = data_usulan.id_tahun','LEFT');
        $this->db->where('id_tahun',$id);
        $this->db->order_by('id_jbantuan','DESC');

        return  $this->db->get();
        
    }
    public function terima($id_tahun = null)
    {
        if($id_tahun == null)
        {
            
            $terima = 1;
            $this->db->select('a.*, t_kecamatan.kecamatan, t_desa.desa, t_jbantuan.jenis_bantuan, t_tahun.tahun');
            $this->db->from('data_usulan as a');
            $this->db->join( 't_kecamatan','t_kecamatan.id = a.id_kecamatan','LEFT');
            $this->db->join( 't_desa','t_desa.id = a.id_desa','LEFT');
            $this->db->join( 't_jbantuan','t_jbantuan.id = a.id_jbantuan','LEFT');
            $this->db->join( 't_tahun','t_tahun.id = a.id_tahun','LEFT');
           $this->db->where('status',$terima);
            $this->db->order_by('a.id_jbantuan','ASC');
            $this->db->order_by('a.id_kecamatan','ASC');
            
            
        }else{
            $terima = 1;
            $this->db->select('*');
            $this->db->from('data_usulan as a');
            $this->db->join( 't_desa','t_desa.id = a.id_desa','LEFT');
            $this->db->join( 't_kecamatan','t_kecamatan.id = a.id_kecamatan','LEFT');
            $this->db->join( 't_jbantuan','t_jbantuan.id =a.id_jbantuan','LEFT');
            $this->db->join( 't_tahun','t_tahun.id = a.id_tahun','LEFT');
             $this->db->where('id_tahun',$id_tahun);
             $this->db->where('status',$terima);
             $this->db->order_by('a.id_kecamatan','ASC');
             $this->db->order_by('a.id_tahun','ASC');
             $this->db->order_by('a.id_jbantuan','ASC');
        }
        
        return  $this->db->get();
    }
    public function tolak($id_tahun = null)
    {
        if($id_tahun == null)
        {
            $terima = 2;
            $this->db->select('*');
            $this->db->from('data_usulan as a');
            $this->db->join( 't_kecamatan','t_kecamatan.id = a.id_kecamatan','LEFT');
            $this->db->join( 't_desa','t_desa.id = a.id_desa','LEFT');
            $this->db->join( 't_jbantuan','t_jbantuan.id = a.id_jbantuan','LEFT');
            $this->db->join( 't_tahun','t_tahun.id = a.id_tahun','LEFT');
           $this->db->where('status',$terima);
            $this->db->order_by('a.id_jbantuan','ASC');
            $this->db->order_by('a.id_kecamatan','ASC');
            
            
        }else{
            $terima = 2;
            $this->db->select('*');
            $this->db->from('data_usulan as a');
            $this->db->join( 't_desa','t_desa.id = a.id_desa','LEFT');
            $this->db->join( 't_kecamatan','t_kecamatan.id = a.id_kecamatan','LEFT');
            $this->db->join( 't_jbantuan','t_jbantuan.id =a.id_jbantuan','LEFT');
            $this->db->join( 't_tahun','t_tahun.id = a.id_tahun','LEFT');
             $this->db->where('id_tahun',$id_tahun);
             $this->db->where('status',$terima);
             $this->db->order_by('a.id_kecamatan','ASC');
             $this->db->order_by('a.id_tahun','ASC');
             $this->db->order_by('a.id_jbantuan','ASC');
        }
        
        return  $this->db->get();
    }
}