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
				<center><h3 style="color:purple;">People Applied For Internship</h3></center>
				<?php
	            include("connect.php");
											
		            $get_posts = "select * from internship order by 1 DESC";
					$run_posts = mysqli_query($mysqli,$get_posts);
					$count = mysqli_num_rows($run_posts);
					if($count==NULL)
				    { 
					    echo "<center><b style='color:green;'>No One Applied For Internship</b></center>";
					}
					else
					{
					while ($row_posts = mysqli_fetch_array($run_posts))
	                {
						$intern_name = $row_posts['intern_name'];
			            $intern_email = $row_posts['intern_email'];
						$intern_contact = $row_posts['intern_contact'];
			            $intern_skills = $row_posts['intern_skills'];
						$intern_content = $row_posts['intern_content'];
			            $intern_gender = $row_posts['intern_gender'];
			            $intern_birthday = $row_posts['intern_birthday'];
						$intern_image = $row_posts['intern_image'];
						$intern_date = $row_posts['intern_date'];
						
						echo "<div class='box shadow postblock'>
						<table>
						    <tr><td>Name </td> : <td>$intern_name </td></tr>
						    <tr><td>E-Mail </td> : <td>$intern_email </td></tr>
						    <tr><td>Contact </td> : <td>$intern_contact </td></tr>
						    <tr><td>Skills </td> : <td>$intern_skills </td></tr>
						    <tr><td>Content </td> : <td>$intern_content </td></tr>
							<tr><td>Gender </td> : <td>$intern_gender </td></tr>
							<tr><td>Birthday Date </td> : <td>$intern_birthday </td></tr>
						    <tr><td>Image </td> : <td><img src='http://ourmedia.in/internship_images/$intern_image' width='200' height='200' /></td></tr>
							<tr><td>Applied Date </td> : <td>$intern_date </td></tr>
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
