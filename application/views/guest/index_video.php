
    <div class="new-panel">
        <div>
            <h4 class="nav-style">Index Video</h4>
        </div>
        <div class="card new-panel" style="">
            <?php for ($i=0; $i < 10; $i++) { ?>
                <iframe width="" height="500px" class="w-75 mx-auto"  src="https://www.youtube.com/embed/xV1HeAbOUGw">
                </iframe>
                <div class="card-body text-center">
                    <h5>Judul / text Video</h5>
                    <small>
                        <i class="fas fa-user"></i> Dipublish oleh &nbsp; &nbsp;
                        <i class="fas fa-calendar-alt"></i> waktu publish &nbsp; &nbsp;
                    </small>
                </div>
                <hr>
            <?php } ?>
            <div style="margin: auto; margin-bottom:1rem;">
                <a href="<?=base_url()?>guest/index_video" role="button" class="btn my-btn">1|2|3|nexpage</a>
            </div>
        </div>
      
    </div>

    <?php
