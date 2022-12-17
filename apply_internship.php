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

<title itemprop="name">OurMedia - Internship | Apply For Internship In OurMedia</title>
<meta name="description" content="Apply For Internship In OurMedia | We Provide a great opportunities to the interns in ourmedia, We create a great platform to the interns To Expo there talent and skills" />
<meta name="keywords" content="internship, ourmedia internship, apply internship in ourmedia, get intern in ourmedia, how to get intern in ourmdia,interns in ourmedia, ourmedia, ourmedia events, ourmedia startups, events, startups, technology , sports, movies, entertainment, news, hacking, mobiles, love quotes, novels, college events, college summits, dj events, promotional events,  fund raising events, startups, NGO" /> 

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
	            
				    <center><h3 style="color:purple;">Apply For Internship In OurMedia</h3></center>
					
					    <form action="" method="post" enctype="multipart/form-data">

						    <div class="form-group">
                                <label class="control-label" for="input-name">Name</label>
								<input type="text" name="intern_name" placeholder="Your Name" required="required" class="form-control">
						    </div>
							
							<div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
								<input type="email" name="intern_email" placeholder="E-Mail Address" required="required" class="form-control">
						    </div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-contact">Contact</label>
                                <input type="text" name="intern_contact" placeholder="Contact" required="required" class="form-control">
							</div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-name">Your Skills</label>
								<input type="text" name="intern_skills" placeholder="Your Skills" required="required" class="form-control">
						    </div>

                            <div class="form-group">
                                <label class="control-label" for="input-name">Write A Sample Article On Any Topic</label><br>
								<textarea name="intern_content" rows="10" cols="40" required="required" placeholder="Write A Sample Article On Any Topic"></textarea>
						    </div>	

                            <div class="form-group">
                                <label class="control-label" >Gender</label>
				                <input type = "radio" name = "intern_gender" value = "male" checked = "male" requred="required">Male
                                <input type = "radio" name = "intern_gender" value = "female" requred="required" >Female
				                <input type = "radio" name = "intern_gender" value = "other" requred="required">Other
						    </div>
						
						    <div class="form-group">
                                <label class="control-label" >Date Of Birth</label>
					            <input type="date" name="intern_birthday" class="form-control" requred="required">
						    </div>
						
						    <div class="form-group">
                                <label class="control-label" >Select Your Image</label>
					            <input type="file" name="intern_image" class="form-control" requred="required">
						    </div>							

							<center><input style="background-color:purple;color:white;" type="submit" name="intern" value="submit" class="btn btn-default"></center>
                        
						</form>
						
						<?php
                        include("connect.php");

                        if(isset($_POST['intern']))
                        {
	                    $intern_name = $mysqli->real_escape_string($_POST['intern_name']);
	                    $intern_email = $mysqli->real_escape_string($_POST['intern_email']);
	                    $intern_contact = $mysqli->real_escape_string($_POST['intern_contact']);
	                    $intern_skills = $mysqli->real_escape_string($_POST['intern_skills']);
	                    $intern_content = $mysqli->real_escape_string($_POST['intern_content']);
						$intern_gender = $mysqli->real_escape_string($_POST['intern_gender']);
	                    $intern_birthday = $mysqli->real_escape_string($_POST['intern_birthday']);
	                    $intern_image = $_FILES['intern_image']['name'];
	                    $image_tmp = $_FILES['intern_image']['tmp_name'];
	                    
	   
	                    $get_email = "select * from internship where intern_email='$intern_email'";
	                    $run_email = mysql_query($get_email);
	                    $check = mysql_num_rows($run_email);
	   
	                    if($check==1)
	                    {
		                    echo "<script>alert('This email is already Applied For Internship!')</script>";
		                    exit();
	                    }
	   
	                        	   
	                    else
	                    {
              		   	    move_uploaded_file($image_tmp,"internship_images/$intern_image");   
								   
		                    $insert = "insert into internship (intern_name,intern_email,intern_contact,intern_skills,intern_content,intern_gender,intern_birthday,intern_image,intern_date)
		                    values('$intern_name','$intern_email','$intern_contact','$intern_skills','$intern_content','$intern_gender','$intern_birthday','$intern_image',NOW())";
	   
	                        $run_insert = mysqli_query($mysqli,$insert);
		   
		                    if($run_insert)
		                    {
			                    echo "<script>alert('ThankYou For Applying Internship In OurMedia!')</script>";
			                    echo "<script>window.open('https://www.ourmedia.in/apply_internship.php','_self')</script>";
			                    exit();
		                    }
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
