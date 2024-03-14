<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bst extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Bst_model');
    }
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        
        $data['tes'] = $this->Bst_model->get()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/penerima/bst/index', $data);
        $this->load->view('templates/footer');
        
    }
}