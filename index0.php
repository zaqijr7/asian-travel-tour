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


<!-- Our Blazzing offers -->
	<section class="offer section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Our Blazzing offers
			</h2>
			<p class="section-subtitle">
				Lorem Ipsum is simply dummy text of the industry.
			</p>
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-social-euro"></i>
						</div>
						<h3>
							Affordable Pricing
						</h3>
						<p>
							Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-ios-home"></i>
						</div>
						<h3>
							High class Hotels
						</h3>
						<p>
							Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-android-bus"></i>
						</div>
						<h3>
							Luxury Transport
						</h3>
						<p>
							Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->

				<div class="col-sm-3 col-xs-6">
					<div class="offer-item">
						<div class="icon">
							<i class="ion-ios-locked"></i>
						</div>
						<h3>
							Highest Security
						</h3>
						<p>
							Class aptent taciti sociosutn tora torquent conub nost reptos himenaeos.
						</p>
					</div>
				</div> <!-- /.col-md-3 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.offer -->


<!-- Top place to visit -->
	<section class="visit section-wrapper">
		<div class="container">
			<h2 class="section-title">
				Top place to visit
			</h2>
			<p class="section-subtitle">
				Lorem Ipsum is simply dummy text of the industry.
			</p>

			<div class="owl-carousel visit-carousel" id="">
				<div class="item">
					<img src="assets/images/visit-1.png" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/visit-2.png" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/visit-3.png" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/visit-1.png" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/visit-2.png" alt="visit-image" class="img-responsive visit-item">
				</div>
				<div class="item">
					<img src="assets/images/visit-3.png" alt="visit-image" class="img-responsive visit-item">
				</div>
			</div>
		</div> <!-- /.container -->
	</section> <!-- /.visit -->



	<section class="additional-services section-wrapper">
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
    <script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/script.js"></script>






</body>
</html>
