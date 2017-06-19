<?php
       
 	$conn = new mysqli("localhost","root","amit","sherlock");
	echo '<script>console.log("functio.phhp included")</script>';	           
	
	$checkIfStarted = "SELECT `submitted` FROM `users` WHERE `submitted`='y' AND `email`='".$_SESSION['userEmail']."'";
	if($conn->query($checkIfStarted)->num_rows>0)
	{		
		
		   
		$checkIfLocked = "SELECT  `locked` FROM `users` WHERE `locked` = 'y'  AND `email` ='".$_SESSION['userEmail']."'";
		if($conn->query($checkIfLocked)->num_rows>0)
		{
			echo '<h2>:( You Have Locked Your Choices You Cant Continue ):</h2><hr/>';
			echo '<a href="logout.php" class="btn btn-danger">Exit Now </a>';
			
		}else{
			echo '<h2>Lock Your Answers After Submission</h2><hr/>';
			include('showQuestion.php');
			echo '<button type="button" id="lock_answer" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Be Carefull There is no chance after locking answeers You can submit it once ">Lock My Answers</button>';			
		}
	}
	else{
		echo '<button type="button" id="start_event" class="btn btn-info">Start Now </button>';	
	}                  
?>