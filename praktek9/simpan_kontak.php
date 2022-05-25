<?php
$host="localhost";
$username="root";
$password="";

//koneksi dengan mysql
$conn = mysqli_connect($host,$username,$password) or die("Koneksi gagal dibangun");

//koneksi ke database divane20082010170
mysqli_select_db($conn,"divane20082010170") or die("Database tidak dapat dibuka");
$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

//menyimpan ke tabel kontak
$sql="insert kontak set nama='$vnama',jkel='$vjkel',email='$vemail',alamat='$valamat', kota='$vkota', pesan='$vpesan'";
mysqli_query($conn,$sql) or die("Proses simpan ke database gagal");
mysqli_close();
header("location:kontak.html");
?>