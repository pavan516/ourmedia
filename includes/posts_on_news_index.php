<center><h3 style="color:green;">Latest Posts On News</h3></center>

<link rel="stylesheet" href="includes/style.css">
 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59569f6b033fdcb5"></script>

		

				
				
				<?php
					include("connect.php");
										
	                $get_posts = "SELECT * from newsposts where post_newstatus='approved' ORDER by 1 DESC LIMIT 0,3";
	                                        
                    $run_posts = mysqli_query($mysqli,$get_posts);
				    
						
					while ($row_posts = mysqli_fetch_array($run_posts))
				    {
						$post_id = $row_posts['post_id'];
						$user_id = $row_posts['user_id'];
						$post_title = $row_posts['post_title'];
						$post_date = $row_posts['post_date'];
						$post_author = $row_posts['post_author'];
						$post_image = $row_posts['post_image'];
						$post_alt = $row_posts['post_alt'];
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
						    <?php 
						        $encoded_post_id 	=	base64_encode($post_id);
                                $encoded_user_id 	=	base64_encode($user_id);						
							?>
							
						    <?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
							<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
							<strong><?php echo "<a style='color:red;' href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong>
            
			                <?php include('news/like_Comment_view_news.php'); ?>						
							
                            <p>
							    <strong style='color:grey;'>Posted By :</strong> <?php echo "$post_author";  ?> | 
								<strong style='color:grey;'>Posted On :</strong> <?php echo "$post_date"; ?>
								
							</p>
								<hr />
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox"></div>
							
						</h5>	
						
						<h3>	
							<?php echo "<a style='color:purple;'href='https://www.ourmedia.in/details.php?post=$encoded_post_id'>$post_title</a>"; ?>
							


						</h3>


                        
						<?php 
						if($post_image=='')
						{
						}
						else{
						  echo "<img src='news_images/$post_image' alt='$post_alt' width='520' height='300' />"; 
						}?><br>
						
                        <div class="text">
						    <?php echo $post_content ?> 
						</div>
						
                        <div class="foot" align="right"> 
						    <?php echo "<a href='https://www.ourmedia.in/details.php?post=$encoded_post_id' class='btn btn-default'>Read More <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a>"; ?>
						</div>
						
                    </div>
		            
					<?php } ?>


								