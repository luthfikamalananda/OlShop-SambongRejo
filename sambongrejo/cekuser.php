<?php
include "mysqli_koneksi.php";
session_start();
if (isset($_POST['submit'])) {
	if (isset($_POST['username'])) {
		$userid = $_POST['username'];
		$passwordinput = $_POST['password'];
	} else {
		die("Error. No Id Selected! ");
	}
	if ($userid == "") {
		header("Location:login-form-20/index.php?cannotLogin");
	} else {
		$query = "SELECT * from user_guest WHERE user_id ='$userid'";
		$sql = mysqli_query($con, $query);
		if ($sql) {
			$hasil = mysqli_fetch_array($sql);
			$username = $hasil['user_id'];
			$password = $hasil['password'];
			if ($username == $userid && $password == $passwordinput) {
				$_SESSION['namauser'] = $username;
				header("Location:index_logged.php");
			} elseif($username == $userid) {
				header("Location:login-form-20/index.php?PasswordSalah");
			}
			else {
				header("Location:login-form-20/index.php?UserSalah");
			}
		}
		else {
			header("Location:login-form-20/index.php?CannotLogin");
		}
	}
} else {
	header("Location:login-form-20/index.php");
}
?>
