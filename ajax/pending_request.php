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

$action = $_POST['action'];

if($action == 'pending') {
    $user_id=$_POST["user_id"];
    $follow_id=$_POST["follow_id"];
    // die($user_id);
    $rowQuery = "select * from follower where user_id = $user_id and follow_id = $follow_id";
    $rowData = mysqli_query($mysqli, $rowQuery);
    $row=mysqli_fetch_array($rowData);

    if($row) {
       $updateQuery = "update follower set status = 'accepted' where id = ".$row['id'];
       mysqli_query($mysqli, $updateQuery);
    }
    else {
      $insertQuery = "insert into follower(user_id,follow_id,status,created_at) values(".$user_id.",".$follow_id.",'pending',".time().")";

      // die($insertQuery);
       mysqli_query($mysqli, $insertQuery);
    
    }

    $returnData = array(
          'success' => 'success',
          'message' => 'successfully updated'
      );

    die(json_encode($returnData));

}



	?>
	