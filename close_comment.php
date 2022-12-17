<?php
	session_start();
?>
<?php include('connect.php'); ?>
<?php
	$encoded_post_id	=	'';
	if(!empty($_POST)){
		
		$encoded_post_id	=	$_POST['post_id'];
		
		$post_id			=	base64_decode($encoded_post_id);
		$user 				= 	$_SESSION['user_email'];
		
		$get_user = "select * from users where user_email='$user'";
		$run_user 			= 	mysqli_query($mysqli,$get_user);
		$row 				= 	mysqli_fetch_array($run_user);
		$logged_in_user_id = $row['user_id'];
		$comment_array 	= 	mysqli_query($mysqli,"select * from post_comments where post_id='$post_id' ORDER BY `id` DESC limit 1 ");
		$str			=	'';
		$row_comments 	= 	mysqli_fetch_array($comment_array);
		$user_id 		=	$row_comments['user_id'];
		$encoded_user_id 	=	base64_encode($user_id);
		$get_user 		= 	"select * from users where user_id='$user_id'";
		$run_user 		= 	mysqli_query($mysqli,$get_user);
		$row 			= 	mysqli_fetch_array($run_user);
		$user_image		=	$row['user_image'];	
		$str 			.= 	"<tr ><td width='10%'><a href='user_profile.php?u_id=$encoded_user_id'><img src='user_images/".$user_image."' width='30' height='30'  /></a></td><td width='90%'><a href='user_profile.php?u_id=$encoded_user_id'><b style='color:purple;'>".ucfirst($row['user_name'])."</b></a><br>".ucfirst($row_comments['comment'])."</td></tr>";
			
			
		$return_array['error']		=	0;
		$return_array['mesg']		=	'success';
		$return_array['post_id']	=	$post_id;
		$return_array['html']		=	$str;
		
		echo json_encode($return_array,false); 
		
	}
?>
