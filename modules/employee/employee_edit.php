<!doctype html>
<html lang="en">
<title>Drinker家具行</title>
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

        .main-content h2 {
            color: #2d3748;
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: 600;
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

        .add-form {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
            padding: 30px;
            border-radius: 15px;
            margin-top: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .add-form h3 {
            color: #2d3748;
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 600;
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

        .form-group input[type="text"],
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: white;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        input[type="submit"],
        button {
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
            margin: 5px;
        }

        input[type="submit"]:hover,
        button:hover {
            background: #667eea;
        }

        .btn-delete {
            background: linear-gradient(135deg, #f56565 0%, #c53030 100%);
            box-shadow: 0 4px 15px rgba(245, 101, 101, 0.4);
        }

        .btn-delete:hover {
            background: linear-gradient(135deg, #f56565 0%, #c53030 100%);
        }

        .btn-edit {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            box-shadow: 0 4px 15px rgba(72, 187, 120, 0.4);
        }

        .btn-edit:hover {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
        }

        td form {
            display: inline-block;
            margin: 0;
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

            .add-form {
                padding: 20px;
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
                        <a href="employee.php">
                            <p class="y">員工</p>
                        </a>
                    </li>
                    <li>
                        <a href="../analysis/analysis.php">
                            <p class="y">查詢</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-10">
                <div class="main-content">
                    <h2>編輯員工資訊</h2>
                    
                    <?php
                        include "../../config/db_conn.php";
                        $query = ("Select * From employee");
                        
                        if($stmt = $db->query($query)){
                            echo "<table>";
                            echo "<tr>";
                            echo "<th>員工編號</th>";
                            echo "<th>員工姓名</th>";
                            echo "<th>員工電話</th>";
                            echo "<th>職位</th>";
                            echo "<th>所屬樓層</th>";
                            echo "<th>操作</th>";
                            echo "</tr>";
                            
                            while($result=mysqli_fetch_object($stmt)){
                                echo "<tr>";
                                echo "<td>".$result->empId."</td>";
                                echo "<td>".$result->empName."</td>";
                                echo "<td>".$result->empPhone."</td>";
                                echo "<td>".$result->empPosition."</td>";
                                echo "<td>".$result->stName."</td>";
                                echo '<td>';
                                echo '<form method="POST" action="employee_mdy.php?empId=' . $result->empId . '" style="display:inline;">';
                                echo '<input type="submit" value="修改" class="btn-edit">';
                                echo '</form>';
                                echo '<form method="POST" action="employee_del.php?empId=' . $result->empId . '" style="display:inline;">';
                                echo '<input type="submit" value="刪除" class="btn-delete" onclick="return confirm(\'確定要刪除嗎？\')">';
                                echo '</form>';
                                echo '</td>';
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                    ?>

                    <div class="add-form">
                        <h3>新增員工</h3>
                        <form action="employee_add.php" method="POST">
                            <div class="form-group">
                                <label>員工編號:</label>
                                <input type="text" name="empId" required placeholder="例如: E00006">
                            </div>
                            <div class="form-group">
                                <label>員工姓名:</label>
                                <input type="text" name="empName" required>
                            </div>
                            <div class="form-group">
                                <label>員工電話:</label>
                                <input type="text" name="empPhone" required placeholder="例如: 0912-345-678">
                            </div>
                            <div class="form-group">
                                <label>職位:</label>
                                <input type="text" name="empPosition" required placeholder="例如: 銷售">
                            </div>
                            <div class="form-group">
                                <label>所屬樓層:</label>
                                <select name="stName">
                                    <option value="">無</option>
                                    <?php
                                        $storeQuery = "SELECT stName FROM store";
                                        $storeResult = $db->query($storeQuery);
                                        while($store = mysqli_fetch_object($storeResult)){
                                            echo "<option value='".$store->stName."'>".$store->stName."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <input type="submit" value="新增員工">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

