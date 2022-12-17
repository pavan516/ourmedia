    <div class="box shadow postblock">
		<br><center>FOR OFFICIAL ADS CONTACT US AT : 8520872771</br></br>
    </div> 
									
									
	<center><h2 style="color:green;">Latest Posts</h2></center><br>
	
	<!-- Side Posts on Events -->

    											
	<?php
											
		include("connect.php");
											
		$get_posts = "select * from eventsposts order by 1 DESC LIMIT 0,5";
						
		$run_posts = mysqli_query($mysqli,$get_posts);
						
		while ($row_posts = mysqli_fetch_array($run_posts))
		{
			$post_id = $row_posts['post_id'];
			$post_title = $row_posts['post_title'];
			$post_date = $row_posts['post_date'];
			$post_image = $row_posts['post_image'];
			
	?>
	
	                        <?php 
						        $encoded_post_id 	=	base64_encode($post_id);
                                					
							?>
	
	    <div class="box shadow postblock">										
											
			<p style='font-size:80%;color:purple;'><?php echo " Posted On : $post_date"; ?></p>
			<?php echo "<a style='font-size:120%;color:purple;' href='https://www.ourmedia.in/eventsdetails.php?post=$encoded_post_id'>$post_title </a>"; ?><br><br>
			<?php if($post_image=='')
			{
			}
			else
			{?>
				<center><?php echo "<img src='events_images/$post_image' width='250' height='150''/>"; ?></center>
			<?php } ?>
									                                          
        </div>
											
	<?php } ?>
											
	<!-- End Of Side Posts on Events -->
																
												
	<!-- Side Posts on startups -->
											
	<div class="box shadow postblock">
		<br><center>FOR OFFICIAL ADS CONTACT US AT : 8520872771</br></br>
    </div>										
											
	<?php
											
		include("connect.php");
											
		$get_posts = "select * from startupsposts order by 1 DESC LIMIT 0,5";
						
		$run_posts = mysqli_query($mysqli,$get_posts);
						
		while ($row_posts = mysqli_fetch_array($run_posts))
		{
			$post_id = $row_posts['post_id'];
			$post_title = $row_posts['post_title'];
			$post_date = $row_posts['post_date'];
			$post_image = $row_posts['post_image'];
			
	?>                      
	                        <?php 
						        $encoded_post_id 	=	base64_encode($post_id);
                                						
							?>
											
		<div class="box shadow postblock">										
											
			<p style='font-size:80%;color:purple;'><?php echo " Posted On : $post_date"; ?></p>
			<?php echo "<a style='font-size:120%;color:purple;' href='https://www.ourmedia.in/startupsdetails.php?post=$encoded_post_id'>$post_title </a>"; ?><br><br>
			<?php if($post_image=='')
			{
			}
			else
			{?>
			<center><?php echo "<img src='startups_images/$post_image' width='250' height='150''/>"; ?></center>
			<?php } ?>
									                                          
        </div>

	<?php } ?>
											
											
	<!-- End Of side posts on Startups -->
											
	<!-- side posts on news -->
									
	<?php
											
		include("connect.php");
											
		$get_posts = "select * from newsposts where post_newstatus='approved' order by 1 DESC LIMIT 0,5";
						
		$run_posts = mysqli_query($mysqli,$get_posts);
						
		while ($row_posts = mysqli_fetch_array($run_posts))
		{
			$post_id = $row_posts['post_id'];
			$post_title = $row_posts['post_title'];
			$post_date = $row_posts['post_date'];
			$post_author = $row_posts['post_author'];
			$post_image = $row_posts['post_image'];
			$post_content = substr($row_posts['post_content'],0,150);
													
	?>
		
                            <?php 
						        $encoded_post_id 	=	base64_encode($post_id);
                                					
							?>
		
        <div class="box shadow postblock">										
											
			<p style='font-size:80%;color:purple;'><?php echo " Posted On : $post_date"; ?></p>
			<?php echo "<a style='font-size:120%;color:purple;' href='https://www.ourmedia.in/details.php?post=$encoded_post_id'>$post_title </a>"; ?><br><br>
			<?php if($post_image=='')
			{
			}
			else
			{?>
			<center><?php echo "<img src='news_images/$post_image' width='250' height='150''/>"; ?></center>
			<?php } ?>
									                                          
        </div>
										
	<?php } ?>
	
	<!-- End Of side posts on news -->

    <div class="box shadow postblock">
		<br><center>FOR OFFICIAL ADS CONTACT US AT : 8520872771</br></br>
    </div>	

	