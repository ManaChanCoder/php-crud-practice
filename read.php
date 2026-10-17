<?php

require("./database.php");

$queryUser = "SELECT * FROM users";
$sqlUsers = mysqli_query($connection, $queryUser);
