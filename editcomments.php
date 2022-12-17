  <?php 

  session_start();
  include("connect.php");
if(isset($_GET['update']))
{
echo  $id = $_GET["id"];
  
  $comment = $_GET['comment'];  

    $sql = "UPDATE post_comments SET comment='$comment'  WHERE id='".$id."'";
     $result = mysqli_query($mysqli,$sql);

    header('location:userhome.php');


$id = $_GET["id"];
  $sql = "SELECT * FROM post_comments WHERE id='".$id."'";
  //echo $sql;
  $query = mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_assoc ($query); 
}
  ?> 