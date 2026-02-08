<?php
$girl = "Shalvi";
$boy  = "Arun";
?>

<!DOCTYPE html>
<html>
<head>
<title>Happy Propose Day 💍</title>

<style>
body {
    margin: 0;
    background: linear-gradient(to right, #ff9a9e, #fad0c4);
    font-family: cursive;
    text-align: center;
    overflow: hidden;
}

.card {
    background: white;
    width: 65%;
    margin: 80px auto;
    padding: 40px;
    border-radius: 25px;
    box-shadow: 0 0 30px rgba(255, 0, 102, 0.4);
    position: relative;
    z-index: 2;
    transition: 0.6s;
}

.glow {
    box-shadow: 0 0 60px hotpink;
    transform: scale(1.03);
}

h1 { color: #ff2e63; }

button {
    background: #ff2e63;
    color: white;
    border: none;
    padding: 14px 30px;
    font-size: 18px;
    border-radius: 30px;
    cursor: pointer;
}

button:hover {
    background: #d61c4e;
}

#proposal {
    display: none;
    font-size: 22px;
    margin-top: 25px;
    color: #c2185b;
    animation: fade 2s ease-in-out;
}

@keyframes fade {
    from {opacity: 0;}
    to {opacity: 1;}
}

/* Falling hearts */
.fall {
    position: fixed;
    top: -10px;
    font-size: 30px;
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

/* Ring animation */
.ring {
    font-size: 70px;
    display: none;
    animation: pop 1.5s infinite alternate;
}

@keyframes pop {
    from { transform: scale(1); }
    to { transform: scale(1.2); }
}
</style>
</head>

<body>

<div class="card" id="card">

<h1>💖 Happy Propose Day 💖</h1>

<p style="font-size:20px;">
<?php echo $boy; ?> ❤️ <?php echo $girl; ?>
</p>

<p style="font-size:18px;">
Dil ki ek baat kehni hai 💫 <br>
Har din tumhare saath aur special lagta hai 🌹
</p>

<button onclick="propose()">Open My Heart 💌</button>

<div id="proposal">
    💍 <?php echo $girl; ?> 💍 <br><br>

    Tum meri khushi ho 😊 <br>
    Tum meri aadat ho ❤️ <br>
    Kya tum meri life partner banogi? 🌹
</div>

<div class="ring" id="ring">💍</div>

</div>

<!-- Romantic Music -->
<audio id="music">
    <source src="https://cdn.pixabay.com/download/audio/2022/03/15/audio_c8c8a73467.mp3" type="audio/mpeg">
</audio>

<script>

function propose() {

    document.getElementById("proposal").style.display = "block";
    document.getElementById("ring").style.display = "block";
    document.getElementById("card").classList.add("glow");

    // 🎵 Play music
    let music = document.getElementById("music");
    music.play();

    // Stop music after 35 sec
    setTimeout(() => {
        music.pause();
        music.currentTime = 0;
    }, 35000);

    // ❤️ Heart Rain
    const hearts = ["❤️","💖","💕","💘"];

    for (let i = 0; i < 45; i++) {
        let heart = document.createElement("div");
        heart.className = "fall";
        heart.innerHTML = hearts[Math.floor(Math.random() * hearts.length)];
        heart.style.left = Math.random() * 100 + "vw";
        heart.style.animationDuration = (Math.random() * 2 + 3) + "s";

        document.body.appendChild(heart);

        setTimeout(() => heart.remove(), 5000);
    }
}

</script>

</body>
</html>
