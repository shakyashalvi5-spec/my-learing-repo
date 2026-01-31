<?php
$you   = "Shalvi";
$bestie = "Priya";
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
            overflow: hidden;
        }
        .card {
            background: white;
            width: 60%;
            margin: auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 150, 136, 0.4);
            position: relative;
            z-index: 2;
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

        /* Surprise text */
        #surprise {
            display: none;
            margin-top: 20px;
            font-size: 22px;
            color: #00796b;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Falling emojis */
        .fall {
            position: fixed;
            top: -10px;
            font-size: 24px;
            animation: fall 5s linear infinite;
            z-index: 1;
        }

        @keyframes fall {
            to {
                transform: translateY(110vh);
                opacity: 0;
            }
        }
    </style>
</head>

<body>

<div class="card">
    <h1>🤍 My Forever Bestie 🤍</h1>

    <p><strong><?php echo $you; ?></strong> 🫂 <strong><?php echo $bestie; ?></strong></p>

    <div class="shayari">
        "Dosti wo nahi jo sirf saath rahe 🤍 <br>
        Dosti wo hai jo har haal me saath de 🤝 <br>
        Hasna ho to wajah tum ho 😄 <br>
        Aur rona ho to himmat bhi tum ho 💫"
    </div>

    <p style="font-size:20px;">
        <?php echo $bestie; ?> 💙 <br>
        tu mera safe place hai 🫂 <br>
        kam words, zyada feelings <br>
        aur infinite yaari ✨
    </p>

    <div class="emoji">😄🤗✨</div>

    <h2>Best Friends Forever?</h2>

    <button onclick="bestieSurprise()">Always 💙</button>

    <div id="surprise">
        💙 BFF MODE ACTIVATED 💙 <br>
        Chahe duniya idhar-udhar ho jaye 🌍 <br>
        <b>hum hamesha saath rahenge 🤝</b>
    </div>
</div>

<script>
function bestieSurprise() {
    document.getElementById("surprise").style.display = "block";

    const emojis = ["❤️", "⭐", "💙", "✨"];

    for (let i = 0; i < 25; i++) {
        let item = document.createElement("div");
        item.className = "fall";
        item.innerHTML = emojis[Math.floor(Math.random() * emojis.length)];
        item.style.left = Math.random() * 100 + "vw";
        item.style.animationDuration = (Math.random() * 3 + 3) + "s";
        document.body.appendChild(item);

        setTimeout(() => {
            item.remove();
        }, 5000);
    }
}
</script>

</body>
</html>
