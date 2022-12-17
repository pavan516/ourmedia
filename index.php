<?php
session_start();
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Our Media | Social Media Platform</title>
<link rel="icon" type="image/png" href="css/logoup.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title itemprop="name">OurMedia - Social Media Platform | Now get more exposure to your Products</title>
<meta property="og:image" content="https://www.ourmedia.in/css/logoup.png">
<meta itemprop="image" content="https://www.ourmedia.in/css/logoup.png">
<meta name="description" content="OurMedia is an online social Media platform to promote Your Articles, Startups, Events and products for free of cost that can reach to lakhs of people; It is a platform where you can connect to unknown people to explore your network and get contacts with different people." />
<meta name="keywords" content="ourmedia, our, our media, ourmedia.in, social media, media, facebook, freelancer, amazon, twitter, instagram, flipkart, hike, indianceo, google, promotion, news, events, startups, technology, mobiles, movies, sports, love stories, entertainments, motivational stories, inspirational stories, college events, College Summits, DJ Events/Nights, Promotional events, Fund raising events, startups, ngo's" /> 


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
				</div><hr />
	  
	            <div class="box shadow postblock">
				
				    <?php include('includes/posts_on_news_index.php'); ?>   
				
				</div>
	
				<div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>	
				
                <div class="box shadow postblock">
				
				    <?php include('includes/posts_on_events_index.php'); ?>
				
				</div>	

				<div class="box shadow postblock">
				
				    <?php include('includes/posts_on_startups_index.php'); ?>
				
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
	<!--<script src="js/hide-resource.js"></script>-->
	
<?php include('includes/footer.php'); ?>
