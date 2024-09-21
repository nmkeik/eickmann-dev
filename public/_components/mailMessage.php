<?php 
    $table = "";
    foreach (@$info as $key => $value) {
        $table .= "<tr>\n<th class='th-class'>$key</th>\n<th class='th-class'>$value</th></tr>";
    }
    if(!empty(@$category)) {
        foreach (@$category as $key => $value) {
            $table .= "<tr>\n<th class='th-class'>$key</th>\n<th class='th-class' style='text-align:center;'>&#9745</th></tr>";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kontakt Formular</title>
    <style>
        @font-face {
            font-family: 'Poppins';
            font-weight: 700;
            font-style: normal;
            src: url('https://cdn.jsdelivr.net/gh/webfontworld/Poppins/Poppins-Bold.eot');
            src: url('https://cdn.jsdelivr.net/gh/webfontworld/Poppins/Poppins-Bold.eot?#iefix') format('embedded-opentype'),
                url('https://cdn.jsdelivr.net/gh/webfontworld/Poppins/Poppins-Bold.woff2') format('woff2'),
                url('https://cdn.jsdelivr.net/gh/webfontworld/Poppins/Poppins-Bold.woff') format('woff'),
                url('https://cdn.jsdelivr.net/gh/webfontworld/Poppins/Poppins-Bold.ttf') format("truetype");
            font-display: swap;
        } 

        html, body {
            margin: 0;
            padding: 0;
        }

        #page {
            min-width: 100vw;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            font-family: sans-serif, Arial, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue';
            z-index: 0;
        }

        #bg {
            position: absolute;
            width: 100%;
            height: 100%;
            min-width: 100vw;
            min-height: 100vh;
            background: linear-gradient(to right, rgb(234, 179, 8) 0%, rgb(250, 204, 21) 50%);
            background-size: cover;
            background-repeat: no-repeat;
            z-index: -1;
            clip-path: polygon(0 100%, 0 80%, 40% 70%, 100% 80%, 100% 100%);
        }

        #header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            min-width: 100vw;
            min-height: 100vh;
            z-index: -1;
        }

        #header-a {
            position: absolute;
            top: 0;
            left: 20px;
            height: 80px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: black;
            transition: transform 0.2s;
        }

        #header-a:hover {
            transform: scale(1.075);
            transition: transform 0.2s;
        } 

        #header-a-img {
            height: 70%;
        }

        #header-a-span {
            font-family: Poppins;
            font-weight: 700;
            font-size: 1.2rem;
            margin-left: -26px;
        }

        #h1, #h2, .h3-class, #p {
            margin: 0;
        }

        #h1 {
            margin-top: 50px;
        }

        #h2 {
            margin-bottom: 70px;
        }

        #h3 {
            margin-bottom: 25px;
        }

        #table {
            width: 60%;
            min-width: 500px;
            max-width: 800px;
            border-spacing: 0;
            margin-bottom: 60px;
            height: fit-content;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
        }

        .th-class {
            width: 50%;
            text-align: left;
            border-top: 2px solid black;
            border-left: 2px solid black;
            padding: 10px;
        }

        #p {
            width: 60%;
            min-width: 500px;
            max-width: 800px;
            margin-bottom: 60px;
            border: 2px solid black;
            border-radius: 10px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        #footer {
            position: absolute;
            bottom: 30px;
        }

        .footer-a {
            color: black;
        }

        @media screen and (max-width: 1080px) {
            #h1 {
                margin-top: 90px;
            }
        }

        @media screen and (max-width: 650px) {

            #header-a {
                left: 50%;
                transform: translateX(-50%);
                width: 100%;
                justify-content: center;
            }

            #h1 {
                font-size: 25px;
            }

            #h2 {
                font-size: 20px;
                margin-top: 5px;
                margin-bottom: 55px;
                font-weight: 600;
            }

            #h1, #h2 {
                width: 90%;
                text-wrap: balance;
                text-align: center;
            }

            #table, #p {
                min-width: 0;
                width: 90%;
            }

            #p {
                margin-bottom: 120px;
            }

            #footer {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .footer-a {
                text-wrap: nowrap;
            }
        }

    </style>
</head>

<body>
    <div id="page">
        <span id="bg"></span>

        <header id="header">
            <a id="header-a" href="https://tp.eickmann.com/home/">
                <img id="header-a-img" src="http://tp.eickmann.com/_assets/images/logos/blue_mouse.png" alt="Logo von Eickmann Computer">
                <span id="header-a-span">e&#305ckmann computer</span>
            </a>
        </header>

        <h1 id="h1">Danke für ihre Nachricht an Uns.</h1>
        <h2 id="h2">Wir werden uns schnellst möglich bei ihnen melden.</h2>

        <h3 class="h3-class">Ihre angegebenen Daten:</h3>
        <table id="table">
            <?= $table ?>
        </table>

        <h3 class="h3-class">Ihre Nachricht an Uns:</h3>
        <p id="p">
            <?= @$message ?>
        </p>

        <footer id="footer">
            <a class="footer-a" href="https://eickmann.com/home/">Eickmann Computer</a> |
            <a class="footer-a" href="https://eickmann.com/privacyAgreement/">Datenschutz</a> |
            <a class="footer-a" href="https://eickmann.com/agb/">AGBs</a> |
            <a class="footer-a" href="https://eickmann.com/impressum/">Impressum</a>
        </footer>
    </div>
</body>

</html>