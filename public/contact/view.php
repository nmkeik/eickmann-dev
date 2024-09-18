<main>
    <section id="contact-heading">
        <h1>Kontakt</h1>
    </section>
    <section id="contact-form">
        <form action="https://formsubmit.co/5d598158e9a7dddb391d95f1aae0a1cd" method="post"
            onsubmit="alert('Ihre Nachricht wurde versendet.')">
            <span id="bottom-bar"></span>
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_subject" value="Kontakt Formular!">
            <input type="hidden" name="_autoresponse"
                value="Danke für ihre Nachricht. Wir werden uns schnellst möglich bei ihnen melden.">
            <input class="text-input" type="text" placeholder="Vorname *" name="Vorname" required>
            <input class="text-input" type="text" placeholder="Nachname *" name="Namchname" required>
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
                    <input type="checkbox" name="Hardware, Verkauf und Service" id="test">
                    <h3>Hardware, Verkauf und Service</h3>
                </span>
                <span>
                    <input type="checkbox" name="Software & Betriebssysteme" id="test">
                    <h3>Software & Betriebssysteme</h3>
                </span>
                <span>
                    <input type="checkbox" name="Wartung & Support" id="test">
                    <h3>Wartung & Support</h3>
                </span>

            </div>
            <textarea name="Nachricht" id="" cols="30" rows="10" placeholder="Ihre Nachricht an uns *"
                required></textarea>

            <div id="privacy-agreement">
                <input type="checkbox" name="Datenschutzerklärung" id="privacy-agreement" required>
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