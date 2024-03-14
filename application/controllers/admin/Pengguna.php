<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller 
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
        $data['title'] = 'Halaman Management';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->model('Management_model','management');

        $data['nama'] = $this->management->getManagement();
        
        $data['user_role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('role_id','Role','required');
        
        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
         //   $this->load->view('templates/topbar', $data);
            $this->load->view('admin/management/index', $data);
            $this->load->view('templates/footer');
        }else{
            
            $data = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role_id' => $this->input->post('role_id'),

            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
            </div>');
            redirect('admin/management');
        }
        
    }
    public function hapus($id)
    {
        $this->load->model('Management_model','management');

        $data['nama'] = $this->management->hapusData($id);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Hapus Data Berhasil
            </div>');
            redirect('admin/management');
    }
   public function ubah($id)
   {
       
        $data['title'] = 'Halaman Edit';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['user_role'] = $this->db->get('user_role')->result_array();

        $this->load->model('Management_model','management');

        $data['user'] = $this->management->getUserById($id);
        
        

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('role_id','Role','required');

        if($this->form_validation->run() == false)
        {
        $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
      //      $this->load->view('templates/topbar', $data);
            $this->load->view('admin/management/ubah', $data);
            $this->load->view('templates/footer');
        }else{
            $data = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role_id' => $this->input->post('role_id'),

            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('user', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Ubah Data Berhasil
            </div>');
            redirect('admin/management');
        }

   }
   public function tambah()
   {
        $data['title'] = 'Halaman tambah';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['user_role'] = $this->db->get('user_role')->result_array();

        $this->load->model('Management_model','management');

        $data['tes'] = $this->management->getManagement();
        
        

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('role_id','Role','required');

        if($this->form_validation->run() == false)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
         // $this->load->view('templates/topbar', $data);
            $this->load->view('admin/management/tambah', $data);
            $this->load->view('templates/footer');
        }else
        {
            $data = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'role_id' => $this->input->post('role_id'),

            ];
            
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
            </div>');
            redirect('admin/management');
        }
   }
   


    
}
