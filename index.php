<!DOCTYPE html>
<html lang="en">
<head>
	<title>Program Hitung Luas Lingkaran</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/images.jpg);">
					<span class="login100-form-title-1">
						Hitung Luas Lingkaran
					</span>
				</div>

				<form class="login100-form validate-form" method ="post" action="index.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Isikan Jari-jari dengan benar">
						<span class="label-input100">Jari-jari</span>
						<input class="input100" type="text" name="jari" placeholder="Isikan Jari-jari">
						<span class="focus-input100"></span>
					</div>
			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit" value="Hitung">
					 	Hitung
						</button>
					</div>
					<?php
						if(isset($_POST['submit'])){
						$jari = $_POST['jari'];
						$luas_lingkaran = pi () *pow ($jari,2);
						}
					?>
					<div class="wrap-input100">
						<span class="label-input100">Luas Lingkaran</span>
						<input class="input100" type="text" name="jari" value='<?php echo @$luas_lingkaran ;?>' disabled>
						<span class="focus-input100"></span>
					</div>
				</form>

				
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>