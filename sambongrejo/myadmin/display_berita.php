<?php
include "mysqli_koneksi.php";  ?>
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-laptop"></i> Kelola</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
			<li><i class="fa fa-laptop"></i>Berita</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				Berita
			</header>
			<table class="table table-striped table-advance table-hover">
				<tbody>
					<tr>
						<th style="width: 40px; text-align: center;">NO</th>
						<th><i class="icon_profile"></i> Judul</th>
						<th><i class="icon_mail_alt"></i> Headline</th>
						<th><i class="icon_pin_alt"></i> Isi</th>
						<th><i class="icon_mail_alt"></i> Kategori</th>
						<th><i class="icon_mobile"></i> Pengirim</th>

						<th><i class="icon_calendar"></i> Tanggal</th>
						<th><i class="icon_cogs"></i> Action</th>
					</tr>
					<?php
					$sql = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC");
					$nomer = 1;
					while ($hasil = mysqli_fetch_array($sql)) {
						$id = $hasil['id_berita'];
						$nama  = stripslashes($hasil['judul']);
						$idkategori = stripslashes($hasil['id_kategori']);
						$email = stripslashes($hasil['headline']);
						$situs = stripslashes($hasil['isi']);
						$pesan = stripslashes($hasil['pengirim']);
						$time  = $hasil['tanggal'];
						$sql1 = mysqli_query($con, "SELECT * FROM kategori where id_kategori=$idkategori ");
						while ($hasil = mysqli_fetch_array($sql1)) {
							$namakategori = stripslashes($hasil['nm_kategori']);
						}
					?>
						<tr>
							<td>
								<center>
									<?php echo $nomer;
									$nomer++; ?></center>
							</td>
							<td>
								<?php echo $nama; ?>
							</td>
							<td>
								<?php echo $email; ?>
							</td>
							<td>
								<?php echo $situs; ?>
							</td>
							<td>
								<?php echo $namakategori; ?>
							</td>
							<td>
								<?php echo $pesan; ?>
							</td>
							<td>
								<?php echo $time; ?>
							</td>
							<td>
								<div class="btn-group">
									<a class="btn btn-success" href="index.php?page=edit_berita&id=<?php echo $id; ?>"><i class="icon_check_alt2"></i></a>
									<a class="btn btn-danger" href="index.php?page=delete_berita&id=<?php echo $id; ?>"><i class="icon_close_alt2"></i></a>
								</div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</section>
		<a style="margin-top: -30px;" class="btn btn-primary" href="index.php?page=input_berita"><i class="icon_plus_alt2"></i> TAMBAH DATA</a>
	</div>
</div>