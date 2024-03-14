<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jbantuan extends CI_Controller 
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

        $data['title'] = 'Halaman Jenis bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       
        date_default_timezone_set('Asia/Makassar');
        $tahun_sekarang = date('Y');
        
        $data['jenis_bantuan'] = $this->db->query("SELECT * FROM t_jbantuan WHERE tahun_jb = $tahun_sekarang ")->result_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
      //  $this->load->view('templates/topbar', $data);
        $this->load->view('admin/jenisbantuan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Halaman tambah data';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

        $this->form_validation->set_rules('jenis_bantuan','Jenis Bantuan','required');

        

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
          //  $this->load->view('templates/topbar', $data);
            $this->load->view('admin/jenisbantuan/tambah', $data);
            $this->load->view('templates/footer');

        }else
        {
            $data = [
                'jenis_bantuan' => $this->input->post('jenis_bantuan'),
                'kuota' => $this->input->post('kuota'),
                'tahun_jb' => $this->input->post('tahun'),

            ];
            $this->db->insert('t_jbantuan', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
            </div>');
            redirect('admin/data_jbantuan');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Ubah Data';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

       $data['data'] = $this->db->get_where('t_jbantuan',['id' =>$id])->row_array();
        
       $this->form_validation->set_rules('jenis_bantuan','Jenis Bantuan','required');


        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
          //  $this->load->view('templates/topbar', $data);
            $this->load->view('admin/jenisbantuan/ubah', $data);
            $this->load->view('templates/footer');

        }else
        {
            $data = [
                'jenis_bantuan' => $this->input->post('jenis_bantuan'),
                'kuota' => $this->input->post('kuota'),

            ];

            $this->db->where('id',$this->input->post('id'));
            $this->db->update('t_jbantuan', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Ubah Data Berhasil
            </div>');
            redirect('admin/data_jbantuan');
        }
    }
}