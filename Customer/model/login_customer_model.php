<?php
 
 
class mydbcustomer {

 
    function openCon() {
        $dbhost = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "car_shop1";
        $connobject = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);


        if ($connobject->connect_error) {
            die("Connection failed: " . $connobject->connect_error);
        }
        return $connobject;
    }

  
    function login($table, $username, $password, $connobject) {
        $sql = "SELECT CustomerID, Pass FROM $table WHERE CustomerID = ?";

        $stmt = $connobject->prepare($sql);
        if (!$stmt) {
            return "Error preparing statement: " . $connobject->error;
        }

   
        $stmt->bind_param("s", $username);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['Pass'])) {
                return $user; 
            } else {
                return "Invalid password.";
            }
        } else {
            return "User not found.";
        }

        $stmt->close();
    }

  
    function trackLogin($table, $CustomerID, $connobject) {
        $sql = "INSERT INTO $table (CustomerID, login_time) VALUES (?, NOW())"; //mone rakte hbe foren key use korce,singup jeta userid ota login a foren key use kore login hosce

        $stmt = $connobject->prepare($sql);
        if (!$stmt) {
            return "Error preparing statement: " . $connobject->error;
        }

        $stmt->bind_param("s", $CustomerID);

        if ($stmt->execute()) {
            return true;
        } else {
            return "Error inserting login timestamp: " . $stmt->error;
        }

        $stmt->close();
    }

 
    function closeCon($connobject) {
        $connobject->close();
    }
}
 
 
?>