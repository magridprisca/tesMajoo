<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_pesanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Jakarta");
    }
    private $_table = "pemesanan";

    public function save($data)
    {
        $this->nama_pemesan = $data["nama_pemesan"];
        $this->alamat = $data["alamat"];
        $this->no_hp = $data["no_hp"];
        $this->id_produk = $data["id_produk"];
        $this->jumlah = $data["jumlah"];
        $this->keterangan_pemesanan = $data["keterangan_pemesanan"];
        return $this->db->insert($this->_table, $this);
    }


    public function show_data()
    {
        $q = "SELECT * FROM pemesanan as a join produk as b on a.id_produk=b.id_produk ";
        $query = $this->db->query($q);
        return $query->result();
    }

    public function getDetail($id_pemesanan)
    {
        $q = "SELECT * FROM pemesanan where id_pemesanan=$id_pemesanan";
        $query = $this->db->query($q);
        if ($query->num_rows() > 0) {
            $query = $query->result();
            return $query[0];
        } else
            return 0;
    }
}
