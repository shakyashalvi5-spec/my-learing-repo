<?php
$girl = "Shalvi";
$boy  = "Arun";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $girl; ?> 💖 <?php echo $boy; ?></title>

    <style>
        body {
            background: linear-gradient(to right, #ffe6f0, #fff0f5);
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
            box-shadow: 0 0 20px rgba(255, 105, 180, 0.4);
        }
        h1 { color: #ff4081; }
        .shayari {
            font-size: 18px;
            color: #444;
            margin: 20px 0;
            font-style: italic;
        }
        .heart {
            font-size: 40px;
            animation: beat 1s infinite;
        }
        @keyframes beat {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        button {
            background: #ff4081;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            border-radius: 25px;
            cursor: pointer;
        }
        button:hover {
            background: #e91e63;
        }
    </style>
</head>

<body>

<div class="card">
    <h1>💌 A Little Confession 💌</h1>

    <p><strong><?php echo $girl; ?></strong> ➡️ <strong><?php echo $boy; ?></strong></p>

    <div class="shayari">
        "Tum muskura do to savera ho jaye 🌸 <br>
        Tum saath ho to har andhera kho jaye 🌙 <br>
        Ek baat kehni thi dil se 💖 <br>
        Kya tum mere ho jaoge?"
    </div>

    <p style="font-size:20px;">
        <?php echo $boy; ?> ❤️ <br>
        main tumse kuch kehna chahti hoon… <br>
        har din, har khushi, har dard <br>
        **tumhare saath jeena chahti hoon** 🌹
    </p>

    <div class="heart">❤️</div>

    <h2>Will you be mine?</h2>

    <button onclick="alert('She said YES! 💍❤️')">
        Yes 💖
    </button>
</div>

</body>
</html>
