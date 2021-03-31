
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="icon" href="../../../../favicon.ico">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/guest-dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/fontawesome/css/all.min.css">
    
    <title><?=$title?></title>
</head>

<body>
    <i onclick="topFunction()" id="upBtn" class="fas fa-chevron-up" title="Go to top"></i>
        
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning nav-style" id="navScroll">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-icon" type="button" id="navbardrop" data-toggle="collapse" data-target="#navnav" aria-controls="navnav" aria-expanded="false" >
                    <span></span>
                </button>
                <div id="navnav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="<?=base_url()?>home_user">Dashboard</a>
                        </li>
                        <li class="nav-item <?=$class?>">
                            <a href="#" data-target="#profile" class="nav-link" <?=$dropdown_item;?> >Profile</a>
                            <div class="collapse dropdown-menu" id="profile" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url() ?>home_user/extrapage_news/visimisi">Visi dan Misi</a>
                                <a class="dropdown-item" href="<?= base_url() ?>home_user/extrapage_news/strukturOrganisasi">Struktur Organisasi</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?=base_url()?>home_user/index_berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="">Kegiatan</a>
                        </li>
                        <li class="nav-item <?=$class?>">
                            <a class="nav-link" data-target="#galery" <?=$dropdown_item;?> href="#">Galery</a>
                            <div class="collapse dropdown-menu" id="galery" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url() ?>home_user/index_foto">Foto</a>
                                <a class="dropdown-item" href="<?= base_url() ?>home_user/index_video">Video</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>    
        </nav>
        <!-- Main Navbar -->
        <div class="container ">
            <a href="<?=base_url()?>home_user" >
                <h5 class="nav-style" style="font-family: 'Trebuchet MS', sans-serif; padding-top:15px; padding-left:20px; ">
                    <img src="<?= base_url()?>assets/files/images/sumbarprof_logo.png" style="width:30px">
                    Biro Bina Mental Dan Kesejahteraan Rakyat Sumatera Barat
                </h5>
            </a>
            
            <nav class="navbar navbar-expand-lg navbar-light bg-warning nav-style" id="mainNav">
                <button class="navbar-toggler navbar-toggler-icon" type="button" id="navbardrop" data-toggle="collapse" data-target="#navnav" aria-controls="navnav" aria-expanded="false" >
                    <span></span>
                </button>
                <div id="navnav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto" id="nav-konten">
                        <?=$nav_konten;?>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div> 
            </nav>
        </div>
    </header>

    <main>
        <div class="container">