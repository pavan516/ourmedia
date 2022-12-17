<center><strong style="color:purple;">EVENTS FIELD (SHORT IMAGES)</strong></center>
	  
	            <div class="box shadow postblock">
			        
					    <form action="" method="post" enctype="multipart/form-data"><br>
				            <span style="color:purple;">Give Url Where You Want To Redirect After Clicking This Image</span> 
							<div class="form-group">
								<textarea name="events_sidebar_url" cols="3" rows="3" class="form-control"></textarea>
						    </div>								
															
							<strong>Upload Image (215 * 78)<br></strong>
							<input type="file" name="events_sidebar" size="20" />
									
				            <div class="form-group" align="center">
							    <input style="background-color:purple;color:white;" type="submit" name="eventssidebar" value="Upload" class="btn btn-default" />
							</div>
								     
						</form>
						
						<?php
                                include("connect.php");
								
                                if(isset($_POST['eventssidebar']))
                                {
	                                $others_sidebar_url = $_POST['events_sidebar_url'];
									
									$events_sidebar = $_FILES['events_sidebar']['name'];
	                                $post_image_tmp = $_FILES['events_sidebar']['tmp_name'];
									
									move_uploaded_file($post_image_tmp, "ads_images/$events_sidebar");
									
									createThumbs("ads_images/$events_sidebar","ads_images/$events_sidebar",215,78);
									
									$update_ads_posts = "update ads_images set events_sidebar='$events_sidebar', events_sidebar_url='$events_sidebar_url' where merchants_id='$merchants_id'";
	
	                                $run = mysqli_query($mysqli,$update_ads_posts);
									
	                                if($run)
	                                {
	                                        echo "<script>alert('Your Short add On Events Has Been Published Successfully!')</script>";
		                                    echo"<script>window.open('merchants_admin_panel.php','_self')</script>";
   	                                }
                                }
					    ?>
	            </div>