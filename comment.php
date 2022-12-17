
<?php
	session_start();
?>
<?php include('connect.php'); ?>
<?php
	$encoded_post_id	=	'';
	if(!empty($_POST)){
		
		$encoded_post_id	=	$_POST['post_id'];
		$comment			=	$_POST['comment'];
		$post_id			=	base64_decode($encoded_post_id);
		
		$user 				= 	$_SESSION['user_email'];
		
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($mysqli,$get_user);
		$row = mysqli_fetch_array($run_user);
		
		$logged_in_user_id = $row['user_id'];
		
		$comment_array 						= 	mysqli_query($mysqli,"select * from post_comments where post_id='$post_id' ORDER BY `id` DESC limit 5 ");
		$str		=	'';
		while ($row_comments = mysqli_fetch_array($comment_array))
		{
			$user_id 	=	$row_comments['user_id'];
			$get_user 	= 	"select * from users where user_id='$user_id'";
			$run_user 	= 	mysqli_query($mysqli,$get_user);
			$row 		= 	mysqli_fetch_array($run_user);
			$user_image	=	$row['user_image'];	
			$str .= 	"<tr><td ><img src='user_images/".$user_image."' width='30' height='30'  /></td><td><b>".ucfirst($row['user_name'])."</b><br>".ucfirst($row_comments['comment'])."</td></tr>";
			
		}
		
		
		$insert_like_data = "insert into post_comments (id,user_id,post_id,comment,created,modified)
                	                values (null,'$logged_in_user_id','$post_id','$comment',NOW(),NOW())";
		$run = mysqli_query($mysqli,$insert_like_data);
		$return_array					=	array();
		$count_posts_comments = mysqli_query($mysqli,"select * from post_comments where post_id='$post_id'");
		$total_comment_for_this_post = mysqli_num_rows($count_posts_comments);
		
		
		if($run){
			$count_posts_comments 				= 	mysqli_query($mysqli,"select * from post_comments where post_id='$post_id'");
			$total_comment_for_this_post 		= 	mysqli_num_rows($count_posts_comments);
			$comment_array 						= 	mysqli_query($mysqli,"select * from post_comments where post_id='$post_id' ORDER BY `id` DESC limit 1 ");
			$str		=	'';
			while ($row_comments = mysqli_fetch_array($comment_array))
			{
				$user_id 	=	$row_comments['user_id'];
				$get_user 	= 	"select * from users where user_id='$user_id'";
				$run_user 	= 	mysqli_query($mysqli,$get_user);
				$row 		= 	mysqli_fetch_array($run_user);
				$editFun    = "editCommmonet('".$row_comments['id']."','".$row_comments['comment']."')";
				$deletfun   = "deletCommonet('".$row_comments['id']."')";
				$user_image	=	$row['user_image'];	
				$str .= 	"<tr><td width='10%'><img src='user_images/".$user_image."' width='30' height='30'  /></td><td width='90%'><b>".ucfirst($row['user_name'])."</b> :- ".ucfirst($row_comments['comment'])."</td>

				<td><p data-placement='top' data-toggle='tooltip' title='Edit'><button onclick=".$editFun." class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' id='".$row_comments['comment']."' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>

    <td><p data-placement='top' data-toggle='tooltip' title='Delete'><button onclick=".$deletfun." class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal'  data-target='#delete'><span class='glyphicon glyphicon-trash'></span></button></p></td></tr>	
				";
				
			}	
			
			$return_array['error']				=	0;
			$return_array['mesg']				=	'success';
			$return_array['total_comment']		=	$total_comment_for_this_post;
			$return_array['post_id']			=	$post_id;
			$return_array['html']				=	$str;
		}else{
			$return_array['error']				=	1;
			$return_array['mesg']				=	'failed';
			$return_array['total_comment']		=	$total_comment_for_this_post;
			$return_array['post_id']			=	$post_id;
			$return_array['html']				=	$str;
		}
		echo json_encode($return_array,false);
		
	}
?>


