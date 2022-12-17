<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript" src="js/hide-resource.js" /></script>
<script type="text/javascript" src="js/script.js" /></script>
<script type="text/javascript" src="js/functionews.js" /></script>
<script type="text/javascript" src="js/functions.js" /></script>
<script type="text/javascript" src="js/functionstart.js" /></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

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
</head>
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
				echo "<a href='https://www.ourmedia.in/notifications.php'><i class='fa fa-bullhorn'></i> <span class='hidden-xs hidden-sm'>Notifications</span></a>";
				echo "<a href='https://www.ourmedia.in/register.php'><i class='fa fa-user'></i> Create Account</span></a>";
                echo "<a href='https://www.ourmedia.in/login.php'><i class='fa fa-user'></i> Login</span></a>";	
            }
			else
			{
				$user = $_SESSION['user_email'];
				$get_user = "select * from users where user_email='$user'";
				$run_user = mysqli_query($mysqli,$get_user);
				$row = mysqli_fetch_array($run_user);
				
                $logged_in_user_id = $row['user_id'];				
				$user_name = $row['user_name'];
				$user_image = $row['user_image'];
				
			    echo "<a href='https://www.ourmedia.in/notifications.php'><i class='fa fa-bullhorn'></i> <span class='hidden-xs hidden-sm'>Notifications</span></a>";
				echo "<a href='https://www.ourmedia.in/register.php'><i class='fa fa-user'></i> Create Account</span></a>";
				?>
			    <a href="userhome.php" style="float:right;">
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
                <li><a href="https://www.ourmedia.in/news.php">NEWS</a></li>
                <li><a href="https://www.ourmedia.in/events.php">EVENTS</a></li>
                <li><a href="https://www.ourmedia.in/startups.php">STARTUPS</a></li>
                <li>
                <div class="dropdown">
				    <a href="#">More <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
					    <a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/apply_internship.php">Apply For Internship<hr></a>
						<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/apply_ads.php">Apply For Ads<hr></a>
						<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/merchants_login.php">Merchants Login<hr></a>
						<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/team_mems.php">Team Members<hr></a>
						<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/interns.php">Interns In Ourmedia<hr></a>
						<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/aboutus.php">About Us<hr></a>
						<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/logout.php">Logout</a> 
					</div>
                </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</div>
</div>



<div class="min-device">

    <h3 style="margin: 7px 0px 4px 0px;">
	    <a href="https://www.ourmedia.in" ><b><strong><span style="color:white;"><img src="css/logo.png" class="logo">OUR MEDIA</span></strong></b></a>
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
                    <li><a href="https://www.ourmedia.in/news.php"><i class="fa fa-newspaper-o"></i> NEWS</a></li>
                    <li><a href="https://www.ourmedia.in/events.php"><i class="fa fa-newspaper-o"></i> EVENTS</a></li>
                    <li><a href="https://www.ourmedia.in/startups.php"><i class="fa fa-newspaper-o"></i> STARTUPS</a></li>
                    <li><a href="https://www.ourmedia.in/notifications.php"><i class="fa fa-bullhorn"></i> Notifications</a></li>
                    <li><a href="https://www.ourmedia.in/register.php"><i class="fa fa-user"></i> Create Account</a>
                    <?php
			        if(!isset($_SESSION['user_email']))
                    {
                        echo "<li><a href='login.php'><i class='fa fa-user'></i> Login</span></a></li>";	
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
                    <li>
					    <div>
						    <a href="#" onClick="$('#mmore').slideToggle();"><i class="fa fa-caret-down"></i> More</a>
                            <div style="display:none;" id="mmore">
							    <a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/apply_internship.php">Apply For Internship</a>
							    <a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/apply_ads.php">Apply For Ads</a>
								<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/merchants_login.php">Merchants Login</a>
								<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/team_mems.php">Team Members</a>
								<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/interns.php">Interns In Ourmedia</a>
								<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/aboutus.php">About Us</a>
								<a style="background-color:purple;color:white;font-size:85%;" href="https://www.ourmedia.in/logout.php">Logout</a>
							</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</header>