<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpnt extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        
        $this->load->model('Data_model','data');
        $data['total'] = $this->data->getJbantuan()->result_array();
      // $data['total'] = $this->db->get('data_usulan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/penerima/bpnt/index', $data);
        $this->load->view('templates/footer');
        
    }
}