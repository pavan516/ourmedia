<?php include('myaccount_includes/header.php'); ?>

<div class="content">
  <div class="container">
    <div class="row">
	
	
        <?php include('myaccount_includes/belowheader.php'); ?>
			
		    <div class="row">
		        <div class="col-md-4">				
		            <div class="col-md-16">
					    <h3 class="pullbar">
						    <i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> About Me  
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
				
				    <!-- Start Of news Post -->
				
				    <div class="box shadow postblock">
					    
						<div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				        </div>
						
						<div class="box shadow postblock">
						
						    <div class="box shadow postblock">
			                   <center><h3 style="color:purple;">Edit Your Post</h3></center>
				            </div>
						
						    <?php
							include('connect.php');
							if(isset($_GET['post_id']))
							{
								$get_id = base64_decode($_GET['post_id']);
								
								$get_post = "select * from eventsposts where post_id='$get_id'";
								$run_post = mysqli_query($mysqli,$get_post);
								$row= mysqli_fetch_array($run_post);
								
																
								$post_id = $row['post_id'];
								$user_id = $row['user_id'];
							    $post_title = $row['post_title'];
								$post_keywords = $row['post_keywords'];
							    $post_organiser = $row['post_organiser'];
							    $post_content = $row['post_content'];
								$post_eventvenue = $row['post_eventvenue'];
								$post_eventdate = $row['post_eventdate'];
								$post_eventtimings = $row['post_eventtimings'];
								$post_eventprice = $row['post_eventprice'];
								$post_fburl = $row['post_fburl'];
								$post_ogmail = $row['post_ogmail'];
								$post_ocontact = $row['post_ocontact'];
								
								$user = "select * from users where user_id='$user_id'";
						    
						        $run_user = mysqli_query($mysqli,$user);
						        $row_user = mysqli_fetch_array($run_user);
								
						        $user_name = $row_user['user_name'];
						
							}
								
							
						    ?>
							
							<form action="" method="post" enctype="multipart/form-data">
							
							        <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Name</label>
                                        <input type="text" name="post_title" class="form-control" value="<?php echo $post_title ?>"/>
                                    </div>
									
									<div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Key Words</label>
                                        <input type="text" name="post_keywords" class="form-control" value="<?php echo $post_keywords ?>"/>
                                    </div>
								    	
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Organiser Name</label>
                                        <input type="text" name="post_organiser" class="form-control" value="<?php echo $post_organiser ?>"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Select Event Poster</label>
                                        <input type="file" name="post_image" class="form-control" />
                                    </div>
									
								    <label class="control-label" style="color:green;">Give Complete Description About Your Event</label>
									<textarea name="post_content"><?php echo $post_content ?></textarea>
                                    <script>
                                        CKEDITOR.replace( 'post_content' );
                                    </script>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Venue/Location</label>
                                        <input type="text" name="post_eventvenue" class="form-control" value="<?php echo $post_eventvenue ?>"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Date</label>
                                        <input type="text" name="post_eventdate" class="form-control" value="<?php echo $post_eventdate ?>"/>
                                    </div>
								 
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Timings</label>
                                        <input type="text" name="post_eventtimings" class="form-control" value="<?php echo $post_eventtimings ?>"/>
                                    </div>
									
									<div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Price</label>
                                        <input type="text" name="post_eventprice" class="form-control" value="<?php echo $post_eventprice ?>"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event FaceBook Link</label>
                                        <input type="text" name="post_fburl" class="form-control" value="<?php echo $post_fburl ?>"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Organiser E-Mail</label>
                                        <input type="text" name="post_ogmail" class="form-control" value="<?php echo $post_ogmail ?>"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Organiser Contact</label>
                                        <input type="text" name="post_ocontact" class="form-control" value="<?php echo $post_ocontact ?>"/>
                                    </div>
								
								
								    <div class="form-group" align="center">
							            <input style="background-color:purple;color:white;" type="submit" name="update" value="Update" class="btn btn-default" />
							        </div>
							
					        </form>
							
							
							<?php
                            include('connect.php');
							
                            if(isset($_POST['update']))
                            { 								 
								$title = $_POST['post_title'];
								$post_keywords = $_POST['post_keywords'];
							    $organiser = $_POST['post_organiser'];
								$image = $_FILES['post_image']['name'];
	                            $image_tmp = $_FILES['post_image']['tmp_name'];
							    $content = $_POST['post_content'];
								$eventvenue = $_POST['post_eventvenue'];
								$eventdate = $_POST['post_eventdate'];
								$eventtimings = $_POST['post_eventtimings'];
								$eventprice = $_POST['post_eventprice'];
								$fburl = $_POST['post_fburl'];
								$ogmail = $_POST['post_ogmail'];
								$ocontact = $_POST['post_ocontact'];
								 
	                            if($image=='')
								{
									$update_post = "update eventsposts set post_title='$title', post_keywords='$post_keywords', post_organiser='$organiser', post_content='$content', post_eventvenue='$eventvenue', post_eventdate='$eventdate', post_eventtimings='$eventtimings', post_eventprice='$eventprice',post_fburl='$fburl', post_ogmail='$ogmail', post_ocontact='$ocontact' where post_id='$get_id'";
	                                $run_update = mysqli_query($mysqli,$update_post);
	
	                                if($run_update)
	                                {
	                                    echo "<script>alert('Your Post Has Been Updated Successfully!')</script>";
                                        echo "<script>window.open('https://www.ourmedia.in/my_eventsposts.php','_self')</script>";
	                                }
								}
								else
								{
								
								    move_uploaded_file($image_tmp, "events_images/$image"); 
									
								    $notification = "insert into notifications (user_id,content,post_id,post_date,category,status)
                	                values ('$user_id','Successfully updated Your Post','$post_id',NOW(),'editevents','unread')";
			
			                        $run = mysqli_query($mysqli,$notification);
									
	                                $update_post = "update eventsposts set post_title='$title', post_keywords='$post_keywords', post_organiser='$organiser',post_image='$image', post_content='$content', post_eventvenue='$eventvenue', post_eventdate='$eventdate', post_eventtimings='$eventtimings', post_eventprice='$eventprice',post_fburl='$fburl', post_ogmail='$ogmail', post_ocontact='$ocontact' where post_id='$get_id'";
	                                $run_update = mysqli_query($mysqli,$update_post);
	
	                                if($run_update)
	                                {
	                                    echo "<script>alert('Your Post Has Been Updated Successfully!')</script>";
                                        echo "<script>window.open('https://www.ourmedia.in/userhome.php','_self')</script>";
	                                }
									$from = "From: ourmedia_alerts@ourmedia.in";
		                            $to = $user;
		                            $subject = "OurMedia Alerts";
         
		                            $body = "$user_name Someone has commented on your post!";
       
                                    mail($to, $subject, $body, $from);
                                }
								
							}
                            ?>
							
						
						</div>
						
						<div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				        </div>
							
					</div>	    
				    <!-- End Of news posts -->
                    
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

