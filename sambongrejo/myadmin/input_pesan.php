<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
	$pembeli = addslashes(strip_tags($_POST['pembeli']));
	$bar = addslashes(strip_tags($_POST['barang']));
	$barang = explode('|', $bar); // $barang[0] = id ; $barang[1] = nama ; $barang[2] = hrg satuan
	$tot_harga  = stripslashes($_POST['tot_harga']); // $barang[3] = id kategori barang
	$jumlah = stripslashes($_POST['jumlah']);
	$catatan = stripslashes($_POST['catatan']);
	$alamat = stripslashes($_POST['alamat']);
	// if ($bentuk >= 2 && $bentuk < 5) { // beli 2 keatas 10%
	// 	$harga_sebelum = ($katarray[2] * $bentuk);
	// 	$diskon = $harga_sebelum * 0.1;
	// 	$harga_akhir = $harga_sebelum - $diskon;
	// } elseif ($bentuk >= 5) { //beli 5 keatas 30%
	// 	$harga_sebelum = ($katarray[2] * $bentuk);
	// 	$diskon = $harga_sebelum * 0.3;
	// 	$harga_akhir = $harga_sebelum - $diskon;
	// } else { // jika beli 1
	// 	$harga_sebelum = ($katarray[2] * $bentuk);
	// 	$harga_akhir = $harga_sebelum;
	// };
	//insert ke tabel
	$query = "INSERT INTO pesan(pembeli,id_produk,nama_produk,jumlah,catatan,alamat,total_harga)
        VALUES('$pembeli','$barang[0]','$barang[1]','$jumlah','$catatan','$alamat','$tot_harga')";
        $sql = mysqli_query($con, $query);
	if ($sql) {
		//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
		<script language="JavaScript">
			alert('Produk berhasil ditambahkan......');

			document.location = 'index.php?page=pesan';
		</script>
<?php
	} else {
		echo "<h2><font color=red>Berita gagal ditambahkan</font></h2>";
	}
}
?>
<html>

<head>
	<title>Input Produk</title>
	<style>
	</style>
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
				<li><i class="fa fa-laptop"></i>Input Berita</li>
			</ol>
		</div>
	</div>
	<FORM ACTION="" METHOD="POST" NAME="input">
		<table cellpadding="2px" cellspacing="0" border="0" width="90%">

			<tr>
				<td width="200">User Pembeli</td>
				<td>: <select id="inputanbarang" name="pembeli" onchange="fungsi()">
						<option disabled selected value>Silahkan input</option>
						<?php
						$query = "SELECT * FROM user_guest ORDER BY user_id";
						$sql1 = mysqli_query($con, $query);
						while ($hasil = mysqli_fetch_array($sql1)) {
							echo "<option
value='$hasil[user_id]'>$hasil[user_id]</option>";
						} ?>
					</select></td>
			</tr>

			<tr>
				<td width="200">Nama Barang</td>
				<td>: <select id="inputbarang" name="barang" onchange="hitungharga()">
						<option disabled selected value>Silahkan input</option>
						<?php
						$query = "SELECT id, nama,harga FROM produk ORDER BY nama";
						$sql = mysqli_query($con, $query);
						while ($hasil = mysqli_fetch_array($sql)) {
							echo "<option
value='$hasil[id]|$hasil[nama]|$hasil[harga]' name='$hasil[nama]'>$hasil[nama]</option>";
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
				<td>: <input name="tot_harga" type="number" size="30" id="harga" readonly>
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
				<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Pesanan">&nbsp;
					<input type="button" name="Cancel" value="Cancel" onClick="batal()">
				</td>
			</tr>
		</table>
	</FORM>
</body>
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
<!-- ck editor -->
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

</html>