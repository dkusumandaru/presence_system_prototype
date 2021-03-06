<script type="text/javascript">
    function logoutNotif(){
		alert('you are logout!!!!');
		document.location.href = 'login.php';
    }
//logout notif

//user not found
	function userNFound(){
		alert(nim not found');
		document.location.href = 'login.php';
	}
//user not found

//password incorect
	function pswdErr(){
		alert('Your input not found !!!');
		document.location.href = 'login.php';
	}
//password incorect
</script>

<?php 


	require_once("koneksi.php");

	session_start();
	if(!isset($_SESSION['nim'])) {
		//header('location:login.php'); 
		
	}else { 
		$user = $_SESSION['nim']; 
	}

	$user = $_POST['nim'];




	$nim = mysql_query("SELECT  * From presensi WHERE nim = '$user'");



	$result = mysql_num_rows($nim);
	$hasil = mysql_fetch_assoc($nim);


echo $result;


$remove = $hasil['nim'];
echo $remove;

$value = 0;



if($result == $value) { 
		echo "<script>userNFound();</script>";
	}else if($remove == $hasil['nim']){
		 mysql_query("DELETE FROM presensi WHERE nim='$remove'");


	    header("location:index.php");

	}else{
		echo "<script>pswdErr();</script>";
}

?>

