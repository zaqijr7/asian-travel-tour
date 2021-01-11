<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>About Me</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/section.css">
    <link rel="stylesheet" href="assets/css/services.css">
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
</head>
<body>

  <?php
  session_start();
  if(isset($_SESSION['login'])) {
         $_SESSION['login'];
         $_SESSION['username'];
  }

  if($_SESSION['level'] =="user"){
    include 'controller/koneksi.php';
          session_start();
           $_SESSION['username'];
  ?>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand" href="index.php" title="HOME"><i class="ion-paper-airplane"></i>Asian<span> travel tour</span></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class='active'><a href='index.php'>Home</a></li>
				<li><a href='about.php'>about</a></li>
				<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $_SESSION['username']; ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu nav navbar-nav">

          <li>
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

							<a href="javascript:;" onclick="document.getElementById('form1').submit();"> Riwayat Pemesanan <span class="fas fa-shopping-cart"></span>
						  </a>
						<!--<span class="badge badge-danger">7-->
						</form>
					<?php } ?>
					</li>
          <li><a href="profil.php">profil <span class="fas fa-user"></span></a></li>
        </ul>
      </li>
				<li><a href="controller/hapussession.php">logout
				<span class="fas fa-sign-out-alt fa-fw"></span></a>
				</li>
					</ul>
				</div>
		                  <!-- /.navbar-collapse -->
	  	</div><!-- /.container -->
	</nav>
<?php }else{ ?>

    <nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
  		<!-- Brand and toggle get grouped for better mobile display -->
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  			<a class="navbar-brand" href="index.php" title="HOME"><i class="ion-paper-airplane"></i>Asian<span> travel tour</span></a>
  			</div>
  			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  			<ul class="nav navbar-nav navbar-right">
  					<li class='active'><a href='index.php'>Home</a></li>
  					<li><a href='about.php'>about</a></li>
  					<li><a href='login.php'>login</a></li>
  					</ul>
  				</div>
  		                  <!-- /.navbar-collapse -->
  	  	</div><!-- /.container -->
  	</nav>

  <?php } ?>



	<section class="features section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Tentang Kami
			</h2>
			<p class="section-subtitle">
				Sebuah Kemudahan Membeli Tiket
			</p>
			<div class="row custom-table">
				<div class="grid-50 table-cell">
					<p class="features-details">
						Asian travel tour adalah layanan jasa pemesanan tiket penerbangan secara online bagi anda yang ingin tour menjelajahi Asia Tenggara.
					</p>
					<ul class="features-list">
						<li>Harga tiket yang terjangkau.</li>
						<li>Kemudahan dalam pemesanan.</li>
						<li>Stok tiket yang banyak.</li>
						<li>Metode pembayaran yang mudah.</li>
					</ul>
					<a href="index.php" class="btn btn-default custom-button border-radius">
						PESAN SEKARANG
					</a>
				</div>

				<div class="grid-50 table-cell">
					<img src="assets/images/features-bg.png" alt="" class="features-img img-responsive _pos-abs">
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.features -->

<section class="section-wrapper">

  <div class="container">
    <h2 class="section-title">
      <marquee> Melayani Anda Sepenuh Hati  </marquee>
    </h2>
  </div>

