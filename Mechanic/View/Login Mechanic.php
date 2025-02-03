<?php  
include '../Control/Login_Admin_control.php'

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Shop Management - Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/Login Mechanic.css">
</head>
<body>
    <div class="container">
        <h1>Car Shop Management</h1>
        <form action="Mechanic db.php" method="POST">
            <table>
                <tr>
                    <td><label for="username">User Id:</label></td>
                    <td><input type="text" id="username" name="username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Login</button>
                        <br>
                        <br>
                        <button type="submit">Reset Password</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
 