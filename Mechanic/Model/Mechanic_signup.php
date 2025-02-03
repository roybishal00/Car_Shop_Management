<?php
require_once '../Model/Mechanic_signup.php';
 
$db = new MyDD();
$conn = $db->openCon();
 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Sanitize user input to avoid XSS attacks
    $name = htmlspecialchars(trim($_POST['Name']));
    $Password = htmlspecialchars(trim($_POST['password']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $nid = htmlspecialchars(trim($_POST['nid']));
    $gender = htmlspecialchars(trim($_POST['gender']));
   
 
    // Pass these values to insertUser method
    $table = "mechanic_signup_new";  // Correct table name
    $result = $db->insertUser($table, $name, $Password,$email,$phone,$nid,$gender, $conn);
 
    if ($result === true) {
        echo "<script>alert('Registration successful.');</script>";
    } else {
        echo "<script>alert('$result');</script>"; // Show the error message (e.g., email already exists)
    }
}
?>