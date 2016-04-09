<?php
session_start();

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
            <li class="active"><a href="about.php">ABOUT</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
            <?php
            if(isset($_SESSION["logged"])){
              ?>
                          <li><a href="member.php">DASHBOARD</a></li>

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
				<h1 id='special_h1'><strong>About Us</strong></h1>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->


	<div class="container w">
		<div class="row centered">
			<br><br>
			<div class="col-lg-5">
				<img class="img-circle" style="margin-top:60px;" src="assets/img/building2.jpg" width="400" height="400" alt="">
			</div><!-- col-lg-3 -->

			<div class="col-lg-7">
				<h2><strong>The Problem We Solve</strong></h2>
				<h4 class="custom-size"><i class="fa fa-circle"></i>ffice Space is a client-driven company that strives to fill in the gaps in a unique market of buyers and sellers. One common denominator in almost all companies is a presence of wasted space, whether it be a temporary situation or a result of misallocation. As entrepreneurs and companies come in all shapes and sizes in this digital age, there is more than ever a demand for sub-spaces for rent or lease. We simply provide the connection between those looking for new spaces to grow, and those with the resources to help.</h4>
				<h2><strong>We Are a Community of Innovation</strong></h2>
				<h4 class="custom-size"> Our web and mobile platforms make it easy to find offices by location, size, and price, sidestepping the intimidating complexity of other, more traditional methods of search. Finally, because of our lean team and automated systems, we are able to provide our services for a competitive fee. All this culminates in a frictionless product that maximizes each client’s experience and resources to create new value in an age-old market.</h4>

			</div><!-- col-lg-3 -->
			<br>
			<br>

			<div class="col-lg-7" style="padding-top:100px">
				<h2><strong>How It Works</strong></h2>
				<h4 class="custom-size" >Our simple business proposal provides an outlet for any property owner to list unused building space for rent. We then can connect businesses of any size with appropriate office space that tailors to their needs. Listers pay a one time fee per property for our matching services, while renters and leasers can sign up for free. To learn more about pricing or find available properties near you, click the sign up link below. </h4>
                <a href="signup.php"><button type="submit" class="btn btn-primary">Sign Up Now</button></a>

			</div>
			<div class="col-lg-5">
				<img class="img-circle" style="margin-top:60px;" src="assets/img/building3.jpg" width="400" height="400" alt="">

			</div>

		</div><!-- row -->
		<br>
		<br>
	</div><!-- container -->





	
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
