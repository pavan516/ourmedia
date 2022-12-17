<?php
session_start();

if(!isset($_SESSION['admin_email'])){

header("location: login.php");

}
?>
<?php include('includes/header.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">
		
		
        <div class="col-md-12">
		
		    
	        <div class="box shadow postblock">
			
			    <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div><hr />
	  
	            <div class="box shadow postblock">
				
				<?php
	            include("connect.php");
	
	                $posts = "select * from users";
	                $run_posts = mysqli_query($mysqli,$posts);
	                $posts = mysqli_num_rows($run_posts);?>

	
                    <table>
                        <tr>
                            <td style="color:red"><b><strong>Total Our Media Users</b></strong></td>
	                        <td style="color:red"><b><strong><a href="members.php" ><?php echo $posts ?> ("Click Here To View All The Users")</a></b></strong></td>
                        </tr>
                    </table><br>
                <!-- End Of Users --> 


                <!-- Users -->

                <center><h4> Total Number Of Messages sent and received by users</h4></center>

                <?php
	            include("connect.php");
	
	                $posts = "select * from messages";
	                $run_posts = mysqli_query($mysqli,$posts);
	                $posts = mysqli_num_rows($run_posts);?>


                    <table>
                        <tr>
                            <td style="color:red"><b><strong>Total Our Sent/Received By Users</b></strong></td>
	                        <td style="color:red"><b><strong><?php echo $posts ?></b></strong></td>
                        </tr>
                    </table><br><br>

                <!-- End Of Users --> 

                <!-- news Count -->

                <center><h4> Total Number Of Posts On News</h4></center>

                <?php
	            include("connect.php");
	
	                $posts = "select * from newsposts";
	                $run_posts = mysqli_query($mysqli,$posts);
	                $posts = mysqli_num_rows($run_posts);
	
	                $posts1 = "select * from newsposts where category_id='1' ";
	                $run_posts1 = mysqli_query($mysqli,$posts1);
	                $posts1 = mysqli_num_rows($run_posts1);
	
	                $posts2 = "select * from newsposts where category_id='2' ";
	                $run_posts2 = mysqli_query($mysqli,$posts2);
	                $posts2 = mysqli_num_rows($run_posts2);
	
	                $posts3 = "select * from newsposts where category_id='3' ";
	                $run_posts3 = mysqli_query($mysqli,$posts3);
	                $posts3 = mysqli_num_rows($run_posts3);
	
	                $posts4 = "select * from newsposts where category_id='4' ";
	                $run_posts4 = mysqli_query($mysqli,$posts4);
	                $posts4 = mysqli_num_rows($run_posts4);
	
	                $posts5 = "select * from newsposts where category_id='5' ";
	                $run_posts5 = mysqli_query($mysqli,$posts5);
	                $posts5 = mysqli_num_rows($run_posts5);
	
	                $posts6 = "select * from newsposts where category_id='6' ";
	                $run_posts6 = mysqli_query($mysqli,$posts6);
	                $posts6 = mysqli_num_rows($run_posts6);
	
	                $posts7 = "select * from newsposts where category_id='7' ";
	                $run_posts7 = mysqli_query($mysqli,$posts7);
	                $posts7 = mysqli_num_rows($run_posts7);
	
	                $posts8 = "select * from newsposts where category_id='8' ";
	                $run_posts8 = mysqli_query($mysqli,$posts8);
	                $posts8 = mysqli_num_rows($run_posts8);
	            ?>
 
                <table>
                    <tr>
                        <td><b><strong>Posts On Technology</b></strong></td>
	                    <td><b><strong><?php echo $posts1 ?></b></strong></td>
                    </tr>
	                <tr>
                        <td><b><strong>Posts On Mobiles</b></strong></td>
	                    <td><b><strong><?php echo $posts2 ?></b></strong></td>
                    </tr>
	                
	                <tr>
                        <td><b><strong>Posts On Movies</b></strong></td>
	                    <td><b><strong><?php echo $posts3 ?></b></strong></td>
                    </tr>
	                <tr>
                        <td><b><strong>Posts On Sports</b></strong></td>
	                    <td><b><strong><?php echo $posts4 ?></b></strong></td>
                    </tr>
					<tr>
                        <td><b><strong>Posts On Love Stories</b></strong></td>
	                    <td><b><strong><?php echo $posts5 ?></b></strong></td>
                    </tr>
					<tr>
                        <td><b><strong>Posts On Motivational Stories</b></strong></td>
	                    <td><b><strong><?php echo $posts6 ?></b></strong></td>
                    </tr>
					<tr>
                        <td><b><strong>Posts On Novels</b></strong></td>
	                    <td><b><strong><?php echo $posts7 ?></b></strong></td>
                    </tr>
					<tr>
                        <td><b><strong>Posts On Others</b></strong></td>
	                    <td><b><strong><?php echo $posts8 ?></b></strong></td>
                    </tr>
	                <tr>
                        <td style="color:red"><b><strong>Total Posts</b></strong></td>
	                    <td style="color:red"><b><strong><?php echo $posts ?></b></strong></td>
                    </tr>
                </table><br><br>

                <!-- End Of news Count -->

<!-- Events Count -->

<center><h4> Total Number Of Posts On Events</h4></center>

<?php
	include("connect.php");
	
	$posts = "select * from eventsposts";
	$run_posts = mysqli_query($mysqli,$posts);
	$posts = mysqli_num_rows($run_posts);
	
	$posts1 = "select * from eventsposts where category_id='1' ";
	$run_posts1 = mysqli_query($mysqli,$posts1);
	$posts1 = mysqli_num_rows($run_posts1);
	
	$posts2 = "select * from eventsposts where category_id='2' ";
	$run_posts2 = mysqli_query($mysqli,$posts2);
	$posts2 = mysqli_num_rows($run_posts2);
	
	$posts3 = "select * from eventsposts where category_id='3' ";
	$run_posts3 = mysqli_query($mysqli,$posts3);
	$posts3 = mysqli_num_rows($run_posts3);
	
	$posts4 = "select * from eventsposts where category_id='4' ";
	$run_posts4 = mysqli_query($mysqli,$posts4);
	$posts4 = mysqli_num_rows($run_posts4);
	
	$posts5 = "select * from eventsposts where category_id='5' ";
	$run_posts5 = mysqli_query($mysqli,$posts5);
	$posts5 = mysqli_num_rows($run_posts5);
	
	$posts6 = "select * from eventsposts where category_id='6' ";
	$run_posts6 = mysqli_query($mysqli,$posts6);
	$posts6 = mysqli_num_rows($run_posts6);
	
?>
	
<table>
    <tr>
        <td><b><strong>Posts On College Events</b></strong></td>
	    <td><b><strong><?php echo $posts1 ?></b></strong></td>
    </tr>
	<tr>
        <td><b><strong>Posts On College Summits</b></strong></td>
	    <td><b><strong><?php echo $posts2 ?></b></strong></td>
    </tr>
	<tr>
        <td><b><strong>Posts On DJ Events/Nights</b></strong></td>
	    <td><b><strong><?php echo $posts3 ?></b></strong></td>
    </tr>
	<tr>
        <td><b><strong>Posts On Promotional events</b></strong></td>
	    <td><b><strong><?php echo $posts4 ?></b></strong></td>
    </tr>
	<tr>
        <td><b><strong>Posts On Fund raising events</b></strong></td>
	    <td><b><strong><?php echo $posts5 ?></b></strong></td>
    </tr>
	<tr>
        <td><b><strong>Posts On Other events</b></strong></td>
	    <td><b><strong><?php echo $posts6 ?></b></strong></td>
    </tr>
	<tr>
        <td style="color:red"><b><strong>Total Posts</b></strong></td>
	    <td style="color:red"><b><strong><?php echo $posts ?></b></strong></td>
    </tr>
</table><br><br>

<!-- End Of events Count -->


<!-- startups Count -->

<center><h4> Total Number Of Posts On Startups</h4></center>

<?php
	include("connect.php");
	
	$posts = "select * from startupsposts";
	$run_posts = mysqli_query($mysqli,$posts);
	$posts = mysqli_num_rows($run_posts);
	
	$posts1 = "select * from startupsposts where category_id='1' ";
	$run_posts1 = mysqli_query($mysqli,$posts1);
	$posts1 = mysqli_num_rows($run_posts1);
	
	$posts2 = "select * from startupsposts where category_id='2' ";
	$run_posts2 = mysqli_query($mysqli,$posts2);
	$posts2 = mysqli_num_rows($run_posts2);
	
	$posts3 = "select * from startupsposts where category_id='3' ";
	$run_posts3 = mysqli_query($mysqli,$posts3);
	$posts3 = mysqli_num_rows($run_posts3);
	
	?>

<table>
    <tr>
        <td><b><strong>Posts On Startup's</b></strong></td>
	    <td><b><strong><?php echo $posts1 ?></b></strong></td>
    </tr>
	<tr>
        <td><b><strong>Posts On Startup's</b></strong></td>
	    <td><b><strong><?php echo $posts2 ?></b></strong></td>
    </tr>
	<tr>
        <td><b><strong>Other Posts</b></strong></td>
	    <td><b><strong><?php echo $posts3 ?></b></strong></td>
    </tr>
	<tr>
        <td style="color:red"><b><strong>Total Posts</b></strong></td>
	    <td style="color:red"><b><strong><?php echo $posts ?></b></strong></td>
    </tr>	
</table>
</center><br><br>

<!-- End Of startups Count -->


<!-- Posts -->

<center><h4> Total Number Of Posts </h4></center>

<?php
	include("connect.php");
	
	$posts = "select * from posts";
	$run_posts = mysqli_query($mysqli,$posts);
	$posts = mysqli_num_rows($run_posts);
			
	?>
	
<table>
    <tr>
        <td style="color:red"><b><strong>Total No Of Posts</b></strong></td>
	    <td style="color:red"><b><strong><?php echo $posts ?></b></strong></td>
    </tr>
	
</table>
</center><br><br>

<!-- End Of Posts -->


				
				</div>
				
					
		    </div>
        
        </div>
	  
	  
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
