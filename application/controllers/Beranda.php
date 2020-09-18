<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model("M_produk");
        $this->load->model("M_pesanan");
    }

    public function index()
    {
        $data['produk']=$this->M_produk->show_data();
        $this->load->view('daftar_produk',$data);
    }
    public function insertpemesanan($barang)
    {
        $data['produk']=$this->M_produk->getDetail($barang);
        $this->load->view('insertpemesanan',$data);
    }
    
    public function insertpemesanan2()
    {
        $data = $this->input->post();
        
        $simpan_data = $this->M_pesanan->save($data);
        if ($simpan_data == "success") {
            redirect(base_url());
        } else {
            redirect(base_url());
        }
    }

}
