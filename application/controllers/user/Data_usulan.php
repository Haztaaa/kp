<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_usulan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        is_logged_in();
        if ($this->session->userdata('role_id') == 1) {
            redirect('admin/dashboard');
        }
    }

    public function index()
    {


        $data['title'] = 'Halaman Data Usulan Bantuan';

        $this->load->model('Data_model', 'data');
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();


        $data['bantuan'] = $this->db->get('data_usulan')->result_array();

        $data['total'] = $this->data->getDataUsulan()->result();


        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/dataUsulan/index', $data);
        $this->load->view('templates/footer_user');
    }
    public function detail($id)
    {
        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->model('Dashboard_model', 'dashboard');
        $data['penerima'] = $this->dashboard->getPenerimaDetail($id)->row_array();

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar_user', $data);
        $this->load->view('templates/topbar_user', $data);
        $this->load->view('user/dataUsulan/detail', $data);
        $this->load->view('templates/footer_user');
    }
    public function tambah()
    {
        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        date_default_timezone_set('Asia/Makassar');
        $tahun_sekarang = date('Y'); // tahun sekarang

        $data['jenis_bantuan'] = $this->db->query("SELECT * FROM t_jbantuan WHERE tahun_jb = $tahun_sekarang ")->result_array();
        $data['kecamatan'] = $this->db->get('t_kecamatan')->result_array();
        $data['tahun'] = $this->db->get('t_tahun')->result_array();



        $this->form_validation->set_rules('nik', 'Nik', 'trim|integer|required|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('nama_usulan', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'trim|integer|required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');



        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('user/dataUsulan/tambah', $data);
            $this->load->view('templates/footer_user');
        } else {
            $id_kecamatan = $this->input->post('id_kecamatan');
            $id_desa =  $this->input->post('desa');
            $id_jbantuan = $this->input->post('id_jbantuan');
            $id_tahun = $this->input->post('id_tahun');
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama_usulan');
            $alamat = $this->input->post('alamat');
            $no_hp = $this->input->post('no_hp');
            $pekerjaan = $this->input->post('pekerjaan');
            $nama_pengusul = $this->input->post('id_user');
            $penghasilan = $this->input->post('penghasilan');
            $status = $this->input->post('status');

            $gambar_rumah = $_FILES['gambar_rumah'];
            $gambar_ktp = $_FILES['gambar_ktp'];
            $gambar_kk = $_FILES['gambar_kk'];
            $gambar_sk = $_FILES['gambar_sk'];

            if ($foto = '') {
            } else {
                $config['upload_path'] = './assets/img/rumah';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '5048';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar_rumah')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ukuran Gambar Terlalu Besar
                    </div>');
                    redirect('user/data_usulan/tambah');
                } else {

                    $gambar_rumah = $this->upload->data('file_name');
                }
                // file 2
                if (!$this->upload->do_upload('gambar_ktp')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ukuran Gambar Terlalu Besar
                    </div>');
                    redirect('user/data_usulan/tambah');
                } else {
                    $gambar_ktp = $this->upload->data('file_name');
                }
                // file 3
                if (!$this->upload->do_upload('gambar_kk')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ukuran Gambar Terlalu Besar
                    </div>');
                    redirect('user/data_usulan/tambah');
                } else {
                    $gambar_kk = $this->upload->data('file_name');
                }
                // file 4
                if (!$this->upload->do_upload('gambar_sk')) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ukuran Gambar Terlalu Besar
                    </div>');
                    redirect('user/data_usulan/tambah');
                } else {
                    $gambar_sk = $this->upload->data('file_name');
                }
            }

            // var_dump($gambar_ktp);
            // die;

            $sql = $this->db->query("SELECT * FROM data_usulan  where status <> '$status' and nik ='$nik' ");
            $cek_nik = $sql->num_rows();

            $sql2 = $this->db->query("SELECT * FROM data_usulan where nik ='$nik'  and id_tahun = '$id_tahun' and id_jbantuan = '$id_jbantuan'");
            $cek_tahun = $sql2->num_rows();

            // var_dump($cek_tahun);
            // die;

            if ($cek_nik > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Pernah Ditambahkan!!  Tolong Dicek Kembali
                     </div>');
                redirect('user/data_usulan/tambah');
            } else if ($cek_tahun > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Pernah Ditambahkan!! Tolong Dicek Kembali
                </div>');
                redirect('user/data_usulan/tambah');
            } else {

                $data = [
                    'id_kecamatan' => $id_kecamatan,
                    'id_desa' => $id_desa,
                    'id_jbantuan' => $id_jbantuan,
                    'id_tahun' => $id_tahun,
                    'nik' => $nik,
                    'nama_usulan' => $nama,
                    'alamat' => $alamat,
                    'no_hp' => $no_hp,
                    'pekerjaan' => $pekerjaan,
                    'penghasilan' => $penghasilan,
                    'id_user' => $nama_pengusul,
                    'gambar_rumah' => $gambar_rumah,
                    'gambar_ktp' => $gambar_ktp,
                    'gambar_kk' => $gambar_kk,
                    'gambar_sk' => $gambar_sk

                ];
                $this->db->insert('data_usulan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data Berhasil
                    </div>');
                redirect('user/data_usulan');
            }
        }
    }
    public function getdesa()
    {
        $this->load->model('Data_model', 'data');

        $idkec = $this->input->post('id');
        $data = $this->data->ambilDesa($idkec);
        $output = '<option value="">Pilih Desa</option>';
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '"> ' . $row->desa . '</option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
    public function ubah($id)
    {

        $data['title'] = 'Halaman Detail Data Usulan Bantuan';
        $data['user'] = $this->db->get_where('user', ['username' =>

        $this->session->userdata('username')])->row_array();

        $this->load->model('Data_model', 'data');
        $data['penerima'] = $this->data->getPenerima($id);

        $data['jenis_bantuan'] = $this->db->get('t_jbantuan')->result_array();
        $data['kecamatan'] = $this->db->get('t_kecamatan')->result_array();
        $data['tahun'] = $this->db->get('t_tahun')->result_array();
        $data['desa'] = $this->db->get('t_desa')->result_array();

        $this->form_validation->set_rules('nik', 'Nama', 'required');

        $this->form_validation->set_rules('nama_usulan', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Role', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar_user', $data);
            $this->load->view('templates/topbar_user', $data);
            $this->load->view('user/dataUsulan/ubah', $data);
            $this->load->view('templates/footer_user', $data);
        } else {



            $uploadg = $_FILES['gambar_rumah']['name'];
            $gambar_lama = $this->input->post('gambar_lama');




            if ($uploadg) {
                $config['upload_path'] = './assets/img/rumah';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '5048';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar_rumah')) {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ukuran Gambar Terlalu Besar
                        </div>');
                    redirect('user/data_usulan/tambah');
                } else {

                    $new_gambar = $this->upload->data('file_name');
                    $this->db->set('gambar_rumah', $new_gambar);

                    unlink('./assets/img/rumah/' . $gambar_lama);
                }
            }

            $data = [
                'id_kecamatan' => $this->input->post('id_kecamatan'),
                'id_kecamatan' => $this->input->post('id_jbantuan'),
                'nik' => $this->input->post('nik'),
                'id_tahun' => $this->input->post('id_tahun'),
                'nama_usulan' => $this->input->post('nama_usulan'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'penghasilan' => $this->input->post('penghasilan'),

            ];
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('data_usulan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah Data Berhasil
                </div>');
            redirect('user/data_usulan');
        }
    }
    public function cekNik()
    {
        $cek = $this->input->post('nik');
        $status = 2;

        $sql = $this->db->query("SELECT * FROM data_usulan where nik ='$cek' and status <> '$status'");
        $cek_nik = $sql->num_rows();

        // var_dump($cek_nik);
        // die;

        if ($cek_nik > 0) {
            echo "Data Usulan Sedang Dalam Status Diterima Atau Masi Pending, Tolong Dicek Kembali!";
        }
    }
}
