<?php
	include "koneksi.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
</head>
<body>
	<center><h1>LOGIN</h1></center>
	<form method="post">
		<center>Username : <input type="text" name="inputUsername">
		<br>
		<br>
		Password : <input type="text" name="inputPassword">
		<br>
		<br>
		<button type="submit" name="login">LOGIN</button></center>		
	</form>
</body>
</html>
	<?php
		//Apabila tombol login diklik, makan akan dilakukan pengecekan.
		if (isset($_POST['login'])) {
			//isis variabel $username dan $password diambil dari inputan di textbox
			$username = $_POST['inputUsername'];
			$password = $_POST['inputPassword'];
			$query = mysqli_query($conn, "SELECT * FROM tblLogin WHERE username ='$username' AND password = '$password'");
			//variabel $cari digunakan untuk mencari pada tiap baris di query yang ada di variabel $query
			$cari = mysqli_num_rows($query);
			if ($cari==1) {
				header("location:cetak.php");
			}else  {
				header("location:index.php");
			}

		}


