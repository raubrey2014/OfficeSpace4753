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

  <script type="text/javascript">


      // This identifies your website in the createToken call below
      Stripe.setPublishableKey('pk_test_TKhvjZGgA0yCt4pt5JmYbSgY');
      // ...

      var stripeResponseHandler = function(status, response) {
          var $form = $('#payment-form');
          if (response.error) {
            // Show the errors on the form
            $form.find('.payment-errors').text(response.error.message);
            $('#submit_button').prop('disabled', false);
            alert(response.error.message);
          } else {
            // token contains id, last4, and card type
            var token = response.id;
            // Insert the token into the form so it gets submitted to the server
            $form.append($('<input type="hidden" name="stripeToken" />').val(token));
            // and re-submit

            $form.get(0).submit();
            // alert("Your payment has been processed. Enjoy our extensive features.");
          }
        };

        //Handles hitting submit
        jQuery(function($) {
          $('#payment-form').submit(function(e) {
            var form = $(this);
            // Disable the submit button to prevent repeated clicks
            $('#submit_button').prop('disabled', true);
            Stripe.card.createToken(form, stripeResponseHandler);
            // Prevent the form from submitting with the default action
            return false;
          });
        });
  </script>


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
            <li class='active'><a href="#">SIGN UP</a></li>

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
				<h1 id='special_h1'><strong>Buy Into Our Dynamic Business Solution</strong></h1>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->
<?php
require_once('../stripe-php-3.10.0/init.php');

$db = new mysqli('localhost', 'root', '', 'OfficeSpace2');
if($db->connect_error){
  die("Could not connect to db " . $db->connect_error);
}


if(isset($_POST["stripeToken"])){
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  // $password = $_POST["passwordq"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $zip = $_POST["zip"];


  $mail = createMailer();
  $mail->addAddress($email);
  $mail->Subject = "Thanks for Signing up with OfficeSpace!";
  $mail->Body = "This is a confirmation of your payment to sign up for OfficeSpace.";
  $mail->send();
  

  #check if email already is in use
  // $result = $db->query("SELECT * from Member where email='$email'");
  // $rowCount = $result->num_rows;
  // if($rowCount != 0){
  //   // echo "An account with this email already exists!";
  //   // alert('An account exists using that email address.'); 
  // }
  //else{
    #insert maker into <makers> table
    $query = "INSERT INTO Member (first_name, last_name, email, address, city, state, zip) values ('$first_name', '$last_name', '$email', '$address', '$city', '$state', '$zip')";
    $res = $db->query($query) or die ("invalid: ". $db->error);

    \Stripe\Stripe::setApiKey("sk_test_vHRU4PTYGgKZ7NlWsdUU3CAI");

        // Get the credit card details submitted by the form
    $token = $_POST['stripeToken'];

    // Create the charge on Stripe's servers - this will charge the user's card
    try {
      $charge = \Stripe\Charge::create(array(
        "amount" => 1000, // amount in cents, again
        "currency" => "usd",
        "source" => $token,
        "description" => "Example charge"
        ));
    } catch(\Stripe\Error\Card $e) {
      // The card has been declined
    }
    // header("Location: index.php?success=true");
    // exit;?>
    <script type="text/javascript">
      window.location.href = 'index.php?success=true';
    </script>
<?php
 }
?>
<div id="custom-wrapper2">
	<div class="container w">
    <!--REGISTRATION FORM HTML-->
<div id="registration-form">
  <div class='fieldset'>
    <legend>Register Now</legend>
    <form action="signup.php" method="post" onsubmit="return validateForm()" name="myForm" id="payment-form">
          <span class="payment-errors"></span>

          <h2 style="text-align:center">Personal Info</h2>

      <div class='row col-md-12'>
        <!-- <label for='first_name'>First Name</label> -->
        <input type="text" placeholder="First Name" name='first_name' id='first_name' required>
      </div>
      <div class='row col-md-12'>
        <!-- <label for='last_name'>Last Name</label> -->
        <input type="text" placeholder="Last Name" name='last_name' id='last_name' required>
      </div>  
      <div class='row col-md-12'>
        <!-- <label for="email">E-mail</label> -->
        <input type="email" placeholder="E-mail"  name='email' required>
      </div>
      <div class='row col-md-12'>
        <!-- <label for='address'>Address</label> -->
        <input type="text" placeholder="Address" name='address' id='address' required>
      </div>
      <div class='row col-md-12'>
        <!-- <label for='city'>City</label> -->
        <input type="text" placeholder="City" name='city' id='city' required>
      </div>
      <div class='row col-md-12'>
        <!-- <input type="text" maxlength="2" placeholder="State" onchange="validateState(this);"/> -->

        <label for='state' id="spec">State</label>

        <select name="state">

              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District Of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
      </div>
      
      <div class='row col-md-12'>
        <input type="text" placeholder="Zip" name='zip' id='zip' required>
      </div>
      
      <h2 style="text-align:center">Banking Info</h2>
      <div class='row col-md-12'>
        <label for='cc_number' id="spec">Credit Card</label>

        <input type="text" size="20" placeholder="XXXX-XXXX-XXXX-XXXX" data-stripe="number" required/>


       </div>
      <div class='row col-md-4'>
        <label for='CVV' id="spec">CVV</label>
        <br>
        <!-- <label for='zip'>Zip Code</label> -->
        <input type="text2" placeholder="XXX" name='CVV' id='CVV' required data-stripe="cvc">
      </div>
      <div class='row col-md-4'>
        <label for='expiration' id="spec">Expiration Date</label>
        <br>
        <input type="text2" size="2" data-stripe="exp-month" placeholder="XX" name='exp-month' id='exp-month' required/>
        <input type="text2" size="5" data-stripe="exp-year" placeholder="XXXX" name='exp-year' id='exp-year' required/>
      </div>
      <div class='row col-md-4'>
        <h4>Joining the <i class="fa fa-circle"></i>ffice Space family for only $10.00</h4>
      </div>
      
      <input type="submit" name="submit_button" value="Register" id="submit_button">
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
    <script type="text/javascript">
    function validateForm() {
      var arr = new Array();
      var re = /^[A-Za-z\-]+$/;
      var address_re = /^[A-Za-z0-9 '.]+$/;
      var zip_re = /^[0-9\-]+$/;

      var first_name = document.forms["myForm"]["first_name"].value;
      if(!re.test(first_name))
         arr.push("Please use only A-Za-z characters on field: First Name.")

      var last_name = document.forms["myForm"]["last_name"].value;
      if(!re.test(last_name))
         arr.push("Please use only A-Za-z characters on field: Last Name.")
      
      var email = document.forms["myForm"]["email"].value;
      if((email.indexOf(".") == -1))
         arr.push("Please include an email address of the format: email@example.com.")

       var address = document.forms["myForm"]["address"].value;
        if((!address_re.test(address)))
         arr.push("Please do not include any special characters in field: Address.")

       var city = document.forms["myForm"]["city"].value;
       if((!re.test(city)))
        arr.push("Please only use A-Za-z characters on field: City.")

      var zip = document.forms["myForm"]["zip"].value;
      if(!zip_re.test(zip))
        arr.push("Please only use 0-9 digits on field: Zip.")


       if (arr.length > 0){
        var str = arr.join("\n");        
        alert(str);
        return false;
      }
      
    }

    </script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
