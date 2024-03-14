<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 
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

        $data['tahun'] = $this->db->get('t_tahun')->result_array();


        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/laporan/index', $data);
        $this->load->view('templates/footer_user');
        
    }
    public function tahun($id)
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

       $this->load->model('Laporan_model','laporan');
        $data['data'] = $this->laporan->getTahun($id)->result();
        
      

       // $data['usulan'] = $this->db->get_where('data_usulan',['id_tahun' =>$id])->result();

       $this->load->view('templates/header_user', $data);
       $this->load->view('templates/sidebar_user', $data);
       $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/laporan/tahun', $data);
        $this->load->view('templates/footer_user');
    }
    public function print($id)
    {
        $data['title'] = 'Laporan Usulan Tahunan';
        $data['tahun'] = $this->db->get_where('t_tahun',['id' => $id])->row_array();
        $id_tahun = $this->input->get('id_tahun');
        $this->load->model('Laporan_model','laporan');
        $data['semua'] = $this->laporan->getTahun($id)->result_array();

        $this->load->view('templates/printheader', $data);
        $this->load->view('user/laporan/print', $data);
    }
    
}