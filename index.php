<?php
date_default_timezone_set("Asia/Kolkata");

$server_ip = $_SERVER['SERVER_ADDR'];
$server_name = $_SERVER['SERVER_NAME'];
$time = date("d M Y, h:i:s A");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CI/CD Deployment Successfull by Shalvi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
            color: #fff;
            text-align: center;
            padding-top: 80px;
        }
        .card {
            background: rgba(0,0,0,0.4);
            padding: 40px;
            width: 60%;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.6);
        }
        h1 {
            color: #00ffcc;
        }
        p {
            font-size: 18px;
        }
        .success {
            font-size: 22px;
            color: #00ff00;
            margin-top: 20px;
        }
        footer {
            margin-top: 30px;
            font-size: 14px;
            opacity: 0.8;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>🚀 CI/CD Deployment Successful</h1>
    <p class="success">GitHub Actions → EC2 → Apache → PHP ✔️</p>

    <p><strong>Server Name:</strong> <?php echo $server_name; ?></p>
    <p><strong>Server IP:</strong> <?php echo $server_ip; ?></p>
    <p><strong>Deployed At:</strong> <?php echo $time; ?></p>

    <footer>
        🔐 Secure SSH Deployment | Built with ❤️ on AWS EC2
    </footer>
</div>

</body>
</html>
