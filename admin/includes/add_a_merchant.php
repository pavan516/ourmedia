
				
	            <div class="box shadow postblock">
				
				    	
					<center><h3 style="color:purple;">Add A Merchant</h3></center>
			        
					<form action="" method="post" enctype="multipart/form-data">
					
					    <div class="box shadow postblock">
					    						
                        <div class="form-group">
                            <label class="control-label">Merchant id (Unique)</label>
                            <input type="text" name="merchants_id" class="form-control" placeholder="Merchant id (Unique)" required="required"/>
                        </div>
						
						<div class="form-group">
                            <label class="control-label">Merchant Organisation name</label>
                            <input type="text" name="merchants_orgname" class="form-control" placeholder="Merchant Organisation name" required="required"/>
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Merchants Email</label>
                            <input type="email" name="merchants_email" class="form-control" placeholder="Merchants Email" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Merchants Password</label>
                            <input type="password" name="merchants_pass" class="form-control" placeholder="Merchants Password" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >merchants starting date</label>
                            <input type="date" name="merchants_startingdate" class="form-control" placeholder="merchants starting date" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >merchants ending date</label>
                            <input type="date" name="merchants_endingdate" class="form-control" placeholder="merchants ending date" required="required" />
                        </div>
						
                        <div class="form-group">
                            <label class="control-label" for="input-Contact">Contact</label>
                            <input type="tel" name="merchants_contact" class="form-control" placeholder="Contact" required="required" />
						</div>
						
						<div class="form-group">
                            <label class="control-label">Mode Of Type </label>
                            <input type="text" name="package" class="form-control" placeholder="Mode Of Type" required="required"/>
                        </div>
						
                        </div>
						
                        <center><input style="background-color:purple;color:white;" type="submit" name="merchant" value="Create" class="btn btn-default"></center>
							
                    </form>
					
					<?php
                    include("connect.php");

                    if(isset($_POST['merchant']))
                    {
	                    $merchants_id = $mysqli->real_escape_string($_POST['merchants_id']);
	                    $merchants_orgname = $mysqli->real_escape_string($_POST['merchants_orgname']);
	                    $merchants_email = $mysqli->real_escape_string($_POST['merchants_email']);
	                    $merchants_pass = $mysqli->real_escape_string($_POST['merchants_pass']);
	                    $merchants_startingdate = $mysqli->real_escape_string($_POST['merchants_startingdate']);
	                    $merchants_endingdate = $mysqli->real_escape_string($_POST['merchants_endingdate']);
						$merchants_contact = $mysqli->real_escape_string($_POST['merchants_contact']);
	                    $package = $mysqli->real_escape_string($_POST['package']);
	                    
						    $get_email = "select * from users where user_email='$email'";
	                        $run_email = mysqli_query($mysqli,$get_email);
	                        $check = mysqli_num_rows($run_email);
	   
	                        if($check==1)
	                        {
		                        echo "<script>alert('This email is already registered!')</script>";
		                        exit();
	                        }
	   
	                        	   
	                        else
	                        {
              		   	        								   
		                        $insert = "insert into merchants (merchants_id,merchants_orgname,merchants_email,merchants_pass,merchants_startingdate,merchants_endingdate,merchants_contact,package)
		                        values('$merchants_id','$merchants_orgname','$merchants_email','$merchants_pass','$merchants_startingdate','$merchants_endingdate','$merchants_contact','$package')";
	   
	                            $run_insert = mysqli_query($mysqli,$insert);
		   
		                        if($run_insert)
		                        {
			                        echo "<script>alert('Merchant Created Successful!')</script>";
			                        echo "<script>window.open('merchants.php','_self')</script>";
			                        exit();
		                        }
		                    }
                    }

					?>
				</div>