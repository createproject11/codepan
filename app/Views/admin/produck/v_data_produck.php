<?= $this->extend('templates/v_super'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="blog-header">
            <a href="/add_produck">Add Produck</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="data-blog table-responsive">
            <table class="table table-bordered table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">foto</th>
                        <th scope="col" width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($produck as $produck) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $produck['judul']; ?></td>
                            <td><?= $produck['penulis']; ?></td>
                            <td><img src="/assets/img/produck/<?= $produck['foto']; ?>" alt="<?= $produck['foto']; ?>" class="img-thumbnail show-thumbnail myImg"></td>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>
                            <td>
                                <a href="/produck/updatePage/<?= $produck['slug']; ?>" class="bg-warning btn"></a>
                                <form action="/produck/<?= $produck['id']; ?>" method="post" class="d-inline">
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>