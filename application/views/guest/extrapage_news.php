<!--HALAMAN STATIS-->
<!--ISI KONTEN DAN JUDUL DIKIRIMKAN DARI CONTROLLER-->
<div style="padding-bottom:2rem">
    <h4 class="new-panel"><?=$judul?></h4>
    <?php if($nama_file_image != 'default.png' && $nama_file_image != 'dont-delete-this-folder/default.png') { ?>
        <img src="<?=base_url()?>assets/img/<?=$nama_file_image?>" class="new-panel w-50 rounded mx-auto d-block">
    <?php } ?>
    <div class="new-panel">
        <pre><?=nl2br($isi)?></pre>
    </div>
    
</div>


