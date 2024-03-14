<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('role_id') == 2){
            redirect('user/dashboard');
        }
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       
        
        $data['tahun'] = $this->db->get('t_tahun')->result_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
      //  $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tahun/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

       
        $this->form_validation->set_rules('tahun','Jenis Bantuan','required');

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
       //     $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tahun/tambah', $data);
            $this->load->view('templates/footer');

        }else
        {
            $data = [
                'tahun' => $this->input->post('tahun'),

            ];
            $this->db->insert('t_tahun', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
            </div>');
            redirect('admin/tahun');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Ubah Data';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       
        $data['data'] = $this->db->get_where('t_tahun', ['id' =>$id])->row_array();
       
        $this->form_validation->set_rules('tahun','Tahun','required');

        

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
       //     $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tahun/ubah', $data);
            $this->load->view('templates/footer');

        }else
        {
            $data = [
                'tahun' => $this->input->post('tahun'),

            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('t_tahun', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Ubah Data Berhasil
            </div>');
            redirect('admin/tahun');
        }
    }
}