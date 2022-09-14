<?php
include "mysqli_koneksi.php";
if (isset($_POST['submit'])) { //jika ditekan tombol submit
    $nama = addslashes($_POST['nama']);
    $email = addslashes($_POST['email']);
    $situs = addslashes($_POST['situs']);
    $pesan = addslashes(strip_tags($_POST['message']));
    //jika nama dan pesan tidak kosong
    if (!empty($nama) && !empty($pesan)) {
        $sql = mysqli_query($con, "INSERT INTO
bukutamu(nama,email,situs,pesan,waktu)
VALUES('$nama','$email','$situs','$pesan',NOW())");
        if ($sql) {
?>
            <script language="JavaScript">
                alert('Terima kasih. Anda telah mengisi buku tamu');
                document.location = 'index.php?page=bukutamu';
            </script>
        <?php
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);;
        }
    } else {
        ?>
        <script language="JavaScript">
            alert('Nama dan pesan harus diisi');
        </script>
<?php
    }
}
?>