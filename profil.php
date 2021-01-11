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
  ?>
  <?php
  $no=1;
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM auth_user WHERE username='$username'";
$query = mysqli_query($koneksi, $sql);
if (!$query) {
die ('SQL Error: ' . mysqli_error($koneksi));
}
while ($row = mysqli_fetch_array($query)){
  ?>
?>
  <br><br><br><br><br>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="thumbnail">
            <img src="assets\images\avatar.png" alt="avatar">
            <div class="caption">
              <h3 style="text-align:center;">Informasi Akun Anda</h3>
              <div class="table-responsive">
              <table  border="0" style="width:100%; margin:auto;" class="table-striped">

                 <tr>
                   <th>Username</th>
                   <td> <?php echo $row['username']; ?> </td>
                 </tr>
                 <tr>
                   <th>Password</th>
                   <td> ****** </td>
                 </tr>
                 <tr>
                   <th>Nama Lengkap</th>
                   <td> <?php echo $row['nama_lengkap']; ?> </td>
                 </tr>
                 <tr>
                   <th>No Nik</th>
                   <td> <?php echo $row['no_nik']; ?> </td>
                 </tr>
                 <tr>
                   <th>No Hp</th>
                   <td> <?php echo $row['no_hp']; ?> </td>
                 </tr>
                 <tr>
                   <th>Email</th>
                   <td> <?php echo $row['email']; ?> </td>
                 </tr>
                 <tr>
                   <th>No Nik</th>
                   <td> <?php echo $row['no_nik']; ?> </td>
                 </tr>
               </table>
             </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
<br><br><br><br>




<?php

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
