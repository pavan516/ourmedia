<?php include('myaccount_includes/header2.php'); ?>

<div class="content">
  <div class="container">
    <div class="row">	
	
        <?php include('myaccount_includes/belowheader.php'); ?>
			
		    <div class="row">
		        <div class="col-md-4">				
		            <div class="col-md-16">
					    <h3 class="pullbar">
						    <i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> About Me  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Online Users
						    <i class="fa fa-angle-left" onclick="$('.col-right').slideToggle();" style="float:right; margin-right: 10px;"></i>
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
					
					        <!-- Center 1 -->
					
					        <div class="box shadow postblock">
					            
								<center><h3 style="color:purple;">Instructions To Publish An Article</h3></center>							
							    <ul>
							        <li>Give A Appropriate Title For Your Post.</li>
							        <li>Select A Category</li>
                                    <li>Please Write Your Full Name.</li>
                                    <li>Select A Image With Respective to Your Article If Nedded.</li>
                                    <li>Main Content Goes Here</li> 
                                    <li>Sub Content Goes Here</li>
                                    <li>Any Advantages/Disadvantages or Sub Content.</li>							
							        <li>*IMP NOTE : The Content Which Is Copy-Pasted From Google Will Not Be Approved By Admin To Publish.</li>
							    </ul>
					        </div>
					
					        <!-- Center 1 -->
							
							
							<!-- ADS -->	
					        <div class="box shadow postblock">
			                    <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				            </div>
					        <!-- ADS --> 
					
					
					        <!-- Center 2 -->
					
					        <div class="box shadow postblock">
							
							<center><h3 style="color:purple;">Publish Your Article</h3></center>
							
							    <form action="insert_newsposts.php" method="post" enctype="multipart/form-data">
							
							        <table>
									
									    <tr>
									        <th><strong>Title Name :</strong></th>
										</tr>
										<tr>
									        <td><input type="text" name="post_title" size="40" placeholder="Post Title" required="required"/></td>
									    </tr>
										
										<tr>
									        <th><strong>Key Words :</strong></th>
										</tr>
										<tr>
										    <td><textarea name="post_keywords" rows="5" cols="15" required="required">Post KeyWords</textarea></td>
									    </tr>
							
							            <tr>
									        <th><strong><strong>Select Category:</strong></strong></th>
										</tr>
										<tr>
									        <td><select name="cat">
									        <option value="null" required="required">select a Category</option>
										    <?php
										        include("connect.php");
										 
										        $get_cats = "select * from news";
										 
										        $run_cats = mysqli_query($mysqli,$get_cats);
										 
										        while ($cats_row=mysqli_fetch_array($run_cats)){
											 
											    $cat_id=$cats_row['cat_id'];
											    $cat_title=$cats_row['cat_title'];
											 
											    echo "<option value='$cat_id'>$cat_title</option>";
											 
										    } ?>
											</td>
									    </tr>
										
										<tr><th><strong>Author Name :</strong></th></tr>
										<tr><td><input type="text" name="post_author" size="40" placeholder="Post Author" required="required"/></td></tr>
										
										<tr><th><strong>Select Image :</strong></th></tr>
										<tr><td><input type="file" name="post_image" size="40" /></td></tr>
										
										<tr><th><strong>Give Name For Image :</strong></th></tr>
										<tr><td><input type="text" name="post_alt" size="40" /></td></tr>
										
										<tr><th><strong>Main Content :</strong></th></tr>
										<tr><td><textarea name="post_content" rows="5" cols="15" required="required">Main Content</textarea></td></tr>
										
										<tr><th><strong>Sub-Content1 :</strong></th></tr>
										<tr><td><textarea name="post_subcontent" rows="5" cols="15" required="required">Sub-Content1</textarea></td></tr>
										
										<tr><th><strong>Sub-Content2 :</strong></th></tr>
										<tr><td><textarea name="post_subsubcontent" rows="5" cols="15" required="required">Sub-Content2</textarea></td></tr>
							
							
							        </table><br>
									
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
	                            $post_subcontent = $_POST['post_subcontent'];
	                            $post_subsubcontent = $_POST['post_subsubcontent'];
								$post_newstatus ='unapprove';
								$view = 0;
	
	                            if($post_cat=='null')
								{
									echo "<script>alert('Please Selaect Any Category!')</script>";
								}
								else
								{
		                        move_uploaded_file($post_image_tmp, "news_images/$post_image");
	
	                            $insert_posts = "insert into newsposts (user_id,category_id,post_title,post_keywords,post_date,post_author,post_image,post_alt,post_content,post_subcontent,post_subsubcontent,post_newstatus,view)
                	            values ('$user_id','$post_cat','$post_title','$post_keywords','$post_date','$post_author','$post_image','post_alt','$post_content','$post_subcontent','$post_subsubcontent','$post_newstatus','$view')";
	
	                                $run = mysqli_query($mysqli,$insert_posts);
	 
	                                if($run)
	                                {
	                                    echo "<script>alert('Your Post Will Be Approved And Published Within An Hour! Thank You!')</script>";
		                                echo"<script>window.open('insert_newsposts.php','_self')</script>";
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