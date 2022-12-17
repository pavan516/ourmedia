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

<title itemprop="name">OurMedia - Startups| Now promote your startup and hire your partners</title>
<meta name="description" content="OurMedia | OurMedia is a social media platform | Here anyone can promote there own starups to large number of audience and get more feedbacks and more users to your startups." />
<meta name="keywords" content="ourmedia, ourmedia startups, startups, ngo, non governmental organisation, ourmedia ngo, ourmedia startup, startups , ourmedia events, events, pubs, College Events, college Summits, DJ Events/Nights, Promotional events, Fund raising events, Other Eventsourmedia, news, articles, entertainments, Technology, Mobiles, Auto Mobiles, Sports, Movies, Love Stories, Motivational Stories, Inspirational Stories, Novels, ourmedia signup, ourmedia register, ourmedia registration, ourmedia, ourmedia login, ourmedia signin, login, signin, signup, ourmedia, our, our media, ourmedia.in login ,ourmedia.in, ourmedia.in signin, ourmedia.in signup, ourmedia social media, ourmedia social media login, ourmedia social media signin, ourmedia social media registration,ourmedia  social media signup, media, ourmedia facebook, ourmedia facebook login, ourmedia facebook signin, facebook signup, facebook registration, facebook register, freelancer, freelancer login, freelancer signin, freelancer registration, freelancer signup, amazon, amazon login, amazon signin, amazon signup, twitter signup, twitter register, twitter registration, twitter, twitter login, twitter signin, instagram, instagram login, instagram signin, instagram signup, instagram registration, instagram register, flipkart, flipkart login, flipkart signin, flipkart signup, flipkart register, hike, hike login, hike sign in, indianceo, indian ceo login, google, google login, google signin, yahoo, yahoo login, yahoo signin, promotion, news, events, startups, technology, mobiles, movies, sports, love stories, entertainments, motivational stories, inspirational stories, college events, College Summits, DJ Events/Nights, Promotional events, Fund raising events, startups, ngo's" /> 

<?php include('includes/header.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">
		
	    <div class="col-md-12">
			<h3 class="pullbar"><i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> STARTUP'S
				<i class="fa fa-angle-left" onclick="$('.col-right').slideToggle();" style="float:right; margin-right: 10px;"></i>
		    </h3>
	    </div>
			
        <div class="col-md-3 col-left">
		    <div class="box shadow postblock">
		        <?php include('startups/left_sidebar.php'); ?>
            </div>
	    </div>
		
        <div class="col-md-6">
		
		    	  
	        <div class="box shadow postblock">
			
			    <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div><hr />
	  
					<!-- STARTUPS POSTS -->
					
					
					<center><h3 style="color:green;">Latest Posts On Startups</h3></center>
					
					
					<?php
											
						include("connect.php");
						include('startups_pagination/function.php');
	                        
                        if(isset($_GET["page"]))
	                    $page = (int)$_GET["page"];
	                    else
	                    $page = 1;

	                    $setLimit = 10;
	                    $pageLimit = ($page * $setLimit) - $setLimit;

	                    $get_posts = "SELECT * from startupsposts ORDER by 1 DESC LIMIT ".$pageLimit." , ".$setLimit." ";
						
						$run_posts = mysqli_query($mysqli,$get_posts);
						
						while ($row_posts = mysqli_fetch_array($run_posts))
						{
							$post_id = $row_posts['post_id'];
							$user_id = $row_posts['user_id'];
						    $post_title = $row_posts['post_title'];
							$post_date = $row_posts['post_date'];
							$post_founder = $row_posts['post_founder'];
							$post_image = $row_posts['post_image'];
							$post_content = substr($row_posts['post_content'],0,500);
							$post_fgmail = $row_posts['post_fgmail'];
							$post_fcontact = $row_posts['post_fcontact'];
							$post_weburl = $row_posts['post_weburl'];
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
								
                                    $count_posts_like_unlike = mysqli_query($mysqli,"select * from like_unlike_startupsposts where post_id='$post_id'");
		                            $total_like_this_post = mysqli_num_rows($count_posts_like_unlike);
								 
						            $logged_in_user_like_post	=	 mysqli_query($mysqli,"select * from like_unlike_startupsposts where post_id='$post_id' AND user_id='$logged_in_user_id'");
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
            
			                <?php include('startups/like_comment_view_startups.php'); ?>
							
							
                            <p>
							    <strong style='color:grey;'>Posted By :</strong> <?php echo "$post_founder";  ?> | 
								<strong style='color:grey;'>Posted On :</strong> <?php echo "$post_date"; ?>
							</p><hr />
							
						</h5>	
						
						<h3>	
							<?php echo "<a style='color:purple;'href='startupsdetails.php?post=$encoded_post_id'>$post_title</a>"; ?>
						</h3>	
                        
						<h3>
						    <?php echo "<img src='startups_images/$post_image' width='500' height='300' />"; ?>
						</h3>
						
                        <div class="text">
						    <?php echo $post_content ?> 
						</div>
						
                        <div class="foot" align="right"> 
						    <?php echo "<a href='https://www.ourmedia.in/startupsdetails.php?post=$encoded_post_id' class='btn btn-default'>Read More <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i></a>"; ?>
						</div>
						
                    </div>
		            
					<?php } ?>
					
					        <?php
							    echo displayPaginationBelow($setLimit,$page);						    							
							?>

                            <script type="text/javascript">

                            var _gaq = _gaq || [];
                            _gaq.push(['_setAccount', 'UA-38304687-1']);
                            _gaq.push(['_trackPageview']);

                            (function() {
                            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                            })();

                            </script>
					
					
					<!-- END OF STARTUPS POSTS -->
					
					
					
					
					
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