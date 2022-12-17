<?php
session_start();
?>
<?php


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Our Media | Login </title>
<link rel="icon" type="image/png" href="css/logoup.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title itemprop="name">OurMedia - Login | Login To OurMedia</title>
<meta name="description" content="Login To OurMedia | By logging into ourmedia you can write articles, promote your events,startups and products for free of cost. You can start messaging with different people who registered in ourmedia without any restrictions and you can explore your network." />
<meta name="keywords" content="ourmedia login, ourmedia signin, login, signin, ourmedia, our, our media, ourmedia.in login ,ourmedia.in, ourmedia.in signin, social media, social media login,social media signin, media, facebook, facebook login, facebook signin, freelancer, freelancer login, freelancer signin, amazon, amazon login, amazon signin, twitter, twitter login, twitter signin, instagram, instagram login, instagram signin, flipkart, flipkart login, flipkart signin, hike, hike login, hike sign in, indianceo, indian ceo login, google, google login, google signin, yahoo, yahoo login, yahoo signin, promotion, news, events, startups, technology, mobiles, movies, sports, love stories, entertainments, motivational stories, inspirational stories, college events, College Summits, DJ Events/Nights, Promotional events, Fund raising events, startups, ngo's" /> 

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
			
			
			
			    <div class="box shadow postblock">
                       
					<center><h2 style="color:purple;">Login Here</h2></center>
					
					<div class="box shadow postblock">

                        <form action="" method="post" enctype="multipart/form-data">

						    <div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
								<input type="email" name="u_email" value="" id="input-email" placeholder="E-Mail Address" required="required" class="form-control">
						    </div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-password">Password</label>
                                <input type="password" name="u_pass" id="pass" type="password" data-type="password" placeholder="********" required="required" class="form-control">
							</div>
							
														
                            <center><input style="background-color:purple;color:white;" type="submit" name="sign_in" value="Login" class="btn btn-default"></center>
                        
						</form>
						
						<?php
                        include("connect.php");

                        if(isset($_POST['sign_in']))
                        {
	   
	                        $email = $mysqli->real_escape_string($_POST['u_email']);
	                        $pass = $mysqli->real_escape_string($_POST['u_pass']);
                            							
	                        $get_user = "select * from users where user_email='$email' AND user_pass='$pass' AND verification='verified'";
	                        $run_user = mysqli_query($mysqli,$get_user);
	                        $check = mysqli_num_rows($run_user);
	   
	                        if($check==1)
	                        {
		                        $_SESSION['user_email']=$email;
		                          $_SESSION['user_id']=$row['user_id'];
								
								$from = "From: ourmedia_alerts@ourmedia.in";
		                        $to = $email;
		                        $subject = "OurMedia Login Alerts";
         
		                        $body = "You Have Recently Logged Into Your Account. If It Was Not U Then Please Change Your Details";
       
                                mail($to, $subject, $body, $from);
								
                                echo "<script>alert('WELCOME TO OURMEDIA! YOU ARE LOGGED IN AND NOW YOU CAN ACCESS ANYTHING. THANK YOU!')</script>";								
		                        echo "<script>window.open('userhome.php','_self')</script>";
		                        exit();
								
	                        }
	                        else
	                        {
		                        echo "<script>alert('Your Email Or Password Is Incorrect!')</script>";
			                    echo "<script>window.open('login.php','_self')</script>";
	                            exit();
	                        }
		             
					    }   

						?>
                        
						<div class="foot" align="right">
						    <a style="color:green;" href="forgotten.php">Forgotten Password ?</a>
						</div>
						
                    </div>
			    
				</div>
			
			
                <div class="box shadow postblock">
                    <h2 style="color:purple;">Not Yet Registered ?</h2>
                    <p>By creating an account you will be able to post a article on News, Events, Startups and even u can like, comment, and post anything (whats on your mind!).Even u can connect and chat with new people.</p>
                    <a style="background-color:purple;color:white;" href="register.php" class="btn btn-default">Register Here</a>
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
