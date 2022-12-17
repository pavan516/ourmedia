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
					$get_posts = "select * from eventsposts where post_id='$post_id'";
					$run_posts = mysqli_query($mysqli,$get_posts);
					while ($row_posts = mysqli_fetch_array($run_posts))
					{
						$post_id = $row_posts['post_id'];
						$user_id = $row_posts['user_id'];
						$post_title = $row_posts['post_title'];
						$post_date = $row_posts['post_date'];
						$post_organiser = $row_posts['post_organiser'];
						$post_image = $row_posts['post_image'];
						$post_content = substr($row_posts['post_content'],0,500);
						$post_subcont = $row_posts['post_subcont'];
						$post_eventvenue = $row_posts['post_eventvenue'];
						$post_eventdate = $row_posts['post_eventdate'];
						$post_eventtimings = $row_posts['post_eventtimings'];
						$post_eventprice = $row_posts['post_eventprice'];
						$post_fburl = $row_posts['post_fburl'];
						$post_ogmail = $row_posts['post_ogmail'];
						$post_ocontact = $row_posts['post_ocontact'];
							
							$user = "select * from users where user_id='$user_id'";
								
							$run_user = mysqli_query($mysqli,$user);
							$row_user = mysqli_fetch_array($run_user);
								
							$user_name = $row_user['user_name'];
							$user_image = $row_user['user_image'];
				?>
							
							
							<center><?php echo "<img src='http://localhost/our%20media/myaccount/events_images/$post_image' width='610' height='350' class='single_feature_img' />"; ?></center><br><br>
							<div><?php echo $post_content ?></div>
							<div><?php echo $post_subcont ?></div>
							<div>
							<h2>Event Details :</h2>
							  <br>Event Date : <?php echo $post_eventdate ?>
							  <br>Event Timings :<?php echo $post_eventtimings ?>
							  <br>Event Pass?/Head :<?php echo $post_eventprice ?>
							  <br>Event FbPage Link :<?php echo "<a href='$post_fburl'>$post_fburl</a>"; ?>
							</div><br>						
							<div>
							<h2>Organiser Details :</h2>
							  <br>Organiser G-Mail :<?php echo $post_ogmail ?>
							  <br>Organiser Contact : <?php echo $post_ocontact ?>
							</div>
							
							
						<?php } ?>	
						<?php } ?>	<br>
				
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
