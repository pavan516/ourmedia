<?php
session_start();

if(!isset($_SESSION['user_email']))
{
	header("location: login.php");
}
else
{			
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Our Media</title>
<link rel="icon" type="image/png" href="css/logoup.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
<script src="js/jquery-2.1.4.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/user_function.js" /></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<style>
img {
    border-radius: 8px;
	max-width:100%;
}
</style>
<style>
[data-notifications] {
	position: relative;
}

[data-notifications]:after {
	content: attr(data-notifications);
	position: absolute;
	background: black;
	border-radius: 50%;
	display: inline-block;
	padding: 0.3em;
	color: #f2f2f2;
	right: -17px;
	top: -10px;
}
</style>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	max-width:100%;
	
}

td, th, tr {
    border: 5px solid #dddddd;
    text-align: left;
    padding: 10px;
	max-width:100%;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<style>
html,body        {height:100%;}
.wrapper         {width:80%; max-width: 600px; height:100%; margin:0 auto; background:#CCC}
.h_iframe        {position:relative; padding-top: 56%;}
.h_iframe iframe {position:absolute;top:0;left:0;width:100%; height:100%;}
</style>

<style>
.img {
    border-radius: 8px;
	max-width:100%;
}
</style>

<style>
table_data{
		margin:0px;
		padding:0px;	 
		width:100% !important; 
	}
	table_data td, th{
		border:none !important;
		
	}
	.dropdown-menu{
		position:relative !important;
		float:none !important;
		width: 157px !important;
		
	}
	.navi {
	width: 500px;
	margin: 5px;
	padding:2px 5px;
	border:1px solid #eee;
	}

	.show {
	color: purple;
	margin: 5px 0;
	padding: 3px 5px;
	cursor: pointer;
	font: 15px/19px Arial,Helvetica,sans-serif;
	}
	.show a {
	text-decoration: none;
	}
	.show:hover {
	text-decoration: underline;
	}


	ul.setPaginate li.setPage{
	padding:15px 10px;
	font-size:14px;
	}

	ul.setPaginate{
	margin:0px;
	padding:0px;
	height:100%;
	overflow:hidden;
	font:12px 'Tahoma';
	list-style-type:none;	
	}  

	ul.setPaginate li.dot{padding: 3px 0;}

	ul.setPaginate li{
	float:left;
	margin:0px;
	padding:0px;
	margin-left:5px;
	}



	ul.setPaginate li a
	{
	background: none repeat scroll 0 0 #ffffff;
	border: 1px solid #cccccc;
	color: purple;
	display: inline-block;
	font: 15px/25px Arial,Helvetica,sans-serif;
	margin: 5px 3px 0 0;
	padding: 0 5px;
	text-align: center;
	text-decoration: none;
	}	

	ul.setPaginate li a:hover,
	ul.setPaginate li a.current_page
	{
	background: none repeat scroll 0 0 #0d92e1;
	border: 1px solid #000000;
	color: #ffffff;
	text-decoration: none;
	}

	ul.setPaginate li a{
	color:black;
	display:block;
	text-decoration:none;
	padding:5px 8px;
	text-decoration: none;
	}
</style>
<style>
img {
    border-radius: 8px;
	max-width:100%;
}
</style>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	max-width:100%;
	
}

td, th, tr {
    border: 5px solid #dddddd;
    text-align: left;
    padding: 10px;
	max-width:100%;
}
</style>
<style type="text/css">
	.navi {
	width: 500px;
	margin: 5px;
	padding:2px 5px;
	border:1px solid #eee;
	}

	.show {
	color: purple;
	margin: 5px 0;
	padding: 3px 5px;
	cursor: pointer;
	font: 15px/19px Arial,Helvetica,sans-serif;
	}
	.show a {
	text-decoration: none;
	}
	.show:hover {
	text-decoration: underline;
	}


	ul.setPaginate li.setPage{
	padding:15px 10px;
	font-size:14px;
	}

	ul.setPaginate{
	margin:0px;
	padding:0px;
	height:100%;
	overflow:hidden;
	font:12px 'Tahoma';
	list-style-type:none;	
	}  

	ul.setPaginate li.dot{padding: 3px 0;}

	ul.setPaginate li{
	float:left;
	margin:0px;
	padding:0px;
	margin-left:5px;
	}



	ul.setPaginate li a
	{
	background: none repeat scroll 0 0 #ffffff;
	border: 1px solid #cccccc;
	color: purple;
	display: inline-block;
	font: 15px/25px Arial,Helvetica,sans-serif;
	margin: 5px 3px 0 0;
	padding: 0 5px;
	text-align: center;
	text-decoration: none;
	}	

	ul.setPaginate li a:hover,
	ul.setPaginate li a.current_page
	{
	background: none repeat scroll 0 0 #0d92e1;
	border: 1px solid #000000;
	color: #ffffff;
	text-decoration: none;
	}

	ul.setPaginate li a{
	color:black;
	display:block;
	text-decoration:none;
	padding:5px 8px;
	text-decoration: none;
	}

	</style>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<style>
[data-notifications] {
	position: relative;
}

[data-notifications]:after {
	content: attr(data-notifications);
	position: absolute;
	background: black;
	border-radius: 50%;
	display: inline-block;
	padding: 0.3em;
	color: #f2f2f2;
	right: -17px;
	top: -10px;
}
</style>
<body>
<header>
<div class="max-device">
    <div class="container">
    <div class="row">
	  
        <div class="col-md-7">
            <div style="display: inline-block; width: 100%; margin: 2px 0px 5px 0;">
                <div class="col-xs-4">
                    <div class="row"> 
					    <a href="https://www.ourmedia.in" >
						<b><strong><span style="color:white;"><img src="css/logo.png">OUR MEDIA</span></strong></b></a> 
					</div>
                </div>
                <div class="col-xs-8">
                    <div class="row">
                        <form method="get" action="results.php" enctype="multipart/form-data">
                            <div class="input-group">
                                <input type="text" class="form-control" class="search" name="search_query" placeholder="Search For A Latest Posts" aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">&nbsp;
                                <input type="submit" name="search" value="Search" />
                                </span>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
        <div class="col-md-5" style="text-align:right;">
            <div class="noti-icon">
			    
            <?php
			include("connect.php");
			if(!isset($_SESSION['user_email']))
            {
				
            }
			else
			{
				$user = $_SESSION['user_email'];
				$get_user = "select * from users where user_email='$user'";
				$run_user = mysqli_query($mysqli,$get_user);
				$row = mysqli_fetch_array($run_user);
				
                $logged_in_user_id = $row['user_id'];
				$user_id = $row['user_id'];
				$user_name = $row['user_name'];
				$user_image = $row['user_image'];
				
			    $get_posts = "select * from notifications where status='unread' AND user_id='$user_id'";
				$run_posts = mysqli_query($mysqli,$get_posts);
				$notifications_count = mysqli_num_rows($run_posts);
				if($notifications_count==Null)
				{
					echo "<a href='https://www.ourmedia.in/notifications.php'><i class='fa fa-bullhorn'></i> <span>Notifications</span></a>";
				}
				else
				{
					echo "<a href='https://www.ourmedia.in/notifications.php'><i class='fa fa-bullhorn'></i> <span data-notifications='$notifications_count'>Notifications</span></a>&nbsp&nbsp&nbsp";
				}
				?>
			    <a href="https://www.ourmedia.in/userhome.php" style="float:right;">
				<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>'); padding: 15px; border-radius: 50%;"></span>
				<?php echo $user_name ?><i class="fa fa-sign-out"></i>
				</a>
			</div>
            <?php } ?>
        </div>
		
    </div>
    </div>
	
	<div class="catebar">
    <div class="container">
        <div class="row">
            <ul>
                <li><a href="https://www.ourmedia.in/index.php"><i class="fa fa-home"></i> HOME</a></li>
                <li><a href="https://www.ourmedia.in/insert_newsposts.php">POST ON NEWS</a></li>
                <li><a href="https://www.ourmedia.in/insert_eventsposts.php">POST ON EVENTS</a></li>
                <li><a href="https://www.ourmedia.in/insert_startupsposts.php">POST ON STARTUPS</a></li>  
                <li><a href='https://www.ourmedia.in/news.php'>NEWS</a></li>
                <li><a href='https://www.ourmedia.in/events.php'>EVENTS</a></li>
                <li><a href='https://www.ourmedia.in/startups.php'>STARTUPS</a></li> 				
            </ul>
        </div>
    </div>
    </div>
</div>
</div>



<div class="min-device">

    <h3 style="margin: 7px 0px 4px 0px;">
	    <a href="https://www.ourmedia.in/" ><b><strong><span style="color:white;"><img src="css/logo.png" class="logo">OUR MEDIA</span></strong></b></a>
		<span class="pull-right"><i class="fa fa-search" onClick="$('.searchbar').slideToggle();"></i>
		<i class="fa fa-bars" onClick="$('.catebar').slideToggle();"></i></span>
	</h3>
	
    <div class="searchbar">
        <form method="get" action="results.php" enctype="multipart/form-data">
            <div class="input-group">
                <input type="text" class="form-control" class="search" name="search_query" placeholder="Search For A Latest Posts" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2">&nbsp;
                <button type="submit" name="search"><i class="fa fa-search"></i></button>
                </span>
			</div>
        </form>
    </div>
	
    <div class="catebar">
        <div class="container">
            <div class="row">
                <ul>
				    <li><a href="https://www.ourmedia.in/index.php"><i class="fa fa-home"></i> HOME</a></li>
					<li><a href='https://www.ourmedia.in/news.php'><i class="fa fa-newspaper-o"></i> NEWS</a></li>
					<li><a href='https://www.ourmedia.in/events.php'><i class="fa fa-newspaper-o"></i> EVENTS</a></li>
				    <li><a href='https://www.ourmedia.in/startups.php'><i class="fa fa-newspaper-o"></i> STARTUPS</a></li>
                    <li><a href="https://www.ourmedia.in/insert_newsposts.php"><i class="fa fa-newspaper-o"></i> POST ON NEWS</a></li>
                    <li><a href="https://www.ourmedia.in/insert_eventsposts.php"><i class="fa fa-newspaper-o"></i> POST ON EVENTS</a></li>
                    <li><a href="https://www.ourmedia.in/insert_startupsposts.php"><i class="fa fa-newspaper-o"></i> POST ON STARTUPS</a></li>
					<?php
					$user = $_SESSION['user_email'];
				    $get_user = "select * from users where user_email='$user'";
				    $run_user = mysqli_query($mysqli,$get_user);
				    $row = mysqli_fetch_array($run_user);
				
                    $logged_in_user_id = $row['user_id'];
				    $user_id = $row['user_id'];
					?>
					<?php
					$get_posts = "select * from notifications where status='unread' AND user_id='$user_id'";
				    $run_posts = mysqli_query($mysqli,$get_posts);
				    $notifications_count = mysqli_num_rows($run_posts);
				    if($notifications_count==Null)
				    {
					echo "<a href='https://www.ourmedia.in/notifications.php'><i class='fa fa-bullhorn'></i> <span>Notifications</span></a>";
				    }
				    else
				    {
					echo "<a href='https://www.ourmedia.in/notifications.php'><i class='fa fa-bullhorn'></i> <span data-notifications='$notifications_count'>Notifications</span></a>&nbsp&nbsp&nbsp";
				    }?>
                    <?php
			        if(!isset($_SESSION['user_email']))
                    {
                        echo "<li><a href='https://www.ourmedia.in/login.php'><i class='fa fa-user'></i> Login</span></a></li>";	
                    }
			        else
			        {
				        $user = $_SESSION['user_email'];
				        $get_user = "select * from users where user_email='$user'";
				        $run_user = mysqli_query($mysqli,$get_user);
				        $row = mysqli_fetch_array($run_user);
				
                        $logged_in_user_id = $row['user_id'];				
				        $user_name = $row['user_name'];
				        $user_image = $row['user_image'];?>
						
                    <li><a href="https://www.ourmedia.in/userhome.php" style="float:right;"><span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>'); padding: 15px; border-radius: 50%;"></span><?php echo $user_name ?></a></li>
                    <?php } ?>                    
                </ul>
            </div>
        </div>
    </div>
</div>

</header>
<?php } ?>