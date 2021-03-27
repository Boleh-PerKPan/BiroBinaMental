    <div class="col-md-4 offset-md-0 new-panel">
        <div id="galery">
            <div>
                <a href="<?= base_url()?>guest/index_foto"><h4 class="nav-style">Foto</h4></a>
            </div>
            <div id="carousel-galery" class="carousel slide new-panel" data-ride="carousel">
                <div class="carousel-inner" style="">
                    <div class="carousel-item active">
                        <img src="<?= base_url()?>assets/files/images/jam_gadang.jpg" class="d-block w-100" style="max-height:20rem" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url()?>assets/files/images/pelantikan_gub.jpg" class="d-block w-100" style="max-height:20rem" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url()?>assets/files/images/sumbarprof_logo.png" class="d-block w-100" style="max-height:20rem" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-galery" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-galery" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                
            </div>
            <hr>
            <div style="margin: auto; margin-bottom:1rem;">
                <a href="<?=base_url()?>guest/index_foto" role="button" class="btn my-btn">Foto Lainnya &raquo;</a>
            </div>
        </div>
        <div id="video">
            <div class="new-panel">
                <a href="<?= base_url()?>guest/index_video"><h4 class="nav-style">Video</h4></a>
            </div>
            <div class="new-panel" style="">
                <iframe width="" height="" class="w-100"  src="https://www.youtube.com/embed/xV1HeAbOUGw">
                </iframe>
                <a href="#" ><small> Lihat Video Ini &raquo;</small></a>
            </div>
            <hr>
            <div style="margin: auto; margin-bottom:1rem;">
                <a href="<?=base_url()?>guest/index_video" role="button" class="btn my-btn">Video Lainnya &raquo;</a>
            </div>
        </div>
        <div id="agenda">
            <div class="new-panel">
                <a href="<?= base_url()?>guest/index_agenda"><h4 class="nav-style">Agenda</h4></a>
            </div>
            <div class="card new-panel" style="">
                <div class="row no-gutters" style="max-height: 25rem;">
                    <div class="">
                        <div class="card-body">
                            <h6 class="card-title">Agenda Penyuluhan Vaksinasi</h6>
                            <small>
                                <p class="card-text">
                                    <i>30 januari 2021 &nbsp; Hotel inna muara </i><br>
                                </p>
                            </small>
                            <a href="<?=base_url()?>/guest/detail_agenda/agenda1" class="btn btn-success" role="button" style="height:28px; padding-top:0px; margin-top:6px;"><small> Selengkapnya &raquo;</small></a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row no-gutters" style="max-height: 25rem;">
                    <div class="">
                        <div class="card-body">
                            <h6 class="card-title">Agenda 2</h6>
                            <small>
                                <p class="card-text">
                                <i>30 januari 2021 &nbsp; Hotel inna muara </i><br>
                                </p>
                            </small>
                            <a href="<?=base_url()?>/guest/detail_agenda/agenda1" class="btn btn-success" role="button" style="height:28px; padding-top:0px; margin-top:6px;"><small> Selengkapnya &raquo;</small></a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row no-gutters" style="max-height: 25rem;">
                    <div class="">
                        <div class="card-body">
                            <h6 class="card-title">Agenda 2</h6>
                            <small>
                                <p class="card-text">
                                    <i>30 januari 2021 &nbsp; Hotel inna muara </i><br>
                                </p>
                            </small>
                            <a href="<?=base_url()?>/guest/detail_agenda/agenda1" class="btn btn-success" role="button" style="height:28px; padding-top:0px; margin-top:6px;"><small> Selengkapnya &raquo;</small></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div style=" margin-bottom:1rem;">
                <a href="<?=base_url()?>guest/index_agenda" role="button" class="btn my-btn">Agenda Lainnya &raquo;</a>
            </div>
        </div>
        <div class="" id="kategori">
            <div class="new-panel">
                <a href="<?= base_url()?>guest/index_artikel_kategory"><h4 class="nav-style">Kategori Berita</h4></a>
            </div>
            <div class="card new-panel" style="">
                <div class="card-body">
                <?php for ($i=0; $i < 25; $i++) {  ?>
                    <a href="#" class="my-btn"><small> link kategori <?=$i;?></small> </a>&nbsp;
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
<!--tutup clas row pada carousel.php-->
</div>