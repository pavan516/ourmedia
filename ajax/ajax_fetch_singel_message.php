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
$sender=$_POST["sender"];
$receiver=$_POST["receiver"];
$arr=array();
echo $sql="select t1.*, t2.user_image as image from mst_chatmessage t1 join users t2 on t1.sender_id=t2.user_email where t1.receiver_id='$sender' and t1.sender_id='$receiver' and t1.status='0' order by t1.id desc";


$query=mysqli_query($mysqli,$sql);
while($row=mysqli_fetch_array($query))
{
    $id=$row['id']; 
    $query_update="update mst_chatmessage set status='1' where id='$id'";       
    mysqli_query($mysqli, $query_update);
    array_push($arr, $row);    
    
}

//echo json_encode($arr);

	
	
	?>
	