    <!-- registration -->
        <?php
            $conn = new mysqli("localhost","root","amit","sherlock");

            if(!$conn){echo '<script>alert("Cant Connect To server ");</script>';}

            ERROR_REPORTING(E_ALL);

            if(isset($_POST['register']))
            {
            
                echo '<script>console.log("Connected ");</script>';
                $fn = mysqli_real_escape_string($conn,$_POST['firstname']);

                $ln = mysqli_real_escape_string($conn,$_POST['lastname']);
                $phone = mysqli_real_escape_string($conn,$_POST['phone']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $state = mysqli_real_escape_string($conn,$_POST['state']);
                $int = mysqli_real_escape_string($conn,$_POST['int']);
                
               
                    if(preg_match("/[789]\d{9}/",$phone))
                    {
                        if(preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/", $email))
                        {    
                            if(preg_match("/[a-zA-Z ]{8,100}/",$int))
                            {

                                /*everythings is all right*/
                                    $search  = "select `email` FROM `users` WHERE email='$email'";
                                    $execute_search=$conn->query($search);
                                    $search_result = mysqli_num_rows($execute_search);

                                    if($search_result>0){

                                        echo '<script>alert("Email Already Registered ")</script>';
                                        

                                    }else{

                                        $ip = $_SERVER['REMOTE_ADDR'];
                                        $sql = "insert into `users` values('$fn','$ln','$email','$phone','$state','$int','n','$ip','n','00:00:00','00:00:00')";

                                        $q2=$conn->query($sql);
                                        if($q2)
                                        {
                                            session_start();
                                            $_SESSION["userEmail"] =$email;
                                            $_SESSION["userName"] = $fn;
                                            /*if sucess send email to user
                                            
                                                require 'PHPMailerAutoload.php';
                                                $mail = new PHPMailer;                            
                                                $mail->isSMTP();                                      
                                                $mail->Host = 'smtp.gmail.com';					  
                                                //$mail->Host = 'sg2plcpnl0089.prod.sin2.secureserver.net'; //sg2plcpnl0089.prod.sin2.secureserver.net //smtp.gmail.com					  
                                                $mail->SMTPAuth = true;                               
                                                //$mail->Username = 'donotreply@nakshatra2k17.com';              
                                                $mail->Username = 'amitamora@gmail.com';                  
                                                $mail->Password = '131020037';                        
                                                $mail->SMTPSecure = 'ssl';                            
                                                $mail->Port = 465;                                    

                                                $mail->addAddress('$email', 'AMIT KUMAR ');
                                                $mail->isHTML(true);                                  // Set email format to HTML
                                                $mail->Subject = 'Congratulations! <br/> You are Registered Successfully .....';
                                                $mail->Body    = '<h1>Hello Participents..!<br/>You are registered Please contact </h1>';
                                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                                                if($mail->send()){
                                                          
                                                }
                                                /*if(!$mail->send()) {
                                                    echo 'Message could not be sent.';
                                                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                                                } else {
                                                    echo '<h1>Message has not been sent</h1>';
                                                }*/
                                                header('location:../user/welcome.php');  
                                            /*Sending of mail is done */
                                            
                                        }else{

                                            echo "ERR";						 
                                        }					
                                    }	

                                /*well done*/

                            }else{

                                 echo '<script>alert("Dont User Special Character . Please Enter Valid Institute Name ")</script>';
                            }
                        }
                        else{ 

                            echo '<script>alert("Please Enter a valid Email Address  ")</script>';die();
                            
                        }	 //email done 

                    }else{
                        echo '<script>alert("Contact Number is Not Valid ")</script>';               
                    }
                  
              	
            }	
        ?>
        <!-- registration Closed  -->
<!doctype html>
<html lang="en">
<head>
<title>Nakshatra Events</title>
<link href="http://fonts.googleapis.com/css?family=Metrophobic" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<script src="../assets/js/jquery.min.js"></script>
<!-- /css -->
<style type="text/css">
	#form-content{color:white;background-color: rgba(255, 5, 0, 0.3);
		font-size:22px;}

	    .back{
	    	margin-left: auto;
	    	margin-right: auto;
	    	font-size:32px;float:left;color:white;text-decoration: underline; 	
		}
</style>
</head>
<body>
<h1 class="header-agileits w3layouts w3 w3l w3ls">Event Registration  Form</h1>
<div class="content-w3ls agileits agileinfo wthree">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="reg-form">
		<div class="form-wthree1 agileits agileinfo wthree">
		
			<div class="form-control"> 
				<label class="header">First Name </label>
				<input type="text" id="fn" name="firstname" placeholder="Your First Name" title="Please enter your First Name" required="required" pattern="[a-zA-Z ]{3,100}">
                <div id="fnError"></div>
			</div>

			<div class="form-control"> 
				<label class="header">Last Name </label>
				<input type="text" id="ln" name="lastname" placeholder="Your Last Name" title="Please enter your Last Name" required="required" pattern="[a-zA-Z ]{3,100}">
			</div>
			
			
			
			<div class="form-control">	
				<label class="header">Phone Number </label>	
				
				<input type="tel" id="phone" name="phone" placeholder="Phone number " title="Please enter Your Phone Number" required="required">
			</div>
		
		</div>
		
		<div class="form-wthree2 w3-agileits agileits-w3layouts agile">
			
			<div class="form-control">	
				<label class="header">Email Address </label>
				<input type="email" id="email" name="email" placeholder="Enter Email" title="Please enter a Valid Email Address" required="required">
			</div>
		
		</div>
		<div class="clear"></div>
		
		
        
        <div class="form-control2"> 
			<label class="header">State</label>
            
            <select name="state">
            	
                <option>kerala</option>
                <option>tamilnadu</option>
                <option>Kernataka</option>
                <option>chhattisgarh</option>
                <option>Utterpradesh</option>
                <option>Bihar</option>
                <option>Madhyapradesh</option>
                <option>Rajsthan</option>
                <option>West Bengal</option>
                <option>Andhra Pradesh</option>
                <option>Uttrakhand</option>
                <option>Gujrat</option>
                <option>Goa</option>
                <option>Hariyana</option>
                <option>Delhi</option>
                <option>Himachal Pradesh</option>
                <option>J&K</option>
                <option>Punjab</option>
                <option>Odissa</option>
                <option>jharkhand</option>
                <option>Arunachal Pradesh</option>
                <option>Assam</option>
                <option>Nagaland</option>
                <option>Meghalay</option>
                <option>Mijoram</option>
                <option>telangana</option>
                <option>sikkim</option>
                <option>manipur</option>
                <option>Tripura</option>
            </select>
		</div>
       
        
		<label class="header">Institute Name </label>	
				
		<input type="text" id="iname" name="int" placeholder="institute" title="Please enter Your Institute Name " required="required">

		<br/><br/>
		
			
		<div class="clear"></div>
		<br/>
		<div class="form-control last">
			<input type="submit" class="register" id="register" name="register" value="Register Now ->">
			<input type="reset" class="reset" value="Reset"><br/>
			<br/>
			<div class="clear"></div>
			<br/>
			<div ><h1 align="center" id="form-content"></h1></div><br/>
			<a href="../index.php" class="back">Back to home </a><br/>
			
			<div class="clear"></div>
		</div>	
	</form>
            
</div>
<p class="copyright w3layouts w3 w3l w3ls" style="background-color:rgba(74,68,68,0.85);">&copy;2017 Nakshatra Events | Design by <a href="https://nakshatra2k17.com/" target="_blank">NAKSHATRA EVENT TEAM</a></p>

<script>
</body>
</html>