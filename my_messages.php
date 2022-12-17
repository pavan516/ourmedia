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
					    
						<?php
                            include("connect.php");
							
                            $user = $_SESSION['user_email'];
                            $get_user = "select * from users where user_email='$user'";
                            $run_user = mysqli_query($mysqli,$get_user);
                            $row = mysqli_fetch_array($run_user);
								
                            $user_id = $row['user_id'];
						?>

                            <center><h3 style="color:purple;">See The Messages You Received:</h3></center>
 
                        <?php
                            include("connect.php");
                            mysqli_query($mysqli,"UPDATE messages SET status='read' WHERE receiver='$user_id'");
                            $sel_msg = "select * from messages where receiver='$user_id' AND status='read' order by 1 DESC";
                            $run_msg = mysqli_query($mysqli,$sel_msg);
		
		                    $count_msg = mysqli_num_rows($run_msg);
		
		                    while($row_msg=mysqli_fetch_array($run_msg))
		                    {
			                    $msg_id = $row_msg['msg_id'];
			                    $msg_receiver = $row_msg['receiver'];
			                    $msg_sender = $row_msg['sender'];
			                    $msg_topic = $row_msg['msg_topic'];
			                    $msg_date = $row_msg['msg_date'];
			
			                    $get_receiver = "select * from users where user_id='$msg_receiver'";
		                        $run_receiver = mysqli_query($mysqli,$get_receiver);
		                        $row=mysqli_fetch_array($run_receiver);
			            
						        $receiver_id = $row['user_id'];
			                    $receiver_name = $row['user_name'];
								$receiver_image = $row['user_image'];
								 
						        $encoded_receiver_id 	=	base64_encode($receiver_id);						
								
			                    $get_sender = "select * from users where user_id='$msg_sender'";
		                        $run_sender = mysqli_query($mysqli,$get_sender);
		                        $row=mysqli_fetch_array($run_sender);
			
			                    $sender_id = $row['user_id'];
								$sender_name = $row['user_name'];
								$sender_image = $row['user_image'];?>
								<?php 
						            $encoded_sender_id 	=	base64_encode($sender_id);						
							    ?>
								
								<div class="box shadow postblock"><br>
								
								    <?php echo "<a href='user_profile.php?u_id= $encoded_sender_id'>"; ?>
							        <span class="profile-pic" style="background:url('<?php echo "user_images/$sender_image"; ?>');"></span>
							        <strong><?php echo "<a style='color:red;' href='user_profile.php?u_id= $encoded_sender_id'>$sender_name</a>";?></strong>
								
								    <div class="pull-right action-btn">
							            <h5><?php echo $msg_date ?></h5> 
							        </div>
									
									<br><br><div class="text">
						                <?php echo $msg_topic ?> 
						            </div>
									
									<div class="foot" align="right">
   		                                <a style="background-color:purple;color:white;" href="message.php?u_id=<?php echo $encoded_sender_id ?>" class='btn btn-default'></i> Reply</a>
				                    </div>
						
																	
								</div>					
	                        <?php } ?>
							
														
			            <div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				        </div>
								
					</div>
					
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