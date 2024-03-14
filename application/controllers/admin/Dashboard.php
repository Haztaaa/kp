<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
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
       

        $this->load->model('Dashboard_model','dashboard');
        $data['usulan'] = $this->dashboard->totalUsulan();
        $data['tahun_ini'] = $this->dashboard->tahunIni();
        $data['kecamatan'] = $this->dashboard->totalKecamatan();
        $data['jb'] = $this->dashboard->totalJb();
        $data['status'] = $this->dashboard->totalStatusPendingAdmin();
        $data['status_tolak'] = $this->dashboard->totalStatusTolakAdmin();
        $data['status_terima'] = $this->dashboard->totalStatusTerimaAdmin();
        $data['tahun'] = $this->db->get('t_tahun')->result_array();

        

        $this->load->view('templates/header', $data);
        //$this->load->view('templates/topbartes', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('templates/footer');
        
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
        //$this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboard/laporan', $data);
        $this->load->view('templates/footer');
    }
    public function validasi()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       
        $this->load->model('Dashboard_model','dashboard');
        $data['data'] = $this->dashboard->getDataValidasi()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
       // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboard/validasi', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->model('Dashboard_model','dashboard');
        $data['penerima'] = $this->dashboard->detailValidasi($id)->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
       // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboard/detail', $data);
        $this->load->view('templates/footer');
        
    }
    public function terima($id)
    {   
        date_default_timezone_set('Asia/Makassar');
        $jb = $this->input->post('id_jbantuan');
        $pen_tahun = $this->input->post('id_tahun');
        $tahun_sekarang =  date('Y');

        $cek_penerima = $this->db->query("SELECT id_tahun,id_jbantuan,status FROM data_usulan JOIN t_tahun ON data_usulan.id_tahun = t_tahun.id WHERE id_jbantuan = '$jb' AND status = '1' AND tahun ='$tahun_sekarang' and id_tahun ='$pen_tahun'");
        $cek_k = $cek_penerima->num_rows();
       // $cek_tahun = $this->db->query("SELECT id_tahun,b.tahun FROM data_usulan as a JOIN t_tahun as b ON a.id_tahun = b.id WHERE tahun = '$tahun_sekarang'")->row_array();
        
        //$cek_tahun = $this->db->query("SELECT id_tahun,b.tahun,status FROM data_usulan as a JOIN t_tahun as b ON a.id_tahun = b.id WHERE tahun = '$tahun_sekarang' and status ='1'")->row_array()['tahun'];

        $cek_kuota = $this->db->query("SELECT id,kuota FROM t_jbantuan WHERE id = '$jb' ")->row_array()['kuota'];
        
        // var_dump($cek_k);
        // die;

       if($cek_k >= $cek_kuota )
       {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Jenis Bantuan Telah Mencapai Kuota Yang Ada!!
            </div>');
            redirect('admin/dashboard/validasi');
       }else 
       {
        $data = [
            'status' => $this->input->post('terima'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_usulan', $data);
        
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil
            </div>');
            redirect('admin/dashboard/validasi');
       }

        

        
    }
    public function tolak($id)
    {
        
        $data = [
            'status' => $this->input->post('tolak'),
            'komentar' => $this->input->post('komentar'),
        ];

       //var_dump($data);
       // die;

       
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_usulan', $data);
        
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil
            </div>');
            redirect('admin/dashboard/validasi');
    }
    public function hapus()
    {
        
       //var_dump($data);
       // die;
      
       
        $this->db->where('id', $this->input->post('id'));
        $this->db->delete('data_usulan');
        
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil
            </div>');
            redirect('admin/dashboard/validasi');
    }
    public function viewterima()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       
        $this->load->model('Dashboard_model','dashboard');
        $data['data'] = $this->dashboard->getDataTerima()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
       // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboard/terima', $data);
        $this->load->view('templates/footer');
    }
    public function viewtolak()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
       
        $this->load->model('Dashboard_model','dashboard');
        $data['data'] = $this->dashboard->getDataTolak()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
       // $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dashboard/terima', $data);
        $this->load->view('templates/footer');
    }
}