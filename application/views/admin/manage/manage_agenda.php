<div class="container mr-3">
    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="row">
            <div class="col-md-12 alert alert-success">
                Post Berhasil <?= $this->session->flashdata('pesan') ?>
                <?php $this->session->unset_userdata('pesan'); ?>
            </div>
        </div>
    <?php endif ?>
    <br>
    <a type="button" href="<?= base_url() ?>posts_tambah/tambah_agenda" class="btn btn-outline-primary mb-3"><i class="fas fa-plus"></i> ADD</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Created by</th>
                <th scope="col">Date Implementation</th>
                <th scope="col">Location</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                <th scope="col">#id</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post) : ?>
                <tr>
                    <td scope="row"><?= $post['judul'] ?></td>
                    <td scope="row"><?= $post['nama_lengkap'] ?></td>
                    <td scope="row"><?= $post['tanggal_pelaksanaan'] ?></td>
                    <td scope="row"><?= $post['tempat_pelaksanaan'] ?></td>
                    <td><img src="<?= base_url() ?>assets/img/<?= $post['nama_file'] ?>" alt="image" height="50px" width="80px"></td>
                    <td scope="row"><?= $post['status'] ?></td>
                    <td scope="row">
                        <a href="#" class="btn btn-outline-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">action</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url() ?>posts_update/update_agenda/<?= $post['id_agenda'] ?>">Edit</a>
                            <a class="dropdown-item" href="<?= base_url() ?>posts_hapus/hapus_agenda/<?= $post['id_agenda'] ?>" onclick="return confirm('apakah anda ingin menghapusnya?')">Delete</a>
                        </div>
                    </td>
                    <td scope="row"><?= $post['id_agenda'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>