</section>



    <section class="additional-services offer section-wrapper">
      <div class="container">
        <h2 class="section-title">
          Team Development
        </h2>
        <p class="section-subtitle">
          Tim Pengembang Website
        </p>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="custom-table">
              <img src="assets/images/add-srvc-1.png" alt="" class="add-srvc-img">
              <div class="add-srvc-detail">
                <h4 class="add-srvc-heading">
                  Muhammad Zaqi A
                </h4>
                <p class="add-srvc">
                  Tunda cintamu, kejarlah cita-citamu
                </p>
              </div> <!-- /.add-srvc-detail -->
            </div> <!-- /.custom-table -->
          </div> <!-- /.col-md-4 col-sm-6 -->

          <div class="col-md-4 col-sm-6">
            <div class="custom-table">
              <img src="assets/images/add-srvc-2.png" alt="" class="add-srvc-img">
              <div class="add-srvc-detail">
                <h4 class="add-srvc-heading">
                  Jenal Arifin
                </h4>
                <p class="add-srvc" style="text-align:justify;">
                  Kesuksesan itu memang memerlukan kerja keras, tetapi kerja keras tanpa ibadah dan istiqomah bagaikan sayur tanpa garam.
                </p>
              </div> <!-- /.add-srvc-detail -->
            </div> <!-- /.custom-table -->
          </div> <!-- /.col-md-4 col-sm-6 -->

          <div class="col-md-4 col-sm-6">
            <div class="custom-table">
              <img src="assets/images/add-srvc-3.png" alt="" class="add-srvc-img">
              <div class="add-srvc-detail">
                <h4 class="add-srvc-heading">
                  Liska Almadini F
                </h4>
                <p class="add-srvc" style="text-align:justify;">
                  Orang cerdas belajar dari kesalahannya, orang bijak tidak mengulangi kesalahannya, sebab untuk bisa merasakan manisnya madu perlu mencicipi pahitnya empedu dan menjadi baik itu seharusnya bukan pilihan :)

                </p>
              </div> <!-- /.add-srvc-detail -->
            </div> <!-- /.custom-table -->
          </div> <!-- /.col-md-4 col-sm-6 -->

          <div class="col-md-4 col-sm-6">
            <div class="custom-table">
              <img src="assets/images/add-srvc-4.png" alt="" class="add-srvc-img">
              <div class="add-srvc-detail">
                <h4 class="add-srvc-heading">
                  Rista Fatimah
                </h4>
                <p class="add-srvc">
                  Jadilah baik tanpa bosan :)
                </p>
              </div> <!-- /.add-srvc-detail -->
            </div> <!-- /.custom-table -->
          </div> <!-- /.col-md-4 col-sm-6 -->

          <div class="col-md-4 col-sm-6">
            <div class="custom-table">
              <img src="assets/images/add-srvc-5.png" alt="" class="add-srvc-img">
              <div class="add-srvc-detail">
                <h4 class="add-srvc-heading">
                  Siti Sumi Kulsum
                </h4>
                <p class="add-srvc">
                  Cara paling mudah bertahan hidup : berhenti memperdulikan omongan orang.
                </p>
              </div> <!-- /.add-srvc-detail -->
            </div> <!-- /.custom-table -->
          </div> <!-- /.col-md-4 col-sm-6 -->

          <div class="col-md-4 col-sm-6">
            <div class="custom-table">
              <img src="assets/images/add-srvc-6.png" alt="" class="add-srvc-img">
              <div class="add-srvc-detail">
                <h4 class="add-srvc-heading">
                  Diyana Diyanti
                </h4>
                <p class="add-srvc">
                  Jadilah yang terbaik dari yang terbaik.
                </p>
              </div> <!-- /.add-srvc-detail -->
            </div> <!-- /.custom-table -->
          </div> <!-- /.col-md-4 col-sm-6 -->
          <div class=" col-md-offset-2 col-md-4 col-sm-6">
            <div class="custom-table">
              <img src="assets/images/add-srvc-7.png" alt="" class="add-srvc-img">
              <div class="add-srvc-detail">
                <h4 class="add-srvc-heading">
                  Fitri Kurniasih
                </h4>
                <p class="add-srvc" style="text-align:justify;">
                  Jangalah pernah menyerah ketika anda masih mampu berusaha lagi. Tidak ada kata berakhir sampai anda berhenti untuk mencobanya lagi.
                </p>
              </div> <!-- /.add-srvc-detail -->
            </div> <!-- /.custom-table -->
          </div> <!-- /.col-md-4 col-sm-6 -->
          <div class="col-md-4 col-sm-6">
            <div class="custom-table">
              <img src="assets/images/add-srvc-8.png" alt="" class="add-srvc-img">
              <div class="add-srvc-detail">
                <h4 class="add-srvc-heading">
                  Yuli Siti Jamilah
                </h4>
                <p class="add-srvc">
                  Teruslah percaya dan bekerja keraslah!
                </p>
              </div> <!-- /.add-srvc-detail -->
            </div> <!-- /.custom-table -->
          </div> <!-- /.col-md-4 col-sm-6 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </section> <!-- /.Additional-services -->


		<ul class="social-icon">
			<li><a href="#"><i class="ion-social-twitter"></i></a></li>
			<li><a href="#"><i class="ion-social-facebook"></i></a></li>
			<li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
			<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
		</ul>
	</div> <!-- /.subscribe -->

<?php
include 'footer.php';
 ?>


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
	<script src="assets/js/script.js"></script>






</body>
</html>
