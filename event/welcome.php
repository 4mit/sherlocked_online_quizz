<?php
	$conn = new mysqli("localhost","root","amit","sherlok");

	session_start();
	$name  = $_SESSION['username'];
	if(!isset($_SESSION['username'])){
		header('location:../home.php');
	}
	/*if($_GET['isSubmitted'] && !$_GET['isSubmitted'] == '')
	{
		
		//Connect@
		$submit = "";
		$timezone = new DateTimeZone("Asia/Kolkata" );
		$date = new DateTime();
		$date->setTimezone($timezone );
		$d = $date->format( 'H:i:s' );
		$userTime = explode(":",$d); 	
		echo 'Hours is :' .  $userTime[2];
		echo 'SUBMITTED :' .  $_GET['isSubmitted'];
	}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Play Now</title> 
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
    <style>
			
			
    		body{margin:0px;padding:0px;}
			button {
			  background-color: #333333;
			  border: 2px solid white;
			  border-radius: 27px;
			  color: white;
			  cursor: pointer;
			  font-size: 15px;
			  margin-top: 20px;
			  margin-left:auto;
			  margin-right:auto;
			  transition: all 200ms;
			  height:80px;
			  width:150px;
			}
			button:hover, button:focus {
			  background-color: white;
			  color: #333333;
			  outline: 0;
			}
    
	    
	    	.well h2{color: red;}
	    	.well h3{color: orange;}
	    	.well td{color: black;}

	    	.q1{width:100%;}

	    	.table{margin-left:-3%;}

	    	tr{text-align:right;}

	    	/*loaders*/
	    	.cssload-container * {
					box-sizing: border-box;
						-o-box-sizing: border-box;
						-ms-box-sizing: border-box;
						-webkit-box-sizing: border-box;
						-moz-box-sizing: border-box;
				}
				.cssload-container {
					margin: 19px auto 0 auto;
					max-width: 545px;
					height: 800px;
				}

				.cssload-container ul li{
					list-style: none;
				}

				.cssload-flex-container {
					display: flex;
						display: -o-flex;
						display: -ms-flex;
						display: -webkit-flex;
						display: -moz-flex;
					flex-direction: row;
						-o-flex-direction: row;
						-ms-flex-direction: row;
						-webkit-flex-direction: row;
						-moz-flex-direction: row;
					flex-wrap: wrap;
						-o-flex-wrap: wrap;
						-ms-flex-wrap: wrap;
						-webkit-flex-wrap: wrap;
						-moz-flex-wrap: wrap;
					justify-content: space-around;
				}
				.cssload-flex-container li {
					padding: 10px;
					height: 97px;
					width: 97px;
					margin: 29px 19px;
					position: relative;
					text-align: center;
				}

				.cssload-loading-center {
					display: inline-block;
					position: absolute;
					background: rgb(0,0,0);
					height: 29px;
					width: 29px;
					left: 35px;
					top: 36px;
					transform: rotate(45deg);
						-o-transform: rotate(45deg);
						-ms-transform: rotate(45deg);
						-webkit-transform: rotate(45deg);
						-moz-transform: rotate(45deg);
					border-radius: 3px;
						-o-border-radius: 3px;
						-ms-border-radius: 3px;
						-webkit-border-radius: 3px;
						-moz-border-radius: 3px;
					animation: pulse 1.15s ease infinite;
						-o-animation: pulse 1.15s ease infinite;
						-ms-animation: pulse 1.15s ease infinite;
						-webkit-animation: pulse 1.15s ease infinite;
						-moz-animation: pulse 1.15s ease infinite;
				}

				.cssload-loading {
					display: inline-block;
					position: relative;
					width: 73px;
					height: 73px;
					margin-top: 3px;
					transform: rotate(45deg);
						-o-transform: rotate(45deg);
						-ms-transform: rotate(45deg);
						-webkit-transform: rotate(45deg);
						-moz-transform: rotate(45deg);
				}
				.cssload-loading:after, .cssload-loading:before {
					position: absolute;
					content: '';
					height: 10px;
					width: 10px;
					display: block;
					top: 0;
					background: rgb(0,0,0);
					border-radius: 3px;
						-o-border-radius: 3px;
						-ms-border-radius: 3px;
						-webkit-border-radius: 3px;
						-moz-border-radius: 3px;
					animation-delay: -.5.75s;
						-o-animation-delay: -.5.75s;
						-ms-animation-delay: -.5.75s;
						-webkit-animation-delay: -.5.75s;
						-moz-animation-delay: -.5.75s;
				}
				.cssload-loading:after {
					right: 0;
					animation: square-tr 2.3s ease infinite;
						-o-animation: square-tr 2.3s ease infinite;
						-ms-animation: square-tr 2.3s ease infinite;
						-webkit-animation: square-tr 2.3s ease infinite;
						-moz-animation: square-tr 2.3s ease infinite;
					animation-delay: .143.75s;
						-o-animation-delay: .143.75s;
						-ms-animation-delay: .143.75s;
						-webkit-animation-delay: .143.75s;
						-moz-animation-delay: .143.75s;
				}
				.cssload-loading:before {
					animation: square-tl 2.3s ease infinite;
						-o-animation: square-tl 2.3s ease infinite;
						-ms-animation: square-tl 2.3s ease infinite;
						-webkit-animation: square-tl 2.3s ease infinite;
						-moz-animation: square-tl 2.3s ease infinite;
					animation-delay: .143.75s;
						-o-animation-delay: .143.75s;
						-ms-animation-delay: .143.75s;
						-webkit-animation-delay: .143.75s;
						-moz-animation-delay: .143.75s;
				}

				.cssload-loading.cssload-two {
					position: relative;
					top: -78px;
				}
				.cssload-loading.cssload-two:after, .cssload-loading.cssload-two:before {
					bottom: 0;
					top: initial;
				}
				.cssload-loading.cssload-two:after {
					animation: square-br 2.3s ease infinite;
						-o-animation: square-br 2.3s ease infinite;
						-ms-animation: square-br 2.3s ease infinite;
						-webkit-animation: square-br 2.3s ease infinite;
						-moz-animation: square-br 2.3s ease infinite;
					animation-direction: reverse;
						-o-animation-direction: reverse;
						-ms-animation-direction: reverse;
						-webkit-animation-direction: reverse;
						-moz-animation-direction: reverse;
				}
				.cssload-loading.cssload-two:before {
					animation: square-bl 2.3s ease infinite;
						-o-animation: square-bl 2.3s ease infinite;
						-ms-animation: square-bl 2.3s ease infinite;
						-webkit-animation: square-bl 2.3s ease infinite;
						-moz-animation: square-bl 2.3s ease infinite;
					animation-direction: reverse;
						-o-animation-direction: reverse;
						-ms-animation-direction: reverse;
						-webkit-animation-direction: reverse;
						-moz-animation-direction: reverse;
				}








				@keyframes square-tl {
					0% {
						transform: translate(0, 0);
					}
					25% {
						transform: translate(0, 60.5px);
					}
					50% {
						transform: translate(60.5px, 60.5px);
					}
					75% {
						transform: translate(60.5px, 0);
					}
				}

				@-o-keyframes square-tl {
					0% {
						-o-transform: translate(0, 0);
					}
					25% {
						-o-transform: translate(0, 60.5px);
					}
					50% {
						-o-transform: translate(60.5px, 60.5px);
					}
					75% {
						-o-transform: translate(60.5px, 0);
					}
				}

				@-ms-keyframes square-tl {
					0% {
						-ms-transform: translate(0, 0);
					}
					25% {
						-ms-transform: translate(0, 60.5px);
					}
					50% {
						-ms-transform: translate(60.5px, 60.5px);
					}
					75% {
						-ms-transform: translate(60.5px, 0);
					}
				}

				@-webkit-keyframes square-tl {
					0% {
						-webkit-transform: translate(0, 0);
					}
					25% {
						-webkit-transform: translate(0, 60.5px);
					}
					50% {
						-webkit-transform: translate(60.5px, 60.5px);
					}
					75% {
						-webkit-transform: translate(60.5px, 0);
					}
				}

				@-moz-keyframes square-tl {
					0% {
						-moz-transform: translate(0, 0);
					}
					25% {
						-moz-transform: translate(0, 60.5px);
					}
					50% {
						-moz-transform: translate(60.5px, 60.5px);
					}
					75% {
						-moz-transform: translate(60.5px, 0);
					}
				}

				@keyframes square-bl {
					0% {
						transform: translate(0, 0);
					}
					25% {
						transform: translate(0, -60.5px);
					}
					50% {
						transform: translate(60.5px, -60.5px);
					}
					75% {
						transform: translate(60.5px, 0);
					}
				}

				@-o-keyframes square-bl {
					0% {
						-o-transform: translate(0, 0);
					}
					25% {
						-o-transform: translate(0, -60.5px);
					}
					50% {
						-o-transform: translate(60.5px, -60.5px);
					}
					75% {
						-o-transform: translate(60.5px, 0);
					}
				}

				@-ms-keyframes square-bl {
					0% {
						-ms-transform: translate(0, 0);
					}
					25% {
						-ms-transform: translate(0, -60.5px);
					}
					50% {
						-ms-transform: translate(60.5px, -60.5px);
					}
					75% {
						-ms-transform: translate(60.5px, 0);
					}
				}

				@-webkit-keyframes square-bl {
					0% {
						-webkit-transform: translate(0, 0);
					}
					25% {
						-webkit-transform: translate(0, -60.5px);
					}
					50% {
						-webkit-transform: translate(60.5px, -60.5px);
					}
					75% {
						-webkit-transform: translate(60.5px, 0);
					}
				}

				@-moz-keyframes square-bl {
					0% {
						-moz-transform: translate(0, 0);
					}
					25% {
						-moz-transform: translate(0, -60.5px);
					}
					50% {
						-moz-transform: translate(60.5px, -60.5px);
					}
					75% {
						-moz-transform: translate(60.5px, 0);
					}
				}

				@keyframes square-tr {
					0% {
						transform: translate(0, 0);
					}
					25% {
						transform: translate(-60.5px, 0);
					}
					50% {
						transform: translate(-60.5px, 60.5px);
					}
					75% {
						transform: translate(0, 60.5px);
					}
				}

				@-o-keyframes square-tr {
					0% {
						-o-transform: translate(0, 0);
					}
					25% {
						-o-transform: translate(-60.5px, 0);
					}
					50% {
						-o-transform: translate(-60.5px, 60.5px);
					}
					75% {
						-o-transform: translate(0, 60.5px);
					}
				}

				@-ms-keyframes square-tr {
					0% {
						-ms-transform: translate(0, 0);
					}
					25% {
						-ms-transform: translate(-60.5px, 0);
					}
					50% {
						-ms-transform: translate(-60.5px, 60.5px);
					}
					75% {
						-ms-transform: translate(0, 60.5px);
					}
				}

				@-webkit-keyframes square-tr {
					0% {
						-webkit-transform: translate(0, 0);
					}
					25% {
						-webkit-transform: translate(-60.5px, 0);
					}
					50% {
						-webkit-transform: translate(-60.5px, 60.5px);
					}
					75% {
						-webkit-transform: translate(0, 60.5px);
					}
				}

				@-moz-keyframes square-tr {
					0% {
						-moz-transform: translate(0, 0);
					}
					25% {
						-moz-transform: translate(-60.5px, 0);
					}
					50% {
						-moz-transform: translate(-60.5px, 60.5px);
					}
					75% {
						-moz-transform: translate(0, 60.5px);
					}
				}

				@keyframes square-br {
					0% {
						transform: translate(0, 0);
					}
					25% {
						transform: translate(-60.5px, 0);
					}
					50% {
						transform: translate(-60.5px, -60.5px);
					}
					75% {
						transform: translate(0, -60.5px);
					}
				}

				@-o-keyframes square-br {
					0% {
						-o-transform: translate(0, 0);
					}
					25% {
						-o-transform: translate(-60.5px, 0);
					}
					50% {
						-o-transform: translate(-60.5px, -60.5px);
					}
					75% {
						-o-transform: translate(0, -60.5px);
					}
				}

				@-ms-keyframes square-br {
					0% {
						-ms-transform: translate(0, 0);
					}
					25% {
						-ms-transform: translate(-60.5px, 0);
					}
					50% {
						-ms-transform: translate(-60.5px, -60.5px);
					}
					75% {
						-ms-transform: translate(0, -60.5px);
					}
				}

				@-webkit-keyframes square-br {
					0% {
						-webkit-transform: translate(0, 0);
					}
					25% {
						-webkit-transform: translate(-60.5px, 0);
					}
					50% {
						-webkit-transform: translate(-60.5px, -60.5px);
					}
					75% {
						-webkit-transform: translate(0, -60.5px);
					}
				}

				@-moz-keyframes square-br {
					0% {
						-moz-transform: translate(0, 0);
					}
					25% {
						-moz-transform: translate(-60.5px, 0);
					}
					50% {
						-moz-transform: translate(-60.5px, -60.5px);
					}
					75% {
						-moz-transform: translate(0, -60.5px);
					}
				}

				@keyframes rotate {
					from {
						transform: rotate(0deg);
					}
					to {
						transform: rotate(360deg);
					}
				}

				@-o-keyframes rotate {
					from {
						-o-transform: rotate(0deg);
					}
					to {
						-o-transform: rotate(360deg);
					}
				}

				@-ms-keyframes rotate {
					from {
						-ms-transform: rotate(0deg);
					}
					to {
						-ms-transform: rotate(360deg);
					}
				}

				@-webkit-keyframes rotate {
					from {
						-webkit-transform: rotate(0deg);
					}
					to {
						-webkit-transform: rotate(360deg);
					}
				}

				@-moz-keyframes rotate {
					from {
						-moz-transform: rotate(0deg);
					}
					to {
						-moz-transform: rotate(360deg);
					}
				}

				@keyframes pulse {
					0%, 100% {
						transform: scale(inherit) rotate(45deg);
					}
					75% {
						transform: scale(0.25) rotate(45deg);
					}
				}

				@-o-keyframes pulse {
					0%, 100% {
						-o-transform: scale(inherit) rotate(45deg);
					}
					75% {
						-o-transform: scale(0.25) rotate(45deg);
					}
				}

				@-ms-keyframes pulse {
					0%, 100% {
						-ms-transform: scale(inherit) rotate(45deg);
					}
					75% {
						-ms-transform: scale(0.25) rotate(45deg);
					}
				}

				@-webkit-keyframes pulse {
					0%, 100% {
						-webkit-transform: scale(inherit) rotate(45deg);
					}
					75% {
						-webkit-transform: scale(0.25) rotate(45deg);
					}
				}

				@-moz-keyframes pulse {
					0%, 100% {
						-moz-transform: scale(inherit) rotate(45deg);
					}
					75% {
						-moz-transform: scale(0.25) rotate(45deg);
					}
				}		
	    	/*loaders ends*/
    </style>
    
