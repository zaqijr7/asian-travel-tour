<?php
include 'koneksi.php';

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE  FROM transaksi WHERE id_transaksi='$id' ";

if ($koneksi->query($sql) === TRUE) {
    header("location:\ujikom1/agen_bayar.php?pesan=hapus");
} else {
    echo "Error deleting record: " . $koneksi->error;
}

$koneksi->close();
?>
