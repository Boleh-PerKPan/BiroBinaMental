        <div class="new-panel">
            <div>
                <h4 class="nav-style"><?=$judul?></h4>
            </div>
            <div class="card mb-3 new-panel">
                <img src="<?= base_url() ?>assets/img/<?=$nama_file_gambar?>" class="card-img-top w-75 m-auto mt-lg-3" alt="...">
                <div class="card-body">    
                    <p style="text-align:center" class="article-item">
                        <i class="fas fa-tag"></i> <?=$kategori?> &nbsp; &nbsp;
                        <i class="fas fa-user"></i> <?=$nama_user?> &nbsp; &nbsp;
                        <i class="fas fa-calendar-alt"></i> <?=$tanggal_publish?> &nbsp; &nbsp;
                    </p> <hr>
                    <pre class="card-text new-panel" id="long_text" style="text-align:justify"><?=$isi?></pre>
                </div>
            </div>
        </div>
        <hr>
        <div class="new-panel" id="beritaterkait" >
            <h4 class="nav-style">Berita Terkait</h4>
            <div class="new-panel">
                <a href="<?=base_url()?>home_user/extrapage_news/sejarah" style="color:black"><i class="fas fa-chevron-right"></i> Sejarah</a> <hr>
                <a href="<?=base_url()?>home_user/extrapage_news/struktur_organisasi"  style="color:black"><i class="fas fa-chevron-right"></i> Struktur Organisasi</a> <hr>  
                <a href="<?=base_url()?>home_user/extrapage_news/ProfilePejabat"  style="color:black"><i class="fas fa-chevron-right"></i> Profile Pejabat </a> <hr>     
                <a href="<?=base_url()?>home_user/extrapage_news/ProfilePejabat"  style="color:black"><i class="fas fa-chevron-right"></i> Berita Lainnya </a> <hr>      
            </div>
        </div>
