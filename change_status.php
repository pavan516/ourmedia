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
					
					    <div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				        </div>
					    
						<div class="box shadow postblock">
						
					    <form action="" method="post" enctype="multipart/form-data">
					
					        <strong>Change/Upload Status : </strong>
						    <input type="text" name="status" size="40" placeholder="Change/Upload Status" required="required"/>	<br><br>

							
							<div class="form-group" align="center">
							    <input style="background-color:purple;color:white;" type="submit" name="update" value="Change/Upload" class="btn btn-default" />
							</div>
					
					    </form>
						
						    <?php
                                include('connect.php');
							
                                if(isset($_POST['update']))
                                {
									$status = $_POST['status'];
	                               	
                                        if(isset($_GET['user_id']))
							            {
								            $get_id = base64_decode($_GET['user_id']);	
											$query = "select * from users where user_id ='$get_id'"; 
										    $run_query = mysqli_query($mysqli,$query);
										    while ($row_posts = mysqli_fetch_array($run_query))
	                                        {
			                                $user_email = $row_posts['user_email'];
                                            $user_name = $row_posts['user_name'];
											
											$notification = "insert into notifications (user_id,content,post_id,post_date,category,status)
                	                        values ('$logged_in_user_id','Successfully Changed Your Status','$post_id',NOW(),'changestatus','unread')";
			
			                                $run = mysqli_query($mysqli,$notification);	
											
							                $update_post = "update users set status='$status' where user_id='$get_id'";
	                                        $run_update = mysqli_query($mysqli,$update_post);
	
	                                        if($run_update)
	                                        {
	                                            echo "<script>alert('Your Status Is Changed Successfully!')</script>";
                                                echo "<script>window.open('userhome.php','_self')</script>";
	                                        }
											$from = "From: ourmedia_alerts@ourmedia.in";
		                                    $to = $user_email;
		                                    $subject = "OurMedia Alerts";
         
		                                    $body = "$user_name Someone has commented on your post!";
       
                                            mail($to, $subject, $body, $from);
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