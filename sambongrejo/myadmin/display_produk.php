<?php
include "mysqli_koneksi.php";  ?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Kelola</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                <li><i class="fa fa-gamepad"> Produk</i></li>
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
                            <th><i class="fa fa-tag" aria-hidden="true"></i> Nama Barang</th>
                            <th><i class="fa fa-money" aria-hidden="true"></i> Kategori</th>
                            <th><i class="fa fa-money" aria-hidden="true"></i> Harga</th>
                            <th><i class="icon_pin_alt"></i> Activity</th>
                        </tr>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM produk ORDER BY id DESC");
                        $nomer = 1;
                        while ($hasil = mysqli_fetch_array($sql)) {
                            $id = $hasil['id'];
                            $kategori  = stripslashes($hasil['id_kategori']);
                            $nama  = stripslashes($hasil['nama']);
                            $harga = stripslashes($hasil['harga']);
                            $sql1 = mysqli_query($con, "SELECT * FROM kategori_produk where id=$kategori ");
                                while ($hasil = mysqli_fetch_array($sql1)) {
                                    $namakategori = stripslashes ($hasil['nama']);
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
                                    <?php echo $namakategori; ?>
                                </td>
                                <td>
                                    <?php echo "Rp " . $harga; ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success" href="index.php?page=edit_produk&id=<?php echo $id; ?>"><i class="icon_check_alt2"></i></a>
                                        <a class="btn btn-danger" href="index.php?page=delete_produk&id=<?php echo $id; ?>"><i class="icon_close_alt2"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
            <a style="margin-top: -30px;" class="btn btn-primary" href="index.php?page=input_produk"><i class="icon_plus_alt2"></i> TAMBAH PRODUK</a>
        </div>
    </div>
</body>