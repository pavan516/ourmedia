<center><strong style="color:purple;">STARTUPS FIELD (SHORT IMAGES)</strong></center>
	  
	            <div class="box shadow postblock">
			        
					    <form action="" method="post" enctype="multipart/form-data"><br>
				            <span style="color:purple;">Give Url Where You Want To Redirect After Clicking This Image</span> 
							<div class="form-group">
								<textarea name="startups_sidebar_url" cols="3" rows="3" class="form-control"></textarea>
						    </div>								
															
							<strong>Upload Image (215 * 78)<br></strong>
							<input type="file" name="startups_sidebar" size="20" />
									
				            <div class="form-group" align="center">
							    <input style="background-color:purple;color:white;" type="submit" name="startupssidebar" value="Upload" class="btn btn-default" />
							</div>
								     
						</form>
						
						<?php
                                include("connect.php");
								
                                if(isset($_POST['startupssidebar']))
                                {
	                                $startups_sidebar_url = $_POST['startups_sidebar_url'];
									
									$startups_sidebar = $_FILES['startups_sidebar']['name'];
	                                $post_image_tmp = $_FILES['startups_sidebar']['tmp_name'];
									
									move_uploaded_file($post_image_tmp, "ads_images/$startups_sidebar");
									
									createThumbs("ads_images/$startups_sidebar","ads_images/$startups_sidebar",215,78);
									
									$update_ads_posts = "update ads_images set startups_sidebar='$startups_sidebar', startups_sidebar_url='$startups_sidebar_url' where merchants_id='$merchants_id'";
	
	                                $run = mysqli_query($mysqli,$update_ads_posts);
									
	                                if($run)
	                                {
	                                        echo "<script>alert('Your Short add On Startups Has Been Published Successfully!')</script>";
		                                    echo"<script>window.open('merchants_admin_panel.php','_self')</script>";
   	                                }
                                }
					    ?>
	            </div>