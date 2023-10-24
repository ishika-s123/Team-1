<?php
session_start();
if (!isset($_SESSION["user"])){
    header("Location: index.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Team 1 | Our Team</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
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
				<nav id="menu">
					<h2>Menu</h2>
					<ul>
						<li><a href="index.php">Home</a></li>

						<li><a href="projects.php">Projects</a></li>

						<li><a href="team.php" class="active">Our Team</a></li>
							
						<li><a href="login.php">Login</a></li>

                        <li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Our Team</h1>

							<div class="image main">
								<img src="https://lh3.googleusercontent.com/pw/ADCreHeO91Bq2BUdkFyvayVknwdLdo1RJeWBiwwNYkQT5Pt0B80wqmv51vCI8mkKp1jmOWpYXcT2HRQCJBKfqBT7lAskRznzQeh9M-NWVLnvJdNjUnq9_K9ssN1IXme_8aNyq5N2PtSfg55UUAkyEL0VH4483WPZtzcYvhudT25rLQQi9wVwc78WnHhUC8NLieVTbMUYRnZMsIWPoVTdjVT6PPdtyr4ebkj0stuSw3uCOlkiPauYWRjxFq4225BvOc5nKqVTyMidNXVwbpjWUe5QQnFjlN6kl5eHTVrh5JwbhBVrNNjyzLHRfaeL3uIXfASBpiB-1XRwJ5viHvq02xY2lxfRM-xF6KmENImSp4Me0i9dkWz41mBurEiGC62dfoogcguuGvRXvmk7hadPa9XSGj2HbMKb-EHl9q9mYAt4rbauj84d4jW7tx0KC4gZkWKg07IEJs0v3BFxb6dTqYa4b6DG-1o1-p8DezZeUDUK7NWH-MdXLSQCjpXGTVWHdK2cdJSFQxE2TQkdbCASGI6WLxfTHfKZ20I1WAEEgFGoS9zQyZqG9xkE708lMXQ9LU3lqRUQN06DHj_ZVOwKrfgCOhlFR6LnkQf5c6lb3lmMJnx9vQbQpOXDLEsNA72bZKIQWxhS5oEDswMWd_6hOv7SvbSY1eoFETZJ_Zex_DyEHM829xy-5QCmg-poH7Bi5LxQxswxCxK_HTjiiQ8o2KttjySHnYGBepOwzm28WT5q6ZRm2qSucaZohT-SVn0iSOnja7GdeE6pA_8d90ft51905G4ItEBa8cozWi7WddZ4p-iuvdkOAOMaUfM-1yJLYSbFpKW8FPbXC4WLXeXJRJbJTgavICuY5XdfO2Gkt941Qtt3butGT5SS40O7_Ee1VZ5Agq0q0w9ZltLYTUWY7zAkdnmZLdMYcYXGrtGlkPX-3S1oYbn4MBE-wplLQS54WRr1fHfHIeSYIJ48eyjcaTFiYEzP9qkObz3VSEI927s5XV9ZPEniWvXvplwhszyL7tWS52VQ6Nsn=w1024-h861-s-no?authuser=0" class="center" alt="" style="width:693px;height:567;"/>
							</div>
							<p>We are a team of six women in STEM looking to explore the world of CS. We are excited to develop our understanding of computer science and coding through this class. 
								We look forward to creating projects and expanding our knowledge!</p>
							<div class="container">
								<div class="row">

									<div class="col-sm-4 text-center">
										<img src="https://lh3.googleusercontent.com/pw/ADCreHeYBobu35ivipiySTTlTiAouo_k6lYcao7ewtobTo7NIQAZj_T9l7BEDQl4NSQodHk_3OsHnPuPJf85XvzLG5Mqor8amEedtz_T_z4GW1QzTodUdAvkmSQIfkYXFKEQz8RoUdfNUyVNrbsnQRzZSz_kzbhJ5QNoHEvwRIOURuhGjYQ3cTCwmXTkULvHd3K_J3J63rsSDkECrT27yAEd59jiG9f0Y2iYKQpK-cYQ6lqS0LDiti_gNovnCi1_-gdcgaoQpiuwEJFgIsmp3WuYavkJNvGlb4FcdgW_3W327PqnLl1vZfKUcTLNnFt_fyjNXlnNffXHFTEiKtcEq80SHg1DqbwI1zv7GXvtJeZ8MGXUtJVUAckzUuAX7EWHhkeGKQI2ihaZks5S5TyqxbyX0_knu4SDlPZEfa99Zvp-ItWop3MelgNa_o6egFrwJUKl03KC2HC74uIJfFbb-pFOvDaqds-Miy3u2a-P46ur2olQlFq6xripqdAWtsNIWPi8lxQzV3lU9BA8E4C_qNy1YJxxQEuZkVtaHYlclDSkdQIom5g4Bu8HB2JETTrSOxhsya0hPuqHEyamDacuqj4I6BWmpzvdgS6pecNHRhB3EsAjNT205Fa0cqKpZMMv84mXCp_r2Ve0n6A2k0BPBjfJYZI4_IG6Wbyn7Tg8swHLx_Jl8qOy4u3jxpegpJQYA47XIITR5W9h0jS60PZ3llomowM0OspYjSl3hbW2D_XLGcfbLrh0VO4yOJSlbgNbovCDtHAk3jG7OlEiUYoEF1t4W1kviQQEP33qDG3lWdxAvsJZ-rTtJWsYtDciadurtZLn18Hh5SmFCG7YjCCcygTdCAGSqnmHTe6qO9BNm-xMqJsYZ1boBUKQ1kYWqnU6QyN8g6Yl-YSL5LXecn-GogR8xGSsetV7juPJtJCAFzS8idkxafuTiH4sYf7tS7AUSn9aDu__S_KwdLNTmji5TXTD3Zx9zOmaBVH7pj-zx4i0H7Z48mmnrAyRHCtdACvgjnFQT9H24Tq9=w670-h670-s-no?authuser=0" class="img-fluid" alt="" />
	
										<h2 class="m-n"><a href="Ishika.html">Ishika Singh</a></h2>
	
										<p> Webmaster </p>
									</div>

									<div class="col-sm-4 text-center">
										<img src="https://lh3.googleusercontent.com/pw/ADCreHeqKLBnAW5fAt7I0zDalKK2Jjwsqo76DQ3WQcXP34wL0QqwvtyZl5EKBjTtG7WpF60HE0ekm8B6oIob_trJq5XqZWJboK4Lfzoyufmst1BNW8XYbjYrKYuFrU74Xc2373dPzMxqw5U7rEuhxgS8SspsNnqw0hQD3wu9ANrTf89X1c_-iJ8sqJ_6zCtUH2BM_ldohVRwMVZolIQV8mlZW8OuQZj3ZHdvyCA59iCF222X1Dkzkp3FUI_fRIyOg48HGV5C3SroIxr_E6FbCsbshOom7e9bAe2BX2xeg0EXXDYUFxW4ijPT8Lf7ns8UEm4PsKBT_f1hpJMlf-oGsYBSpehgDr40poh7H9cHs_IJy1217iVpyyKPmAsXnBhZguHWzRSiQCvksQkOVOi71uOFdOQp8e3SaE2KwYlByW2RUStUywARd1h3MyNJ4tqP3sx_j3dzBN8q8jvVtD9Ao7rEz7aXWk2xPmhi7po4d2QcDf7lmxgiBCI2hcUwruQ_G_iDkTIH9zNbuLnSJbFBERyWGmqUOeljBoUsW_DT_3b9zC005qO7lGzDq0aa-Dnx_Rz7hZ6qon9w7v1oR3zSwVT072H1waYid1yaIbtaLU4PJnR_sNjQiz9-xLGSP8tgwDPKtlKBhxzcwun0AU-rwbzT4PI5pVTtwacBYJiygEcvs2ODTMfjjwfUKFpvtKRw9Gc3EGCaZ5Pek90miy3-q3wB8-KUD3U5gi__J4M2YtEvG1Ue9q6QIDbcdyKDot0wHr5o68atRwyu4wjehyZtewFdaCJVNnxO9A2AhLzWhkYhlu4aBZWfDWAC58bi1qA0wieWWAf2EVQYq104xwRd-d-XvqpzwEPiu2UPLnd1KgLkBHyDHS8uzPzofE831xy5lP3o3bfjMY9QrvFuvbc0d6Aq6pNujd5vSTFidrN6K7CPgJzeHA8L4Oeq0ur4UP2A-_dNlJ1uPfBywYnDMrZWOfchDsxQnJjMAzIHTd0QeSdYwafI8StDuqM6H3WEtcxYLsSoYIAeZmDv=w666-h666-s-no?authuser=0" class="img-fluid" alt="" />
	
										<h2 class="m-n"><a href="Sonal.html">Sonal Madala</a></h2>
	
										<p> Content Specialist </p>
									</div>

									<div class="col-sm-4 text-center">
										<img src="https://lh3.googleusercontent.com/pw/ADCreHcIeTEw8bUM_M8kxYg_tjnaFiF6-FG7lSLzQFC-9bV5PQ3t_TTnC8Ua29pbYmp7C-qghMPxDvjDtq7yoQZxHw5DHrR91Kx6x_64dqhvc3LzDL5s_YlOd0mNhrY1l2bF5mbxomPhKUVcs7rFVfpZxqpL6OKiazZjhWvHQPkRdEb6XGS_EZI4Q0ZmZgqEXUwzNaX2YhDAWthwu3eEFuRCMttd5JBhpqyGCHZ32hZMCOPL4w0dYlIGMIovEh0uOoqQJSBW8pmkpUSCXelQNs7rvL6zDS_Gm3y51V13LFAC-gCsPvurw_lHgFEIxowqyla9CzD2dtFZoRKfmL6urS_ap_Th7dxfvnxTWsN3BfVLBkLO4g3vUC8MdtdIWDIw3ydhkR4ZxG5AWFk3WD570d303mP5WS3fKaCzqp88Ev-a92NjIwYs6P3GJqJTUq2Um8c1HOwC3cgOO1qZYHmz2vs-NvJLf5qJfxe1qNCpWgZyV2wcebRAG8HhpHNWcxckhq80z9qjoo2PsH9brVYAu61UsWdsB4Kfab8q4CIyePWmvbntVq0a8-C0xWkJWO4KpXHi-7U9PL64dYPn1GGeQD8Wu0fbQFONFQF0yxuB-MJnCIaPWUIeEZWVikKK_OKTVpTTP3szUfm2a3JDGqPTH67deS3HxGxR6ePd3w2JeD4lSyPWacSIee1E8Td6RnmT4r9MSGzixD4GIEnsNJ8Be67CR0IKkGuJefpETjoxQwscwJMBXlY--HTBgbYD40Tn-A_e3E5SaRxpCZPLYJpo-uAob3gn1m05ZhP46f4sQFG2sKIj-JKEqpF0mBW-QBNs4RTWMTQmZ7PGhtmRxy81VARr_9Jo50ub1Xy0bPcDKJDThCiaJtGN2n8cPKHOzY77e_e1xQHRPv13KNEi7PE0Ex2ghO8MElRu2HXpFgl7kB48gi1ANVFCuyeUAMQlQzkUjp05TG1syHpoVwXwSGCRM9plvE_VHcFK50962Ed__Rs4Aen2y2IeJdnhdTUP8Ii1kprWcJN-Qhcc=w670-h670-s-no?authuser=0" class="img-fluid" alt="" />
	
										<h2 class="m-n"><a href="Varna.html">Varna Srinivasan</a></h2>
	
										<p> Front-End Developer</p>
									</div>

									<div class="col-sm-4 text-center">
										<img src="https://lh3.googleusercontent.com/pw/ADCreHekgILgTlQGPHBHGMfBuTJ2uaAIRm1B4tD8NJBV3Epfp5mp9cmtS9kHgtZt5MNRhK5Q84270ZLbHLtsFvIjcylo4HBPO2cKEtj0QeuXA72D8IwxNtZ49eSpM-026PusIEcTgNcbZawwB2y4mhWfLK2AlGKZL_opoQkK-M3ANKk8-daPI59zo1Vt-IQP-IcYFz4xgNdhM5PrQhPui2tEYYA75YSRH8RZVoi1-aOLlTxttDyBtdNmOTtOEPAZrbnEFVZXzHfYLjaaqhL1E2E97DMPIjI7DI01ygxTew2GIaftxkKpjZZfshma59bKWHAiQkAcyoJbm5c7KJ5judDCJOppxdzDfbeqecGJgXYqFgEYDjpxmWJKupOUWQ9GyqoLc5oWU0iAFvkKidE98FNoU-ocdRr40ao6bZN1XQxbLBoJeCKOwnrmaPpYPJx0SQ5RPPX8QXX-E_H4gA-xR2cqYv6XFTFL7z5t1mAp7mTti53pXkdPCFyIcgqoveAzlngmOvi3qwWLocyDcKKLE48wj6NcNQ8mFV6Iu-9dx1-r1rLw9cl4fuChktCORnKKLSRyE7BRCXKjvmj1WvUgk83VSU6cIs0wzjawG8NHKWWsNTTuSzUy-vErXdMSaWKpyF4rcRY4oTr6tZ1Ib0i85H_PSTnEFLfA9Ttwwg6Aa-4bEHo-I_qkKys0zDmitP5WdQ9fa2u6MNlIWsb7s5oijGssv6fp3NcZH5V_sTlD3lJGhuEa0gfH1ZrySM9IAo1gwttkd_hDXE2InIcPBs9Y2bPIQXhNnJUPqGZI6077GuUjs3p98qcE0hWb4vbQJ8o3sx23onmizXhpDTHjCcc_o6kyvlTkV1Ah29G4vT5sDOMrrLg7uHHLQZHyYyFEewOKF4N0uLbnIoq_U7sBGwnihq6JaIgAlNxpRb1WqYzWEHS0Y56E9DpwivO-yFEXVoI4mnAptp7mkAC0MUF_-NMH9aa2kK9OpZ6OlQ2GtWDVwqFu2jX0Mjt_4wOGKwHbMj3cYiFgfhQy1SB1=w670-h670-s-no?authuser=0" class="img-fluid" alt="" />
	
										<h2 class="m-n"><a href="Satya.html">Satya Edidi</a></h2>
	
										<p> Front-End Developer</p>
									</div>

									<div class="col-sm-4 text-center">
										<img src="https://lh3.googleusercontent.com/pw/ADCreHeBoH5z3Cfy0nSlUlbtfOh7Ivwp60JfnKlnQJRkMXPJ5rFEC8wZqQ2rNCIH4aoZ6VcHI12zfDiuQ37vsxnNXnzv5o7MoYd8HNKC-7m8ERmIN3ip43sXkPE0Nj0By8zQ7f_zquP-kkfZ6-AtegqGIKx55SmPuGTp-7V41IHQ2H1RCXQdSJel0hzqwp4nT5edl0PtrSJjzl7_dzNGKdu9wCPX8r3Tsq8es1moyhy6ikE1y7IjwWzxI2PVUwRgwXy6pF45Y8RGgiYSejBXZAPnCmMhmb8NvfnbgvTmuBR0kYW7eDkui62-xyHD-uXGgKJn_B3_dbN__PPJRsekqUEG6X68qNFJ_y5OiOsqHHBSC7r-vnam1OUnoKQP_VkqRuif--Q5-YarJB-g5Cn2o3CDXZZ6bjvNGXSXJ9B-Ui2uQAEHDPVwV3_OXxujPsbiBUjWissakVNLLx3vqMgBuKMDM9E2Sn9yjZn1Lxk6ixzGNKFeecJyhBQyS49MPrukMpobAY52WNsMcjZ_1JeJaUJy6kHRjG3OOdgKeQbOawIQVcZqYIG8cYs7QNhMfcYn7xjfR5Mvcbek4BxXW3_6vhLDeHEuxPWRON5I-6BfeLiQDY4aT5ER_67PAoPLjsWjn2LWjxNR6NV_Ce_vQqqjp-O4Aw_NBB2KDpITlxaY4lnrnWHo54HWBv9keCd6Ud9JxRFym7azbgGhz5tH3_WNb3H3bJqgcb67Qv-S-P97npiqStuEoLm0ckKIwPsBBcTuCj3ieC38fh5KJc-MvRs8Umy0xQQtuIAyXMhNMrB1wATOoE-9YAbhx8cm1M2j0M0bgP_dPhXNF73hAV4iUZZd0S8ixRVlMKUnKS6i-dN4DI6ePl6D89ahO73O7M8xG-43tRw39kR334CyCRkJPN2Y8kB47jZXXvDJBGD3Barj90WbeOfpYapLINY-_aVpTTjBoNK5esXULbpuczLEzeGBUiKLzqPqWOPfAG1_VD3NZ4tdJUu2IeGcCW5Qrm3bSrZQ7gVfcWdOzKcm=w670-h670-s-no?authuser=0" class="img-fluid" alt="" />
	
										<h2 class="m-n"><a href="Priyanka.html">Priyanka Manglani</a></h2>
	
										<p> Back-End Developer</p>
									</div>

									<div class="col-sm-4 text-center">
										<img src="https://lh3.googleusercontent.com/pw/ADCreHeyxqEpGpXNoGKa7mW4Pr5zIISnCni7iWWnyxgc1q5KvTguDK9n7VU_-9u8BFJjZRRNLAa8sPdK6cpa35dW31B1jmDFcEz6TIP8hBsdD6foSmxxO0-oWt1UwbYaP5d2G4u2f1zv3J-Fk8iTaH5cRQkmY8tsCLXK_3FuEvXaogdTsF-89N5MSXhoKaxVKg4RWGTnIwXqxFjaZvNhX9Bdy5ZenmiS5uUdb6IlFnckp3U4Tq9OixAbGk1_MPKgvzZjy3DsMS7yc3Y9NewP9G9vfZEO-ZtAkOHou9LKepTf37LDAl3Bj6GAzeb8OhfWIGg2Rvqwqfg_aOkCy84U6D9AVeOYwA_CoFxrWx_u_ON209E8he-gH38E86ajjUnFztF44_qT4Pg0X_sFseyGlVYXuq6eGJtjStv_HXjwZIOZbK0VoOPX5cKLdq1hsTiRYWi0SkuZSThDYv5OhRYoDSPTPPZb6vg4ZQaB69J2hfePZe0_929SXrcrvB5jQejkHWjqQ8_UBKfaIhxNBRTfn43GwiIZ4sxmWYmviTUJgfrsJSmPwCi9GISbqp-sZTknHR9mNtiFTFniyF51Z64VoQfAM0SYmOePXQCDQX_kzhlYYvS_DwEONxUkojZvpbpjxTeOHV3g9vxnOOXYRELWJNTcDrOLt7JuZ8NlFGNhfv6nk4b3x58nDJ9iGbpEZuyBzDVK5R-7DpTvqCyIrTF2RGzC1LWZ37N-HynNq2VhFIzDPHnMQ4MonbucBxjuwpEomKelmHBZyT55uoHHBAjODUpV2KsZ2VGPzVo2gP41nyfDbXL0E1zw6lT7JZ4Zy3ul1AtIwSiAXxdx77Fe-SqOzxhc_hu5eJQrqBiQwp9d3Qzg_Gm8GSwOIP0nRVHVtT8Jz7WtQqUWRdncg3xaNk5_5C6qzM2dZ-_dGNwsd_w86pCGWt8GNiLhUmwUW3KzuXH04-PboibMBgoH5o1tOKmkjC_nEOBsLt87-BSchYMm9x1DSPz5tw8zlfw1PUW4O2A4LoKq7DeKODkG=w669-h670-s-no?authuser=0" class="img-fluid" alt="" />
	
										<h2 class="m-n"><a href="Sanjana.html">Sanjana Mohan</a></h2>
	
										<p> Back-End Developer</p>
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
			<script src="assets/js/main.js"></script>
	</body>
</html>