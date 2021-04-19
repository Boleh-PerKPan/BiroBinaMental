
        <div class="card new-panel " >
            <?php if ($page_data == null) {
                echo 'Belum ada file download';
            } ?>
            <?php foreach($page_data as $data) : ?>
                <div class="row no-gutters">
                    <div class="col-md-2">
                        <i class="fas fa-file-alt fa-7x" style=" margin: 1rem 3rem;"></i>
                    </div>
                    <div class="card-body col-md-10 ">
                        <h5><?=$data['judul']?></h5>
                        <p><small>
                            <i class="fas fa-user"></i> <?=$data['nama_lengkap']?> &nbsp; &nbsp;
                            <i class="fas fa-calendar-alt"></i> Tahun Berkas : <?=$data['tahun_berkas']?> &nbsp; &nbsp;
                            <i class="fas fa-calendar-alt"></i> Tanggal Publish : <?=$data['tanggal_publish']?> &nbsp; &nbsp;
                        </small></p>
                        <a href="<?=base_url()?>assets/img/<?=$data['nama_file']?>" download class="btn btn-danger" role="button" style="height:28px; padding-top:0px; margin-top:6px;"><small>Download File Ini</small></a>
                    </div>
                    <hr>
                </div>
            <?php endforeach; ?>
            <div style="margin: auto; margin-bottom:1rem;">
                <?=$this->pagination->create_links(); ?>
            </div>
        </div>
  