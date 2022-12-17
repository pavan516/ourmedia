<?php
include('connect.php');
if(isset($_GET['user_id']))
{
	$user_id = $_GET['user_id'];
	
	$delete_post = "delete from users where user_id='$user_id'";
	$run_delete = mysqli_query($mysqli,$delete_post);
	
	if($run_delete)
	{
		echo "<script>alert('Ourmedia Member Has Been Deleted Successfully!')</script>";
        echo "<script>window.open('members.php','_self')</script>";
	}
}
?>	