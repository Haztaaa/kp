<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barat extends CI_Controller 
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
        $this->load->library('pagination');

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['bantuan'] = $this->db->get('data_usulan')->result_array();
        
        //ambil data
        if($this->input->post('submit'))
        {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        }else{
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('pekerjaan', $data['keyword']);
        $this->db->or_like('tahun', $data['keyword']);
        
        $this->db->or_like('alamat', $data['keyword']);
        $this->db->from('data_usulan');
        $config['base_url'] = 'http://localhost/kp/barat/index';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;
        
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-end">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['first_link'] ='First';
        $config['first_tag_open'] ='<li class="page-item">';
        $config['first_tag_close'] ='</li>';

        $config['last_link'] ='Last';
        $config['last_tag_open'] ='<li class="page-item">';
        $config['last_tag_close'] ='</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] ='<li class="page-item">';
        $config['next_tag_close'] ='</li>';

        $config['prev_link'] ='&laquo';
        $config['prev_tag_open'] ='<li class="page-item">';
        $config['prev_tag_close'] ='</li>';
        
        $config['cur_tag_open'] ='<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] ='</a></li>';
        
        $config['num_tag_open'] ='<li class="page-item">';
        $config['num_tag_close'] ='</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['penerima'] = $this->data->getKecamatan(5,0);
        $data['penerima'] = $this->data->getUsulan($config['per_page'], $data['start'], $data['keyword']);
        

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('barat/index', $data);
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
        $this->load->view('barat/detail', $data);
        $this->load->view('templates/footer');
        
    }
    public function tambah(){
        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['jenis_bantuan'] = $this->db->get('data_usulan')->result_array();

        $this->form_validation->set_rules('nik','Nik','required');
        $this->form_validation->set_rules('tahun','Nik','required');
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_hp','No HP','required');
        $this->form_validation->set_rules('pekerjaan','Pekerjaan','required');

        if($this->form_validation->run() == false)
        {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barat/tambah', $data);
            $this->load->view('templates/footer');


        }else
        {
            $nik = $this->input->post('nik');
            $tahun = $this->input->post('tahun');
            $nama =$this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');
            $pekerjaan = $this->input->post('pekerjaan');
            $jenis_bantuan = $this->input->post('jenis_bantuan');
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


            $data = [
                'nik' => $nik,
                'tahun' => $tahun,
                'nama' => $nama,
                'alamat' => $alamat,
                'no_hp' => $no_hp,
                'pekerjaan' => $pekerjaan,
                'jenis_bantuan' => $jenis_bantuan,
                'gambar_rumah' => $gambar_rumah

            ];
            $this->db->insert('data_usulan', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
            </div>');
            redirect('barat');
        }
    }
    public function ubah($id)
    {

        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>

        $this->session->userdata('username')])->row_array();

        $this->load->model('Data_model','data');
        $data['penerima'] = $this->data->getPenerima($id);
        

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
            $this->load->view('barat/ubah', $data);
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
                    
                    delete_files('./assets/img/rumah/'.$gambar_lama);
                }
            }

            $data = [
                'nik' => $this->input->post('nik'),
                'tahun' => $this->input->post('tahun'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'jenis_bantuan' => $this->input->post('jenis_bantuan'),
            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('data_usulan', $data);

            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Ubah Data Berhasil
            </div>');
            redirect('barat');
        }
    }
    
    
    
}