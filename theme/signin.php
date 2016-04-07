<?php
session_start();
$_SESSION["logged"] = "HERE";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'mailsender.php' ?> 
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
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>




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
            <li class='active'><a href="#">SIGN IN</a></li>

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
				<h1 id='special_h1'><strong>Welcome Back!</strong></h1>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->
<?php


$db = new mysqli('localhost', 'root', '', 'OfficeSpace2');
if($db->connect_error){
  die("Could not connect to db " . $db->connect_error);
}


if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  echo "submitted";
    $result = $db->query("SELECT * from Member where email='$email' AND password='$password'");
    $rowCount = $result->num_rows;
    if($rowCount == 0){
    #header('Location: login.php');
      echo "Incorrect Login";
    }
    else{
      $row = $result->fetch_array();
      $_SESSION["logged"] = true;
      //$_SESSION["logged"] = 1;
      header('Location: member.php');
      exit;
    }

   


 }
?>
<div id="custom-wrapper2">
	<div class="container w">
    <!--REGISTRATION FORM HTML-->
<div id="registration-form">
  <div class='fieldset'>
    <legend>Sign In</legend>
        <?php
      if(isset($_GET["error"])){
        if($_GET["error"] == "true"){
          ?>
          <div class="alert alert-danger  fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong> Incorrect username or password. Please try again.
        </div>
          <?php
        }
      }
    ?>

    <form action="process.php" method="post" name="myForm" id="payment-form">
          <span class="payment-errors"></span>


      <div class=' col-md-12'>
        <!-- <label for="email">E-mail</label> -->
        <input type="email" placeholder="E-mail"  name='email' required>
      </div>
      <div class=' col-md-12'>
        <!-- <label for="email">E-mail</label> -->
        <input type="password" placeholder="Password"  name='password' required>
      </div>
      <div class=' col-md-12'> 
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
  </div>
</div>
		
	</div><!-- container -->
</div>




	
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
