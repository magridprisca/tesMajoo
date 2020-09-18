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
                            <li><a href="<?= base_url('admin/listproduk') ?>">Daftar Produk</a></li>
                            <li><a class="menu-top-active" href="<?= base_url('admin/listpesanan') ?>">Daftar Pesanan</a></li>
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
                    <h4 class="page-head-line">Pesanan</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <!-- <tr>
                                        <td colspan="7">
                                            <a href="<?= base_url('admin/insertproduk')?>"><button class="btn btn-success">Tambah Produk</button></a>
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <th>Kode Pemesanan</th>
                                        <th>Nama Pemesan</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Produk</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < sizeof($pemesanan); $i++) {
                                        echo "
                                        <tr>
                                        <td>" . $pemesanan[$i]->id_pemesanan . "</td>
                                        <td>" . $pemesanan[$i]->nama_pemesan . "</td>
                                        <td>" . $pemesanan[$i]->alamat . "</td>
                                        <td>" . $pemesanan[$i]->no_hp . "</td>
                                        <td>" . $pemesanan[$i]->id_produk . " - ". $pemesanan[$i]->nama_produk ."</td>
                                        <td>" . $pemesanan[$i]->jumlah . "</td>
                                        <td>" . $pemesanan[$i]->keterangan_pemesanan . "</td>
                                        </tr>
                                        ";
                                    }

                                    ?>
                                    <tr>
                                        <th colspan="7">Jumlah Pemesanan : <?= sizeof($pemesanan) ?></th>
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