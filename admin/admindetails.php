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
						$sql = "select * from newsposts WHERE post_id='$post_id'";
						$run_posts = mysqli_query($mysqli,$sql);
	                    while($row_posts = mysqli_fetch_array($run_posts))
                        {
		                    $user_id = $row_posts['user_id'];
		                    $post_title = $row_posts['post_title'];
		                    $post_date = $row_posts['post_date'];
		                    $post_author = $row_posts['post_author'];
		                    $post_image = $row_posts['post_image'];
	                        $post_content = $row_posts['post_content'];
		                    $post_subcontent = $row_posts['post_subcontent'];
		                    $post_subsubcontent = $row_posts['post_subsubcontent'];
		                    $post_newstatus = $row_posts['post_newstatus'];
							
		                    $user = "select * from users where user_id='$user_id'";
								
		                    $run_user = mysqli_query($mysqli,$user);
		                    $row_user = mysqli_fetch_array($run_user);
								
		                    $user_name = $row_user['user_name'];
		                    $user_image = $row_user['user_image'];?>
							
		                    <center>
		                    
							<?php echo "<img src='http://ourmedia.in/news_images/$post_image' width='610' height='350' class='single_feature_img' />"; ?><br><br></center>
		                    <?php echo $post_content ?>
		                    <?php echo $post_subcontent ?>
		                    <?php echo $post_subsubcontent ?>
		
		
		                    <form action="" method="post" enctype="multipart/form-data">
		
		                        <center>
		                            <button>
			                            <input type="submit" name="submit" value="Approve" />
			                        </button>
		                        </center><br><br>
      				
		                    </form>
		
		
							
		<?php } ?>	
		<?php } ?>
		
		
	<?php

    if(isset($_POST['submit']))
	{
		$update_status = "update newsposts set post_newstatus='approved' where post_id='$post_id'";
		$run_update = mysqli_query($mysqli,$update_status);
	
	    if($run_update)
	    {
	        echo "<script>alert('Post Has Been Approved Successfully!')</script>";
            echo "<script>window.open('adminnews.php','_self')</script>";
	    }
	   
    }




    ?>	
				
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
