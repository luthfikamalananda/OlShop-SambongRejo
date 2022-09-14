<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Berita</title>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Delete Berita</li>						  	
					</ol>
				</div>
			</div>
<?php
//proses delete berita
if (!empty($id_berita) && $id_berita != "") {
$query = "DELETE FROM kategori WHERE id_kategori='$id_berita'";
$sql = mysqli_query ($con,$query);
if ($sql) {
echo "<h2><font color=blue>Kategori Berita telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Kategori Berita gagal dihapus</font></h2>";
}
echo "Klik <a href='index.php?page=kategori_berita'>di sini</a> untuk kembali ke halaman arsip kategori berita";
} else {
die ("Access Denied");
}
?>
</body>
</html>