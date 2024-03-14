<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporantol extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Laporan_model');
        if($this->session->userdata('role_id') == 1){
            redirect('admin/dashboard');
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman Laporan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();


        
        $id_tahun = $this->input->get('id_tahun');
        $data['semua'] = $this->Laporan_model->tolak($id_tahun)->result_array();
        
        $data['tahun1'] = $this->db->get_where('t_tahun',['id' => $id_tahun])->row_array();
        //var_dump($tahun);
        //die;
        

         $data['tahun'] = $this->db->get('t_tahun')->result_array();


        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/laporan/indextol', $data);
        $this->load->view('templates/footer_user');
        
    }
    
}