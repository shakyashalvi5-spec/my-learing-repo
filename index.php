<?php
$you   = "xyz";
$bestie = "abc";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $you; ?> 🤝 <?php echo $bestie; ?></title>

    <style>
        body {
            background: linear-gradient(to right, #e0f7fa, #e3f2fd);
            text-align: center;
            font-family: "Segoe UI", cursive;
            padding-top: 50px;
        }
        .card {
            background: white;
            width: 60%;
            margin: auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 150, 136, 0.4);
        }
        h1 { color: #009688; }
        .shayari {
            font-size: 18px;
            color: #444;
            margin: 20px 0;
            font-style: italic;
        }
        .emoji {
            font-size: 35px;
            margin: 15px 0;
        }
        button {
            background: #009688;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            border-radius: 25px;
            cursor: pointer;
        }
        button:hover {
            background: #00796b;
        }
    </style>
</head>

<body>

<div class="card">
    <h1>🤍 My Forever Bestie 🤍</h1>

    <p><strong><?php echo $you; ?></strong> 🫂 <strong><?php echo $bestie; ?></strong></p>

    <div class="shayari">
        "Dosti naam hai sukoon ka 🌈 <br>
        Bina bole samajh jaane ka 🤗 <br>
        Muskuraahat ho ya aansu 😌 <br>
        Bestie ho to sab aasaan lagta hai 💙"
    </div>

    <p style="font-size:20px;">
        <?php echo $bestie; ?> 💫 <br>
        tu sirf dost nahi, ek family jaisa hai 🤍 <br>
        bina shart, bina wajah <br>
        bas hamesha saath 🤝
    </p>

    <div class="emoji">😄🤗✨</div>

    <h2>Best Friends Forever?</h2>

    <button onclick="alert('BFF Mode Activated 💙🤝')">
        Always 💙
    </button>
</div>

</body>
</html>
