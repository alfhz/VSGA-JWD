 <?php
 $server="localhost";
 $user="root";
 $password="12345";
 $nama_database="vsga2024";
 $db=mysqli_connect($server,$user,$password,$nama_database);
 if(!$db){
 die("Gagal terhubung dengan database:".mysqli_connect_error());
 }
 ?>
