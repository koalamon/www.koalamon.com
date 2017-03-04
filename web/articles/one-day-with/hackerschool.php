<div id="one-day-with">
    <div class="content">
        <h1 style="width: 100%; text-align: center">One day with Hacker School</h1>

        <div class="main-info" style="margin-bottom: 100px; text-align: center">
            <div style="width: 100%; text-align: center; margin-bottom: 100px">
                <img src="/images/odw_hackerschool.png" style="">
            </div>
            Die Hacker School wurde 2014 gegründet. Seither ermöglicht sie Jugendlichen im Altern von 11-18 Jahren Zugang zu Themen wie Programmieren
            und Entwicklung. Wichtig in einer immer digitaler werdenden Welt. Sie ist bereits in vier Städten zu finden: Hamburg, Bremen, Aachen und
            Schwerte und die Kursplätze sind heiß begehrt.
            <div>
                <ul>
                    <li><a href="#goal">Das Ziel</a></li>
                    <li><a href="#leanchecks">Einrichtung</a></li>
                </ul>

                <div style="clear: both"></div>

            </div>
        </div>
    </div>

    <div class="main-element-grey" style="margin-bottom: 100px">
        <div class="content">
            <a name="goal">
                <h2>Das Ziel</h2>
            </a>
            <p>
                Das Ziel hinter dem Einsatz von Leankoala // Lean Testing as a Service für die Seite der Hacker School ist in der Hauptsache das Monitoring
                der bestehenden Seiten. Alle Funktionalitäten von “ist die Seite da” über Vertaggung und “werden die gewünschten Bilder angezeigt” bis hin zu
                “ist eine Kontaktaufnahme möglich” werden überwacht. Für zukünftige Releases soll Leankoala als Testwerkzeug im Continuous Integration
                bzw. Deployment-Bereich herangezogen werden, um die Qualität bereits vor dem GoLive zu steigern und Zeit innerhalb der Entwicklung zu sparen.
            </p>
            <p>
                Parallel soll gezeigt werden, dass Testing elementarer Bestandteil von Webentwicklung und Programmierung ist.
            </p>
            <p>
                Die Webseite zum "Hacker School"-Projekt beruht auf Typo3, einem in PHP geschriebenen Content Managamenent Systems. Am Kernproduct
                wurde im Zuge der Entwicklung keine tiefgreifende Anpassung vorgenommen. Typo3 zählt momentan über 500.000 Installationen weltweit, so
                dass man sicher sein kann, dass das Grundprodukt sehr stabil ist.
            </p>
        </div>
    </div>

    <div class="content">
        <div>
            <div>
                <a name="leanchecks">
                    <h2>Einrichtung (Dauer 35min)</h2>
                </a>

                <style>
                    .circle {
                        border-radius: 15px;
                        height: 20px;
                        width: 20px;
                        background-color: #eee;
                        position: relative;
                        left: -120px;
                        float: left;
                    }

                    .time {
                        position: relative;
                        left: -140px;
                        float: left;
                        width: 79px;
                    }

                    .element {
                        position: relative;
                        left: -50px;
                        margin-left: 100px;
                        line-height: 24px;
                    }

                    #leanchecks {
                        border-left: 3px solid #eee;
                        padding-left: 30px;
                        margin-left: 120px
                    }

                    #leanchecks h2 {
                        text-align: left;
                        font-size: 18px;
                        margin-bottom: 10px;
                    }

                    p {
                        line-height: 28px;
                    }

                    #leanchecks ul {
                        display: block;
                    }

                    #leanchecks ul li {
                        white-space: nowrap;
                        margin: 5px 10px 5px 0;
                    }

                    #leanchecks a {
                        color: #3498db;
                    }
                </style>

                <div id="leanchecks">
                    <div>
                        <div class="time">0 Minuten</div>
                        <div class="circle"></div>
                        <div class="element">
                            <h2>Zu testende Seiten bestimmen</h2>
                            <p>
                                Bei der <a href="http://hacker-school.de/">Webseite der Hacker School</a> handelt es sich um eine klassische Marketingseite. Alle Inhalte werden über
                                das bereits getestete CMS gepflegt, so dass es nur eine Hand voll Seiten getestet werden müssen.
                            </p>
                            <ul>
                                <li>Homepage</li>
                                <li>Suchergebnissseite</li>
                                <li>Text-Artikel</li>
                                <li>Kontaktformular</li>
                                <li>Kursübersicht</li>
                                <li>Unterstützer</li>
                                <li>404-Seite</li>
                                <li>Adminbereich</li>
                            </ul>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                    <div style="margin-top: 50px">
                        <div class="time">10 Minuten</div>
                        <div class="circle"></div>
                        <div class="element">
                            <h2>Standard-Testfälle aktivieren</h2>
                            <p>
                                Die Standard-Checks Leankoalas für alle Webseiten bestehen aus:
                            </p>
                            <ul>
                                <li>KoalaPing</li>
                                <li>Site Info</li>
                                <li>JavaScript Error Scanner</li>
                                <li>HTML Essentials Rezept</li>
                                <li>LittleSEO</li>
                                <li>Google PageSpeed Score</li>
                                <li>Google Mobile Checker</li>
                                <li>Performance Checker</li>
                            </ul>
                            <div style="clear: both"></div>
                            <p style="margin-top: 20px">
                                So konnten wir sicherstellen, dass die Seite durchgehend erreichbar ist, das JavaScript fehlerfrei funktioniert, keine
                                großen Elemente auf der Seite zu finden sind und dass Google keine Beanstandungen hat.
                            </p>
                            <p>
                                Alle verwendeten Standard-Checks können mit einer Standardeinstellung verwendet werden. Für die Hacker School waren
                                diese Einstellungen passend.
                            </p>
                        </div>
                    </div>
                    <div style="margin-top: 50px">
                        <div class="time">20 Minuten</div>
                        <div class="circle"></div>
                        <div class="element">
                            <h2>Spezialfälle</h2>
                            <p>
                                Die Webseite der Hacker School ist eine sehr reduzierte, was bedeutet, dass die Funktionalitäten die sie bietet alle
                                bereits von dem CMS zur Verfügung werden. Aus diesem Grund kann die Hacker School direkt mit den Standard-Tests
                                gründlich getestet werden.
                            </p>
                            <p>
                                Um sicherzustellen, dass die Inhalte der Webseite richtig angezeigt werden, haben wir zusätzlich auf jeder Webseite
                                einen prägnanten Textabschnitt gesucht, auf dessen Existenz wir prüfen.
                            </p>
                            <h3 style="margin-top: 20px; margin-bottom: 20px;">Verwendete Checks</h3>
                            <ul>
                                <li>Text Present</li>
                            </ul>
                            <div style="clear: both"></div>
                        </div>
                    </div>
                    <div style="margin-top: 50px">
                        <div class="time">30 Minuten</div>
                        <div class="circle"></div>
                        <div class="element">
                            <h2>Alarmierungen</h2>
                            <p>
                                Die Hacker School-Website wird von der <a href="http://www.ministrygroup.de/">Ministry Group</a> gepflegt. Gefundene
                                Anomalien werden direkt per E-Mail an die Entwickler der Seite gesendet.
                            </p>
                        </div>
                    </div>
                    <div style="margin-top: 50px">
                        <div class="time">35 Minuten</div>
                        <div class="circle"></div>
                        <div class="element" style="height: 5px">&nbsp;</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
