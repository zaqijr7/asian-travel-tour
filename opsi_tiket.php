<?php
include 'controller/koneksi.php';


session_start();
if(isset($_SESSION['login'])) {
       $_SESSION['login'];
       $_SESSION['username'];
		 }
		if($_SESSION['level'] =="user"){
      include 'headerlogin.php';
 }else{
   include 'header.php';
		die("<br> <br> <br> <br> <br> <br> <br> <p class='warnafont.css' style='text-align:center;text-size:40px;'> <b> Anda Belum Login !!! " . " Untuk Bisa Memesan Tiket, Silahkan <a href='login.php'> Klik </a> Untuk Login Atau Buat Akun Terlebih Dahulu ! </b> </p>");
		}


$tujuan=$_POST['negara_tujuan'];
setcookie('tujuan', $tujuan, time()+240);
?>
<br><br><br><br>

      <footer>
        <h2 style="text-align:center;">
          TIKET YANG TERSEDIA
        </h2>
      </footer>
<?php
$sql = "SELECT * FROM rute WHERE negara_tujuan='$tujuan' ORDER BY id_rute DESC ";
$query = mysqli_query($koneksi, $sql);
if (!$query) {
die ('SQL Error: ' . mysqli_error($koneksi));
}

while ($row = mysqli_fetch_array($query)){

?>
<br>
  <div class="panel panel-default warnafont" style="width:80%; margin:auto;">
    <div class="panel-heading">
      <?php echo $row['maskapai']; ?>
    </div>
    <div class="panel-body">

      <div class="table-responsive">
        <table class="table table-condensed">
          <tbody>
            <tr>
              <th> Negara Tujuan </th>
              <td> <?php echo $row['negara_tujuan']; ?> </td>
            </tr>
            <tr>
              <th> Tanggal Berangkat </th>
              <td>  <?php echo $row['tanggal_berangkat']; ?> </td>
            </tr>
            <tr>
              <th> Tanggal Pulang </th>
              <td>  <?php echo $row['tanggal_pulang']; ?> </td>
            </tr>
            <tr>
              <th> Harga Tiket </th>
              <td>  Rp. <?php echo $row['harga']; ?>,- </td>
            </tr>
            <tr>
              <th> Kelas </th>
              <td>  <?php echo $row['kelas']; ?> </td>
            </tr>
            <tr>
              <th> Pesan Jumlah Tiket </th>
              <td>
                <form class="form-inline" action="pesan_tiket.php" method="get">
                <input type="hidden" class="form-control" value="<?php  echo $row['id_rute'];  ?>" name="id">
                <div class="form-group">
                  <select class="form-control" name="jml_tiket">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                 </div>
             </td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="submit" class="btn btn-info" value="Pesan Tiket">
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="panel-footer">
    <div class="text-muted text-right">Asian Travel Tour</div>
    </div>
  </div> <br>
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
