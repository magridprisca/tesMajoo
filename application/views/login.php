<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Majoo</title>
    <script language="javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
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
                    <h4 class="page-head-line">Please Login To Enter </h4>

                </div>

            </div>
            <div class="row">
                <form class="panel-body" method="POST" action="<?= base_url() . "admin/aksi_login" ?>">
                    <div class="col-md-12">
                        <label>Username :</label>
                        <input type="text" name="username" class="form-control" required />
                        <label>Password : </label>
                        <input type="password" name="password" class="form-control" required/>
                        <hr />
                        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In </button>&nbsp;
                    </div>
                </form>

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