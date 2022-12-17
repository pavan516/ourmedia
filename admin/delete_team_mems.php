<?php
include('connect.php');
if(isset($_GET['team_mems_id']))
{
	$team_mems_id = $_GET['team_mems_id'];
	
	$delete_post = "delete from team_mems where team_mems_id='$team_mems_id'";
	$run_delete = mysqli_query($mysqli,$delete_post);
	
	if($run_delete)
	{
		echo "<script>alert('Intern Has Been Deleted Successfully!')</script>";
        echo "<script>window.open('team_members.php','_self')</script>";
	}
}
?>	