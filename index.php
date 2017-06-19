<?php
if(isset($_GET['submitted'])){
	
	
	echo '<script>alert("OOPS time OUT .... ");</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&nbsp;Sher_locked</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="img/favicon.ico" >
  
    <!-- Bootstrap -->
    <link href="user/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="user/font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="user/css/jasny-bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css"  href="user/css/style.css">
    <link rel="stylesheet" type="text/css" href="user/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="user/css/animate.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.0/css/hover-min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="user/js/modernizr.custom.js"></script>
    <!-- jquery -->
   
    <script type="text/javascript" src="user/js/jquery.1.11.1.js"></script>
    
    
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
  @import url(assets/fonts/foughtknight.ttf);
  @import url(assets/fonts/gang_wolfik.ttf);
  
	.section-title{
		font-family:foughtknight;
	}
    .amazingslider-bullet-1{display:none;}
	.content h4{font-family:foughtknight;font-size:400%;}
    .slider_row{background-color:rgba(24,24,56,0.5);}
	#logo_img{animation:fire 1s linear infinite;}
	@keyframes fire{
		0%{-webkit-box-shadow: -2px -22px 33px -9px rgba(229,19,240,1);
		-moz-box-shadow: -2px -28px 33px -9px rgba(229,19,240,1);
		box-shadow: -2px -28px 33px -9px rgba(229,19,240,1);}
		25%{-webkit-box-shadow: -2px -28px 31px -9px rgba(240,211,19,1);
		-moz-box-shadow: -2px -28px 33px -9px rgba(240,211,19,1);
		box-shadow: -2px -28px 33px -9px rgba(240,211,19,1);}
		50%{-webkit-box-shadow: -2px -28px 35px -9px rgba(144,240,19,1);
		-moz-box-shadow: -2px -28px 33px -9px rgba(144,240,19,1);
		box-shadow: -2px -28px 33px -9px rgba(144,240,19,1);}
		75%{-webkit-box-shadow: -2px -28px 33px -9px rgba(19,240,211,1);
		-moz-box-shadow: -2px -28px 33px -9px rgba(19,240,211,1);
		box-shadow: -2px -28px 33px -9px rgba(19,240,211,1);}
		100%{-webkit-box-shadow: -2px -28px 33px -9px rgba(240,19,19,1);
		-moz-box-shadow: -2px -28px 33px -9px rgba(240,19,19,1);
		box-shadow: -2px -28px 33px -9px rgba(240,19,19,1);}		
	
	}
	#meet-us{
		background-image:url(images/3-tn-tn.jpg);
		background-position:center;
		background-size:cover;
		background-attachment:fixed;
	}
	#services{
		color:rgba(255,255,255,1.00);
		background-image:url(images/back-ground.jpg);
		background-position:center;
		background-size:cover;
		background-attachment:fixed;
	}
	.service{
		background-color:rgba(86,70,70,0.73);
					
	}
  </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="-webkit-box-shadow: 0px 15px 14px -6px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 15px 14px -6px rgba(0,0,0,0.75);
        box-shadow: 0px 15px 14px -6px rgba(0,0,0,0.75);">
      <div class="container-fluid">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand animated slideInDown" href="#" style="color:#FDAE03;">SHER_LOCKED</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">        
          <ul class="nav navbar-nav navbar-right">
            <li class="animated bounceInLeft hvr-underline-from-center">
            	<a href="register/reg.php" id="reg_link"><i class="fa fa-paper-plane" aria-hidden="true"></i>
Register And Play </a>

				     
                
            </li>
            <li class="animated bounceInLeft hvr-underline-from-center">
            	<a href="#services"><i class="fa fa-question" aria-hidden="true"></i>
