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

        .main-content h2 {
            color: #2d3748;
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .edit-form {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            max-width: 600px;
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

        .form-group input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: white;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-group input:disabled {
            background: #f7fafc;
            color: #718096;
            cursor: not-allowed;
        }

        input[type="submit"] {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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

        input[type="submit"]:hover {
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

            .edit-form {
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
                    <h2>修改樓層資訊</h2>
                    
                    <?php
                        include "../../config/db_conn.php";
                        $stName = $_GET['stName'];
                        $query = ("Select * From store where stName ='".$stName."'");
                        
                        if($stmt = $db->query($query)){
                            $result=mysqli_fetch_object($stmt);
                            echo '<div class="edit-form">';
                            echo '<form action="store_mdysave.php?stName='.$result->stName.'" method="POST">';
                            
                            echo '<div class="form-group">';
                            echo '<label>樓層:</label>';
                            echo '<input type="text" value="'.$result->stName.'" disabled>';
                            echo '</div>';
                            
                            echo '<div class="form-group">';
                            echo '<label>樓層分機:</label>';
                            echo '<input type="text" name="stPhone" value="'.$result->stPhone.'" required>';
                            echo '</div>';
                            
                            echo '<div class="form-group">';
                            echo '<label>營業時間:</label>';
                            echo '<input type="text" name="stWorkTime" value="'.$result->stWorkTime.'" required>';
                            echo '</div>';
                            
                            echo '<div class="form-group">';
                            echo '<label>區域:</label>';
                            echo '<input type="text" name="stAddress" value="'.$result->stAddress.'" required>';
                            echo '</div>';
                            
                            echo '<input type="submit" value="確認更改">';
                            echo '</form>';
                            echo '</div>';
                        }  
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
