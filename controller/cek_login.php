<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from auth_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
 $data = mysqli_fetch_assoc($login);
 		// cek jika user login sebagai admin
		if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";

		// alihkan ke halaman dashboard admin
		header("location:\ujikom1\halaman_admin.php");

		// cek jika user login sebagai user biasa
		}else if($data['level']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard user
		header("location:\ujikom1\index.php");
		}else if($data['level'] == "agen"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "agen";
		// alihkan ke halaman login kembali
		header("location:\ujikom1\agen_bayar.php");
	}
	}else{
	header("location:\ujikom1\login.php?pesan=gagal");
}

?>
</body>
</html>
