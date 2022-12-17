<center><h3 style="color:green;">Latest Posts On Startups</h3></center>
					
					
					<?php
											
						include("connect.php");
						
	                    $get_posts = "SELECT * from startupsposts ORDER by 1 DESC LIMIT 0,3";
						
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
            
			                <div class="pull-right action-btn">
							
			                    <?php echo "<i class='fa fa-commenting-o'></i> <span class='hidden-xs hidden-sm'>Comments </span>";?><?php include('includes/startupscomment_count.php'); ?>&nbsp
								<?php echo "<i class='fa fa-eye'></i> <span class='hidden-xs hidden-sm'>Views </span>".$view."<hr />"; ?>
							
							</div><br><hr/>
							
							
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
						</h3><br>
						
                        <div class="text">
						    <?php echo $post_content ?> 
						</div>
						
                        <div class="foot" align="right"> 
						    <?php echo "<a href='https://www.ourmedia.in/startupsdetails.php?post=$encoded_post_id' class='btn btn-default'>Read More <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a>"; ?>
						</div>
						
                    </div>
		            
					<?php } ?>
					
					        