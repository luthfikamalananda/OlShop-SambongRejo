<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT id, nama, email, situs, pesan 
FROM bukutamu WHERE id='$id_berita'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id_berita = $hasil['id'];
$nama = stripslashes ($hasil['nama']);
$email = stripslashes ($hasil['email']);
$situs = stripslashes ($hasil['situs']);
$pesan = stripslashes ($hasil['pesan']);
//proses edit berita
if (isset($_POST['Edit'])) {
$id_berita = $_POST['hidberita'];
$nama = addslashes (strip_tags ($_POST['nama']));
$email = addslashes (strip_tags ($_POST['email']));
$situs = addslashes (strip_tags ($_POST['situs']));
$pesan = addslashes (strip_tags ($_POST['pesan']));
//update berita
$query = "UPDATE bukutamu SET nama='$nama',email='$email',situs='$situs',
pesan='$pesan' WHERE id='$id_berita'";
$sql = mysqli_query ($con,$query);
if ($sql) {
//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update......');  
 		document.location='index.php?page=bukutamu';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Berita gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Edit Buku Tamu</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=bukutamu';  
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
<table cellpadding="4" cellspacing="0" border="0" width="90%">

<tr>
<td width="200">Nama</td>
<td>: <input type="text" name="nama"
size="30" value="<?php echo $nama ?>"></td>
</tr>
<tr>
<td>E-mail</td>
<td>: <input type="email" name="email"
size="30" value="<?php echo $email ?>">
</td>
</tr>
<tr>
<td>Situs</td>
<td>: <input type="text" name="situs"
size="30" value="<?php echo $situs ?>"></td>
</tr>
<tr>
<td>Pesan</td>
<td>: 
<textarea name="Pesan" rows="6" cols="40"><?php echo $pesan ?></textarea> 

</td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="hidberita" value="<?=$id_berita?>">
<input type="submit" name="Edit" value="Edit Buku Tamu">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()"></td>
</tr>
</table>
</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>