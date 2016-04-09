<?php 
session_start();

if(isset($_SESSION["logged"]) && ($_SESSION["logged"] == true)){
  $logged = $_SESSION["logged"];
}
else {
  header("Location: index.php?signedin=false");
  exit;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Office Space</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

	<script src="assets/js/Chart.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><i class="fa fa-circle"></i>ffice Space</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
            <?php
            if(isset($_SESSION["logged"])){
              ?>
                          <li class="active"><a href="signout.php">SIGN OUT</a></li>
            <?php
          }
            else {
              ?>
              <li><a href="signin.php">SIGN IN</a></li>
            <?php
            }
            ?>

           <!--  <li><a href="services.html">SERVICES</a></li>
            <li><a href="works.html">WORKS</a></li> -->
            <!-- <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1 id='special_h1'><strong>MEMBER PAGE</strong></h1>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->


<!-- PORTFOLIO SECTION -->
  <div id="dg">
    <div class="container">
      <div class="row centered">
        <h2><b>Hear It First Hand</b></h2>
        <br>
        <div class="col-lg-4">
        <img class="img-circle" src="assets/img/modern_office.jpg" width="300" height="300" alt="">
        <p><b>"Office Space provided a scalable work space solution for my growing IT business."</b><br> -CEO John Doe of IT Inc., New York, NY</p>
        </div>

        <div class="col-lg-4">
        <img class="img-circle" src="assets/img/modern_office2.jpg" width="300" height="300" alt="">
        <p><b>"Office Space's intuitive, user-oriented design, and end-to-end functionality makes them a leader in painless work space services."</b><br> -HR Rep Sally Baker Company Inc., Cincinatti, OH</p>
        </div>

        <div class="col-lg-4">
        <img class="img-circle" src="assets/img/exec_office.jpg" width="300" height="300" alt="">
        <p><b>"Only Office Space was able to provide the personalized experience I needed when I started my own business."</b> <br>-Independent Consultant John Smith, Richmond, VA</p>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- DG -->





	
		<!-- FOOTER -->
	<div id="f">
		<div class="container">
			<div class="row centered">
				<div class="contact-cls">
					<h1>CONTACT US</h1>
                    <div>
                        <span><i class="fa fa-home"></i>&nbsp; Address: Charlottesville, VA 29903</span>
                        <span><i class="fa fa-phone"></i>&nbsp;Phone: +1 (540) 250 - 3750</span>
                        <span><i class="fa fa-envelope-o"></i>&nbsp;E-Mail: officeSpace@gmail.com</span>
                        <span><i class="fa fa-globe"></i>&nbsp;Web: www.officeSpace.com</span>

                    </div>
                  
                </div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Footer -->

	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
