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

<title itemprop="name">OurMedia - Events Categories | Now promote your Events by single post and get more audience</title>
<meta name="description" content="OurMedia | Events gets more exposure and well response from all types of audience | OurMedia is a social media platform where user can exposure his events to a large amount of audience for free of cost." />
<meta name="keywords" content="ourmedia events, events, pubs, College Events, college Summits, DJ Events/Nights, Promotional events, Fund raising events, Other Eventsourmedia, news, articles, entertainments, Technology, Mobiles, Auto Mobiles, Sports, Movies, Love Stories, Motivational Stories, Inspirational Stories, Novels, ourmedia signup, ourmedia register, ourmedia registration, ourmedia, ourmedia login, ourmedia signin, login, signin, signup, ourmedia, our, our media, ourmedia.in login ,ourmedia.in, ourmedia.in signin, ourmedia.in signup, ourmedia social media, ourmedia social media login, ourmedia social media signin, ourmedia social media registration,ourmedia  social media signup, media, ourmedia facebook, ourmedia facebook login, ourmedia facebook signin, facebook signup, facebook registration, facebook register, freelancer, freelancer login, freelancer signin, freelancer registration, freelancer signup, amazon, amazon login, amazon signin, amazon signup, twitter signup, twitter register, twitter registration, twitter, twitter login, twitter signin, instagram, instagram login, instagram signin, instagram signup, instagram registration, instagram register, flipkart, flipkart login, flipkart signin, flipkart signup, flipkart register, hike, hike login, hike sign in, indianceo, indian ceo login, google, google login, google signin, yahoo, yahoo login, yahoo signin, promotion, news, events, startups, technology, mobiles, movies, sports, love stories, entertainments, motivational stories, inspirational stories, college events, College Summits, DJ Events/Nights, Promotional events, Fund raising events, startups, ngo's" /> 
 

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
	  
					<!-- EVENTS POSTS -->
					
					<center><h3 style="color:green;">Latest Posts On Events</h3></center>
					
					
					<?php
											
						include("connect.php");
						
						if(isset($_GET['cat']))
						{
							$cat_id = base64_decode($_GET['cat']);			
											
						    $get_posts = "select * from eventsposts where category_id = '$cat_id' ORDER by 1 DESC";
						
						    $run_posts = mysqli_query($mysqli,$get_posts);
											
												
						while ($row_posts = mysqli_fetch_array($run_posts))
						{
						$post_id = $row_posts['post_id'];
						$user_id = $row_posts['user_id'];
						$post_title = $row_posts['post_title'];
						$post_date = $row_posts['post_date'];
						$post_organiser = $row_posts['post_organiser'];
						$post_image = $row_posts['post_image'];
						$post_content = substr($row_posts['post_content'],0,300);
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
                        
						<h3>
						    <?php echo "<img src='events_images/$post_image' width='500' height='300' />"; ?>
						</h3>
						
                        <div class="text">
						    <?php echo $post_content ?> 
						</div>
						
                        <div class="foot" align="right"> 
						    <?php echo "<a href='https://www.ourmedia.in/eventsdetails.php?post=$encoded_post_id' class='btn btn-default'>Read More <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a>"; ?>
						</div>
						
                    </div>
		            
					<?php } ?>
					
					<?php } ?>        
					
					<!-- END OF EVENTS POSTS -->
					
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