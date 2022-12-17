<?php
require_once '../connect.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<?php
error_reporting(0);
session_start();
$loginemail=$_SESSION['user_email'];
echo $all_user_list="SELECT t1.*, t2.status  as user_status, t2.time
FROM users t1
LEFT JOIN online_users t2 ON t1.user_email=t2.user_email where t1.user_email!='$loginemail'";
$query_fetch=mysqli_query($mysqli, $all_user_list);
$arr=array();
while($row=mysqli_fetch_array($query_fetch))
{   
    array_push($arr, $row);
}
//echo json_encode($arr);
	
	?>
	