<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['nama']));
$kategori = $_POST['kategori_produk'];
$pengirim = addslashes (strip_tags ($_POST['harga']));
$foto = addslashes (strip_tags ($_POST['foto']));
//insert ke tabel
$query = "INSERT INTO produk(id_kategori,nama,harga,foto) 
VALUES('$kategori','$judul','$pengirim','$foto')";
$sql = mysqli_query ($con,$query);
if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
	<script language="JavaScript">  

		alert('Produk berhasil ditambahkan......');  

 		document.location='index.php?page=produk';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Produk gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Produk</title>
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
						<li><i class="fa fa-laptop"></i>Input Berita</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="4px" cellspacing="0" border="0" width="90%">

<tr>
<td width="200">Nama Barang</td>
<td>: <input type="text" name="nama"
size="30"></td>
</tr>
<tr>
<td>Kategori</td>
<td>:
<select name="kategori_produk">
<?php
$query = "SELECT id, nama FROM kategori_produk ORDER BY nama";
$sql = mysqli_query ($con,$query);
while ($hasil = mysqli_fetch_array ($sql)) {
echo "<option
value='$hasil[id]'>$hasil[nama]</option>";
}
?>
</select></td>
</tr>
<tr>
<td>Harga</td>
<td>: <input type="number" name="harga" size="30">
</td>
</tr>
<tr>
<td>Link Foto</td>
<td>: <input name="foto" size="30">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Produk">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()">
</td>
</tr>
</table>
</FORM>
</body>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>