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