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
    <a type="button" href="<?= base_url() ?>posts_tambah/tambah_user" class="btn btn-outline-primary mb-3"><i class="fas fa-plus"></i> ADD</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Instansi</th>
                <th scope="col">Status</th>
                <th scope="col">Email</th>
                <th scope="col">Telp</th>
                <th scope="col">Group</th>
                <th scope="col">Action</th>
                <th scope="col">#id</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post) : ?>
                <tr>
                    <td scope="row"><?= $post['nama_lengkap'] ?></td>
                    <td scope="row"><?= $post['nama_instansi'] ?></td>
                    <td scope="row"><?= $post['status'] ?></td>
                    <td scope="row"><?= $post['email'] ?></td>
                    <td scope="row"><?= $post['no_telp'] ?></td>
                    <td scope="row"><?= $post['nama_role'] ?></td>
                    <td scope="row">
                        <a href="#" class="btn btn-outline-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">action</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url() ?>posts_update/update_user/<?= $post['id_user'] ?>">Edit</a>
                            <a class="dropdown-item" href="<?= base_url() ?>posts_hapus/hapus_user/<?= $post['id_user'] ?>" onclick="return confirm('apakah anda ingin menghapusnya?')">Delete</a>
                        </div>
                    </td>
                    <td scope="row"><?= $post['id_user'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>