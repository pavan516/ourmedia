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
				
				<?php include('includes/add_a_team_members.php'); ?>
				
				<div class="box shadow postblock">
				<center><h3 style="color:purple;">OurMedia Team Members In T.K.R College</h3></center>
				<?php
	            include("connect.php");
											
		            $get_posts = "select * from team_mems order by 1 DESC";
					$run_posts = mysqli_query($mysqli,$get_posts);
					$count = mysqli_num_rows($run_posts);
					if($count==NULL)
				    { 
					    echo "<center><b style='color:green;'>No Team Members To Show</b></center>";
					}
					else
					{
					while ($row_posts = mysqli_fetch_array($run_posts))
	                {
						$team_mems_id = $row_posts['team_mems_id'];
						$team_mems_name = $row_posts['team_mems_name'];
	                    $team_mems_omurl = $row_posts['team_mems_omurl'];
	                    $team_mems_email = $row_posts['team_mems_email'];
						$team_mems_pass = $row_posts['team_mems_pass'];
	                    $team_mems_contact = $row_posts['team_mems_contact'];
						$team_mems_joineddate = $row_posts['team_mems_joineddate'];
						$team_mems_college = $row_posts['team_mems_college'];
	                    $team_mems_bday = $row_posts['team_mems_bday'];
						$team_mems_skills = $row_posts['team_mems_skills'];
	                    $team_mems_image = $row_posts['team_mems_image'];
	                    $team_mems_position = $row_posts['team_mems_position'];
						
												
						echo "<div class='box shadow postblock'>
						<a href='$team_mems_omurl'><span class='profile-pic' style='background:url('http://ourmedia.in/team_mems_images/$team_mems_image';)'></span>
						<strong><a style='color:red;' href='$team_mems_omurl'>$team_mems_name</a></strong><br><br>
						<div class='box shadow postblock'>
						<table>
						    <tr><td>$team_mems_name Profile </td> : <td><a style='color:purple;' href='$team_mems_omurl'>$team_mems_name</a></td></tr>
							<tr><td>E-mail </td> : <td>$team_mems_email </td></tr>
							<tr><td>Password  </td> : <td>$team_mems_pass </td></tr>
							<tr><td>Contact </td> : <td>$team_mems_contact </td></tr>
						    <tr><td>$team_mems_name Joined On </td> : <td>$team_mems_joineddate </td></tr>
						    <tr><td>College </td> : <td>$team_mems_college </td></tr>
						    <tr><td>$team_mems_name Birthday </td> : <td>$team_mems_bday </td></tr>
						    <tr><td>$team_mems_name Skill's </td> : <td>$team_mems_skills </td></tr>
						    <tr><td>$team_mems_name Position/Working As </td> : <td>$team_mems_position </td></tr>
						</table><br></div>
						<center><button><a href='delete_team_mems.php?team_mems_id=$team_mems_id' >Delete</a></button></center>
		                </div>";
						?><?php include('delete_team_mems.php');
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
