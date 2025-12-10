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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-left-color: #ffd700;
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .main-content {
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            margin: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            min-height: calc(100vh - 200px);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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

        a[href*="edit"] {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white !important;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            margin: 20px 0;
        }

        a[href*="edit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
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
                        <a href="store.php">
                            <p class="y">樓層</p>
                        </a>
                    </li>
                    <li>
                        <a href="../supply/supply.php">
                            <p class="y">供應商</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-10">
                <div class="main-content">
                    <?php
                        include "../../config/db_conn.php";
                        $query = ("Select * From store");
                        
                        if($stmt = $db->query($query)){
                            echo "<table>";
                            echo "<tr>";
                            echo "<th>樓層</th>";
                            echo "<th>樓層分機</th>";
                            echo "<th>營業時間</th>";
                            echo "</tr>";
                            
                            while($result=mysqli_fetch_object($stmt)){
                                echo "<tr>";
                                echo "<td>".$result->stName."</td>";
                                echo "<td>".$result->stPhone."</td>";
                                echo "<td>".$result->stWorkTime."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                    ?>
                    <div style="text-align: right; margin-top: 20px;">
                        <a href="store_edit.php">編輯樓層資訊</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
