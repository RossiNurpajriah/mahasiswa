<?php

    require "koneksi.php";

?>
<html>
    <head>
        <title>identitas</title>
    </head>

    <body>
        <h1>identitas</h1>

        <form method="post" action="tambahAksi.php">
        <table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="namaMahasiswa"></td>
			</tr>
            <tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
        </form>
    </body>
</html>