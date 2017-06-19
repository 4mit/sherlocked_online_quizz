<?php

session_start();

$conn =new MySQLi('localhost','root','amit','sherlock');

if(isset($_POST['started']))
{

	echo '<script>console.log("'.$_POST['started'].'");</script>';	
	
	$start_staus  = $_POST['started'];
	
	$queryy = "UPDATE `users` SET `submitted` = 'y' WHERE `users`.`email` = '".$_SESSION['userEmail']."'";
	//$queryy  = "UPDATE `users` SET `submitted` = 'y' WHERE `users`.`email`='".$_SESSION['userEmail']."'";
	if(!$conn->query($queryy)){
			echo '<script>alert("RRRRRRRRRRRRR");</script>';
	
	}else{
	
	$now = time();	
	$ET  = $now + (45*60);
	$endTime = date('H:i:s',$ET);
		
	$startDate = date('H:i:s', $now);
	
	$saveStartTime  = "UPDATE `users` SET `dateTime` = '".$startDate."' WHERE `users`.`email`='".$_SESSION['userEmail']."'";		
				
	$conn->query($saveStartTime);				
				
	$saveEndTime = "UPDATE `users` SET `lockedDateTime` = '".$endTime."' WHERE `users`.`email` ='".$_SESSION['userEmail']."'";
		
	$conn->query($saveEndTime);
	
	include('showQuestion.php');
	}
	
}

if(isset($_POST['locked']))
{
	$start_staus  = $_POST['locked'];	
	$now = time();			
	$endDate = date('H:i:s', $now);		
	$queryy = "UPDATE `users` SET `locked` = 'y', `lockedDateTime` = '".$endDate."' WHERE `users`.`email` = '".$_SESSION['userEmail']."'";		
	$conn->query($queryy);		
	echo 'status locked ';

}

if($_POST['qid'] && $_POST['value'])
{
	
	$qsid  = $_POST['qid'];	
	//echo '<script>console.log("'.$qsid.'");
	$answ  = $_POST['value'];	
	$now = time();	
	$startDate = date('H:i:s', $now);
	$insertAns = "insert into `answer` values('$qsid','".$_SESSION['userEmail']."','$answ','$startDate','$startDate')";
	$conn->query($insertAns);
}

?>