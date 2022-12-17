<div class="box shadow postblock">
		<br><center>FOR OFFICIAL ADS CONTACT US AT : 8520872771</br></br>
</div>

<center><h3 style="color:green;">All Categories</h3></center>
 
<div class="box shadow postblock">
 
<?php
						include("connect.php");
												
						$get_cats = "select * from news";
						
						$run_cats = mysqli_query($mysqli,$get_cats);
						
						while ($cats_row=mysqli_fetch_array($run_cats))
						{
							$cat_id = $cats_row['cat_id'];
							 
						        $encoded_cat_id 	=	base64_encode($cat_id);
                                						
							$cat_title = $cats_row['cat_title'];
							
							echo "<div class='list-item'>";
							echo "<a href='https://www.ourmedia.in/newscatg.php?cat=$encoded_cat_id'>$cat_title</a>";
							echo "</div>";
						}
							
?>

<?php
						include("connect.php");
												
						$get_cats = "select * from events";
						
						$run_cats = mysqli_query($mysqli,$get_cats);
						
						while ($cats_row=mysqli_fetch_array($run_cats))
						{
							$cat_id = $cats_row['cat_id'];
							  
							    $encoded_cat_id 	=	base64_encode($cat_id);
							
							$cat_title = $cats_row['cat_title'];
							
							echo "<div class='list-item'>";
							echo "<a href='https://www.ourmedia.in/eventscatg.php?cat=$encoded_cat_id'>$cat_title</a>";
                            echo "</div>";							
						}
							
?>

<?php
						include("connect.php");
												
						$get_cats = "select * from startups";
						
						$run_cats = mysqli_query($mysqli,$get_cats);
						
						while ($cats_row=mysqli_fetch_array($run_cats))
						{
							$cat_id = $cats_row['cat_id'];
							
							    $encoded_cat_id 	=	base64_encode($cat_id);
							
							$cat_title = $cats_row['cat_title'];
							
							echo "<div class='list-item'>";
							echo "<a href='https://www.ourmedia.in/startupscatg.php?cat=$encoded_cat_id'>$cat_title</a>";
                            echo "</div>";							
						}
							
?>

</div>

<div class="box shadow postblock">
		<br><center>FOR OFFICIAL ADS CONTACT US AT : 8520872771</br></br>
</div>