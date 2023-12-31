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
    .container{
      line-height:20px;
    }
    .text{
      padding-left: 550px;
      padding-top: 0px;
    }
    h1{
      margin-bottom: 0;
    }
    article{
      display: inline-block;
    }
    h2{
      margin-top:50px;
      margin-bottom: 0;
    }
    h5{
      margin-top: 10px;
      margin-bottom: 0px;
    }
    hr{
      margin-bottom:10px;
      margin-top:10px;
    }
    p{
      margin-top: 0;
      margin-bottom: 0; 
      line-height: 30px;
    }
    .time1{
      margin-left: 550px;
    }
    .time2{
      margin-left: 50px;
    }
    .form-btn{
      padding: 10px;
      text-align: center;
      display: inline-block;
      font-size: 16px;
    }
    .form-group{
      margin-top: 0px;
      margin-bottom: 0px;
    }
    .titleText{
      margin-top:30px;
    }
    .ingredients{
      display: inline-block;
    }
    .instructions{
      display: inline-block;
      padding-left: 190px;
      padding-bottom: 100px;
    }
    </style>
</head>
<body>
      <div id="wrapper">
        <header id="header">
					<div class="inner">

						<!-- Logo -->
							<a href="Recipes.php" class="logo">
								<span class="fa fa-code"></span> <span class="title">Recipes</span>
							</a>

					</div>
				</header>
      </div>

    <div class="container">
         <img src="FoodImage/TomatoSoupImage.jpg" alt="" width="475" height="350" style=" border-radius:2%; position:absolute; top:130px; left:200px;">
          <div class ="text">
             <h1>Tomato Soup Recipe</h1><br>
             <p>
                Delve into a bowl of comforting warmth with this exquisite tomato soup recipe. 
                Bursting with the rich essence of sun-ripened tomatoes and aromatic herbs, this classic 
                dish is a celebration of simplicity and flavor. Whether you're seeking a quick, nourishing
                meal or a soul-soothing remedy for chilly evenings, this homemade tomato soup will 
                undoubtedly become a cherished staple in your culinary repertoire.
              </p><br>
          </div>
          
          <div class="recipe-icons">
              <article class="time1">
                <h5>Prep Time</h5>
                <p>30 minutes</p>
              </article>
              <article class="time2">
                <h5>Cook Time</h5>
                <p>15 minutes</p>
              </article>
          </div>

      <div class="secondpart">
        <div class="ingredients">
          <div class="titleText">
            <h5>Servings</h5>
          </div>
                <form action="TomatoSoup.php" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" name="Test" placeholder="Servings:">
                  </div>
                  <div class="form-btn">
                   <input type="submit" class="btn btn-primary" value="Calculate" name="submit">
                  </div>
                </form>
          <h2>Ingredients</h2>
          <hr width="5%: " size="2">
          <p> 
            <?php echo $_POST["Test"]*4 ?> tablespoons unsalted butter <hr width="100%" size="2">
            <?php echo $_POST["Test"]*(1/2) ?> large onion, cut into large wedges <hr width="100%" size="2">
            <?php echo $_POST["Test"]*1 ?> can tomatoes <hr width="100%" size="2">
            <?php echo $_POST["Test"]*(3/2) ?> cups water, vegetable stock, or chicken stock <hr width="100%" size="2">
            <?php echo $_POST["Test"]*(1/2) ?> teaspoon fine sea salt <hr width="100%" size="2">
          <p>
        </div>

        <div class="instructions">
          <h2> Instructions</h2>
          <hr width="5%: " size="2">
          <p>
            <b>Step 1</b>: Melt the butter over medium heat in a large saucepan<br>
            <b>Step 2</b>: Add onion wedges, water, tomatoes with juice, and <br>salt to saucepan<br>
            <b>Step 3</b>: Bring to a simmer. Cook, uncovered, for about 40 minutes.<br> Stir occasionally and add additional salt as needed.<br>
            <b>Step 4</b>: Blend the soup, then season to taste<br>
          </p>
      </div>
    </div>
</body>
