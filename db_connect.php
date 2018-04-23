<?php

$servename = "localhost";
$username = "root";
$password = "";
$db_name = "worksystem";

$connect = mysqli_connect($servename,$username,$password,$db_name);

if (mysqli_connect_error()): 
    echo msqli_connect_error();
    echo "error";
endif;

?> 