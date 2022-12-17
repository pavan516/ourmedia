<?php include('myaccount_includes/header.php'); ?>

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
				
				    <!-- Start Of news Post -->
				
				    <div class="box shadow postblock">
					    
						<div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				        </div>
						
						<center><h3 style="color:purple;">Edit Your Post</h3></center>
						
						<div class="box shadow postblock">
						
						<?php
							include('connect.php');
							
							if(isset($_GET['post_id']))
							{
								$get_id = base64_decode($_GET['post_id']);
								
								$get_post = "select * from startupsposts where post_id='$get_id'";
								$run_post = mysqli_query($mysqli,$get_post);
								$row= mysqli_fetch_array($run_post);
								
								$post_id = $row['post_id'];							
								$post_title = $row['post_title'];
							    $post_founder = $row['post_founder'];
							    $post_content = $row['post_content'];
								$post_fgmail = $row['post_fgmail'];
								$post_fcontact = $row['post_fcontact'];
								$post_weburl = $row['post_weburl'];
								
							}
								
							
						?>
						
						<form action="" method="post" enctype="multipart/form-data">
							
							        <div class="form-group">
                                        <label class="control-label" style="color:green;">Startup Name</label>
                                        <input type="text" name="post_title" class="form-control" value="<?php echo $post_title ?>"/>
                                    </div>
								
								    <div class="form-group">
                                        <label class="control-label" style="color:green;">Key Words</label>
                                        <input type="text" name="post_keywords" class="form-control" value="<?php echo $post_keywords ?>"/>
                                    </div>
									
								    <div class="form-group">
                                        <label class="control-label" style="color:green;">Founder Name</label>
                                        <input type="text" name="post_founder" class="form-control" value="<?php echo $post_founder ?>"/>
                                    </div>
										 
									<div class="form-group">
                                        <label class="control-label" style="color:green;">Startup Logo</label>
                                        <input type="file" name="post_image" class="form-control" />
                                    </div>
								    
								    <label class="control-label" style="color:green;">Say Everything About Your Startup</label>
									<textarea name="post_content"><?php echo $post_content ?></textarea>
                                    <script>
                                        CKEDITOR.replace( 'post_content' );
                                    </script> 
								
								    <div class="form-group">
                                        <label class="control-label" style="color:green;">Founder G-mail</label>
                                        <input type="text" name="post_fgmail" class="form-control" value="<?php echo $post_fgmail ?>"/>
                                    </div>
								    
								    <div class="form-group">
                                        <label class="control-label" style="color:green;">Founder Contact</label>
                                        <input type="text" name="post_fcontact" class="form-control" value="<?php echo $post_fcontact ?>"/>
                                    </div>
								
								    <div class="form-group">
                                        <label class="control-label" style="color:green;">Website URL</label>
                                        <input type="text" name="post_weburl" class="form-control" value="<?php echo $post_weburl ?>"/>
                                    </div>
																	
								    <div class="form-group" align="center">
							            <input style="background-color:purple;color:white;" type="submit" name="update" value="Update" class="btn btn-default" />
							        </div>
							
					        </form>
							
							<?php
                             include('connect.php');
                             if(isset($_POST['update']))
                             {
								$user_id = $_POST['user_id'];
	                            $post_id = $_POST['post_id'];								 
								$title = $_POST['post_title'];
								$post_keywords = $_POST['post_keywords'];
							    $founder = $_POST['post_founder'];
								$post_image = $_FILES['post_image']['name'];
	                            $post_image_tmp = $_FILES['post_image']['tmp_name'];
							    $content = $_POST['post_content'];
								$fgmail = $_POST['post_fgmail'];
								$fcontact = $_POST['post_fcontact'];
								$weburl = $_POST['post_weburl'];
								
								$user = "select * from users where user_id='$user_id'";
						    
						        $run_user = mysqli_query($mysqli,$user);
						        $row_user = mysqli_fetch_array($run_user);
								
						        $user_name = $row_user['user_name'];
						
								if($post_image=='')
								{
									$update_post = "update startupsposts set post_title='$title', post_keywords='$post_keywords', post_founder='$founder', post_content='$content', post_fgmail='$fgmail', post_fcontact='$fcontact', post_weburl='$weburl' where post_id='$get_id'";
	                                $run_update = mysqli_query($mysqli,$update_post);
	
	                                if($run_update)
	                                {
	                                   echo "<script>alert('Your Post Has Been Updated Successfully!')</script>";
                                       echo "<script>window.open('https://www.ourmedia.in/my_startupsposts.php','_self')</script>";
	                                }
								}
								else
								{
									
								    move_uploaded_file($post_image_tmp, "startups_images/$post_image");
	                                
									$notification = "insert into notifications (user_id,content,post_id,post_date,category,status)
                	                values ('$user_id','Successfully Updated Your Post','$post_id',NOW(),'editstartups','unread')";
			
			                        $run = mysqli_query($mysqli,$notification);
									
	                                $update_post = "update startupsposts set post_title='$title', post_keywords='$post_keywords', post_founder='$founder', post_image='$post_image', post_content='$content', post_fgmail='$fgmail', post_fcontact='$fcontact', post_weburl='$weburl' where post_id='$get_id'";
	                                $run_update = mysqli_query($mysqli,$update_post);
	
	                                if($run_update)
	                                {
	                                    echo "<script>alert('Your Post Has Been Updated Successfully!')</script>";
                                        echo "<script>window.open('https://www.ourmedia.in/my_startupsposts.php','_self')</script>";
	                                }
									$from = "From: ourmedia_alerts@ourmedia.in";
		                            $to = $user;
		                            $subject = "OurMedia Alerts";
         
		                            $body = "$user_name Successfully Updated Your Post!";
       
                                    mail($to, $subject, $body, $from);
                                } 
							 }
                            ?>
						
						</div>
						
						<div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				        </div>
							
					</div>	    
				    <!-- End Of news posts -->
                    
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

