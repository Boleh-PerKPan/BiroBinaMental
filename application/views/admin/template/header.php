<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Administrator</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/libs/fontawesome/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url() ?>home_admin">Admin</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>home_admin">
                                <span data-feather="home"></span>
                                <i class="fas fa-tachometer-alt"></i> Dashboard <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>home_admin/manage_menu">
                                <span data-feather="home"></span>
                                <i class="fas fa-tasks"></i> Manajemen Menu <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-friends"></i> Manajemen User
                            </a>-->
                            <a class="nav-link dropdown-toggle " id="navbarDropdonw" data-toggle="collapse" href="#" data-target="#manajemenuser" aria-expanded="false">
                                <i class="fas fa-user-friends"></i> Manajemen User
                            </a>
                            <div class="collapse navbar-collapse" id="manajemenuser" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url() ?>home_admin/manage_instansi">Instansi</a>
                                <a class="dropdown-item" href="<?= base_url() ?>home_admin/manage_user">User</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " id="navbarDropdonw" data-toggle="collapse" href="#" data-target="#manajemennews" aria-expanded="false">
                                <i class="fas fa-newspaper"></i> Manajemen News
                            </a>
                            <div class="collapse navbar-collapse" aria-labelledby="navbarDropdown" id="manajemennews">
                                <a class="dropdown-item" href="<?= base_url() ?>home_admin/manage_category">Category</a>
                                <a class="dropdown-item" href="<?= base_url() ?>home_admin/manage_article_news">Article News</a>
                                <a class="dropdown-item" href="<?= base_url() ?>home_admin/manage_article_upload">Article Update</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " id="navbarDropdonw" data-toggle="collapse" href="#" data-target="#manajemenpage" aria-expanded="false">
                                <i class="fas fa-file"></i> Manajemen Page
                            </a>
                            <div class="collapse navbar-collapse" id="manajemenpage" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url() ?>home_admin/manage_slide_show">Slide Show</a>
                                <a class="dropdown-item" href="<?= base_url() ?>home_admin/manage_page_news">Page news</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " id="navbarDropdonw" data-toggle="collapse" href="#" data-target="#gallery" aria-expanded="false">
                                <i class="fas fa-images"></i> Gallery
                            </a>
                            <div class="collapse navbar-collapse" id="gallery" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url() ?>home_admin/manage_photo">Photo</a>
                                <a class="dropdown-item" href="<?= base_url() ?>home_admin/manage_video">Video</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                <i class="fas fa-calendar-week"></i> Agenda
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-10 ml-sm-auto ">