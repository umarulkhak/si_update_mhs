<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="css\style.css">
  <body>

    	<div class="box_header">
    	<div class="garis_atas"></div>
    	<div class="box_top_menu kertas2">
    		<div class="nama_sekolah">

    			<div class="head_title">
    				<a href="/" style="color:white">SIUPDATE
    				</a><div style="font-size: 9px;color: white"><a href="/" style="color:white"><font color="#FFF">PoliTekniK Harapan Bersama</font></a></div>
    				</div>
	         </div>
    			<div>
    				<div class="box_menu_atas">
    				<ul></ul>				</div>
    			</div>
    			<div class="clear"></div>
    		</div>

    </div>


<title>SI Update Data Mahasiswa</title>
<h3 align="center">Data Mahasiswa</h3>
<hr>
<table border="1" cellspacing="0" width="100%">
    <th>ID</th>
    <th>NIM</th>
    <th>NAMA</th>
    <th>KELAS</th>
    <th>Aksi</th>
  </tr>
</body>
</html>
<?php
include "config.php";
$sqlKar = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id ASC");

while ($d = mysqli_fetch_array($sqlKar)) {
    echo "<tr>
        <td align='center'>$d[id]</td>
        <td align='center'>$d[nim]</td>
        <td align='center'>$d[nama]</td>
        <td align='center'>$d[kelas]</td>
        <td align='center'>
            <a href='edit_maha.php?nim=$d[nim]'>Edit</a>
        </td>
    </tr>";
}
 ?>
</table>
