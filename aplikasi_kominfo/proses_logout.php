<?php
	session_start();
	session_unset();
	session_destroy();
	echo "<script>alert('Terimakasih Anda Telah Keluar')</script>";
	echo "<meta http-equiv='refresh' content='1 url=index.php'>";
?>