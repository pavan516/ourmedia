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
$message=$_POST["action"];
$to_id=$_POST["to_id"];
if($message == 'clear_chat')
{
    $loginemail=$_SESSION['user_email'];   
    $sql="select * from clear_chat where sender_id='$loginemail' and reciever_id='$to_id'";
    $query=mysqli_query($mysqli, $sql);    
    if(mysqli_num_rows($query)>0)
    {
        $update_sql="update clear_chat set status='1' where sender_id='$loginemail' and reciever_id='$to_id'";
        $update_query=mysqli_query($mysqli, $update_sql); 
        echo json_encode(['action'=>'success']);
           
        
    }else
    {
        $insert_sql= "insert into clear_chat(sender_id,reciever_id,status) values('$loginemail','$to_id','0')";
        $insert_query= mysqli_query($mysqli, $insert_sql);         
        echo json_encode(['action'=>'success']);
        
    }
}


	?>
	