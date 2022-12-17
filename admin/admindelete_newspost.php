<?php
include('connect.php');
if(isset($_GET['post_id']))
{
	$post_id = $_GET['post_id'];
	
	$delete_post = "delete from newsposts where post_id='$post_id'";
	$run_delete = mysqli_query($mysqli,$delete_post);
	
	if($run_delete)
	{
		echo "<script>alert('Post Has Been Deleted Successfully!')</script>";
        echo "<script>window.open('adminnews.php','_self')</script>";
	}
}
?>	