<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _Tes extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Test_model','tes');
    }
    public function index()
    {
        $data['title'] = 'Halaman Laporan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       

         $data['semua'] = $this->tes->get()->result_array();


        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('_tes/index', $data);
        $this->load->view('templates/footer_user');
        
    }
    public function tambah()
    {
        $data['title'] = 'Halaman Laporan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['buku'] = $this->db->get('penerima')->result_array();


        $this->form_validation->set_rules('nama','Nama AHaru','required');
     

        if($this->form_validation->run() == false)
        { 
                    $this->load->view('templates/header_user', $data);
                    $this->load->view('templates/sidebar_user', $data);
                    $this->load->view('templates/topbar_user', $data);
                    $this->load->view('_tes/tambah', $data);
                    $this->load->view('templates/footer_user');

        }else
        {
            $nama = $this->input->post('nama');
            $id_buku = $this->input->post('id_buku');
            $jumlah = $this->input->post('jumlah');

            $data = [
                'buku_id' => $id_buku,
                'nama' => $nama,
                'jumlah' => $jumlah,
               

            ];
            $this->db->insert('peminjaman', $data);

            redirect('tes');
        }
    }
    public function ubah($id)
    {

        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>

        $this->session->userdata('username')])->row_array();

        $data['buku'] = $this->db->get('penerima')->result_array();

        $data['semua'] = $this->tes->getDatas($id);

        

        $this->form_validation->set_rules('nama','Nama AHaru','required');
     

        if($this->form_validation->run() == false)
        { 
                    $this->load->view('templates/header_user', $data);
                    $this->load->view('templates/sidebar_user', $data);
                    $this->load->view('templates/topbar_user', $data);
                    $this->load->view('tes/ubah', $data);
                    $this->load->view('templates/footer_user');

        }else
        {


            $nama = $this->input->post('nama');
            $id_buku = $this->input->post('buku_id');
            $jumlah = $this->input->post('jumlah');
            $jumlah_kembali = $this->input->post('jumlah_kembali');

            $data = [
                'buku_id' => $id_buku,
                'nama' => $nama,
                'jumlah' => $jumlah,
                'jumlah_kembali' => $jumlah_kembali,
                

            ];
        
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('peminjaman', $data);

            redirect('tes');

        }
    }
    public function detail($id)
    {
        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['semua'] = $this->tes->getDatas($id);
        $data['buku'] = $this->db->get('penerima')->result_array();

        $this->form_validation->set_rules('jumlah_kembali','Nama AHaru','required');
        if($this->form_validation->run() == false)
        {        
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('_tes/detail', $data);
            $this->load->view('templates/footer_user');

        }
        else
        {
            $nama = $this->input->post('nama');
            $id_buku = $this->input->post('buku_id');
            $jumlah = $this->input->post('jumlah');
            $jumlah_kembali = $this->input->post('jumlah_kembali');

            $data = [
                'buku_id' => $id_buku,
                'nama' => $nama,
                'jumlah' => $jumlah,
                'jumlah_kembali' => $jumlah_kembali,
                

            ];
        
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('peminjaman', $data);

            redirect('_tes');

        }
    }
    
}