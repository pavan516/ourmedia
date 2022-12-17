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
$chat_theme=$_POST["chat_theme"];
$reciever_id=$_POST['reciever_id'];
$arr=array();
$loginemail=$_SESSION['user_email'];
if($_POST["action"] == 'theme')
{

$sql_theme_select="select * from chat_theme where user_email='$loginemail' and reciever_id='$reciever_id'";
$theme_query=mysqli_query($mysqli, $sql_theme_select);
$chat_row=mysqli_fetch_array($theme_query);
$id=$chat_row['id'];
if(mysqli_num_rows($theme_query)>0)
{   
    $update_theme_sql="update chat_theme set theme='$chat_theme' where id='$id'";
    mysqli_query($mysqli, $update_theme_sql);
    $sql_get_theme="select * from chat_theme where id='$id'";
    $query_get_theme=mysqli_query($mysqli, $sql_get_theme);
    $row_get_theme=mysqli_fetch_array($query_get_theme);    
    echo json_encode($row_get_theme);
    
}else
{  
    $sql="insert into chat_theme(user_email,reciever_id, theme,status) values('$loginemail','$reciever_id', '$chat_theme','0')";
    $query=mysqli_query($mysqli,$sql);
    $sql_get_theme="select * from chat_theme where user_email='$loginemail' and reciever_id='$reciever_id'";
    $query_get_theme=mysqli_query($mysqli, $sql_get_theme);
    $row_get_theme=mysqli_fetch_array($query_get_theme);    
    echo json_encode($row_get_theme);   
}
}	
?>
	