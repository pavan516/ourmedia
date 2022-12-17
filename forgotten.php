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
                       
					<center><h2 style="color:purple;">Forgotten Password ?</h2></center>
					
					<div class="box shadow postblock">
					
                        <p>Enter the e-mail address associated with your account. Click submit to have your password mailed to you.</p>
                        
						<form action="" method="post" enctype="multipart/form-data" >

                            <div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
								<input type="email" name="email" value="" id="input-email" placeholder="E-Mail Address" required="required" class="form-control">
						    </div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-contact">Contact</label>
                                <input type="text" name="contact" id="contact" data-type="contact" placeholder="contact" required="required" class="form-control">
							</div>
																					
                            <center><input style="background-color:purple;color:white;" type="submit" name="submit" value="submit" class="btn btn-default"></center>
                        						
                        </form>
						
						<?php
                        include('connect.php');
						
                        if(isset($_POST['submit']))
						{

                            $email= $_POST['email'];
							$contact = $_POST['contact'];

                            $query = mysqli_query($mysqli,"SELECT * FROM users WHERE user_email='$email' AND user_contact='$contact'");

                            while($row = mysqli_fetch_assoc($query))
                            {
                                $name = $row['user_name'];
                                $email = $row['user_email'];
                                $pass = $row['user_pass'];
                            }

                            $check_user = "select * from users where user_email='$email' AND user_contact='$contact'";

                            $run = mysqli_query($mysqli,$check_user);
	                        if(mysqli_num_rows($run)>0)
							{
	
	                            $_SESSION['email']=$email;
                                if($email==$email)
                                {
									echo "<script>alert('Your Password Is Sended To ".$email."')</script>";									
									$from = "From: ourmedia_alerts@ourmedia.in";
		                            $to = $email;
		                            $subject = "Login Information";
         
		                            $body = "Your Email is ".$email." and your Password is ".$pass."";
                                             
                                    mail($to, $subject, $body, $from);
		                            echo "<script>window.open('login.php','_self')</script>";
                                }
                            }
                            else
                            {
                                echo "<script>alert('Incorrect Email / Contact No')</script>";
                            }
                        }
                        

                        ?>
						
               
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
