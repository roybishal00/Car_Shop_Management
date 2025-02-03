<?php 

require_once '../Control/Mechanic_sign.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic Registration</title>
    <link rel="stylesheet" href="css/join Mechanic.css">
</head>
<body>
    <div class="container">
        <form>
            <h2>Mechanic Registration</h2>
            <fieldset>
                <legend>Mechanic Information</legend>
                <table>
                    <tr>
                        <td><label for="fName">First Name:</label></td>
                        <td><input type="text" id="fName" name="fName" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" id="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td><label for="confirmPassword">Confirm Password:</label></td>
                        <td><input type="password" id="confirmPassword" name="confirmPassword" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">E-mail:</label></td>
                        <td><input type="text" id="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone Number:</label></td>
                        <td><input type="tel" id="phone" name="phone" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><label for="Number">Nid:</label></td>
                        <td><input type="Number" id="Name" name="Nid"></td>
                    </tr>
                    <tr><td>Gender :</td><td>
    <select>
        <option>Select Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
</select>
                </table>
                <div style="text-align: center;">
                    <button type="submit">Submit</button>
                    <button type="button" onclick="document.querySelector('form').reset();">Clear</button>
                </div>
            </fieldset>
        </form>
    </div>
    <script src="../view/js/vvv.js"></script>
</body>
</html>
