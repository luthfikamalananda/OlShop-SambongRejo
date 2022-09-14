<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['linkvid']));
$headline = addslashes (strip_tags ($_POST['judul']));
$isi_berita = addslashes (strip_tags ($_POST['creator']));
//insert ke tabel
$query = "INSERT INTO video(linkvid,judul,creator) 
VALUES('$judul','$headline','$isi_berita')";
$sql = mysqli_query ($con,$query);
if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
	<script language="JavaScript">  

		alert('Produk berhasil ditambahkan......');  

 		document.location='index.php?page=video';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Berita gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Video</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=video';  
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
<td width="200">Link Video (after watch?v=)</td>
<td>: <input type="text" name="linkvid" placeholder="https://www.youtube.com/watch?v=[. . . . . . . . . . . ]"
size="40"></td>
</tr>
<tr>
<td>Judul Video</td>
<td>: <input name="judul" size="40">
</input></td>
</tr>
<td>Creator Video</td>
<td>: <input name="creator" size="40">
</input></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Video">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()">
</td>
</tr>
</table>
</FORM>
</body>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>