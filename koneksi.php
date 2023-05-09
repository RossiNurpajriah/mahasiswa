<?php

    $koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");
    
    if(!$koneksi) {
        echo "gagal terhubung ke database". mysqli_connect_error();
    } 
?>