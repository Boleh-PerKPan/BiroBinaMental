        <div class="new-panel">
            <div>
                <h4 class="nav-style"><?=$judul?></h4>
            </div>
            <div class="card mb-3 new-panel">
                <img src="<?= base_url() ?>assets/img/<?=$nama_file_gambar?>" class="card-img-top w-75 m-auto mt-lg-3" alt="...">
                <div class="card-body">    
                    <p style="text-align:center" class="article-item">
                        <?php if(isset($tanggal_pelaksanaan)) {
                            ?><i class="fas fa-calendar-alt"></i> <?=$tanggal_pelaksanaan?> &nbsp; 
                            <i class="fas fa-map-marker"></i> <?=$tempat_pelaksanaan?> &nbsp; <?php
                            $tabel = 'Agenda';
                        } ?>
                        <?php if(isset($kategori)) {
                            ?><i class="fas fa-tag"></i> <?=$kategori?> &nbsp; <?php 
                            $tabel = 'Berita';
                        } ?>
                        <i class="fas fa-user"></i> <?=$nama_lengkap?> &nbsp; 
                        <?php if(isset($tanggal_publish)) {
                            ?><i class="fas fa-calendar-alt"></i> <?= $tanggal_publish?> 
                        <?php } ?>
                    </p> <hr>
                    <pre class="card-text new-panel" id="long_text" style="text-align:justify"><?=nl2br($isi)?></pre>
                </div>
            </div>
        </div>
        <hr>
        <div class="new-panel" id="beritaterkait" >
            <h4 class="nav-style"><?=$tabel?> Terkait</h4>
            <div class="new-panel">
                <?php 
                if ($artikel_terkait == null) echo 'Tidak Ada '.$tabel.' Terkait';
                foreach($artikel_terkait as $data) : ?>
                <!-- Menampilkannya dikirim dari controller-->
                    <?php 
                    if ($tabel == 'Berita') $id = $data['id_artikel_berita'];  
                    else $id = $data['id_agenda']; ?>
                <a href="<?=base_url()?>home_user/detail/<?=$tabel?>/<?=$id; ?>" style="color:black"><i class="fas fa-chevron-right"></i> <?=$data['judul']?></a> <hr>
                <?php endforeach; ?>
            </div>
        </div>
