 <!-- CONNECT TO DB -->
 <?php
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "vsga2024";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
    die("Gagal terhubung dengan database:".mysqli_connect_error());
    }
 ?>
