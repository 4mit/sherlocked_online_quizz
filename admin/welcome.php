<?php
	
	$conn = new mysqli("localhost","root","amit","sherlok");
	session_start();
	
	if(!isset($_SESSION['userEmail']) && !isset($_SESSION['userName'])){
		
		header('location:../index.php');	
	}
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&nbsp;Sherlocked_ONLINE</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>

	 <style>
      .nav li{
          border:1px solid white;background-color:#585353;color:#FCF7F7; transition:.3s ease-in;
          font-size:22px;	 
      }
      .nav li:hover{
           background-color:#0CBDF3; color:#F80307; font-weight:bold !important;	 
      }
      span.fa.fa-bars{background-color:black;}
	 
	   select option {
			color:#000000 !important;

		}

     </style>
 
  </head>
  <body>
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> <!--- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <span class="fa fa-close"></span>
        </div>
        <br/><br/>
        <ul class="nav navmenu-nav"> <!--- Menu -->
        	<li><a href="logout.php">Get Me Out Of Here</a></li>
            <?php
                $i=0;
                for($i=1;$i<=25;$i++){
                    echo '<li><a href="#home" class="page-scroll">Q'.$i.'</a></li>';
                }
            ?>
        </ul><!--- End Menu -->
    </div> <!--- End Off Canvas Side Menu -->

    <!-- Home Section -->
    <div id="home">
        <div class="container text-center">
            <!-- Navigation -->
            <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
                <span class="fa fa-bars"></span>
            </nav>

            <div class="content">
            
            	<h1 align="center" style="background-color: rgba(15, 131, 156, 0.3); "> 
					Welcome : <?php echo  $_SESSION["userName"];?>
                </h1>
                <h4 style="background-color:rgba(15, 131, 156, 0.3);">Click the Arrow below to start Answering </h4>
                <hr>
            </div>
            
            <a href="#clients" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
            
            
        </div>
    </div>

    <div id="clients">
        <div class="overlay">
            <div class="container text-center">
                <div class="section-title">
                    <h2>Submit Answers here </h2>
                    <hr>
                </div>
				<button type="button" id="start_event" class="btn btn-success">Start Now </button>                
                    <!-- question starts here -->
                    
                    <div class="row" id="display_question">
                    <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12">
                        
                        <br/><br/>
                          <?php
						  
						  $list_all_question  ="SELECT `qid` , `question` ,`option1` ,`option2`,`option3`,`option4` FROM que";
						  $ifQuestion = $conn->query($list_all_question);
						  if($ifQuestion)
                          {
    						while($q = $ifQuestion->fetch_assoc())
                            {
    							
							echo '<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="team">
										<br>
										<h4 align="center">'. $q['question'].'</h4>
										<p class="small">Select Correct Option from following list</p>
										<p><i class="fa fa-arrow-down animated pulse infinite" aria-hidden="true"></i></p>
										<hr>
										<p id="options">
											<form>
												<select name="'.$q['qid'].'">Select Name 
													<option>'.$q['option1'].'</option>
													<option>'.$q['option2'].'</option>
													<option>'.$q['option3'].'</option>
													<option>'.$q['option4'].'</option>
												</select>
											</form>
										</p>
									</div>
								 </div>';
    						}
						  }
						  ?>                       
              
                    </div>
                </div> 

                <script>
                    $('#display_question').hide();
                </script>               
                <!-- question ends here -->                
            </div>
        </div>
    </div>

    
    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2017 © Online Event team . All Rights Reserved. & Designed by <a></a></p>
            </div>
            <div class="pull-right"> 
                <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script>

    	$('#start_event').click(function(){
			$('#display_question').show("slow");
		});

        
    </script>
  </body>
</html>