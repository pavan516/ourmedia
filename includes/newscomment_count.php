<?php

$posts = "select * from comments_news where post_id='$post_id'";
$run_newsposts = mysqli_query($mysqli,$posts);
$newsposts = mysqli_num_rows($run_newsposts);

echo $newsposts 

?>