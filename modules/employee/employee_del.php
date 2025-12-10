<?php
    include "../../config/db_conn.php";
    $empId = $_GET["empId"];

    $stmt = $db->prepare("DELETE FROM employee WHERE empId=?");
    $stmt->bind_param("s",$empId);
    $stmt->execute();
    

    header('Location: employee_edit.php');
?>

