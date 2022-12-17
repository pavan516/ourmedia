<?php include('myaccount_includes/header1.php'); ?>

<div class="content">
  <div class="container">
    <div class="row">
	
	
        <?php include('myaccount_includes/belowheader.php'); ?>
			
		    <div class="row">
		        <div class="col-md-4">
		        
		            <div class="col-md-16">
					    <h3 class="pullbar">
						    <i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> <?php echo $name ?>  
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
			                <center><h3 style="color:purple;">My Posts</h3></center>
				        </div>
					
					
					    <!-- Start Of Post -->
					
					    <?php
						    include("connect.php");
							
							$user = $_SESSION['user_email'];
							$get_user = "select * from users where user_email='$user'";
							$run_user = mysqli_query($mysqli,$get_user);
							$row = mysqli_fetch_array($run_user);
								
							$user_id = $row['user_id'];
																		
				            $get_posts = "select * from posts where user_id='$user_id' ORDER by 1 DESC";
						
				            $run_posts = mysqli_query($mysqli,$get_posts);
						
					        while ($row_posts = mysqli_fetch_array($run_posts))
				            {
						        $post_id = $row_posts['post_id'];
						        $user_id = $row_posts['user_id'];
						        $post_title = $row_posts['post_title'];
						        $post_date = $row_posts['post_date'];
						        $post_image = $row_posts['post_image'];
								$post_youtubeurl = $row_posts['post_youtubeurl'];
																			
						        $user = "select * from users where user_id='$user_id'";
								
						        $run_user = mysqli_query($mysqli,$user);
						        $row_user = mysqli_fetch_array($run_user);
								
						        $user_name = $row_user['user_name'];
						        $user_image = $row_user['user_image'];
							?>
							
							<?php 
						        $encoded_post_id 	=	base64_encode($post_id);
                                $encoded_user_id 	=	base64_encode($user_id);						
							?>
							
		                <div class="box shadow postblock" id="post_<?php echo $encoded_post_id; ?>">
                        
						<h5>
						    <?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
							<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
							<strong><?php echo "<a style='color:red;' href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong>
            
						</h5>	<br>
						
						<div class="text">	
							<?php echo $post_title ?>
						</div>	<br>
                        
						<?php
						if($post_image=='')
						{
						}
						else
						{
						 echo "<img src='posts_images/$post_image' />"; 
						}?>
						<?php
			            if($post_youtubeurl=='')
			            {
			            }
			            else
			            {
			            echo "<div style='position:relative; width:100%; height:0px; padding-bottom:56.25%;'>
                              <iframe style='position:absolute; left:0; top:0; width:100%; height:100%'
                              src='//www.youtube.com/embed/$post_youtubeurl' allowfullscreen=''>
                              </iframe>
                              </div>";
				
			            }
			            ?>
						                   						
                        <?php echo "
						<div class='foot' align='right'>
						    <a href='https://www.ourmedia.in/view_post.php?post_id=$encoded_post_id' class='btn btn-default'><i class='fa fa-eye'></i> View</a>
				            <a href='https://www.ourmedia.in/edit_post.php?post_id=$encoded_post_id' class='btn btn-default'><i class='fa fa-pencil'></i> Edit</a>
				            <a href='https://www.ourmedia.in/delete_post.php?post_id=$encoded_post_id' class='btn btn-default'><i class='fa fa-remove'></i> Delete</a>
		                </div>";
						?><?php include('delete_post.php'); ?>
						</div>
					<?php } ?>
					
					
				    
					</div>	
					<!-- End Of Display Posts -->
                    
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

