<?php
	session_start();
	
   if(isset($_SESSION['userEmail']) && isset($_SESSION['userName'])){
		session_destroy();
		unset($_SESSION['userEmail']);
		unset($_SESSION['userEmail']);
		header('location:../index.php');
	}else{
		header('location:../index.php');
	}
?>