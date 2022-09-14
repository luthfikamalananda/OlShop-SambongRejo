<?php
session_start();
include "mysqli_koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambong Rejo Video</title>


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
        .navbar-nav li:hover .dropdown-menu {
            display: block;
        }
    </style>

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
                        <li class="nav-item ">
                            <a class="nav-link" href="berita_logged.php">Berita </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="video_logged.php">Video <span class="sr-only">(current)</span></a>
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
    <div class="page-heading video-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>OUR VIDEO</h4>
                        <h2>vlog of the great journey</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Video Kami</h2>
                        <a target="_blank" href="https://www.youtube.com/channel/UCuMCecKzvqqN_ttp4Gw0vaQ">Kanal Youtube <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php
                $sql = mysqli_query($con, "SELECT * FROM video ORDER BY id DESC");
                $nomer = 1;
                while ($hasil = mysqli_fetch_array($sql)) {
                    $id = $hasil['id'];
                    $link  = stripslashes($hasil['linkvid']);
                    $judul  = stripslashes($hasil['judul']);
                    $creator  = stripslashes($hasil['creator']);
                ?>
                    <div class="col-md-4">
                        <div class="product-item">
                            <a href=""><iframe class="yt-hd-thumbnail" width="100%" height="200" src="https://www.youtube.com/embed/<?php echo $link ?>?rel=0&amp;showinfo=0" frameborder="0" allow="fullscreen"></iframe></a>
                            <div class="down-content">
                                <a href="#">
                                    <h4><?php echo $judul ?></h4>
                                </a>
                                <h6></h6>
                                <p><?php echo "Oleh : " . $creator ?></p>
                            </div>
                        </div>

                    </div>
                <?php } ?>

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


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

</body>

</html>