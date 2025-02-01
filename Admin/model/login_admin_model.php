<?php
 
class mydb {
 
    function openCon() {
        $dbhost = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "car_shop";
        $connobject = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
 
        
        if ($connobject->connect_error) {
            die("Connection failed: " . $connobject->connect_error);
        }
        return $connobject;
    }
 
    function login($table, $username, $password, $connobject) {
        $sql = "SELECT User_id, Password FROM $table WHERE User_id = ? AND Password = ?";
 
        
        $stmt = $connobject->prepare($sql);
        if (!$stmt) {
            die("Preparation failed: " . $connobject->error);
        }
 
        
        $stmt->bind_param("ss", $username, $password);
 
        
        $stmt->execute();
 
        
        $result = $stmt->get_result();
 
        
        $stmt->close();
 
        return $result;
    }
}
?>