<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Tiket</title>

  <!-- Custom fonts for this template-->
  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-light">
<?php

session_start();
if(isset($_SESSION['login'])) {
       $_SESSION['login'];
		 }
		if($_SESSION['level'] =="agen"){
 }else{
		die("Anda Belum Login Atau Anda Bukan Agen !!! " . " Silahkan <a href='login.php'> Klik </a> Untuk Login, Agar Anda Bisa Mengakses Halaman Ini");
		}
?>

  <div class="container">
    <div class="card card-register mx-auto mt-5 mb-5 shadow-lg">
      <div class="card-header"><h5>Pembayaran Tiket<span class="fa fa-money"></span></h5></div>
      <div class="card-body">

		<?php
		  include 'controller/koneksi.php';
			$id = $_GET['id'];
      $sql = "SELECT * FROM transaksi
      INNER JOIN auth_user ON transaksi.id_user = auth_user.id_user
      INNER JOIN rute ON transaksi.id_rute = rute.id_rute WHERE id_transaksi='$id'";
      $query = mysqli_query($koneksi, $sql);
      if (!$query) {
      die ('SQL Error: ' . mysqli_error($koneksi));
      }
		while($row = mysqli_fetch_array($query)){
		?>
  <form action="controller/p_update_pembayaran.php" method="post">

		  <div class="input-group mb-3">
				 <input type="hidden" class="form-control" value="<?php  echo $row['id_transaksi'];  ?>" name="id">
			</div>


      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" style="width: 135px;">Kode Transaksi</span>
        </div>
        <input type="text" class="form-control" style="height: 50px;" value="<?php echo $row['kode_transaksi']; ?>" placeholder="<?php echo $row['kode_transaksi']; ?>" disabled>
      </div>

	 <div class="input-group mb-3">
	  <div class="input-group-prepend">
      <span class="input-group-text" style="width: 135px;">Username</span>
    </div>
  <input type="text" class="form-control" value="<?php echo $row['username']; ?>" placeholder="<?php echo $row['username']; ?>" style="height: 50px;" disabled>
  </div>


    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width: 135px;">Nama Pemesan</span>
      </div>
      <input type="text" class="form-control" style="height: 50px;" value="<?php echo $row['nama_lengkap']; ?>" placeholder="<?php echo $row['nama_lengkap']; ?>" disabled>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width: 135px;">Tujuan</span>
      </div>
      <input type="text" class="form-control" style="height: 50px;" value="<?php echo $row['negara_tujuan']; ?>" placeholder="<?php echo $row['negara_tujuan']; ?>" disabled>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width: 135px;">Jumlah Tiket</span>
      </div>
      <input type="text" class="form-control" style="height: 50px;" value="<?php echo $row['jumlah_tiket']; ?>" placeholder="<?php echo $row['jumlah_tiket']; ?>" disabled>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width: 135px;">Jumlah Bayar</span>
      </div>
      <input type="text" class="form-control" style="height: 50px;" value="<?php echo "Rp. " . $row['jumlah_bayar'] . ",-"; ?>" placeholder="<?php echo "Rp. " . $row['jumlah_bayar'] . ",-"; ?>" disabled>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width: 135px;">Nominal Uang</span>
      </div>
      <input type="text" class="form-control" style="height: 50px;" placeholder="Masukan Nominal Uang Pembayaran " name="nominal">
    </div>


			  <div class="form-row">
              <div class="col-md-6">
				   <a href="agen_bayar.php" class="btn btn-danger btn-block"> Batal </a>
				  </div>
				  <div class="col-md-6">
				  <input type="submit" class="btn btn-primary btn-block" value="Simpan">
				  </div>
				  </div>
        </form>
      </div>
    </div>
  </div>
  <?php } ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
