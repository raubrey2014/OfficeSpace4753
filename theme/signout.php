<?php
session_start();
	if (isset($_SESSION["logged"])){
		session_destroy();
		header("Location: index.php?signout=true");
		exit;
	}

	header("Location: index.php");
	exit;
?>