<?php
include "db_conn.php";

//增加樓層資訊（家具行樓層）
$sql = "INSERT INTO  `store` (`stName`,`stPhone`,`stWorkTime`) VALUE ('1F木製家具區','02-2345-6001','10:00-22:00') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `store` (`stName`,`stPhone`,`stWorkTime`) VALUE ('2F沙發專區','02-2345-6002','10:00-22:00') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `store` (`stName`,`stPhone`,`stWorkTime`) VALUE ('3F床具專區','02-2345-6003','10:00-22:00') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `store` (`stName`,`stPhone`,`stWorkTime`) VALUE ('4F廚房用品','02-2345-6004','10:00-22:00') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `store` (`stName`,`stPhone`,`stWorkTime`) VALUE ('5F日常家具','02-2345-6005','10:00-22:00') ";
$result = mysqli_query($db,$sql);

//增加供應商
$sql = "INSERT INTO  `supplier` (`spName`,`spPhone`,`spAddress`) VALUE ('IKEA','02-2658-8900','新北市新莊區中央路') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `supplier` (`spName`,`spPhone`,`spAddress`) VALUE ('特力屋','02-2162-1888','台北市內湖區舊宗路') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `supplier` (`spName`,`spPhone`,`spAddress`) VALUE ('生活工場','02-2657-6789','新北市新莊區思源路') ";
$result = mysqli_query($db,$sql);

//增加家具資料（範例）
// 用戶可以透過網頁介面新增

header('Location: ../pages/home.html');
?>
