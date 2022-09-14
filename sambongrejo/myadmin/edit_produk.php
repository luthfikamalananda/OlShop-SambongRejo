<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT id, id_kategori, nama,
harga,foto FROM produk WHERE id='$id_berita'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id_berita = $hasil['id'];
$id_kategori = stripslashes ($hasil['id_kategori']);
$judul = stripslashes ($hasil['nama']);
$pengirim = stripslashes ($hasil['harga']);
$foto = stripslashes ($hasil['foto']);
//proses edit berita
if (isset($_POST['Edit'])) {
$id_berita = $_POST['hidberita'];
$judul = addslashes (strip_tags ($_POST['nama']));
$kategori = $_POST['kategori_produk'];
$pengirim = addslashes (strip_tags ($_POST['harga']));
$foto = addslashes (strip_tags ($_POST['foto']));
//update berita
$query = "UPDATE produk SET id_kategori='$kategori',nama='$judul',harga='$pengirim', foto='$foto' WHERE id='$id_berita'";
$sql = mysqli_query ($con,$query);
if ($sql) {
//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update......');  
 		document.location='index.php?page=produk';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Berita gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Edit Berita</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=produk';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Edit Berita</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="3" cellspacing="0" border="0" width="90%">

<tr>
<td width="200">Nama Barang</td>
<td>: <input type="text" name="nama" value="<?php echo $judul ?>"
size="30"></td>
</tr>
<tr>
<td>Kategori</td>
<td>:
<select name="kategori_produk">
<!-- <option  disabled selected value>Silahkan ganti</option> -->
<?php
$query = "SELECT * FROM kategori_produk ORDER BY nama";
$sql = mysqli_query ($con,$query);
while ($hasil = mysqli_fetch_array ($sql)) {
$selected = ($hasil['id']==$id_kategori) ? "selected" : "";
echo "<option
value='$hasil[id]' $selected>$hasil[nama]</option>";
}
?>
</select></td>
</tr>
<tr>
<td>Harga</td>
<td>: <input type="number" name="harga" size="30" value="<?php echo $pengirim ?>">
</td>
</tr>
<tr>
<td>Foto</td>
<td>: <input name="foto" size="30" value="<?php echo $foto ?>">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="hidberita" value="<?=$id_berita?>">
<input type="submit" name="Edit" value="Edit Produk">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()"></td>
</tr>
</table>
</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>