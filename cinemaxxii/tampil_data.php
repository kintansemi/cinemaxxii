<!DOCTYPE html>
<html>
<head>
<title>BOOK SHOW CINEMAXXII</title>
</head>
<body>
<table>
<tr>
<td cols="2">BOOKED SHOW</td>
</tr>
<?php
$host="localhost";
$usernameserver="root";
$passwordserver="";
$database="cinema";


$koneksi=mysqli_connect($host,$usernameserver,$passwordserver,$database)	or die("tidak bisa nyambung ke mysql");


$query="select * from customer";
$result= mysqli_query($koneksi,$query); if($result)
{
while($hasil = mysqli_fetch_array($result))
{
extract($hasil);
?>
<tr>
<td>Nama</td>
<td><?php echo "$hasil[nama]";?></td>
</tr>
<tr>
<td>Email</td>
<td><?php echo "$hasil[email]";?></td>
</tr>
<tr>
<td>pesan</td>
<td><?php echo "$hasil[phone]";?></td>
</tr>
<tr>
<td>tanggal</td>
<td><?php echo "$hasil[tanggal]";?></td>
</tr>
<?php }} ?>
</table>
</body>
</html>
