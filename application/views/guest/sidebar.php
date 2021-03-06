    <div class="col-md-4 offset-md-0 new-panel">
        <div id="gub_wagub_pic">
            <div>
                <a href="<?= base_url()?>home_user/index_foto"><h4 class="nav-style">Gubernur Dan Wakil</h4></a>
            </div>
            <div id="carousel-galery" class="new-panel" style="margin:30px 10px 20px">
                <img src="<?=base_url()?>assets/img/dont-delete-this-folder/content-pimpinan2021-removebg-preview.png" width="100%">
            </div>
            <hr>
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
        
    </div>
<!--tutup clas row pada carousel.php-->
</div>
<!-- konten ini diluar colomn -->
<div class="new-panel">
    <div>
        <a href="<?= base_url()?>home_user/index_foto"><h4 class="nav-style">Foto</h4></a>
    </div>
    <div id="foto" class="row new-panel">
        <?php if ($data_foto==null) {
            $data_foto[] = array(
                'nama_file' => 'dont-delete-this-folder/default.png',
                'text' => 'Biro Bina Mental dan Kesejahteraan Rakyat Sumbar'
            );
        } ?>

        <?php foreach ($data_foto as $data) :?>
            <div class="row m-3 d-flex align-items-center flex-column">
                <img src="<?= base_url() ?>assets/img/<?=$data['nama_file']?>" class="d-block w-100" style="max-width:20rem; border: 2px solid #555;">
            </div>
        <?php endforeach; ?>
    </div>
    <hr>
   
</div>
        