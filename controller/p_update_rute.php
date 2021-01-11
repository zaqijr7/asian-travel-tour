<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attour";


$id = $_POST['id'];
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

$sql = "UPDATE rute SET maskapai='$maskapai', negara_tujuan='$tujuan', tanggal_berangkat='$tglb' , tanggal_pulang='$tglp', harga='$hrg', kelas='$kls' WHERE id_rute='$id' ";

if ($conn->query($sql) === TRUE) {
 header("location:\ujikom1/d_table_rute.php");
} else {
     echo "gagal";
}
?>
