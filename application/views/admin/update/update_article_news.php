<div class="container mr-3 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="date">Tanggal</label>
                            <input type="text" name="date" class="form-control form-control-sm" id="date" value="<?= $post['tanggal_publish'] ?>" disabled>
                            <input type="hidden" name="date" class="form-control form-control-sm" id="date" value="<?= $post['tanggal_publish'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control form-control-sm" id="judul" value="<?= $post['judul'] ?>">
                            <?= form_error('judul', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori </label>

                            <select class="form-control" id="kategori" name="kategori">

                                <?php foreach ($kategori as $listkategori) { ?>
                                    <option value="<?= $listkategori['id_artikel_kategori'] ?>"><?php echo $listkategori['nama_artikel_kategori'] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status </label>

                            <select class="form-control" id="status" name="status">

                                <option value="Publish" <?php if ($post['status'] == 'Publish') : ?>selected="selected" <?php endif; ?>>Publish</option>
                                <option value="Non-Publish" <?php if ($post['status'] == 'Non-Publish') : ?>selected="selected" <?php endif; ?>>Non-Publish</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="isi">Isi </label>
                            <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"><?= $post['isi'] ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                        <input class="btn btn-primary" type="reset" value="Reset">
                        <a class="btn btn-primary" href="<?= base_url() ?>home_admin/manage_article_news">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>