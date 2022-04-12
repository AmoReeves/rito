<!DOCTYPE html>
<html lang="en">
<head>
	<title>Личный кабинет</title>
	<meta charset="utf-8">


	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet prefetch" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fonts.css">
    <link rel="srylesheet" href="css/forma.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="Login_v16/fonts/font-awesome-4.7.0/css/font-awesome.min.css">  <!-- Библиотека значков font awesome (Восклицательные знаки) -->

	<link rel="stylesheet" type="text/css" href="Login_v16/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">	<!-- Еще одна библиотека (Замочек, личный кабинет) -->

	<link rel="stylesheet" type="text/css" href="Login_v16/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v16/css/main.css">




	<link rel="stylesheet" href="css/flickity.min.css">
    
</head>
<body>

	<section class="hero1">
		<header style="display: flex;align-items: flex-end;padding-bottom: 20px;">
			
			<div style="flex: 2; display: flex; margin-left: 20px;">
				<a href="index.html"> 
				<h1 class="Logotext2">Skydive</h1>
				</a>
			</div>
			<div style="display: flex;flex: 3;justify-content: flex-end;">
				<h1 class="Logotext2" style="margin-right: 50px;"><a href="Catholog.html">Католог</a></h1>
				<h1 class="Logotext2" style="margin-right: 50px;"><a href="Доставка.html">Доставка</a></h1>
				<h1 class="Logotext2" style="margin-right: 50px;"><a href="О нас.html">О нас</a></h1>
				<h1 class="Logotext2" style="margin-right: 50px;"><a href="личный кабинет2.html">Профиль</a></h1>
			</div>
		</header>
		
	</section>
	
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form  class="login100-form validate-form p-b-33 p-t-5" action ='' method ='GET'>

					<div class="wrap-input100 validate-input" data-validate = "Введите имя пользователя">
						<input class="input100" type="text" name="username" value="<?php if(isset($_GET['username'])) $us = trim($_GET['username']);  ?>" placeholder="Имя пользователя">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Введите Пароль">
						<input class="input100" type="password" name="PSWD" value="<?php if(isset($_GET['PSWD'])) $pswd = trim($_GET['PSWD']);  ?>" placeholder="Пароль">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span><!-- При фокусе остается только иконка -->
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
<!--						        <input type="submit" value="LOGIN">-->
							
					</div>

				</form>
				
				<?php 
					
					$log = 'ad';
					$pas = '13';
					$inL = $_GET['username'];
					$inP = $_GET['PSWD'];
						echo($inL == $log);
						echo($inP == $pas);
					if($log == $inL && $pas == $inP)
					{
						echo('<a href="index.html">');
					}
					else
						echo('Неверно');
					
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
					/*if(!isset($us))
					{
						echo gettype($us).'net logina';
					}
					else if(!isset($pswd))
					{
						echo gettype($pswd).'net parolya';
					}
					else
					{
						echo $us.' '.$pswd;
						echo gettype($us);
						echo gettype($pswd);
					}
					$real_us = 'admin';
					$real_pass = 'admin';
					echo gettype($real_pass);
					echo $_GET['PSWD'];
				
				
					function verify($a,$b)
					{
						if($a==$real_us && $b == $real_pass)
						{
						return true;
						}
					}
					if(!isset($us) && verify($us,$pswd) == false)
					{
						echo 'neverno';
					}
					else
					{
						echo "corect";
					}*/
					
					
					
					

				?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="Login_v16/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v16/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v16/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v16/js/main.js"></script>

	




	<div class="poloska"> </div>  <!-- Полоска дерева перед footer-ом -->


	<footer>
		<section style="display: flex;align-items: center; justify-content: center;">
		<div style="display: flex;flex-grow: 8;align-items: center;justify-content: center;">
		<img src="img/букваS.PNG" alt="">
			<h1 class="Logotext2" style="color: black; margin-left: 20px; "> <a href="index.html"> Skydive </a></h1>

		</div>

		<div style="flex-grow: 6;">
		<h1 style="color: black;" class="Logotext2">Соц сети</h1>
		</div>
		<div style="flex-grow: 6;">
		<h1 style="color: black;" class="Logotext2">Помощь</h1>	
		</div>
		<div style="display: flex;flex-basis: 280px;flex-wrap: wrap;justify-content: center; margin-right: 80px;">
			<div style="display: flex;">
			<img src="img/Значки/DCSHOECOUSA_Logo.svg.png" alt="" style="margin-right:20px;">
			<img src="img/Значки/Quicksilver-Logo.png" alt="" style="margin-right:20px;">
			<img src="img/Значки/Слой 3.png" alt="">
			</div>
			<div style="display: flex; margin-top: 30px;">
			<img src="img/Значки/Слой 4.png" alt="" style="margin-right:20px;">
			<img src="img/Значки/Слой 5.png" alt="" style="margin-right:20px;">
			<img src="img/Значки/Слой 6.png" alt="">
			</div>
		</div>
	</section>
	</footer>

</body>
</html>
