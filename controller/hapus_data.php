<?php
include 'koneksi.php';

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE  FROM rute WHERE id_rute='$id' ";

if ($koneksi->query($sql) === TRUE) {
    header("location:\ujikom1/d_table_rute.php?pesan=hapus");
} else {
    echo "Error deleting record: " . $koneksi->error;
}

$koneksi->close();
?>
