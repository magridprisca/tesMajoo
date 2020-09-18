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

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Produk</h4>
                </div>
            </div>

            <div class="row">
                    <?php
                    for ($i = 0; $i < sizeof($produk); $i++) {
                        echo '
                        
                        <div class="col-md-3">
                            <div class="alert alert-warning">
                            <div style="height:320px">
                            <img src="'. base_url()."assets/img/produk/". $produk[$i]->foto .'" width="100%" />
                            <br />
                            <center>
                            <h3>'. $produk[$i]->nama_produk .'</h3>
                            <br />
                            <h4>Rp. '. number_format($produk[$i]->harga,0,',','.') .'</h4>
                            </center>
                            '. substr($produk[$i]->deskripsi ,0,100).'...
                            </div>
                            <br />
                            <center><button class="btn btn-sm btn-primary" onclick="location.href=\''.base_url("beranda/insertpemesanan/").$produk[$i]->id_produk.'\'">buy</button></center>
                            </div>
                        </div>
                        ';
                    }
                    ?>
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