<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kecamatan extends CI_Controller 
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
       
        
        $data['kecamatan'] = $this->db->get('t_kecamatan')->result_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
      //  $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kecamatan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

        $this->form_validation->set_rules('kecamatan','Kecamatan','required');

        
        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
           // $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kecamatan/tambah', $data);
            $this->load->view('templates/footer');

        }else
        {
            $data = [
                'kecamatan' => $this->input->post('kecamatan'),

            ];
            $this->db->insert('t_kecamatan', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
            </div>');
            redirect('admin/data_kecamatan');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

       $data['data'] = $this->db->get_where('t_kecamatan',['id' =>$id])->row_array();

       $this->form_validation->set_rules('kecamatan','Kecamatan','required');

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
           // $this->load->view('templates/topbar', $data);
            $this->load->view('admin/kecamatan/ubah', $data);
            $this->load->view('templates/footer');

        }else
        {
            $data = [
                'kecamatan' => $this->input->post('kecamatan'),

            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('t_kecamatan', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Ubah Data Berhasil
            </div>');
            redirect('admin/data_kecamatan');
        }
    }
    public function hapus($id)
    {
        
        $this->db->where('id', $id);
        $this->db->delete('t_kecamatan');
    
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Hapus Data Berhasil
            </div>');
            redirect('admin/data_kecamatan');
    }
}