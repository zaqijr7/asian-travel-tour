<html>
<head>
  <title> Kwitansi </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin</title>

  <head>
    <body>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attour";


$id = $_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM transaksi
INNER JOIN auth_user ON transaksi.id_user = auth_user.id_user
INNER JOIN rute ON transaksi.id_rute = rute.id_rute WHERE id_transaksi='$id'";
$sql_bayar = "UPDATE transaksi SET status_bayar='yes' WHERE id_transaksi='$id' ";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)){

      if ($conn->query($sql_bayar) === TRUE) {
?>
 <div>

<table  style="margin:auto; border:1.5px dashed black; width:300px;">
  <caption><b>Kwitansi Dan Tiket Asian Travel Tour</b></caption> <br>
   <tr>
     <th style="text-align: left;">Kode Transaksi</th>
     <td> <?php echo $row['kode_transaksi']; ?> </td>
   </tr>
   <tr>
     <th style="text-align: left;">Kode Tiket</th>
     <td> <?php echo $row['kode_tiket']; ?> </td>
   </tr>
   <tr>
     <th style="text-align: left;">Username</th>
     <td> <?php echo $row['username']; ?> </td>
   </tr>
   <tr>
     <th style="text-align: left;">Nama Pemesan</th>
     <td> <?php echo $row['nama_lengkap']; ?> </td>
   </tr>
   <tr>
    <th style="text-align: left;">Maskapai</th>
    <td> <?php echo $row['maskapai']; ?> </td>
   </tr>
   <tr>
    <th style="text-align: left;">Negara Tujuan</th>
    <td> <?php echo $row['negara_tujuan']; ?> </td>
   </tr>
   <tr>
    <th style="text-align: left;">Tanggal Berangkat</th>
    <td> <?php echo $row['tanggal_berangkat']; ?> </td>
   </tr>
   <tr>
    <th style="text-align: left;">Tanggal Pulang</th>
    <td> <?php echo $row['tanggal_pulang']; ?> </td>
   </tr>
   <tr>
    <th style="text-align: left;">Harga Pertiket</th>
    <td> Rp. <?php echo $row['harga']; ?>,- </td>
   </tr>
   <tr>
   <tr>
    <th style="text-align: left;">Jumlah Tiket</th>
    <td> <?php echo $row['jumlah_tiket']; ?> </td>
   </tr>
   <tr>
    <th style="text-align: left;">Total Harus Dibayar</th>
    <td> Rp. <?php echo $row['jumlah_bayar']; ?>,- </td>
   </tr>
</table>
<br>
<p style="text-align:center;" > *<i>Simpan kwitansi ini dan perlihatkan kepada petugas bandara untuk- <br>tanda bukti pembelian tiket</i> </p>
</div>
<?php
    }

} ?>
<script>
 window.Print();
</script>
</body>
  </html>
