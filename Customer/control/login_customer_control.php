<?php 
require_once '../Model/Db3_customer_login.php';

$db = new mydbcustomer();
$conn = $db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
 
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username and password cannot be empty.');</script>";
    } else {
        
        $result = $db->login("customer_signup_new", $username, $password, $conn);

        if (is_array($result)) {
            
            $CustomerID = $result['CustomerID'];
            
           
            $trackLogin = $db->trackLogin("customer_login", $CustomerID, $conn);

            if ($trackLogin === true) {
                
                session_start();
                $_SESSION['CustomerID'] = $CustomerID;
             
                header('Location: ../view/Customer_db.php');
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