<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_desa extends CI_Controller 
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
        $data['title'] = 'Halaman master data Desa';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       
        $this->load->model('Desa_model','desa',TRUE);
        $data['desa'] = $this->desa->getData()->result_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
       // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/desa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       
        $this->form_validation->set_rules('desa','Kecamatan','required');

       
        $data['kecamatan'] = $this->db->get('t_kecamatan')->result_array();

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
          //  $this->load->view('templates/topbar', $data);
            $this->load->view('admin/desa/tambah', $data);
            $this->load->view('templates/footer');

        }else
        {
            $data = [
                'id_kecamatan' => $this->input->post('id_kecamatan'),
                'desa' => $this->input->post('desa'),
            ];
            $this->db->insert('t_desa', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
            </div>');
            redirect('admin/data_desa');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

       $data['data'] = $this->db->get_where('t_desa',['id' => $id])->row_array();
        $data['kecamatan'] = $this->db->get('t_kecamatan')->result_array();

        $this->form_validation->set_rules('desa','Kecamatan','required');

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
          //  $this->load->view('templates/topbar', $data);
            $this->load->view('admin/desa/ubah', $data);
            $this->load->view('templates/footer');

        }else
        {
            $data = [
                'id_kecamatan' => $this->input->post('id_kecamatan'),
                'desa' => $this->input->post('desa'),

            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('t_desa', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Ubah Data Berhasil
            </div>');
            redirect('admin/data_desa');
        }
    }
}