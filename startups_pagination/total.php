<?php
include("connect.php");
										
	$get_posts = "SELECT * from startupsposts ORDER by 1 DESC";                                        
    $run_posts = mysqli_query($mysqli,$get_posts);
	$total = mysqli_num_rows($run_posts);
?>