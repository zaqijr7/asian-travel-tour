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



$user=$_SESSION['username'];
$jmltiket=$_GET['jml_tiket'];
$id = $_GET['id'];
$sql_rute = "SELECT * FROM rute WHERE id_rute='$id' ";
$query = mysqli_query($koneksi, $sql_rute);
if (!$query) {
die ('SQL Error: ' . mysqli_error($koneksi));
}
while ($row_rute = mysqli_fetch_array($query)){
?>
<br><br><br><br>
  <div class="panel panel-default warnafont" style="width:80%; margin:auto;">
    <div class="panel-heading">
      <b><p class="text-center">Info Tiket Yang Dipesan</p></b>
    </div>
    <div class="panel-body">

      <div class="table-responsive">
        <table class="table table-condensed">
          <tbody>
            <tr>
              <th> Maskapai </th>
              <td> <?php echo $row_rute['maskapai']; ?></td>
            </tr>
            <tr>
              <th> Negara Tujuan </th>
              <td> <?php echo $row_rute['negara_tujuan']; ?> </td>
            </tr>
            <tr>
              <th> Tanggal Berangkat </th>
              <td>  <?php echo $row_rute['tanggal_berangkat']; ?> </td>
            </tr>
            <tr>
              <th> Tanggal Pulang </th>
              <td>  <?php echo $row_rute['tanggal_pulang']; ?> </td>
            </tr>
            <tr>
              <th> Harga Tiket </th>
              <td>  Rp. <?php echo $row_rute['harga']; ?>,- </td>
            </tr>
            <tr>
              <th> Kelas </th>
              <td>  <?php echo $row_rute['kelas']; ?> </td>
            </tr>
            <tr>
              <th> Jumlah Tiket Yang Dipesan </th>
              <td>  <?php echo $jmltiket; ?> </td>
            </tr>
            <tr>
              <th> Jumlah Harus Dibayar </th>
              <td> <b> Rp. <?php echo $jmlharga=$jmltiket * $row_rute['harga'];?>,-</b> </td>
            </tr>
          </tbody>
        </table>

        <form action="controller\p_pesan_tiket.php" method="post">
          <!-- id rute -->
          <?php
          $sql_rute = "SELECT * FROM rute WHERE id_rute='$id' ";
          $query = mysqli_query($koneksi, $sql_rute);
          if (!$query) {
          die ('SQL Error: ' . mysqli_error($koneksi));
          }
          while ($row_rute = mysqli_fetch_array($query)){
          ?> <input type="hidden" value="<?php echo $row_rute['id_rute']; ?>" name="id_rute"> <?php } ?>
          <!-- id rute -->

          <!-- id user -->
          <?php


          $kode_huruf = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X' , 'Y', 'Z');
          shuffle($kode_huruf);
          $kode_angka = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
          shuffle($kode_angka);
          $sql_user = "SELECT * FROM auth_user WHERE username='$user' ";
          $query = mysqli_query($koneksi, $sql_user);
          if (!$query) {
          die ('SQL Error: ' . mysqli_error($koneksi));
          }
          while ($row_user = mysqli_fetch_array($query)){
          ?> <input type="hidden" value="<?php echo $row_user['id_user']; ?>" name="id_user"> <?php } ?>
          <!-- id user -->



          <input type="hidden" value="<?php echo $kode_huruf[0] . $kode_huruf[1] . $kode_huruf[2] . $kode_huruf[3] . $kode_huruf[4] . time(); ?>" name="kode_transaksi">
          <input type="hidden" value="<?php echo $kode_huruf[11] . $kode_angka[0] . $kode_huruf[9] . $kode_angka[1] . $kode_huruf[13] . $kode_angka[2] . $kode_huruf[3] .
                                                 $kode_angka[3] . $kode_huruf[6] . $kode_angka[4] . $kode_huruf[10] . $kode_angka[5] .
                                                 $kode_huruf[0] . $kode_angka[6] . $kode_huruf[16] ; ?>" name="kode_tiket">

          <input type="hidden" value="<?php echo $jmltiket; ?>" name="jumlah_tiket">

          <input type="hidden" value="<?php echo $jmlharga; ?>" name="jumlah_harga">
	         <input type="submit" class="btn btn-success" value="Beli Tiket">
        </form>

      </div>
    </div>
    <div class="panel-footer">
    <div class="text-muted text-right">Asian Travel Tour</div>
    </div>
  </div> <br> <br> <br>
<?php }

include 'footer.php';
?>
<script src="assets/js/jquery-1.11.2.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
