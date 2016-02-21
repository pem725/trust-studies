<?php
    
    function connect_to_db() {
        include_once 'config.php';
        $DSN = 'mysql:dbname='. $DB . ';host=' . $DB_HOST;
        try {
            $conn = new PDO($DSN, $DB_USER, $DB_PASS);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return $conn;
    }
?>
