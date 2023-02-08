<?php
include "koneksi.php";
$nama=$_POST['nama'];
$password=$_POST['boleeeh'];
$query="UPDATE login1 SET katasandi='$password' WHERE  nama='$nama'";
mysqli_query($konek, $query);
header("location:lihat_pengguna.php");


//$kueri=mysqli_query($konek,"UPDATE login1 SET nama="'.$nama.'",katasandi="'.$password.'' WHERE 1");
//echo "UPDATE login1 SET katasandi='$password' WHERE nama='$nama' ";
//header("location:lihat_pengguna.php");
