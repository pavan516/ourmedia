<div class="col-md-9">
            <div class="box shadow postblock">			
			        <?php						
						$user = $_SESSION['user_email'];
				        $get_user = "select * from users where user_email='$user'";
				        $run_user = mysqli_query($mysqli,$get_user);
				        $row = mysqli_fetch_array($run_user);
								
				        $user_id = $row['user_id'];
					    $user_name = $row['user_name'];
				        $user_image = $row['user_image'];
						$user_cimage = $row['user_cimage'];							
					?>
			        <?php 
						
						$encoded_user_id = base64_encode($user_id);
						$followersQuery = 'select * from follower  where status = "accepted" and follow_id = '.$user_id;
						// die($followersQuery);
                        $followerRows = mysqli_query($mysqli,$followersQuery);						
					?>
			
		        <Div class="cover-photo" style="background:url('<?php echo "user_images/$user_cimage"; ?>');">			    
		            <div class="profile-photo" style="background:url('<?php echo "user_images/$user_image"; ?>');"></div>
		            <div class="label-name">
		                <h3 style="color:purple;"><?php echo $user_name ?>
						    
						</h3>
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
				    <?php if($row) { ?>
			     	<div class="modal-body">							
						<table id="table_comment_97" class="table_data">
							<tbody>
					<?php 

					 while ($row = mysqli_fetch_array($followerRows))
	                {
	                	?>
	                	<?php
                           $userSelect = 'select * from users where user_id='.$row['user_id'];
                           $user_run = mysqli_query($mysqli,$userSelect);
				           $userRow = mysqli_fetch_array($user_run);
				           $user_image1 = $userRow['user_image'];
	                	?>
							<tr>
								<td width="10%">
									<a href="user_profile.php?u_id=MTA2"><span class="profile-pic" style="background:url('<?php echo "user_images/$user_image1"; ?>'); padding: 15px; border-radius: 50%;"></span></a>
								</td>
								<td width="75%">
									<b><a href="user_profile.php?u_id=$encoded_user_id"> <?= $userRow['user_name'] ?> </a></b>		
								</td>
								<td>

								<?php
			                $rQuery = 'select * from follower where user_id= '.$logged_in_user_id.' and follow_id = '.$row['user_id'] ;

			                // die($rQuery);

			                $rQuery = mysqli_query($mysqli,$rQuery);

			                $rRow = mysqli_fetch_array($rQuery);
			                ?>
							<?php  if($rRow['status'] == 'accepted') { ?>
                        <button class="following btn btn-default" style="margin-top: -8px"><i class="fa fa-check"></i>Accepted</button>

                        <?php } elseif($rRow['status'] == 'pending') { ?>

                        	 <button class="pending btn btn-default" style="margin-top: -8px" ><i class="fa fa-envelope-o"></i> Pending</button>

                          <?php } else { ?>
                        	 <button class="following btn btn-default" style="margin-top: -8px" onclick="follow1(this,<?= $logged_in_user_id ?>,<?= $row['user_id'] ?>)"><i class="fa fa-rss"></i> Follow</button>

                        <?php } ?>

								</td>
							</tr>
						<?php } ?>
																
						</tbody></table>
					<?php } else{ ?>
                        <div class="row">
                        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        		<h4>0 Followers !!</h4>
                        	</div>
                        </div>
					<?php } ?>										
					</div>
			      </div>
			  </div>
			  </div>
			  
		
                <div class="foot">
		            <div class="strip">
					<a href="userhome.php"><i class="fa fa-home"></i> <span class="hidden-xs hidden-sm">Home</span></a>
		            <div class="dropdown">
                        <a href="#"><i class="fa fa-newspaper-o"></i> <span class="hidden-xs hidden-sm">My Posts </span><i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
			                <a style="background-color:purple;color:white;" href="my_posts.php">Posts</a>
                            <a style="background-color:purple;color:white;" href="my_newsposts.php">News</a>
                            <a style="background-color:purple;color:white;" href="my_eventsposts.php">Events</a>
							<a style="background-color:purple;color:white;" href="my_startupsposts.php">Startups</a>
                        </div>
			        </div>
					<?php
					$user = $_SESSION['user_email'];
				    $get_user = "select * from users where user_email='$user'";
				    $run_user = mysqli_query($mysqli,$get_user);
				    $row = mysqli_fetch_array($run_user);
					$user_id = $row['user_id'];
				
                    $get_posts = "select * from messages where status='unread' AND receiver='$user_id'";
				    $run_posts = mysqli_query($mysqli,$get_posts);
				    $messages_count = mysqli_num_rows($run_posts);
				    if($messages_count==Null)
				    {?>
					   <div class="dropdown">
		                <a href="user_chattinglist.php"><i class="fa fa-commenting-o"></i> <span class="hidden-xs hidden-sm">My Messeges </span><i class="fa fa-caret-down"></i></a>
					    <div class="dropdown-content">
			              <!--   <a style="background-color:purple;color:white;" href="my_messages.php?u_id=<?php echo $encoded_user_id ?>">Received Msgs</a>
                            <a style="background-color:purple;color:white;" href="sent_messages.php?u_id=<?php echo $encoded_user_id ?>">Sent Messages</a>
                              <a style="background-color:purple;color:white;" href="user_chattinglist.php" id='all_user_list'>All Chats</a> -->
                        </div>
			        </div>
				    <?php
					}
				    else
				    {?>
					<div class="dropdown">
		                <a href="#"><i class="fa fa-commenting-o"></i> <span class="hidden-xs hidden-sm" >My Messeges </span><i class="fa fa-caret-down" data-notifications='<?php echo $messages_count ?>'></i></a>
					    <div class="dropdown-content">
			                <a style="background-color:purple;color:white;" href="my_messages.php?u_id=<?php echo $encoded_user_id ?>">Received Msgs<span data-notifications='<?php echo $messages_count ?>'></span></a>
                            <a style="background-color:purple;color:white;" href="sent_messages.php?u_id=<?php echo $encoded_user_id ?>">Sent Messages</a>
                          <a style="background-color:purple;color:white;" href="user_chattinglist.php">All Chats</a>


                        </div>
			        </div>
					<?php } ?>
                    <div class="dropdown">					
		                <a href="#"><i class="fa fa-pencil"></i> <span class="hidden-xs hidden-sm">Edit Account </span><i class="fa fa-caret-down"></i></a>
					    <div class="dropdown-content">
			                <a style="background-color:purple;color:white;font-size:95%;" href="update_coverphoto.php?user_id=<?php echo $encoded_user_id ?>">Change Cover Photo</a>
							<a style="background-color:purple;color:white;font-size:95%;" href="change_profile.php?user_id=<?php echo $encoded_user_id ?>">Change Profile Photo</a>
                            <a style="background-color:purple;color:white;font-size:85%;" href="change_status.php?user_id=<?php echo $encoded_user_id ?>">Upload/Change Status</a>
							<a style="background-color:purple;color:white;font-size:95%;" href="change_password.php?user_id=<?php echo $encoded_user_id ?>">Change Password</a>
							<a style="background-color:purple;color:white;font-size:95%;" href="edit_details.php?user_id=<?php echo $encoded_user_id ?>">Edit Your Details</a>							
                        </div>
					</div>
		            <a href="members.php"><i class="fa fa-users"></i> <span class="hidden-xs hidden-sm">Members</span></a>
		            
					<div class="dropdown">
                        <a href="#">More <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
			                <a style="background-color:purple;color:white;" href="<?php echo "user_images/$user_image"; ?>">View Profile</a>
                            <a style="background-color:purple;color:white;" href="<?php echo "user_images/$user_cimage"; ?>">View Cover Photo</a>
                            <a style="background-color:purple;color:white;" href="logout.php">Logout</a>
                        </div>
                    </div>
                    <div class="Pending" style="float:right;">
                    	<?php
			                $pendingQuery = 'select * from follower where status = "pending" and follow_id = '.$user_id;
                            $pendingRows = mysqli_query($mysqli,$pendingQuery);
                            // die($pendingQuery);
			            ?>
						<div class="label-name" style="float: right;">
			              <a style="float: left;margin-top:20px !important;padding:5px !important;" class="btn btn-default" style="" href="#"> Pending</a> <a  style="float: left;margin-top:20px !important;padding:5px !important;" class="btn btn-default" href="#" data-toggle="modal" data-target="#userPending"><?= mysqli_num_rows($pendingRows) ?></a>
		        	</div>
                    </div>
			      </div>
		        </div>
            </div>
            <div id="userPending" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
				    <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Pending List</h4>
				    </div>
			     	<div class="modal-body">
			     	<?php if($row) { ?>							
						<table id="table_comment_97" class="table_data">
							<tbody>
					<?php 

					 while ($row = mysqli_fetch_array($pendingRows))
	                {
	                	?>
	                	    <?php 
                               $userSelect = 'select * from users where user_id='.$row['user_id'];
                               $user_run = mysqli_query($mysqli,$userSelect);
				               $userRow = mysqli_fetch_array($user_run);
				               $user_image1 = $userRow['user_image'];
	                	     ?>
							<tr>
								<td width="10%">
									<a href="user_profile.php?u_id=MTA2"><span class="profile-pic" style="background:url('<?php echo "user_images/$user_image1"; ?>'); padding: 15px; border-radius: 50%;"></span></a>
								</td>
								<td width="75%">
									<b><a href="user_profile.php?u_id=$encoded_user_id"> <?= $userRow['user_name'] ?> </a></b>		
								</td>
								<td>

								
						    <button class="following btn btn-default" onclick="pending(this,<?= $logged_in_user_id ?>,<?= $row['user_id'] ?>)" style="margin-top: -8px"><i class="fa fa-envelope-o"></i> Pending</button>
                            
                            </td>
						</tr>
						<?php } ?>
																
						</tbody></table>
					<?php } else{ ?>
                        <div class="row">
                        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        		<h4>0 pending request !!</h4>
                        	</div>
                        </div>
					<?php } ?>									
					</div>
			      </div>
			  </div>
			</div>
            <script type="text/javascript">
            	function follow1(th,user_id,follow_id) {
            		var data = {
            			'action' : 'follow',
            			'user_id' : user_id,
            			'follow_id' : follow_id
            		}
            		console.log(data);

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
            					location.reload();
            				}
            			}
            		})
            	}

            	function pending(th,follow_id,user_id) {
            		var data = {
            			'action' : 'pending',
            			'user_id' : user_id,
            			'follow_id' : follow_id
            		}
            		console.log(data);

            		$.ajax({
            			url : 'ajax/pending_request.php',
            			type : 'post',
            			data : data,
            			success : function(response) {
            				console.log(response);
            				response = $.parseJSON(response);
            				if(response.success == 'success') {
            					$(th).html(
            						'<i class="fa fa-check"></i> Accepted'
            						);
            					location.reload();
            				}
            			}
            		})
            	}
            </script>