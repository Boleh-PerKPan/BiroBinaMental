<div class="new-panel">
    <?php foreach($page_data as $data) :  ?>
        <div>
            <h4 class="nav-style"><?=$data['text']?></h4>
            <iframe width="" height="500px" class="w-100 new-panel"  src="https://www.youtube.com/embed/<?=$data['nama_file']?>">
            </iframe>
        </div>
        <hr>    
        <a href="<?=base_url()?>home_user/index_video" style="color:black"><i class="fas fa-chevron-right"></i> Video Lainnya</a> <hr>
    <?php endforeach; ?>
    
</div>