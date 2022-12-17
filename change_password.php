<?php include('myaccount_includes/header1.php'); ?>

<div class="content">
  <div class="container">
    <div class="row">	
	
        <?php include('myaccount_includes/belowheader.php'); ?>
			
		    <div class="row">
		        <div class="col-md-4">				
		            <div class="col-md-16">
					    <h3 class="pullbar">
						    <i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> About Me  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Online Users
						    <i class="fa fa-angle-left" onclick="$('.col-right').slideToggle();" style="float:right; margin-right: 10px;"></i>
						</h3>
					</div>
					
					<div class="col-md-16 col-left">
	                    <div class="box shadow postblock">
                            <?php include('myaccount_includes/left_sidebar.php'); ?>
		                </div>
		            </div>				
				</div>
				
				<div class="col-md-8">
				
				    <div class="box shadow postblock">
				    
					    <center><h3 style="color:purple;">Change Your Password</h3></center>
					
					    <div class="box shadow postblock">
						
					    <form action="" method="post" enctype="multipart/form-data">

						    <div class="form-group">
                                <label class="control-label" for="input-email">Registered Email Address</label>
								<input type="email" name="email" placeholder="Registered Email Address" required="required" class="form-control">
						    </div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-password">Old Password</label>
                                <input type="password" name="pass" placeholder="Old password" required="required" class="form-control">
							</div>
							
							<div class="form-group">
                                <label class="control-label" for="input-password">New Password</label>
                                <input type="text" name="newpass" placeholder="New password" required="required" class="form-control">
							</div>
							
							<div class="form-group">
                                <label class="control-label" >Confirm New Password</label>
                                <input type="text" name="confirmpass" placeholder="confirm password" required="required" class="form-control">
							</div>
							
							<center><input style="background-color:purple;color:white;" type="submit" name="change" value="Change Password" class="btn btn-default"></center>
                        
						</form>
						<?php
								include("connect.php");
								
								$user = $_SESSION['user_email'];
								$get_user = "select * from users where user_email='$user'";
								$run_user = mysqli_query($mysqli,$get_user);
								$row = mysqli_fetch_array($run_user);
								
								$logged_in_user_id = $row['user_id'];
								$user_id = $row['user_id'];
								$user_name = $row['user_name'];
								$user_image = $row['user_image'];
								
						    ?>
						<?php
                        include('connect.php');
                        if(isset($_POST['change']))
                        {
                            $email = $_POST['email'];
		                    $pass = $_POST['pass'];
                            $newpass = $_POST['newpass'];
							$confirmpass = $_POST['confirmpass'];
        	
                            $result = mysqli_query($mysqli,"SELECT * FROM users WHERE user_email='$email'");
							if(mysqli_num_rows($result)>0)
							{
							 	while($row = mysqli_fetch_array($result))
							    {
								    $user_pass = $row['user_pass'];
								}	
									if($user_pass == $pass)
									{
										if($newpass==$confirmpass)
		                                {
								            $sql=mysqli_query($mysqli,"UPDATE users SET user_pass='$newpass' where user_email='$email'");
                                            if($sql)
                                            {
                                                echo "<script>alert('Congratulations You have successfully changed your password')</script>";
                                            }
											$from = "From: ourmedia_alerts@ourmedia.in";
		                                    $to = $user;
		                                    $subject = "OurMedia Alerts";
         
		                                    $body = "$user_name SucessFullY Changed Your Password!";
       
                                             mail($to, $subject, $body, $from);
										}
										else if($newpass!=$confirmpass)
										{
											echo "<script>alert('Password Mismatch!')</script>";
										}
									}
									else if ($user_pass!= $pass)
									{
										echo "<script>alert('Old Password Is Wrong!')</script>";
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
        </div>
	 
        <div class="col-md-3 col-right">
	        <div class="box shadow postblock">
                <?php include('myaccount_includes/right_sidebar.php'); ?>
		    </div>
		</div>
		
    </div>
  </div>
</div>
<script type="text/javascript" src="js/user_function.js" /></script>

<?php include('myaccount_includes/footer.php'); ?>
					