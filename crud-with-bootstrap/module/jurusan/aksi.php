<?php
include '../../config/koneksi.php';

$module = $_GET['module'];
$action = $_GET['action'];

//Bagian Insert Data Jurusan
if ($module == 'jurusan' and $action == 'insert') {
    //cek apakah tombol submit telah diklik
    if (isset($_POST['submit'])) {

        //Query insert data
        $sql = "INSERT INTO jurusan (nama_jurusan, singkatan)
    VALUES ('$_POST[nama_jurusan]','$_POST[singkatan]')";

        if (mysqli_query($koneksi, $sql)) {
            echo "<script>alert('Data berhasil ditambahkan'); window.location = '../../index.php?page=tampil-jurusan';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Access Forbidden!";
    }
}
// Bagian UPDATE Data Jurusan 
elseif ($module == 'jurusan' and $action == 'update') {
    //cek apakah tombol submit telah diklik
    if (isset($_POST['submit'])) {

        //Query Update data
        $query = "UPDATE jurusan SET nama_jurusan='$_POST[nama_jurusan]', singkatan='$_POST[singkatan]' WHERE id_jurusan='$_POST[id_jurusan]'";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Data berhasil diupdate'); window.location = '../../index.php?page=tampil-jurusan';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Access Forbidden!";
    }
}

// Bagian DELETE Data Jurusan
elseif ($module == 'jurusan' and $action == 'delete') {

    //ambil id_jurusan yang dikirim melalui link
    $id = $_GET['id'];

    //Query hapus data
    $query = "DELETE FROM jurusan WHERE id_jurusan = $id";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus'); window.location = '../../index.php?page=tampil-jurusan';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
