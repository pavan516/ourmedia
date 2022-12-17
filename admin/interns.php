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
				
				<?php include('includes/add_a_interns.php'); ?>
				
				
				
				<div class="box shadow postblock">
				<center><h3 style="color:purple;">Interns In OurMedia</h3></center>
				<?php
	            include("connect.php");
											
		            $get_posts = "select * from interns order by 1 DESC";
					$run_posts = mysqli_query($mysqli,$get_posts);
					$count = mysqli_num_rows($run_posts);
					if($count==NULL)
				    { 
					    echo "<center><b style='color:green;'>No Interns In Ourmedia</b></center>";
					}
					else
					{
					while ($row_posts = mysqli_fetch_array($run_posts))
	                {
						$interns_id = $row_posts['interns_id'];
						$interns_name = $row_posts['interns_name'];
	                    $interns_omurl = $row_posts['interns_omurl'];
	                    $interns_email = $row_posts['interns_email'];
						$interns_pass = $row_posts['interns_pass'];
	                    $interns_contact = $row_posts['interns_contact'];
						$interns_joineddate = $row_posts['interns_joineddate'];
						$interns_college = $row_posts['interns_college'];
	                    $interns_bday = $row_posts['interns_bday'];
						$interns_skills = $row_posts['interns_skills'];
	                    $interns_image = $row_posts['interns_image'];
	                    $interns_position = $row_posts['interns_position'];
						
												
						echo "<div class='box shadow postblock'>
						<a href='$interns_omurl'><span class='profile-pic' style='background:url('http://ourmedia.in/internship_images/$interns_image';)'></span>
						<strong><a style='color:red;' href='$interns_omurl'>$interns_name</a></strong><br><br>
						<div class='box shadow postblock'>
						<table>
						    <tr><td>$interns_name Profile </td> : <td><a style='color:purple;' href='$interns_omurl'>$interns_name</a></td></tr>
						    <tr><td>$interns_name Joined On </td> : <td>$interns_joineddate </td></tr>
							<tr><td>E-Mail </td> : <td>$interns_email </td></tr>
							<tr><td>Password </td> : <td>$interns_pass </td></tr>
							<tr><td>Contact </td> : <td>$interns_contact </td></tr>
						    <tr><td>College </td> : <td>$interns_college </td></tr>
						    <tr><td>$interns_name Birthday </td> : <td>$interns_bday </td></tr>
						    <tr><td>$interns_name Skill's </td> : <td>$interns_skills </td></tr>
						    <tr><td>$interns_name Position/Working As </td> : <td>$interns_position </td></tr>
						</table><br></div>
						<center><button><a href='delete_intern.php?interns_id=$interns_id' >Delete</a></button></center>
		                </div>";
						?><?php include('delete_intern.php');
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
