<?php
session_start();
?>
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
				<center><h3 style="color:purple;">People Applied For Ads</h3></center>
				<?php
	            include("connect.php");
											
		            $get_posts = "select * from applyads order by 1 DESC";
					$run_posts = mysqli_query($mysqli,$get_posts);
					$count = mysqli_num_rows($run_posts);
					if($count==NULL)
				    { 
					    echo "<center><b style='color:green;'>No One Applied For Ads</b></center>";
					}
					else
					{
					while ($row_posts = mysqli_fetch_array($run_posts))
	                {
						
			            $ads_id = $row_posts['ads_id'];
			            $ads_name = $row_posts['ads_name'];
						$ads_email = $row_posts['ads_email'];
			            $ads_contact = $row_posts['ads_contact'];
						$ads_organisation = $row_posts['ads_organisation'];
			            $ads_msg = $row_posts['ads_msg'];
			            $ads_date = $row_posts['ads_date'];
						
						echo "<div class='box shadow postblock'>
						<table>
						    <tr><td>Name </td> : <td>$ads_name </td></tr>
						    <tr><td>E-Mail </td> : <td>$ads_email </td></tr>
						    <tr><td>Contact </td> : <td>$ads_contact </td></tr>
						    <tr><td>Organisation </td> : <td>$ads_organisation </td></tr>
						    <tr><td>Message </td> : <td>$ads_msg </td></tr>
							<tr><td>Applied Date </td> : <td>$ads_date </td></tr>
						</table><br>
						</div>";
					}
					}
				?>
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
