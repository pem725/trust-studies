<?php
    include 'config.php';
    
    function connect_to_db() {
        $DSN = 'mysql:dbname='. $DB . ';host=' . $DB_HOST;
        try {
            $conn = new PDO($DSN, $DB_USER, $DB_PASS);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $conn;
    }
?>
