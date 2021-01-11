<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attour";


$maskapai = $_POST['maskapai'];
$tujuan = $_POST['negara_tujuan'];
$tglb = $_POST['tgl_berangkat'];
$tglp = $_POST['tgl_pulang'];
$hrg = $_POST['harga'];
$kls = $_POST['kelas'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO rute (maskapai, negara_tujuan, tanggal_berangkat, tanggal_pulang, harga, kelas) VALUES ('$maskapai', '$tujuan', '$tglb' , '$tglp', '$hrg', '$kls') ";

if ($conn->query($sql) === TRUE) {
  header("location:\ujikom1\d_table_rute.php?pesan=berhasil");
} else {
     header("location:\ujikom1\d_table_rute.php?pesan=gagal");
}
?>
