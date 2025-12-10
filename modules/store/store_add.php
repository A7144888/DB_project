<?php
    include "../../config/db_conn.php";
    if (empty($_POST['stName'])) {
        die('請輸入商店名稱');
    }
    $stName         = $_POST["stName"];
    $stPhone        = $_POST["stPhone"];
    $stWorkTime     = $_POST["stWorkTime"];

    $query = ("Insert into store values(?,?,?)");
    $stmt = $db->prepare($query);
    $stmt->bind_param("sss", $stName, $stPhone, $stWorkTime);
    $stmt->execute();

    header('Location: store_edit.php');
?>