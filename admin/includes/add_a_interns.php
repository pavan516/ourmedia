	            <div class="box shadow postblock">
				
				    	
					<center><h3 style="color:purple;">Add A Intern In OurMedia</h3></center>
			        
					<form action="" method="post" enctype="multipart/form-data">
					
					    
					    						
                        <div class="form-group">
                            <label class="control-label">Name </label>
                            <input type="text" name="interns_name" class="form-control" placeholder="Name" required="required"/>
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Our Media Url Link</label>
                            <input type="text" name="interns_omurl" class="form-control" placeholder="OurMedia Url Link" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Email</label>
                            <input type="email" name="interns_email" class="form-control" placeholder="Email" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Password</label>
                            <input type="pass" name="interns_pass" class="form-control" placeholder="********" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Contact</label>
                            <input type="tel" name="interns_contact" class="form-control" placeholder="Contact" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Joined Date</label>
                            <input type="date" name="interns_joineddate" class="form-control" placeholder="Joined Date" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >College</label>
                            <input type="text" name="interns_college" class="form-control" placeholder="College" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Birthday</label>
                            <input type="date" name="interns_bday" class="form-control" placeholder="Birthday" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" for="input-Contact">Skills</label>
							<textarea name="interns_skills" rows="5" cols="15" class="form-control" placeholder="Skills" required="required"></textarea>
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Select Image</label>
                            <input type="file" name="interns_image" class="form-control" placeholder="Select Image" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Position</label>
                            <input type="text" name="interns_position" class="form-control" placeholder="Position" required="required" />
                        </div>
						
						<center><input style="background-color:purple;color:white;" type="submit" name="interns" value="Create" class="btn btn-default"></center>
							
                    </form>
					
					<?php
                    include("connect.php");

                    if(isset($_POST['interns']))
                    {
	                    $interns_name = $mysqli->real_escape_string($_POST['interns_name']);
	                    $interns_omurl = $mysqli->real_escape_string($_POST['interns_omurl']);
	                    $interns_email = $mysqli->real_escape_string($_POST['interns_email']);
	                    $interns_pass = $mysqli->real_escape_string($_POST['interns_pass']);
						$interns_contact = $mysqli->real_escape_string($_POST['interns_contact']);
						$interns_joineddate = $mysqli->real_escape_string($_POST['interns_joineddate']);
						$interns_college = $mysqli->real_escape_string($_POST['interns_college']);
	                    $interns_bday = $mysqli->real_escape_string($_POST['interns_bday']);
						$interns_skills = $mysqli->real_escape_string($_POST['interns_skills']);
	                    $interns_image = $_FILES['interns_image']['name'];
	                    $post_image_tmp = $_FILES['interns_image']['tmp_name'];
	                    $interns_position = $mysqli->real_escape_string($_POST['interns_position']);
						
						    $get_email = "select * from interns where interns_email='$interns_email'";
	                        $run_email = mysqli_query($mysqli,$get_email);
	                        $check = mysqli_num_rows($run_email);
	   
	                        if($check==1)
	                        {
		                        echo "<script>alert('This email is already registered!')</script>";
		                        exit();
	                        }
	                  	   
	                        else
	                        {
              		   	        move_uploaded_file($post_image_tmp, "http://ourmedia.in/internship_images/$interns_image");
								
		                        $insert = "insert into interns (interns_name,interns_omurl,interns_email,interns_pass,interns_contact,interns_joineddate,interns_college,interns_bday,interns_skills,interns_image,interns_position)
		                        values('$interns_name','$interns_omurl','$interns_email','$interns_pass','$interns_contact','$interns_joineddate','$interns_college','$interns_bday','$interns_skills','$interns_image','$interns_position')";
	   
	                            $run_insert = mysqli_query($mysqli,$insert);
		   
		                        if($run_insert)
		                        {
			                        echo "<script>alert('Intern Created Successfully!')</script>";
			                        echo "<script>window.open('interns.php','_self')</script>";
			                        exit();
		                        }
		                    }
                    }

					?>
				</div>