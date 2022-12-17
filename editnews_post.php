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
							
					        <div class="box shadow postblock">
							<center><h3 style="color:purple;">Edit Your Post</h3></center>
							</div>
							
							<?php
							include('connect.php');
							if(isset($_GET['post_id']))
							{
								$get_id = base64_decode($_GET['post_id']);
								
								$get_post = "select * from newsposts where post_id='$get_id'";
								$run_post = mysqli_query($mysqli,$get_post);
								$row= mysqli_fetch_array($run_post);
								
								$post_title = $row['post_title'];
							    $post_keywords = $row['post_keywords'];
							    $post_author = $row['post_author'];
								$post_alt = $row['post_alt'];
								$post_content = $row['post_content'];
								
							}
						    ?>
							
							
					        <div class="box shadow postblock">
							
							    <form action="" method="post" enctype="multipart/form-data">
							
							        <div class="form-group">
                                        <label class="control-label" style="color:green;">Title Name</label>
                                        <input type="text" name="post_title" class="form-control" value="<?php echo "$post_title"; ?>"/>
                                    </div>
									
									<div class="form-group">
                                        <label class="control-label" style="color:green;">Key Words</label>
                                        <input type="text" name="post_keywords" class="form-control" value="<?php echo "$post_keywords"; ?>"/>
                                    </div>
									
									<div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Author Name</label>
                                        <input type="text" name="post_author" class="form-control" value="<?php echo "$post_author"; ?>"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" style="color:green;">Select Image</label>
                                        <input type="file" name="post_image" class="form-control" />
                                    </div>	

                                    <div class="form-group">
                                        <label class="control-label" style="color:green;">Give Name For Image</label>
                                        <input type="text" name="post_alt" class="form-control" value="<?php echo "$post_alt"; ?>" />
                                    </div>

									<label class="control-label" style="color:green;">Complete Content</label>
									<textarea name="post_content"><?php echo "$post_content"; ?></textarea>
                                    <script>
                                        CKEDITOR.replace( 'post_content' );
                                    </script>   
                    									
								
									<div class="form-group" align="center">
							            <input style="background-color:purple;color:white;" type="submit" name="update" value="Update" class="btn btn-default" />
							        </div>
									
							    </form>
								
								<!-- php Code For Above Form -->
								
								<?php
                                include('connect.php');
							    
								if(isset($_POST['update']))
                                {
									$title = $_POST['post_title'];
									$keywords = $_POST['post_keywords'];
							        $author = $_POST['post_author'];
							        $image = $_FILES['post_image']['name'];
	                                $image_tmp = $_FILES['post_image']['tmp_name'];
									$alt = $_POST['post_alt'];
									$content = $_POST['post_content'];
							        
								if($image=='')
								{
									$run_update = mysqli_query($mysqli,"UPDATE newsposts SET post_title='$title', post_keywords='$keywords', post_author='$author', post_alt='$alt', post_content='$content' WHERE post_id='$get_id'");
									
									if($run_update)
	                                {
	                                echo "<script>alert('Your Post Has Been Updated Successfully!')</script>";
                                    echo "<script>window.open('https://www.ourmedia.in/my_newsposts.php','_self')</script>";
	                                }
									else
									{
	                                echo "<script>alert('unsuccessfull!')</script>";
                                    echo "<script>window.open('https://www.ourmedia.in/my_newsposts.php','_self')</script>";
	                                }
								}
								else
								{
								 
								    move_uploaded_file($image_tmp, "news_images/$image"); 
	
	                                $run_update = mysqli_query($mysqli,"UPDATE newsposts SET post_title='$title', post_keywords='$keywords', post_author='$author', post_image='$image', post_alt='$alt', post_content='$content' WHERE post_id='$get_id'");
									
	                                if($run_update)
	                                {
	                                    echo "<script>alert('Your Post Has Been Updated Successfully!')</script>";
                                        echo "<script>window.open('https://www.ourmedia.in/my_newsposts.php','_self')</script>";
	                                }
								}
                            }
							
                            
							?>
								
								<!-- End Of php Code For Above Form -->
					
					        </div>
					
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