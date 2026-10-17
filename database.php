<?php
$host = 'localhost';
$user = 'root';
$pass = '12345';
$database = 'php_crud_practice';

$connection = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_error()) echo 'Error:' . mysqli_connect_error() . '<br>';
