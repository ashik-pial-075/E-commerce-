<?php

    include("session.php");











?>

<!DOCTYPE html>
<html>


<head>


	<title>welcome</title>


</head>


<body>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>E-commerce template</title>

    <!-- Bootstrap -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



<div id="header">

<div class="col-md-12">
<nav>
  
  <div class="col-md-6">
  <div class="navbar-header"></div>
    <a class="navbar-brand" href="#"><i>MySite branding</i></a>
  </div>
   <div class="col-md-4 col-md-offset-2">
   
    
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact</a></li>
     <li><a href="#">Blog</a></li>

       <li><a href="#">Sign Up</a></li>
    </ul>
      
    
  </div>
</div>
  
</nav>
</div>



  

  <div class="container">
  <br>
  <center> <p id="user">Welcome Home 
<?php echo $login_session;  ?>


</p></center>

 
  




  <div class="col-md-12 col-sm-12 col-xs-12  ">
    

    <br>
    <br>
    <br>
    

     <h2>One Account Shopping , save money </h2><br>
    <a id="titleb" href="#" class="btn btn-info btn-xs" role="button"> <h3>Know More.. </h3></a>
    <br>
    <br>
    <br>
    <center>
<div id="login">


<h3>Login From Another Account</h3>
<br>
<br>
<table>
<form action="" method="post">
  <tr>
    <td><label for="username"><h4>Username &nbsp;</h4></label></td>

    <td><input type="text" name="username" id="username" placeholder="Username or E-mail"> </td>

  </tr>

   <tr>
    <td><label for="password"><h4>Password &nbsp;</h4></label></td>

    <td><input type="password" name="password" id="password" placeholder="enter password"> </td>

  </tr>
  <tr>
    <td></td>
    <td><button type="submit" id ="button" name="submit" > LogIn</button> </td>
  </tr>

  </form>


</table>  

 <br>
  <p> Forgotten Password ?<a href="#"> send a request to your e-mail</a> or <br>
   <a href="#"> use secuirity question </a></p>




  

</div>

  </div>
    

  </div>




</center>


<br><br><br><br><br><br>


<div id="footer">

<div class="container">
<br><br>
<div class="row">

  <div class="col-md-2 col-md-offset-2"><a href="#">Portfolio </a><br>
  <a href="#">Terms & Conditions</a>
  <br><a href="#">Privacy & policy</a>

  </div>

  <div class="col-md-2"><a href="#">Help& Support</a><br>
  <a href="#">Contact Us</a><br><a href="#">Blog</a>
  </div>

   <div class="col-md-2"><a href="#">About Us</a><br> <a href="#">Subscribe Newsletter</a><br>
   <a href="#">Google Map</a>

   <br><a href="logout.php">Log out</a>

   </div>



<div class="col-md-2"> <p id="find"><i>find us at </i></p> 
 <div id="icon">

 <a href="#"><i class="fa fa-facebook-official"></i></a>&nbsp;&nbsp;
 <a href="#"> <i class="fa fa-linkedin"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-tumblr-square"></i></a>&nbsp;&nbsp;
  <a href="#"><i class="fa fa-git"></i></a>


 </div>
</div>


<div class="col-md-2">
<br><br>
&copy <a  href="#">Ashik Meher Mobin</a>
</div>




</div>


</div>
<br><br>

</div>










<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>





  </body>
</html>









</body>


</html>