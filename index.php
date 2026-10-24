<?php
require("./read.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud Practice</title>

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

        table {
            width: 60%;
        }

        table>thead>tr>th {
            font-weight: 600;
            font-size: 21px;
            text-transform: uppercase;
        }

        .button-field {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .button-field>button {
            padding: 6px;
            border: none;
            background-color: #000;
            color: #fff;
            cursor: pointer;
            width: 50%;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <div class="main-container">
        <form class="input-field" method="post" action="/php-crud/create.php">
            <h1>create user</h1>
            <input type="text" required name="username" placeholder="Enter your username">
            <input type="text" required name="password" placeholder="Enter your password">
            <input type="submit" name="create" value="Create">
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php while ($result = mysqli_fetch_array($sqlUsers)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $result['id'] ?></td>
                        <td><?php echo $result['username'] ?></td>
                        <td><?php echo $result['password'] ?></td>
                        <td class="button-field">
                            <form action="/php-crud/update.php" method="post">
                                <input type="submit" name="edit" value="EDIT">
                                <input type="hidden" name="editId" value="<?php echo $result['id'] ?>">
                                <input type="hidden" name="editUsername" value="<?php echo $result['username'] ?>">
                                <input type="hidden" name="editPassword" value="<?php echo $result['password'] ?>">
                            </form>
                            <form action="/php-crud/delete.php" method="post">
                                <input type="submit" name="delete" value="DELETE">
                                <input type="hidden" name="deleteId" value="<?php echo $result['id'] ?>">
                            </form>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

</body>

</html>