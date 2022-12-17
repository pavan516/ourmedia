<?php 
include('connect.php');
include('myaccount_includes/header1.php'); 

function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth, $thumbHeight ) 
{
	// parse path for the extension
	$info = pathinfo($pathToImages);
	// continue only if this is a JPEG image
	if ( strtolower($info['extension']) == 'jpg' || strtolower($info['extension']) == 'png' || strtolower($info['extension']) == 'gif' || strtolower($info['extension']) == 'jpeg') 
	{
	  //echo "Creating thumbnail for {$fname} <br />";

	  // load image and get image size
	  if(strtolower($info['extension']) == 'jpg' || strtolower($info['extension']) == 'jpeg')
	  {
		$img = imagecreatefromjpeg( "{$pathToImages}");
	  }
	  if(strtolower($info['extension']) == 'png')
	  {
		$img = imagecreatefrompng( "{$pathToImages}" );
	  }
	  if(strtolower($info['extension']) == 'gif')
	  {
		$img = imagecreatefromgif( "{$pathToImages}" );
	  }
	  $width = imagesx( $img );
	  $height = imagesy( $img );

	  // calculate thumbnail size
	  $new_width = $thumbWidth;
	  $new_height = $thumbHeight;

	  // create a new temporary image
	  $tmp_img = imagecreatetruecolor( $new_width, $new_height );

	  // copy and resize old image into new image 
	  imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

	  // save thumbnail into a file
	  if(strtolower($info['extension']) == 'jpg' || strtolower($info['extension']) == 'jpeg')
	  {
		imagejpeg( $tmp_img, "{$pathToThumbs}" ,100);
	  }
	  if(strtolower($info['extension']) == 'png')
	  {
		imagepng( $tmp_img, "{$pathToThumbs}" );
	  }
	  if(strtolower($info['extension']) == 'gif')
	  {
		imagegif( $tmp_img, "{$pathToThumbs}" );
	  }
	//unlink("$pathToImages/$fname");
  }
  // close the directory
}
// call createThumb function and pass to it as parameters the path 
// to the directory that contains images, the path to the directory
// in which thumbnails will be placed and the thumbnail's width. 
// We are assuming that the path will be a relative path working 
// both in the filesystem, and through the web for links

?>

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
				
				    <div class="box shadow postblock">
					
					    <div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				        </div>
					    
						<div class="box shadow postblock">
						
					    <form action="" method="post" enctype="multipart/form-data">
					
					        <strong style="color:purple;">Change Cover Photo<br></strong>
						    <input type="file" name="post_image" size="20" />
							
							<div class="form-group" align="center">
							    <input style="background-color:purple;color:white;" type="submit" name="update" value="Update" class="btn btn-default" />
							</div>
					
					    </form>
						
						<?php
						
						if(isset($_POST['update']))
                        {
	                        $user = $_SESSION['user_email'];
	                        $get_user = "select * from users where user_email='$user'";
	                        $run_user = mysqli_query($mysqli,$get_user);
	                        $row = mysqli_fetch_array($run_user);
								
	                        $user_id = $row['user_id'];
							$user_name = $row['user_name'];
							
							$post_image = $_FILES['post_image']['name'];
	                        $post_image_tmp = $_FILES['post_image']['tmp_name'];
							
									
				            if($post_image=='')
	                        {
		                        echo "<script>alert('Please Choose Any Image!')</script>";                                            									
	                        }
	                        else
	                        {	

		                        if(isset($_GET['user_id']))
		                        {
			                        $get_id = base64_decode($_GET['user_id']);
			
			                        move_uploaded_file($post_image_tmp, "user_images/$post_image");
												
			                        createThumbs("user_images/$post_image","user_images/$post_image",840,235);
			                        
									$notification = "insert into notifications (user_id,content,post_id,post_date,category,status)
                	                values ('$user_id','Successfully Changed Your Cover Photo','$post_id',NOW(),'changecoverphoto','unread')";
			
			                        $run = mysqli_query($mysqli,$notification);
									
			                        $update_post = "update users set user_cimage='$post_image' where user_id='$get_id'";
			                        $run_update = mysqli_query($mysqli,$update_post);

			                        if($run_update)
			                        {
				                        echo "<script>alert('Your Cover Photo Is Uploaded Successfully!')</script>";
				                        echo "<script>window.open('https://www.ourmedia.in/userhome.php','_self')</script>";
				
			                        }
									$from = "From: ourmedia_alerts@ourmedia.in";
		                        $to = $user;
		                        $subject = "OurMedia Alerts";
         
		                        $body = "$user_name Successfully Changed Your Cover Photo!";
       
                                mail($to, $subject, $body, $from);
		                        }
	                        }
                        }

                        ?>
						    
					    
						</div>
					
					    <div class="box shadow postblock">
			                <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				        </div>
					
					</div>
                    
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