<?php include('myaccount_includes/header.php'); ?>

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
				
				    <!-- Start Of news Posts -->
				
				    <div class="box shadow postblock">
                        		
							<!-- ADS -->	
					        <div class="box shadow postblock">
			                    <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				            </div>
					        <!-- ADS --> 
					  
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
							 
							   						
							    <?php
								include("connect.php");
								
								$get_members = "select * from users ORDER by 1 DESC ";
								$run_user = mysqli_query($mysqli,$get_members);
								while($row = mysqli_fetch_array($run_user))
								{
								
								$user_id = $row['user_id'];
								$user_name = $row['user_name'];
								$user_contact = $row['user_contact'];
								$user_gender = $row['user_gender'];
								$user_b_day = $row['user_b_day'];
								$user_image = $row['user_image'];
								$register_date = $row['register_date'];?>												
								
								
								<h5>
						            <?php 
						                $encoded_user_id 	=	base64_encode($user_id);						
							        ?> 
    								<?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
							        <span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
							        <strong><?php echo "<a style='color:red;' href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong>
									
								    <div class="pull-right action-btn">
		                               	<?php echo "<b>Gender : $user_gender </b>"; ?> 
		                            </div>
									
								</h5><br>
															
								<?php }	?>
							
							</div>
					
					        <!-- ADS -->	
					        <div class="box shadow postblock">
			                    <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				            </div>
					        <!-- ADS --> 
					
					
					</div>	
						
					<!-- End Of insert into Posts -->
                    
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