<?= $this->extend('templates/v_super_user'); ?>

<?= $this->section('style'); ?>
<link rel="stylesheet" href="/assets/css/karir.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<?= $this->endSection(); ?>

<?= $this->section('content_user'); ?>
<!-- Jumbotron Karir -->
<div id="mt" class="jumbotron jumbotron-karir text-center"
    style="background-image: url('/assets/img/banner/<?= $banner['']?>');">
    <div class="container" data-aos="fade-up">
        <div class="content text-center">
            <h1>KARIR</h1>
            <p class="text-center">Kami mengundang individu terbaik dengan kemampuan yang beragam untuk bersama-sama
                menghasilkan karya yang akan menjadi sebuah capaian luar biasa di masa depan. </p>
        </div>
    </div>
</div>
<!-- End of jumbotron Karir -->

<!-- List Aspek Karir -->
<div class="list-karir">
    <div class="container">
        <ul class="row">
            <li class="col-lg-3 col-sm-6" data-aos="fade-right">
                <div class="number">
                    <h1>1</h1>
                </div>
                <div class="text">
                    <h3>KERJA TIM</h3>
                    <p>Bekerjasama adalah hal penting untuk meraih kesuksesan. Kami mendorong terciptanya keragaman
                        pendapat dan saling percaya.</p>
                </div>
            </li>
            <li class="col-lg-3 col-sm-6" data-aos="fade-right" data-aos-delay="200">
                <div class="number">
                    <h1>2</h1>
                </div>
                <div class="text">
                    <h3>RESPEK</h3>
                    <p>Kami memperlakukan semua karyawan, vendor, dan mitra dengan hormat. Kami berkembang dalam
                        transparansi dan kejujuran.</p>
            </li>
            <li class="col-lg-3 col-sm-6" data-aos="fade-right" data-aos-delay="400">
                <div class="number">
                    <h1>3</h1>
                </div>
                <div class="text">
                    <h3>PASSION</h3>
                    <p>Kami menjunjung tinggi keberhasilan karyawan, mitra, dan bahkan produk. Dengan passion yang
                        tepat, karir Anda juga meningkat pesat.</p>
            </li>
            <li class="col-lg-3 col-sm-6" data-aos="fade-right" data-aos-delay="600">
                <div class="number">
                    <h1>4</h1>
                </div>
                <div class="text">
                    <h3>INOVASI</h3>
                    <p>Sebuah jiwa utama yang selalu kami tanamkan kepada setiap anggota tim adalah inovasi.</p>
            </li>
        </ul>
    </div>
</div>
<!-- End of List Aspek Karir -->

<!-- Tabel Apply Posisi Karir -->
<div class="tabel-bergabung">
    <div class="container">
        <div class="container-judul">
            <p class="sub-judul">Sedang Dibuka</p>
            <h2>BERGABUNGLAH DALAM TIM HEBAT</h2>
            <p class="text-under-judul">Mantapkan diri, meraih keberhasilan di masa depan.</p>
        </div>
        <div class="table-responsive" data-aos="fade-up">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Description</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($karir as $karir) :
                    ?>
                    <tr>
                        <th scope="row"><?= $karir['nama_karir']; ?></th>
                        <td class="lokasi"><?= $karir['lokasi']; ?></td>
                        <td><?= $karir['deskripsi']; ?></td>
                        <td class="btn-tabel d-flex justify-content-end"><a href="">Apply Now</a></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <p class="text-under-table text-center" data-aos="fade-up">Kami selalu mencari orang-orang berbakat untuk
            bergabung dengan <a href="#" class="hvr-underline-from-left">tim kami</a>. Follow kami di <a href="#"
                class="hvr-underline-from-left">LinkedIn.</a></p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2926A9" fill-opacity="1"
            d="M0,192L34.3,176C68.6,160,137,128,206,138.7C274.3,149,343,203,411,192C480,181,549,107,617,80C685.7,53,754,75,823,106.7C891.4,139,960,181,1029,208C1097.1,235,1166,245,1234,240C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
</div>
<!-- End of Tabel Apply Posisi Karir -->
<?= $this->endSection(); ?>