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
                    <h4 class="page-head-line">Pesan</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Buat Pesanan
                        </div>
                        <div class="panel-body">
                            <form action="<?= base_url('beranda/insertpemesanan2') ?>" method="POST">
                                <div class="form-group">
                                    <label for="nama_pemesan">Nama Lengkap</label>
                                    <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control" placeholder="Masukkan Nama Produk" />
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Harga" />
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label> 
                                    <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="Masukkan Harga" />
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="produk">Produk yang dipesan </label>
                                    <input type="hidden" name="id_produk" id="produk" value="<?= $produk->id_produk ?>" />
                                    <br/>
                                    <label><?= $produk->nama_produk ?></label>
                                    <br/>
                                    <img src="<?= base_url('assets/img/produk/'.$produk->foto) ?>" width="30%">
                                    <br/>
                                    <label>Rp. <?= number_format($produk->harga,0,',','.'); ?></label>
                                    <br/>
                                    <label><?= $produk->deskripsi ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label> 
                                    <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah barang yang di pesan" value="1"/>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan_pemesanan">Keterangan Tambahan</label> 
                                    <input type="text" name="keterangan_pemesanan" id="keterangan_pemesanan" class="form-control" placeholder="Keterangan" />
                                </div>
                                <hr/>
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