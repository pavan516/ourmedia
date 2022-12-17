<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Our Media | Registration</title>
<link rel="icon" type="image/png" href="css/logoup.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title itemprop="name">OurMedia - Register | Now Register in OurMedia and get more exposure to your Products</title>
<meta name="description" content="Register In OurMedia | By having a account in ourmedia you can write articles, promote your events,startups and products for free of cost. You can start messaging with different people who registered in ourmedia without any restrictions and you can explore your network." />
<meta name="keywords" content="ourmedia signup, ourmedia register, ourmedia registration, ourmedia, ourmedia login, ourmedia signin, login, signin, signup, ourmedia, our, our media, ourmedia.in login ,ourmedia.in, ourmedia.in signin, ourmedia.in signup, ourmedia social media, ourmedia social media login, ourmedia social media signin, ourmedia social media registration,ourmedia  social media signup, media, ourmedia facebook, ourmedia facebook login, ourmedia facebook signin, facebook signup, facebook registration, facebook register, freelancer, freelancer login, freelancer signin, freelancer registration, freelancer signup, amazon, amazon login, amazon signin, amazon signup, twitter signup, twitter register, twitter registration, twitter, twitter login, twitter signin, instagram, instagram login, instagram signin, instagram signup, instagram registration, instagram register, flipkart, flipkart login, flipkart signin, flipkart signup, flipkart register, hike, hike login, hike sign in, indianceo, indian ceo login, google, google login, google signin, yahoo, yahoo login, yahoo signin, promotion, news, events, startups, technology, mobiles, movies, sports, love stories, entertainments, motivational stories, inspirational stories, college events, College Summits, DJ Events/Nights, Promotional events, Fund raising events, startups, ngo's" /> 

