<?php
echo "anything";

$db = new mysqli('localhost', 'root', '', 'OfficeSpace2');
if($db->connect_error){
  die("Could not connect to db " . $db->connect_error);
}


  $email = $_POST["email"];
  $password = $_POST["password"];
  echo "submitted";
    $result = $db->query("SELECT * from Member where email='$email' AND password='$password'");
    $rowCount = $result->num_rows;
    if($rowCount == 0){
    #header('Location: login.php');
      echo "Incorrect Login";
      header('Location: signin.php');
    }
    else{
      $row = $result->fetch_array();


      //$_SESSION["logged"] = 1;
      header('Location: index.php');
    }

   


 
?>
