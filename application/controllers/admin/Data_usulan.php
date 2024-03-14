<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_usulan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
        
    }

    public function index()
    {
        

        $data['title'] = 'Halaman Data Usulan Bantuan';

        $this->load->model('Data_model','data');
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();


        $data['bantuan'] = $this->db->get('data_usulan')->result_array();
         
        $data['total'] = $this->data->getJbantuan()->result();

        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dataUsulan/index', $data);
        $this->load->view('templates/footer');
        
    }
    public function detail($id)
    {
        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->model('Data_model','data');
        $data['penerima'] = $this->data->getPenerima($id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/dataUsulan/detail', $data);
        $this->load->view('templates/footer');
        
    }
    public function tambah(){
        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['jenis_bantuan'] = $this->db->get('t_jbantuan')->result_array();
        $data['kecamatan'] = $this->db->get('t_kecamatan')->result_array();
        $data['tahun'] = $this->db->get('t_tahun')->result_array();
      


        $this->form_validation->set_rules('nik','Nik','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_hp','No HP','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');

        if($this->form_validation->run() == false)
        {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/dataUsulan/tambah', $data);
            $this->load->view('templates/footer');


        }else
        {
            $id_kecamatan = $this->input->post('id_kecamatan');
            $id_jbantuan = $this->input->post('id_jbantuan');
            $id_tahun = $this->input->post('id_tahun');
            $nik = $this->input->post('nik');
            $nama =$this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');
            $pekerjaan = $this->input->post('pekerjaan');
            $status = $this->input->post('status');
            $gambar_rumah = $_FILES['gambar_rumah'];



            if($foto='')
            {

            }else
            {
                $config['upload_path'] = './assets/img/rumah';
                $config['allowed_types'] = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar_rumah'))
                {
                    echo "Gagal";
                }else
                {
                    $gambar_rumah = $this->upload->data('file_name');
                }
            }

            $sql = $this->db->query("SELECT nik FROM data_usulan where nik ='$nik'");
            $sql1 = $this->db->query("SELECT status FROM data_usulan where status ='$status'");
            $cek_nik = $sql->num_rows();
            $cek_status = $sql1->num_rows();
            if ($cek_nik > 0 && $cek_status >0 ) {
                $data = [
                    'id_kecamatan' => $id_kecamatan,
                    'id_jbantuan' => $id_jbantuan,
                    'id_tahun' => $id_tahun,
                    'nik' => $nik,
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'no_hp' => $no_hp,
                    'pekerjaan' => $pekerjaan,
                    'gambar_rumah' => $gambar_rumah
    
                ];
                $this->db->insert('data_usulan', $data);
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
                </div>');
                redirect('user/data_usulan');

                        }else if($cek_nik > 0)
                        {
                            
                            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Sudah pernah di tambahkan sebelumnya
                </div>');
               redirect('user/data_usulan');
                }
                else{
                    $data = [
                        'id_kecamatan' => $id_kecamatan,
                        'id_jbantuan' => $id_jbantuan,
                        'id_tahun' => $id_tahun,
                        'nik' => $nik,
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'no_hp' => $no_hp,
                        'pekerjaan' => $pekerjaan,
                        'gambar_rumah' => $gambar_rumah
        
                    ];
                    $this->db->insert('data_usulan', $data);
                    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
                    </div>');
                    redirect('user/data_usulan');
                }
        }
    }
    public function ubah($id)
    {

        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>

        $this->session->userdata('username')])->row_array();

        $this->load->model('Data_model','data');
        $data['penerima'] = $this->data->getPenerima($id);
        
        $data['jenis_bantuan'] = $this->db->get('t_jbantuan')->result_array();
        $data['kecamatan'] = $this->db->get('t_kecamatan')->result_array();
        $data['tahun'] = $this->db->get('t_tahun')->result_array();
        
        $this->form_validation->set_rules('nik','Nama','required');
        $this->form_validation->set_rules('tahun','Username','required');
        $this->form_validation->set_rules('nama','Password','required');
        $this->form_validation->set_rules('alamat','Role','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
        if($this->form_validation->run() == false)
        {
        $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/dataUsulan/ubah', $data);
            $this->load->view('templates/footer');
        }else{


           
            $uploadg = $_FILES['gambar_rumah']['name'];
            $gambar_lama = $this->input->post('gambar_lama');
           

           

            if($uploadg)
            {
                $config['upload_path'] = './assets/img/rumah';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5048';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('gambar_rumah'))
                {
                    
                    echo $this->upload->display_errors();
                    
                }else
                {
                    
                    $new_gambar = $this->upload->data('file_name');
                    $this->db->set('gambar_rumah', $new_gambar);
                    
                    unlink('./assets/img/rumah/'.$gambar_lama);
                }
            }

            $data = [
                'id_kecamatan' => $this->input->post('id_kecamatan'),
                'id_kecamatan' => $this->input->post('id_jbantuan'),
                'nik' => $this->input->post('nik'),
                'tahun' => $this->input->post('tahun'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('data_usulan', $data);

            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Ubah Data Berhasil
            </div>');
            redirect('admin/data_usulan');
        }
        
    }
    
    
    
}