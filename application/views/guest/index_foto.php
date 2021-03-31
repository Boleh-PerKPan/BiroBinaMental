<div>
    <div class="new-panel">
        <h4 class="nav-style">Index Foto</h4>
    </div>
    <div class="new-panel row row-cols-1">
        <?php for ($i=0; $i < 10; $i++) {  ?>
            <div class="col mb-3">
                <div class="card">
                    <img src="<?=base_url()?>assets/files/images/pelantikan_gub.jpg" class="card-img-top m-auto" style="width:200px; " alt="...">
                    <div class="card-body">
                        <h6 class="card-title">Pelantikan gubernur dan wakil gubernur sumbar periode 2021-2024</h6>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <hr>
    <div style="margin-bottom:1rem; text-align:center">
        <a href="<?=base_url()?>home_user/index_foto" role="button" class="btn my-btn">1|2|3|nexpage</a>
    </div>
</div>