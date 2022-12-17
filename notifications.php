<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Our Media</title>
<link rel="icon" type="image/png" href="css/logoup.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php include('includes/header.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">
		
	    <div class="col-md-12">
			<h3 class="pullbar"><i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> ALL CATEGORIES
				<i class="fa fa-angle-left" onclick="$('.col-right').slideToggle();" style="float:right; margin-right: 10px;"></i>
		    </h3>
	    </div>
			
        <div class="col-md-3 col-left">
		    <div class="box shadow postblock">
		        <?php include('includes/left_sidebar.php'); ?>
            </div>
	    </div>
		
        <div class="col-md-6">
		
		    
	        <div class="box shadow postblock">
			
			    <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>			
			    <div class="box shadow postblock">
			    <center><h3 style="color:purple;">Latest Notifications</h3></center>
			    
				<?php
				include("connect.php");
								
					$user = $_SESSION['user_email'];
					$get_user = "select * from users where user_email='$user'";
					$run_user = mysqli_query($mysqli,$get_user);
					$row = mysqli_fetch_array($run_user);
							
					$user_id = $row['user_id'];
					$user_name = $row['user_name'];
					$user_image = $row['user_image'];
								
				?>
				
				<?php
	            include("connect.php");
					
                    $get_posts = "select * from notifications where status='unread' AND user_id='$user_id' order by 1 DESC";
					$run_posts = mysqli_query($mysqli,$get_posts);
					$count = mysqli_num_rows($run_posts);
					if($count==0)
					{
						echo "<center><b style='color:purple;'>No Notifications To Display</b></center>";
					}
					else
					{	
					while ($row_posts = mysqli_fetch_array($run_posts))
	                {
			            
			            $content = $row_posts['content'];
			            $post_date = $row_posts['post_date'];
						$category = $row_posts['category'];
						$post_id = $row_posts['post_id'];
			            $status = $row_posts['status'];
			            
						$user = "select * from users where user_id='$user_id'";
								
					    $run_user = mysqli_query($mysqli,$user);
			            $row_user = mysqli_fetch_array($run_user);
								
			            $user_name = $row_user['user_name'];
			            $user_image = $row_user['user_image'];
	
	            ?>
				
				
				
				<?php
				$encoded_user_id 	=	base64_encode($user_id);
				$encoded_post_id 	=	base64_encode($post_id);?>
				<div class="box shadow postblock"> <br>
				<?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
				<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
				<strong><?php echo "<a style='color:red;' href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong><br><br>			
				<?php include('includes/notifications.php'); ?>
				</div>
				<?php } ?>
				<?php } ?>
				</div>				
				
				<div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>
				
				<div class="box shadow postblock">		    
				<center><h3 style="color:purple;">Recent Notifications</h3></center>
				
				<?php
				include("connect.php");
								
					$user = $_SESSION['user_email'];
					$get_user = "select * from users where user_email='$user'";
					$run_user = mysqli_query($mysqli,$get_user);
					$row = mysqli_fetch_array($run_user);
								
					$user_id = $row['user_id'];
					$user_name = $row['user_name'];
					$user_image = $row['user_image'];
								
				?>
				
				<?php
	            include("connect.php");
				
					mysqli_query($mysqli,"UPDATE notifications SET status='read' where user_id='$user_id'");
                    $get_posts = "select * from notifications where status='read' AND user_id='$user_id' order by 1 DESC";
					$run_posts = mysqli_query($mysqli,$get_posts);
					while ($row_posts = mysqli_fetch_array($run_posts))
	                {
			            
			            $content = $row_posts['content'];
			            $post_date = $row_posts['post_date'];
						$category = $row_posts['category'];
						$post_id = $row_posts['post_id'];
						$status = $row_posts['status'];
			            
						$user = "select * from users where user_id='$user_id'";
								
					    $run_user = mysqli_query($mysqli,$user);
			            $row_user = mysqli_fetch_array($run_user);
								
			            $user_name = $row_user['user_name'];
			            $user_image = $row_user['user_image'];
	
	            ?>
				  
				<?php
				$encoded_user_id 	=	base64_encode($user_id);
				$encoded_post_id 	=	base64_encode($post_id);
				?>
				<div class="box shadow postblock"><br>
				<?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
				<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
				<strong><?php echo "<a style='color:red;' href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong><br><br>
				<?php include('includes/notifications.php'); ?>
				</div>
				
				<?php } ?>
				</div>
				
			    <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>	
				
		    </div>
        
        </div>
	  
	        <div class="col-md-3 col-right">
	            <div class="box shadow postblock">
		            <?php include('includes/right_sidebar.php'); ?>
		        </div>
            </div>
	  
	  
	  
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
