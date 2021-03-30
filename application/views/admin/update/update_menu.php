<main role="main" class="container">
    <div class="row">
        <div class="col-2 ">
        </div>
        <div class="col-8 mx-2 my-2">
            <form method="POST" enctype="multipart/form-data">
                <div class="card mx-4" style="width: 40rem;">
                    <div class="card-body">
                        <h4 class="text-md-center"><?= $judul ?></h4>
                        <div class="form-group">
                            <label for="name">Menu Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" value="<?= $post['nama_menu'] ?>">
                            <?= form_error('name', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="link" name="link" class="form-control form-control-sm" id="link" value="<?= $post['link'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon Menu</label>
                            <input type="text" name="icon" class="form-control form-control-sm" id="icon" value="<?= $post['icon'] ?>">
                            <?= form_error('icon', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="order_no">Order No.</label>
                            <input type="number" name="order_no" id="order_no" class="form-control form-control-sm" value="<?= $post['order_no'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Menu Parent</label>

                            <select class="form-control" id="parent_id" name="parent_id">

                                <option value="0" selected="selected">0</option>

                                <?php foreach ($menu as $menu) { ?>
                                    <option value="<?= $menu['id_menu'] ?>"><?= $menu['nama_menu'] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status </label>

                            <select class="form-control" id="status" name="status">

                                <option value="Aktif" selected="selected">Aktif</option>
                                <option value="Non-Aktif">Non-Aktif</option>

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                        <input class="btn btn-primary" type="reset" value="Reset">
                        <a class="btn btn-primary" href="<?= base_url() ?>home_admin/manage_menu">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>