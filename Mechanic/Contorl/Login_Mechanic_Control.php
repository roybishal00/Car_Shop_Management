<?php





require_once '../Model/Db1_mechanic_login.php';

$db = new mydbmechanic();
$conn = $db->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    // Sanitize user input
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username and password cannot be empty.');</script>";
    } else {
        // Call login function
        $result = $db->login("mechanic_signup_new", $username, $password, $conn);

        if (is_array($result)) {
            // Successful login
            $MechanicID = $result['MechanicID'];
            
            // Track login
            $trackLogin = $db->trackLogin("mechanic_login_new", $MechanicID, $conn);

            if ($trackLogin === true) {
                // Start session and redirect
                session_start();
                $_SESSION['MechanicID'] = $MechanicID;
                //var_dump($_SESSION);
                header('Location: ../view/Mechanic_db.php');
                exit();
            } else {
                echo "<script>alert('Failed to track login: $trackLogin');</script>";
            }
        } else {
            // Show login error
            echo "<script>alert('$result');</script>";
        }
    }

    $db->closeCon($conn);
}




?>


