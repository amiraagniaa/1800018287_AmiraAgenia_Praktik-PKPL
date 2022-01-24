<?php
	session_start();
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = md5($_POST["password"]);

	$data = mysqli_query($kon, "select * from user where username='$username' and password='$password'");
	$cek = mysqli_num_rows($data);
	if ($cek > 0) {
	    $_SESSION['username'] = $username;
	    $_SESSION['status'] = "login";
	    header("location:welcome.php");
	} else {
	    echo "<script>alert('Username atau Password salah')</script>";
	    echo "<meta http-equiv='refresh' content='1 url=index.php'>";
	}
?>