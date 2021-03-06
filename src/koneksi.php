<?php
	$host       = "localhost";
	$user       = "root";
	$password   = "";
	$database   = "presensi_mahasiswa_db";
	$connect    = mysql_connect($host, $user, $password);
	$db = mysql_select_db($database, $connect);




	if(mysqli_connect_errno()){
		echo 'error ~_~ '.mysqli_connect_error();
	}else{
		//echo 'success ^_^';
	}

?>

