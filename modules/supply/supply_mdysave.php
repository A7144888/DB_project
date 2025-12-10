<?php
    include "../../config/db_conn.php";
    //
    $spName         = $_GET["spName"];
    $spPhone        = $_POST["spPhone"];
    $spAddress      = $_POST["spAddress"];
    $spTime         = $_POST["spTime"];


    $query = sprintf(
        'update supplier set spPhone = "%s", spAddress = "%s"  where spName = "%s"   where spTime = "%s"',
        $spPhone,
        $spAddress,
        $spName,
        $spTime
        
      );
      echo $query . '<br>';
    $stmt = $db->query($query);
    if (!$stmt) {
        die($db->error);
    }
    header('Location: supply_edit.php');
?>
