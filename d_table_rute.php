<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Rute</title>

  <!-- Custom fonts for this template-->
  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
if(isset($_SESSION['login'])) {
       $_SESSION['login'];
		 }
		if($_SESSION['level'] =="admin"){
 }else{
		die("<div style='background-color:#e80000; height:35px;'> <h4 style='text-align:center; color:#ffffff;'> Anda Belum Login Atau Anda Bukan Admin !!!
     Silahkan <a href='login.php'> Klik </a> Untuk Login, Agar Anda Bisa Mengakses Halaman Ini </h4> </div>");
		}

	?>
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Asian Travel Tour</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     <li class="nav-item no-arrow">
        <a class="nav-link" href="controller/hapussession.php">
         <i class="fas fa-sign-out-alt fa-fw"></i>
        </a>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="halaman_admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="d_table_rute.php">
          <i class="fas fa-fw fa-plane"></i>
          <span>Data Rute</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="d_table_pesanan.php">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Data Pemesanan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="d_table_user.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Data User</span></a>
      </li>
    </ul>


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tabel Data Rute</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Rute & Jadwal Penerbangan</div>
				<a href="tambah_rute.php"><input type="submit" class="btn btn-outline-secondary mt-3 ml-4" value="Tambah Rute"> </a>
				<?php
				include 'controller/koneksi.php';
        $no=1;
				$sql = 'SELECT * FROM rute';
		$query = mysqli_query($koneksi, $sql);
		if (!$query) {
	die ('SQL Error: ' . mysqli_error($koneksi));
}
				echo"
          <div class='card-body'>
            <div class='table-responsive'>
              <table class='table table-bordered' id='dataTable' cellspacing='0'>
              <thead class='thead-light'>
                  <tr>
                    <th>No</th>
                    <th>Maskpai</th>
                    <th>Negara Tujuan</th>
                    <th>Tgl Berangkat</th>
                    <th>Tgl Pulang</th>
						  <th>Harga</th>
						  <th>Kelas</th>
						  <th>Opsi</th>
                  </tr>
                </thead>
					  <tbody>";

					 while ($row = mysqli_fetch_array($query)){
	echo"
	      <tr>
			<td>" . $no++ . "</td>
			<td>" . $row['maskapai'] . "</td>
			<td>" . $row['negara_tujuan'] . "</td>
			<td>" . $row['tanggal_berangkat'] . "</td>
			<td>" . $row['tanggal_pulang'] . "</td>
			<td> Rp. " . $row['harga'] . "</td>
			<td>" . $row['kelas'] . "</td>
			<td>";

		?>
    <p style="text-align:center;">
			<a href="controller/hapus_data.php?id=<?php echo $row['id_rute'];?>" class="btn btn-danger"> <i class='fas fa-trash'></i> </a> -
      <a href="update_rute.php?id=<?php echo $row['id_rute'];?>" class="btn btn-info"> <i class="fas fa-edit"></i> </a>
    </p>
    </td>
		</tr>
		<?php
}
?>


	</tbody>
                <tfoot class="table-active">
                  <tr>
                    <th>No</th>
                    <th>Maskpai</th>
                    <th>Negara Tujuan</th>
                    <th>Tgl Berangkat</th>
                    <th>Tgl Pulang</th>
						  <th>Harga</th>
						  <th>Kelas</th>
						  <th>Opsi</th>
                  </tr>
                </tfoot>
                <tbody>


                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
              <span>Copyright © Asian Travel Tour | Uji Kompetensi Keahlian Rekayasa Perangkat Lunak | SMK ISLAMIYAH CIAWI 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <!-- Bootstrap core JavaScript-->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>
