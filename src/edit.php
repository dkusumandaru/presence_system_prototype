<script type="text/javascript">
  function pswdErr(){
    alert('nim tidak diketahui...');

  }
</script>

<?php

  require_once("koneksi.php");

  session_start();
  if(!isset($_SESSION['nim1'])) {
    //header('location:login.php'); 
    
  }else { 
    $nim1 = $_SESSION['nim1']; 
  }

  $nim1 = $_POST['nim1'];
  $nim = $_POST['nim'];
  $name = $_POST['nama'];



  $cekNim= mysql_query("SELECT  * From presensi WHERE nim = '$nim1'");




  $result = mysql_num_rows($cekNim);
  $data = mysql_fetch_array($cekNim);

  $nimBefore= $data['nim'];
  $nameBefore = $data['nama_mahasiswa'];







echo $result;


$value = 0;

if($result != $value) { 

     mysql_query("UPDATE `presensi` SET `nim`='$nim', `nama_mahasiswa`='$name' WHERE nim = '$nimBefore'");




      header("location:index.php");


  }else{
    echo "<script>pswdErr();</script>";
}

?>