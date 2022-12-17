<div class="col-md-9">
	<div class="box shadow postblock">
    
		<?php
        include('connect.php');

		///echo $_GET['u_id']; die;

            if(isset($_GET['u_id']))
            {
               $user_id = base64_decode($_GET['u_id']); 

                $select = "select * from users where user_id='$user_id'";
			    $run = mysqli_query($mysqli,$select);
                $row = mysqli_fetch_array($run);
			    // print_r($row); exit();
											
                $id = $row['user_id'];
                $image = $row['user_image'];
                $name = $row['user_name'];
                $contact = $row['user_contact'];
                $gender = $row['user_gender'];
                $last_login = $row['last_login'];
                $register_date = $row['register_date'];
                $user_b_day = $row['user_b_day'];
                $user_cimage = $row['user_cimage'];?>
				<?php 
	            $encoded_id = base64_encode($id);


                $followersQuery = 'select * from follower where status = "accepted" and follow_id = '.$user_id;

                $followerRows = mysqli_query($mysqli,$followersQuery);

            	?>
	
	    <Div class="cover-photo" style="background:url('<?php echo "user_images/$user_cimage"; ?>');">
        	<div class="profile-photo" style="background:url('<?php echo "user_images/$image"; ?>');"></div>
	        <div class="label-name" style="float: left">
	            <h3 style="color:purple;"><?php echo $name ?></h3>
	        </div>
	         <div class="label-name" style="float: right;">
	            <a style="float: left;" class="btn btn-default" href="#"> Followers</a> <a  style="float: left;" class="btn btn-default" href="#" data-toggle="modal" data-target="#userFollowers"><?= mysqli_num_rows($followerRows) ?></a>
        	</div>
        </Div>
        <div id="userFollowers" class="modal fade" role="dialog">
		    <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
				    <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Follower List</h4>
				    </div>
			     	<div class="modal-body">							
						<table id="table_comment_97" class="table_data">
							<tbody>
					<?php 

					 while ($row = mysqli_fetch_array($followerRows))
	                {
	                	?>
							<tr>
								<td width="10%">
									<a href="user_profile.php?u_id=MTA2"><span class="profile-pic" style="background:url('user_images/2017-03-14-17-58-02-164.jpg'); padding: 15px; border-radius: 50%;"></span></a>
								</td>
								<td width="75%">
									<b><a href="user_profile.php?u_id=$encoded_user_id"> Bharath <?= $row['user_id'] ?> </a></b>		
								</td>
								<td>

								<?php
			                $rQuery = 'select * from follower where user_id= '.$logged_in_user_id.' and follow_id = '.$row['user_id'] ;

			                // die($followersQueryCurrent);

			                $rQuery = mysqli_query($mysqli,$rQuery);

			                $rRow = mysqli_fetch_array($rQuery);
			                ?>
							<?php  if($rRow) { ?>
                        <button class="following btn btn-default" style="margin-top: -8px"><i class="fa fa-check"></i> 

                        <?php 
                        	if($rRow['status'] == 'accepted')
                        		echo 'Following';
                        	else 
                        		echo 'Pending';
                        ?>
                        </button>

                        <?php } else { ?>
                        	 <button class="following btn btn-default" style="margin-top: -8px" onclick="follow(this,<?= $logged_in_user_id ?>,<?= $row['user_id'] ?>)"><i class="fa fa-rss"></i> Follow</button>

                        <?php } ?>

								</td>
							</tr>
						<?php } ?>
																
						</tbody></table>
														
					</div>
			      </div>
			  </div>
			</div>
    <?php } ?>
        <div class="foot">
            <div class="strip"><a href="userhome.php"><i class="fa fa-home"></i> <span class="hidden-xs hidden-sm">Home</span></a>
            <div class="dropdown">
                <a href="#
						"><i class="fa fa-newspaper-o"></i> <span class="hidden-xs hidden-sm">Posts </span><i class="fa fa-caret-down"></i></a></a>
                        <div class="dropdown-content">
						    <?php echo "
			                <a style='background-color:purple;color:white;' href='user_newsprofile.php?u_id=$encoded_id'>News</a>
                            <a style='background-color:purple;color:white;' href='user_eventsprofile.php?u_id=$encoded_id'>Events</a>
							<a style='background-color:purple;color:white;' href='user_startupsprofile.php?u_id=$encoded_id'>Startups</a>"; ?>
                        </div>
			        </div>
					
					<?php
                            include('connect.php');

                                if(isset($_GET['u_id']))
                                {
	                                $user_id = base64_decode($_GET['u_id']);
	
	                                $select = "select * from users where user_id='$user_id'";
								
	                                $run = mysqli_query($mysqli,$select);
	                                $row = mysqli_fetch_array($run);
														
	                                
	                                $gender = $row['user_gender'];
	                                
									
									if($gender=='male')
	                                {
		                                $msg="Send Him A Message";
	                                }
								
	                                else
	                                {
	                                	$msg="Send Her A Message";
	                                }


			                $followersQueryCurrent = 'select * from follower where user_id= '.$logged_in_user_id.' and follow_id = '.$user_id ;

			                // die($followersQueryCurrent);

			                $followerRowsCurrent = mysqli_query($mysqli,$followersQueryCurrent);

			                $currentFollower = mysqli_fetch_array($followerRowsCurrent);

	                                ?>
									
		            <?php echo "<a href='message.php?u_id=$encoded_id'><i class='fa fa-commenting-o'></i> <span class='hidden-xs hidden-sm'> $msg </span></a>"; ?>
					            
								<?php } ?>
		            
					<div class="dropdown">
                        <a href="#">More <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
			                <a style='background-color:purple;color:white;' href="<?php echo "user_images/$image"; ?>">view Profile Photo</a>
                            <a style='background-color:purple;color:white;' href="<?php echo "user_images/$user_cimage"; ?>">View Cover Photo</a>
							<a style='background-color:purple;color:white;' href="logout.php">Logout</a>
                        </div>
                    </div>
                    <div class="" style="float:right;">
                       <?php  if($currentFollower) { ?>
                        <button class="following btn btn-default" style="margin-top: -8px"><i class="fa fa-check"></i> 

                        <?php 
                        	if($currentFollower['status'] == 'accepted')
                        		echo 'Following';
                        	else 
                        		echo 'Pending';
                        ?>
                        </button>

                        <?php } else { ?>
                        	 <button class="following btn btn-default" style="margin-top: -8px" onclick="follow(this,<?= $logged_in_user_id ?>,<?= $user_id ?>)"><i class="fa fa-rss"></i> Follow</button>

                        <?php } ?>
                    </div>
			      </div>
		        </div>
            </div>

            <script type="text/javascript">
            	function follow(th,user_id,follow_id) {
            		var data = {
            			'action' : 'follow',
            			'user_id' : user_id,
            			'follow_id' : follow_id
            		}

            		$.ajax({
            			url : 'ajax/user_controller.php',
            			type : 'post',
            			data : data,
            			success : function(response) {
            				console.log(response);
            				response = $.parseJSON(response);
            				if(response.success == 'success') {
            					$(th).html(
            						'<i class="fa fa-envelope-o"></i> Pending'
            						);
            				}
            			}
            		})
            	}
            </script>