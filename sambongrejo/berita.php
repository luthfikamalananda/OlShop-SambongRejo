<?php
include "mysqli_koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambong Rejo Berita</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="berita.php">Berita <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="video.php">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Kontak</a>
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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
    </div>

    <div class="latest-products">
        <div class="container">
            <div class="content-wrapper poppins" style="min-height: 880px;">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid container-lg">
                        <!-- Container 1 -->
                        <div class="row">

                            <div class="col-12 col-lg-8">
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM berita ORDER BY id_berita DESC");
                                while ($hasil = mysqli_fetch_array($sql)) {
                                    $id = $hasil['id_berita'];
                                    $judul  = stripslashes($hasil['judul']);
                                    $headline  = stripslashes($hasil['headline']);
                                    $isi  = stripslashes($hasil['isi']);
                                    $pengirim  = stripslashes($hasil['pengirim']);
                                    $linkfoto  = stripslashes($hasil['linkfoto']);
                                    $tanggal  = stripslashes($hasil['tanggal']);
                                ?>
                                    <div class="card" style="margin-bottom: 20px;">
                                        <div class="card-header">
                                            <h4 style="font-weight: bold; text-transform: uppercase;"><?php echo $judul ?></h4>
                                            <p><?php echo "Posted on " . $tanggal ?> <?php echo "by " . $pengirim ?></p>
                                        </div>
                                        <div class="card-body">
                                            <img src="<?php echo $linkfoto ?>" alt="" class="card-img-top mb-4">
                                            <div class="text-justify">
                                                <h5><?php echo $headline ?></h5><br>
                                                <p><?php echo $isi ?>
                                                </p>
                                            </div>
                                            <!-- <p>Hai sahabat Dewa Bejo! Bagaimana harimu di tahun baru? Apakah bahagia, atau justru semakin stres? Jika stres melanda, segeralah merapat ke tempat kami. Karena kami selalu punya obatnya.</p>
                <p>Selain terkenal dengan Goa Pindul dan body rafting Sungai Oya, kami juga memiliki paket wisata berupa meyusuri goa cantik di bawah tanah menggunakan ban karet. Berada dalam satu kawasan dengan Goa Pindul, objek wisata ini dikenal dengan nama Goa Tanding.</p> -->
                                        </div>
                                    </div>
                                    <?php } ?>
                            </div>

                        <div class="col-12 col-lg-4 mt-5 mt-lg-0">
                            <hr class="d-block d-lg-none">
                            <form action="" method="post" accept-charset="utf-8">
                                <div class="input-group">
                                    <input type="search" name="keyword" class="form-control form-control-sm" placeholder="Search">
                                    <div class="input-group-append">
                                        <!-- <button type="submit" class="btn btn-sm btn-default">
                          <i class="fa fa-search"></i>
                      </button> -->
                                        <input type="submit" name="search" value="Go" class="btn btn-sm btn-default">
                                    </div>
                                </div>
                            </form> <br>
                            <br>
                            <div class="container-fluid">
                                <h5>Archives</h5>
                                <p>
                                    <a href="#" class="text-secondary">December 2021</a><br>
                                    <a href="#" class="text-secondary">October 2021</a><br>
                                </p>
                            </div>
                        </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
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
</body>

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

</html>