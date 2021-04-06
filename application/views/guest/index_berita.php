
    <div class="new-panel">
        <div>
            <h4 class="nav-style"><?=$title?></h4>
        </div>
        <div class="card new-panel" style="">
            <?php 
            if ($page_data == null) {
                echo 'Belum Ada Data';
            }
            foreach ($page_data as $data) : ?>
                <div class="row no-gutters" style="max-height: 25rem;">
                    <div class="col-md-2">
                        <img src="<?= base_url()?>assets/img/<?=$data['nama_file']?>" style="height:150px; width : 150px; margin:1rem;" alt="...">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h6 class="card-title"><?=$data['judul']?></h6>
                            <small >
                                <div class="card-text">
                                    <p>
                                        <i>
                                            <?php if(isset($data['tanggal_pelaksanaan'])) {
                                                ?><i class="fas fa-calendar-alt"></i> <?=$data['tanggal_pelaksanaan']?> &nbsp; 
                                                <i class="fas fa-map-marker"></i> <?=$data['tempat_pelaksanaan']?> &nbsp; <?php
                                                $url = 'Agenda/'.$data['id_agenda'];
                                            } ?>
                                            <?php if(isset($data['nama_artikel_kategori'])) {
                                                ?><i class="fas fa-tag"></i> <?=$data['nama_artikel_kategori']?> &nbsp; <?php 
                                                $url = 'Berita/'.$data['id_artikel_berita'];
                                            } ?>
                                            <i class="fas fa-user"></i> <?=$data['nama_lengkap']?> &nbsp; 
                                            <?php if(isset($data['tanggal_publish'])) {
                                                ?><i class="fas fa-calendar-alt"></i> <?= $data['tanggal_publish']?> 
                                            <?php } ?>
                                        </i>
                                    </p>
                                    <pre><?=$data['isi']?></pre>
                                </div>
                            </small>
                            <a href="<?=base_url()?>home_user/detail/<?=$url?>" class="btn btn-success" role="button" style="height:28px; padding-top:0px; margin-top:6px;"><small> Selengkapnya &raquo;</small></a>
                        </div>
                    </div>
                </div>
                <hr>
            <?php endforeach; ?>
            <div style="margin: auto; margin-bottom:1rem;">
                <a href="<?=base_url()?>home_user/index_berita" role="button" class="btn my-btn">1|2|3|nexpage</a>
            </div>
        </div>
        
        <div id="kategori" style="margin-top:15px">
            <hr>
            <div class="new-panel">
                <h4 class="nav-style">Kategori Berita</h4>
            </div>
            <div class="card new-panel" style="">
                <div class="card-body">
                <?php foreach($kategori_data as $data) : ?>
                    <a href="<?=base_url()?>home_user/index_berita/<?=$data['id_artikel_kategori']?>" class="my-btn"><small> <?=$data['nama_artikel_kategori']?></small> </a>&nbsp;
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
