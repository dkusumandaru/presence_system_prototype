<script type="text/javascript">
	function pswdErr(){
		alert('nim sudah presensi !!!');
		document.location.href = 'login.php';
	}
</script>

<?php

	require_once("koneksi.php");

	session_start();
	if(!isset($_SESSION['nim'])) {
		//header('location:login.php'); 
		
	}else { 
		$nim = $_SESSION['nim']; 
	}

	$nim = $_POST['nim'];
	$name = $_POST['nama'];



	$cekNim= mysql_query("SELECT  * From presensi WHERE nim = '$nim'");




	$result = mysql_num_rows($cekNim);







echo $result;


$value = 0;

if($result == $value) { 
		 mysql_query("INSERT INTO `presensi`(`nim`, `nama_mahasiswa`) VALUES ('$nim', '$name')");


	    header("location:index.php");


	}else{
		echo "<script>pswdErr();</script>";
}

?>