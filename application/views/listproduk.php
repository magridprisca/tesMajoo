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
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <a href="<?= base_url('admin/insertproduk')?>"><button class="btn btn-success">Tambah Produk</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < sizeof($produk); $i++) {
                                        echo "
                                        <tr>
                                        <td>" . $produk[$i]->id_produk . "</td>
                                        <td><img src='" . base_url('assets/img/produk/'. $produk[$i]->foto) ."' width='50 px'/></td>
                                        <td>" . $produk[$i]->nama_produk . "</td>
                                        <td>" . number_format($produk[$i]->harga,0,',','.') . "</td>
                                        <td>" . $produk[$i]->deskripsi . "</td>
                                        <td><button class='btn btn-info' 
                                        onclick='location.href=\"".base_url("admin/editproduk/").$produk[$i]->id_produk."\" '>Edit</button></td>
                                        <td><button onclick='location.href=\"".base_url("admin/deleteproduk/").$produk[$i]->id_produk."\"'
                                         class='btn btn-warning'>Delete</button></td>
                                        </tr>
                                        ";
                                    }

                                    ?>
                                    <tr>
                                        <th colspan="7">Jumlah produk : <?= sizeof($produk) ?></th>
                                    </tr>
                                </tbody>
                            </table>
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