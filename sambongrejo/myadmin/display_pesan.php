<?php
include "mysqli_koneksi.php";  ?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-cart-plus" aria-hidden="true"></i> PEMESANAN</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="fa fa-cart-plus" aria-hidden="true"></i> Pemesanan</i></li>
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
                        <th><i class="fa fa-tag" aria-hidden="true"></i> Pembeli </th>
                        <th><i class="icon_profile"></i> Nama Produk</th>
                        <th><i class="icon_mail_alt"></i> Jumlah</th>
                        <th><i class="icon_pin_alt"></i> Harga Total</th>
                        <th><i class="icon_pin_alt"></i> Catatan</th>
                        <th><i class="icon_pin_alt"></i> Alamat</th>
                        <th><i class="icon_pin_alt"></i> Avtivity</th>
                    </tr>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM pesan ORDER BY id DESC");
                    $nomer = 1;
                    while ($hasil = mysqli_fetch_array($sql)) {
                        $id = $hasil['id'];
                        $pembeli = stripslashes($hasil['pembeli']);
                        $nama = stripslashes($hasil['nama_produk']);
                        $jumlah = stripslashes($hasil['jumlah']);
                        $harga_tot = stripslashes($hasil['total_harga']);
                        $catatan = stripslashes($hasil['catatan']);
                        $alamat = stripslashes($hasil['alamat']);
                    ?>
                        <tr>
                            <td>
                                <center>
                                    <?php echo $nomer;
                                    $nomer++; ?></center>
                            </td>
                            <td>
                                <?php echo $pembeli; ?>
                            </td>
                            <td>
                                <?php echo $nama; ?>
                            </td>
                            <td>
                                <?php echo $jumlah; ?>
                            </td>
                            <td>
                                <?php echo "Rp " . $harga_tot; ?>
                            </td>
                            <td>
                                <?php echo $catatan; ?>
                            </td>
                            <td>
                                <?php echo $alamat; ?>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success" href="index.php?page=edit_pesan&id=<?php echo $id; ?>"><i class="icon_check_alt2"></i></a>
                                    <a class="btn btn-danger" href="index.php?page=delete_pesan&id=<?php echo $id; ?>"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        <a style="margin-top: -30px;" class="btn btn-primary" href="index.php?page=input_pesan"><i class="icon_plus_alt2"></i> TAMBAH PESANAN</a>
    </div>
</div>