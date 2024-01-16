<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kelompok 4 - Vigenere Chiper</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
</head>
<body background="bg.PNG" style="background-repeat: no-repeat; background-position: center; background-size: cover;">
	<div class="kotak_login">
		<p class="tulisan_login"><h1><center><b>Silahkan login</b></center></h1></p>
		
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
?>
		
		<form action="" method="POST">
			<label><b>Username</b></label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username">
			
			<label><b>Password</b></label>
			<input type="text" name="pass" class="form_login" placeholder="Masukkan Password">
 
			<input type="submit" name="login" class="tombol_login" value="LOGIN">
			<br/>
		</form>
	</div>
</body>
</html>

<?php  

include "koneksi.php";

if (isset($_POST['login'])) {
	// code...
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	$query = mysqli_query($konek, "SELECT * FROM user where username = '$user' AND password = '$pass'");
	$cek = mysqli_num_rows($query);
	if ($cek==1) {
		// code...
		header("location:kjk2/index.php");
		exit();
	}else{
		echo "password salah";
	}
}

?>