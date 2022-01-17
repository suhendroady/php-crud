<?php if (!isset($_GET['page'])) : ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Selamat Datang</h1>
        <p class="lead">
            Sistem Informasi Sekolah SMK Muhammadiyah
            2 Pekanbaru.
        </p>
    </div>

<?php elseif ($_GET['page'] == 'tampil-siswa') :

    include 'module/siswa/tampil-siswa.php';

elseif ($_GET['page'] == 'tambah-siswa') :

    include 'module/siswa/tambah-siswa.php';

elseif ($_GET['page'] == 'tampil-jurusan') :

    include 'module/jurusan/tampil-jurusan.php';

elseif ($_GET['page'] == 'tambah-jurusan') :

    include 'module/jurusan/tambah-jurusan.php';

elseif ($_GET['page'] == 'edit-jurusan') :

    include 'module/jurusan/edit-jurusan.php';

endif;
