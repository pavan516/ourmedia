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
				
				    <!-- Start Of news Post -->
				
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
																	
						$get_posts = "select * from startupsposts where user_id='$user_id' order by 1 DESC";
						
						$run_posts = mysqli_query($mysqli,$get_posts);
						
						while ($row_posts = mysqli_fetch_array($run_posts))
						{
							$post_id = $row_posts['post_id'];
							$user_id = $row_posts['user_id'];
						    $post_title = $row_posts['post_title'];
							$post_date = $row_posts['post_date'];
							$post_founder = $row_posts['post_founder'];
							$post_image = $row_posts['post_image'];
							$post_content = substr($row_posts['post_content'],0,500);
							$post_fgmail = $row_posts['post_fgmail'];
							$post_fcontact = $row_posts['post_fcontact'];
							$post_weburl = $row_posts['post_weburl'];
							$view = $row_posts['view'];
							
							$user = "select * from users where user_id='$user_id'";
							
                                $count_posts_like_unlike = mysqli_query($mysqli,"select * from like_unlike_startupsposts where post_id='$post_id'");
		                        $total_like_this_post = mysqli_num_rows($count_posts_like_unlike);
								 
						        $logged_in_user_like_post	=	 mysqli_query($mysqli,"select * from like_unlike_startupsposts where post_id='$post_id' AND user_id='$user_id'");
						        $total_like_this_post_by_logged_in_user = mysqli_num_rows($logged_in_user_like_post);
															
							$run_user = mysqli_query($mysqli,$user);
							$row_user = mysqli_fetch_array($run_user);
								
							$user_name = $row_user['user_name'];
							$user_image = $row_user['user_image'];
													
				    ?>
					
					
					<div class="box shadow postblock">
                        
						<h5>
						    <?php 
						        $encoded_post_id 	=	base64_encode($post_id);
                                $encoded_user_id 	=	base64_encode($user_id);						
							?>
						    <?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
							<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
							<strong><?php echo "<a style='color:red;' href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong>
            
			                <?php include('startups/like_comment_view_startups.php'); ?>
							
							
                            <p>
							    <strong style='color:grey;'>Posted By :</strong> <?php echo "$post_founder";  ?> | 
								<strong style='color:grey;'>Posted On :</strong> <?php echo "$post_date"; ?>
							</p><hr />
							
						</h5>	
						
						<h3>	
							<?php echo "<a style='color:purple;'href='https://www.ourmedia.in/startupsdetails.php?post=$encoded_post_id'>$post_title</a>"; ?>
						</h3>	
                        
						<h3>
						    <?php echo "<img src='startups_images/$post_image' width='500' height='300' />"; ?>
						</h3>
						
                        <div class="text">
						    <?php echo $post_content ?> 
						</div>
						
                        <?php echo "
						<div class='foot' align='right'>
   		                    <a href='https://www.ourmedia.in/startupsdetails.php?post=$encoded_post_id' class='btn btn-default'><i class='fa fa-eye'></i> View</a>
				            <a href='https://www.ourmedia.in/editstartups_post.php?post_id=$encoded_post_id' class='btn btn-default'><i class='fa fa-pencil'></i> Edit</a>
				            <a href='https://www.ourmedia.in/deletestartups_post.php?post_id=$encoded_post_id' class='btn btn-default'><i class='fa fa-remove'></i> Delete</a>
		                </div>";
						?><?php include('deletestartups_post.php'); ?>
						
                    </div>
		            
					<?php } ?>
						
						
						
						
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