<?php include('includes/header.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">
		
	    <div class="col-md-12">
			<h3 class="pullbar"><i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> ALL CATEGORIES
				<i class="fa fa-angle-left" onclick="$('.col-right').slideToggle();" style="float:right; margin-right: 10px;"></i>
		    </h3>
	    </div>
			
        <div class="col-md-3 col-left">
		    <div class="box shadow postblock">
		        <?php include('includes/left_sidebar.php'); ?>
            </div>
	    </div>
		
        <div class="col-md-6">
		
		    	  
	        <div class="box shadow postblock">
			
			    <center><h1 style="color:purple;">Register Account</h1></center>
				<p>If you already have an account with us, please <a style="color:green;" href="login.php">login Here</a>.</p>
				
							
				    <form action="" method="post" enctype="multipart/form-data">
					
					    <div class="box shadow postblock">
					    <legend>Fill Your details :</legend>
						
                        <div class="form-group">
                            <label class="control-label" for="input-UserName">UserName</label>
                            <input type="text" name="u_name" class="form-control" placeholder="UserName" required="required"/>
                        </div>
						
						<div class="form-group">
                            <label class="control-label" for="input-E-Mail">E-Mail</label>
                            <input type="email" name="u_email" class="form-control" placeholder="E-Mail" required="required"/>
                        </div>
						
						<div class="form-group">
                            <label class="control-label" for="input-Password">Password</label>
                            <input type="password" name="u_pass" class="form-control" data-type="password" placeholder="********" required="required" />
                        </div>
						
                        <div class="form-group">
                            <label class="control-label" for="input-Contact">Contact</label>
                            <input type="tel" name="u_contact" class="form-control" placeholder="Contact" required="required" />
						</div>
						
						<div class="form-group">
                            <label class="control-label" >Gender</label>
				            <input type = "radio" name = "gender" value = "male" checked = "male" required="required">Male
                            <input type = "radio" name = "gender" value = "female" requred="required" >Female
				            <input type = "radio" name = "gender" value = "other" requred="required">Other
						</div>
						
						<div class="form-group">
                            <label class="control-label" >Date Of Birth</label>
					        <input type="date" name="u_birthday" class="form-control" required="required">
						</div>
						
						<div class="form-group">
                            <label class="control-label" >Select A Image For Profile Photo (with very less or compressed file size)</label>
					        <input type="file" name="u_image" class="form-control" required="required">
						</div>
						
                        </div>
						
                        <center><input style="background-color:purple;color:white;" type="submit" name="sign_up" value="Register" class="btn btn-default"></center>
							
                    </form>
					
					<?php
                    include("connect.php");

                    if(isset($_POST['sign_up']))
                    {
	                    $u_name = $mysqli->real_escape_string($_POST['u_name']);
	                    $u_pass = $mysqli->real_escape_string($_POST['u_pass']);
	                    $u_email = $mysqli->real_escape_string($_POST['u_email']);
	                    $u_contact = $mysqli->real_escape_string($_POST['u_contact']);
	                    $gender = $mysqli->real_escape_string($_POST['gender']);
	                    $u_birthday = $mysqli->real_escape_string($_POST['u_birthday']);
	                    $u_image = $_FILES['u_image']['name'];
	                    $image_tmp = $_FILES['u_image']['tmp_name'];
	                    $u_cimage = "defaultcover.jpg";
	                    $status = "Write Any Status";
	                    $verification = "unverified";
	   
	                    if($u_name =='' OR $u_pass =='' OR $u_email =='' OR $u_contact =='' OR $gender =='' OR $u_birthday =='' )
		                {
			                echo "<script>alert('Please Fill All The Details!')</script>";
		                }
						else
						{
	   
	                        $get_email = "select * from users where user_email='$u_email'";
	                        $run_email = mysqli_query($mysqli,$get_email);
	                        if(mysqli_num_rows($run_email)>0)
			                {
			                    echo "<script>alert('EMAIL $email IS ALREADY EXIST, PLEASE TRY ANOTHER ONE!')</script>";
			                }   
	                        else
	                        {
              		   	        move_uploaded_file($image_tmp,"user_images/$u_image");   
								   
		                        $insert = "insert into users (user_name,user_pass,user_email,user_contact,user_gender,user_b_day,user_image,user_cimage,register_date,last_login,status,verification)
		                        values('$u_name','$u_pass','$u_email','$u_contact','$gender','$u_birthday','$u_image','$u_cimage',NOW(),NOW(),'$status','$verification')";
	   
	                            $run_insert = mysqli_query($mysqli,$insert);
		   
		                        if($run_insert)
		                        {
			                        echo "<script>alert('Verify Your Account! A Verification Link Is Sended To Your Email!')</script>";
			                        echo "<script>window.open('https://www.ourmedia.in/login.php','_self')</script>";
			                    }
								$from = "From: ourmedia_alerts@ourmedia.in";
		                        $to = $u_email;
		                        $subject = "OurMedia Email Verification";
         
		                        $body = "(Note : If Link Doesn't Works Just Copy The Link And Paste It On Any Browser. )Click to verify your email : https://www.ourmedia.in/verification.php?user_email=$u_email";
       
                                mail($to, $subject, $body, $from);
		                    }
                        }
                    }

					?> 
					<br><br>
										
					<div class="box shadow postblock">
					
					<div class="box shadow postblock">
			            <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				    </div>
					
					<div class="box shadow postblock">
                        <h2 style="color:purple;">Problem 1</h2>
                        <p>If U Want To Know Whether U Are Registered Or Not.<br>Please Verify With Ur Email Here</p>
						
						<form action="" method="post" enctype="multipart/form-data">
						
						    <div class="form-group">
                                <label class="control-label" for="input-E-Mail">E-Mail</label>
                                <input type="email" name="u_email" class="form-control" placeholder="E-Mail" required="required"/>
                            </div>
						
						    <center><input style="background-color:purple;color:white;" type="submit" name="check" value="Check" class="btn btn-default"></center>
							
						</form>
						
						<?php
                        include("connect.php");

                        if(isset($_POST['check']))
                        {
							$u_email = $mysqli->real_escape_string($_POST['u_email']);
	                        
                       		$get_email = "select * from users where user_email='$u_email'";
	                        $run_email = mysqli_query($mysqli,$get_email);
	                        if(mysqli_num_rows($run_email)>0)
			                {
			                    echo "<script>alert('EMAIL $email IS ALREADY EXIST')</script>";
			                }   
	                        else
	                        {
              		   	        echo "<script>alert('EMAIL $email IS NOT EXIST IN OURMEDIA')</script>";
								echo "<script>window.open('https://www.ourmedia.in/register.php','_self')</script>";
		                    }
                        }

					    ?> 
						
		            </div>
					
					<div class="box shadow postblock">
			            <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				    </div>
					
					<div class="box shadow postblock">
					
					    <h2 style="color:purple;">Problem 2</h2>
                        <p>If You are finding a problem with : <br>
						   " EMAIL IS ALREADY EXIST, PLEASE TRY ANOTHER ONE! "<br>
						   <b style="color:red;">Soln 1 : </b>Try To Verify Your Email Account .( A Verification Link Is Sended To Your Registered E-Mail)<br>
						   <b style="color:red;">Soln 2 : </b>If U didn't Get Any Mail. Please Fill Below Details To Get A Link And Verify Your E-Mail<br>
						   <b style="color:red;">Soln 3 : </b>Contact OurMedia Team Members. (See footer)</p>
					
					<form action="" method="post" enctype="multipart/form-data">
					
					    
						<div class="form-group">
                            <label class="control-label" for="input-E-Mail">E-Mail</label>
                            <input type="email" name="u_email" class="form-control" placeholder="E-Mail" required="required"/>
                        </div>
						
						<div class="form-group">
                            <label class="control-label" for="input-Password">Password</label>
                            <input type="password" name="u_pass" class="form-control" data-type="password" placeholder="********" required="required" />
                        </div>
						
                       	<center><input style="background-color:purple;color:white;" type="submit" name="re-mail" value="Re-Mail" class="btn btn-default"></center>
							
                    </form>
					
					<?php
                    include("connect.php");

                    if(isset($_POST['re-mail']))
                    {
	                    $u_pass = $mysqli->real_escape_string($_POST['u_pass']);
	                    $u_email = $mysqli->real_escape_string($_POST['u_email']);
	                    	   
	                    $result = mysqli_query($mysqli,"SELECT * FROM users WHERE user_email='$u_email'");
						if(mysqli_num_rows($result)>0)
						{
							while($row = mysqli_fetch_array($result))
							{
								$user_pass = $row['user_pass'];
								$verification = $row['verification'];
							}	
									
							if($user_pass == $u_pass)
							{
								if($verification==verified)
		                        {
								            
                                    echo "<script>alert('You Already Verified Your Account And Now You Can Login!')</script>";
                                    echo "<script>window.open('https://www.ourmedia.in/login.php','_self')</script>";        
									
								}
								else if($verification==unverified)
								{
									echo "<script>alert('Verify Your Account! A Verification Link Is Sended To Your Email!')</script>";
			                        echo "<script>window.open('https://www.ourmedia.in/login.php','_self')</script>";
											
									$from = "From: ourmedia_alerts@ourmedia.in";
		                            $to = $u_email;
		                            $subject = "OurMedia Email Verification";
         
		                            $body = "(Note : If Link Doesn't Works Just Copy The Link And Paste It On Any Browser. )Click to verify your email : https://www.ourmedia.in/verification.php?user_email=$u_email";
       
                                    mail($to, $subject, $body, $from);
								}
							}
							else if ($user_pass!= $pass)
							{
								echo "<script>alert('Entered Email/Password Is Wrong')</script>";
							}
						}	
	                    else 
						{
							echo "<script>alert('Email Does Not Exist!')</script>";
	                    }
					}    
                    

					?> 
					
					</div>
					
					</div>
				
			</div>
			
			

			
        </div>
	  
	        <div class="col-md-3 col-right">
	            <div class="box shadow postblock">
		            <?php include('includes/right_sidebar.php'); ?>
		        </div>
            </div>
	  
	  
	  
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
