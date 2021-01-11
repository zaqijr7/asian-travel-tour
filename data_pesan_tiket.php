<?php
include 'controller/koneksi.php';
include 'headerlogin.php';

session_start();
if(isset($_SESSION['login'])) {
       $_SESSION['login'];
       $_SESSION['username'];
		 }
		if($_SESSION['level'] =="user"){
 }else{
		die("<br> <br> <br> <br> <br> <br> <br> <p class='warnafont.css' style='text-align:center;text-size:40px;'> <b> Anda Belum Login !!! " . " Untuk Bisa Memesan Tiket, Silahkan <a href='login.php'> Klik </a> Untuk Login Atau Buat Akun Terlebih Dahulu ! </b> </p>");
		}
?>

<br><br><br><br>

<?php
$sql = "SELECT * FROM transaksi WHERE kode_transaksi=". $_GET['kode_transaksi'];
$query = mysqli_query($koneksi, $sql);
if (!$query) {
die ('SQL Error: ' . mysqli_error($koneksi));
}

while ($row = mysqli_fetch_array($query)){
?>

<div  class="container">
  <div  class="jumbotron">
    <h1 style="text-align:center; color:black;"> <?php echo $row['kode_transaksi']; ?> </h1>
    <p style="text-align:justify;"> Diatas adalah Kode Transaksi untuk konfirmasi pembayaran tiket. Untuk dapat mencetak kwitansi tiket, anda perlu membayar telebih dahulu pada agen penjualan tiket Asian Travel Tour. <br>
     Anda hanya perlu memberikan kode tersebut kepada agen pembayaran tiket Asian Travel Tour
     pada saat proses pembayaran, setelah pembayaran selesai maka Kwitansi bisa dicetak.. <br><br><br>
     Sudah Bayar ?
     <?php
     $username = $_SESSION['username'];
     $sql_user = "SELECT * FROM auth_user WHERE username='$username'";
     $query = mysqli_query($koneksi, $sql_user);
     if (!$query) {
     die ('SQL Error: ' . mysqli_error($koneksi));
      }

     while($row = mysqli_fetch_array($query)){
     ?>
     <form action="riwayat_pemesanan.php" method="post" id="form1">
       <input type="hidden" name="username" value="<?php echo $row['username'];?>">

       <a href="javascript:;" onclick="document.getElementById('form1').submit();" class="btn btn-success"> Klik Untuk Mencetak Kwitansi </a>
     <!--<span class="badge badge-danger">7-->
     </form>
   <?php } ?>

   </p>



</div>
</div>
<?php } ?>
<script src="assets/js/jquery-1.11.2.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/contact.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
