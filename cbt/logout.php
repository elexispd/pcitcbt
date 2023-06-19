<?php 

session_start();
session_unset();
// session_destroy();
if(session_destroy()){
	if (isset( $_GET["practice"])) {
		header("location:signin.php");
	} else {
		header("location:login.php");
	}
}

