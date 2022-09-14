<?php
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

    <title>Sambong Rejo Kontak</title>

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
                <a class="navbar-brand" href="index.php">
                    <h2>Sambong <em>Rejo</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home

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
                                    <a class="dropdown-item" href="kategori.php?id=<?php echo $hasil['id'] ?>"><?php echo $hasil['nama'] ?></a>
                                <?php } ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="promo.php">Promo</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="berita.php">Berita </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="video.php">Video </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Kontak <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bukutamu.php">Buku Tamu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown">
                                Login
                            </a>
                            <div class="dropdown-menu mt-0" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="login-form-20/index.php">User</a>
                                <a class="dropdown-item" href="myadmin/login.php">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>contact us</h4>
              <h2>lets get in touch</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Lokasi Kami di Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0193438383294!2d110.3363439203379!3d-7.000170181583638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708a98ad57ad93%3A0xedadd52908f35f58!2sJl.%20Bukit%20Delima%20IX%2C%20Bringin%2C%20Kec.%20Ngaliyan%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050189%2C%20Indonesia!5e0!3m2!1sen!2ssg!4v1642148660616!5m2!1sen!2ssg" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>Tentang kantor kami</h4>
              <p>Kantor kami merupakan tempat rumahan pribadi dari kepemilikan Luthfi Kamal Ananda dengan NIM A11.2020.12586<br><br>Berikut ini merupakan projek Ujian Akhir Semester mata kuliah 
            Pemrograman Berbasis Web dasar yang diampu oleh Bapak Ajib Susanto M.Kom</p>
              <ul class="social-icons">
                <li><a target="_blank" href="https://www.facebook.com/luthfikamalananda/"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="https://www.youtube.com/channel/UCuMCecKzvqqN_ttp4Gw0vaQ"><i class="fa fa-youtube"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/luthfikananda"><i class="fa fa-twitter"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
              </ul>
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
