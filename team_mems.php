<?php
session_start();

if(!isset($_SESSION['team_mems_email']))
{
	header("location: team_mems_login.php");
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
	  
	            <div class="box shadow postblock">
                    <center><h3 style="color:purple;">Welcome To OurMedia Team Members</h3></center>		
				</div>
				
				<div class="box shadow postblock">
                  <h4><a  style="color:green" href="team_mems_logout.php">Team Members Logout</a></h4>  
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
						<strong><a style='color:red;' href='$team_mems_omurl'>$team_mems_name</a></strong><br>
						<table>
						    <tr><td>$team_mems_name Profile </td> : <td><a style='color:purple;' href='$team_mems_omurl'>$team_mems_name</a></td></tr>
							<tr><td>$team_mems_name Joined On </td> : <td>$team_mems_joineddate </td></tr>
						    <tr><td>College </td> : <td>$team_mems_college </td></tr>
						    <tr><td>$team_mems_name Birthday </td> : <td>$team_mems_bday </td></tr>
						    <tr><td>$team_mems_name Skill's </td> : <td>$team_mems_skills </td></tr>
						    <tr><td>$team_mems_name Position/Working As </td> : <td>$team_mems_position </td></tr>
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
<?php } ?>