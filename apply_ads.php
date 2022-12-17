<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Our Media</title>
<link rel="icon" type="image/png" href="css/logo.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title itemprop="name">OurMedia - Advertising Market | Online Digital Marketing</title>
<meta name="description" content="Apply For Ads In OurMedia | We provide a platform to advertise your products with very less price. | We are sure your product will be promoted and rechs lakhs of audience." />
<meta name="keywords" content="advertisement, ads, ads in ourmedia, apply for ads, ads price in ourmedia, advertisement in ourmedia, how to keep ads in ourmedia, internship, ourmedia internship, apply internship in ourmedia, get intern in ourmedia, how to get intern in ourmdia,interns in ourmedia, ourmedia, ourmedia events, ourmedia startups, events, startups, technology , sports, movies, entertainment, news, hacking, mobiles, love quotes, novels, college events, college summits, dj events, promotional events,  fund raising events, startups, NGO" /> 

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
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>
	  
	            <div class="box shadow postblock">
                    <center><h3 style="color:purple;">Welcome To OurMedia Advertising Market.</h3></center>		
				</div>
				
				<div class="box shadow postblock">
				
				    <h4 style="color:green;">Please Leave Your Details Here</h4>
				
				    <form action="" method="post" enctype="multipart/form-data">

						    <div class="form-group">
                                <label class="control-label" for="input-name">Name</label>
								<input type="text" name="ads_name" placeholder="Your Name" required="required" class="form-control">
						    </div>
							
							<div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
								<input type="email" name="ads_email" placeholder="E-Mail Address" required="required" class="form-control">
						    </div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-contact">Contact</label>
                                <input type="text" name="ads_contact" placeholder="Contact" required="required" class="form-control">
							</div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-name"> Name Of : Organisation / Consultancy / Many Other</label>
								<input type="text" name="ads_organisation" placeholder="Name Of : Organisation / Consultancy / Many Other" required="required" class="form-control">
						    </div>

                            <div class="form-group">
                                <label class="control-label" for="input-name">If U Want To Say Anything To Us Please Comment Below</label><br>
								<textarea name="ads_msg" rows="10" cols="40" placeholder="If U Want To Say Anything To Us Plese Comment Below"></textarea>
						    </div>	

                            
							<center><input style="background-color:purple;color:white;" type="submit" name="ads" value="submit" class="btn btn-default"></center>
                        
						</form>
						
						<?php
                        include("connect.php");

                        if(isset($_POST['ads']))
                        {
	                    $ads_name = $mysqli->real_escape_string($_POST['ads_name']);
	                    $ads_email = $mysqli->real_escape_string($_POST['ads_email']);
	                    $ads_contact = $mysqli->real_escape_string($_POST['ads_contact']);
	                    $ads_organisation = $mysqli->real_escape_string($_POST['ads_organisation']);
	                    $ads_msg = $mysqli->real_escape_string($_POST['ads_msg']);
						
	                   	   
		                    $insert = "insert into applyads (ads_name,ads_email,ads_contact,ads_organisation,ads_msg,ads_date)
		                    values('$ads_name','$ads_email','$ads_contact','$ads_organisation','$ads_msg',NOW())";
	   
	                        $run_insert = mysqli_query($mysqli,$insert);
		   
		                    if($run_insert)
		                    {
			                    echo "<script>alert('ThankYou For Contacting Us And We Will Be Contacting U Very Soon')</script>";
			                    echo "<script>window.open('https://www.ourmedia.in/apply_ads.php','_self')</script>";
			                    exit();
		                    }
		                }
						?>
						
						
				</div>
				
		        <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
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
