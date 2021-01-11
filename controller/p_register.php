<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attour";



$nm = $_POST['nama'];
$nik = $_POST['nik'];
$jk = $_POST['jk'];
$nhp = $_POST['nohp'];
$uname = $_POST['usname'];
$mail = $_POST['email'];
$pw = $_POST['password'];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO auth_user (username, password, level, no_nik, nama_lengkap, jenis_kelamin, no_hp, email)
VALUES ('$uname', '$pw', 'user', '$nik', '$nm', '$jk', '$nhp', '$mail')";

if ($conn->query($sql) === TRUE) {
  header("location:\ujikom1\login.php?pesan=register_berhasil");
}else {
     header("location:\ujikom1\login.php?pesan=register_gagal");
}
?>
