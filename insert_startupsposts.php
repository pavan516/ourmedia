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
					  
					        <center><h3 style="color:purple;">Post An Article About Your Startups</h3></center>
					        
							<form action="insert_startupsposts.php" method="post" enctype="multipart/form-data">
							
							        <div class="form-group">
                                        <label class="control-label" style="color:green;">Startup Name</label>
                                        <input type="text" name="post_title" class="form-control" placeholder="Startup Name" required="required"/>
                                    </div>
								
								    <table>
								    <tr><th><strong>Select Category: </strong></th></tr>
									<tr><td><select name="cat">
									    <option value="null">select a Category</option>
										<?php
										 include("connect.php");
										 
										 $get_cats = "select * from startups";
										 
										 $run_cats = mysqli_query($mysqli,$get_cats);
										 
										 while ($cats_row=mysqli_fetch_array($run_cats)){
											 
											 $cat_id=$cats_row['cat_id'];
											 $cat_title=$cats_row['cat_title'];
											 
											 echo "<option value='$cat_id'>$cat_title</option>";
											 
								        } ?></td></tr>
								    </table>
								    							
									<div class="form-group">
                                        <label class="control-label" style="color:green;">Key Words</label>
                                        <input type="text" name="post_keywords" class="form-control" placeholder="Key Words" required="required"/>
                                    </div>
									
								    <div class="form-group">
                                        <label class="control-label" style="color:green;">Founder Name</label>
                                        <input type="text" name="post_founder" class="form-control" placeholder="Founder Name" required="required"/>
                                    </div>
										 
									<div class="form-group">
                                        <label class="control-label" style="color:green;">Startup Logo</label>
                                        <input type="file" name="post_image" class="form-control" />
                                    </div>
								    
								    <label class="control-label" style="color:green;">Say Everything About Your Startup</label>
									<textarea name="post_content"></textarea>
                                    <script>
                                        CKEDITOR.replace( 'post_content' );
                                    </script> 
								
								    <div class="form-group">
                                        <label class="control-label" style="color:green;">Founder G-mail</label>
                                        <input type="text" name="post_fgmail" class="form-control" placeholder="Founder G-mail" required="required"/>
                                    </div>
								    
								    <div class="form-group">
                                        <label class="control-label" style="color:green;">Founder Contact</label>
                                        <input type="text" name="post_fcontact" class="form-control" placeholder="Founder Contact" required="required"/>
                                    </div>
								
								    <div class="form-group">
                                        <label class="control-label" style="color:green;">Website URL</label>
                                        <input type="text" name="post_weburl" class="form-control" placeholder="Website URL" required="required"/>
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
	                            
								
								$post_cat = $_POST['cat'];	                            
	                            $post_title = $_POST['post_title'];
								$post_keywords = $_POST['post_keywords'];
	                            $post_date = date('m-d-y');
								$post_founder = $_POST['post_founder'];
	                            $post_image = $_FILES['post_image']['name'];
	                            $post_image_tmp = $_FILES['post_image']['tmp_name'];
	                            $post_content = $_POST['post_content'];
	                            $post_fgmail = $_POST['post_fgmail'];
	                            $post_fcontact = $_POST['post_fcontact'];
	                            $post_weburl = $_POST['post_weburl'];
								$view = 0;
	
	                            if($post_title=='' OR $post_cat=='null' OR $post_founder=='' OR $post_image=='' OR $post_content=='' OR $post_fgmail=='' OR $post_fcontact=='' OR $post_weburl=='')
	                            {
		                            echo "<script>alert('Please Fill In all the fields')</script>";
		                            exit();
	                            }
	                            else
	                            {
		                            move_uploaded_file($post_image_tmp, "startups_images/$post_image");
	
	                               $insert_posts = "insert into startupsposts (user_id,category_id,post_title,post_keywords,post_date,post_founder,post_image,post_content,post_fgmail,post_fcontact,post_weburl,view) 
								   values('$user_id','$post_cat','$post_title','$post_keywords','$post_date','$post_founder','$post_image','$post_content','$post_fgmail','$post_fcontact','$post_weburl','$view')";
	
	                               $run = mysqli_query($mysqli,$insert_posts);
 
	                               if($run)
	                               {
	                                    echo "<script>alert('Your Post Has Been Published')</script>";
										echo "<script>window.open('https://www.ourmedia.in/insert_startupsposts.php','_self')</script>";										
   	                               }
	
	                                else
										{
	                                    echo "<script>alert('Something went wrong Please Try After Sometime!')</script>";
   	                               }
	                            }
                            }

                            ?>
							
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