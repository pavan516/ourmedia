<?php include('merchants_admin_panel/function.php'); ?>	
		    
			    <center><strong style="color:purple;">USER PROFILE FIELD (LONG IMAGES)</strong></center>
	  
	            <div class="box shadow postblock">
			        
					    <form action="" method="post" enctype="multipart/form-data"><br>
				            <span style="color:purple;">Give Url Where You Want To Redirect After Clicking This Image</span> 
							<div class="form-group">
								<textarea name="userprofile_center_url" cols="3" rows="3" class="form-control"></textarea>
						    </div>								
															
							<strong>Upload Image (494 * 66)<br></strong>
							<input type="file" name="userprofile_center" size="20" />
									
				            <div class="form-group" align="center">
							    <input style="background-color:purple;color:white;" type="submit" name="userprofile" value="Upload" class="btn btn-default" />
							</div>
								     
						</form>
						
						<?php
                                include("connect.php");
												
                                if(isset($_POST['userprofile']))
                                {
	                                $userprofile_center_url = $_POST['userprofile_center_url'];
									
									$userprofile_center = $_FILES['userprofile_center']['name'];
	                                $post_image_tmp = $_FILES['userprofile_center']['tmp_name'];
									
									move_uploaded_file($post_image_tmp, "ads_images/$userprofile_center");
									
									createThumbs("ads_images/$userprofile_center","ads_images/$userprofile_center",494,66);
									
									$update_ads_posts = "update ads_images set userprofile_center='$userprofile_center', userprofile_center_url='$userprofile_center_url' where merchants_id='$merchants_id'";
	
	                                $run = mysqli_query($mysqli,$update_ads_posts);
									
	                                if($run)
	                                {
	                                        echo "<script>alert('Your Long add On Userprofile Has Been Published Successfully!')</script>";
		                                    echo"<script>window.open('merchants_admin_panel.php','_self')</script>";
   	                                }
                                }

                                ?>
										
	            </div>