<?php
include "mysqli_koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambong Rejo Buku Tamu</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
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

<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

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
                        <li class="nav-item ">
                            <a class="nav-link" href="video.php">Video </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Kontak</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="bukutamu.php">Buku Tamu <span class="sr-only">(current)</span></a>
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
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Welcome</h4>
              <h2>Silahkan isi bukutamu</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-offset-2">

                    <div class="boxed-grey">
                        <form id="contact-form" method="POST" action="isi_bukutamu.php"> &nbsp;<br>&nbsp;
                            <!-- isi bukutamu -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Nama</label>
                                        <input type="text" class="form-control" id="name" name="nama" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" class="form-control" id="email" name='email' placeholder="Enter email" required="required" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="situs">
                                            Situs</label>
                                        <input type="text" class="form-control" id="name" name="situs" placeholder="Enter name" required="required" name="situs" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Pesan</label>
                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm">
                                        <button type="submit" name='submit' class="btn btn-skin pull-right" id="btnContactUs">
                                            Send Message</button>
                                    </div>
                                    <div class="col-sm">
                                        <a href="display_bukutamu.php"><button type='button' class="btn btn-skin pull-right">Lihat Bukutamu</button></a>
                                    </div>
                                </div>
                            </div>

                        </form>

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