<div class="container mr-3 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control form-control-sm" id="judul" value="<?= $post['text'] ?>">
                            <?= form_error('judul', '<small class="pl-3 text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status </label>

                            <select class="form-control" id="status" name="status">

                                <option value="Publish" <?php if ($post['status'] == 'Publish') : ?>selected="selected" <?php endif; ?>>Publish</option>
                                <option value="Non-Publish" <?php if ($post['status'] == 'Non-Publish') : ?>selected="selected" <?php endif; ?>>Non-Publish</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_file">Kode Video</label>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-5 col-form-label" style="font-size: 10px; font-family: cursive;">https://www.youtube.com/watch?v=</label>
                                <div class="col-sm-7">
                                    <input type=" text" name="nama_file" class="form-control form-control-sm" id="nama_file" value="<?= $post['nama_file'] ?>">
                                    <?= form_error('nama_file', '<small class="pl-3 text-danger">', '</small>') ?>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <input class="btn btn-primary" type="reset" value="Reset">
                        <a class="btn btn-primary" href="<?= base_url() ?>home_admin/manage_video">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>