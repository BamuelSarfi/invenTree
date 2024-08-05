<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "test_db";//replace with 'user_db' keep layout

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
    echo "Connection Failed";
}