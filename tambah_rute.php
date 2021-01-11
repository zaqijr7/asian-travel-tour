<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Rute</title>

  <!-- Custom fonts for this template-->
  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-light">
<?php
include 'controller/koneksi.php';
session_start();
if(isset($_SESSION['login'])) {
       $_SESSION['login'];
		 }
		if($_SESSION['level'] =="admin"){
 }else{
		die("Anda Belum Login Atau Anda Bukan Admin !!! " . " Silahkan <a href='login.php'> Klik </a> Untuk Login, Agar Anda Bisa Mengakses Halaman Ini");
		}
?>

  <div class="container">
    <div class="card card-register mx-auto mt-5 mb-5 shadow-lg">
      <div class="card-header"><h5>Tambah Rute</h5></div>
      <div class="card-body">
        <form action="controller/p_tambah_rute.php" method="post">
	      <div class="input-group mb-3">
	           <div class="input-group-prepend">
                <span class="input-group-text">Maskapai</span>
             </div>
                <select class="form-control" name="maskapai" style="height: 50px;" id="sel1">
                    <option value="Aviastar">Aviastar</option>
                    <option value="Batik Air">Batik Air</option>
                    <option value="Citilink">Citilink</option>
                    <option value="Garuda Indonesia">Garuda Indonesia</option>
	                  <option value="Lion Air">Lion Air</option>
	                  <option value="Susi Air">Susi Air</option>
	                  <option value="Merpati Airlines">Merpati Airlines</option>
                </select>
       </div>

       <div class="input-group mb-3">
           <div class="input-group-prepend">
               <span class="input-group-text" style="width: 92px;">Tujuan</span>
            </div>
               <select class="form-control" name="negara_tujuan" style="height: 50px;">
                 <option value="Malaysia">Malaysia</option>
                 <option value="Kamboja">Kamboja</option>
                 <option value="Thailand">Thailand</option>
                 <option value="Singapore">Singapore</option>
                 <option value="Brunei">Brunei</option>
                 <option value="Timor Leste">Timor Leste</option>
                 <option value="Filiphine">Filiphine</option>
                 <option value="Laos">Laos</option>
                 <option value="Vietnam">Vietnam</option>
                 <option value="Myanmar">Myanmar</option>
               </select>
      </div>


			  <div class="form-group">
            <div class="form-label-group">
              <input type="date" id="inputnik" class="form-control" placeholder="Nomor NIK" name="tgl_berangkat" required>
              <label for="inputnik">Tanggal Berangkat</label>
            </div>
          </div>


			  <div class="form-group">
            <div class="form-label-group">
              <input type="date" id="inputnik" class="form-control" placeholder="Nomor NIK" name="tgl_pulang" required>
              <label for="inputnik">Tanggal Pulang</label>
            </div>
          </div>


			  <div class="form-group">
 				 <div class="form-label-group">
  						<input type="text" class="form-control" placeholder="Harga Tiket" id="harga" name="harga">
 				 <label for="harga">Harga Tiket</label>
            </div>
			</div>


			 <div class="form-group">
			 <span>Kelas Tiket :</span>
            <div class="form-row">
              <div class="col-md-6">
				    <div class="form-check">
  						<label class="form-check-label">
   							 <input type="radio" class="form-check-input" name="kelas" value="ekonomi">Ekonomi
  						</label>
					 </div>
              </div>
              <div class="col-md-6">
				   <div class="form-check">
  						<label class="form-check-label">
   						 <input type="radio" class="form-check-input" name="kelas" value="bussines">Bussines
  						</label>
					</div>
              </div>
            </div>
          </div>

			  <div class="form-row">
              <div class="col-md-6">
				  <a href="d_table_rute.php" class="btn btn-danger btn-block"> Batal </a>
				  </div>
				  <div class="col-md-6">
				  <input type="submit" class="btn btn-primary btn-block" value="Tambah">
				  </div>
				  </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
