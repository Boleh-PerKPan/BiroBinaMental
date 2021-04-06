
    <div class="new-panel">
        <div>
            <h4 class="nav-style">Index Download</h4>
        </div>
        <div class="card new-panel " >
            <?php foreach($page_data as $data) : ?>
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <i class="fas fa-file-alt fa-7x" style=" margin: 1rem 3rem;"></i>
                    </div>
                    <div class="card-body col-md-10 ">
                        <h5><?=$data['judul']?></h5>
                        <small>
                            <i class="fas fa-user"></i> <?=$data['nama_lengkap']?> &nbsp; &nbsp;
                            <i class="fas fa-calendar-alt"></i> Tahun Berkas : <?=$data['tahun_berkas']?> &nbsp; &nbsp;
                            <i class="fas fa-calendar-alt"></i> Tanggal Publish : <?=$data['tanggal_publish']?> &nbsp; &nbsp;
                        </small>
                    </div>
                    <hr>
                </div>
            <?php endforeach; ?>
            <div style="margin: auto; margin-bottom:1rem;">
                <a href="<?=base_url()?>home_user/index_upload" role="button" class="btn my-btn">1|2|3|nexpage</a>
            </div>
        </div>
      
    </div>

    <?php
