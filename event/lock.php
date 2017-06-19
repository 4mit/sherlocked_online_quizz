<?php
$conn = new mysqli("localhost","root","amit","sherlok");
session_start();

if($_POST['isSubmitted'] && !$_POST['isSubmitted'] == '')
{
	echo 'locked .....';
	
	 $user=   $_SESSION['username'];
	 $conn->query("UPDATE `users` SET `submitted`='y' WHERE email ='$user'");
	 unset($user);
	/*$timezone = new DateTimeZone("Asia/Kolkata" );
	$date = new DateTime();
	$date->setTimezone($timezone );
	$d = $date->format( 'H:i:s' );
	$userTime = explode(":",$d); 	
	echo 'Hours is :' .  $userTime[2];
	echo 'SUBMITTED :' .  $_GET['isSubmitted'];*/
}else{

	echo '<script>console.log("Failed to get request ...")</script>';
}

?>

