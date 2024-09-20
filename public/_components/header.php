<script src="../_javascript/emailcrypt.js"></script>
<header class="flex-center"> 
    <!--logo right top-->
    <a href="/home/"><img fetchpriority="high" loading="lazy" id="logo" src="../_assets/images/logos/blue_mouse.png" alt="Logo mit Link zur Startseite"></a>

    <div id="contact-links">
        <a href="https://goo.gl/maps/H5CxB4g5Y1rfu8Qp8" target="_blank" alt="Google Maps">
            <img fetchpriority="high" loading="lazy" src="../_assets/icons/location-dot-solid.svg">
            <span>&nbsp;In der Römerstadt 259</span>
        </a>
        <a href="tel:069-763409" target="_blank" alt="Telefonnummer">
            <img fetchpriority="high" loading="lazy" src="../_assets/icons/phone-solid.svg">
            <span>069-763409</span>
        </a>
        <script>emailshort('mail AT eickmann PUNKT com','<img fetchpriority="high" loading="lazy" src="../_assets/icons/envelope-solid.svg"><span>mail@eickmann.com</span>');</script>
    </div>

    <div id="hamburger" onclick="activateHamburgerMenu()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>

<?php
$path=array();
?>

    <!--nav bar-->
    <nav class="nav-bar">
        <?php 
            $url = parse_url($_SERVER['REQUEST_URI']);
            $path = $url['path']; 
        ?>
        <a href='/home/' <?= $path === "/home/" ? "class='active-page'" : "" ?> >Startseite</a>
        <a href="/services/" id="leistungen-link" <?= $path === '/services/' ? "class='active-page'" : "" ?> >Leistungen&#x25BE;</a>
        <a href="/contact/" <?= $path === '/contact/' ? "class='active-page'" : '' ?> >Kontakt</a>
        <a href="/fernwartung/"<?= $path === '/fernwartung/' ? "class='active-page'" : "" ?>>Fernwartung</a>
        <a id="ueber-uns-link" <?= in_array($path, [
            '/ourTeam/',
            '/refrences/',
            '/history/',
        ]) ? "class='active-page'" : '' ?> >Über Uns&#x25BE;</a>
    </nav>

    <!--Drop Down of Leistungen-->
    <nav id="drop-down" class="hidden">
        <a href="/services/#business-client">Geschäfts & Wartungskunden</a>
        <a href="/services/#private-client" class="seperator">Privatkunden</a>
        <a href="/services/#beratung-section">Beratung</a>
        <a href="/services/#hardware-section">Hardware, Verkauf & Service</a>
        <a href="/services/#software-section">Software & Betriebssysteme</a>
        <a href="/services/#wartung-section">Wartung & Support</a>
    </nav>

    <!--Drop Down of Ueber Uns-->
    <nav id="drop-down-ueber-uns" class="hidden">
        <a href="/ourTeam/" <?= $path === '/ourTeam/' ? "class='active-page'" : '' ?> >Unser Team</a>
        <a href="/refrences/" <?= $path === '/refrences/' ? "class='active-page'" : '' ?> >Referenzen</a>
        <a href="/history/" <?= $path === '/history/' ? "class='active-page'" : '' ?> >Historie</a>
    </nav>

</header>

<div id="scroll-to-top">
    <a href="#">
        <span class="left-span"></span>
        <span class="right-span"></span>
    </a>
</div>