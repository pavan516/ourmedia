<?php
session_start();
?>
<?php include('includes/header.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">
		
	    <div class="col-md-12">
			<h3 class="pullbar"><i class="fa fa-bars" onclick="$('.col-left').slideToggle();"></i> ALL CATEGORIES
				<i class="fa fa-angle-left" onclick="$('.col-right').slideToggle();" style="float:right; margin-right: 10px;"></i>
		    </h3>
	    </div>
			
        <div class="col-md-3 col-left">
		    <div class="box shadow postblock">
		        <?php include('includes/left_sidebar.php'); ?>
            </div>
	    </div>
		
        <div class="col-md-6">
		
		    
	        <div class="box shadow postblock">
			
			    <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>
				
				<?php include('includes/add_a_merchant.php'); ?>
				
				<?php include('includes/approve_a_merchant.php'); ?>
				
				<div class="box shadow postblock">
				<center><h3 style="color:purple;">Present Merchants</h3></center>
				<?php
	            include("connect.php");
											
		            $get_posts = "select * from merchants order by 1 DESC";
					$run_posts = mysqli_query($mysqli,$get_posts);
					$count = mysqli_num_rows($run_posts);
					if($count==NULL)
				    { 
					    echo "<center><b style='color:green;'>No Merchants To Show</b></center>";
					}
					else
					{
					while ($row_posts = mysqli_fetch_array($run_posts))
	                {
						$id = $row_posts['id'];
			            $merchants_id = $row_posts['merchants_id'];
			            $merchants_email = $row_posts['merchants_email'];
						$merchants_orgname = $row_posts['merchants_orgname'];
			            $merchants_pass = $row_posts['merchants_pass'];
						$merchants_startingdate = $row_posts['merchants_startingdate'];
			            $merchants_endingdate = $row_posts['merchants_endingdate'];
			            $package = $row_posts['package'];
						
						echo "<div class='box shadow postblock'>
						<table>
						    <tr><td>Merchants Id</td> : <td>$merchants_id </td></tr>
						    <tr><td>Merchants E-Mail</td> : <td>$merchants_email </td></tr>
						    <tr><td>Merchants Organisation Name</td> : <td>$merchants_orgname </td></tr>
						    <tr><td>Merchants Started Date</td> : <td>$merchants_startingdate </td></tr>
						    <tr><td>Merchants Ending Date</td> : <td>$merchants_endingdate </td></tr>
						    <tr><td>Mode Of Type / Package</td> : <td>$package </td></tr>
						</table><br>
						<center><button><a href='delete_merchant.php?id=$id' >Delete</a></button></center>
		                </div>";
						?><?php include('delete_merchant.php');
				    }
					}	 				      
				?>
				</div>
				
				<div class="box shadow postblock">
				<center><h3 style="color:purple;">Approved Merchants</h3></center>
				<?php
	            include("connect.php");
											
		            $get_posts = "select * from ads_images order by 1 DESC";
					$run_posts = mysqli_query($mysqli,$get_posts);
					$count = mysqli_num_rows($run_posts);
					if($count==NULL)
				    { 
					    echo "<center><b style='color:green;'>No Merchants Are Approved</b></center>";
					}
					else
					{
					while ($row_posts = mysqli_fetch_array($run_posts))
	                {
						$id = $row_posts['ads_id'];
			            $merchants_id = $row_posts['merchants_id'];
			            						
						echo "<div class='box shadow postblock'>
						<table>
						    <tr><td>Merchants Id</td> : <td>$merchants_id </td></tr>
						</table><br>
						<center><button><a href='delete_approvedmerchant.php?id=$id' >Delete</a></button></center>
		                </div>";
						?><?php include('delete_approvedmerchant.php');
				    }
					}
				?>
				</div>		
						
				
	            <div class="box shadow postblock">
			        <br><center><b><strong>FOR OFFICIAL ADS CONTACT US AT : 8520872771</strong></b><br><br></center>
				</div>
				
					
		    </div>
        
      </div>
	  
	        <div class="col-md-3 col-right">
	            <div class="box shadow postblock">
		            <?php include('includes/right_sidebar.php'); ?>
		        </div>
            </div>
	  
	  
	  
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
