<?php
include 'include/koneksi.php';
include 'include/app.php';
$s_karyawan = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from karyawan");
$karyawan = mysqli_fetch_array($s_karyawan);
$t_karyawan = mysqli_num_rows($s_karyawan);
$skr = date('d M Y');
if (isset($_GET['error'])) {
	echo "<script>alert('Username atau Password Salah!')</script>";
	// echo "<script>document.location.href= '../login'</script>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/loginizin.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="js/loginizin.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
      </head>
    <body>

    <div class="container">
        <br><br>
        <div class="row">
			<div class="col-md-6 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-5">
						 <div class="col-md-12 text-center">
							<h1>Login Pegawai Izin</h1>
						 </div>
					</div>
                    <form method="POST" action="controllers/login_izin.php">
                           <div class="form-group">
                              <label for="exampleInputusername1">Username</label>
                              <input type="username" name="username"  class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter username">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputusername1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="usernameHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="Sign In" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                        </form>
				</div>
			</div>

		</div>
      </div>

</body>

</html>