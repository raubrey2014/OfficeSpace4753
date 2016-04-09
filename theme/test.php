<?php 
session_start();
// $_SESSION["logged"] = true;

if(isset($_GET["flag"])){
	$_SESSION["logged"] = true;
}

print_r($_SESSION);

?>