<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<title>Sistem Presensi</title>
<style type="text/css">.row{
  margin: 15px
}
table{
  border: solid 1px #222;
  margin: 15px
}
th{
  border: solid 1px #222
}


table tr td{
  border: solid 1px #222;
  padding: 10px
}


</style>
</head>
 
<body>
  <h1><center>Sistem Presensi</center></h1>
    <div class="container">
        <div width="30%" class="row" style="float:left;">
                    <h2>Input</h2>
          <form action="input.php" method="post">

            <label>nim</label>
          <input type="text" name="nim"><br>
          <label>nama</label>
          <input type="text" name="nama">
          <button type="submit" value="input">input</button>
          </form><br><br>

          <h2>Edit </h2>
          <form action="edit.php" method="post">
            <label>pilih nim</label>
          <input type="text" name="nim1"><br>
          <b>ubah</b><br>
          <label>nim</label>
          <input type="text" name="nim"><br>
          <label>nama</label>
          <input type="text" name="nama">
          <button type="submit" value="edit">edit</button>
          </form><br><br>

          <h2>Delete </h2>
          <form action="delete.php" method="post">
            <label>nim</label>
          <input type="text" name="nim">
          <button type="submit" value="delete">delete</button>
          </form><br><br>

      </div>

<h2 width="50%" >View</h2>
            <div class="row" width="50%" style="float:right">
                
            </div>

                  <?php

                   require_once("koneksi.php");



                  $queryPresensi = mysql_query("SELECT * FROM presensi");

                  if($queryPresensi  === FALSE) { 
                          die(mysql_error()); // TODO: better error handling
                  }
                  ?>

              <table class="row">
                <tr><th>NIM</th><th>Name</th></tr>
                <?php
                while ($rowPresensi = mysql_fetch_array($queryPresensi)) {
                        echo "<tr><td>".$rowPresensi['nim']."</td>";
                       echo "<td>".$rowPresensi['nama_mahasiswa']."</td></tr>";
                }

                ?>
                  </table>



        </div>
    </div> <!-- /container -->
  </body>
</html>