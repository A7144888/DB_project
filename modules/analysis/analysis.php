<?php
// 在頁面開始就連接數據庫
include "../../config/db_conn.php";
?>
<!doctype html>
<html lang="en">
<title>Drinker家具行 - 查詢系統</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<head>
    <style>
        * {
            font-family: 'Microsoft JhengHei', 'PingFang TC', 'Noto Sans TC', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            width: 100%;
        }

        .modern-header {
            background: #667eea;
            padding: 25px 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .modern-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect fill="rgba(255,255,255,0.05)" width="50" height="50"/><rect fill="rgba(255,255,255,0.05)" x="50" y="50" width="50" height="50"/></svg>');
            opacity: 0.3;
        }

        .modern-header h1 {
            color: white;
            font-size: 36px;
            font-weight: 600;
            text-align: center;
            margin: 0;
            position: relative;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .home_img {
            height: 80px;
            width: 80px;
            position: absolute;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        .modern-sidebar {
            background: white;
            box-shadow: 2px 0 20px rgba(0, 0, 0, 0.08);
            padding: 0;
            min-height: calc(100vh - 86px);
        }

        .nav.sidenav-nav {
            list-style: none;
            padding: 20px 0;
        }

        .nav.sidenav-nav li {
            margin: 0;
        }

        .nav.sidenav-nav a {
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
        }

        .y {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
            color: #2d3748;
            padding: 18px 20px;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            border-left: 4px solid transparent;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            margin: 5px 0;
        }

        .y:hover {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
            color: #2d3748;
        }

        .main-content {
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            margin: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            min-height: calc(100vh - 200px);
        }

        .query-section {
            background: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .query-section h2 {
            color: #2d3748;
            font-size: 22px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .query-type-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 10px;
        }

        .badge-join {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
        }

        .badge-agg {
            background: linear-gradient(135deg, #ed8936 0%, #dd6b20 100%);
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #4a5568;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-group select,
        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: white;
        }

        .form-group select:focus,
        .form-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .btn-query {
            background: #667eea;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            width: 100%;
            margin-top: 10px;
        }

        .btn-query:hover {
            background: #667eea;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 20px 0;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        th {
            background: #667eea;
            color: white;
            padding: 16px;
            text-align: center;
            font-weight: 600;
            font-size: 14px;
            border: none;
        }

        td {
            padding: 14px;
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
            color: #4a5568;
        }

        tr:hover td {
            background-color: #f7fafc;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .result-section {
            margin-top: 30px;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .result-title {
            color: #2d3748;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #667eea;
        }

        .highlight-number {
            font-weight: 600;
            color: #667eea;
            font-size: 16px;
        }

        @media screen and (max-width: 767px) {
            .modern-header h1 {
                font-size: 24px;
            }

            .home_img {
                height: 60px;
                width: 60px;
                left: 15px;
            }

            .main-content {
                padding: 20px;
                margin: 15px;
            }

            .modern-sidebar {
                min-height: auto;
            }

            table {
                font-size: 12px;
            }

            th, td {
                padding: 10px 5px;
            }
        }
    </style>
</head>

<body>
    <div class="modern-header">
        <img src="../../images/下載 (1).jpg" class="home_img">
        <h1>Drinker家具行</h1>
    </div>

    <div class="container-fluid" style="padding: 0;">
        <div class="row" style="margin: 0;">
            <div class="col-sm-2 modern-sidebar" style="padding: 0;">
                <ul class="nav sidenav-nav">
                    <li>
                        <a href="../../pages/home.html">
                            <p class="y">首頁</p>
                        </a>
                    </li>
                    <li>
                        <a href="../drink/drink.php">
                            <p class="y">家具資訊</p>
                        </a>
                    </li>
                    <li>
                        <a href="../store/store.php">
                            <p class="y">樓層</p>
                        </a>
                    </li>
                    <li>
                        <a href="../supply/supply.php">
                            <p class="y">供應商</p>
                        </a>
                    </li>
                    <li>
                        <a href="../employee/employee.php">
                            <p class="y">員工</p>
                        </a>
                    </li>
                    <li>
                        <a href="analysis.php">
                            <p class="y">查詢</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-10">
                <div class="main-content">
                    
                    <!-- JOIN 查詢區 -->
                    <div class="query-section">
                        <h2>
                            JOIN 查詢
                        </h2>
                       

                        <form method="POST" action="">
                            <input type="hidden" name="query_type" value="join">
                            
                            <div class="form-group">
                                <label>選擇 JOIN 查詢類型：</label>
                                <select name="join_query" required>
                                    <option value="">請選擇...</option>
                                    <option value="employee_store">員工與樓層</option>
                                    <option value="drink_all">家具（含供應商和樓層）</option>
                                    <option value="employee_by_store">指定樓層的員工</option>
                                    <option value="drink_by_supplier">指定供應商的家具</option>
                                </select>
                            </div>

                            <div class="form-group" id="store_select" style="display: none;">
                                <label>選擇樓層：</label>
                                <select name="store_name">
                                    <option value="">全部樓層</option>
                                    <?php
                                        $storeQuery = "SELECT stName FROM store";
                                        $storeResult = $db->query($storeQuery);
                                        while($store = mysqli_fetch_object($storeResult)){
                                            echo "<option value='".$store->stName."'>".$store->stName."</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group" id="supplier_select" style="display: none;">
                                <label>選擇供應商：</label>
                                <select name="supplier_name">
                                    <option value="">全部供應商</option>
                                    <?php
                                        $supplierQuery = "SELECT spName FROM supplier";
                                        $supplierResult = $db->query($supplierQuery);
                                        while($supplier = mysqli_fetch_object($supplierResult)){
                                            echo "<option value='".$supplier->spName."'>".$supplier->spName."</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <button type="submit" class="btn-query">查詢</button>
                        </form>
                    </div>

                    <!-- Aggregation 查詢區 -->
                    <div class="query-section">
                        <h2>
                            Aggregation 查詢
                        </h2>
                        

                        <form method="POST" action="">
                            <input type="hidden" name="query_type" value="aggregation">
                            
                            <div class="form-group">
                                <label>選擇 Aggregation 查詢類型：</label>
                                <select name="agg_query" required>
                                    <option value="">請選擇...</option>
                                    <option value="employee_count">各樓層員工數量</option>
                                    <option value="supplier_stats">供應商家具</option>
                                    <option value="store_comprehensive">樓層（員工+家具）</option>
                                    <option value="position_count">職位分布</option>
                                    <option value="price_range">家具價格區間</option>
                                </select>
                            </div>

                            <div class="form-group" id="price_range_inputs" style="display: none;">
                                <label>價格範圍（選填）：</label>
                                <div style="display: flex; gap: 10px;">
                                    <input type="number" name="min_price" placeholder="最低價格">
                                    <input type="number" name="max_price" placeholder="最高價格">
                                </div>
                            </div>

                            <button type="submit" class="btn-query">查詢</button>
                        </form>
                    </div>

                    <!-- 查詢結果顯示區 -->
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $query_type = $_POST['query_type'];
                        
                        echo '<div class="result-section">';
                        echo '<div class="result-title">查詢結果</div>';
                        
                        if ($query_type === 'join') {
                            $join_query = $_POST['join_query'];
                            
                            switch($join_query) {
                                case 'employee_store':
                                    echo "<h3>員工與樓層</h3>";
                                    $query = "SELECT 
                                        e.empId, e.empName, e.empPhone, e.empPosition,
                                        s.stName, s.stPhone, s.stWorkTime
                                    FROM employee e
                                    LEFT JOIN store s ON e.stName = s.stName
                                    ORDER BY e.empId";
                                    
                                    if($stmt = $db->query($query)){
                                        echo "<table><tr>";
                                        echo "<th>員工編號</th><th>姓名</th><th>電話</th><th>職位</th>";
                                        echo "<th>所屬樓層</th><th>樓層電話</th><th>營業時間</th></tr>";
                                        while($row = mysqli_fetch_object($stmt)){
                                            echo "<tr>";
                                            echo "<td>".$row->empId."</td>";
                                            echo "<td>".$row->empName."</td>";
                                            echo "<td>".$row->empPhone."</td>";
                                            echo "<td>".$row->empPosition."</td>";
                                            echo "<td>".$row->stName."</td>";
                                            echo "<td>".$row->stPhone."</td>";
                                            echo "<td>".$row->stWorkTime."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    break;
                                    
                                case 'drink_all':
                                    echo "<h3>家具完整資訊</h3>";
                                    $query = "SELECT 
                                        d.dId, d.dName, d.dDescription, d.dPrice,
                                        s.stName, sp.spName, sp.spPhone, sp.spAddress
                                    FROM drink d
                                    LEFT JOIN store s ON d.stName = s.stName
                                    LEFT JOIN supplier sp ON d.spName = sp.spName
                                    ORDER BY d.dPrice DESC";
                                    
                                    if($stmt = $db->query($query)){
                                        echo "<table><tr>";
                                        echo "<th>編號</th><th>名稱</th><th>描述</th><th>價格</th>";
                                        echo "<th>銷售樓層</th><th>供應商</th><th>供應商電話</th><th>供應商地址</th></tr>";
                                        while($row = mysqli_fetch_object($stmt)){
                                            echo "<tr>";
                                            echo "<td>".$row->dId."</td>";
                                            echo "<td>".$row->dName."</td>";
                                            echo "<td>".$row->dDescription."</td>";
                                            echo "<td class='highlight-number'>$".number_format($row->dPrice)."</td>";
                                            echo "<td>".$row->stName."</td>";
                                            echo "<td>".$row->spName."</td>";
                                            echo "<td>".$row->spPhone."</td>";
                                            echo "<td>".$row->spAddress."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    break;
                                    
                                case 'employee_by_store':
                                    $store_name = $_POST['store_name'];
                                    echo "<h3>".($store_name ? $store_name." 的" : "所有")."員工資訊</h3>";
                                    $query = "SELECT 
                                        e.empId, e.empName, e.empPhone, e.empPosition,
                                        s.stName, s.stWorkTime
                                    FROM employee e
                                    LEFT JOIN store s ON e.stName = s.stName";
                                    if($store_name) {
                                        $query .= " WHERE s.stName = '".$store_name."'";
                                    }
                                    $query .= " ORDER BY e.empId";
                                    
                                    if($stmt = $db->query($query)){
                                        echo "<table><tr>";
                                        echo "<th>員工編號</th><th>姓名</th><th>電話</th><th>職位</th><th>所屬樓層</th><th>營業時間</th></tr>";
                                        while($row = mysqli_fetch_object($stmt)){
                                            echo "<tr>";
                                            echo "<td>".$row->empId."</td>";
                                            echo "<td>".$row->empName."</td>";
                                            echo "<td>".$row->empPhone."</td>";
                                            echo "<td>".$row->empPosition."</td>";
                                            echo "<td>".$row->stName."</td>";
                                            echo "<td>".$row->stWorkTime."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    break;
                                    
                                case 'drink_by_supplier':
                                    $supplier_name = $_POST['supplier_name'];
                                    echo "<h3>".($supplier_name ? $supplier_name." 供應的" : "所有")."家具資訊</h3>";
                                    $query = "SELECT 
                                        d.dId, d.dName, d.dDescription, d.dPrice,
                                        sp.spName, sp.spPhone, s.stName
                                    FROM drink d
                                    LEFT JOIN supplier sp ON d.spName = sp.spName
                                    LEFT JOIN store s ON d.stName = s.stName";
                                    if($supplier_name) {
                                        $query .= " WHERE sp.spName = '".$supplier_name."'";
                                    }
                                    $query .= " ORDER BY d.dPrice DESC";
                                    
                                    if($stmt = $db->query($query)){
                                        echo "<table><tr>";
                                        echo "<th>編號</th><th>名稱</th><th>描述</th><th>價格</th><th>供應商</th><th>供應商電話</th><th>銷售樓層</th></tr>";
                                        while($row = mysqli_fetch_object($stmt)){
                                            echo "<tr>";
                                            echo "<td>".$row->dId."</td>";
                                            echo "<td>".$row->dName."</td>";
                                            echo "<td>".$row->dDescription."</td>";
                                            echo "<td class='highlight-number'>$".number_format($row->dPrice)."</td>";
                                            echo "<td>".$row->spName."</td>";
                                            echo "<td>".$row->spPhone."</td>";
                                            echo "<td>".$row->stName."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    break;
                            }
                            
                        } elseif ($query_type === 'aggregation') {
                            $agg_query = $_POST['agg_query'];
                            
                            switch($agg_query) {
                                case 'employee_count':
                                    echo "<h3>各樓層員工數量</h3>";
                                    $query = "SELECT 
                                        s.stName AS 樓層名稱,
                                        COUNT(e.empId) AS 員工數量
                                    FROM store s
                                    LEFT JOIN employee e ON s.stName = e.stName
                                    GROUP BY s.stName
                                    ORDER BY 員工數量 DESC";
                                    
                                    if($stmt = $db->query($query)){
                                        echo "<table><tr><th>樓層名稱</th><th>員工數量</th></tr>";
                                        while($row = mysqli_fetch_assoc($stmt)){
                                            echo "<tr>";
                                            echo "<td>".$row['樓層名稱']."</td>";
                                            echo "<td class='highlight-number'>".$row['員工數量']."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    break;
                                    
                                case 'supplier_stats':
                                    echo "<h3>供應商家具</h3>";
                                    $query = "SELECT 
                                        sp.spName AS 供應商,
                                        COUNT(d.dId) AS 家具數量,
                                        AVG(d.dPrice) AS 平均價格,
                                        MAX(d.dPrice) AS 最高價格,
                                        MIN(d.dPrice) AS 最低價格,
                                        SUM(d.dPrice) AS 總價值
                                    FROM supplier sp
                                    LEFT JOIN drink d ON sp.spName = d.spName
                                    GROUP BY sp.spName
                                    ORDER BY 家具數量 DESC";
                                    
                                    if($stmt = $db->query($query)){
                                        echo "<table><tr>";
                                        echo "<th>供應商</th><th>家具數量</th><th>平均價格</th><th>最高價格</th><th>最低價格</th><th>總價值</th></tr>";
                                        while($row = mysqli_fetch_assoc($stmt)){
                                            echo "<tr>";
                                            echo "<td>".$row['供應商']."</td>";
                                            echo "<td class='highlight-number'>".$row['家具數量']."</td>";
                                            echo "<td class='highlight-number'>$".number_format($row['平均價格'])."</td>";
                                            echo "<td class='highlight-number'>$".number_format($row['最高價格'])."</td>";
                                            echo "<td class='highlight-number'>$".number_format($row['最低價格'])."</td>";
                                            echo "<td class='highlight-number'>$".number_format($row['總價值'])."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    break;
                                    
                                case 'store_comprehensive':
                                    echo "<h3>樓層綜合</h3>";
                                    $query = "SELECT 
                                        s.stName AS 樓層,
                                        COUNT(DISTINCT e.empId) AS 員工數,
                                        COUNT(DISTINCT d.dId) AS 家具種類,
                                        COALESCE(SUM(d.dPrice), 0) AS 家具總價值,
                                        COALESCE(AVG(d.dPrice), 0) AS 平均價格
                                    FROM store s
                                    LEFT JOIN employee e ON s.stName = e.stName
                                    LEFT JOIN drink d ON s.stName = d.stName
                                    GROUP BY s.stName
                                    ORDER BY 家具總價值 DESC";
                                    
                                    if($stmt = $db->query($query)){
                                        echo "<table><tr>";
                                        echo "<th>樓層</th><th>員工數</th><th>家具種類</th><th>家具總價值</th><th>平均價格</th></tr>";
                                        while($row = mysqli_fetch_assoc($stmt)){
                                            echo "<tr>";
                                            echo "<td>".$row['樓層']."</td>";
                                            echo "<td class='highlight-number'>".$row['員工數']."</td>";
                                            echo "<td class='highlight-number'>".$row['家具種類']."</td>";
                                            echo "<td class='highlight-number'>$".number_format($row['家具總價值'])."</td>";
                                            echo "<td class='highlight-number'>$".number_format($row['平均價格'])."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    break;
                                    
                                case 'position_count':
                                    echo "<h3>職位分布</h3>";
                                    $query = "SELECT 
                                        e.empPosition AS 職位,
                                        COUNT(*) AS 人數,
                                        GROUP_CONCAT(DISTINCT s.stName SEPARATOR ', ') AS 分布樓層
                                    FROM employee e
                                    LEFT JOIN store s ON e.stName = s.stName
                                    GROUP BY e.empPosition
                                    ORDER BY 人數 DESC";
                                    
                                    if($stmt = $db->query($query)){
                                        echo "<table><tr><th>職位</th><th>人數</th><th>分布樓層</th></tr>";
                                        while($row = mysqli_fetch_assoc($stmt)){
                                            echo "<tr>";
                                            echo "<td>".$row['職位']."</td>";
                                            echo "<td class='highlight-number'>".$row['人數']."</td>";
                                            echo "<td>".$row['分布樓層']."</td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    }
                                    break;
                                    
                                case 'price_range':
                                    $min_price = isset($_POST['min_price']) && $_POST['min_price'] !== '' ? $_POST['min_price'] : 0;
                                    $max_price = isset($_POST['max_price']) && $_POST['max_price'] !== '' ? $_POST['max_price'] : 999999999;
                                    echo "<h3>家具價格統計 ($".number_format($min_price)." ~ $".number_format($max_price).")</h3>";
                                    
                                    $query = "SELECT 
                                        COUNT(*) AS 家具數量,
                                        AVG(dPrice) AS 平均價格,
                                        MAX(dPrice) AS 最高價格,
                                        MIN(dPrice) AS 最低價格
                                    FROM drink
                                    WHERE dPrice BETWEEN ".$min_price." AND ".$max_price;
                                    
                                    if($stmt = $db->query($query)){
                                        echo "<table><tr>";
                                        echo "<th>家具數量</th><th>平均價格</th><th>最高價格</th><th>最低價格</th></tr>";
                                        $row = mysqli_fetch_assoc($stmt);
                                        echo "<tr>";
                                        echo "<td class='highlight-number'>".$row['家具數量']."</td>";
                                        echo "<td class='highlight-number'>$".number_format($row['平均價格'])."</td>";
                                        echo "<td class='highlight-number'>$".number_format($row['最高價格'])."</td>";
                                        echo "<td class='highlight-number'>$".number_format($row['最低價格'])."</td>";
                                        echo "</tr>";
                                        echo "</table>";
                                    }
                                    break;
                            }
                        }
                        
                        echo '</div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <script>
        // 根據選擇的查詢類型顯示對應的輸入框
        document.querySelector('select[name="join_query"]').addEventListener('change', function() {
            document.getElementById('store_select').style.display = 'none';
            document.getElementById('supplier_select').style.display = 'none';
            
            if(this.value === 'employee_by_store') {
                document.getElementById('store_select').style.display = 'block';
            } else if(this.value === 'drink_by_supplier') {
                document.getElementById('supplier_select').style.display = 'block';
            }
        });

        document.querySelector('select[name="agg_query"]').addEventListener('change', function() {
            document.getElementById('price_range_inputs').style.display = 'none';
            
            if(this.value === 'price_range') {
                document.getElementById('price_range_inputs').style.display = 'block';
            }
        });
    </script>
</body>

</html>
