<?php
include("connect.php");
	if(isset($_GET['user_email']))
	{							
		$user_email = $_GET['user_email'];
					
		mysqli_query($mysqli,"UPDATE users SET verification='verified' WHERE user_email='$user_email'");
						
		$get_posts = "select * from users where user_email='$user_email'";
						
		$run_posts = mysqli_query($mysqli,$get_posts);
						
		while ($row_posts = mysqli_fetch_array($run_posts))
		{
			$user_name = $row_posts['user_name'];
			$user_image = $row_posts['user_image'];
			
		}?>
		
		<div class="box shadow postblock">
			<br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
		</div>
		
		<?php
            echo "<center><h2 style='color:purple;'>Welcome to ourmedia $user_name</h2></center>";
            echo "<center><h3 style='color:purple;'>You are successfully verified and You Can Login Here Now : <a href='https://www.ourmedia.in/login.php'>Login Here</a></h2></center>";
	}
	?>
	
	    <div class="box shadow postblock">
			<br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
		</div>
	
	