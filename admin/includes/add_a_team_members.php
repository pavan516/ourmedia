	            <div class="box shadow postblock">
				
				    	
					<center><h3 style="color:purple;">Add A Team Member In OurMedia</h3></center>
			        
					<form action="" method="post" enctype="multipart/form-data">
					
					    					
                        <div class="form-group">
                            <label class="control-label">Name </label>
                            <input type="text" name="team_mems_name" class="form-control" placeholder="Name" required="required"/>
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Our Media Url Link</label>
                            <input type="text" name="team_mems_omurl" class="form-control" placeholder="OurMedia Url Link" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Email</label>
                            <input type="email" name="team_mems_email" class="form-control" placeholder="Email" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Password</label>
                            <input type="email" name="team_mems_pass" class="form-control" placeholder="********" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Contact</label>
                            <input type="tel" name="team_mems_contact" class="form-control" placeholder="Contact" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Joined Date</label>
                            <input type="date" name="team_mems_joineddate" class="form-control" placeholder="Joined Date" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >College</label>
                            <input type="text" name="team_mems_college" class="form-control" placeholder="College" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Birthday</label>
                            <input type="date" name="team_mems_bday" class="form-control" placeholder="Birthday" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" for="input-Contact">Skills</label>
							<textarea name="team_mems_skills" rows="5" cols="15" class="form-control" placeholder="Skills" required="required"></textarea>
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Select Image</label>
                            <input type="file" name="team_mems_image" class="form-control" placeholder="Select Image" required="required" />
                        </div>
						
						<div class="form-group">
                            <label class="control-label" >Position</label>
                            <input type="text" name="team_mems_position" class="form-control" placeholder="Position" required="required" />
                        </div>
						
						<center><input style="background-color:purple;color:white;" type="submit" name="team_mems" value="Create" class="btn btn-default"></center>
							
                    </form>
					
					<?php
                    include("connect.php");

                    if(isset($_POST['team_mems']))
                    {
	                    $team_mems_name = $mysqli->real_escape_string($_POST['team_mems_name']);
	                    $team_mems_omurl = $mysqli->real_escape_string($_POST['team_mems_omurl']);
	                    $team_mems_email = $mysqli->real_escape_string($_POST['team_mems_email']);
						$team_mems_pass = $mysqli->real_escape_string($_POST['team_mems_pass']);
	                    $team_mems_contact = $mysqli->real_escape_string($_POST['team_mems_contact']);
						$team_mems_joineddate = $mysqli->real_escape_string($_POST['team_mems_joineddate']);
						$team_mems_college = $mysqli->real_escape_string($_POST['team_mems_college']);
	                    $team_mems_bday = $mysqli->real_escape_string($_POST['team_mems_bday']);
						$team_mems_skills = $mysqli->real_escape_string($_POST['team_mems_skills']);
	                    $team_mems_image = $_FILES['team_mems_image']['name'];
	                    $post_image_tmp = $_FILES['team_mems_image']['tmp_name'];
	                    $team_mems_position = $mysqli->real_escape_string($_POST['team_mems_position']);
						
						    $get_email = "select * from team_mems where team_mems_email='$team_mems_email'";
	                        $run_email = mysqli_query($mysqli,$get_email);
	                        $check = mysqli_num_rows($run_email);
	   
	                        if($check==1)
	                        {
		                        echo "<script>alert('This email is already registered!')</script>";
		                        exit();
	                        }
	                  	   
	                        else
	                        {
              		   	        move_uploaded_file($post_image_tmp, "http://ourmedia.in/team_mems_images/$team_mems_image");
								
		                        $insert = "insert into team_mems (team_mems_name,team_mems_omurl,team_mems_email,team_mems_pass,team_mems_contact,team_mems_joineddate,team_mems_college,team_mems_bday,team_mems_skills,team_mems_image,team_mems_position)
		                        values('$team_mems_name','$team_mems_omurl','$team_mems_email','$team_mems_pass','$team_mems_contact','$team_mems_joineddate','$team_mems_college','$team_mems_bday','$team_mems_skills','$team_mems_image','$team_mems_position')";
	   
	                            $run_insert = mysqli_query($mysqli,$insert);
		   
		                        if($run_insert)
		                        {
			                        echo "<script>alert('Team Member Created Successfully!')</script>";
			                        echo "<script>window.open('team_members.php','_self')</script>";
			                        exit();
		                        }
		                    }
                    }

					?>
				</div>