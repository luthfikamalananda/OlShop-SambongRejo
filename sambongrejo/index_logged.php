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
                        <li class="nav-item active">
                            <a class="nav-link" href="index_logged.php">Home
                                <span class="sr-only">(current)</span>
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
                        <li class="nav-item">
                            <a class="nav-link" href="pemesanan.php">Pemesanan</a>
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
                            <?php echo $_SESSION['namauser']?>
                            </a>
                            <div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php">Log Out</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>WELCOME</h4>
                    <h2>TO OUR BELOVED STORE</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Last Minute</h4>
                    <h2>Grab last minute deals</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest Products</h2>
                        <a href="promo_logged.php">lihat promo <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php
                $sql = mysqli_query($con, "SELECT * FROM produk ORDER BY id DESC");
                $nomer = 1;
                while ($hasil = mysqli_fetch_array($sql)) {
                    $id = $hasil['id'];
                    $nama  = stripslashes($hasil['nama']);
                    $harga = stripslashes($hasil['harga']);
                    $foto = stripslashes($hasil['foto']);
                ?>
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"><img src="<?php echo $foto ?>" alt=""></a>
                            <div class="down-content">
                                <a href="#">
                                    <h4><?php echo $nama ?></h4>
                                </a>
                                <p style="font-weight: bold;">Rp <?php echo $harga ?></p>
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span>Reviews <?php echo '('.rand(40,100).')'?></span>
                            </div>

                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About Sambong Rejo</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Mencari produk yang paling worth it?</h4>
                        <p>Kami adalah sebuah UMKM rintisan dari Desa Sambong Rejo yang melakukan kegiatan rutin penjualan online, update berita dan dokumentasi desa kami.
                            Produk di <a href="index.php">Sambong Rejo</a> sangat banyak dan memenuhi quality control dari setiap brand perusahan. Berikut adalah 
                            beberapa alasan harus beli di <a href="index.php">Sambong Rejo</a> :
                        </p>
                        <ul class="featured-list">
                            <li><a> Banyak pilihannya</a></li>
                            <li><a> Harganya terjangkau</a></li>
                            <li><a> Cocok untuk semua kalangan</a></li>
                            <li><a> Gratis ongkir untuk semua produk</a></li>
                            <li><a> Semua barang sudah melalui quality control</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/peakstation.gif" alt="">
                    </div>
                </div>
            </div>
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

</html>