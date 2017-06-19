<?php   
    $conn = new mysqli("localhost","root","amit","sherlock");
    session_start();    
    if(!isset($_SESSION['userEmail']) && !isset($_SESSION['userName']))
    {   
        header('location:../index.php');    
    } 
	header("Refresh: 2700; url=logout.php"); 
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
            <li style="background-color:red;"><a href="logout.php">Get Me Out Of Here</a></li>
            <?php   
                $qid = 10001;
                for($i=1;$i<=58;$i++){                    
                    echo '<li><a href="welcome.php#q'.$qid.'"class="page-scroll">Question'.$i.'</a></li>';
                    $qid++;
                }
            ?>
        </ul><!--- End Menu -->
    </div> <!--- End Off Canvas Side Menu -->

    <!-- Home Section -->
    <div id="home" style="background-image:url(../images/12345.jpg);">
        <div class="container text-center">
            <!-- Navigation -->
            <nav id="menu" data-toggle="offcanvas" data-target=".navmenu">
                <span class="fa fa-bars"></span>
            </nav>

            <div class="content">
            
                <h1 align="center" style="background-color: rgba(15, 131, 156, 0.3); "> 
                    Welcome : <?php echo  $_SESSION["userName"];?>
                </h1>
                <h4 style="background-color:rgba(15, 131, 156, 0.3); color:red; font-size:24px; font-weight:bold;">Click the Arrow below to start Answering </h4>
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
					<h3>QUESTION SECTION </h3>
                    	                                      
                </div>
                
                    
                <div class="row" id="display_question">
                    <div class="col-md-12 col-sm-12 col-xl-12 col-lg-12" style="color:white;">                      	
                        
						<?php include('function.php');	?>
                        <div id="new_question"></div>
                        
                    </div>
            	</div>              
                <!-- question ends here -->                
            </div>
        </div>
    </div>

    
    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2017 © Online Event team . All Rights Reserved. & Designed by <a>Nakshtra Team</a></p>
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
        
		$(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            $('#logout_after_lock').hide();		
			$('#show_question_btn').click(function(){
				$('#show_question_btn').hide(); 
				$('.question_section').show();	
			});      
        });    
		
        $(document).ajaxStart(function() {
            
            //loader here 
        });
        
        
		$('#start_event').click(function()
        {
            //alert('hello');
			$('#start_event').hide('fast');
			datastring = "started="+"yes";              
            $.ajax({
                url:'start_user_session.php',
                type:"POST",
                cache:false,
                data:datastring,
                success: function(data){
                    $('#new_question').html(data);
									
                },
                error: function(data){
                    alert('ERRORR START EVENT ');
                },
                complete: function(){
                    
                }
             }); 
         });
   
		
		$('button').click(function(){	
			var x = $(this).prev().val();		
			var t = $(this).prev().attr('id'); 
    		console.log(x);
			
			dataToBeSent = "qid="+t+"&value="+x;              
            $.ajax({
                url:'start_user_session.php',
                type:"POST",
                cache:false,
                data:dataToBeSent,
                success: function(data){
                    console.log(data);
                },
                error: function(data){
                    alert('ERRORR START EVENT ');
                },
                complete: function(){
                    //alert('completed');
                }
             }); //ajax ends here                   
		}); 
		
		
		
		$('#lock_answer').click(function(e){
			
			$('#options').hide();
			isLocked= "locked="+"yes";  
			$.ajax({
					url:'start_user_session.php',
					type:"POST",
					cache:false,
					data:isLocked,
					success: function(data){
						console.log(data);
						$('#logout_after_lock').show().slideDown();
			
					},
					error: function(data){
						alert('ERRORR IN LOCKING ANSWER');
					},
					complete: function(){
						//alert('completed');
					}
			});                             
		}); 
    
    </script>
  </body>
</html>