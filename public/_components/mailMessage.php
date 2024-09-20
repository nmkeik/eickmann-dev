<?php 
    $left ="";
    $right = "";
    foreach (@$info as $key => $value) {
        $left .= "<th>$key</th>\n";
        $right .= "<th>$value</th>\n";
    }
    if(!empty(@$category)) {
        foreach (@$category as $key => $value) {
            $left .= "<th>$key<th>\n";
            $right .= "<th>$value<th>\n";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kontakt Formular</title>
    <style>
        /* The css code goes here */
    </style>
</head>

<body>
    <div class="page">
        <h1>Danke für ihre Nachricht an Uns.</h1>
        <h2>Wir werden uns schnellst möglich bei ihnen melden.</h2>
        <table>
            <tr>
                <?= $left ?>
            </tr>
            <tr>
                <?= $right ?>
            </tr>
        </table>

        <h3>Ihre Nachricht an Uns:</h3>
        <p>
            <?= @$message ?>
        </p>

        <footer>
            <a href="https://eickmann.com/home/">Eickmann Computer</a> |
            <a href="https://eickmann.com/privacyAgreement/">Datenschutz</a> |
            <a href="https://eickmann.com/agb/">AGBs</a> |
            <a href="https://eickmann.com/impressum/">Impressum</a>
        </footer>
    </div>
</body>

</html>