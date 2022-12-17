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
				
				    <!-- Start Of news Posts -->
				
				    <div class="box shadow postblock">
                        		
							<!-- ADS -->	
					        <div class="box shadow postblock">
			                    <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				            </div>
					        <!-- ADS --> 
					
					        <!-- Center 2 -->
					  
					        <center><h3 style="color:purple;">Post An Article About Your Event</h3></center>
					        
							<form action="insert_eventsposts.php" method="post" enctype="multipart/form-data">
							
							    
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Name</label>
                                        <input type="text" name="post_title" class="form-control" placeholder="Event Name" required="required"/>
                                    </div>
									
									<table>
								    <tr><th align="right"><strong>Category:</strong></th></tr>
									<td><select name="cat">
									    <option value="null">select a Category</option>
										<?php
										 include("connect.php");
										 
										 $get_cats = "select * from events";
										 
										 $run_cats = mysqli_query($mysqli,$get_cats);
										 
										 while ($cats_row=mysqli_fetch_array($run_cats)){
											 
											 $cat_id=$cats_row['cat_id'];
											 $cat_title=$cats_row['cat_title'];
											 
											 echo "<option value='$cat_id'>$cat_title</option>";
											 
										 } ?>
									</td></tr>
									</table>
									
									
									<div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Key Words</label>
                                        <input type="text" name="post_keywords" class="form-control" placeholder="Key Words" required="required"/>
                                    </div>
								    	
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Organiser Name</label>
                                        <input type="text" name="post_organiser" class="form-control" placeholder="Organiser Name" required="required"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Select Event Poster</label>
                                        <input type="file" name="post_image" class="form-control" />
                                    </div>
									
								    <label class="control-label" style="color:green;">Give Complete Description About Your Event</label>
									<textarea name="post_content"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'post_content' );
                                    </script>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Venue/Location</label>
                                        <input type="text" name="post_eventvenue" class="form-control" placeholder="Event Venue/Location" required="required"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Date</label>
                                        <input type="text" name="post_eventdate" class="form-control" placeholder="Event Date" required="required"/>
                                    </div>
								 
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Timings</label>
                                        <input type="text" name="post_eventtimings" class="form-control" placeholder="Event Timings" required="required"/>
                                    </div>
									
									<div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event Price</label>
                                        <input type="text" name="post_eventprice" class="form-control" placeholder="Event Price" required="required"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Event FaceBook Link</label>
                                        <input type="text" name="post_fburl" class="form-control" placeholder="Event FaceBook Link" required="required"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Organiser E-Mail</label>
                                        <input type="text" name="post_ogmail" class="form-control" placeholder="Organiser E-Mail" required="required"/>
                                    </div>
								
								    <div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Organiser Contact</label>
                                        <input type="text" name="post_ocontact" class="form-control" placeholder="Organiser Contact" required="required"/>
                                    </div>
																
								    <div class="form-group" align="center">
							            <input style="background-color:purple;color:white;" type="submit" name="submit" value="Publish" class="btn btn-default" />
							        </div>
							
					        </form>
							
							
							<?php
                            include("connect.php");
							
                            if(isset($_POST['submit']))
                            {
	                            $user = $_SESSION['user_email'];
	                            $get_user = "select * from users where user_email='$user'";
	                            $run_user = mysqli_query($mysqli,$get_user);
	                            $row = mysqli_fetch_array($run_user);
								
	                            $user_id = $row['user_id'];
								
								$post_title = $_POST['post_title'];
								$post_keywords = $_POST['post_keywords'];
	                            $post_date = date('m-d-y');
	                            $post_cat = $_POST['cat'];
	                            $post_organiser = $_POST['post_organiser'];
	                            $post_image = $_FILES['post_image']['name'];
	                            $post_image_tmp = $_FILES['post_image']['tmp_name'];
	                            $post_content = $_POST['post_content'];
	                            $post_eventvenue = $_POST['post_eventvenue'];
	                            $post_eventdate = $_POST['post_eventdate'];
	                            $post_eventtimings = $_POST['post_eventtimings'];
	                            $post_eventprice = $_POST['post_eventprice'];
	                            $post_fburl = $_POST['post_fburl'];
	                            $post_ogmail = $_POST['post_ogmail'];
	                            $post_ocontact = $_POST['post_ocontact'];
								$view = 0;
	
	                            if($post_cat=='null' OR $post_image=='null')
	                            {
		                            echo "<script>alert('Please Fill All The Details!')</script>";
		                            exit();
	                            }
	                            else
	                            {
		                            move_uploaded_file($post_image_tmp, "events_images/$post_image");
	 
	                                $notification = "insert into notifications (user_id,content,post_id,post_date,category,status)
                	                values ('$user_id','Your Post Has Been Published Successfully','$post_id',NOW(),'insertevents','unread')";
			
			                        $run = mysqli_query($mysqli,$notification);
									
	                                $insert_posts = "insert into eventsposts (user_id,category_id,post_title,post_keywords,post_date,post_organiser,post_image,post_content,post_eventvenue,post_eventdate,post_eventtimings,post_eventprice,post_fburl,post_ogmail,post_ocontact,view)
                                    values ('$user_id','$post_cat','$post_title','$post_keywords','$post_date','$post_organiser','$post_image','$post_content','$post_eventvenue','$post_eventdate','$post_eventtimings','$post_eventprice','$post_fburl','$post_ogmail','$post_ocontact','$view')";
		  
	                                if(mysqli_query($mysqli,$insert_posts))
	                                {
	                                    echo "<script>alert('Your Post Has Been Published')</script>";
										echo "<script>window.open('https://www.ourmedia.in/insert_eventsposts.php','_self')</script>";
   	                                }
									$from = "From: ourmedia_alerts@ourmedia.in";
		                            $to = $user;
		                            $subject = "OurMedia Alerts";
         
		                            $body = "$user_name Your Post Has Been Published Successfully!";
       
                                    mail($to, $subject, $body, $from);
	                            }
                            }
                            ?>
							
							
					        <!-- Center 2 -->
					
					
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