<?php 
$host="localhost";
$username="root";
$password="";
//koneksi dengan mysql
$conn = mysqli_connect($host,$username,$password) or die("Koneksi gagal dibangun");
//koneksi dengan database divane20082010170
mysqli_select_db($conn,"divane20082010170") or die("Database tidak dapat dibuka");
?>