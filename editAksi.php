<?php

require "koneksi.php";

// ambil name dari file tambah data
$id                 = $_POST['id'];
$nama               = $_POST['nama'];
$nim                = $_POST['nim'];
$alamat             = $_POST['alamat'];


// input data siswa
$input = mysqli_query($koneksi, "UPDATE identitas SET
                                nama = '$nama',
                                nim = '$nim',
                                alamat = '$alamat' where id = '$id'");

header("location:index.php");
?>