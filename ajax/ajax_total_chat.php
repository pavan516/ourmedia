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
$sql='';
$clear_chat_sql="select * from clear_chat where sender_id='$sender' and reciever_id='$receiver'";
$clear_chat_query=mysqli_query($mysqli,$clear_chat_sql);
$res_clear_chat=mysqli_fetch_array($clear_chat_query);
$date_clear_chat=$res_clear_chat['datetime'];
if(!empty($date_clear_chat) && $date_clear_chat != '')
{
    
    
  $sql="select t1.*,t2.user_image as senserimage,t3.user_image as receiverimage from mst_chatmessage t1 join users t2 on t1.sender_id=t2.user_email join users t3 on t1.receiver_id=t3.user_email where ((t1.sender_id='$sender' and t1.receiver_id='$receiver') or (t1.receiver_id='$sender' and t1.sender_id='$receiver')) AND t1.message_time > '$date_clear_chat' order by t1.id asc";
    
} else {
   
  $sql="select t1.*,t2.user_image as senserimage,t3.user_image as receiverimage from mst_chatmessage t1 join users t2 on t1.sender_id=t2.user_email 
    join users t3 on t1.receiver_id=t3.user_email
    where (t1.sender_id='$sender' and t1.receiver_id='$receiver') or (t1.receiver_id='$sender' and t1.sender_id='$receiver')
    order by t1.id asc";

}
$query=mysqli_query($mysqli,$sql);
while($row=mysqli_fetch_array($query))
{   
    array_push($arr, $row);
}
echo json_encode($arr);


	
	
	?>
	