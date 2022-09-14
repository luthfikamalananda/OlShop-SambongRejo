<?php
session_start();
include "mysqli_koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sambong Rejo Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav li:hover .dropdown-menu {
            display: block;
        }
    </style>
    <!--

    
TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container" style="max-width: 1230px;">
                <a class="navbar-brand" href="index_logged.php">
                    <h2>Sambong <em>Rejo</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index_logged.php">Home

                            </a>
                        </li><!-- <a class="nav-link" href="kategori.php?id=<?php echo '1' ?>">Kategori</a> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown">
                                Kategori
                            </a>
                            <div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown">
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM kategori_produk order by id DESC");
                                while ($hasil = mysqli_fetch_array($sql)) {
                                    $id = stripslashes($hasil['id']);
                                    $nama  = stripslashes($hasil['nama']);

                                ?>
                                    <a class="dropdown-item" href="kategori_logged.php?id=<?php echo $hasil['id'] ?>"><?php echo $hasil['nama'] ?></a>
                                <?php } ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="promo_logged.php">Promo</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="pemesanan.php">Pemesanan <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="berita_logged.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="video_logged.php">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_logged.php">Kontak</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown">
                                <?php echo $_SESSION['namauser'] ?>
                            </a>
                            <div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php">Log Out</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="banner header-text">
    </div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/newyearsale.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/gurihnyamakanan.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/segernyaminuman.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/uniknyakerajinan.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Form Pemesanan</h2>
                        <a href="promo_logged.php">lihat promo <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['Input'])) {
        $bar = addslashes(strip_tags($_POST['barang']));
        $barang = explode('|', $bar); // $barang[0] = id ; $barang[1] = nama ; $barang[2] = hrg satuan
        $tot_harga  = stripslashes($_POST['tot_harga']); // $barang[3] = id kategori barang
        $jumlah = stripslashes($_POST['jumlah']);
        $catatan = stripslashes($_POST['catatan']);
        $alamat = stripslashes($_POST['alamat']);

        $query = "INSERT INTO pesan(pembeli,id_produk,nama_produk,jumlah,catatan,alamat,total_harga)
        VALUES('$_SESSION[namauser]','$barang[0]','$barang[1]','$jumlah','$catatan','$alamat','$tot_harga')";
        $sql = mysqli_query($con, $query);
        if ($sql) { ?>
            <script language="JavaScript">
                alert('Pesanan berhasil ditambahkan');

                document.location = 'pemesanan.php';
            </script>
    <?php
        } else {
            echo "<h2><font color=red>Pesanan gagal ditambahkan</font></h2>";
        }
    }
    ?>
    <!-- Banner Ends Here -->
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Nama Barang</label>

                <select class="form-control" name='barang' id="inputbarang" onchange="hitungharga()" required>
                    <option disabled selected value>--- Silahkan Input ---</option>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM produk ORDER BY nama");
                    while ($hasil = mysqli_fetch_array($sql)) {
                        $id = stripslashes($hasil['id']);
                        $nama  = stripslashes($hasil['nama']);
                        $harga  = stripslashes($hasil['harga']);
                        $kategori  = stripslashes($hasil['id_kategori']);
                        echo "<option value='$hasil[id]|$hasil[nama]|$hasil[harga]|$hasil[id_kategori]' >$hasil[nama] [Rp $hasil[harga]]</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah</label>
                <input type="number" name="jumlah" class="form-control" id="jumlah" value="1" onchange="hitungharga()" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Total Harga</label>
                <input type="number"  class="form-control" id="harga" readonly required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Catatan Pemesanan</label>
                <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="2" required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat Pengiriman</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>

            <button type="submit" name="Input" class="btn btn-primary">PESAN SEKARANG</button>
        </form>


        <div class="latest-products">
            <div class="container">
                <div class="row">
                    <div class="section-heading" style="margin-bottom: 0px;">
                        <h2>Pesanan Anda</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pembeli</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga Total</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM pesan where pembeli = '$_SESSION[namauser]'");
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
                            <th scope="row"><?php echo $nomer;$nomer++; ?></th>
                            <td><?php echo $pembeli ?></td>
                            <td><?php echo $nama ?></td>
                            <td><?php echo $jumlah ?></td>
                            <td><?php echo "Rp ". $harga_tot ?></td>
                            <td><?php echo $catatan ?></td>
                            <td><?php echo $alamat ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>





    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2022 | Luthfi Kamal Ananda | A11.2020.12586 |
                            - Design: <a rel="nofollow noopener" href="https://templatemo.com/tm-546-sixteen-clothing" target="_blank">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

<script>
    function hargaawal() { // dipakai di input barang
        var valueinput = document.getElementById('inputbarang').value;
        const myArray = valueinput.split("|");
        var harga = document.getElementById('harga');
        harga.value = myArray[2];
    };

    function hargaakhir() { //dipakai di input jumlah
        var valueinput = document.getElementById('inputbarang').value;
        const myArray = valueinput.split("|");
        var jumlah = document.getElementById('jumlah').value;
        var tot_harga = jumlah * myArray[2];
        harga.value = tot_harga;
    };

    function hitungharga() {
        var valueinput = document.getElementById('inputbarang').value; //versi revisi + responsif (kombinasi)
        console.log(valueinput);
        const myArray = valueinput.split("|");
        var harga = document.getElementById('harga');
        var jumlah = document.getElementById('jumlah').value;
        var tot_harga = jumlah * myArray[2];
        harga.value = tot_harga;
    };
</script>

</html>