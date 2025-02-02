<?php
 
class MyDD {
 
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
 

 function emailExists($email, $connobject) {
     $sql = "SELECT * FROM customer_signup_new WHERE email = ?";
     $stmt = $connobject->prepare($sql);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->store_result();
     
     return $stmt->num_rows > 0;
 }
 
 function insertUser($table,$name, $Password,$email,$phone,$nid,$gender, $connobject) {
  
     if ($this->emailExists($email, $connobject)) {
         return "Email is already registered !";
     }
 

     $hashed_password = password_hash($Password, PASSWORD_BCRYPT);
 
     $sql = $sql = "INSERT INTO $table (FirstName,Pass,Email,PhoneNumber,Nid,Gender) VALUES (?, ?, ?, ?, ?, ?)"; 
     if ($stmt = $connobject->prepare($sql)) {
         $stmt->bind_param("ssssss", $name, $hashed_password,$email,$phone,$nid,$gender);
         if ($stmt->execute()) {
             $stmt->close();
             return true; 
         } else {
             error_log("Error executing statement: " . $stmt->error);
             return false; 
         }
     } else {
         error_log("Error preparing statement: " . $connobject->error);
         return false; 
     }
 }
}
 
 