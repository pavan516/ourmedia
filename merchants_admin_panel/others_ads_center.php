<?php include('merchants_admin_panel/function.php'); ?>	
		    
			    <center><strong style="color:purple;">ALL OTHER FIELDS (LONG IMAGES)</strong></center>
	  
	            <div class="box shadow postblock">
			        
					    <form action="" method="post" enctype="multipart/form-data"><br>
				            <span style="color:purple;">Give Url Where You Want To Redirect After Clicking This Image</span> 
							<div class="form-group">
								<textarea name="others_center_url" cols="3" rows="3" class="form-control"></textarea>
						    </div>								
															
							<strong>Upload Image (494 * 66)<br></strong>
							<input type="file" name="others_center" size="20" />
									
				            <div class="form-group" align="center">
							    <input style="background-color:purple;color:white;" type="submit" name="others" value="Upload" class="btn btn-default" />
							</div>
								     
						</form>
						
						<?php
                                include("connect.php");
												
                                if(isset($_POST['others']))
                                {
	                                $others_center_url = $_POST['others_center_url'];
									
									$others_center = $_FILES['others_center']['name'];
	                                $post_image_tmp = $_FILES['others_center']['tmp_name'];
									
									move_uploaded_file($post_image_tmp, "ads_images/$others_center");
									
									createThumbs("ads_images/$others_center","ads_images/$others_center",494,66);
									
									$update_ads_posts = "update ads_images set others_center='$others_center', others_center_url='$others_center_url' where merchants_id='$merchants_id'";
	
	                                $run = mysqli_query($mysqli,$update_ads_posts);
									
	                                if($run)
	                                {
	                                        echo "<script>alert('Your Long add On Others Has Been Published Successfully!')</script>";
		                                    echo"<script>window.open('merchants_admin_panel.php','_self')</script>";
   	                                }
                                }

                                ?>
										
	            </div>