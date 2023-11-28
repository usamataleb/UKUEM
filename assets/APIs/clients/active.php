<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("../../connection/connection.php");

try {
    $sql = "SELECT * FROM tb_client u, user_status s WHERE u.user_status_id = s.user_status_id AND s.user_status_name = 'Active'";
    
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
    
} catch(PDOException $e) {

    echo json_encode("Error: " . $e->getMessage());
}

$conn = null;
