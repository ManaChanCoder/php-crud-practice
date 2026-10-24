<?php
require("./database.php");

if (isset($_POST['edit'])) {
    $editId = $_POST['editId'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
}

if (isset($_POST['update'])) {
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];

    $queryUpdate = "UPDATE users SET username = '$updateUsername', password = '$updatePassword' WHERE id = $updateId";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);

    echo '<script>alert("Update Successfully")</script>';
    echo '<script>window.location.href = "/php-crud/index.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>

    <style>
        .main-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 30px;
        }

        .input-field>h1 {
            text-align: center;
            text-transform: uppercase;
        }

        .input-field>input {
            padding: 6px;

        }
    </style>
</head>

<body>

    <div class="main-container">
        <form class="input-field" method="post" action="/php-crud/update.php">
            <h1>create user</h1>
            <input type="text" required name="updateUsername" value="<?php echo $editUsername ?>">
            <input type="text" required name="updatePassword" value="<?php echo $editPassword ?>">
            <input type="submit" name="update" value="Update">
            <input type="hidden" name="updateId" value="<?php echo $editId ?>">
        </form>


    </div>

</body>

</html>