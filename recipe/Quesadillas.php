<!DOCTYPE html>
<html lang="en">
<html><head>
	<title>Quesadillas Recipe</title>
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
         <img src="FoodImage/TomatoSoupImage.jpg" alt="" width="475" height="350" style=" border-radius:2%; position:absolute; top:130px; left:200px;">
          <div class ="text">
             <h1>Quesadillas Recipe</h1><br>
             <p>
                Quesadillas are the perfect quick meal. Enjoy this 
                vegetarian quesadilla recipe in under 10 minutes!
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
            <?php echo $_POST["Test"]*1 ?> whole-grain flour tortilla <hr width="100%" size="2">
            <?php echo $_POST["Test"]*(1/2) ?> cup freshly grated cheddar cheese <hr width="100%" size="2">
            <?php echo $_POST["Test"]*(1/4) ?> cup cooked black beans, rinsed and drained <hr width="100%" size="2">
            <?php echo $_POST["Test"]*1 ?> tablespoon chopped red bell pepper <hr width="100%" size="2">
            <?php echo $_POST["Test"]*1 ?> tablespoon chopped red onion or green onion <hr width="100%" size="2">
            <?php echo $_POST["Test"]*1 ?> tablespoon chopped pickled jalapeño  <hr width="100%" size="2">
            <?php echo $_POST["Test"]*1 ?> teaspoon avocado oil or melted butter <hr width="100%" size="2">
          <p>
        </div>

        <div class="instructions">
          <h2> Instructions</h2>
          <hr width="5%: " size="2">
          <p>
            <b>Step 1</b>: Heat a medium skillet over medium heat.<br> Warm your tortilla for about 30 seconds, flipping halfway. <br>
            <b>Step 2</b>: Sprinkle one-half of the tortilla with about half of the cheese.<br>
            <b>Step 3</b>: Cover the cheese evenly with the remaining <br> fillings: beans, bell pepper, onion and jalapeño<br>
            <b>Step 4</b>: Sprinkle the remaining cheese over the fillings, <br> and fold over the empty side of the tortilla to enclose the fillings.<br>
            <b>Step 5</b>: Quickly brush the top of the quesadilla with a <br> light coating of oil, then carefully flip it with a spatula.<br>
            <b>Step 6</b>: Let the quesadilla cook until golden and crispy on the bottom<br>
            <b>Step 7</b>: Remove the skillet from the heat and transfer the quesadilla to a cutting board<br>
            <b>Step 8</b>: Serve promptly, with any sauces or garnishes that you would like.<br>
            
          </p>
      </div>
    </div>
</body>
