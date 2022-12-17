
<?php 
	require_once("connect.php");
	

	 $id = $_GET["id"];
	

	 $query = mysqli_query($mysqli,"DELETE FROM `post_comments` WHERE id='".$id."'");
	if ($query) {

      header('location:userhome.php');	
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
?>