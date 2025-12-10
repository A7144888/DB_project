<?php
    $servername = 'localhost';   //資料庫的IP
    $user = 'root'; //使用者名稱
    $password = '';  //使用者密碼
    $database = 'drink';  //要連接的資料庫名稱
  
    $conn = new mysqli($servername, $user, $password, $database);
  
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    } 

    $errors = [];
    
    //table1 創建商店/樓層
    $table1="CREATE TABLE Store (
    stName VARCHAR(10) NOT NULL,
    stPhone VARCHAR(15) NOT NULL,
    stWorkTime VARCHAR(15) NOT NULL,
    PRIMARY KEY (stName)
    )";
    //table2 創建供應商
    $table2 ="CREATE TABLE Supplier (
    spName VARCHAR(10) NOT NULL,
    spPhone VARCHAR(15) NOT NULL,
    spAddress VARCHAR(15) NOT NULL,
    spTime VARCHAR(15) NOT NULL,
    PRIMARY KEY (spName)
    )";
    //table3 創建家具資訊（原 Drink 表）
    $table3 ="CREATE TABLE Drink (
    dId CHAR(6) NOT NULL,
    dName VARCHAR(15) NOT NULL, 
    dDescription VARCHAR(30) ,
    dPrice INT(10) NOT NULL,
    stName VARCHAR(10) ,
    spName VARCHAR(10) ,
    PRIMARY KEY (dId),
    FOREIGN KEY(stName) REFERENCES Store(stName) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(spName) REFERENCES Supplier(spName) ON DELETE CASCADE ON UPDATE CASCADE
    )";
    //table4 創建員工
    $table4 ="CREATE TABLE Employee (
    empId CHAR(6) NOT NULL,
    empName VARCHAR(15) NOT NULL,
    empPhone VARCHAR(15) NOT NULL,
    empPosition VARCHAR(20) NOT NULL,
    stName VARCHAR(10) ,
    PRIMARY KEY (empId),
    FOREIGN KEY(stName) REFERENCES Store(stName) ON DELETE SET NULL ON UPDATE CASCADE
    )";
    header('Location: create_data.php');
    $tables = [$table1, $table2, $table3, $table4];
    foreach($tables as $k => $sql){
        $query = @$conn->query($sql);

        if(!$query)
        $errors[] = "Table $k : Creation failed ($conn->error)";
        else
        $errors[] = "Table $k : Creation done";
    }


    foreach($errors as $msg) {
    echo "$msg <br>";
    }
    
    $conn->close();
   
?>