<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Pkh extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Pkh_model');
    }
    public function index()
    {
        $data['title'] = 'Halaman Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        
        $data['penerima'] = $this->Pkh_model->get()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/penerima/pkh/index', $data);
        $this->load->view('templates/footer');
        
    }
    public function import()
    {
        $config['upload_path'] = './assets/excel/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();

        $this->load->library('upload',$config);

       if($this->upload->do_upload('import'))
       {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory:: createXLSXReader();

            $reader->open('assets/excel/' . $file['file_name']);
            foreach($reader->getSheetIterator() as $sheet) 
            {
                $numRow =1;
                foreach($sheet->getRowIterator() as $row)
                {
                    if($numRow >1 )
                    {
                        $data_penerima = array
                        (
                            'id_jbantuan' => $row->getCellAtIndex(1),
                            'id_kecamatan' => $row->getCellAtIndex(2),
                            'nik' => $row->getCellAtIndex(3),
                            'nama' => $row->getCellAtIndex(4),
                            'pekerjaan' => $row->getCellAtIndex(5),
                        );
                        $this->Pkh_model->import($data_penerima);
                        
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/'.$file['file_name']);
                $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tambah Data Berhasil
                </div>');
                redirect('admin/penerima/pkh');
            }
       }else
       {
           echo "error: ". $this->upload->display_errors();
       }
    }
    public function export()
    {
        $data['title'] = 'laporan';
        $data['semua'] = $this->Pkh_model->getexcel()->result_array();

        
        $this->load->view('admin/penerima/pkh/excel', $data);
    }
}