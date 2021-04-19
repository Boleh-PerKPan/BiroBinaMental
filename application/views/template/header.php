<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="icon" href="<?= base_url() ?>assets/img/dont-delete-this-folder/sumbarprof_logo.ico" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/guest-dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/dont-delete-this-folder/sumbarprof_logo.ico" type="image/x-icon" />

    <title><?= $title ?></title>
</head>

<body>
    <i onclick="topFunction()" id="upBtn" class="fas fa-chevron-up" title="Go to top"></i>

    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-nav" id="navScroll">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-icon" type="button" id="navbardrop" data-toggle="collapse" data-target="#navnav" aria-controls="navnav" aria-expanded="false">
                    <span></span>
                </button>
                <div id="navnav" class="collapse navbar-collapse">
                    <div class="navbar-nav mr-auto ">
                        <?= $nav_konten; ?>
                    </div>
                    <form method="post" class="form-inline my-2 my-lg-0 " action="<?= base_url() ?>all_index/search_index">
                        <input class="form-control mr-sm-2" type="search" name="judul" placeholder="Cari Judul" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="cari" name="cari"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Main Navbar -->
        <div>
<<<<<<< HEAD
            <a href="<?=base_url()?>"  class="row nav-style" style="font-size:14px; font-family: 'Trebuchet MS', sans-serif; padding: 10px 20px 10px; ">
                <img src="<?= base_url()?>assets/img/dont-delete-this-folder/sumbarprof_logo.ico" style="float:left; max-height: 55px; margin-left:20px">    
                <p class="col-sm-11 offset-0" >
=======
            <a href="<?= base_url() ?>home_user" class="row nav-style" style="font-size:14px; font-family: 'Trebuchet MS', sans-serif; padding: 10px 20px 10px; ">
                <img src="<?= base_url() ?>assets/img/dont-delete-this-folder/sumbarprof_logo.ico" style="float:left; max-height: 55px; margin-left:20px">
                <p class="col-sm-11 offset-0">
>>>>>>> 1e872f31acd2b0e480839b8e73c73bb10ae7a35b
                    Biro Bina Mental Dan Kesra <br>Setda Sumatera Barat
                </p>
            </a>

            <div class="navbar navbar-expand-lg navbar-dark bg-nav" id="mainNav">
                <div class="container">
                    <button class="navbar-toggler navbar-toggler-icon" type="button" id="navbardrop" data-toggle="collapse" data-target="#navnav" aria-controls="navnav" aria-expanded="false">
                        <span></span>
                    </button>
                    <div id="navnav" class="collapse navbar-collapse">
                        <div class="navbar-nav mr-auto" id="nav-konten">
                            <?= $nav_konten; ?>
                        </div>
                        <form method="post" class="form-inline my-2 my-lg-0 " action="<?= base_url() ?>all_index/search_index">
                            <input class="form-control mr-sm-2" type="search" name="judul" placeholder="Cari Judul" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="cari" name="cari"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">