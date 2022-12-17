<?php

session_start();
session_destroy();

header("location: merchants_login.php");


?>