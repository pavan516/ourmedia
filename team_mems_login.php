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
                       
					<center><h2 style="color:purple;">Interns Admin Login</h2></center>
					
					<div class="box shadow postblock">

                        <form action="" method="post" enctype="multipart/form-data">

						    <div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
								<input type="email" name="team_mems_email" placeholder="E-Mail Address" required="required" class="form-control">
						    </div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-password">Password</label>
                                <input type="password" name="team_mems_pass" placeholder="********" required="required" class="form-control">
							</div>
							
														
                            <center><input style="background-color:purple;color:white;" type="submit" name="sign_in" value="Team Members Login" class="btn btn-default"></center>
                        
						</form>
						
						<?php
                        include("connect.php");

                        if(isset($_POST['sign_in']))
                        {
	   
	                        $team_mems_email = $_POST['team_mems_email'];
	                        $team_mems_pass = $_POST['team_mems_pass'];
                            							
	                        $get_user = "select * from team_mems where team_mems_email='$team_mems_email' AND team_mems_pass='$team_mems_pass'";
	                        $run_user = mysqli_query($mysqli,$get_user);
	                        $check = mysqli_num_rows($run_user);
	   
	                        if($check==1)
	                        {
		                        $_SESSION['team_mems_email']=$team_mems_email;
								                                    							
		                        echo "<script>alert('WELCOME TO Team Members PANEL!')</script>";
								echo "<script>window.open('https://www.ourmedia.in/team_mems.php','_self')</script>";
		                        exit();
								
	                        }
	                        else
	                        {
		                        echo "<script>alert('Your Email Or Password Is Incorrect!')</script>";
			                    echo "<script>window.open('https://www.ourmedia.in/team_mems_login.php','_self')</script>";
	                            exit();
	                        }
		             
					    }   

						?>
                        						
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
