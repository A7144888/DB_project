<?php
    include "../../config/db_conn.php";
    //
    $stName         = $_GET["stName"];
    $stPhone        = $_POST["stPhone"];
    $stWorkTime     = $_POST["stWorkTime"];

    $query = sprintf(
        'update store set stPhone = "%s", stWorkTime = "%s" where stName = "%s"',
        $stPhone,
        $stWorkTime,
        $stName
      );
      echo $query . '<br>';
    $stmt = $db->query($query);
    if (!$stmt) {
        die($db->error);
    }
    header('Location: store_edit.php');
?>