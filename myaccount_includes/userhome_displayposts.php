<?php 

  include("connect.php");

if(isset($_POST['submit']))
{
 //$id = $_GET["id"];
//echo $_SESSION['id']= $_GET["id"];
  
  $comment = $_POST['comment'];  

    $sql = "UPDATE post_comments SET comment='$comment'  WHERE id='".$_POST['id']."'";
     $result = mysqli_query($mysqli,$sql);

    //header('location:userhome.php');




}
  

?>
					
<div class="box shadow postblock">


<form method="post" action="">
<div class='modal fade' id='edit' tabindex='-1' role='dialog' aria-labelledby='edit' aria-hidden='true'>
      <div class='modal-dialog'>
    <div class='modal-content'>
          <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></button>
        <h4 class='modal-title custom_align' id='Heading'>Edit Your Detail</h4>
      </div>
          <div class='modal-body'>
          <div class='form-group'>
        <input class='form-control' name="comment" type='text' id="edit_comments" value=""> 
        <input type="hidden" id="edit_commit_id" name="id" value="">
        </div>
       
        
      </div>
          <div class='modal-footer '>
        <input  type='submit' name="submit" class='btn btn-warning btn-lg' value="submit" style='width: 100%;'><span class='glyphicon glyphicon-ok-sign'></span> </form>
        </div>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

    
    
    
    <div class='modal fade' id='delete' tabindex='-1' role='dialog' aria-labelledby='edit' aria-hidden='true'>
      <div class='modal-dialog'>
    <div class='modal-content'>
          <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></button>
        <h4 class='modal-title custom_align' id='Heading'>Delete this entry</h4>
      </div>
          <div class='modal-body'>
       
       <div class='alert alert-danger'><span class='glyphicon glyphicon-warning-sign'></span> Are you sure you want to delete this Record?</div>
       <input type="hidden" id="delet_commit_id" name="id" value="">
       
      </div>
        <div class='modal-footer '>
        <input type="submit" name="submit" class='btn btn-success'  value="yes"> 
        <button type='button' class='btn btn-default' data-dismiss='modal'><span class='glyphicon glyphicon-remove'></span> No</button>
      </div>
 
        </div>
   
  </div>
     
    </div>

<div class="box shadow postblock">

