
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


    $id = $_POST['username'];
    $no=1;
    $sql = "SELECT * FROM transaksi
    INNER JOIN auth_user ON transaksi.id_user = auth_user.id_user
    INNER JOIN rute ON transaksi.id_rute = rute.id_rute WHERE username='$id'";
    $query = mysqli_query($koneksi, $sql);
    if (!$query) {
    die ('SQL Error: ' . mysqli_error($koneksi));
    }
?>

<br><br><br><br>
<div class="container">
   <h2 style="text-align:center;" class="warnafont">Data Pemasanan Tiket Anda</h2>
<div class="card-body">
  <div class="table-responsive">
    <br> <br>
    <table class="table table-bordered warnafont" id="dataTable" cellspacing='0'>
    <thead class='thead-light'>
        <tr>
          <th>No</th>
          <th>Maskapai</th>
          <th>Tujuan</th>
          <th>Tgl Berangkat</th>
          <th>Tgl Pulang</th>
          <th>Kode Tiket</th>
          <th>Jml Tiket</th>
          <th>Jml Bayar</th>
          <th>Status Bayar</th>
          <th>Opsi</th>
        </tr>
      </thead>
  <tbody>
    <?php
    while ($row = mysqli_fetch_array($query)){
      ?>
      <tr>
    <td> <?php echo $no++ ; ?></td>
    <td> <?php echo $row['maskapai'] ; ?> </td>
    <td> <?php echo $row['negara_tujuan'] ; ?> </td>
    <td> <?php echo $row['tanggal_berangkat'] ; ?> </td>
    <td> <?php echo $row['tanggal_pulang'] ; ?> </td>
    <td> <?php
          if($row['status_bayar']=="yes"){
          echo $row['kode_tiket']  ;
          }else{
          echo "***************" ;
          }
          ?>
    </td>
    <td> <?php echo $row['jumlah_tiket'] ; ?> </td>
    <td>Rp. <?php echo $row['jumlah_bayar'] ; ?>,- </td>
    <td> <?php
    if($row['status_bayar']=="yes"){
    echo "<div style='background-color:green; text-align:center; color:white;'><b>" .$row['status_bayar']. "</b> <div>" ;
    }else{
    echo "<div style='background-color:red; text-align:center; color:white;'><b>" .$row['status_bayar']. "</b><div>" ;
    }
    ?>
    </td>
    <td>
      <?php if($row['status_bayar']=="yes"){
      echo "<p style='text-align:center;'> <a href='kwitansi.php?id=". $row['id_transaksi'] . "'>Cetak Kwitansi</a> </p>" ;
      }else{
      ?>
      <p style='text-align:center;'> <a href="data_pesan_tiket.php?kode_transaksi='<?php echo $row['kode_transaksi']; ?>'">Bayar Tiket</a> </p>
    <?php  }?>
    </td>
     </tr>
   <?php } ?>
 </tbody>
</table>
</div>
</div>
</div>


<script src="assets/js/jquery-1.11.2.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/contact.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/script.js"></script>






</body>
</html>
