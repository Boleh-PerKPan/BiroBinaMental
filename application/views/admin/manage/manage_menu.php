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
    <a type="button" href="<?= base_url() ?>posts_tambah/tambah_menu" class="btn btn-outline-primary mb-3"><i class="fas fa-plus"></i> ADD</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Menu Name</th>
                <th scope="col">Link</th>
                <th scope="col">Order no.</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                <th scope="col">Parent Id</th>
                <th scope="col">#id</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post) : ?>
                <tr>
                    <td scope="row"><i class="<?= $post['icon'] ?>"></i><?= $post['nama_menu'] ?></td>
                    <td scope="row"><?= $post['link'] ?></td>
                    <td scope="row"><?= $post['order_no'] ?></td>
                    <td scope="row"><?= $post['status'] ?></td>
                    <td scope="row">
                        <a href="#" class="btn btn-outline-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">action</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="<?= base_url() ?>posts_update/tambah_submenu/<?= $post['id_menu'] ?>">Sub Module</a>
                            <a class="dropdown-item" href="<?= base_url() ?>posts_update/update_menu/<?= $post['id_menu'] ?>">Edit</a>
                            <a class="dropdown-item" href="<?= base_url() ?>posts_hapus/hapus_menu/<?= $post['id_menu'] ?>/<?= $post['parent_id'] ?>" onclick="return confirm('apakah anda ingin menghapusnya?')">Delete</a>
                        </div>
                    </td>
                    <td scope="row"><?= $post['parent_id'] ?></td>
                    <td scope="row"><?= $post['id_menu'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>