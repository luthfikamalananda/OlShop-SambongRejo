<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
	$id_berita = $_GET['id'];
} else {
	die("Error. No Id Selected! ");
}
$query = "SELECT * FROM pesan WHERE id='$id_berita'";
$sql = mysqli_query($con, $query);
$hasil = mysqli_fetch_array($sql);
$id = $hasil['id'];
$pembeli = stripslashes($hasil['pembeli']);
$nama = stripslashes($hasil['nama_produk']);
$jumlah = stripslashes($hasil['jumlah']);
$harga_tot = stripslashes($hasil['total_harga']);
$catatan = stripslashes($hasil['catatan']);
$alamat = stripslashes($hasil['alamat']);
//proses edit berita
if (isset($_POST['Edit'])) {
	$id_berita = $_POST['hidberita'];
	$id1 = $hasil['id'];
	$pembeli1 = addslashes(strip_tags($_POST['pembeli']));
	$nama1 = addslashes(strip_tags($_POST['nama_produk']));
	$barang = explode('|', $nama1);
	$jumlah1 = addslashes(strip_tags($_POST['jumlah']));
	$harga_tot1 = addslashes(strip_tags($_POST['total_harga']));
	$catatan1 = addslashes(strip_tags($_POST['catatan']));
	$alamat1 = addslashes(strip_tags($_POST['alamat']));
	//update berita
	$query = "UPDATE pesan SET pembeli = '$pembeli1', id_produk = '$barang[0]', nama_produk = '$barang[1]',	jumlah = '$jumlah1', catatan = '$catatan1', total_harga = '$harga_tot1', alamat = '$alamat1' WHERE id='$id_berita'";
	$sql = mysqli_query($con, $query);
	if ($sql) {
?>
		<script language="JavaScript">
			alert('Data berhasil di update......');
			document.location = 'index.php?page=pesan';
		</script>
<?php
	} else {
		echo "<h2><font color=red>Berita gagal diedit</font></h2>";
	}
}

?>
<html>

<head>
	<title>Edit Pesanan</title>
	<script language="JavaScript">
		function batal() {
			document.location = 'index.php?page=pesan';
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
				<td width="200">User Pembeli</td>
				<td>: <select id="inputanbarang" name="pembeli">
						<option disabled selected value><?php echo $pembeli ?></option>
						<?php
						$query = "SELECT * FROM user_guest ORDER BY user_id";
						$sql1 = mysqli_query($con, $query);
						while ($hasil = mysqli_fetch_array($sql1)) {
							echo "<option value='$hasil[user_id]'>$hasil[user_id]</option>";
						} ?>
					</select></td>
			</tr>

			<tr>
				<td>Nama Barang</td>
				<td>: <select id="inputbarang" name="nama_produk" onchange="hitungharga()">
						<option disabled selected value><?php echo $nama ?></option>
						<?php
						$query = "SELECT id, nama,harga FROM produk ORDER BY nama";
						$sql = mysqli_query($con, $query);
						while ($hasil = mysqli_fetch_array($sql)) {
							echo "<option value='$hasil[id]|$hasil[nama]|$hasil[harga]' name='$hasil[nama]'>$hasil[nama]</option>";
						} ?>
					</select></td>
			</tr>

			<tr>
				<td>Jumlah</td>
				<td>: <input type="number" name="jumlah" value="1" size="30" id="jumlah" onchange="hitungharga()">
					</input></td>
			</tr>

			<tr>
				<td>Harga</td>
				<td>: <input name="total_harga" type="number" size="30" readonly id="harga">
					</input></td>
			</tr>

			<tr>
				<td>Catatan</td>
				<td> :
					<textarea name="catatan" rows="3" cols="50"></textarea>

				</td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td> :
					<textarea name="alamat" rows="7" cols="90"></textarea>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;&nbsp;
					<input type="hidden" name="hidberita" value="<?= $id_berita ?>">
					<input type="submit" name="Edit" value="Edit Pesanan">&nbsp;
					<input type="button" name="Cancel" value="Cancel" onClick="batal()">
				</td>
			</tr>
		</table>
	</FORM>
	<!-- ck editor -->
	<script>
		function hitungharga() {
			var valueinput = document.getElementById('inputbarang').value; //versi revisi + responsif (kombinasi)
			const myArray = valueinput.split("|");
			var harga = document.getElementById('harga');
			var jumlah = document.getElementById('jumlah').value;
			var tot_harga = jumlah * myArray[2];
			harga.value = tot_harga;
		}
	</script>
	<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>

</html>