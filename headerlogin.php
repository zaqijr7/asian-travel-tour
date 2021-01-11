<!DOCTYPE html>

<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css">
	 <link rel="stylesheet" href="assets/css/warnafont.css" type="text/css">
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
			<a class="navbar-brand" href="index.html" title="HOME"><i class="ion-paper-airplane"></i>Asian<span> travel tour</span></a>
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
