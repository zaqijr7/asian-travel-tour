<?php
session_start();
if(isset($_SESSION['login'])) {
       $_SESSION['login'];
       $_SESSION['username'];
}
if($_SESSION['level'] =="user"){
	include 'headerlogin.php';
}else{
		include 'header.php';
		}

?>

<!-- Home -->
		<div id="header">
		    <div class="flexslider">
		        <ul class="slides">
		            <li class="slider-item">
		                <div class="intro container">
		                    <div class="inner-intro">
		                        <h1 class="header-title">
		                            <span>Kunjungi</span> Semua Negara Di Asia Tenggara
		                        </h1>
		                        <p class="header-sub-title">
		                            Temukan Kemudahan, Kenyamanan Dan Kebahagiaan Lainnya.
		                        </p>
		                        <button class="btn custom-btn">
		                            book now
		                        </button>
		                    </div>
		                </div>
		            </li> <!-- /.slider-item -->
		            <li class="slider-item">
		                <div class="intro">
		                    <div class="inner-intro">
		                        <h1 class="header-title">
		                             <span>Solusi</span> Kemudahan Membeli Tiket</span>
		                        </h1>
		                        <p class="header-sub-title text-muted">
		                            Temukan Kemudahan, Kenyamanan Dan Kebahagiaan Lainnya.
		                        </p>
		                        <a class="btn custom-btn text-muted" href="#booking">
		                            book now
		                        </a>
		                    </div>
		                </div>
		            </li> <!-- /.slider-item -->
		        </ul> <!-- /.slides -->
		    </div> <!-- /.flexslider -->
		</div> <!-- /#header -->
<!-- Find a Tour -->
	<section class="tour section-wrapper container" id="booking">
		<h2 class="section-title">Cari Tiket</h2>
		<p class="section-subtitle">Kemana Anda Akan Pergi?</p>
		<div class="row">
      <form action="opsi_tiket.php" method="post">
			     <div class="col-md-3 col-sm-6">
			          <div class="warnafont"><span>Negara Tujuan : </span></div>
				            <div class="form-group">
						<!--label for="sel1">Select list (select one):</label-->
            <select class="form-control" name="negara_tujuan" style="height: 45px;">
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
			     </div>

			<div class="col-md-3 col-sm-6">
			            <div class="warnafont"><span>Tanggal Berangkat : </span></div>
				          <div class="form-group">
					               <input type="date" class="form-control border-radius" placeholder="Arrival"/>
				          </div>
			</div>

			<div class="col-md-3 col-sm-6">
			         <div class="warnafont"><span>Tanggal Pulang : </span></div>
				       <div class="form-group">
					            <input type="date" class="form-control border-radius" placeholder="Arrival"/>
			         </div>
			</div>

			<div class="col-md-3 col-sm-6">
			     <div><span>.</span></div>
				       <input type="submit" class="btn btn-default border-radius custom-button" value="Cari...">
			</div>
		</div>
   </form>
  </div>
</section> <!-- /#booking -->




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
    <script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/script.js"></script>






</body>
</html>
