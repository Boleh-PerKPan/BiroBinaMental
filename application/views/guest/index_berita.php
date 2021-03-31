
    <div class="new-panel">
        <div>
            <h4 class="nav-style">Index Berita</h4>
        </div>
        <div class="card new-panel" style="">
            <?php for ($i=0; $i < 20; $i++) { ?>
                <div class="row no-gutters" style="max-height: 25rem;">
                    <div class="col-md-2">
                        <img src="<?= base_url()?>assets/files/images/sumbarprof_logo.png" style="height:150px; width : 150px; margin:1rem;" alt="...">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h6 class="card-title">Berita terkait <?=$i;?></h6>
                            <small>
                                <p class="card-text">
                                    <i>katgori &nbsp; publish oleh &nbsp; waktu publis </i><br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis tempore dolores expedita officiis maiores laborum excepturi porro inventore ist...
                                </p>
                            </small>
                            <a href="<?=base_url()?>/home_user/detail_berita/berita1" class="btn btn-success" role="button" style="height:28px; padding-top:0px; margin-top:6px;"><small> Selengkapnya &raquo;</small></a>
                        </div>
                    </div>
                </div>
                <hr>
            <?php } ?>
            <div style="margin: auto; margin-bottom:1rem;">
                <a href="<?=base_url()?>home_user/index_berita" role="button" class="btn my-btn">1|2|3|nexpage</a>
            </div>
        </div>
        
        <div id="kategori" style="margin-top:15px">
                <hr>
            <div class="new-panel">
                <a href="<?= base_url()?>home_user/#"><h4 class="nav-style">Kategori Berita</h4></a>
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
