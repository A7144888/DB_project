<?php
    include "../../config/db_conn.php";
    if (empty($_POST['empId'])) {
        die('請輸入員工編號');
    }
    $empId          = $_POST["empId"];
    $empName        = $_POST["empName"];
    $empPhone       = $_POST["empPhone"];
    $empPosition    = $_POST["empPosition"];
    $stName         = $_POST["stName"];

    // 如果樓層為空，則插入 NULL
    if(empty($stName)){
        $query = ("Insert into `employee` (`empId`,`empName`,`empPhone`,`empPosition`,`stName`) values (?,?,?,?,NULL)");
        $stmt = $db->prepare($query);
        $stmt->bind_param("ssss",$empId,$empName,$empPhone,$empPosition);
    } else {
        $query = ("Insert into `employee` (`empId`,`empName`,`empPhone`,`empPosition`,`stName`) values (?,?,?,?,?)");
        $stmt = $db->prepare($query);
        $stmt->bind_param("sssss",$empId,$empName,$empPhone,$empPosition,$stName);
    }
    
    $stmt->execute();

    header('Location: employee_edit.php');
?>

