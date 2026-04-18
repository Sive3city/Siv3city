<?php
http_response_code(503);
header("Retry-After: 3600");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Maintenance en cours</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        height: 100vh;
        background: linear-gradient(135deg, #667eea, #764ba2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        overflow: hidden;
    }

    .container {
        text-align: center;
        animation: fadeIn 1.5s ease;
    }

.logo {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 20px;
    letter-spacing: 2px;
    animation: float 3s ease-in-out infinite;
}

/* IMAGE LOGO */
.logo img {
    width: 350px;
    height: auto;
    margin-bottom: 10px;
    animation: float 3s ease-in-out infinite, glow 2s ease-in-out infinite;
}

/* Glow */
@keyframes glow {
    0%, 100% {
        filter: drop-shadow(0 0 5px rgba(255,255,255,0.3));
    }
    50% {
        filter: drop-shadow(0 0 20px rgba(255,255,255,0.8));
    }
}

/* Effet glow */
@keyframes glow {
    0%, 100% {
        filter: drop-shadow(0 0 5px rgba(255,255,255,0.3));
    }
    50% {
        filter: drop-shadow(0 0 20px rgba(255,255,255,0.8));
    }
}
    }

    /* Loader */
    .loader {
        margin: 30px auto;
        width: 60px;
        height: 60px;
        border: 6px solid rgba(255,255,255,0.2);
        border-top: 6px solid white;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    h1 {
        font-size: 32px;
        margin-bottom: 15px;
    }

    p {
        opacity: 0.8;
        font-size: 16px;
    }

    /* Animation entrée */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Rotation loader */
    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    /* Flottement logo */
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    /* Petites bulles en fond */
    .bubble {
        position: absolute;
        bottom: -100px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        animation: rise linear infinite;
    }

    @keyframes rise {
        to {
            transform: translateY(-120vh);
        }
    }
</style>
</head>

<body>

<div class="container">
    <div class="logo">
    <img src="SIV3CITY.png" alt="Logo">
</div>

    <h1>Maintenance en cours</h1>

    <div class="loader"></div>

    <p>Nous améliorons le site pour vous offrir une meilleure expérience.</p>
    <p>Revenez dans quelques instants 🙏</p>
</div>

<script>
    // Génération de bulles animées
    for (let i = 0; i < 15; i++) {
        let bubble = document.createElement("div");
        bubble.classList.add("bubble");

        let size = Math.random() * 40 + 10;
        bubble.style.width = size + "px";
        bubble.style.height = size + "px";

        bubble.style.left = Math.random() * 100 + "vw";
        bubble.style.animationDuration = (Math.random() * 10 + 5) + "s";

        document.body.appendChild(bubble);
    }
</script>

</body>
</html>
