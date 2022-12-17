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
							<center><h3 style="color:purple;">Publish Your Article</h3></center>
							</div>
							
					        <div class="box shadow postblock">
							
							    <form action="insert_newsposts.php" method="post" enctype="multipart/form-data">
							
							        <div class="form-group">
                                        <label class="control-label" style="color:green;">Title Name</label>
                                        <input type="text" name="post_title" class="form-control" placeholder="Post Title" required="required"/>
                                    </div>
									
									<table>
							        <tr><th><strong style="color:green;">Select Category: </strong></th></tr>
									<tr><td><select name="cat">
									    <option value="null">select a Category</option>
										<?php
										 include("connect.php");
										 
										 $get_cats = "select * from news";
										 
										 $run_cats = mysqli_query($mysqli,$get_cats);
										 
										 while ($cats_row=mysqli_fetch_array($run_cats)){
											 
											 $cat_id=$cats_row['cat_id'];
											 $cat_title=$cats_row['cat_title'];
											 
											 echo "<option value='$cat_id'>$cat_title</option>";
											 
										 } ?></td></tr>
										 </table>
									
									<div class="form-group"><br>
                                        <label class="control-label" style="color:green;">Author Name</label>
                                        <input type="text" name="post_author" class="form-control" placeholder="Post Author" required="required"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" style="color:green;">Select Image</label>
                                        <input type="file" name="post_image" class="form-control" />
                                    </div>	

                                    <div class="form-group">
                                        <label class="control-label" style="color:green;">Give Name For Image</label>
                                        <input type="text" name="post_alt" class="form-control" placeholder="Give Name For Image" />
                                    </div>

									<label class="control-label" style="color:green;">Complete Content</label>
									<textarea name="post_content"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'post_content' );
                                    </script>   

                                    <div class="form-group">
                                        <label class="control-label" style="color:green;">Key Words</label>
                                        <input type="text" name="post_keywords" class="form-control" placeholder="Key Words" required="required"/>
                                    </div>									
								
									<div class="form-group" align="center">
							            <input style="background-color:purple;color:white;" type="submit" name="submit" value="Publish" class="btn btn-default" />
							        </div>
									
							    </form>
								
								<!-- php Code For Above Form -->
								
								<?php
                                include("connect.php");
							
                                if(isset($_POST['submit']))
                                {
	                            $user = $_SESSION['user_email'];
	                            $get_user = "select * from users where user_email='$user'";
	                            $run_user = mysqli_query($mysqli,$get_user);
	                            $row = mysqli_fetch_array($run_user);
								
	                            $user_id = $row['user_id'];
	
	                            $post_cat = $_POST['cat'];
	                            $post_title = $_POST['post_title'];
								$post_keywords = $_POST['post_keywords'];
	                            $post_date = date('m-d-y');
	                            $post_author = $_POST['post_author'];
	                            $post_image = $_FILES['post_image']['name'];
	                            $post_image_tmp = $_FILES['post_image']['tmp_name'];
								$post_alt = $_POST['post_alt'];
	                            $post_content = $_POST['post_content'];
	                            $post_newstatus ='unapprove';
								$view = 0;
	
	                            if($post_cat=='null')
								{
									echo "<script>alert('Please Selaect Any Category!')</script>";
								}
								else
								{
		                        move_uploaded_file($post_image_tmp, "news_images/$post_image");
	
	                            $insert_posts = "insert into newsposts (user_id,category_id,post_title,post_keywords,post_date,post_author,post_image,post_alt,post_content,post_newstatus,view)
                	            values ('$user_id','$post_cat','$post_title','$post_keywords','$post_date','$post_author','$post_image','$post_alt','$post_content','$post_newstatus','$view')";
	
	                                $run = mysqli_query($mysqli,$insert_posts);
	 
	                                if($run)
	                                {
	                                    echo "<script>alert('Your Post Will Be Approved And Published Within An Hour! Thank You!')</script>";
		                                echo"<script>window.open('https://www.ourmedia.in/insert_newsposts.php','_self')</script>";
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