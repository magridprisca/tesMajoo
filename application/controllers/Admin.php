<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model("M_produk");
        $this->load->model("M_pesanan");
        $this->load->model("M_user");
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function listproduk()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {

            $data['produk'] = $this->M_produk->show_data();
            $this->load->view('listproduk', $data);
        }
    }
    
    public function listpesanan()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {

            $data['pemesanan'] = $this->M_pesanan->show_data();
            $this->load->view('listpesanan', $data);
        }
    }

    public function insertproduk()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $this->load->view('insertproduk');
        }
    }
    public function insertproduk2()
    {
        $config['upload_path']          = base_url() . "assets/img/produk/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->load->initialize($config);

        $data = $this->input->post();

        $target_dir = "assets/img/produk/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["foto"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["foto"]["name"]) . " has been uploaded.";
                $data['foto'] = basename($_FILES["foto"]["name"]);


                $simpan_data = $this->M_produk->save($data);
                if ($simpan_data = "success") {
                    redirect(base_url('admin/listproduk'));
                } else {
                    redirect(base_url('admin/insertproduk'));
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


    public function editproduk($id)
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $data['produk'] = $this->M_produk->getDetail($id);
            $this->load->view('editproduk', $data);
        }
    }
    public function editproduk2()
    {
        $data = $this->input->post();

        if (basename($_FILES["foto"]["name"]) !== "") {

            $target_dir = "assets/img/produk/";
            $target_file = $target_dir . basename($_FILES["foto"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["foto"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                    unlink($data['foto_lama']);
                    echo "The file " . basename($_FILES["foto"]["name"]) . " has been uploaded.";
                    $data['foto'] = basename($_FILES["foto"]["name"]);

                    $simpan_data = $this->M_produk->update($data);
                    if ($simpan_data == "success") {
                        redirect(base_url('admin/listproduk'));
                    } else {
                        redirect(base_url('admin/insertproduk'));
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {

            $simpan_data = $this->M_produk->update($data);
            if ($simpan_data == "success") {
                redirect(base_url('admin/listproduk'));
            } else {
                redirect(base_url('admin/insertproduk'));
            }
        }
    }
    
    public function deleteproduk($id)
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $this->M_produk->delete($id);
            redirect(base_url('admin/listproduk'));
        }
    }


    public function delproduk()
    {
        if ($_SESSION['user'] == null) {
            redirect(base_url());
        } else {
            $this->load->view('insertproduk');
        }
    }



    public function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $isLogin = $this->M_user->login_authen($username, $password);

        $i = $this->M_user->authen_user($username);

        if ($isLogin == true) {
            $newdata = array(
                'user'    => $i[0]['username'],
                'level'    => $i[0]['status']
            );
            $this->session->set_userdata($newdata);
            if ($i[0]['status'] == 'admin') {
                echo "<script>alert('login admin berhasil')</script>";
                redirect(base_url('admin/listproduk'));
            }
        } else {
            echo "<script>alert('login admin gagal')</script>";
            redirect(base_url('admin'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
