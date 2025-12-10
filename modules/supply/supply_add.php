<?php
    include "../../config/db_conn.php";
    if (empty($_POST['spName'])) {
        die('請輸入供應商名稱');
    }
    $spName         = $_POST["spName"];
    $spPhone        = $_POST["spPhone"];
    $spAddress      = $_POST["spAddress"];
    $spTime         = $_POST["spTime"];

    $query = ("Insert into `supplier` (`spName`,`spPhone`,`spAddress`,`spTime`) values (?,?,?,?)");
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssss",$spName,$spPhone,$spAddress,$spTime);
    $stmt->execute();

    header('Location: supply_edit.php');
?>
