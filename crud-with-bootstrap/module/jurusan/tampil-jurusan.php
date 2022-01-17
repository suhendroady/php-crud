<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Data Jurusan</h1>
    <p class="lead">
        Data Jurusan di SMK Muda
    </p>
    <p><a href="index.php?page=tambah-jurusan" class="btn btn-primary">Tambah Data Jurusan</a></p>
</div>

<?php
$sql = "SELECT * FROM jurusan";
$result = mysqli_query($koneksi, $sql);
?>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Jurusan</th>
            <th scope="col">Singkatan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($jur = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $jur['nama_jurusan']; ?></td>
                <td><?= $jur['singkatan']; ?></td>
                <td>
                    <a href="?page=edit-jurusan&id=<?= $jur['id_jurusan']; ?>" class="badge badge-success">Edit</a>
                    <a href="module/jurusan/aksi.php?module=jurusan&action=delete&id=<?= $jur['id_jurusan']; ?>" class="badge badge-danger">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
        }
        ?>

    </tbody>
</table>