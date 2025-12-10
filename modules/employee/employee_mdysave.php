<?php
    include "../../config/db_conn.php";
    
    $empId          = $_GET["empId"];
    $empName        = $_POST["empName"];
    $empPhone       = $_POST["empPhone"];
    $empPosition    = $_POST["empPosition"];
    $stName         = $_POST["stName"];

    if(empty($stName)){
        $query = "UPDATE employee SET empName = ?, empPhone = ?, empPosition = ?, stName = NULL WHERE empId = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssss", $empName, $empPhone, $empPosition, $empId);
    } else {
        $query = "UPDATE employee SET empName = ?, empPhone = ?, empPosition = ?, stName = ? WHERE empId = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("sssss", $empName, $empPhone, $empPosition, $stName, $empId);
    }
    
    $stmt->execute();
    
    if (!$stmt) {
        die($db->error);
    }
    header('Location: employee_edit.php');
?>

