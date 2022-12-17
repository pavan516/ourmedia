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

<?php
include("connect.php");
	if(isset($_GET['post']))
	{							
		$post_id = base64_decode($_GET['post']);
		$get_posts = "select * from eventsposts where post_id='$post_id'";
		$run_posts = mysqli_query($mysqli,$get_posts);
		while ($row_posts = mysqli_fetch_array($run_posts))
		{
			$post_id = $row_posts['post_id'];
			$user_id = $row_posts['user_id'];
			$post_title = $row_posts['post_title'];
			$post_content = substr($row_posts['post_content'],0,300);
			$post_keywords = $row_posts['post_keywords'];
		}
	
echo "<title itemprop='name'>Ourmedia - Events | $post_title</title>
<meta name='description' content='$post_content' />
<meta name='keywords' content='$post_keywords' />";

}
?>

<?php include('includes/header.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">
		
	    <div class="col-md-12">
			<h3 class="pullbar"><i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> EVENTS
				<i class="fa fa-angle-left" onclick="$('.col-right').slideToggle();" style="float:right; margin-right: 10px;"></i>
		    </h3>
	    </div>
				
        <div class="col-md-3 col-left">
		    <div class="box shadow postblock">
		        <?php include('events/left_sidebar.php'); ?>
            </div>
	    </div>
		
        <div class="col-md-6">	
		    	  
	        <div class="box shadow postblock">
			
			    <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div><hr />
				
				
				<!-- POSTS ON NEWS -->
	  
                <center><h3 style="color:green;">Latest Posts On events</h3></center>
				
				<?php
						
					include("connect.php");
					if(isset($_GET['post']))
					{
							
						$post_id = base64_decode($_GET['post']);
						mysqli_query($mysqli,"UPDATE eventsposts SET view=view+1 WHERE post_id='$post_id'");

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
							$post_content = $row_posts['post_content'];
							$post_eventvenue = $row_posts['post_eventvenue'];
							$post_eventdate = $row_posts['post_eventdate'];
							$post_eventtimings = $row_posts['post_eventtimings'];
							$post_eventprice = $row_posts['post_eventprice'];
							$post_fburl = $row_posts['post_fburl'];
							$post_ogmail = $row_posts['post_ogmail'];
							$post_ocontact = $row_posts['post_ocontact'];
							$view = $row_posts['view'];
													
						$user = "select * from users where user_id='$user_id'";
						
                        $run_user = mysqli_query($mysqli,$user);
						$row_user = mysqli_fetch_array($run_user);
								
						$user_name = $row_user['user_name'];
						$user_image = $row_user['user_image'];
						
							if(!isset($_SESSION['user_email']))
                            {
                    
                            }
			                else
			                {
					            $user = $_SESSION['user_email'];
					            $get_user = "select * from users where user_email='$user'";
					            $run_user = mysqli_query($mysqli,$get_user);
					            $row = mysqli_fetch_array($run_user);
								
					            $logged_in_user_id = $row['user_id'];
							
                                    $count_posts_like_unlike = mysqli_query($mysqli,"select * from like_unlike_eventsposts where post_id='$post_id'");
		                            $total_like_this_post = mysqli_num_rows($count_posts_like_unlike);
								 
						            $logged_in_user_like_post	=	 mysqli_query($mysqli,"select * from like_unlike_eventsposts where post_id='$post_id' AND user_id='$logged_in_user_id'");
						            $total_like_this_post_by_logged_in_user = mysqli_num_rows($logged_in_user_like_post);
							}
							
						
													
																										
				?>
		            
			
                <div class="box shadow postblock">
		
                    <h5>
					    <?php 
						        $encoded_post_id 	=	base64_encode($post_id);
                                $encoded_user_id 	=	base64_encode($user_id);						
							?>
							
					    <?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?>
						<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
						<strong><?php echo "<a style='color:red;' href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong>
						
						<?php include('events/like_comment_view_events.php'); ?>
						
						
                        <p>
							<strong style='color:grey;'>Posted By :</strong> <?php echo "$post_organiser";  ?> | 
						    <strong style='color:grey;'>Posted On :</strong> <?php echo "$post_date"; ?>
						</p><hr />
            
			        </h5>
		  
		            <h3>	
					    <?php echo "<a style='color:purple;'href='https://www.ourmedia.in/eventsdetails.php?post=$encoded_post_id'>$post_title</a>"; ?>
					</h3>	
                        
					<?php echo "<img src='events_images/$post_image' width='520' height='300' />"; ?><br><br>
		  
		            <div class="text">
					    <?php echo $post_content ?>
					</div>
					
					<div class="text">
					    <center><h2>Event Details :</h2></center>
						<?php echo "Event Venue : $post_eventvenue"; ?><br>
					    <?php echo "Event Date : $post_eventdate"; ?><br>
						<?php echo "Event Timings : $post_eventtimings"; ?><br>
						<?php echo "Event Pass/Head : $post_eventprice"; ?><br>
						<?php echo "Event FbPage Link : <a style='color:purple;' href='$post_fburl'>$post_fburl</a>"; ?><br>
						<center><h2>Organiser Details :</h2></center>
						<?php echo "Organiser G-Mail : $post_ogmail"; ?><br>
						<?php echo "Organiser Contact : $post_ocontact"; ?><br>
					</div>
										
				</div>

				
			<div class="box shadow postblock">
			
					
			<div class="foot">
			
		        <h4>Comments -</h4>
				
				<?php
                include("connect.php");
				
             	if(isset($_GET['post']))
					{							
						$post_id = base64_decode($_GET['post']);
												
						$get_posts = "select * from comments_events where post_id='$post_id'";
						
						$run_posts = mysqli_query($mysqli,$get_posts);
						
					while ($row_posts = mysqli_fetch_array($run_posts))
				    {
						
	                $post_id = $row_posts['post_id'];
					$user_id = $row_posts['user_id'];
					$comment_text = $row_posts['comment_text'];
					
					$user = "select * from users where user_id='$user_id'";
								
					$run_user = mysqli_query($mysqli,$user);
					$row_user = mysqli_fetch_array($run_user);
								
					$user_name = $row_user['user_name'];
					$user_image = $row_user['user_image'];?>
					
					<?php 
						        $encoded_post_id 	=	base64_encode($post_id);
                                $encoded_user_id 	=	base64_encode($user_id);						
							?>
							
					<div class="comment">
				    <strong><?php echo "<a href='https://www.ourmedia.in/user_profile.php?u_id=$encoded_user_id'>"; ?><span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>'); padding: 14px;margin: 2px;  border-radius: 50%;opacity: .5;">
				    </span><strong> <?php echo $user_name ?> </strong></a></strong>
				
		            <h5><?php echo "$comment_text"; ?></h5>
		  
		        </div>
					
                <?php } ?>
				<?php } ?>


				
		    </div>
			
			</div>
			
			<div class="box shadow postblock">
			
			<?php
			
			if(!isset($_SESSION['user_email']))
			{?>
				<center><?php echo "Please Login To Post A Comment!"; ?><br></center>
				<center><?php echo "<a href='https://www.ourmedia.in/login_registration.php'>Login Here</a>"; ?><br></center><?php
			}
			else
			{?>
		        <h4>Post A Comment -</h4>
				
				    <form method="post" action="" >
					
		            <div class="form-group"><textarea type="text" placeholder="Your Comment" name="comment" class="form-control" style="height:100px" ></textarea></div>
		            <center><div class="form-group" align="right"><input type="submit" name="submit" value="Submit" class="btn btn-default" class="form-control" /></div></center>
		    
			        </form>
					
					<?php
                        include("connect.php");
											
                        if(isset($_POST['submit']))
                        { 
					         if(isset($_GET['post']))
											
						     $post_id = base64_decode($_GET['post']);
						
	                       $user = $_SESSION['user_email'];
								$get_user = "select * from users where user_email='$user'";
								$run_user = mysqli_query($mysqli,$get_user);
								$row = mysqli_fetch_array($run_user);
								
								$user_id = $row['user_id'];
								$user_name = $row['user_name'];
							$comment = $_POST['comment'];
	
	                        if($comment=='')
	                        {
		                        echo "<script>alert('Comment Something!')</script>";
		                        exit();
	                        }
	                        else 
	                        {
								$notification = "insert into notifications (user_id,content,post_id,post_date,category,status)
                	                values ('$user_id','someone has commented on your post','$post_id',NOW(),'eventscomment','unread')";
			
			                    $run = mysqli_query($mysqli,$notification);
								
		                        $query_comment = "insert into comments_events (post_id,user_id,comment_text) values('$post_id','$user_id','$comment')";
        
                                $run_query = mysqli_query($mysqli,$query_comment);

                                if($run_query)
		                        {
                                    echo "<script>alert('Your Comment Has Been Published Successfully!')</script>";
                                    echo "<script>window.open('https://www.ourmedia.in/eventsdetails.php?post=$encoded_post_id','_self')</script>";		   
                                }
								$from = "From: ourmedia_alerts@ourmedia.in";
		                        $to = $user;
		                        $subject = "OurMedia Alerts";
         
		                        $body = "$user_name Someone has commented on your post!";
       
                                mail($to, $subject, $body, $from);
                            }
                        }
                    ?>

					
			
			<?php }?>
			</div>
			
			
	    
			
	    <?php } ?>
		<?php } ?>
			
			
			<!-- End Of News Detail Page -->
			
					
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