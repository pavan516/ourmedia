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
if($message == 'block_user')
{
    $loginemail=$_SESSION['user_email'];   
    $sql="select * from block_user where sender_id='$loginemail' and reciever_id='$to_id'";    
    $query=mysqli_query($mysqli, $sql);
    $block_user_res= mysqli_fetch_array($query);
    if(mysqli_num_rows($query)>0)
    {   
        $status=$block_user_res['status'];
        $id=$block_user_res['id'];
        if($status == 0)
        {
            $update_sql="update block_user set status='1' where id='$id'";
            $update_query=mysqli_query($mysqli, $update_sql); 
            echo json_encode(['action'=>'block']);
        }
        if($status == 1)
        {
            $update_sql="update block_user set status='0' where id='$id'";
            $update_query=mysqli_query($mysqli, $update_sql); 
            echo json_encode(['action'=>'unblock']);
        }  
    }else
    {
        $insert_sql= "insert into block_user(sender_id,reciever_id,status) values('$loginemail','$to_id','1')";
        $insert_query= mysqli_query($mysqli, $insert_sql);         
        echo json_encode(['action'=>'block']);
        
    }
}


	?>
	