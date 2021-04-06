    <div class="col-md-4 offset-md-0 new-panel">
        <div id="galery">
            <div>
                <a href="<?= base_url()?>home_user/index_foto"><h4 class="nav-style">Foto</h4></a>
            </div>
            <div id="carousel-galery" class="carousel slide new-panel" data-ride="carousel">
                <div class="carousel-inner" style="">
                        <?php if ($data_foto==null) {
                            $data_foto[] = array(
                                'nama_file' => 'default.png',
                                'text' => 'Biro Bina Mental dan Kesejahteraan Rakyat Sumbar'
                            );
                        }
                        $row = 1;
                        foreach ($data_foto as $data) :?>
                            <?php if ($row == 1) { ?>
                                <div class="carousel-item active">
                            <?php $row = $row+1; 
                            }else { ?>
                                <div class="carousel-item">
                            <?php } ?>
                                <img src="<?= base_url() ?>assets/img/<?=$data['nama_file']?>" class="d-block w-100" style="max-height:20rem">
                                </div>
                        <?php endforeach; ?>
                    
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
                <a href="<?=base_url()?>home_user/index_foto" role="button" class="btn my-btn">Foto Lainnya &raquo;</a>
            </div>
        </div>
        <div id="video">
            <div class="new-panel">
                <a href="<?= base_url()?>home_user/index_video"><h4 class="nav-style">Video</h4></a>
            </div>
            <div class="new-panel" style="">
                <?php foreach($data_video as $data) : ?>
                    <iframe class="w-100"  src="https://www.youtube.com/embed/<?=$data['nama_file']?>">
                    </iframe>
                    <p><?=$data['text']?></p>
                    <a href="<?=base_url()?>home_user/show_video/<?=$data['id_galeri_konten']?>" ><small> Lihat Video Ini &raquo;</small></a>
                <?php endforeach; ?>
            </div>
            <hr>
            <div style="margin: auto; margin-bottom:1rem;">
                <a href="<?=base_url()?>home_user/index_video" role="button" class="btn my-btn">Video Lainnya &raquo;</a>
            </div>
        </div>
        <div id="agenda">
            <div class="new-panel">
                <a href="<?= base_url()?>home_user/index_agenda"><h4 class="nav-style">Agenda</h4></a>
            </div>
            <div class="card new-panel">
                <?php 
                if ($data_agenda == null) {
                    echo 'Belum Ada Agenda';
                }
                foreach ($data_agenda as $data) : ?>
                <div class="row no-gutters" style="max-height: 25rem;">
                    <div class="card-body">
                        <h6 class="card-title"><?=$data['judul']?></h6>
                        <small>
                            <p class="card-text">
                                <i><?=$data['tanggal_pelaksanaan']?> &nbsp; <?=$data['tempat_pelaksanaan']?> </i><br>
                            </p>
                        </small>
                        <a href="<?=base_url()?>home_user/detail/Agenda/<?=$data['id_agenda']?>" class="btn btn-success" role="button" style="height:28px; padding-top:0px; margin-top:6px;"><small> Selengkapnya &raquo;</small></a>
                    </div>
                </div>
                <hr>
                <?php endforeach; ?>
                
            </div>
            <hr>
            <div style=" margin-bottom:1rem;">
                <a href="<?=base_url()?>home_user/index_agenda" role="button" class="btn my-btn">Agenda Lainnya &raquo;</a>
            </div>
        </div>
        <div class="" id="kategori">
            <div class="new-panel">
                <h4 class="nav-style">Kategori Berita</h4>
            </div>
            <div class="card new-panel" style="">
                <div class="card-body">
                <?php foreach ($allkategori as $data) :  ?>
                    <a href="<?=base_url()?>home_user/index_berita/<?=$data['id_artikel_kategori']?>" class="my-btn"><small> <?=$data['nama_artikel_kategori']?></small> </a>&nbsp;
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<!--tutup clas row pada carousel.php-->
</div>