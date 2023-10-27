<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: index.php");
}
?>
<html><head>
	<title>Team 1 | Projects</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="">
	<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
							<a href="index.php" class="logo">
								<span class="fa fa-code"></span> <span class="title">Home</span>
							</a>

						<!-- Nav -->
							<nav>
								<ul>
									<li><a href="#menu">Menu</a></li>
								</ul>
							</nav>

					</div>
				</header>

			<!-- Menu -->
				

			<!-- Main -->
				<div id="main">
					<div class="inner">
						<h1>Projects</h1>

						<div class="image main">
							<img src="https://assets.kpmg.com/is/image/kpmg/project-management-banner:cq5dam.web.1400.350" class="img-fluid" alt="">
						</div>
						<div class="container">	
							<div class="row">
								<div class="col-sm-4 text-center">
									<a href="game.php"><img src="https://lh3.googleusercontent.com/pw/ADCreHc49PREvJ_MIFXBuCfu9mSTYjTdUJ27HjI07cOsT_nm9zXiP8cr76FD_hECW8iw0XkJDOaagUUbgHPvw5J39yEustiN8WLCz8EfcryaV7hpRWKSKq2RflT5Rvm1W8iJufxAWEIiZPZ8Gr5DtBhASqQkH9POrx4WHhudZvk34mb4X8VUwqI7i7x3K2W9TyhuaFO-xtfSWaJvQuG455rPwO1Nc4M9hw6kps2Aa5TIJR8BsirJM4d1v_aiEjL2US-xLPoG4HKm-x9publUBttVfHF0spyoOpBA7P6MKT3gn1hWHSlBxiZPB5ldjReOcJJE_agk79SoEL4ySR5-lCTygoru9wvTAdOU9otcXTI_A2jY5riv2RsYbMstjK8gcKRqFRFlyhiIIsZqBVO2dqgWIjfTgz89t0AN7YocJlb9semogcOGdMJYCsTMIgeN2nrEqh1IPgcDLqt02B6p5SQ5DFTSraBnkm4qqDTUYR4KKj-bn6gP-u-fMXWc8Vw9GGDFIBYDvlNPif4SumupCRmNy5JLtbiImRMejzgExiwf5wSN8deVJ3l3ZB_iaNfUbmupmm7_TdeUWp9zmOCSW53s6C7nZ3XSMr8b7vzxFKGPryG8_31PavsqTTNAJZ4boVj0OS5TR4kED73npBdfgzSfIDoftQhG1syue-ut0G98w4OaDyXa42PpqoGrMoFCcEA4jkw4HGGhMoL_UMPBRDFSg3s97sC8hwmOJFo4JPahgqGL6Oz46h3q7uzvjUzXvlk6ecgtyTcdZ8htQ-EQvCWf2wKj9Yb0CY2vsNwNL3G1fYAb7bSBeRV8jGtyUmvp8lmfKIrSvYXDQ87aIEXlsgz7ZL2Phu4RE8yYzzY4Hz_m0xyr68A1tobcM9MMdqb2NOIqsV6J6gm4oVkFtMarFt7QrZR8zUqI6r706lwv-PygFhzXlgzZQXXNyp1kDpSOYQrydtdJRyTJUO6jZ1AHNAEdTZfk_iM_qp1c9X6l0Uybviu-Wrq87QSUdf-thBrCHpF6sm-K-max=w300-h288-s-no?authuser=0" alt=""/></a>

									<h2 class="m-n"><a href="Project1Game/game.php">Tic-Tac-Toe</a></h2>

									<p> Project 1</p>
								</div>
								
								<div class="col-sm-4 text-center">
									<img src="" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">lalalalala</a></h2>

									<p> someone &nbsp;|&nbsp; someday</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="copyright">
							<li>Copyright © 2020 Company Name </li>
							<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
						</ul>
					</div>
				</footer>

		</div>

	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/main.js"></script><nav id="menu"><div class="inner">
					<h2>Menu</h2>
					<ul>
						<li><a href="index.php">Home</a></li>

						<li><a href="projects.php" class="active">Projects</a></li>

						<li><a href="team.php">Our Team</a></li>

						<li><a href="login.php">Login</a></li>

                        <li><a href="logout.php">Logout</a></li>
					</ul>
				</div><a class="close" href="#menu">Close</a></nav>


</body></html>