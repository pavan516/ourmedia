<div class="box shadow postblock">
                            
							<?php
								include("connect.php");
								$user = $_SESSION['user_email'];
								$get_user = "select * from users where user_email='$user'";
								$run_user = mysqli_query($mysqli,$get_user);
								$row = mysqli_fetch_array($run_user);
								
								$user_id = $row['user_id'];
								$user_name = $row['user_name'];
								$user_contact = $row['user_contact'];
								$user_b_day = $row['user_b_day'];
								$user_image = $row['user_image'];
								$register_date = $row['register_date'];
								$last_login = $row['last_login'];?>
								
		                <h4 style="color:purple;">About Me</h4>
			            <p>Name : <?php echo $user_name ?></p>
			            <p>Date Of Birth : <?php echo $user_b_day ?></p>
			            <p>User Since : <?php echo $register_date ?></p>
			        </div>