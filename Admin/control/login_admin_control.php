<?php
 
 
include '../Model/Db1_login_admin.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
 
    // Open the database connection
    $db = new mydb();
    $conn = $db->openCon();
 
 
    // Check login credentials
    $result = $db->login("login_tbl", $username, $password, $conn);
 
    if ($result && $result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['user_id'] = $user['User_id'];
        //echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
        // Redirect to the dashboard or another page
        //header("Location: dashboard.php");
        header('Location: ../view/Admin_db.php');
        exit();
    } else {
        echo "<script>alert('Invalid username or password.');</script>";
    }
 
    // Close the connection
    $conn->close();
}
?>