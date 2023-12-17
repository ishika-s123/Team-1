<!DOCTYPE html>
<html lang="en">
<html><head>
	<title>Tomato Soup Recipe</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">
	<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
  <style>
      /* CSS variables */
:root {
	--card-bg-color: #fff;
	--card-text-color: #070705;
	--dish-type-color: #BB5274;
	--card-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.02), 0 6.7px 5.3px rgba(0, 0, 0, 0.028), 0 12.5px 10px rgba(0, 0, 0, 0.035), 0 22.3px 17.9px rgba(0, 0, 0, 0.042), 0 41.8px 33.4px rgba(0, 0, 0, 0.05), 0 100px 80px rgba(0, 0, 0, 0.07);
	--global-radius: 16px;
}

/* Presentation styles */
body {
	background-color: #F2E4E9;
	display: flex;
	height: 100vh;
	align-items: center;
	justify-content: center;
}

/* Recipe card */
.recipe-card {
	background-color: var(--card-bg-color);
	box-shadow: var(--card-shadow);
	border-radius: var(--global-radius);
	color: var(--card-text-color);
	font-family: 'Poppins', sans-serif;
	line-height: 1.5;
	width: 22rem;
  margin-left:30px;
}

.recipe-card figure {
	width: 100%;
	margin: 0;
	height: 14rem;
	overflow: hidden;
	border-radius: var(--global-radius) var(--global-radius) 0 0;
	margin-bottom: 2rem;
}

.recipe-card figure img {
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.recipe-card h1 {
	margin: 0 1.5rem 2rem 1.5rem;
	font-size: 20px;
	font-weight: 700;
	letter-spacing: -1px;
}

.card-meta {
	display: flex;
	justify-content: space-between;
	margin: 0 1.5rem .5rem;
	font-size: 13px;
}

.dish-type {
	font-weight: 600;
	letter-spacing: -0.25px;
	color: #fff;
	margin: 0;
	background-color: var(--dish-type-color);
	padding: .25rem 1rem;
	border-radius: 100px;
}

.dish-stats {
	list-style: none;
	padding: 0;
	margin: 0;
	display: flex;
	align-items: center;
}

.dish-stats li {
	opacity: .75;
	display: flex;
	align-items: center;
	margin-left: 1rem;
}

.dish-stats li svg {
	margin-right: .5rem;
}

.dish-stats li svg path {
	stroke: var(--card-text-color);
	stroke-opacity: .25;
}
  </style>

</head>

<body>
    <div id="wrapper">
      <header id="header">
				<div class="inner">

						<!-- Logo -->
						<a href="../projects.php" class="logo">
							<span class="fa fa-code"></span> <span class="title">Projects</span>
						</a>

				</div>
			</header>
    </div>

  <div class="recipe-card">
	  <figure>
		  <img src="FoodImage/TomatoSoupImage.jpg" alt="Cover image" />
	  </figure>
	  <h1><a href="TomatoSoup.php">Tomato Soup</a></h1>
  </div>  

  <div class="recipe-card">
	  <figure>
		  <img src="FoodImage/GrilledCheeseImage.jpg" alt="Cover image" />
	  </figure>
	  <h1><a href="GrilledCheeseImage.php">Grilled Cheese</a></h1>
  </div> <!-- end recipe-card -->

  <div class="recipe-card">
	  <figure>
		  <img src="FoodImage/QuesadillasImage.jpg" alt="Cover image" />
	  </figure>
	  <h1><a href="Quesadillas.php">Quesadillas</a></h1>
  </div>
</body>
</html>
