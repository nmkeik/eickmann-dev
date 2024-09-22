<?php 
if(isset($_POST['Vorname']) && isset($_POST['Nachname']) && isset($_POST['E-Mail']) && isset($_POST['Nachricht']) && isset($_POST['Datenschutzerklaerung'])) {
    if($_POST['Datenschutzerklaerung'] === 'on') {

        $headers = array(
            'MIME-Version'=> '1.0',
            'Content-type'=> 'text/html;charset=UTF-8',
            'From'=> 'Eickmann Computer <mail@eickmann.com>',
            'Reply-To'=> 'mail@eickmann.com',
            'BCC'=> 'nmk.eickmann@gmail.com',
        );

        $info = array(
            'Vorname' => $_POST['Vorname'],
            'Nachname'=> $_POST['Nachname'],
            'E-Mail'=> $_POST['E-Mail'],
        );

        if(isset($_POST['Firma'])) $info['Firma'] = $_POST['Firma']; 
        if(isset($_POST['Telefonnummer'])) $info['Telefonnummer'] = $_POST['Telefonnummer']; 
        if(isset($_POST['Firma'])) $info['Firma'] = $_POST['Firma'];

        $category = array();
        if(isset($_POST['Beratung'])) $category['Beratung'] = True;
        if(isset($_POST['Hardware,_Verkauf_und_Service'])) $category['Hardware, Verkauf und Service'] = True;
        if(isset($_POST['Software_&_Betriebssysteme'])) $category['Software & Betriebssysteme'] = True;
        if(isset($_POST['Wartung_&_Support'])) $category['Wartung & Support'] = True;

        $sent = mail($_POST['E-Mail'],'Kontakt Formular!',  createMessage($info, $category, $_POST['Nachricht']), $headers);

        if($sent) {
            echo "<script language='javascript'> alert('Ihre Nachricht wurde erfolgreich versendet!\nSie werden nun zurück auf unsere Startseite geleitet.') </script>";
            header('LOCATION: /home/');
            die();
        } else {
            echo "<script language='javascript'> alert('Error: Ihre Nachricht wurde nicht versendet!\nBitte versuchen Sie es erneut.') </script>";
        }
    }
} 


?>

<main>
    <section id="contact-heading">
        <h1>Kontakt</h1>
    </section>
    <section id="contact-form">
        <form action="" method="post"
            onsubmit="alert('Ihre Nachricht wurde versendet.\nSie werden zurück zur Startseite geleitet.')">
            <span id="bottom-bar"></span>
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_subject" value="Kontakt Formular!">
            <input type="hidden" name="_autoresponse"
                value="Danke für ihre Nachricht. Wir werden uns schnellst möglich bei ihnen melden.">
            <input class="text-input" type="text" placeholder="Vorname *" name="Vorname" required>
            <input class="text-input" type="text" placeholder="Nachname *" name="Nachname" required>
            <input class="text-input" type="email" placeholder="E-Mail *" name="E-Mail" required>
            <input class="text-input" type="text" placeholder="Firma" name="Firma">
            <input class="text-input" type="text" placeholder="Telefonnummer" name="Telefonnummer">
            <h2>Um welchen Bereich handelt es sich?</h2>
            <div>
                <span>
                    <input type="checkbox" name="Beratung" id="test">
                    <h3>Beratung</h3>
                </span>
                <span>
                    <input type="checkbox" name="Hardware,_Verkauf_und_Service" id="test">
                    <h3>Hardware, Verkauf und Service</h3>
                </span>
                <span>
                    <input type="checkbox" name="Software_&_Betriebssysteme" id="test">
                    <h3>Software & Betriebssysteme</h3>
                </span>
                <span>
                    <input type="checkbox" name="Wartung_&_Support" id="test">
                    <h3>Wartung & Support</h3>
                </span>

            </div>
            <textarea name="Nachricht" id="" cols="30" rows="10" placeholder="Ihre Nachricht an uns *"
                required></textarea>

            <div id="privacy-agreement">
                <input type="checkbox" name="Datenschutzerklaerung" id="privacy-agreement" required>
                <p>
                    Ich habe die <a href="/privacyAgreement/" target="_blank">Datenschutzerklärung</a> zur Kenntnis
                    genommen.<br>
                    Ich stimme zu, dass meine Angaben und Daten zur Beantwortung meiner Anfrage elektronisch erhoben und
                    gespeichert werden.
                </p>
            </div>

            <button id="send-btn" type="submit">Senden</button>
        </form>
    </section>
</main>