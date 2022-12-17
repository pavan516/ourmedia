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
			
			   
	  
	        <!-- POSTS ON NEWS -->
	  
				<?php
						
					include("connect.php");
										
					if(isset($_GET['search']))
					{
												
						$get_query = $_GET['search_query'];
												
						$get_posts = "select * from newsposts where post_keywords like '%$get_query%'";
						
						$run_posts = mysqli_query($mysqli,$get_posts);		
												
				    						
					while ($row_posts = mysqli_fetch_array($run_posts))
				    {
						$post_id = $row_posts['post_id'];
						$user_id = $row_posts['user_id'];
						$post_title = $row_posts['post_title'];
						$post_date = $row_posts['post_date'];
						$post_author = $row_posts['post_author'];
						$post_image = $row_posts['post_image'];
						$post_content = substr($row_posts['post_content'],0,500);
						$view = $row_posts['view'];
													
						$user = "select * from users where user_id='$user_id'";
						
						$run_user = mysqli_query($mysqli,$user);
						$row_user = mysqli_fetch_array($run_user);
								
						$user_name = $row_user['user_name'];
						$user_image = $row_user['user_image'];
						 
						    if(!isset($_SESSION['user_email']))
                            {
                    
                            }
			                else
			                {
					            
							$user = $_SESSION['user_email'];
					        $get_user = "select * from users where user_email='$user'";
					        $run_user = mysqli_query($mysqli,$get_user);
					        $row = mysqli_fetch_array($run_user);
								
					        $logged_in_user_id = $row['user_id'];
							
                            $count_posts_like_unlike = mysqli_query($mysqli,"select * from like_unlike_newsposts where post_id='$post_id'");
		                    $total_like_this_post = mysqli_num_rows($count_posts_like_unlike);
								 
						    $logged_in_user_like_post	=	 mysqli_query($mysqli,"select * from like_unlike_newsposts where post_id='$post_id' AND user_id='$logged_in_user_id'");
						    $total_like_this_post_by_logged_in_user = mysqli_num_rows($logged_in_user_like_post);
							}						
																										
				?>
		            <div class="box shadow postblock">
                        
						<h5>
						    <?php echo "<a href='user_profile.php?u_id=$user_id'>"; ?>
							<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
							<strong><?php echo "<a style='color:red;' href='user_profile.php?u_id=$user_id'>$user_name</a>";?></strong>
            
			                <?php include('news/like_Comment_view_news.php'); ?>
							
							
                            <p>
							    <strong style='color:grey;'>Posted By :</strong> <?php echo "$post_author";  ?> | 
								<strong style='color:grey;'>Posted On :</strong> <?php echo "$post_date"; ?>
							</p><hr />
							
						</h5>	
						
						<h3>	
							<?php echo "<a style='color:purple;'href='details.php?post=$post_id'>$post_title</a>"; ?>
						</h3>	
                        
						
						 <?php echo "<img src='news_images/$post_image' width='520' height='300' />"; ?>
						
                        <div class="text">
						    <?php echo $post_content ?> 
						</div>
						
                        <div class="foot" align="right"> 
						    <?php echo "<a href='details.php?post=$post_id' class='btn btn-default'>Read More <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a>"; ?>
						</div>
						
                    </div>
		            
					<?php } ?>
					<?php } ?>
					
					<!-- END OF NEWS POSTS -->
					
					
					<!-- EVENTS POSTS -->
					
					
					
					<?php
											
						include("connect.php");
											
						if(isset($_GET['search']))
						{
												
							$get_query = $_GET['search_query'];
												
						    $get_posts = "select * from eventsposts where post_keywords like '%$get_query%'";
						
						    $run_posts = mysqli_query($mysqli,$get_posts);
						
						while ($row_posts = mysqli_fetch_array($run_posts))
						{
						$post_id = $row_posts['post_id'];
						$user_id = $row_posts['user_id'];
						$post_title = $row_posts['post_title'];
						$post_date = $row_posts['post_date'];
						$post_organiser = $row_posts['post_organiser'];
						$post_image = $row_posts['post_image'];
						$post_content = substr($row_posts['post_content'],0,300);
						$post_subcont = $row_posts['post_subcont'];
						$post_eventvenue = $row_posts['post_eventvenue'];
						$post_eventdate = $row_posts['post_eventdate'];
						$post_eventtimings = $row_posts['post_eventtimings'];
						$post_eventprice = $row_posts['post_eventprice'];
						$post_fburl = $row_posts['post_fburl'];
						$post_ogmail = $row_posts['post_ogmail'];
						$post_ocontact = $row_posts['post_ocontact'];
						$view = $row_posts['view'];
													
						$user = "select * from users where user_id='$user_id'";
						
						$run_user = mysqli_query($mysqli,$user);
						$row_user = mysqli_fetch_array($run_user);
								
						$user_name = $row_user['user_name'];
						$user_image = $row_user['user_image'];
						
                            if(!isset($_SESSION['user_email']))
                            {
                    
                            }
			                else
			                {
					            
							$user = $_SESSION['user_email'];
					        $get_user = "select * from users where user_email='$user'";
					        $run_user = mysqli_query($mysqli,$get_user);
					        $row = mysqli_fetch_array($run_user);
								
					        $logged_in_user_id = $row['user_id'];
							
                                $count_posts_like_unlike = mysqli_query($mysqli,"select * from like_unlike_eventsposts where post_id='$post_id'");
		                        $total_like_this_post = mysqli_num_rows($count_posts_like_unlike);
								 
						        $logged_in_user_like_post	=	 mysqli_query($mysqli,"select * from like_unlike_eventsposts where post_id='$post_id' AND user_id='$logged_in_user_id'");
						        $total_like_this_post_by_logged_in_user = mysqli_num_rows($logged_in_user_like_post);
							}
						
		            ?>
					
					
					<div class="box shadow postblock">
                        
						<h5>
						    <?php echo "<a href='user_profile.php?u_id=$user_id'>"; ?>
							<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
							<strong><?php echo "<a style='color:red;' href='user_profile.php?u_id=$user_id'>$user_name</a>";?></strong>
            
			                <?php include('events/like_Comment_view_events.php'); ?>
							
							
                            <p>
							    <strong style='color:grey;'>Posted By :</strong> <?php echo "$post_organiser";  ?> | 
								<strong style='color:grey;'>Posted On :</strong> <?php echo "$post_date"; ?>
							</p><hr />
							
						</h5>	
						
						<h3>	
							<?php echo "<a style='color:purple;'href='eventsdetails.php?post=$post_id'>$post_title</a>"; ?>
						</h3>	
                        
						<h3>
						    <?php echo "<img src='events_images/$post_image' width='500' height='300' />"; ?>
						</h3>
						
                        <div class="text">
						    <?php echo $post_content ?> 
						</div>
						
                        <div class="foot" align="right"> 
						    <?php echo "<a href='eventsdetails.php?post=$post_id' class='btn btn-default'>Read More <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a>"; ?>
						</div>
						
                    </div>
		            
					<?php } ?>
					<?php } ?>
					
					<!-- END OF EVENTS POSTS -->
					
					
					<!-- STARTUPS POSTS -->
					
					
					
					<?php
											
						include("connect.php");
											
						if(isset($_GET['search']))
						{
												
							$get_query = $_GET['search_query'];
												
						    $get_posts = "select * from startupsposts where post_keywords like '%$get_query%'";
						
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
							$post_subcont = $row_posts['post_subcont'];
							$post_entreprenuer = $row_posts['post_entreprenuer'];
							$post_fgmail = $row_posts['post_fgmail'];
							$post_fcontact = $row_posts['post_fcontact'];
							$post_weburl = $row_posts['post_weburl'];
							$view = $row_posts['view'];
													
							$user = "select * from users where user_id='$user_id'";
							
							$run_user = mysqli_query($mysqli,$user);
							$row_user = mysqli_fetch_array($run_user);
								
							$user_name = $row_user['user_name'];
							$user_image = $row_user['user_image'];  
							
								if(!isset($_SESSION['user_email']))
                                {
                    
                                }
			                    else
			                    {
					            $user = $_SESSION['user_email'];
					            $get_user = "select * from users where user_email='$user'";
					            $run_user = mysqli_query($mysqli,$get_user);
					            $row = mysqli_fetch_array($run_user);
								
					            $logged_in_user_id = $row['user_id'];
                                
								    $count_posts_like_unlike = mysqli_query($mysqli,"select * from like_unlike_startupsposts where post_id='$post_id'");
		                            $total_like_this_post = mysqli_num_rows($count_posts_like_unlike);
								 
						            $logged_in_user_like_post	=	 mysqli_query($mysqli,"select * from like_unlike_startupsposts where post_id='$post_id' AND user_id='$logged_in_user_id'");
						            $total_like_this_post_by_logged_in_user = mysqli_num_rows($logged_in_user_like_post);
             					}
													
				    ?>
					
					
					<div class="box shadow postblock">
                        
						<h5>
						    <?php echo "<a href='user_profile.php?u_id=$user_id'>"; ?>
							<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
							<strong><?php echo "<a style='color:red;' href='user_profile.php?u_id=$user_id'>$user_name</a>";?></strong>
            
			                <?php include('startups/like_comment_view_startups.php'); ?>
							
							
                            <p>
							    <strong style='color:grey;'>Posted By :</strong> <?php echo "$post_founder";  ?> | 
								<strong style='color:grey;'>Posted On :</strong> <?php echo "$post_date"; ?>
							</p><hr />
							
						</h5>	
						
						<h3>	
							<?php echo "<a style='color:purple;'href='startupsdetails.php?post=$post_id'>$post_title</a>"; ?>
						</h3>	
                        
						<h3>
						    <?php echo "<img src='startups_images/$post_image' width='500' height='300' />"; ?>
						</h3>
						
                        <div class="text">
						    <?php echo $post_content ?> 
						</div>
						
                        <div class="foot" align="right"> 
						    <?php echo "<a href='startupsdetails.php?post=$post_id' class='btn btn-default'>Read More <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a>"; ?>
						</div>
						
                    </div>
		            
					<?php } ?>
					<?php } ?>
					
					
					<!-- END OF STARTUPS POSTS -->
					
					
					
					
					
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
