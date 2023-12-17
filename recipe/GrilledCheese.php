<!DOCTYPE html>
<html lang="en">
<html><head>
	<title>Grilled Cheese Recipe</title>
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
							<a href="projects.php" class="logo">
								<span class="fa fa-code"></span> <span class="title">Projects</span>
							</a>

					</div>
				</header>
      </div>

    <div class="container">
         <img src="FoodImage/GrilledCheeseImage.jpg" alt="" width="400" height="300" style=" border-radius:2%; position:absolute; top:130px; left:200px;">
          <div class ="text">
             <h1>Grilled Cheese Recipe</h1><br>
             <p>
             Grilled cheese is a classic American sandwich that has been around since the 1920s. 
             It is a hot sandwich made with buttered and toasted bread and originally filled
             with American cheese, but is now commonly made with one or more different cheeses.
              </p><br>
          </div>
          
          <div class="recipe-icons">
              <article class="time1">
                <h5>Prep Time</h5>
                <p>5 minutes</p>
              </article>
              <article class="time2">
                <h5>Cook Time</h5>
                <p>10 minutes</p>
              </article>
          </div>

      <div class="secondpart">
        <div class="ingredients">
          <div class="titleText">
            <h5>Servings</h5>
          </div>
                <form action="GrilledCheese.php" method="post">
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
            <?php echo $_POST["Test"]*2 ?> slices of bread <hr width="100%" size="2">
            <?php echo $_POST["Test"]*(1/2) ?> tablespoons butter, unsalted or salted <hr width="100%" size="2">
            <?php echo $_POST["Test"]*(1) ?> slice Cheddar cheese <hr width="100%" size="2">
          <p>
        </div>

        <div class="instructions">
          <h2> Instructions</h2>
          <hr width="5%: " size="2">
          <p>
            <b>Step 1</b>: Spread the butter on one side of each slice of bread.<br>
            <b>Step 2</b>: place a skillet over low to medium/low heat.<br>A griddle should be at 275˚F. Immediately add <br>2 slices of bread with the butter-side-down.<br>
            <b>Step 3</b>: stack cheeses on one of the pieces of bread,<br> cover with the other piece of toast and flip the sandwich over.<br>
            <b>Step 4</b>: Continue sauteeing, flipping once, until both sides<br>are golden brown and cheese is melted.<br>
          </p>
      </div>
    </div>
</body>