Rules</a>
            </li>
            &nbsp;&nbsp;
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

        <div id="home">
        <div class="container text-center">
            <!-- Navigation -->
            

            <div class="content">
 	     		<img src="images/MCALogo.png"
                	 class="img center-block img-circle animated bounceInDown" 
                     id="logo_img" 
                     style="height:10em;
                     		width:10em;
                            margin-top:-80px;
                            background-color: rgba(39, 128, 71, 0.5);
                            border:1px dashed black;
                            left:-10em;
                            -webkit-box-shadow: -2px -28px 33px -9px rgba(240,152,19,1);
                            -moz-box-shadow: -2px -28px 33px -9px rgba(240,152,19,1);
                            box-shadow: -2px -28px 33px -9px rgba(240,152,19,1);">
                   
                <h4 style="color:#FDAE03;
                			font-size:250%;
                            font-weight:bold;
                            
                            width:70%;
                            margin-left:auto;
                            margin-right:auto;"
                            class="animated bounceInUp hvr-float-shadow hvr-pop"
                            >SHER_LOCKED
                </h4>
                
                 <div class="col-sm-12">
                       <p>
                                      
                       </p>
                 </div>
                
                <hr>
                
                <div class="header-text btn">
                    <h1><span id="head-title" style="color:#FFF500;"></span></h1>
                </div>
                
                <br/>
                <a href="#meet-us" class="down-btn page-scroll">
                    <span class="fa fa-angle-down"></span>
                </a>
        </div>
    </div>
    </div>


    <div class="row slider_row">   
    <h2 align="center" class="jello" style="color:white; font-weight:bold;">Look On Sherlocke'd Series </h2>
    <br/>
        <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1399px;margin:0px auto 56px;">
            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="images/3.jpg" alt="3"  title="3" />
                    </li>
                    <li><img src="images/3-tn.jpg" alt="3-tn"  title="3-tn" />
                    </li>
                    <li><img src="images/33.jpg" alt="33"  title="33" />
                    </li>
                    <li><img src="images/44.jpg" alt="44"  title="44" />
                    </li>
                    <li><img src="images/12345.jpg" alt="12345"  title="12345" />
                    </li>
                    <li><img src="images/40428a5a79112f072adac725fda8bdfe_large.jpg" alt="40428a5a79112f072adac725fda8bdfe_large"  title="40428a5a79112f072adac725fda8bdfe_large" />
                    </li>
                </ul>
                <ul class="amazingslider-thumbnails" style="display:none;">
                    <li><img src="images/3-tn.jpg" alt="3" title="3" /></li>
                    <li><img src="images/3-tn-tn.jpg" alt="3-tn" title="3-tn" /></li>
                    <li><img src="images/33-tn.jpg" alt="33" title="33" /></li>
                    <li><img src="images/44-tn.jpg" alt="44" title="44" /></li>
                    <li><img src="images/12345-tn.jpg" alt="12345" title="12345" /></li>
                    <li><img src="images/40428a5a79112f072adac725fda8bdfe_large-tn.jpg" alt="40428a5a79112f072adac725fda8bdfe_large" title="40428a5a79112f072adac725fda8bdfe_large" /></li>
                </ul>
            </div>
            <h2 align="center" class="h4" style="color:white; font-weight:bold;">Let's Begin the Journey </h2>
    	</div>                    
    </div>

    <!-- Meet Us Section -->
    <div id="meet-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2 class=" animated tada infinite text-uppercase" style="font-size:34px; color:rgba(160,7,249,1.00);">About Contest </h2>
                        <hr>
                    </div>
                    <h1  style="font-size:24px; background-color:rgba(120,113,113,0.61);"><span id="about-text"></span></h1>
                </div>
            </div>
        </div>
    </div>

     <!-- Services Section -->
    <div id="services">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2 class=" animated tada infinite text-uppercase" style="font-size:29px;">RULES</h2>
                        <hr>
                    </div>
                    <p >Rules are Rules therre is no chance to cheat Please Follow The following rules </p>
                </div>
            </div>     
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="service">
                        <span class="fa fa-book fa-3x"></span>
                        <h4 class="">General Rules</h4>
                        
                        	<ul style="text-align: left;padding-left:20px;">
                            	<li style="color:red;">In case of any malpractice your college will be Disqualified from the entire event.</li>
                                <li class="text-danger">Question will be based on BBC Sherlock and Harry Potter Series .</li>
                            	<li >Once entered the game you will get 45 minutes to Complete your submission</li>
                                <li >One Can Submit Answers Many Number of Time During the given  time Only </li>                                                             
                                <li >To navigate through Questions You need To Click START button First</li>
                                <li >Answers Will not be evaluated if you have not locked your answers</li>
                                     
                            </ul>
                        
                        </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="service">
                        <span class="fa fa-tags fa-3x"></span>
                        <h4>More Instructions </h4>
                        <p>
                        	<ul style="text-align: left;padding-left:20px;">
                            	<li >Once Registered You can enter the game by clicking  START button.</li>
                                <li >Once you have entered the game Your time will be started.</li>
                                <li >Candidate Can Not Change any information provided during registration ,'Be careful' </li>
                                <li>Once you have locked your answers you can't alter again</li>
                                                              
                            </ul>
                        </p>
                    </div>
                </div>
                
                <div class="col-md-12 col-sm-12">
                    <div class="service">
                        <span class="fa fa-tags fa-3x"></span>
                        <h4>Prizes</h4>
                        <p>
                        	<ul style="text-align: left;padding-left:20px;">
                            	
                            	<li >Winner will get a Prize of an amount 2000<i class="fa fa-inr" aria-hidden="true"></i></li>
                                <li >You will be informed in case if you are a winner.</li>
                                <li >To be eligible for the prize you have to be an MCA student of any INDIAN institute. And Your college should be registered On <a href="www.nakshatra2k17.com">NAKSHATRA Website.</a></li>
                               	<li > Winners will be felicitated at the award distribution ceremony of Nakshatra at NIT Calicut.</li>
                                <li>Please Bring Your Valid ID card to claim prize amount.</li>                                                             
                            </ul>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

   
    <div id="cta">
        <div class="container text-center">
            <a href="http://www.nakshatra2k17.com" class="btn go-to-btn hvr-ripple-out">Visit Nakshatra Home Page </a>
        </div>
    </div>

   
    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2017 © Nakshtra'17</p>
            </div>
            <div class="pull-right"> 
                <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>
    
    <script type="text/javascript" src="user/js/bootstrap.js"></script>
    <script type="text/javascript" src="user/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="user/js/jasny-bootstrap.min.js"></script>
    <script src="user/js/typed.js"></script>
    <script type="text/javascript" src="scriptA.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>