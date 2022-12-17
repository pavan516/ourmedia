<?php include('myaccount_includes/header1.php'); ?>

<div class="content">
  <div class="container">
    <div class="row">
	
        <?php include('myaccount_includes/belowheaderuser.php'); ?>
		    <?php
			    $user = $_SESSION['user_email'];
				$get_user = "select * from users where user_email='$user'";
				$run_user = mysqli_query($mysqli,$get_user);
				$row = mysqli_fetch_array($run_user);
								
				$logged_in_user_id = $row['user_id'];  
            ?>        				
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
                            <?php include('myaccount_includes/left_sidebar_user.php'); ?>
		                </div>
		            </div>				
				</div>
				
		        <div class="col-md-8">
				
				    		
				<!-- display posts -->

				<div class="box shadow postblock">
				
				    <div class="box shadow postblock">
			            <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				    </div>	
				
				    <div class="box shadow postblock">
					
					
				<?php
	
	            include("connect.php");
						
				if(isset($_GET['u_id']))
                {
	                $user_id = base64_decode($_GET['u_id']);
	
	                $select = "select * from posts where user_id='$user_id' order by 1 DESC";
						
		            $run_posts = mysqli_query($mysqli,$select);
						
		            while ($row_posts = mysqli_fetch_array($run_posts))
	                {
			            $post_id = $row_posts['post_id'];
			            $user_id = $row_posts['user_id'];
			            $post_title = $row_posts['post_title'];
			            $post_date = $row_posts['post_date'];
			            $post_image = $row_posts['post_image'];
                        $post_youtubeurl = $row_posts['post_youtubeurl'];							
							
			            $user = "select * from users where user_id='$user_id'";
								
					        $count_posts_like_unlike = mysqli_query($mysqli,"select * from like_unlike_posts where post_id='$post_id'");
		                    $total_like_this_post = mysqli_num_rows($count_posts_like_unlike);
								 
						        $logged_in_user_like_post	=	 mysqli_query($mysqli,"select * from like_unlike_posts where post_id='$post_id' AND user_id='$logged_in_user_id'");
						        $total_like_this_post_by_logged_in_user = mysqli_num_rows($logged_in_user_like_post);
								
							        $count_posts_comments = mysqli_query($mysqli,"select * from post_comments where post_id='$post_id'");
		                            $total_comment_for_this_post = mysqli_num_rows($count_posts_comments);
								
			            $run_user = mysqli_query($mysqli,$user);
			            $row_user = mysqli_fetch_array($run_user);
								
			            $user_name = $row_user['user_name'];
			            $user_image = $row_user['user_image'];
	
	            ?>
							
		        <div class="box shadow postblock">
                        
			    <h5>
				    <?php 
						$encoded_user_id 	=	base64_encode($user_id);
					?>
					<?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
					<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
					<strong><?php echo "<a style='color:red;' href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong>
                </h5><br>
						
			    <div class="text">	
				    <?php echo $post_title ?>
			    </div><br>
                        
			    <?php
			    if($post_image=='')
			    {
			    }
			    else
			    {
			        echo    "<a href='posts_images/$post_image' ><img src='posts_images/$post_image'/></a>"; 
				}
			    ?>
				
				<?php
			if($post_youtubeurl=='')
			{
			}
			else
			{
			    echo   "<div style='position:relative; width:100%; height:0px; padding-bottom:56.25%;'>
                            <iframe style='position:absolute; left:0; top:0; width:100%; height:100%'
                                src='//www.youtube.com/embed/$post_youtubeurl' allowfullscreen=''>
                            </iframe>
                        </div>";
				
			}?>	
				
            <div class="foot" align="left" class="post-action">
								
				<?php
					
					$post_owner_id 				=	$user_id;
					$encoded_post_id			=	base64_encode($post_id);
										
					if($total_like_this_post_by_logged_in_user>0)
					{
					    $thump_direction_class	=	'fa fa-thumbs-o-down';
					    $text		=	'Unlike';
					}
					else
					{
						$thump_direction_class	=	'fa fa-thumbs-o-up';
						$text		=	'Like';
					}
								
				?>
								 
								
				<a href="javascript:void(0)" class="btn btn-default" class="" onclick="like_button('<?php echo $encoded_post_id; ?>');" >
				    <i id="thumps_icon_<?php echo  $post_id; ?>" class="<?php echo $thump_direction_class; ?>"></i> 
					<span id="total_like_post_<?php echo  $post_id; ?>"><?php echo $text.' '.$total_like_this_post; ?></span>
				</a> 
							
				<a href="javascript:void" class="btn btn-default" id="see_more_button_<?php echo  $post_id; ?>" onclick="more_comments('<?php echo $encoded_post_id; ?>');" >
				    <i class="fa fa-commenting-o"></i>
					    Comments  
					<span id="total_comment_post_<?php echo  $post_id; ?>"><?php echo $total_comment_for_this_post; ?></span>
				</a>
								
			<div>
									
									
			<table id="table_comment_<?php echo  $post_id; ?>" class="table_data">
										
				<?php
										
					$comment_array = mysqli_query($mysqli,"select * from post_comments where post_id='$post_id' ORDER BY `id` DESC limit 1  ");
					while ($row_comments = mysqli_fetch_array($comment_array))
					{
												
						$user_id 	=	$row_comments['user_id'];
						$get_user = "select * from users where user_id='$user_id'";
						$run_user = mysqli_query($mysqli,$get_user);
						$row = mysqli_fetch_array($run_user);
												
						$user_image	=	$row['user_image'];
				
				?>
														
				<tr>
					<td width="10%">
						<a href="https://www.ourmedia.in/user_profile.php?u_id=<?php echo $encoded_user_id ?>"><span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>'); padding: 15px; border-radius: 50%;"></span></i></a>
					</td>
												
					<td width="100%">
						<?php 
							echo '<b><a href="https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id" > '.ucfirst($row['user_name']).' </a></b><br>';
							echo ucfirst($row_comments['comment']);
						?>
					</td>
				</tr>
											
				<?php } ?>
				
			</table>
									
			</div><br />
			
			
			<?php
				$user = $_SESSION['user_email'];
				$get_user = "select * from users where user_email='$user'";
				$run_user = mysqli_query($mysqli,$get_user);
				$row = mysqli_fetch_array($run_user);
								
				$image = $row['user_image'];
				
		    ?>
								
				<a href="https://www.ourmedia.in/user_profile.php?u_id=<?php echo $encoded_user_id ?>"><span class="profile-pic" style="background:url('<?php echo "user_images/$image"; ?>'); padding: 15px; border-radius: 50%;"></span></i></a>
				<input type="text" id="comment_<?php echo  $post_id; ?>" placeholder="Write a comment..." class="input" style="width:280px;height:30px;margin-left:10px;" rel="<?php echo  $encoded_post_id; ?>" />
			</div>
		</div>
			
			<?php } ?>
			<?php } ?>
							
				    </div>
					
					<div class="box shadow postblock">
			            <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				    </div>	
				
				
				</div>
						
				<!-- End Of display Posts -->	
				
				
				
					
		        </div>
		    </div>
        </div>
	    <script type="text/javascript" src="js/user_function.js" /></script>
        <div class="col-md-3 col-right">
	        <div class="box shadow postblock">
                <?php include('myaccount_includes/right_sidebar.php'); ?>
		    </div>
		</div>
		
    </div>
  </div>
</div>

<?php include('myaccount_includes/footer.php'); ?>

