<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['nama']));
$kategori = $_POST['deskripsi'];
//insert ke tabel
$query = "INSERT INTO kategori_produk(nama,deskripsi) 
VALUES('$judul','$kategori')";
$sql = mysqli_query ($con,$query);
if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
	<script language="JavaScript">  

		alert('Produk berhasil ditambahkan......');  

 		document.location='index.php?page=kategori_produk';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Berita gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Kategori Produk</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=kategori_produk';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Kategori Produk</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="4px" cellspacing="0" border="0" width="90%">

<tr>
<td width="200">Nama Kategori</td>
<td>: <input type="nama" name="nama"
size="30"></td>
</tr>
</select></td>
</tr>
<tr>
<td>Deskripsi</td>
<td>: <textarea name="deskripsi" cols="50" rows="4">
</textarea></td>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Kategori">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()">
</td>
</tr>
</table>
</FORM>
</body>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>