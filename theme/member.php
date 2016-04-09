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
				<h1 id='special_h1'><strong>Postings</strong></h1>
                <!-- <a class="btn btn-primary" href="#">Create New Posting    <i class="fa fa-pencil-square-o"></i></a> -->

				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->

<!-- Page Content -->
    <div class="container">


        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">Page Heading
                    <small>Secondary Text</small>
                </h1>
            </div>
            <div class="col-lg-2">
              <a class=" page-header btn btn-primary" href="#">Create New Posting  &nbsp; <i class="fa fa-pencil-square-o"></i></a>
            </div>

        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assets/img/project_1.jpg" alt="" style="width:700px;height:300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>2901 North Ashton Blvd.</h3>
                <h4>Lehi, UT 84043 · 58,800 SF · Office For Lease</h4>
                <p>5 Story Class A Office Building, completion April 1, 2016 with 54,800 square feet available on 2nd and 3rd Floors. Modern, progressive architecture. Excellent I-15 and SR 92 access. Located adjacent to the Thanksgiving Park Office Campus.</p>
                <a class="btn btn-primary" href="item1.php">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assets/img/project_2.jpg" alt="" style="width:700px;height:300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>1341 W Mockingbird Lane</h3>
                <h4>Dallas, TX 75247 · 229,197 SF · Office For Lease</h4>
                <p>On-site Conference Facility. On-site Deli. Views of Central Business District</p>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assets/img/project_3.jpg" alt="" style="width:700px;height:300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>6750 West Loop South</h3>
                <h4>Bellaire, TX 77401 · 15,115 SF · Office For Lease</h4>
                <p>The Offices at Pin Oak Park is a five-building office campus in a beautiful park-like setting amongst 100-year-old oak trees. 
                Some of the many amenities include 24-hour security, after-hours card key access, free visitor parking in elevator-equipped garages, 
                on-site banks and delicatessens, US Mail and overnight shipping drop-boxes, maid and porter service, fully staffed on-site engineering and management teams. Move-in ready suites are available.</p>
                <a class="btn btn-primary" href="">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>


        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assets/img/project_4.jpg" alt="" style="width:700px;height:300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>1055 West 7th Street</h3>
                <h4>Los Angeles, CA 90017 · 8,420 SF · Office For Lease</h4>
                <p>Fully Furnished Office Suites available on the Penthouse Floor of the LA Care Building with breathtaking unobstructed views of Downtown LA, West LA, Stadium Hill and out to the ocean. Brand new construction. 100 MBPS internet, coffee service, phone answering, conference room usage, concierge, and administrative support available. 
                Rent includes utilities, cleaning service, 24/7 access, use of common areas such as business lounge, reception, kitchen, copy area, and more.</p>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assets/img/project_5.jpg" alt="" style="width:700px;height:300px;">
                </a>
            </div>
            <div class="col-md-5">
                <h3>75 West Towne Ridge Parkway</h3>
                <h4>Sandy, UT 84070 · 125,000 SF · Office For Lease</h4>
                <p>Class A Office Park. 25,000 rentable square foot floor plates. Generous improvement allowances. Excellent parking.Excellent location in Sandy.</p>
                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->



	
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
