<?php
session_start();
?>
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
			
			    <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>
				
				<div class="box shadow postblock">
							
					<center><h4 style="color:purple;">Search For A Member/Friend</h4></center>
					<form method="get" action="search_result_member.php" enctype="multipart/form-data">
						<div class="row-5">
							<div class="input-group">
                                <input type="text" class="form-control" class="search" name="search_member" placeholder="Search For A Latest Posts" aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">&nbsp;<input type="submit" name="search" value="Search" /></span>
                            </div>
						</div>
					</form>
								
				</div>
							
				<div class="box shadow postblock">
							 
							    <center><h4 style="color:purple;">Your Result</h4></center><br>
								
							    <?php
								include("connect.php");
								
								if(isset($_GET['search_member']))
			                    {
				                    $search_term = $_GET['search_member'];
									
								$get_members = "select * from users where user_name LIKE '%$search_term%' ORDER by 1 DESC";
								$run_user = mysqli_query($mysqli,$get_members);
								$count = mysqli_num_rows($run_user);
								if($count==NULL)
								{
									echo "No result";
								}
								else
								{
								while($row = mysqli_fetch_array($run_user))
								{
								
								$user_id = $row['user_id'];
								$user_name = $row['user_name'];
								$user_contact = $row['user_contact'];
								$user_gender = $row['user_gender'];
								$user_b_day = $row['user_b_day'];
								$user_image = $row['user_image'];
								$register_date = $row['register_date'];											
								
								$user_newsposts = "select * from newsposts where user_id='$user_id'";
								$run_newsposts = mysqli_query($mysqli,$user_newsposts);
								$newsposts = mysqli_num_rows($run_newsposts);
								
								$user_eventsposts = "select * from eventsposts where user_id='$user_id'";
								$run_eventsposts = mysqli_query($mysqli,$user_eventsposts);
								$eventsposts = mysqli_num_rows($run_eventsposts);
								
								$user_startupsposts = "select * from startupsposts where user_id='$user_id'";
								$run_startupsposts = mysqli_query($mysqli,$user_startupsposts);
								$startupsposts = mysqli_num_rows($run_startupsposts);
								
								$user_posts = "select * from posts where user_id='$user_id'";
								$run_posts = mysqli_query($mysqli,$user_posts);
								$posts = mysqli_num_rows($run_posts);							
								
								
								$encoded_user_id = base64_encode($user_id);						
							     
								?>									
									<div class="box shadow postblock"><br>
									
                                        <?php echo "<a href='http://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
							            <span class="profile-pic" style="background:url('<?php echo "http://ourmedia.in/user_images/$user_image"; ?>');"></span>
							            <strong><?php echo "<a style='color:red;' href='http://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong><br>
									
								        <table>
						                    <tr><td>Name </td><td><?php echo $user_name ?></td></tr>
						                    <tr><td>Contact </td><td><?php echo $user_contact ?></td></tr>
						                    <tr><td>Gender </td><td><?php echo $user_gender ?></td></tr>
						                    <tr><td>Birthday </td><td><?php echo $user_b_day ?></td></tr>
						                    <tr><td>Registered On </td><td><?php echo $register_date ?></td></tr>
											<tr><td>Posts On News </td><td><?php echo $newsposts ?></td></tr>
						                    <tr><td>Posts On events </td> : <td><?php echo $eventsposts ?></td></tr>
						                    <tr><td>Posts On startups </td> : <td><?php echo $startupsposts ?></td></tr>
						                    <tr><td>Posts On posts </td> : <td><?php echo $posts ?></td></tr>
						                </table>
								    
									
								    </div>
															
								<?php }	?>
								<?php }	?>
								<?php }	?>
							
							</div>									
							    							
	            <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>
				
					
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