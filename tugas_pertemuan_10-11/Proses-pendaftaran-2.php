 <?php
 include("koneksi.php");

 // cek apakah tombol daftar sudah diklik atau belum?
 if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    //buatquery
    $sql="INSERT INTO calon_siswa(nama,alamat,jenis_kelamin,agama,sekolah_asal) 
    VALUE('$nama','$alamat','$jk','$agama','$sekolah')";
    $query=mysqli_query($db,$sql);

    //apakahquerysimpanberhasil?
    if($query){
        //kalauberhasilalihkankehalamanindex.phpdenganstatus=sukses
        header('Location:index.php?status=sukses');
    }else{
        //kalaugagalalihkankehalamanindek.phdenganstatus=gagal
        header('Location:index.php?status=gagal');
    }
 }else{
    die("Akses dilarang...");
 }
 ?>