<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        date_default_timezone_set("Asia/Jakarta");
    }
    private $_table = "produk";

    public function save($data)
    {
        $this->nama_produk = $data["nama_produk"];
        $this->deskripsi = $data["deskripsi"];
        $this->harga = $data["harga"];
        $this->foto = $data["foto"];
        return $this->db->insert($this->_table, $this);
    }

    public function update($data)
    {
        $id_produk = $data["id_produk"];
        $this->nama_produk = $data["nama_produk"];
        $this->deskripsi = $data["deskripsi"];
        $this->harga = $data["harga"];
        if ($data["foto"] !== null) {
            $this->foto = $data["foto"];
        }

        $q = $this->db->where('id_produk', $id_produk)->update($this->_table, $this);

        return $q;
    }

    public function delete($id)
    {
        $row = $this->db->where('id_produk', $id)->get($this->_table)->row();
        unlink('assets/img/produk/'.$row->foto);
        $this->db->where('id_produk', $id)->delete($this->_table);
    }


    public function show_data()
    {
        $q = "SELECT * FROM produk ";
        $query = $this->db->query($q);
        // if ($query->num_rows() > 0) {
        return $query->result();
        // }
    }

    public function getDetail($id_produk)
    {
        $q = "SELECT * FROM produk where id_produk=$id_produk";
        $query = $this->db->query($q);
        if ($query->num_rows() > 0) {
            $query = $query->result();
            return $query[0];
        } else
            return 0;
        // $query = "SELECT MAX(`kode_pelanggan`) FROM `master_pelanggan`";
    }
}
