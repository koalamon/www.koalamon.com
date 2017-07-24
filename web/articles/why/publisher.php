<?php
$footerColor = '#3498db';
?>

<div id="why-detail">
    <div class="super-headline" style="background-color: #2980b9">
        Leankoala. Gebaut für Verlage.
    </div>

    <div class="content">
        <div class="intro info-block">
            Hochqualitative Webanwendungen sind der Wunsch jedes Kunden. Gleichzeitig sollen die Seiten preiswert und schnell realisiert werden.
            Mit dem "Lean Testing"-Ansatz haben wir eine Test-Methode etabliert, die sowohl effizient als auch kostengünstig ist.
            <span style="font-weight: 300">Leankoala ist das perfekte Werkzeug für Agenturen.</span>

            <!--div style="width: 100%; text-align: center; margin-top: 40px">
                <a href="https://calendly.com/leankoala_com" data-height="580" data-toggle="lightbox" data-gallery="remoteload" id="demo" style="color: white; font-style: normal">
                    <div style="font-size: 16px; width: 170px; background-color: #ecf0f1; padding: 10px 20px; border-radius: 10px; color: black; display: initial">
                        Demo gefällig?
                    </div>
                </a>
            </div-->
        </div>


        <div class="benefits block">
            <h2>Vorteile</h2>
            <ul>
                <li>
                    <h3>Effizient</h3>
                    <p>
                        Statt in Stunden - wie herkömmlich - können Tests bereits in Minuten durch Leankoala zur Verfügung gestellt werden.
                        Dies reduziert die Kosten des Testens auf ein Minimum.
                    </p>
                </li>
                <li>
                    <h3>Umfangreich</h3>
                    <p>
                        Leankoala liefert <?php echo count($checks[$language]); ?> Werkzeuge, die jedes Detail einer Webseite
                        testen und überwachen können. Egal ob HTML, Zählpixel, JSON oder XML-APIs, um nur einige zu nennen.
                    </p>
                </li>
                <li>
                    <h3>Sofort einsatzbereit</h3>
                    <p>
                        Als Software-as-a-Service kann Leankoala sofort eingesetzt werden. Es ist kein umfangreiches Setup nötig.
                    </p>
                </li>
                <li>
                    <h3>Integriert</h3>
                    <p>
                        Der Leankoala-Service wurde konzipiert, um sowohl während der Entwicklung seine Stärken auszuspielen, als auch
                        nach dem Livegang zu unterstützen.
                    </p>
                </li>
                <li>
                    <h3>Kostengünstig</h3>
                    <p>Dank des "Web Company"-Pakets können bis zu 500 Komponenten (ca. 30 Kunden) zu einem Festpreis getestet werden.</p>
                </li>
                <li class="highlight" style="background-color: #2980b9">
                    <h3>Etabliert</h3>
                    <p>Der "Lean Testing"-Ansatz wird bereits von vielen Agenturen gelebt. Das Leankoala-Team ist aktiver Teil der Testing-
                        und Webentwicklungs-Gemeinde.
                    </p>
                </li>
            </ul>
        </div>

        <div style="clear: both"></div>

        <div class="plan block" style="margin-top: 150px">
            <h2 style="margin-left: 0px">Das Agenturpaket</h2>
            <div class="info-block">
                <p>
                    Das <a href="<?php __a('/pricing.html'); ?>">Agentur- oder auch "Web Company"-Paket</a> entstand aus der Zusammenarbeit mit über einem Dutzend Hamburger Agenturen. Es sollte
                    ermöglichen allen Agenturkunden die Sicherheit, die durch Leankoala erzeugt wird, zu bieten, ohne unentwegt in eine Kostendiskussion
                    zu geraten.
                </p>
                <a href="<?php __a('/pricing.html'); ?>">
                    <ul>
                        <li>Dedizierter Server</li>
                        <li>∞ Checks</li>
                        <li>~30 Systeme</li>
                        <li>~500 Komponenten</li>
                        <li style="background-color: #7f8c8d"><?php echo $prices['webcompany']; ?> EUR</li>
                    </ul>
                </a>

                <p style="margin-top: 50px">
                    Das Paket zeichnet sich durch eine nicht begrenzte Anzahl von Checks, Systemen und Komponenten (URLs) aus. Um dies sicherzustellen
                    erhalten Kunden, die dieses Paket buchen einen dedizierten Server, der nur eigene Testaufträge ausführt. Erfahrungsgemäß
                    kann ein solcher Server ca. 500 Urls testen und überwachen.
                </p>


            </div>
        </div>

        <div style="clear: both"></div>

        <div class="customers block" style="margin-top: 200px">
            <h2 style="margin-left: 0px">Leankoala-Agenturen</h2>
            <ul>
                <li>
                    <a href="http://www.fortuneglobe.com/" target="_blank">
                        <img src="/images/agencies/fortune.png" alt="FortuneSolutions" width="170px">
                    </a>
                </li>
                <li>
                    <a href="https://www.ministrygroup.de/" target="_blank">
                        <img src="/images/agencies/ministry.png" alt="Ministry" width="90px">
                    </a>
                </li>
                <li>
                    <a href="https://www.bornholdtlee.de/" target="_blank">
                        <img src="/images/agencies/blg_logo.png" alt="Bornholdt Lee" width="200px" style="margin-top: 20px">
                    </a>
                </li>
                <li>
                    <a href="https://www.drid.de/" target="_blank">
                        <img src="/images/agencies/drid.png" alt="DRID" width="120px" style="margin-top: 15px">
                    </a>
                </li>
                <li>
                    <a href="http://socialobjects.de/" target="_blank">
                        <img src="/images/agencies/so_logo.png" alt="Social Objects" width="60px">
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
