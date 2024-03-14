<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerima extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Penerima_model','penerima');
        if($this->session->userdata('role_id') == 1){
            redirect('admin/dashboard');
        }
    }
    
    public function index()
    {
        $data['title'] = 'Halaman penerima';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $id_kecamatan = $this->input->post('kecamatan');
        
        $id_desa = $this->input->post('desa');
        
        // var_dump($id_desa);
        // die;

        $data['total'] = $this->penerima->get($id_kecamatan, $id_desa)->result();

        

       // $data['total'] = $this->penerima->get()->result();
        $data['kecamatan'] = $this->penerima->getKecamatan()->result_array();
       

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/penerima/index', $data);
        $this->load->view('templates/footer_user', $data);
    }
  
    public function getkecamatan()
    {
        $idkec = $this->input->post('id_tes'); 
        $data = $this->penerima->ambilDesa($idkec);
        $output = '<option value="">Pilih Desa</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '"> '.$row->desa.'</option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
    public function export($id)
    {
        $data['title'] = 'laporan';
      

        $data['semua'] = $this->penerima->getexcel($id)->result();

        
        $this->load->view('user/penerima/excel', $data);
    }
    public function detail($id)
    {
        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->model('Dashboard_model','dashboard');
        $data['penerima'] = $this->dashboard->getPenerimaDetail($id)->row_array();
        
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/penerima/detail', $data);
        $this->load->view('templates/footer_user');
        
    }
    public function tahun()
    {  
        $data['title'] = 'Halaman Ekspor';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['tahun'] = $this->db->get('t_tahun')->result_array();

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/penerima/tahunan', $data);
        $this->load->view('templates/footer_user');
    }
}