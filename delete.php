<?php

require('./database.php');

if (isset($_POST['delete'])) {
    $deletedId = $_POST['deleteId'];

    $queryDelete = "DELETE FROM users WHERE id = $deletedId";
    $sqlDelete = mysqli_query($connection, $queryDelete);

    echo '<script>alert("Deleted Successfully")</script>';
    echo '<script>window.location.href = "/php-crud/index.php"</script>';
} else {
    echo '<script>window.location.href = "/php-crud/index.php"</script>';
}
