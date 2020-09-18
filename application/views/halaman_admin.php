<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>pendek.in</title>
    <script language="javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>magridprisca@gmail.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+6289 8142 8608
                </div>

            </div>
        </div>
    </header>

    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 style="color: white;">Pendek.in</h1>
            </div>
        </div>
    </div>

    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="<?= base_url() ?>">Shorten Link</a></li>
                            <li><a href="#">Logout</a></li>
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
                    <h4 class="page-head-line">Dashboard</h4>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        Shorten link and costumize by yourself
                    </div>
                </div>
            </div>

            <div class="row">
                <form class="panel-body" name="Shortenform" method="POST" action="<?= base_url() . "shorten/create" ?>">
                    <div class="col-md-2">
                        URL Link
                    </div>
                    <div class="col-md-10">
                        : <input type="text" name="url" size="100 px">
                    </div>

                    <div class="col-md-2">
                        Custom link
                    </div>
                    <div class="col-md-10">
                        : <button type="button" class="btn btn-sm btn-success" onclick="myFunction()">Custom link</button>
                    </div>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("own_link");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                                document.getElementById('short_url').value = ''
                            }
                        }
                    </script>

                    <div id="own_link" style="display: none;">
                        <div class="col-md-2">
                            Shorten Link
                        </div>
                        <div class="col-md-10">
                            :<?= base_url() ?> <input type="text" id="short_url" name="short_url" size="60 px">
                        </div>
                    </div>
                    <div style="margin-top:20px ;">
                        <div class="col-md-4">
                        </div>
                        <button type="submit" class="col-md-4">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>