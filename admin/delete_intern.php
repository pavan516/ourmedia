<?php
include('connect.php');
if(isset($_GET['interns_id']))
{
	$interns_id = $_GET['interns_id'];
	
	$delete_post = "delete from interns where interns_id='$interns_id'";
	$run_delete = mysqli_query($mysqli,$delete_post);
	
	if($run_delete)
	{
		echo "<script>alert('Intern Has Been Deleted Successfully!')</script>";
        echo "<script>window.open('interns.php','_self')</script>";
	}
}
?>	