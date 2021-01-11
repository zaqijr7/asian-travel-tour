<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attour";


$id = $_POST['id'];
$bayar = $_POST['nominal'];

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

  if($bayar >= $row['jumlah_bayar']){
      if ($conn->query($sql_bayar) === TRUE) {
?>
  <p> Kode Transaksi : <?php echo $row['kode_transaksi']; ?>  <br>
      Kode Tiket : <?php echo $row['kode_tiket']; ?>  <br>
      Username :<?php echo $row['username']; ?> <br>
      Nama Pemesan :<?php echo $row['nama_lengkap']; ?> <br>
      Maskapai :<?php echo $row['maskapai']; ?> <br>
      Negara Tujuan :<?php echo $row['negara_tujuan']; ?> <br>
      Tanggal Berangkat :<?php echo $row['tanggal_berangkat']; ?> <br>
      Tanggal Pulang :<?php echo $row['tanggal_pulang']; ?> <br>
      Jumlah Tiket :<?php echo $row['jumlah_tiket']; ?> <br>
      Total Harus Dibayar : Rp. <?php echo $row['jumlah_bayar']; ?>,-  <br>
      Jumlah Bayar : Rp.<?php echo $bayar; ?>,- <br>
      Uang Kembalian : Rp.<?php echo $bayar-$row['jumlah_bayar']; ?>,-  <br> <br>
    </p>

   <form action="\ujikom1/kwitansi.php" method="get">
    <input type="hidden" value="<?php echo $id;?>" name="id">
    <input type="submit" value="Print"> | <a href="\ujikom1\agen_bayar.php"> Kembali</a>
   </form>





<?php
    }
  }else {
       echo "gagal";
  }
}
  ?>
