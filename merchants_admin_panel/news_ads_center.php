<?php 
include('connect.php');

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
			    
			    
			    <center><strong style="color:purple;">NEWS FIELD (LONG IMAGES)</strong></center>
	  
	            <div class="box shadow postblock">
			        
					    <form action="" method="post" enctype="multipart/form-data"><br>
				            <span style="color:purple;">Give Url Where You Want To Redirect After Clicking This Image</span> 
							<div class="form-group">
								<textarea name="news_center_url" cols="3" rows="3" class="form-control"></textarea>
						    </div>								
															
							<strong>Upload Image (494 * 66)<br></strong>
							<input type="file" name="news_center" size="20" />
									
				            <div class="form-group" align="center">
							    <input style="background-color:purple;color:white;" type="submit" name="news" value="Upload" class="btn btn-default" />
							</div>
								     
						</form>
						
						<?php
                                include("connect.php");
								
                                if(isset($_POST['news']))
                                {
	                                $news_center_url = $_POST['news_center_url'];
									
									$news_center = $_FILES['news_center']['name'];
	                                $post_image_tmp = $_FILES['news_center']['tmp_name'];
									
									move_uploaded_file($post_image_tmp, "ads_images/$news_center");
									
									createThumbs("ads_images/$news_center","ads_images/$news_center",494,66);
									
									$update_ads_posts = "update ads_images set news_center='$news_center', news_center_url='$news_center_url' where merchants_id='$merchants_id'";
	
	                                $run = mysqli_query($mysqli,$update_ads_posts);
									
	                                if($run)
	                                {
	                                        echo "<script>alert('Your Long add On News Has Been Published Successfully!')</script>";
		                                    echo"<script>window.open('merchants_admin_panel.php','_self')</script>";
   	                                }
                                }

                                ?>
										
	            </div>