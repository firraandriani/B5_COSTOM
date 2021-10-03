<!DOCTYPE html>
<html>
<head>
    <!-- Meta Including Start -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">   
    <title>Login | Kampung Coklat</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/KampungCoklat/public/css/Awal MAsuk.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/KampungCoklat/public/css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href='http://localhost/KampungCoklat/public/img/icon_judul.jpg' rel='shortcut icon'>
    <!-- <script src="js/awalMasuk.js"></script> -->
</head>
<body>

	<?php
	
	if (isset($_SESSION['messages'])) {
		echo "<script type='text/javascript'>alert('" . $_SESSION['messages'] ."');</script>";
		unset($_SESSION['messages']);
	}

	?>

	<!-- Logo Start -->
	<div class="logo">
		<img src="http://localhost/KampungCoklat/public/img/Logo-Daun.png">
	</div>
	<!-- End of Logo -->

	<!-- Login Box Start -->
	<div class="box">
		<h2>Login</h2>
		<form action="<?= BASEURL; ?>/Login/loginPermission" method="post">
			<div class="inputBox">
				<input type="text" name="email" required oninvalid="this.setCustomValidity('Email tidak boleh kosong')" oninput="setCustomValidity('')"></input>
				<label>Email</label>
				<span class="input pass"></span>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required minlength="3" maxlength="8" oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')"></input>
				<label>Password</label>
				<span class="input pass"></span>
			</div>
			<div>
				<input type="checkbox" name="remember" id="remember">
				<label class="remember" for="remember">Remember me</label>
			</div>
			<button type="submit" name="login" id="tombol_login">Login</button>
		</form>
	</div>
	<!-- End of Login Box -->

</body>
</html>