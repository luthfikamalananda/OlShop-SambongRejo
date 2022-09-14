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

    <title>SAMBONG REJO Promo</title>

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
                        <li class="nav-item">
                            <a class="nav-link" href="index_logged.php">Home

                            </a>
                        </li>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="promo_logged.php">Promo <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pemesanan.php">Pemesanan</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="berita_logged.php">Berita </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="video_logged.php">Video </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="contact_logged.php">Kontak </a>
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
                    <h2>Promo Saat ini</h2>
                    <a href="pemesanan.php">lanjut ke pembelian <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a><img src="assets/images/cardmakanan.png" alt=""></a>
                    <div class="down-content">
                        <a >
                            <center><h4 style="font-size: 24px; align-content: center;">Gurihnya Makanan</h4></center>
                        </a>
                        <p>Diskon barang kategori `Makanan` sampai dengan 30% jika pembelian lebih dari 5 buah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a ><img src="assets/images/cardminuman.png" alt=""></a>
                    <div class="down-content">
                        <a >
                        <center><h4 style="font-size: 24px; align-content: center;">Segernya Minuman</h4></center>
                        </a>
                        <p>Diskon barang kategori `Minuman` sampai dengan 20% jika pembelian lebih dari 2 buah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-item">
                    <a ><img src="assets/images/cardkerajinan.png" alt=""></a>
                    <div class="down-content">
                        <a >
                        <center><h4 style="font-size: 24px; align-content: center;">Uniknya Kerajinan</h4></center>
                        </a>
                        <p>Diskon barang kategori `Kerajinan` sampai dengan 20% jika pembelian lebih dari 2 buah.</p>
                    </div>
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
                            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
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