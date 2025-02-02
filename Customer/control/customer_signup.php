<?php
require_once '../Model/customer_signup.php';

$db = new MyDD();
$conn = $db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  
    $name = htmlspecialchars(trim($_POST['Name']));
    $Password = htmlspecialchars(trim($_POST['password']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $nid = htmlspecialchars(trim($_POST['nid']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    

    $table = "customer_signup_new";  
    $result = $db->insertUser($table, $name, $Password,$email,$phone,$nid,$gender, $conn);

    if ($result === true) {
        echo "<script>alert('Registration successful.');</script>";
    } else {
        echo "<script>alert('$result');</script>"; 
    }
}
?>