</head>
<body>
<div class="cssload-container">
	<ul class="cssload-flex-container">
		<li>
			<span class="cssload-loading cssload-one"></span>
			<span class="cssload-loading cssload-two"></span>
			<span class="cssload-loading-center"></span>
		</li>
	</div>
</div>	    
    <header>
		<div class="container">
			<div class="row-fluid">
					<div class="navbar navbar-fixed-top" id="navbar-q">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar btnOverlay" data-toggle="collapse" data-target=".nav-collapse">
			            		Show Questions 
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
									<li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q1</a></li>
                                   	<li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q2</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q3</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q4</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q5</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q6</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q7</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q8</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q9</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q10</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q11</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q12</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q13</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q14</a></li>
                                    <li style="border-bottom:1px solid #FD060A;"><a href="#" class="home">Q15</a></li>
                                    <li style="border:1px solid #FD060A;"><a href="#" class="home">Quit</a></li>
                                    <li style="border:1px solid #FD060A;"><a href="logout.php" class="home">logout</a></li>										
			            		</ul>
			          		</div>
			        	</div>
				</div>	
			</div>
		</div>
	</header>
	
        
    <div class="row">
    	<div class="col col-sm-4">
        	
        </div>
        <div class="col col-sm-8">
      		<div id="services" class="color black">
                <div class="container-fluid">
                <div class="col col-sm-4"></div>
                <div class="col col-sm-8">
                <h2 align="center">Welcome :
					<?php 
					
					$nameofuser = $conn->query("SELECT `firstname` FROM `users` WHERE email ='$name'");
					if($nameofuser->num_rows >0)
					{
                                        
                       while($t = $nameofuser->fetch_assoc()){
							echo $t['firstname'];   
						}                                            
                     }
				 ?></h2>
                        <div class="wrapper span12">
                            <div id="page-title">
                            
                                <div id="page-title-inner">
                                <br/>
                                    
                                    <h2><span>Select Appropriate Answer For the Given Questions</span></h2>
                                </div>	
                            </div>			
                    <div class="row-fluid">	
                        <div class="container-fluid">
                        <div class="span12">	
                            <p>	
        
                                <?php  
        
                                    
                                    $sql = "select submitted from users where email = '$name' and submitted ='y'";
        
                                    if($conn->query($sql)->num_rows>0){
                                        
                                        echo '<h2 align="center">Your Answering session has already started please submit as soon as possible</h2>';
                                        //echo $name;
                                            
                                    }else{
                                        echo '<button type="button" id="reg-form" style="margin-left:37%;margin-right:auto;">Play  Now</button>';		
                                    
                                    }
                                ?>					                       
                            </p>  
        
                            <?php
        
        
                            ?>
                            <div class="q1">
                                <h3 align="center">Question 1</h3>
                                <h2 align="left">Tell me the name of person who have 10 rupee</h2>
                                <table class="table">
                                    <tr>
                                        <td>Amit</td>
                                        <td><input type="radio" name="q2_option1" value="a"/></td>
                                    </tr>
        
                                    <tr>
                                        <td>KUMAR</td>
                                        <td><input type="radio" name="q2_option2" value="a"/></td>
                                    </tr>
        
                                    <tr>
                                        <td>SONI</td>
                                        <td><input type="radio" name="q2_option3" value="a"/></td>
                                    </tr>
        
                                    <tr>
                                        <td>NONE</td>
                                        <td><input type="radio" name="q2_option4" value="a"/></td>
                                    </tr>
        
                                    <tr>
                                        <td></td>
                                        <td><button type="button" name="q1_submit" id="q1_submit" />Save Question 1</button></td>
                                    </tr>
        
                                </table>
                                    
                            </div>
                            
                            <!-- question ends here -->
                         </div>	
                        </div>
                    </div>	
                    <div class="clearfix"></div>
                    <hr class="clean">					
                    </div>	
                
                </div>		 <!--  col-8 ends here -->
                </div>				
			</div> 	  
        </div>  
    </div> 
<footer>	
		<div id="copyright">
			Nakshtra  &copy; 2017 Online Competitionas. <a href="http://nakshtra2k17.com" alt="NITC MCA"></a> 
		</div>
		<div id="social">
			<a href="#" rel="tooltip" title="Pintrest" class="googleplus">Pintrest</a>
			<a href="#" rel="tooltip" title="Vimeo" class="facebook">Vimeo</a>
			<a href="#" rel="tooltip" title="YouTube" class="youtube">YouTube</a>
		</div>	
		
</footer>	
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script>
	
	$(document).ready(function(){

		$('.cssload-container').delay(1500).fadeOut("slow");
	});

	
	$(document).ajaxStart(function(){
		$('.cssload-container').show();
		
	});
   $('#reg-form').click(function(){
   	   $('#reg-form').css({
   	   		'transition':'1s linear',
   	   		'display':'none'
   	   });
	    
		$.ajax({
			  method: "POST",
			  url: "lock.php",
			  data: { isSubmitted: "y"},
		}).done(function(responceData){				 
			 $('.cssload-container').hide(); 
			 console.log(responceData);
			 
		}).fail(function(){alert('Fail Section')});
   });
</script>
</body>
</html> 
