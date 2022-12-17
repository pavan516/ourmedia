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
$message=$_POST["message"];
$to_id=$_POST["to_id"];
$loginemail=$_SESSION['user_email'];
$arr=array();

$block_sql="select * from block_user where ((sender_id='$loginemail' and reciever_id='$to_id') or (sender_id='$to_id' and reciever_id='$loginemail')) and status='1'";
$block_query=mysqli_query($mysqli, $block_sql);
if(mysqli_num_rows($block_query)>0)
{
    echo json_encode(['action'=>'block']);
    
}else
{  
    $sql="insert into mst_chatmessage(sender_id,receiver_id,message,status) values('$loginemail','$to_id','$message','0')";
    $query=mysqli_query($mysqli,$sql);
    $single_message_fetch="select t1.*, t2.user_image as image from mst_chatmessage t1 join users t2 on t1.sender_id=t2.user_email where sender_id='$loginemail' order by t1.id desc limit 1";
    $query_fetch=mysqli_query($mysqli, $single_message_fetch);
    $row=mysqli_fetch_array($query_fetch);
    array_push($arr, $row);
    echo json_encode($arr);
   
}
	
	?>
	