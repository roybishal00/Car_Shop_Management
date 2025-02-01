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
    <script sre = "all_cs.css"></scprit>
</head>
</head>
<body>
    <div class="container">
        <h1>Car Shop Management</h1>
        <form action="" method="POST">
            <table>
           
            <tr>
                    <td><label for="username">User Id:</label></td>
                    <td><input type="text" id="username" name="username"></td>
                </tr>
               
               
                <td><label for="password">Password:</label></td>
<td>
    <input type="password" id="password" name="password">
    <input type="checkbox" id="show-password" onclick="togglePassword()"> Show Password
</td>
 
<script>
    function togglePassword() {
        const passwordField = document.getElementById("password");
        passwordField.type = passwordField.type === "password" ? "text" : "password";
    }
</script>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit "name="login" value="login">Login</button>
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
 