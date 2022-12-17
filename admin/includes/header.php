<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Our Media | Admin</title>
<link rel="icon" type="image/png" href="css/logoup.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script type="text/javascript" src="js/script.js" />
</script>
<script type="text/javascript" src="js/functionews.js" />
</script>
<script type="text/javascript" src="js/functions.js" />
</script>
<script type="text/javascript" src="js/functionstart.js" />
</script>
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
<style>
img {
    border-radius: 8px;
	max-width:100%;
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
					    <a href="#" >
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
			    <a href="index.php">HOME</a>
                <a href="adminnews.php">NEWS</a>
                <a href="adminevents.php">EVENTS</a>
                <a href="adminstartups.php">STARTUPS</a>
				<a href="adminposts.php">POSTS</a>
                <a href="logout.php">LOGOUT</a>
			</div>
            
        </div>
		
    </div>
    </div>
	
	<div class="catebar">
    <div class="container">
        <div class="row">
            <ul>
			    <li><a href="merchants.php">Merchants</a></li>
                <li><a href="applied_ads.php">Applied-Ads</a></li>
				<li><a href="applied_internship.php">Applied-Internship</a></li>
				<li><a href="interns.php">Interns</a></li>
				<li><a href="team_members.php">Team-Members</a></li>
				<li><a href="members.php">Ourmedia-Users</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="#">About-Us</a></li>				
            </ul>
        </div>
    </div>
    </div>
</div>
</div>



<div class="min-device">

    <h3 style="margin: 7px 0px 4px 0px;">
	    <a href="#" ><b><strong><span style="color:white;"><img src="css/logo.png" class="logo">OUR MEDIA</span></strong></b></a>
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
				    <li><a href="index.php">HOME</a></li>
                    <li><a href="adminnews.php">NEWS</a></li>
                    <li><a href="adminevents.php">EVENTS</a></li>
                    <li><a href="adminstartups.php">STARTUPS</a></li>
				    <li><a href="adminposts.php">POSTS</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    <li>
					    <div>
						    <a href="#" onClick="$('#mmore').slideToggle();"> More <i class="fa fa-caret-down"></i></a>
                            <div style="display:none;" id="mmore">
							    <a href="merchants.php">Merchants</a>
                                <a href="applied_ads.php">Applied-Ads</a>
				                <a href="applied_internship.php">Applied-Internship</a>
				                <a href="interns.php">Interns</a>
				                <a href="team_members.php">Team-Members</a>
				                <a href="members.php">Ourmedia-Users</a>
				                <a href="feedback.php">Feedback</a>
				                <a href="#">About-Us</a>	
							</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</header>
