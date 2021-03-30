<div class="container mr-3 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" value="<?= set_value('name') ?>">
                            <?= form_error('name', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control form-control-sm" id="email" value="<?= set_value('email') ?>">
                            <?= form_error('email', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="no_telp">no_telp</label>
                            <input type="text" name="no_telp" class="form-control form-control-sm" id="no_telp" value="<?= set_value('no_telp') ?>">
                            <?= form_error('no_telp', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control form-control-sm" id="username" value="<?= set_value('username') ?>">
                            <?= form_error('username', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control form-control-sm" id="password" value="<?= set_value('password') ?>">
                            <?= form_error('password', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Instansi </label>

                            <select class="form-control" id="instansi" name="instansi">

                                <?php foreach ($instansi as $instansi) { ?>
                                    <option value="<?= $instansi['id_instansi'] ?>"><?= $instansi['nama_instansi'] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Group User </label>

                            <select class="form-control" id="role" name="role">

                                <?php foreach ($role as $role) { ?>
                                    <option value="<?= $role['id_role'] ?>"><?= $role['nama_role'] ?></option>
                                <?php } ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status </label>

                            <select class="form-control" id="status" name="status">

                                <option value="Aktif">Aktif</option>
                                <option value="Non-Aktif" selected="selected">Non-Aktif</option>

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Daftar</button>
                        <input class="btn btn-primary" type="reset" value="Reset">
                        <a class="btn btn-primary" href="<?= base_url() ?>home_admin/manage_menu">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>