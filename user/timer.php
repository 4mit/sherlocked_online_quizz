<?php
$conn =new MySQLi('localhost','root','amit','sherlock');
session_start();

if(isset($_POST['timePlease'])){
	
	$now = time();	
	$startDate = date('H:i:s', $now);
	
	
	$timeValue;
	$compareTime  = "SELECT `lockedDateTime` FROM `users` WHERE `email` ='".$_SESSION['userEmail']."'";
	$tt = $conn->query($compareTime);	
	
	while($r = $tt->fetch_assoc()){
		$timeValue = $r['lockedDateTime'];	
	}
	
	if($timeValue===$startDate){	
		echo 'TIMEOVER';	
		
	}
	
}
?>