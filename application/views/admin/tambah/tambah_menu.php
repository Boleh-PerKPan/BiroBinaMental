<div class="container mr-3 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Menu</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" value="<?= set_value('name') ?>">
                            <?= form_error('name', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="link" name="link" class="form-control form-control-sm" id="link" value="<?= set_value('link') ?>">
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon Menu</label>
                            <input type="text" name="icon" class="form-control form-control-sm" id="icon" value="<?= set_value('icon') ?>">
                            <?= form_error('icon', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="order_no">Nomor Order</label>
                            <input type="text" class="form-control form-control-sm" value="<?= $order_no ?>" disabled>
                            <input type="hidden" name="order_no" class="form-control form-control-sm" id="order_no" value="<?= $order_no ?>">
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