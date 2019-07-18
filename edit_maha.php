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
<h3>Form Update Data Mahasiswa</h3>
<hr>
<link rel="stylesheet" href="css\editkar.css">
<?php
include "config.php";
$sqlEdit=mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim ='$_GET[nim]'");
$e=mysqli_fetch_array($sqlEdit);
 ?>
<form method="post" action="">
      <table>
        <tr>
          <td>NIM</td>
          <td><input type="text" name="txtNIM" value="<?php echo $e['nim']; ?>" readonly><td/>
        </tr>
        <tr>
          <td>NAMA</td>
          <td><input type="text" name="txtNAMA" value="<?php echo $e['nama']; ?>"><td/>
        </tr>
        <tr>
          <td>KELAS</td>
          <td>
            <select name="txtKEL">
              <option value="<?php echo $e['kelas']; ?>"><?php echo $e['kelas']; ?></option>
              <option value="1A">1A</option>
              <option value="1B">1B</option>
              <option value="1C">1C</option>
              <option value="1E">1E</option>
              <option value="2A">2A</option>
              <option value="2B">2B</option>
              <option value="2C">2C</option>
              <option value="2E">2E</option>
              <option value="3A">3A</option>
              <option value="3B">3B</option>
              <option value="3C">3C</option>
              <option value="3E">3E</option>
              <option value="4A">4A</option>
              <option value="4B">4B</option>
              <option value="4C">4C</option>
              <option value="4E">4E</option>
              <option value="5A">5A</option>
              <option value="5B">5B</option>
              <option value="5C">5C</option>
              <option value="5E">5E</option>
              <option value="6A">6A</option>
              <option value="6B">6B</option>
              <option value="6C">6C</option>
              <option value="6E">6E</option>
              <option value="7A">7A</option>
              <option value="7B">7B</option>
              <option value="7C">7C</option>
              <option value="7E">7E</option>
              <option value="8A">8A</option>
              <option value="8B">8B</option>
              <option value="8C">8C</option>
              <option value="8E">8E</option>
            </select>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Simpan"><td/>
        </tr>
        </table>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD']== 'POST') {
      $update = mysqli_query($conn, "UPDATE mahasiswa SET nama='$_POST[txtNAMA]',kelas='$_POST[txtKEL]' WHERE nim='$_POST[txtNIM]'");

            if ($update) {
                header('location:index.php');
            }else {
              echo "Gagal Mengupdate Data!";
            }
}
 ?>
