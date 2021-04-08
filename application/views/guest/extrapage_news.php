<!--HALAMAN STATIS-->
<!--ISI KONTEN DAN JUDUL DIKIRIMKAN DARI CONTROLLER-->
<div style="padding-bottom:2rem">
    <h4 class="new-panel"><?=$judul?></h4>
    <?php if($nama_file_image != 'default.png') { ?>
        <img src="<?=base_url()?>assets/img/<?=$nama_file_image?>" class="new-panel w-50 rounded mx-auto d-block">
    <?php } ?>
    <div class="new-panel">
        <pre><?=$isi?></pre>
    </div>
    
</div>
<div class="new-panel" id="informasiterkait_pagenews" >
    <h4 class="nav-style">Informasi terkait</h4>
    <div class="new-panel">
        <?php if($info_terkait==null) {
            echo 'Belum Ada Informasi Terkait';
        }?>
        <?php foreach($info_terkait as $data) : ?>
            <a href="<?=base_url()?>home_user/extrapage_news/<?=$data['id_extrapage']?>"  style="color:black"><i class="fas fa-chevron-right"></i> <?=$data['judul']?></a> <hr>    
        <?php endforeach; ?>
    </div>
</div>


