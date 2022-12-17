    <div class="box shadow postblock">
		<br><center>FOR OFFICIAL ADS CONTACT US AT : 8520872771</br></br>
    </div> 
								
																	
	<!-- side posts on news -->
	<div class="box shadow postblock">								
	<?php 
include('connect.php');

$session=session_id();
$time=time();
$time_check=$time-300; //We Have Set Time 5 Minutes

$host="localhost"; // your Host name 
$username="root"; // your Mysql username 
$password=""; // your Mysql password 
$db_name="wwwsuper_media"; // your Database name
$tbl_name="online_users"; // Table name 

//$mysqli = mysqli_connect("$host", "$username", "$password","$db_name")or die("could notconnect toserver."); 


$user = $_SESSION['user_email'];
$get_user = "select * from users where user_email='$user'";
$run_user = mysqli_query($mysqli,$get_user);
$row = mysqli_fetch_array($run_user);
				
$user_id = 	$row['user_id'];			
				

$sql="SELECT * FROM $tbl_name WHERE session='$session'"; 
$result=mysqli_query($mysqli,$sql);
$count=mysqli_num_rows($result); 

//If count is 0 , then enter the values
if($count=="0"){ 
$sql1="INSERT INTO $tbl_name(session, time, user_id)VALUES('$session', '$time', '$user_id')"; 
$result1=mysqli_query($mysqli,$sql1);
}

 // else update the values 
 else {
$sql2="UPDATE $tbl_name SET time='$time' WHERE session = '$session'"; 
$result2=mysqli_query($mysqli,$sql2); 
}

 $sql3="SELECT * FROM $tbl_name";
 $result3=mysqli_query($mysqli,$sql3); 
 $count_user_online=mysqli_num_rows($result3);
 echo "<center><h3 style='color:purple;'>Users Online : $count_user_online </h3></center>";echo "<br>";

 			
 $sql4 = "select * from $tbl_name";
 $run_posts = mysqli_query($mysqli,$sql4);
						
 while ($row_posts = mysqli_fetch_array($run_posts))
 {

 	// echo '<pre/>'; print_r($row_posts); die();
	$user_id = $row_posts['user_id'];
						        																											
	$user = "select * from users where user_id='$user_id'";
								
	$run_user = mysqli_query($mysqli,$user);
    $row_user = mysqli_fetch_array($run_user);
								
	$user_name = $row_user['user_name'];
	$user_image = $row_user['user_image'];
	
	$encoded_user_id =base64_encode($user_id);						
							?>
	    <div class="box shadow postblock"><br>
		<?php echo "<a href='user_profile.php?u_id=$encoded_user_id'>"; ?>
		<span class="profile-pic" style="background:url('<?php echo "user_images/$user_image"; ?>');"></span>
		<strong><?php echo "<a style='color:red;' href='user_profile.php?u_id=$encoded_user_id'>$user_name</a>";?></strong>
		<div class="pull-right action-btn">
		    <?php echo "<b style='color:green;'>Online</b>"; ?> 
		</div><br><br>
		</div>
 <?php }

 // after 5 minutes, session will be deleted 
 $sql5="DELETE FROM $tbl_name WHERE time<$time_check"; 
 $result5=mysqli_query($mysqli,$sql5); 

 //To see the result run this script in multiple browser. 
mysqli_close($mysqli);
 ?>
	</div>										
	<!-- End Of Side Posts on Events -->

    <div class="box shadow postblock">
		<br><center>FOR OFFICIAL ADS CONTACT US AT : 8520872771</br></br>
    </div>	

	