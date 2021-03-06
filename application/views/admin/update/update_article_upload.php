<div class="container mr-3 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tahun_berkas">Tahun Berkas</label>
                            <input type="number" name="tahun_berkas" class="form-control form-control-sm" id="tahun_berkas" value="<?= $post['tahun_berkas'] ?>">
                            <?= form_error('tahun_berkas', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="judul" name="judul" class="form-control form-control-sm" id="judul" value="<?= $post['judul'] ?>">
                            <?= form_error('judul', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status </label>

                            <select class="form-control" id="status" name="status">

                                <option value="Publish" <?php if ($post['status'] == 'Publish') : ?>selected="selected" <?php endif; ?>>Publish</option>
                                <option value="Non-Publish" <?php if ($post['status'] == 'Non-Publish') : ?>selected="selected" <?php endif; ?>>Non-Publish</option>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                        <input class="btn btn-primary" type="reset" value="Reset">
                        <a class="btn btn-primary" href="<?= base_url() ?>home_admin/manage_article_upload">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>