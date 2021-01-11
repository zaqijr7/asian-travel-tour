<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5 mb-5">
      <div class="card-header">Regiter Account</div>
      <div class="card-body">
        <form action="controller/p_register.php" method="post">
         <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputnama" class="form-control" placeholder="Nama Lengkap" required="required" name="nama">
              <label for="inputnama">Nama Lengkap</label>
            </div>
          </div>


			  <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputnik" class="form-control" placeholder="Nomor NIK" required="required" name="nik">
              <label for="inputnik">Nomor NIK</label>
            </div>
          </div>

			 <div class="form-group">
			 <span>Jennis Kelamin :</span>
            <div class="form-row">
              <div class="col-md-6">
				    <div class="form-check">
  						<label class="form-check-label">
   							 <input type="radio" class="form-check-input" name="jk" value="Laki-laki">Laki-Laki
  						</label>
					 </div>
              </div>
              <div class="col-md-6">
				   <div class="form-check">
  						<label class="form-check-label">
   						 <input type="radio" class="form-check-input" name="jk" value="Perempuan">Perempuan
  						</label>
					</div>
              </div>
            </div>
          </div>


			 <div class="form-group">
            <div class="form-label-group">
              <input type="texts" id="inputNoHp" class="form-control" placeholder="Nomor Hp" required="required" name="nohp">
              <label for="inputNoHp">Nomor Hp</label>
            </div>
          </div>


			 <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputusname" class="form-control" placeholder="User Name" required="required" name="usname">
              <label for="inputusname">User Name</label>
            </div>
          </div>


          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" name="email">
              <label for="inputEmail">Email address</label>
            </div>
          </div>


          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required" name="password">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Register">
        </form>
        <div class="text-center">
          <a class=" mt-3 btn btn-danger btn-block" href="login.php">Klik Untuk Login</a>
        </div>
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
