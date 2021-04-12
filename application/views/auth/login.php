<main role="main" class="container jumbotron bg-transparent a">
    <?= $this->session->flashdata('message3') ?>
    <?php $this->session->unset_userdata('message3'); ?>
    <div class="col-md-4 mx-auto" style="margin-top: 80px;">
        <div class="card">
            <div class="">
                <img src="<?= base_url() ?>assets/img/dont-delete-this-folder/sumbarprof_logo.ico" alt="Gambar login" class="" style="margin-top:30px ; margin-bottom: 10px; height:100px; width: 100px; ">
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="type" class="form-control form-control-sm" name="username" required autofocus>
                        <?= $this->session->flashdata('message') ?>
                        <?php $this->session->unset_userdata('message'); ?>
                        <!-- <small class="form-text text-danger">Username Wajib Diisi</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control form-control-sm" name="password" required>
                        <?= $this->session->flashdata('message2') ?>
                        <?php $this->session->unset_userdata('message2'); ?>
                        <!-- <small class="form-text text-danger">Password Wajib Diisi</small> -->
                    </div>
                    <button type="submit" class="btn btn-primary form-control" style="margin-bottom: 20px;">Login</button>
                </form>
            </div>
        </div>
    </div>

</main>