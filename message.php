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
				
				    <?php
                            include("connect.php");

							$user = $_SESSION['user_email'];
                            $get_user = "select * from users where user_email='$user'";
                            $run_user = mysqli_query($mysqli,$get_user);
                            $row = mysqli_fetch_array($run_user);
								
                            $user_id = $row['user_id'];
								
                    ?>
					
					<?php
                            include('connect.php');
							
                            if(isset($_GET['u_id']))
                            {
    
	                            $u_id = base64_decode($_GET['u_id']);
	
                            	$sel = "select * from users where user_id='$u_id'";
	
	                            $run = mysqli_query($mysqli,$sel);
	                            $row = mysqli_fetch_array($run);
	
	                            $user_name = $row['user_name'];
	                            $user_image = $row['user_image'];
	                            $reg_date = $row['register_date'];
	
                            }

                    ?>
					
					<img style="border:2px solid blue; border-radius:5px;" src="user_images/<?php echo $user_image; ?>" width="50" height="50"/>
                    <p><strong><?php echo $user_name; ?></strong> Is A Member Of Our Media Since : <?php echo $reg_date; ?></p>	
					
				</div>
				            <?php 
						        $encoded_u_id 	=	base64_encode($u_id);				
							?>
				
				    <div class="box shadow postblock"> 
                   
				        <h3 style="color:blue;">Send A Message To <span style='color:purple;'><?php echo $user_name; ?></span></h3> 
    
	                        <form action="message.php?u_id=<?php echo $encoded_u_id ?>" method="post">
							    <textarea name="msg" cols="3" rows="3" required="required" placeholder="Message Here...." class="form-control"></textarea><br>
                                    <div class="form-group" align="right">
							            <input style="background-color:purple;color:white;" type="submit" name="message" value="Send Message" class="btn btn-default" />
							        </div>								
		                    </form>
							
							<?php
							
							if(isset($_POST['message']))
                            {
	                            $msg = $_POST['msg'];
	  
	                            $insert = "insert into messages (sender,receiver,msg_topic,reply,status,msg_date) values ('$user_id','$u_id','$msg','no_reply','unread',NOW())";
	  
	                            if(mysqli_query($mysqli,$insert))
	                            {
		                            echo "<script>alert('Message Was Sent To ". $user_name ." Successfully')</script>";
		                            echo "<script>window.open('https://www.ourmedia.in/user_profile.php?u_id=$encoded_u_id','_self')</script>";
									exit();
	                            }
	                            else
	                            {
		                            echo "<center><h2>Message Was Not Sent To ". $user_name ."</h2></center>";
	                            }
                            } 
                            ?>   
				        
					</div>
				
				</div>
						
				<!-- End Of display Posts -->	
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

