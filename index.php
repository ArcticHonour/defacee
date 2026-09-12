<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>astra was here</title>

    <style>
        @font-face {
            font-family: "Didot";
            src: url("https://db.onlinewebfonts.com/t/251039e6849ad977a8bfc40b564dce89.eot");
            src:
                url("https://db.onlinewebfonts.com/t/251039e6849ad977a8bfc40b564dce89.eot?#iefix") format("embedded-opentype"),
                url("https://db.onlinewebfonts.com/t/251039e6849ad977a8bfc40b564dce89.woff2") format("woff2"),
                url("https://db.onlinewebfonts.com/t/251039e6849ad977a8bfc40b564dce89.woff") format("woff"),
                url("https://db.onlinewebfonts.com/t/251039e6849ad977a8bfc40b564dce89.ttf") format("truetype"),
                url("https://db.onlinewebfonts.com/t/251039e6849ad977a8bfc40b564dce89.svg#Didot") format("svg");
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            flex-direction: column;
        }

        body {
            background: black;
            color: #000000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .astra {
            font-family: "Didot", serif;
            font-size: 64px;
            font-weight: normal;
            letter-spacing: 2px;
            line-height: 1;
            color: white;
        }
        .wami {
            font-family: "Didot", serif;
            font-size: 64px;
            color: grey;
            font-weight: normal;
            letter-spacing: 2px;
            line-height: 1;
            -webkit-text-stroke: 1px black;
            transform: scaleY(3);
            transform-origin: center;

            text-shadow:
                1px 0 #000,
                -1px 0 #000,
                0 1px #000,
                0 -1px #000;
        }
        .wing-container {
            position: relative;
            display: inline-block;
        }

        .lung {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scaleX(0.8);
            -webkit-text-stroke: 1px black;
            font-family: "Didot", serif;
            font-size: 100px;
            font-weight: normal;
            letter-spacing: 2px;
            color: white;
        }
        .message {
            top: 50%;
            left: 50%;
            transform: scaleX(0.8);
            -webkit-text-stroke: 2px black;
            font-family: "Didot", serif;
            font-size: 64px;
            font-weight: normal;
            letter-spacing: 2px;
            color: white;
            border: 2px solid grey;
            display: inline-block;
            background: white;
        }
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
        }

        .gun {
            width: 250px;
            height: auto;
        }

        .left-gun {
            transform: scaleX(-1);
        }

        .right-gun {
            transform: scaleX(1);
        }
        .snowflake {
            filter:
                brightness(1)
                saturate(100%)
                invert(45%)
                sepia(80%)
                saturate(1500%)
                hue-rotate(170deg)
                brightness(100%);
        }
    </style>
</head>

<body>

    <div class="logo">
        <img src="gun.gif" class="gun left-gun">

        <div class="wing-container">
            <img src="wings.png" height="200">
            <div class="lung">$WAMI</div>
        </div>

        <img src="gun.gif" class="gun right-gun">
    </div>

    <div class="astra" href="https://zmail.wtf">astra was here</div>
    <br>
```html id="p9k3xz"
<div class="code-box">
    <pre><code>Résumé de la vulnérabilité — Injection de commandes L’application présente une vulnérabilité d’injection de commandes système (OS Command Injection), car des données contrôlées par l’utilisateur provenant du fichier CSV sont directement intégrées dans des commandes

exécutées par PHP via la fonction shell_exec(). En particulier, le premier champ du fichier CSV est concaténé à la commande qrencode sans être correctement échappé. Ainsi, des caractères spéciaux du shell, tels que ;,

peuvent permettre l’interprétation de commandes supplémentaires au lieu de traiter ces caractères comme de simples données. Un attaquant pourrait donc potentiellement exécuter des commandes avec les privilèges du processus du serveur web. Cette vulnérabilité

doit être corrigée en traitant les données du CSV comme de simples données et en échappant correctement les arguments, ou, de préférence, en évitant complètement l’exécution de commandes système.

- astra</code></pre>
</div>

<style>
.code-box {
    background: #2b2b2b;
    color: #ddd;
    border: 1px solid #555;
    padding: 15px;
    width: 100%;
    max-width: 900px;
    box-sizing: border-box;
    overflow-x: auto;
    font-family: monospace;
    font-size: 14px;
}

.code-box pre {
    margin: 0;
    white-space: pre-wrap;
    word-wrap: break-word;
}
</style>
```

<div id="black-overlay"></div>

<img id="shi"
     src="shi.gif"
     style="
        position: fixed;
        z-index: 99999;
        width: 2000px;
        height: auto;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        pointer-events: none;
     ">

<div id="flash"></div>

<style>
    /* Completely covers the website */
    #black-overlay {
        position: fixed;
        inset: 0;
        background: black;
        z-index: 99998;
        pointer-events: none;
    }

    /* Flashbang */
    #flash {
        position: fixed;
        inset: 0;
        background: white;
        opacity: 0;
        z-index: 100000;
        pointer-events: none;
    }

    #flash.active {
        animation: flashbang 5s ease-out forwards;
    }

    @keyframes flashbang {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }
</style>

<script>
setTimeout(function () {

    // Instant white flash
    document.getElementById("flash").classList.add("active");

    // Remove GIF
    document.getElementById("shi").remove();

    // Remove black overlay so the website underneath is revealed
    setTimeout(function () {
        document.getElementById("black-overlay").remove();
    },);

}, 1000);
</script>

</body>

</html>
