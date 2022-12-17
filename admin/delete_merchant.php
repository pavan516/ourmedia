<?php
include('connect.php');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	
	$delete_post = "delete from merchants where id='$id'";
	$run_delete = mysqli_query($mysqli,$delete_post);
	
	if($run_delete)
	{
		echo "<script>alert('Merchant Has Been Deleted Successfully!')</script>";
        echo "<script>window.open('merchants.php','_self')</script>";
	}
}
?>	