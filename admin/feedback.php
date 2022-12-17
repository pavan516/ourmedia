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
				<center><h3 style="color:purple;">Feedback By Users</h3></center>
				<?php
	            include("connect.php");
											
		            $get_posts = "select * from feedback order by 1 DESC";
					$run_posts = mysqli_query($mysqli,$get_posts);
					$count = mysqli_num_rows($run_posts);
					if($count==NULL)
					{
						echo "<center><b style='color:green;'>No Feedbacks!</b></center>"; 
					}
					else
				    {
					while ($row_posts = mysqli_fetch_array($run_posts))
	                {
						
			            $feedback_name = $row_posts['feedback_name'];
						$feedback_email = $row_posts['feedback_email'];
			            $feedback = $row_posts['feedback'];
						$feedback_date = $row_posts['feedback_date'];
			            						
						echo "<div class='box shadow postblock'>
						<table>
						    <tr><td>Name </td> : <td>$feedback_name </td></tr>
						    <tr><td>E-Mail </td> : <td>$feedback_email </td></tr>
						    <tr><td>Feedback </td> : <td>$feedback </td></tr>
							<tr><td>Date </td> : <td>$feedback_date </td></tr>
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
