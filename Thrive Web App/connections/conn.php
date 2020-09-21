<?php

$webserver='localhost';
$user='dcampbell42';

include('password.php');
$db= 'dcampbell42';

$conn = mysqli_connect($webserver, $user, $password, $db);

if(!$conn){
    die("connection failed ".mysql_connect_error());
} 



