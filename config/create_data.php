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

//增加員工資料
$sql = "INSERT INTO  `employee` (`empId`,`empName`,`empPhone`,`empPosition`,`stName`) VALUE ('E00001','a','0912-345-678','收銀','1F木製家具區') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `employee` (`empId`,`empName`,`empPhone`,`empPosition`,`stName`) VALUE ('E00002','b','0923-456-789','銷售','2F沙發專區') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `employee` (`empId`,`empName`,`empPhone`,`empPosition`,`stName`) VALUE ('E00003','c','0934-567-890','銷售','3F床具專區') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `employee` (`empId`,`empName`,`empPhone`,`empPosition`,`stName`) VALUE ('E00004','d','0945-678-901','收銀他哥','4F廚房用品') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `employee` (`empId`,`empName`,`empPhone`,`empPosition`,`stName`) VALUE ('E00005','e','0956-789-012','店長(摸魚中()','5F日常家具') ";
$result = mysqli_query($db,$sql);

header('Location: ../pages/home.html');
?>
