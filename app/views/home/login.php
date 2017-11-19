<?php require_once '../app/views/templates/headerPublic.php' ?>

<html>

    <head>

        <title>Login Page</title>

    </head>

    

    <body>

        

     Hello Everyone <br> Please write your user name and the password to access  the website 
<title>Sign-In</title>
 

      </div> 
	  
  <body bgcolor="#A9A9A9">   </P> 
  <head>
<style>

</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="la.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>


</head>


        <form method="post" action="login/index">

            <label for="username">Username:</label><br/>

            <input type="text" name="username" id="username"><br/>

            <label for="password">Password:</label><br/>

            <input type="password" name="password" id="password"><br/>

       
			  <input type="submit" value="Log In!">
			  <input type="submit" name ="attempt" value="attempt!">
			 
			  <a href="/login/register"> sign up!</a>
			
 
        </form>

    </body>

</html>




    <?php require_once '../app/views/templates/footer.php' ?>
