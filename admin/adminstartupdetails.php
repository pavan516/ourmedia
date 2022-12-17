<?php
session_start();

if(!isset($_SESSION['admin_email'])){

header("location: login.php");

}
?>
<?php include('includes/header.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">
		
	    		
        <div class="col-md-12">
		
		    
	        <div class="box shadow postblock">
			
			    <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>
	  
	            <div class="box shadow postblock">
				
				<?php 
				include("connect.php");
						
					if(isset($_GET['post'])){
					$post_id = $_GET['post'];
					$get_posts = "select * from startupsposts where post_id='$post_id'";
					$run_posts = mysqli_query($mysqli,$get_posts);
					while ($row_posts = mysqli_fetch_array($run_posts))
					{
						$post_id = $row_posts['post_id'];
						$user_id = $row_posts['user_id'];
						$post_title = $row_posts['post_title'];
						$post_content = $row_posts['post_content'];
						$post_subcont = $row_posts['post_subcont'];
						$post_entreprenuer = $row_posts['post_entreprenuer'];
						$post_fgmail = $row_posts['post_fgmail'];
						$post_fcontact = $row_posts['post_fcontact'];
						$post_weburl = $row_posts['post_weburl'];
						$post_image = $row_posts['post_image'];
							
						$user = "select * from users where user_id='$user_id'";
								
						$run_user = mysqli_query($mysqli,$user);
						$row_user = mysqli_fetch_array($run_user);
								
						$user_name = $row_user['user_name'];
						$user_image = $row_user['user_image'];
				?>
							
							
							<center><?php echo "<img src='http://ourmedia.in/startups_images/$post_image' width='610' height='350' class='single_feature_img' />"; ?></center><br><br>
							<div><?php echo $post_content ?></div>
							<div><?php echo $post_subcont ?></div>
							<div><?php echo $post_entreprenuer ?></div><br>
							<div>Founder Details :<br>G-Mail :<?php echo $post_fgmail ?><br> Contact : <?php echo $post_fcontact ?></div>
							
							
						<?php } ?>	
						<?php } ?>
				
				</div>
				
				<div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>
					
		    </div>
        
      </div>
	  
	        
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
