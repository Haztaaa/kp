<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
        
    }

    public function index()
    {
        $data['title'] = 'Halaman Tidak Ditemukan';
        $this->load->view('templates/header_user', $data);
        $this->load->view('404/index');
        $this->load->view('templates/footer_user');
    }
}