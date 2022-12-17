

<?php
	session_start();
?>
<?php include('connect.php'); 


?>
<?php

	$encoded_post_id	=	'';
	if(!empty($_POST)){
		
		$encoded_post_id	=	$_POST['post_id'];
		$post_id			=	base64_decode($encoded_post_id);
		$comment_array 		= 	mysqli_query($mysqli,"select * from post_comments where post_id='$post_id' ORDER BY `id` DESC");
		$str				=	"<tr><td colspan='2' style='text-align:right;'></td><td></td><td>
								<a href='javascript:void' class='btn btn-default' onclick=close_comments('".$encoded_post_id."') id='close_comment_button_".$post_id."' ><i class='fa fa-window-close-o'></i> </a></td></tr>";
		while ($row_comments = mysqli_fetch_array($comment_array))
		{
			$user_id 	=	$row_comments['user_id'];
			$encoded_user_id 	=	base64_encode($user_id);
			$get_user 	= 	"select * from users where user_id='$user_id'";
			$run_user 	= 	mysqli_query($mysqli,$get_user);
			$row 		= 	mysqli_fetch_array($run_user);
			$editFun    = "editCommmonet('".$row_comments['id']."','".$row_comments['comment']."')";
			$deletfun   = "deletCommonet('".$row_comments['id']."')";
			$user_image	=	$row['user_image'];	
			$str .= 	"<tr ><td width='10%'><a href='user_profile.php?u_id=$encoded_user_id'><img src='user_images/".$user_image."' width='30' height='30'  /></a></td><td width='90%'><a href='user_profile.php?u_id=$encoded_user_id'><b style='color:purple;'>".ucfirst($row['user_name'])."</b></a><br> ".ucfirst($row_comments['comment'])."</td>

		 <td><p data-placement='top' data-toggle='tooltip' title='Edit'><button onclick=".$editFun." class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' id='".$row_comments['comment']."' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>

    <td><p data-placement='top' data-toggle='tooltip' title='Delete'><button onclick=".$deletfun." class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal'  data-target='#delete'><span class='glyphicon glyphicon-trash'></span></button></p></td></tr>	
				";
			
		}
		$return_array['html']			=	$str;
		$return_array['post_id']		=	$post_id;
		
		
		
		echo json_encode($return_array,false);
		
	}

?>



