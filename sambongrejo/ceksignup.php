<?php
include "mysqli_koneksi.php";
session_start();
if (isset($_POST['daftar'])) {
	if (isset($_POST['username'])) {
		$userid = addslashes($_POST['username']);
		$passwordinput = addslashes($_POST['password']);

        $query = "SELECT * from user_guest WHERE user_id ='$userid'";
        $sql1 = mysqli_query($con, $query);
        if ($sql1) {
            $hasil = mysqli_fetch_array($sql1);
            $usernameexisted = $hasil['user_id'];
            if ($usernameexisted == $userid) {
                echo "<script type='text/javascript'>alert('Username sudah digunakan');window.location.href='login-form-20/daftar.php'</script>";
            }
            else {
                $query = "INSERT INTO user_guest(user_id,password)
                VALUES('$userid','$passwordinput')";
                $sql = mysqli_query ($con,$query);
                echo "<script type='text/javascript'>alert('Daftar berhasil');window.location.href='login-form-20/index.php'</script>";
            }
        }
	} else {
		die("Error. No Id Selected! ");
	}
    
}?>