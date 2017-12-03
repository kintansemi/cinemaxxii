<?php
$nama=$_POST['fm_nama'];
$email=$_POST['fm_email'];
$phone=$_POST['fm_phone'];
$tanggal=date('Y-m-d');

$host="localhost";
$usernameserver="root";
$passwordserver="";
$database="cinema";

$koneksi=mysqli_connect($host,$usernameserver,$passwordserver,$database) or die("tidak bisa nyambung ke mysql");

if(strlen($nama)==0)
{
  echo("Nama Harap Diisi");
}
else if(strlen($email)==0)
{
  echo("Email Harap Diisi");
}
else if(strlen($phone)==0)
{
  echo("Phone Harap Diisi");
}
else if($koneksi)
{
$query="INSERT	INTO customer (nama,email,phone,tanggal) VALUES ('$nama','$email','$phone','$tanggal')";
$result=mysqli_query($koneksi,$query);
include"tampil_data.php";
}

?>
