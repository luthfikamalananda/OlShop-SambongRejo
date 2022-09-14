<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT * FROM kategori_produk WHERE id='$id_berita'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$judul = stripslashes ($hasil['nama']);
$headline = stripslashes ($hasil['deskripsi']);

//proses edit berita
if (isset($_POST['Edit'])) {
$id_berita = $_POST['hidberita'];
$judul = addslashes (strip_tags ($_POST['judul']));
$headline = addslashes (strip_tags ($_POST['deskripsi']));

//update berita
$query = "UPDATE kategori_produk SET nama='$judul',deskripsi='$headline' WHERE id='$id_berita'";
$sql = mysqli_query ($con,$query);
if ($sql) {
//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update......');  
 		document.location='index.php?page=kategori_produk';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Berita gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Edit Kategori Produk</title>
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
						<li><i class="fa fa-laptop"></i>Edit Kategori Produk</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="3" cellspacing="0" border="0" width="90%">

<tr>
<td>Nama Kategori</td>
<td>:
<input type="text" name="judul"
size="20" value="<?=$judul?>"></td></td>
</tr>
<tr>
<td>Deksripsi</td>
<td>: <textarea name="deskripsi" cols="50"
rows="4"><?=$headline?></textarea></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="hidberita" value="<?=$id_berita?>">
<input type="submit" name="Edit" value="Edit Kategori">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()"></td>
</tr>
</table>
</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>