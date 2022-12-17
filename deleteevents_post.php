<?php
include('connect.php');
if(isset($_GET['post_id']))
{
	$post_id = base64_decode($_GET['post_id']);
	
	$delete_post = "delete from eventsposts where post_id='$post_id'";
	$run_delete = mysqli_query($mysqli,$delete_post);
	
	if($run_delete)
	{
		echo "<script>alert('Your Post Has Been Deleted Successfully!')</script>";
        echo "<script>window.open('https://www.ourmedia.in/my_eventsposts.php','_self')</script>";
	}
}
?>	