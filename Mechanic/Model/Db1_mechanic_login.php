<?php






class mydbmechanic {

    // Open database connection
    function openCon() {
        $dbhost = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "car_shop1";
        $connobject = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($connobject->connect_error) {
            die("Connection failed: " . $connobject->connect_error);
        }
        return $connobject;
    }

    // Login function with password verification
    function login($table, $username, $password, $connobject) {
        $sql = "SELECT MechanicID, Pass FROM $table WHERE MechanicID = ?";

        $stmt = $connobject->prepare($sql);
        if (!$stmt) {
            return "Error preparing statement: " . $connobject->error;
        }

        // Bind parameters
        $stmt->bind_param("s", $username);

        // Execute and fetch result
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['Pass'])) {
                return $user; // Successful login
            } else {
                return "Invalid password.";
            }
        } else {
            return "User not found.";
        }

        $stmt->close();
    }

    // Track login timestamp
    function trackLogin($table, $MechanicID, $connobject) {
        $sql = "INSERT INTO $table (MechanicID, login_time) VALUES (?, NOW())";

        $stmt = $connobject->prepare($sql);
        if (!$stmt) {
            return "Error preparing statement: " . $connobject->error;
        }

        $stmt->bind_param("s", $MechanicID);

        if ($stmt->execute()) {
            return true;
        } else {
            return "Error inserting login timestamp: " . $stmt->error;
        }

        $stmt->close();
    }

    // Close database connection
    function closeCon($connobject) {
        $connobject->close();
    }
}
?>



