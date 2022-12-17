<?php
session_start();

if(!isset($_SESSION['merchants_email']))
{
	header("location: merchants_login.php");
}
else
{			
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
				
	                <h4><a  style="color:green" href="merchants_logout.php">Merchants Logout</a></h4>
					
					<!-- news -->
					
                    <?php 
				    include('connect.php');
					
			        $merchants = $_SESSION['merchants_email'];
	                $get_user = "select * from merchants where merchants_email='$merchants'";
	                $run_user = mysqli_query($mysqli,$get_user);
	                $row = mysqli_fetch_array($run_user);
								
	                $merchants_id = $row['merchants_id'];
			        $package = $row['package'];
					
			        if($package == 'news')
				    {?>
				
			        <div class="box shadow postblock">
	            	    <?php include('merchants_admin_panel/news_ads_center.php'); ?>
				    </div>
					
				    <div class="box shadow postblock">
	                	<?php include('merchants_admin_panel/news_ads_sidebar.php'); ?>
	                </div>
										
				    <?php } ?>
					
					<!-- End Of News -->
					
					
					<!-- events -->
					
                    <?php 
				    include('connect.php');
					
			        $merchants = $_SESSION['merchants_email'];
	                $get_user = "select * from merchants where merchants_email='$merchants'";
	                $run_user = mysqli_query($mysqli,$get_user);
	                $row = mysqli_fetch_array($run_user);
								
	                $merchants_id = $row['merchants_id'];
			        $package = $row['package'];
					
			        if($package == 'events')
				    {?>
			        
					<div class="box shadow postblock">
	            	    <?php include('merchants_admin_panel/events_ads_center.php'); ?>
				    </div>
					
				    <div class="box shadow postblock">
	                	<?php include('merchants_admin_panel/events_ads_sidebar.php'); ?>
	                </div>
										
				    <?php } ?>
					
					<!-- End Of Events -->
					
					<!-- startups -->
					
                    <?php 
				    include('connect.php');
					
			        $merchants = $_SESSION['merchants_email'];
	                $get_user = "select * from merchants where merchants_email='$merchants'";
	                $run_user = mysqli_query($mysqli,$get_user);
	                $row = mysqli_fetch_array($run_user);
								
	                $merchants_id = $row['merchants_id'];
			        $package = $row['package'];
					
			        if($package == 'startups')
				    {?>
			        
					<div class="box shadow postblock">
	            	    <?php include('merchants_admin_panel/startups_ads_center.php'); ?>
				    </div>
					
				    <div class="box shadow postblock">
	                	<?php include('merchants_admin_panel/startups_ads_sidebar.php'); ?>
	                </div>
										
				    <?php } ?>
					
					<!-- End Of Startups -->
					
					<!-- OTHERS -->
					
                    <?php 
				    include('connect.php');
					
			        $merchants = $_SESSION['merchants_email'];
	                $get_user = "select * from merchants where merchants_email='$merchants'";
	                $run_user = mysqli_query($mysqli,$get_user);
	                $row = mysqli_fetch_array($run_user);
								
	                $merchants_id = $row['merchants_id'];
			        $package = $row['package'];
					
			        if($package == 'others')
				    {?>
			        
					<div class="box shadow postblock">
	            	    <?php include('merchants_admin_panel/others_ads_center.php'); ?>
				    </div>
					
				    <div class="box shadow postblock">
	                	<?php include('merchants_admin_panel/others_ads_sidebar.php'); ?>
	                </div>
										
				    <?php } ?>
					
					<!-- End Of userprofile -->
					
					<?php 
				    include('connect.php');
					
			        $merchants = $_SESSION['merchants_email'];
	                $get_user = "select * from merchants where merchants_email='$merchants'";
	                $run_user = mysqli_query($mysqli,$get_user);
	                $row = mysqli_fetch_array($run_user);
								
	                $merchants_id = $row['merchants_id'];
			        $package = $row['package'];
					
			        if($package == 'userprofile')
				    {?>
			        
					<div class="box shadow postblock">
	            	    <?php include('merchants_admin_panel/userprofile_ads_center.php'); ?>
				    </div>
					
				    <div class="box shadow postblock">
	                	<?php include('merchants_admin_panel/userprofile_ads_sidebar.php'); ?>
	                </div>
										
				    <?php } ?>
					
					<!-- End Of userprofile -->
					
	  
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
<?php } ?>