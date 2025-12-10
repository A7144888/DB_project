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
$sql = "INSERT INTO  `supplier` (`spName`,`spPhone`,`spAddress`,`spTime`) VALUE ('IKEA','02-2658-8900','新北市新莊區中央路','10:00-21:30') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `supplier` (`spName`,`spPhone`,`spAddress`,`spTime`) VALUE ('特力屋','02-2162-1888','台北市內湖區舊宗路','09:00-22:00') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO  `supplier` (`spName`,`spPhone`,`spAddress`,`spTime`) VALUE ('生活工場','02-2657-6789','新北市新莊區思源路','11:00-21:00') ";
$result = mysqli_query($db,$sql);

//增加家具資料
// 1F 木製家具區
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00001','橡木書桌','實木材質，寬120cm','8500','1F木製家具區','IKEA') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00002','四門衣櫃','大容量收納，高200cm','15000','1F木製家具區','特力屋') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00003','開放式書架','五層設計，可調節','4200','1F木製家具區','IKEA') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00004','電腦椅','人體工學，可旋轉','3800','1F木製家具區','生活工場') ";
$result = mysqli_query($db,$sql);

// 2F 沙發專區
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00005','三人座沙發','布面材質，米白色','22000','2F沙發專區','IKEA') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00006','L型沙發','皮革材質，咖啡色','35000','2F沙發專區','特力屋') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00007','單人沙發','北歐風格，灰色','8500','2F沙發專區','生活工場') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00008','懶骨頭沙發','可調節角度，多色可選','3200','2F沙發專區','IKEA') ";
$result = mysqli_query($db,$sql);

// 3F 床具專區
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00009','雙人床架','實木床板，附床頭櫃','18000','3F床具專區','特力屋') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00010','獨立筒床墊','雙人加大，軟硬適中','25000','3F床具專區','IKEA') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00011','記憶枕','人體工學設計','1200','3F床具專區','生活工場') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00012','床邊櫃','雙抽屜設計','4500','3F床具專區','特力屋') ";
$result = mysqli_query($db,$sql);

// 4F 廚房用品
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00013','餐桌組','一桌四椅，可折疊','12000','4F廚房用品','IKEA') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00014','廚房置物架','不鏽鋼材質，三層','2800','4F廚房用品','特力屋') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00015','吧台椅','可升降，旋轉','2200','4F廚房用品','生活工場') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00016','收納餐櫃','大容量，附玻璃門','9500','4F廚房用品','IKEA') ";
$result = mysqli_query($db,$sql);

// 5F 日常家具
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00017','玄關鞋櫃','十層收納，附穿鞋椅','5800','5F日常家具','特力屋') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00018','全身鏡','落地式，可旋轉','2500','5F日常家具','生活工場') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00019','衣帽架','實木材質，八支掛勾','1800','5F日常家具','IKEA') ";
$result = mysqli_query($db,$sql);
$sql = "INSERT INTO `drink` (`dId`,`dName`,`dDescription`,`dPrice`,`stName`,`spName`) VALUE ('D00020','電視櫃','現代簡約風，長150cm','8800','5F日常家具','特力屋') ";
$result = mysqli_query($db,$sql);

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
