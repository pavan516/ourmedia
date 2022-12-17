<?php
session_start();
?>
<?php include('includes/header.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">
		
		
        <div class="col-md-12">
		
		    	  
	        <div class="box shadow postblock">
			
			
			
			    <div class="box shadow postblock">
                       
					<center><h2 style="color:purple;">Admin Login Here</h2></center>
					
					<div class="box shadow postblock">

                        <form action="" method="post" enctype="multipart/form-data">

						    <div class="form-group">
                                <label class="control-label" for="input-email">E-Mail Address</label>
								<input type="email" name="u_email" value="" id="input-email" placeholder="E-Mail Address" required="required" class="form-control">
						    </div>
							
                            <div class="form-group">
                                <label class="control-label" for="input-password">Password</label>
                                <input type="password" name="u_pass" id="pass" type="password" data-type="password" placeholder="********" required="required" class="form-control">
							</div>
							
														
                            <center><input style="background-color:purple;color:white;" type="submit" name="sign_in" value="Login" class="btn btn-default"></center>
                        
						</form>
						
						<?php
                        include("connect.php");

                        if(isset($_POST['sign_in']))
                        {
	   
	                        $email = $mysqli->real_escape_string($_POST['u_email']);
	                        $pass = $mysqli->real_escape_string($_POST['u_pass']);
                            
							
	                        $get_user = "select * from admin where admin_email='$email' AND admin_pass='$pass'";
	                        $run_user = mysqli_query($mysqli,$get_user);
	                        $check = mysqli_num_rows($run_user);
	   
	                        if($check==1)
	                        {
		                        $_SESSION['admin_email']=$email;
								                                    							
		                        echo "<script>alert('WELCOME TO OURMEDIA Admin!')</script>";
								echo "<script>window.open('index.php','_self')</script>";
		                        
		                        exit();
								
	                        }
	                        else
	                        {
		                        echo "<script>alert('Your Email Or Password Is Incorrect!')</script>";
			                    echo "<script>window.open('login.php','_self')</script>";
	                            exit();
	                        }
		             
					    }   

						?>
                        
						
                    </div>
			    
				</div>
			
					
		    </div>
        
      </div>
	  
	   
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>