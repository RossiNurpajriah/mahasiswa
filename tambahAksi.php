<?php

require "koneksi.php";

// ambil name dari file tambah data
$id              = $_POST['id'];
$nama            = $_POST['namaMahasiswa'];
$nim             = $_POST['nim'];
$alamat          = $_POST['alamat'];

// input data siswa
$input = mysqli_query($koneksi, "INSERT INTO identitas VALUES ('$id', '$nama', '$nim', '$alamat') ");

header("location:index.php");
?>