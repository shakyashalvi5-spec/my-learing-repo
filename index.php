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
            transition: transform 0.5s, box-shadow 0.5s;
        }

        .glow {
            transform: scale(1.02);
            box-shadow: 0 0 35px rgba(0, 150, 136, 0.8);
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

        #surprise {
            display: none;
            margin-top: 20px;
            font-size: 22px;
            color: #00796b;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.8); }
            to   { opacity: 1; transform: scale(1); }
        }

        /* FRONT falling emojis */
        .fall {
            position: fixed;
            top: -10px;
            font-size: 26px;
            animation: fall 5s linear infinite;
            z-index: 9999;
            pointer-events: none;
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

<div class="card" id="card">
    <h1>🤍 My Forever Bestie 🤍</h1>

    <p><strong><?php echo $you; ?></strong> 🫂 <strong><?php echo $bestie; ?></strong></p>

    <div class="shayari">
        "Log milte hain, log bichhadte hain 🌍 <br>
        Kuch sirf yaadein ban jaate hain 💭 <br>
        Par tu wo dost hai 💙 <br>
        Jo har haal me saath nibhata hai 🤝"
    </div>

    <p style="font-size:20px;">
        <?php echo $bestie; ?> 💫 <br>
        tu mera comfort, meri strength 🤍 <br>
        no drama, no condition <br>
        bas pure dil wali yaari ✨
    </p>

    <div class="emoji">😄🤗✨</div>

    <h2>Best Friends Forever?</h2>

    <button onclick="bestieSurprise()" id="bffBtn">Always 💙</button>

    <div id="surprise">
        💙 BFF MODE ACTIVATED 💙 <br>
        Zindagi jaisi bhi ho 🌈 <br>
        <b>hum hamesha ek team rahenge 🤝</b>
    </div>
</div>

<!-- Soft friendship music -->
<audio id="music">
    <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
</audio>

<script>
function bestieSurprise() {
    document.getElementById("surprise").style.display = "block";
    document.getElementById("bffBtn").disabled = true;

    // Card glow
    document.getElementById("card").classList.add("glow");

    // Play music
    document.getElementById("music").play();

    const emojis = ["❤️", "⭐", "💙", "✨"];

    for (let i = 0; i < 35; i++) {
        let item = document.createElement("div");
        item.className = "fall";
        item.innerHTML = emojis[Math.floor(Math.random() * emojis.length)];
        item.style.left = Math.random() * 100 + "vw";
        item.style.animationDuration = (Math.random() * 2 + 3) + "s";
        document.body.appendChild(item);

        setTimeout(() => item.remove(), 5000);
    }
}
</script>

</body>
</html>
