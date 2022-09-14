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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
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
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Flash Deals</h4>
                    <h2>Get your best products</h2>
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
    <div class="container">
        <div align="center">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <table width="594" class="table table-striped table-advance table-hover">
                            <!--DWLayoutTable-->
                            <tbody>
                                        <?php
                                        $sql = mysqli_query($con, "SELECT * FROM bukutamu ORDER BY id DESC");
                                        while ($hasil = mysqli_fetch_array($sql)) {
                                            $nama  = stripslashes($hasil['nama']);
                                            $email = stripslashes($hasil['email']);
                                            $situs = stripslashes($hasil['situs']);
                                            $pesan = stripslashes($hasil['pesan']);
                                            $time  = $hasil['waktu'];
                                        ?>
                                <tr>
                                    <td><strong>
                                            <font color="#FF0000"><?php echo $nama; ?></font>
                                        </strong></td>
                                    <td> - </td>
                                    <td><strong>email</strong></td>
                                    <td> : </td>
                                    <td><a href="mailto:<?php echo $email ?>"><?php echo $email ?> </a></td>
                                    <td> - </td>
                                    <td><strong>situs</strong></td>
                                    <td> : </td>
                                    <td><a href="<?php echo $situs ?>" target="_blank"><?php echo  $situs ?> </a></td>
                                    <td><?php echo $time ?></td>
                                    <td><?php echo nl2br($pesan); ?></td>
                                </tr>

                            <?php } ?>
                            </td>
                            </tr>
                            <tr>
                                <td height="15" align="center" valign="middle">created by <a href="http://ajibsusanto.blogspot.com">Mr Jj</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </section>

                </div>
            </div>
        </div>
    </div>
</body>

</html>