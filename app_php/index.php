<!DOCTYPE HTML>
<!--
    RasKeyTar
    CSS-Template Information:
        Road Trip by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>RasKeyTar - elektronisches Musikinstrument</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="/assets/css/main.css" />
    </head>
    <body>

        <!-- Header -->
        <header id="header">
            <div class="logo"><a href="index.html">RasKeyTar <span>by Bernhard Wallisch</span></a></div>
            <a href="#menu"><span>Menu</span></a>
        </header>

        <!-- Nav -->
        <nav id="menu">
            <ul class="links">
                <li><a href="index.html">Home</a></li>
                <li><a href="generic.html">Impressum</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul>
        </nav>

        <!-- Banner -->
        <!--
                Note: To show a background image, set the "data-bg" attribute below
                to the full filename of your image. This is used in each section to set
                the background image.
        -->
        <section id="banner" class="bg-img" data-bg="banner.png">
            <div class="inner">
                <header>
                    <p>Hello you from <?php echo $_SERVER['REMOTE_ADDR']; ?>!</p>
                    <h1>This is RasKeyTar</h1>
                </header>
            </div>
            <a href="#one" class="more">Learn More</a>
        </section>

        <!-- One -->
        <section id="one" class="wrapper post bg-img" data-bg="banner2.png">
            <div class="inner">
                <article class="box">
                    <header>
                        <h2>RasKeyTar</h2>
                        <p>electronic music instrument</p>
                    </header>
                    <div class="content">
                        <p>Das RasKeyTar ist ein selbstgebautes elektronisches Musikinstrument auf Basis des Raspberry Pi zum LIVE-Einsatz auf der Bühne bzw. am Lagerfeuer.<br/>
                            Ein Keytar ist eine Mischung aus KEYboard und giTARre – ein Tasten-instrument zum Umhängen mit „Gitarren-Feeling“..</p>
                        <p>The RasKeyTar is a self-made elektronic instrument based on a Raspberry Pi to be played LIVE on stage ... or at the bonfire.<br/>
                            A Keytar is a mesh-up of a KEYboard and a guiTAR - a keyboard-based instrument to be carried around with "guitar-feeling".</p>
                    </div>
                </article>
            </div>
            <a href="#two" class="more">Learn More</a>
        </section>

        <!-- Two -->
        <section id="two" class="wrapper post bg-img" data-bg="banner3.png">
            <div class="inner">
                <article class="box">
                    <header>
                        <h2>So funktioniert's</h2>
                        <p>the way it works</p>
                    </header>
                    <div class="content">
                        <div class="row">
                            <div class="6u 12u$(small)">
                                <h3>Features</h3>
                                <ul style="text-align:left"><li>Master-Keyboard mit drei Manualen</li>
                                    <li>rechte Hand: Melodie / Begleitung</li>
                                    <li>linke Hand: Akkord (bzw. Bass)</li>
                                    <li>Automatische Akkord-Transponierung für die Begleitung</li>
                                    <li>Integrierter Klangerzeuger mit 128 Instrumenten (Klangfarben)</li>
                                    <li>General MIDI-Interface</li>
                                    <li>Integrierte Aktivboxen</li>
                                    <li>Netzunabhängig (Betrieb mittels Power-Bank und Akku)</li></ul>
                            </div>
                            <div class="6u$ 12u$(small)">
                                <h3>Musizieren</h3>

                                <ul style="text-align:left">
                                    Linke Hand:
                                    <li>Festlegung des Akkords</li>
                                    <li>Basstöne</li>
                                    <li>Effekte (Sustain, Pitch,..)</li></ul>
                                <ul style="text-align:left">
                                    Rechte Hand:
                                    <li>„oberes Manual“ (Reihe 1+2): </br>
                                        Melodie, Klaviertastatur</li>
                                    <center>oder</center>
                                    <li>„unteres Manual“ (Reihe 3+4):<br/>
                                        Begleitung, Akkord durch linke Hand festgelegt, Grundton und Intervalle immer auf den gleichen Tasten.</li></ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <a href="#three" class="more">Learn More</a>
        </section>

        <!-- Three -->
        <section id="three" class="wrapper post bg-img" data-bg="banner4.png">
            <div class="inner">
                <article class="box">
                    <header>
                        <h2>So ist es aufgebaut</h2>
                        <p>the buildup</p>
                    </header>
                    <div class="content">
                        <div class="row">
                            <div class="6u 12u$(small)">
                                <h3>Bestandteile</h3>
                                <ul style="text-align:left">
                                    <li>Raspberry Pi (ab B2)</li>
                                    <li>USB-Tastatur & NumPad</li>
                                    <li>USB Game-Controller</li>
                                    <li>SmartPhone Lautsprecher</li>
                                    <li>Power-Bank</li>
                                    <center>&</center>
                                    <li>Raspbian</li>
                                    <li>Python Software</li>
                                </ul>
                            </div>
                            <div class="6u$ 12u$(small)">
                                <img src="images/raskeytar-buildup.png" alt="" width="80%">
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <a href="#four" class="more">Learn More</a>
        </section>

        <!-- Four -->
        <section id="four" class="wrapper post bg-img" data-bg="banner3.png">
            <div class="inner">
                <article class="box">
                    <header>
                        <h2>Making Of</h2>
                        <p>...from mockup to prototype...</p>
                    </header>
                    <div class="content">
                        <div class="row 50% uniform">
                            <div class="4u"><span class="image fit"><img src="images/making-of/raskeytar01.jpg" alt=""></span></div>
                            <div class="4u"><span class="image fit"><img src="images/making-of/raskeytar02.jpg" alt=""></span></div>
                            <div class="4u$"><span class="image fit"><img src="images/making-of/raskeytar04.jpg" alt=""></span></div>
                            <!-- Break -->
                            <div class="4u"><span class="image fit"><img src="images/making-of/raskeytar05.jpg" alt=""></span></div>
                            <div class="4u"><span class="image fit"><img src="images/making-of/raskeytar06.png" alt=""></span></div>
                            <div class="4u$"><span class="image fit"><img src="images/making-of/raskeytar07.jpg" alt=""></span></div>
                            <!-- Break -->
                            <div class="4u"><span class="image fit"><img src="images/making-of/raskeytar08.jpg" alt=""></span></div>
                            <div class="4u"><span class="image fit"><img src="images/making-of/raskeytar11.jpg" alt=""></span></div>
                            <div class="4u$"><span class="image fit"><img src="images/making-of/raskeytar12.jpg" alt=""></span></div>
                        </div>                    
                    </div>
                </article>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">

                <h2>Contact Me</h2>

<!--                <form action="#" method="post">

                    <div class="field half first">
                        <label for="name">Name</label>
                        <input name="name" id="name" type="text" placeholder="Name">
                    </div>
                    <div class="field half">
                        <label for="email">Email</label>
                        <input name="email" id="email" type="email" placeholder="Email">
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                    </div>
                    <ul class="actions">
                        <li><input value="Send Message" class="button alt" type="submit"></li>
                    </ul>
                </form>-->

                <ul class="icons">
                    <li><a href="https://twitter.com/BernLeWal" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/ras.keytar.7" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="mailto:webmaster@raskeytar.at" class="icon round fa-file-text-o"><span class="label">eMail</span></a></li>
                </ul>

                <div class="copyright">
                    &copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
                </div>

            </div>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>