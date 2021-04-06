        <div class="new-panel">
            <div>
                <a href="<?= base_url()?>all_index/index_berita"><h4 class="nav-style">Berita Utama</h4></a>
            </div>
            <?php if($berita_utama==null) {
                echo 'Belum Ada Berita Utama';
            }?>
            <?php foreach($berita_utama as $data) : ?>
            <div class="card mb-3 new-panel">
                <img src="<?= base_url() ?>assets/img/<?=$data['nama_file']?>" class="card-img-top" >
                <div class="card-body">
                    <h5 class="card-title"><?= $data['judul']?></h5>
                    <p style="text-align:right" class="article-item">
                        <i class="fas fa-tag"></i> <?=$data['nama_artikel_kategori']?> &nbsp; &nbsp;
                        <i class="fas fa-user"></i> <?=$data['nama_lengkap']?> &nbsp; &nbsp;
                        <i class="fas fa-calendar-alt"></i> <?= $data['tanggal_publish']?> &nbsp; &nbsp;
                    </p>
                    <pre class="card-text" style="text-align: justify; text-size:13px;"><?=$data['isi']?></pre>
                    <a href="<?=base_url()?>/home_user/detail/Berita/<?=$data['id_artikel_berita']?>" class="btn btn-success" role="button">Selengkapnya &raquo;</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="new-panel" id="beritaterkait">
            <div>
                <a href="<?= base_url()?>all_index/index_berita"><h4 class="nav-style">Berita Terkait</h4></a>
            </div>
            <div class="card new-panel">
                <?php if($berita_terkait==null) {
                    echo 'Belum Ada Berita Terkait';
                }?>
                <?php foreach($berita_terkait as $data) : ?>
                    <div class="row no-gutters" style="max-height: 25rem;">
                        <div class="col-md-2">
                            <img src="<?= base_url() ?>assets/img/<?=$data['nama_file']?>" style="height:5rem; width : 5rem; margin:1rem;">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body">
                                <h6 class="card-title"><?= $data['judul']?></h6>
                                <small>
                                    <p class="card-text">
                                        <i>
                                        <i class="fas fa-tag"></i> <?=$data['nama_artikel_kategori']?> &nbsp; 
                                        <i class="fas fa-user"></i> <?=$data['nama_lengkap']?> &nbsp; 
                                        <i class="fas fa-calendar-alt"></i> <?= $data['tanggal_publish']?> 
                                        </i><br>
                                    </p>
                                </small>
                                <a href="<?=base_url()?>home_user/detail/Berita/<?=$data['id_artikel_berita']?>" class="btn btn-success" role="button" style="height:28px; padding-top:0px; margin-top:6px;"><small> Selengkapnya &raquo;</small></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div style="margin: auto; margin-bottom:1rem;">
                    <a href="<?=base_url()?>home_user/index_berita" role="button" class="btn my-btn">Berita Lainnya &raquo;</a>
                </div>
            </div>
        </div>
        <!--ini adalah tutup col yang ada di carousel.php -->
        </div>