 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery Cropbox Plugin Demo</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="Image-Cropping/src/jquery.cropbox.css" rel="stylesheet" type="text/css">
<style type="text/css">
            div.cropbox .btn-file {
                position: relative;
                overflow: hidden;
            }
            div.cropbox .btn-file input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                min-width: 0%;
                min-height: 0%;
                font-size: ;
                text-align: right;
                filter: alpha(opacity=0);
                opacity: 0;
                outline: none;
                background: white;
                cursor: inherit;
                display: block;
            }
            div.cropbox .cropped {
                margin-top: ;
            }
            .syntaxhighlighter table .container:before {
                display: none !important;
            }
            footer {
                margin-top: 10px;
                border-top: #cdcdcd 1px solid;
            }
            .container { margin:0px auto  auto;}
        </style>
</head>
                            <?php
								//include("connect.php");
								
								$user = $_SESSION['user_email'];
								$get_user = "select * from users where user_email='$user'";
								$run_user = mysqli_query($mysqli,$get_user);
								$row = mysqli_fetch_array($run_user);
								
								$logged_in_user_id = $row['user_id'];
								$user_id = $row['user_id'];
								$user_name = $row['user_name'];
								$user_image = $row['user_image'];
								
						    ?>
						        <?php 
						                $encoded_user_id 	=	base64_encode($user_id);						
							    ?>
								
						        <?php echo "<a href='user_profile.php?u_id=$encoded_user_id'>"; ?>
							    <span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
							    <strong><?php echo "<a style='color:red;' href='user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong>
							    
						        <form action="" method="post" enctype="multipart/form-data"><br>
							         
							        <div class="form-group">
								        <textarea name="post_title" cols="3" rows="3" class="form-control" placeholder="Whats On Your Mind?"></textarea>
								    </div>	

                                    <div id="message" class="alert alert-info"></div> 
                                    <div id="plugin" class="cropbox">
                                        <div class="workarea-cropbox">
                                            <div class="bg-cropbox">
                                                <img class="image-cropbox">
                                                <div class="membrane-cropbox"></div>
                                            </div>
                                            <div class="frame-cropbox">
                                                <div class="resize-cropbox"></div>
                                            </div>
                                        </div>
                                      <div class="btn-group">
                                            <span class="btn btn-primary btn-file">
                                                <i class="glyphicon glyphicon-folder-open"></i>
                                                Browse <input type="file"  name="post_image"  accept="image/*">
                                            </span>
                                            <button type="button" class="btn btn-success btn-crop">
                                                <i class="glyphicon glyphicon-scissors"></i> Crop
                                            </button>
                                            <button type="button" class="btn btn-warning btn-reset">
                                                <i class="glyphicon glyphicon-repeat"></i> Reset
                                            </button>
                                        </div>
                                      <div class="cropped panel panel-default">
                                            <div class="panel-heading"><h3 class="panel-title">Result of cropping</h3></div>
                                            <div class="panel-body">...</div>
                                        </div>
                                        <div class="form-group">
                                            <label>Info of cropping</label>
                                            <textarea  class="data form-control" rows="5"></textarea>
                                        </div>
                                    </div>
									
									<strong style="color:purple;">Share Your Youtube Video With Us<br></strong>
								    <div class="form-group">
									<textarea name="post_youtubeurl" cols="1" rows="1" class="form-control" placeholder="Copy After '=' from your youtube video url"></textarea>
									</div>
						
							        <div class="form-group" align="center">
							            <input style="background-color:purple;color:white;" type="submit" name="submit" value="Post" class="btn btn-default" />
							        </div>
								     
								</form>
								
								<!-- php Code For above Form -->
								
								
		                        <?php
                             //   include("connect.php");
								
                                if(isset($_POST['submit']))
                                {
	                                $user = $_SESSION['user_email'];
	                                $get_user = "select * from users where user_email='$user'";
	                                $run_user = mysqli_query($mysqli,$get_user);
	                                $row = mysqli_fetch_array($run_user);
								
	                                $user_id = $row['user_id'];
									$user_name = $row['user_name'];
	                                $logged_in_user_id = $row['user_id'];
	                                $post_title = addslashes($_POST['post_title']);
									$post_youtubeurl = $_POST['post_youtubeurl'];
									
									$post_image = $_FILES['post_image']['name'];
	                                $post_image_tmp = $_FILES['post_image']['tmp_name'];
									if($post_title=='' & $post_youtubeurl=='' & $post_image=='')
									{
										echo "<center style='color:purple;'>You Can't Post Empty One!</center>";
									}
									else
									{
									move_uploaded_file($post_image_tmp, "posts_images/$post_image");
									
									$insert_posts = "insert into posts (user_id,post_title,post_image,post_youtubeurl,post_date)
                	                values ('$user_id','$post_title','$post_image','$post_youtubeurl',NOW())";
									
									$run = mysqli_query($mysqli,$insert_posts);
									
									$notifications = "insert into notifications (user_id,content,post_date,category,status)
                	                values ('$user_id','Your Post Has Been Successfully Posted',NOW(),'userhome','unread')";
	
	                                $run = mysqli_query($mysqli,$notifications);
									
	                                if($run)
	                                {
	                                        echo "<script>alert('Your Post Has Been Published Successfully!')</script>";
		                                    echo"<script>window.open('userhome.php','_self')</script>";
   	                                }
									$from = "From: ourmedia_alerts@ourmedia.in";
		                            $to = $user;
		                            $subject = "OurMedia Alerts";
         
		                            $body = "$user_name Someone has liked your post!";
       
                                    mail($to, $subject, $body, $from);
									
									}
                                }

                                ?>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>
<script src="Image-Cropping/src/jquery.cropbox.js"></script>
<script>
$('#plugin').cropbox({
    selectors: {
        inputInfo: '#plugin textarea.data',
        inputFile: '#plugin input[type="file"]',
        btnCrop: '#plugin .btn-crop',
        btnReset: '#plugin .btn-reset',
        resultContainer: '#plugin .cropped .panel-body',
        messageBlock: '#message'
    },
    imageOptions: {
        class: 'img-thumbnail',
        style: 'margin-right: 5px; margin-bottom: 5px'
    },
    variants: [
        {
            width: 200,
            height: 200,
            minWidth: 180,
            minHeight: 200,
            maxWidth: 350,
            maxHeight: 350
        },
        {
            width: 150,
            height: 200
        }
    ],
    messages: [
        'Crop a middle image.',
        'Crop a small image.'
    ]
});
</script>
