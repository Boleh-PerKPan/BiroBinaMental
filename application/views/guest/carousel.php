<div class="row">
    <div class="col-md-8 new-panel">
        <div id="carousel" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <?php 
                if ($data_carousel==null) {
                   $data_carousel[] = array(
                       'nama_file' => 'default.png',
                       'text' => 'Biro Bina Mental dan Kesejahteraan Rakyat Sumbar'
                   );
                }
                $row = 1;
                foreach ($data_carousel as $data) :?>
                    <?php if ($row == 1) { ?>
                        <div class="carousel-item active">
                    <?php $row = $row+1; 
                    }else { ?>
                        <div class="carousel-item">
                    <?php } ?>
                        <img src="<?= base_url() ?>assets/img/<?=$data['nama_file']?>" class="d-block w-100" style="max-height:30rem">
                        <div class="carousel-caption d-none d-md-block white-bg-transparent">
                            <h5><?=$data['text'];?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>