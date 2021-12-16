<?php
  
$conn = "";
   
try {
    $DB_HOST = "localhost";
    $DB_NAME = "aam";
    $DB_USER = "root";
    $DB_PASS = "";
    /*
    $DB_HOST = "172.17.0.8";
    $database = "aam";
    $DB_USER = "root";
    $DB_PASS = "Sac@123";*/
   
    $conn = new PDO(
        "mysql:host=$DB_HOST; dbname=$DB_NAME",
        $DB_USER, $DB_PASS
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?>