<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if($this->session->userdata('role_id') == 1){
            redirect('admin/dashboard');
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

        $this->load->model('Dashboard_model','dashboard');
        $data['usulan'] = $this->dashboard->totalUsulan();
      //  $data['pengguna'] = $this->dashboard->totalPengguna();

      
        $data['usulan'] = $this->dashboard->totalStatusTolak();
        $data['usulan1'] = $this->dashboard->totalStatusTerima();
        $data['usulan2'] = $this->dashboard->totalStatusPending();
        $data['tahun'] = $this->db->get('t_tahun')->result_array();

        $data['tuser'] = $this->dashboard->totalUsulanUser();



        $data['total'] = $this->dashboard->getData()->result();

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/dashboard/index', $data);
        $this->load->view('templates/footer_user');
        
    }
    public function laporan($id)
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

       $this->load->model('Dashboard_model','dashboard');
        $data['data'] = $this->dashboard->getTahun($id)->result();
        
       // $data['usulan'] = $this->db->get_where('data_usulan',['id_tahun' =>$id])->result();

       

       

        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboard/laporan', $data);
        $this->load->view('templates/footer');
    }
}