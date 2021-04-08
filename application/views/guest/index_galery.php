<div>
    <div class="new-panel">
        <h4 class="nav-style"><?=$title?></h4>
    </div>
    <div class="new-panel row row-cols-1">
        <?php 
        if ($page_data == null) {
            echo 'Tidak Ada data';
        }
        foreach($page_data as $data) :  ?>
            <div class="col mb-3">
                <div class="card bg-light ">
                    <?php if($data['id_galeri_kategori'] == 2) {?>
                        <img src="<?=base_url()?>assets/img/<?=$data['nama_file']?>" class=" m-auto" style="height:15rem; " >
                    <?php } else { ?> 
                        <iframe width="500px" height="300px" class="m-auto"  src="https://www.youtube.com/embed/<?=$data['nama_file']?>">
                        </iframe>
                        <a href="<?=base_url()?>home_user/show_video/<?=$data['id_galeri_konten']?>" style="text-align:right; "><small>Lihat video ini  &raquo; &nbsp; </small></a>
                    <?php }?> 
                    <div class="card-body nav-style">
                        <h5 class="card-title" style="max-width: 30rem; margin:auto; text-align: center;"><?=$data['text']?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <hr>
    <div style="margin-bottom:1rem; text-align:center">
        <?=$this->pagination->create_links(); ?>
    </div>
</div>