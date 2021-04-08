<main role="main" class="container jumbotron bg-transparent a">
    <?= $this->session->flashdata('message3') ?>
    <?php $this->session->unset_userdata('message3'); ?>
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header text-center">LOGIN</div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="type" class="form-control" name="username" required autofocus>
                        <?= $this->session->flashdata('message') ?>
                        <?php $this->session->unset_userdata('message'); ?>
                        <!-- <small class="form-text text-danger">Username Wajib Diisi</small> -->
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" required>
                        <?= $this->session->flashdata('message2') ?>
                        <?php $this->session->unset_userdata('message2'); ?>
                        <!-- <small class="form-text text-danger">Password Wajib Diisi</small> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

</main>