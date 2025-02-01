<?php
 
class mydb {
 
    function openCon() {
        $dbhost = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "car_shop";
        $connobject = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
 
        // Check connection
        if ($connobject->connect_error) {
            die("Connection failed: " . $connobject->connect_error);
        }
        return $connobject;
    }
 
    function login($table, $username, $password, $connobject) {
        $sql = "SELECT User_id, Password FROM $table WHERE User_id = ? AND Password = ?";
 
        // Prepare the statement
        $stmt = $connobject->prepare($sql);
        if (!$stmt) {
            die("Preparation failed: " . $connobject->error);
        }
 
        // Bind parameters (s for string)
        $stmt->bind_param("ss", $username, $password);
 
        // Execute the statement
        $stmt->execute();
 
        // Get the result
        $result = $stmt->get_result();
 
        // Close the statement
        $stmt->close();
 
        return $result;
    }
}
?>