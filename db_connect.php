<?php

$servename = "localhost";
$username = "root";
$password = "";
$db_name = "worksystem";

$connect = mysqli_connect($servename,$username,$password,$db_name);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()): 
    echo msqli_connect_error();
    echo "error";
endif;

?> 
