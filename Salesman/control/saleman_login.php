<?php
require_once '../Model/Db2_selesman_login.php';
 
 
$db = new mydbsales();
$conn = $db->openCon();
 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
 
    if (empty($username) || empty($password)) {
        echo "<script>alert('Username and password cannot be empty.');</script>";
    } else {
        
        $result = $db->login("salesman_signup_new", $username, $password, $conn);
 
        if (is_array($result)) {
            
            $SalesmanID = $result['SalesmanID'];
           
            
            $trackLogin = $db->trackLogin("salesman_login_new", $SalesmanID, $conn);
 
            if ($trackLogin === true) {
                
                session_start();
                $_SESSION['SalesmanID'] = $SalesmanID;
                
                header('Location: ../view/Seller_db.php');
                exit();
            } else {
                echo "<script>alert('Failed to track login: $trackLogin');</script>";
            }
        } else {
            
            echo "<script>alert('$result');</script>";
        }
    }
 
    $db->closeCon($conn);
}
 
 
 
 
?>