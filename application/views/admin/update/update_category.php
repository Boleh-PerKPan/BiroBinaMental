<div class="container mr-3 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4><?= $judul ?></h4>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" value="<?= $post['nama_artikel_kategori'] ?>">
                            <?= form_error('name', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status </label>

                            <select class="form-control" id="status" name="status">

                                <option value="Aktif" <?php if ($post['status'] == 'Aktif') : ?>selected="selected" <?php endif; ?>>Aktif</option>
                                <option value="Non-Aktif" <?php if ($post['status'] == 'Non-Aktif') : ?>selected="selected" <?php endif; ?>>Non-Aktif</option>

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <input class="btn btn-primary" type="reset" value="Reset">
                        <a class="btn btn-primary" href="<?= base_url() ?>home_admin/manage_category">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>