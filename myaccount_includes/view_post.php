<!-- Display Posts -->
	<br>				
	<?php
	
	include("connect.php");
    if(isset($_GET['post_id']))
    {
		$get_id = base64_decode($_GET['post_id']);
								
		$get_posts = "select * from posts where post_id='$get_id'";
						
		$run_posts = mysqli_query($mysqli,$get_posts);
						
		$row_posts = mysqli_fetch_array($run_posts);
	    
		    $post_id = $row_posts['post_id'];
			$encoded_post_id 	=	base64_encode($post_id);
			$user_id = $row_posts['user_id'];
			$post_title = $row_posts['post_title'];
			$post_date = $row_posts['post_date'];
			$post_image = $row_posts['post_image'];
			$post_youtubeurl = $row_posts['post_youtubeurl'];
																											
				    
				$encoded_user_id 	=	base64_encode($user_id);
				
				echo "<a href='user_profile.php?u_id=$encoded_user_id'>"; ?>
				<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
				<strong><?php echo "<a style='color:red;' href='user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong><br><br>
            
			<?php
			if($post_image=='')
			{
			}
			else
			{?>
				<div class="text">	
				    <?php echo $post_title ?>
			    </div><br>
				
			<?php } ?>
                        
			<?php
			if($post_image=='')
			{
			}
			else
			{
			    echo    "<a href='posts_images/$post_image' ><img src='posts_images/$post_image'/></a>"; 
				
			}
			?><br>
			
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
			
	<?php } ?><br>

	            <button id="menu2" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> View Who Liked
									<span class="caret"></span></button><br>
                									
	            <?php include('connect.php');
				
		        $get_posts = "select * from like_unlike_posts where post_id='$get_id'";
						
		        $run_posts = mysqli_query($mysqli,$get_posts);
						
		        while($row_posts = mysqli_fetch_array($run_posts))
				{
					$user_id = $row_posts['user_id'];
								        
					$user = "select * from users where user_id='$user_id'";
					$run_user = mysqli_query($mysqli,$user);
			        $row_user = mysqli_fetch_array($run_user);
								
			        $user_name = $row_user['user_name'];
			        $user_image = $row_user['user_image'];
								
					$encoded_user_id 	=	base64_encode($user_id);?>
					
							
				<div class="dropdown-menu test" role="menu1" aria-labelledby="menu1"><br>&nbsp
					<?php 
					echo "<a href='user_profile.php?u_id=$encoded_user_id'>"; ?>
				          <span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
				          <strong><?php echo "<a style='color:red;' href='user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong><br><br>
				</div>	
				<?php } ?>
					
				<br><h4 style='color:purple;'>View All Comments :</h4><br>                									
	            <?php include('connect.php');
				
		        $get_posts = "select * from post_comments where post_id='$get_id'";
						
		        $run_posts = mysqli_query($mysqli,$get_posts);
				$count = mysqli_num_rows($run_posts);
				if($count==0)
				{
					echo "<b style='color:purple;'>No Comments To Display</b>";
				}
				else
				{						
		        while($row_posts = mysqli_fetch_array($run_posts))
				{
					$id = $row_posts['post_id'];
					$encoded_id 	=	base64_encode($id);
					$user_id = $row_posts['user_id'];
					$comment = $row_posts['comment'];
					
			        $select = "select * from post_comments where id='$id'";
	                $run_select = mysqli_query($mysqli,$select);
	                $row = mysqli_fetch_array($run_select);
	
	                $post_id = $row['post_id'];
		            $encoded_post_id 	=	base64_encode($post_id);
					
					$user = "select * from users where user_id='$user_id'";
					$run_user = mysqli_query($mysqli,$user);
			        $row_user = mysqli_fetch_array($run_user);
								
			        $user_name = $row_user['user_name'];
			        $user_image = $row_user['user_image'];
								
					$encoded_user_id 	=	base64_encode($user_id);?>
					
							
				    <div class="box shadow postblock"><br>
					<?php 
					echo "<a href='user_profile.php?u_id=$encoded_user_id'>"; ?>
				          <span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
				          <strong><?php echo "<a style='color:red;' href='user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong><br><br>
						  
                          &nbsp&nbsp<?php echo "$comment"; ?>
				    </div>
				<?php } ?>
                <?php } ?>		