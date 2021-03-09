<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row">

        <div class="col-sm-12">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Admin</h6>
                </div>
                <div class="card-body add-blog px-4 tambah-admin">
                    <form action="/sub/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="input-group mb-3 cabang">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Sub Kategori</span>
                            </div>
                            <input type="text" class="rounded-right form-control<?= ($validation->hasError('nama_sub')) ? ' is-invalid' : ''; ?>" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="nama_sub" value="<?= old('nama_sub'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_sub'); ?>
                            </div>
                        </div>

                        <input type="submit" value="Create" class="submit btn-save">
                    </form>
                </div>
            </div>

            <div class="card shadow">
                <div class="data-blog table-responsive">
                    <table class="table table-bordered table-striped table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Sub Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($sub_kategori as $sub_kategori) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $sub_kategori['nama_sub']; ?></td>
                                    <td>
                                        <a href="/update_sub/<?= $sub_kategori['id']; ?>" class=" btn bg-warning"></a>
                                        <form action="/sub/<?= $sub_kategori['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')"></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>