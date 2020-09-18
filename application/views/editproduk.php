<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Majoo</title>
    <script language="javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <a class="menu-top-active" href="<?= base_url() ?>">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 style="color: white;">Majoo Teknologi Indonesia</h1>
                </div>
            </a>
        </div>
    </div>


    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="<?= base_url('admin/listproduk') ?>">Daftar Produk</a></li>
                            <li><a href="<?= base_url('admin/listpesanan') ?>">Daftar Pesanan</a></li>
                            <li><a href="<?= base_url('admin/logout') ?>">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Produk</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Produk
                        </div>
                        <div class="panel-body">
                            <form action="<?= base_url('admin/editproduk2') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama_produk">Nama produk</label>
                                    <input type="text" name="nama_produk" id="nama_produk" value="<?= $produk->nama_produk ?>" class="form-control" placeholder="Masukkan Nama Produk" />
                                    <input type="hidden" name="id_produk" id="nama_produk" value="<?= $produk->id_produk ?>" class="form-control" placeholder="Masukkan Nama Produk" />
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" name="harga" id="harga" value="<?= $produk->harga ?>" class="form-control" placeholder="Masukkan Harga" />
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>                                    
                                    <textarea class="form-control" name="deskripsi"  rows="3" placeholder="Text Area" id="deskripsi"><?= $produk->deskripsi ?></textarea>
                                </div>
                                    <img src="<?= base_url('assets/img/produk/'.$produk->foto) ?>" width="30%">
                                <div class="form-group">
                                    <label for="foto">Ubah Gambar Produk</label>
                                    <input type="file" name="foto" id="foto" />
                                    <input type="hidden" name="foto_lama" value="<?= 'assets/img/produk/'.$produk->foto ?>" />
                                </div>
                                <hr />
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>2019 &copy; PT Majoo Teknologi Indonesia</center>
                </div>

            </div>
        </div>
    </footer>

</body>

</html>