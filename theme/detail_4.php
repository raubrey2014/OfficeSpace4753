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
                          <li class=""><a href="member.php">DASHBOARD</a></li>

                          <li><a href="signout.php">SIGN OUT</a></li>
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
				<h1 id='special_h1'><strong>Detailed Specs</strong></h1>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->


 <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">The Offices at the LA Care Building
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="assets/img/project_4.jpg" alt="">
            </div>

            <div class="col-md-4">
                <h3>Description</h3>
                <p> Brand new construction. 100 MBPS internet, coffee service, phone answering, conference room usage, concierge, and administrative support available. Rent includes utilities, cleaning service, 24/7 access, use of common areas such as business lounge, reception, kitchen, copy area, and more.</p>
                
                <h3>Rental Information</h3>

                    <p>&emsp;&emsp;<b>Address</b>&emsp;&emsp;1055 West 7th Street</p>
                    <p>&emsp;&emsp;<b>Available Space</b>&emsp;&emsp;&emsp;100,115 SF</p>
                    <p>&emsp;&emsp;<b>Rental Rate</b>&emsp;&emsp;&emsp;&emsp;&emsp;$1.55/SF Per Month</p>
                
                <h3>Contact Information</h3>
                <p><b>&emsp;&emsp;Ryan Stevens</b>&emsp;&emsp;804 - 809 - 2093 </p>
            </div>


        </div>
        <!-- /.row -->
<br>
<br>
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
