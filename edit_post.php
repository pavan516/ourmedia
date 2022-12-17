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
					
					    			
					
					    <!-- Edit Of Post -->
					  
					    <?php
							include('connect.php');
							if(isset($_GET['post_id']))
							{
								$get_id = base64_decode($_GET['post_id']);
								
								$get_post = "select * from posts where post_id='$get_id'";
								$run_post = mysqli_query($mysqli,$get_post);
								$row= mysqli_fetch_array($run_post);
								
								$user_id = $row['user_id'];
								$post_title = $row['post_title'];
								$post_image = $row['post_image'];
								$post_youtubeurl = $row['post_youtubeurl'];
								
								$user = "select * from users where user_id='$user_id'";
								
						        $run_user = mysqli_query($mysqli,$user);
						        $row_user = mysqli_fetch_array($run_user);
								
						        $user_name = $row_user['user_name'];
						        
								
							}
						?>
						
						    <?php 
						        
                                $encoded_user_id 	=	base64_encode($user_id);						
							?>
					    
						    <?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
						    <span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
							<strong><?php echo "<a style='color:red;' href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong><br><br>
						
						        <span style="color:purple;">Edit Your Post!</span> 
						   
					        <form action="" method="post" enctype="multipart/form-data">
							
							    <div class="form-group">
								    <textarea name="post_title" cols="3" rows="3" class="form-control" ><?php echo $post_title ?></textarea>
								</div>								
																
								<strong>Change Image :(If U Want To Change)<br></strong>
								<input type="file" name="post_image" size="20" value="<?php echo $post_image ?>"/>
									
							    <div class="form-group" align="center">
							        <input style="background-color:purple;color:white;" type="submit" name="update" value="Update" class="btn btn-default" />
							    </div>
								
								<div class="form-group">
								    <textarea name="post_youtubeurl" cols="1" rows="1" class="form-control" ><?php echo $post_youtubeurl ?></textarea>
								</div>
								     
								</form>
								
								<?php
                                include('connect.php');
							
                                if(isset($_POST['update']))
                                {
	                                $post_title = $_POST['post_title'];
									$post_youtubeurl = $_POST['post_youtubeurl'];
								    $post_image = $_FILES['post_image']['name'];
	                                $post_image_tmp = $_FILES['post_image']['tmp_name'];
	                            
								    if($post_image=='')
									{
										$notification = "insert into notifications (user_id,content,post_id,post_date,category,status)
                	                    values ('$user_id','Successfully Updated your post','$post_id',NOW(),'editposts','unread')";
			
			                            $run = mysqli_query($mysqli,$notification);
			
                                        $update_post = "update posts set post_title='$post_title', post_youtubeurl='$post_youtubeurl' where post_id='$get_id'";
	                                    $run_update = mysqli_query($mysqli,$update_post);
	
	                                    if($run_update)
	                                    {
	                                        echo "<script>alert('Your Post Has Been Updated Successfully!')</script>";
                                            echo "<script>window.open('https://www.ourmedia.in/my_posts.php','_self')</script>";
	                                    }
                                        $from = "From: ourmedia_alerts@ourmedia.in";
		                                $to = $user;
		                                $subject = "OurMedia Alerts";
         
		                                $body = "$user_name Successfully Updated your post!";
       
                                        mail($to, $subject, $body, $from);										
	                                }
									else
									{
										
		                                move_uploaded_file($post_image_tmp, "posts_images/$post_image");
									
									    $notification = "insert into notifications (user_id,content,post_id,post_date,category,status)
                	                    values ('$user_id','Successfully Updated your post','$post_id',NOW(),'editposts','unread')";
			
			                            $run = mysqli_query($mysqli,$notification);
									
							            $update_post = "update posts set post_title='$post_title', post_image='$post_image', post_youtubeurl='$post_youtubeurl' where post_id='$get_id'";
	                                    $run_update = mysqli_query($mysqli,$update_post);
	
	                                    if($run_update)
	                                    {
	                                        echo "<script>alert('Your Post Has Been Updated Successfully!')</script>";
                                            echo "<script>window.open('my_posts.php','_self')</script>";
	                                    }
										$from = "From: ourmedia_alerts@ourmedia.in";
		                                $to = $user;
		                                $subject = "OurMedia Alerts";
         
		                                $body = "$user_name Successfully Updated your post!";
       
                                        mail($to, $subject, $body, $from);
                                    }
								}
								
                                ?>
					
				        <!-- End Of edit of Posts -->
						
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