<!-- Display Posts -->

						
	<?php   
											
		$get_posts = "select * from posts order by 1 DESC";
						
		$run_posts = mysqli_query($mysqli,$get_posts);
						
		while ($row_posts = mysqli_fetch_array($run_posts))
	    {
			$post_id = $row_posts['post_id'];
			$user_id = $row_posts['user_id'];
			$post_title = $row_posts['post_title'];
			$post_date = $row_posts['post_date'];
			$post_image = $row_posts['post_image'];
			$post_youtubeurl = $row_posts['post_youtubeurl'];
																											
			$user = "select * from users where user_id='$user_id'";
								
					$count_posts_like_unlike = mysqli_query($mysqli,"select * from like_unlike_posts where post_id='$post_id'");
		            $total_like_this_post = mysqli_num_rows($count_posts_like_unlike);
								 
						$logged_in_user_like_post	=	 mysqli_query($mysqli,"select * from like_unlike_posts where post_id='$post_id' AND user_id='$logged_in_user_id'");
						$total_like_this_post_by_logged_in_user = mysqli_num_rows($logged_in_user_like_post);
								
							$count_posts_comments = mysqli_query($mysqli,"select * from post_comments where post_id='$post_id'");
		                    $total_comment_for_this_post = mysqli_num_rows($count_posts_comments);
								
			$run_user = mysqli_query($mysqli,$user);
			$row_user = mysqli_fetch_array($run_user);
								
			$user_name = $row_user['user_name'];
			$user_image = $row_user['user_image'];
	
	?>
							
		<div class="box shadow postblock">
                        
			<h5>
						    
				<?php 
								
				    $encoded_user_id 	=	base64_encode($user_id);
					echo "<a href='user_profile.php?u_id=$encoded_user_id'>"; ?>
					<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
					<strong><?php echo "<a style='color:red;' href='user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong>
            
			</h5><br>
						
			<div class="text">	
				<?php echo $post_title ?>
			</div><br>
                        
			<?php
			if($post_image=='')
			{
			}
			else
			{
			    echo    "<a href='posts_images/$post_image' ><img src='posts_images/$post_image'/></a>"; 
				
			}
			?>
						                   						
            <?php
			if($post_youtubeurl=='')
			{
			}
			else
			{
			    echo   "<div style='position:relative; width:100%; height:0px; padding-bottom:56.25%;'>
                            <iframe style='position:absolute; left:0; top:0; width:100%; height:100%'
                                src='//www.youtube.com/embed/$post_youtubeurl' allowfullscreen=''>
                            </iframe>
                        </div>";
				
			}?>	        
						
            <div class="foot" align="left" class="post-action">
								
				<?php
					
					$post_owner_id 				=	$user_id;
					$encoded_post_id			=	base64_encode($post_id);
										
					if($total_like_this_post_by_logged_in_user>0)
					{
					    $thump_direction_class	=	'fa fa-thumbs-o-down';
					    $text		=	'Unlike';
					}
					else
					{
						$thump_direction_class	=	'fa fa-thumbs-o-up';
						$text		=	'Like';
					}
								
				?>
								 
								
				<a href="javascript:void(0)" class="btn btn-default" class="" onclick="like_button('<?php echo $encoded_post_id; ?>');" >
				    <i id="thumps_icon_<?php echo  $post_id; ?>" class="<?php echo $thump_direction_class; ?>"></i> 
					<span id="total_like_post_<?php echo  $post_id; ?>"><?php echo $text.' '.$total_like_this_post; ?></span>
				</a> 
							
				<a href="javascript:void" class="btn btn-default" id="see_more_button_<?php echo  $post_id; ?>" onclick="more_comments('<?php echo $encoded_post_id; ?>');" >
				    <i class="fa fa-commenting-o"></i>
					    Comments  
					<span id="total_comment_post_<?php echo  $post_id; ?>"><?php echo $total_comment_for_this_post; ?></span>
				</a>
								
			<div><br />
									
									
			<table id="table_comment_<?php echo  $post_id; ?>" class="table_data">
										
				<?php
										
					$comment_array = mysqli_query($mysqli,"select * from post_comments where post_id='$post_id' ORDER BY `id` DESC limit 1  ");
					while ($row_comments = mysqli_fetch_array($comment_array))
					{
												
						$user_id 	=	$row_comments['user_id'];
						$get_user = "select * from users where user_id='$user_id'";
						$run_user = mysqli_query($mysqli,$get_user);
						$row = mysqli_fetch_array($run_user);
												
						$user_image	=	$row['user_image'];
				
				?>
														
				<tr>
					<td width="10%">
						<a href="user_profile.php?u_id=<?php echo $encoded_user_id ?>"><span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>'); padding: 15px; border-radius: 50%;"></span></i></a>
					</td>
												
					<td width="100%">
						<?php 
							echo '<b><a style="color:purple;" href="user_profile.php?u_id=$encoded_user_id" > '.ucfirst($row['user_name']).' </a></b><br>';
							echo ucfirst($row_comments['comment']);
						?>
					</td>
				</tr>
											
				<?php } ?>
				
			</table>
									
			</div><br />
			
			
			<?php
				$user = $_SESSION['user_email'];
				$get_user = "select * from users where user_email='$user'";
				$run_user = mysqli_query($mysqli,$get_user);
				$row = mysqli_fetch_array($run_user);
								
				$image = $row['user_image'];
				
				?>
								
				<a href="user_profile.php?u_id=<?php echo $encoded_user_id ?>"><span class="profile-pic" style="background:url('<?php echo "user_images/$image"; ?>'); padding: 15px; border-radius: 50%;"></span></i></a>
				<input type="text" id="comment_<?php echo  $post_id; ?>" placeholder="Write a comment..." class="input" style="width:280px;height:30px;margin-left:10px;" rel="<?php echo  $encoded_post_id; ?>" />
			</div>
		</div>
			
			<?php } ?>
                        					
</div>

<script type="text/javascript">
	function editCommmonet(id='', comments=''){
		//alert('rest'+id+'comments='+comments);
		$("#edit_commit_id").val(id);
		$("#edit_comments").val(comments);
	}
</script>
<script type="text/javascript">
	function deletCommonet(id=''){		
		alert('Are you sure');
		window.location.href = 'deletecomments.php?id='+id;
		}
</script>