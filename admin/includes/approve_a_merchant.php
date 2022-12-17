<div class="box shadow postblock">
				
				    										
					<center><h3 style="color:purple;">Approve A Merchant</h3></center>
			        
					<form action="" method="post" enctype="multipart/form-data">
					
					    <div class="box shadow postblock">
					    						
                        <div class="form-group">
                            <label class="control-label">Merchant id (Unique)</label>
                            <input type="text" name="merchants_id" class="form-control" placeholder="Merchant id (Unique)" required="required"/>
                        </div>
												
                        </div>
						
                        <center><input style="background-color:purple;color:white;" type="submit" name="approve" value="Approve" class="btn btn-default"></center>
							
                    </form>
					
					<?php
                    include("connect.php");

                    if(isset($_POST['approve']))
                    {
	                    $merchants_id = $mysqli->real_escape_string($_POST['merchants_id']);
	                    
	                    $insert = "insert into ads_images (merchants_id) values('$merchants_id')";
	   
	                            $run_insert = mysqli_query($mysqli,$insert);
		   
		                        if($run_insert)
		                        {
			                        echo "<script>alert('Merchant Approved Successful!')</script>";
			                        echo "<script>window.open('merchants.php','_self')</script>";
			                        exit();
		                        }
                    }

					?>
				</div>