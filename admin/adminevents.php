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
				
				<b><center><h4 style="color:purple;">Posts On Events</h4></center></b><br>
								
               
                    <table>
                        <tr>
                            <td><b><strong>User Image</b></strong></td>
	                        <td><b><strong>User name</b></strong></td>
	                        <td><b><strong>Post Title</b></strong></td>
	                        <td><b><strong>Post Date</b></strong></td>
	                        <td><b><strong>Post Image</b></strong></td>
	                        <td><b><strong>Post Status</b></strong></td>
		                    <td><b><strong>Delete Post</b></strong></td>
                        </tr>
  
  						<?php
						include("connect.php");
											
						    $get_posts = "select * from eventsposts order by 1 DESC";
						    $run_posts = mysqli_query($mysqli,$get_posts);
						    while ($row_posts = mysqli_fetch_array($run_posts))
						    {
							    $post_id = $row_posts['post_id'];
								$encoded_post_id 	=	base64_encode($post_id);
								$user_id = $row_posts['user_id'];
								$encoded_user_id = base64_encode($user_id);
							    $post_title = $row_posts['post_title'];
							    $post_date = $row_posts['post_date'];
							    $post_organiser = $row_posts['post_organiser'];
							    $post_image = $row_posts['post_image'];
							    $post_content = substr($row_posts['post_content'],0,300);
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
										
						<tr>
                            <td>										
								<?php echo "<a href='http://ourmedia.in/user_profile.php?u_id=$encoded_user_id'><img src='http://localhost/our%20media/myaccount/user_images/$user_image' width='50' height='50' class='floatleft' /></a>"; ?>
						    </td>
							<td>										
								<?php echo "<a style='color:purple;' href='http://ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>"; ?>
						    </td>
							<td>										
								<?php echo "$post_title"; ?>
						    </td>
							<td>										
								<?php echo "$post_date"; ?>
						    </td>
							<td>										
								<?php echo "<img src='http://ourmedia.in/events_images/$post_image' width='50' height='50' />"; ?>
						    </td>
							<td>										
								<?php echo "<a href='admineventdetails.php?post=$post_id'>Read Content</a>"; ?>
						    </td>
							<td>										
								<?php echo "<a href='admindelete_eventspost.php?post_id=$post_id'><button>Delete</button></a>"; ?>
						    </td>
                        </tr>
  	
		                                 
						<?php } ?>
                    </table>
				
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
