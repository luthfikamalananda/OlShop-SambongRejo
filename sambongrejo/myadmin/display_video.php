<?php
include "mysqli_koneksi.php";  ?>

<head>
    <link rel="stylesheet" href="css/YouTube.HD.Thumbnail.css">
</head>

<body>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-youtube-play" aria-hidden="true"></i> VIDEO</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                <li><i class="fa fa-youtube-play" aria-hidden="true"></i> Video</i></li>
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
                            <th><i class="icon_profile"></i> Preview </th>
                            <th><i class="icon_profile"></i> Judul</th>
                            <th><i class="icon_mail_alt"></i> Creator </th>
                            <th><i class="icon_pin_alt"></i> Activity</th>
                        </tr>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM video ORDER BY id DESC");
                        $nomer = 1;
                        while ($hasil = mysqli_fetch_array($sql)) {
                            $id = $hasil['id'];
                            $link  = stripslashes($hasil['linkvid']);
                            $judul = stripslashes($hasil['judul']);
                            $creator = stripslashes($hasil['creator']);
                        ?>
                            <tr>
                                <td>
                                    <center>
                                        <?php echo $nomer;
                                        $nomer++; ?></center>
                                </td>
                                <td>
                                    <iframe class="yt-hd-thumbnail" width="400" height="200" src="https://www.youtube.com/embed/<?php echo $link ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="fullscreen"> </iframe>
                                </td>
                                <td>
                                    <?php echo $judul ?>
                                </td>
                                <td>
                                    <?php echo $creator ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        
                                        <a class="btn btn-danger" href="index.php?page=delete_video&id=<?php echo $id; ?>"><i class="icon_close_alt2"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
            <a style="margin-top: -30px;" class="btn btn-primary" href="index.php?page=input_video"><i class="icon_plus_alt2"></i> TAMBAH VIDEO</a>
        </div>
    </div>

    <script src="js/jQuery.YouTube.HD.Thumbnail.js"></script>

</body>