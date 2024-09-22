<?php 
    $table = "";
    foreach (@$info as $key => $value) {
        $table .= "<tr>\n<th style='font-family: sans-serif, Arial, Helvetica, system-ui, -apple-system; text-align: left; padding: 10px; width: 50%; border-top: 1px solid black; border-left: 1px solid black;'>$key</th>\n<th style='font-family: sans-serif, Arial, Helvetica, system-ui, -apple-system; text-align: left; padding: 10px; width: 50%; border-top: 1px solid black; border-left: 1px solid black;'>$value</th></tr>";
    }
    if(!empty(@$category)) {
        $table .= "<tr>\n<th style='font-family: sans-serif, Arial, Helvetica, system-ui, -apple-system; text-align: left; padding: 10px; width: 50%; border-top: 1px solid black; border-left: 1px solid black;'>Kategorie(-n)</th>\n<th style='font-family: sans-serif, Arial, Helvetica, system-ui, -apple-system; text-align: left; padding: 10px; width: 50%; border-top: 1px solid black; border-left: 1px solid black;'>\n";
        foreach (@$category as $key => $value) {
            $table .= "- $key<br>";
        }
        $table .= "</th>\n</tr>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt Formular!</title>
</head>
<body style="background: linear-gradient(to right, rgb(234, 179, 8) 0%, rgb(250, 204, 21) 40%, rgb(250, 210, 25)) 80%; margin: 0; padding: 0;width: 100%;">
    <table style="background-color: rgb(250, 204, 21); background: linear-gradient(to right, rgb(234, 179, 8) 0%, rgb(250, 204, 21) 40%, rgb(250, 210, 25)) 80%; margin: 0; width: 100%;">
        <tr><a style="text-decoration: none; color: black; font-family: sans-serif, Helvetica, Arial, 'Times New Roman', system-ui, -apple-system; font-size: 25px; font-weight: 700; display: inline-block; margin-left: 20px; margin-top: 20px;" href="http://tp.eickmann.com/home/"><img style="height: 65px;" src="http://tp.eickmann.com/_assets/images/logos/blue_mouse_text.png" alt="eickmann computer"></a></tr>
    
        <tr><h1 style="text-wrap: balance; font-family: sans-serif, Arial, Helvetica, 'Times New Roman', system-ui, -apple-system; text-align: center; margin-bottom: 5px;">Danke für ihre Nachricht an Uns.</h1></tr>
        <tr><h2 style="text-wrap: balance; font-family: sans-serif, Arial, Helvetica, 'Times New Roman', system-ui, -apple-system; text-align: center; margin-top: 0; padding-bottom: 50px;">Wir werden uns schnellst möglich bei ihnen melden.</h2></tr>

        <tr><h3 style="font-family: sans-serif, Arial, Helvetica, 'Times New Roman', system-ui, -apple-system; text-align: center;">Ihre angegebenen Daten:</h3></tr>
        <tr><table style="max-width: 600px; margin: auto; border-bottom: 1px solid black; border-right: 1px solid black; border-spacing: 0; background-color: white;"><?= $table ?></table></tr>

        <tr><h3 style="font-family: sans-serif, Arial, Helvetica, 'Times New Roman', system-ui, -apple-system; text-align: center; margin-top: 50px;">Ihre Nachricht an Uns:</h3></tr>
        <tr><p style="font-family: sans-serif, Arial, Helvetica, 'Times New Roman', system-ui, -apple-system; max-width: 500px; margin: auto; padding: 20px; border: 1px solid black; border-radius: 10px; background-color: white;"><?= @$message ?></p></tr>
        <tr>
            <p style="font-family: sans-serif, Arial, Helvetica, 'Times New Roman', system-ui, -apple-system;max-width: 1000px; margin: auto; margin-top: 100px; text-align: center; padding-bottom: 100px;">
                <a style="padding: 0 6px;" href="https://eickmann.com/home/">Eickmann Computer</a>
                <a style="padding: 0 6px;" href="https://eickmann.com/privacyAgreement/">Datenschutzerklärung</a>
                <a style="padding: 0 6px;" href="https://eickmann.com/agb/">AGBs</a>
                <a style="padding: 0 6px;" href="https://eickmann.com/impressum/">Impressum</a>
            </p>
        </tr>
        
    </table>    
</body>
</html>