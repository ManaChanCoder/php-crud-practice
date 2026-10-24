<?php

require("./database.php");

$queryUser = "SELECT * FROM users ORDER BY id DESC";
$sqlUsers = mysqli_query($connection, $queryUser);
