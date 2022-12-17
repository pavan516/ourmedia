<?php include('myaccount_includes/header1.php'); ?>


<div class="content">
  <div class="container">
    <div class="row">	
	
        <?php include('myaccount_includes/belowheader.php'); ?>
			
		    <div class="row">
		        <div class="col-md-4">				
		            <div class="col-md-16">
					    <h3 class="pullbar">
						    <i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> About Me  
							<span style="float:right; margin-right: 10px;">Online Users&nbsp
						    <i class="fa fa-angle-left" onclick="$('.col-right').slideToggle();" style="float:right; margin-right: 10px;"></i></span>
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
					
					    <div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				        </div>
					    
						<div class="box shadow postblock">
						
						    <?php
								include("connect.php");
								$user = $_SESSION['user_email'];
								$get_user = "select * from users where user_email='$user'";
								$run_user = mysqli_query($mysqli,$get_user);
								$row = mysqli_fetch_array($run_user);
								
								$user_id = $row['user_id'];
								$user_name = $row['user_name'];
								$user_email = $row['user_email'];
								$user_contact = $row['user_contact'];
								$user_b_day = $row['user_b_day'];
								$user_gender = $row['user_gender'];
								
                                								
						    ?>
						
					    <form action="" method="post" enctype="multipart/form-data">
					   
					        <div class="form-group">
                                <label class="control-label" for="input-UserName">User Name</label>
                                <input type="text" name="u_name" class="form-control" value="<?php echo $user_name ?>"/>
                            </div>
						
						    <div class="form-group">
                                <label class="control-label" for="input-E-Mail">Contact</label>
                                <input type="tel" name="u_contact" class="form-control" value="<?php echo $user_contact ?>"/>
                            </div>
						
						    <div class="form-group">
                                <label class="control-label" for="input-Password">Date Of Birth</label>
                                <input type="date" name="u_birthday" class="form-control" data-type="password" value="<?php echo $user_b_day ?>" />
                            </div>
					              
															
				
							<div class="form-group" align="center">
							    <input style="background-color:purple;color:white;" type="submit" name="update" value="Edit / Update" class="btn btn-default" />
							</div>
					
					    </form>
						
						    <?php
                            include("connect.php");
 
                            if(isset($_POST['update']))
                            {
	                            $u_name = $_POST['u_name'];
	                            $u_contact = $_POST['u_contact'];
	                            $u_birthday = $_POST['u_birthday'];
								
								if(isset($_GET['user_id']))
							    {
								    $get_id = base64_decode($_GET['user_id']);	
	                                $notification = "insert into notifications (user_id,content,post_id,post_date,category,status)
                	                values ('$user_id','Successfully Updated Your Details','$post_id',NOW(),'editdetails','unread')";
			
			                        $run = mysqli_query($mysqli,$notification);
									
	                                $update = "update users set user_name='$u_name',user_contact='$u_contact',user_b_day='$u_birthday' where user_id='$get_id'";
	
	                                $run = mysqli_query($mysqli,$update);
	   
	                                if($run)
	                                {
		                                echo "<script>alert('Your Details Are Updated Successfully!')</script>";
		                                echo "<script>window.open('https://www.ourmedia.in/userhome.php','_self')</script>";
	                                }
									$from = "From: ourmedia_alerts@ourmedia.in";
		                            $to = $user;
		                            $subject = "OurMedia Alerts";
         
		                            $body = "$user_name Successfully Updated Your Details!";
       
                                    mail($to, $subject, $body, $from);
	                            }
                            }


                            ?>
					    
						</div>
					
					    <div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
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

<?php include('myaccount_includes/footer.php'); ?>