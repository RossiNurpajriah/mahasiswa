<?php

    require "koneksi.php";
    $id = $_GET["id"];
    $query          = mysqli_query($koneksi, "SELECT * FROM identitas WHERE id = $id ");

    $ambilData      = mysqli_fetch_assoc($query);
?>

<html>
    <head>
        <title>identitas</title>
    </head>

    <body>
        <h1>identitas</h1>
         
        
        <a href="index.php">kembali</a>
        <br>
        <form method="post" action="editAksi.php">
        <input type="hidden" name="id" value="<?= $ambilData['id']; ?>">
        <table>
			<tr>
				<td>id</td>
				<td>
                    <input type="number" name="id" value="<?= $ambilData['id']; ?>">
                </td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" 
                value="<?= $ambilData['nama']; ?>"></td>
			</tr>
            <tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?= $ambilData['nim']; ?>"></td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?= $ambilData['alamat']; ?>"></td>
			</tr>
            <tr>
				<td></td>
				<td><input type="submit" value="EDIT"></td>
			</tr>		
		</table>
        </form>
    </body>
</html>