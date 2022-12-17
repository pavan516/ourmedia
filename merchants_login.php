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
                       
					<center><h2 style="color:purple;">Merchants Admin Login</h2></center>
					
					<div class="box shadow postblock">

                        <form action="" method="post" enctype="multipart/form-data">

						    <div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
								<input type="email" name="merchants_email" placeholder="E-Mail Address" required="required" class="form-control">
						    </div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-password">Password</label>
                                <input type="password" name="merchants_pass" placeholder="********" required="required" class="form-control">
							</div>
							
														
                            <center><input style="background-color:purple;color:white;" type="submit" name="sign_in" value="Merchants Login" class="btn btn-default"></center>
                        
						</form>
						
						<?php
                        include("connect.php");

                        if(isset($_POST['sign_in']))
                        {
	   
	                        $merchants_email = $_POST['merchants_email'];
	                        $merchants_pass = $_POST['merchants_pass'];
                            							
	                        $get_user = "select * from merchants where merchants_email='$merchants_email' AND merchants_pass='$merchants_pass'";
	                        $run_user = mysqli_query($mysqli,$get_user);
	                        $check = mysqli_num_rows($run_user);
	   
	                        if($check==1)
	                        {
		                        $_SESSION['merchants_email']=$merchants_email;
								                                    							
		                        echo "<script>window.open('https://www.ourmedia.in/merchants_admin_panel.php','_self')</script>";
		                        echo "<script>alert('WELCOME TO Merchants Admin Panel!')</script>";
		                        exit();
								
	                        }
	                        else
	                        {
		                        echo "<script>alert('Your Email Or Password Is Incorrect!')</script>";
			                    echo "<script>window.open('https://www.ourmedia.in/merchants_login.php','_self')</script>";
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
