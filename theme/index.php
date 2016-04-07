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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


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
          <a class="navbar-brand" href="#"><i class="fa fa-circle"></i>ffice Space</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
            <li><a href="signin.php">SIGN IN</a></li>

            <!-- <li><a href="works.html">WORKS</a></li> -->
            <!-- <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <?php
    	if(isset($_GET["success"])){
    		if($_GET["success"] == "true"){
    			?>
    			<div class="alert alert-success  fade in">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Success!</strong> Thank you for registering with <i class="fa fa-circle"></i>ffice Space!
				</div>
    			<?php
    		}
    	}
    ?>
    <?php
    	if(isset($_GET["signedin"])){
    		if($_GET["signedin"] == "false"){
    			?>
    			<div class="alert alert-warning  fade in">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>Warning!</strong> You are not logged in!
				</div>
    			<?php
    		}
    	}
    ?>

    <?php
    	if(isset($_GET["signout"])){
    		if($_GET["signout"] == "true"){
    			?>
    			<div class="alert alert-success  fade in">
				  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  <strong>You have successfully logged out.</strong>
				</div>
    			<?php
    		}
    	}
    ?>

	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1><i class="fa fa-circle"></i>ffice Space</h1>
				<h2>Connecting Businesses with Office Needs</h2>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- headerwrap -->


	<div class="container w">
		<div class="row centered">
			<br><br>
			<h1>Providing Renters Access to Local Work Space</h1>
			<br><br>
			<div class="col-lg-4">
				<i class="fa fa-binoculars"></i>
				<h4><strong>Search For Local Space</strong></h4>
				<p>Find a customized office solution tailored for your specific needs.</p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<i class="fa fa-laptop"></i>
				<h4><strong>List Your Available Space</strong></h4>
				<p>Quickly maximize use of previously underutilized work space by allowing our dedicated staff to connect you to available renters.</p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<i class="fa fa-trophy"></i>
				<h4><strong>Expedite Your Business Growth</strong></h4>
				<p>Both suppliers and renters benefit from our innovative market solution.</p>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
		<br>
		<br>
	</div><!-- container -->


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


	<!-- FEATURE SECTION -->
	<div id="custom-wrapper">
		<div class="container wb" id="test1">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>TACKLING MODERN BUSINESS NEEDS</h1>
					<br>
					<div class='left'>
						<div style="text-align: center" class="col-lg-2"><i class="fa fa-bolt fa-5x"></i></div> 
						<div class="col-lg-10">
							<h3>Bleeding-edge Technology</h3>
							<h4>Our web and mobile platforms provide dynamic solutions for renters and suppliers.</h4>
							<!-- <h5>Real-time data analytics on market demand.</h5> -->
						</div>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class='left'>
						<div style="text-align: center" class="col-lg-2 center"><i class="fa fa-database fa-5x"></i></div> 
						<div class="col-lg-10">
							<h3>Real-time Analytics</h3>
							<h4>Our in-house team of analysts is dedicated to optimizing your search experience.</h4>
						</div>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class='left'>
						<div style="text-align: center; " class="col-lg-2"><i class="fa fa-line-chart fa-5x"></i></div> 
						<div class="col-lg-10">
							<h3>Market Driven Price Models</h3>
							<h4>Competitive markets maintain minimal prices and maximum potential.</h4>
						</div>
					</div>
					<br>
					<!-- <div class='left'><img class="img-circle" src="assets/img/exec_office.jpg" width="200" height="200" alt=""></div>
					<br>
					<div class='left'><img class="img-circle" src="assets/img/exec_office.jpg" width="200" height="200" alt=""></div>
					<br> -->
					<!-- <i class="fa fa-bolt fa-4x"></i> -->
				<p><br/><br/></p>
				</div>
				<div class="col-lg-2"></div>
				<div class="col-lg-10 col-lg-offset-1">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<!-- <img class="img-responsive" src="assets/img/munter.png" alt=""> -->
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div>

<!-- 	<div id="lg">
		<div class="">
			<div>
			</div>
		</div>
	</div> -->
	
	
	<div id="r">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>LEARN MORE</h2>
					<h4>We are a client-driven company that strives to fill in the gaps in a unique market of buyers and sellers.</h4>
                    <a href="about.html"><button type="submit" class="btn btn-primary">About Us</button></a>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div>
	
	<!-- Contact Section -->
    
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


	<!-- MODAL FOR CONTACT -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
