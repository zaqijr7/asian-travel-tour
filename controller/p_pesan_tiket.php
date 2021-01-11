<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attour";


$id_rute = $_POST['id_rute'];
$id_user = $_POST['id_user'];
$kode_transaksi = $_POST['kode_transaksi'];
$kode_tiket = $_POST['kode_tiket'];
$jumlah_tiket = $_POST['jumlah_tiket'];
$jumlah_harga = $_POST['jumlah_harga'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO transaksi (id_rute, id_user, kode_transaksi, kode_tiket, jumlah_tiket, jumlah_bayar, status_bayar) VALUES ('$id_rute', '$id_user', '$kode_transaksi', '$kode_tiket', '$jumlah_tiket', '$jumlah_harga', 'no') ";

if ($conn->query($sql) === TRUE) {
  header("location:\ujikom1\data_pesan_tiket.php?kode_transaksi='$kode_transaksi'");
} else {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>
