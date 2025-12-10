<?php
$servername = 'localhost';
$user = 'root';
$password = ''; 


$conn = new mysqli($servername, $user, $password);

if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS drink CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
if ($conn->query($sql) === TRUE) {
    echo "資料庫 'drink' 創建成功<br>";
} else {
    echo "創建資料庫時出錯: " . $conn->error . "<br>";
}

$conn->close();

// 重定向到創建表的頁面
header('Location: create_table2.php');
?>
