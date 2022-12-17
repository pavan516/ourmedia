<div class="box shadow postblock">
		<br><center>FOR OFFICIAL ADS CONTACT US AT : 8520872771</br></br>
</div>

                        <div class="box shadow postblock">
                                
								<?php
								include("connect.php");
								if(isset($_GET['u_id']))
                                {
									$user_id 		=	base64_decode($_GET['u_id']);
									$select = "select * from users where user_id='$user_id'";
								
	                                $run = mysqli_query($mysqli,$select);
	                                $row = mysqli_fetch_array($run);
								
																
	                                $id = $row['user_id'];
	                                $image = $row['user_image'];
	                                $name = $row['user_name'];
	                                $contact = $row['user_contact'];
	                                $gender = $row['user_gender'];
	                                $last_login = $row['last_login'];
	                                $register_date = $row['register_date'];
	                                $user_b_day = $row['user_b_day'];
									$status = $row['status'];
								}?>
									
																
								<center><h4 style="color:purple;"><?php echo $name ?>'s Status</h4></center>
								<center><p><?php echo $status ?></p></center>
								
						</div>
						
                    <center><h3 style="color:green;"><?php echo $name ?> Profile : </h3></center>
 
                    <div class="box shadow postblock">

                                <?php
													
								
								$user_posts = "select * from posts where user_id='$user_id'";
								$run_posts = mysqli_query($mysqli,$user_posts);
								$posts = mysqli_num_rows($run_posts);
								
								$user_newsposts = "select * from newsposts where user_id='$user_id'";
								$run_newsposts = mysqli_query($mysqli,$user_newsposts);
								$newsposts = mysqli_num_rows($run_newsposts);
								
								$user_eventsposts = "select * from eventsposts where user_id='$user_id'";
								$run_eventsposts = mysqli_query($mysqli,$user_eventsposts);
								$eventsposts = mysqli_num_rows($run_eventsposts);
								
								$user_startupsposts = "select * from startupsposts where user_id='$user_id'";
								$run_startupsposts = mysqli_query($mysqli,$user_startupsposts);
								$startupsposts = mysqli_num_rows($run_startupsposts);
								
								$total = $posts+$newsposts+$eventsposts+$startupsposts;?>
								
																
								<p><?php echo $name ?>'s Posts  : <?php echo "<span style='color:purple;'>$posts</span>"; ?></p>
								<p><?php echo $name ?>'s Posts On News : <?php echo "<span style='color:purple;'>$newsposts</span>"; ?></p>
								<p><?php echo $name ?>'s Posts On Events : <?php echo "<span style='color:purple;'>$eventsposts</span>"; ?></p>
								<p><?php echo $name ?>'s Posts On Startups : <?php echo "<span style='color:purple;'>$startupsposts</span>"; ?></p>
								<p><?php echo $name ?>'s Total Posts In Our Media : <?php echo "<span style='color:purple;'>$total</span>"; ?></p>

</div>

<div class="box shadow postblock">
		<br><center>FOR OFFICIAL ADS CONTACT US AT : 8520872771</br></br>
</div>