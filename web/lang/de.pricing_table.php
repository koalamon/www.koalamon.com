<?php

global $prices;
global $pricesMonthly;
global $checks;

?>

<div class="mobile">
    <table style="margin: 20px; margin-top: 50px">
        <tr style="border-bottom: 20px solid transparent">
            <td style="vertical-align: top; border-right: 20px solid transparent">
                <strong>Web Project</strong>
            </td>
            <td style="border-right: 40px solid transparent">
                1 system <br>
                50 components<br>
                Ping interval 5 minutes<br>
                Unlimited alerts<br>
                Live Support
            </td>
            <td style="vertical-align: top;">
                69 EUR (89* EUR)
            </td>
        </tr>
        <tr style="border-bottom: 20px solid transparent">
            <td style="vertical-align: top; border-right: 20px solid transparent">
                <strong>Web Company</strong>
            </td>
            <td style="border-right: 40px solid transparent">
                15 systems <br>
                50 components<br>
                Ping interval 5 minutes<br>
                Unlimited alerts<br>
                Live Support
            </td>
            <td style="vertical-align: top;">
                349 EUR (389* EUR)
            </td>
        </tr>
        <tr style="border-bottom: 20px solid transparent">
            <td style="vertical-align: top; border-right: 20px solid transparent">
                <strong>Web Corp</strong>
            </td>
            <td style="border-right: 40px solid transparent">
                Unlimited systems <br>
                Unlimited components<br>
                Ping interval 5 minutes<br>
                Unlimited alerts<br>
                Live Support
            </td>
            <td style="vertical-align: top;">
                499 EUR (549* EUR)
            </td>
        </tr>
    </table>
</div>

<style>
    #pricing {
        margin-top: 150px;
    }

    #pricing tr td h2 {
        margin-bottom: 50px;
        font-weight: 400;
        font-size: 20px;
    }

    #pricing tr td p {
        color: #7f8c8d;
        font-weight: normal;
        font-size: 13px;
        font-size: 0.8125rem;
        line-height: 24px;
        line-height: 1.5rem;
        margin-top: 15px;
    }

    #pricing tr td:first-child {
        background-color: #fafbfc;
        text-align: left;
    }

    #pricing tr td:nth-child(2) {
        border-right: none;
    }

    #pricing tr td:nth-child(3) {
        border-left: 2px solid #27ae60;
        border-right: 2px solid #27ae60;
    }

    #pricing tr:last-child td:nth-child(3) {
        border-bottom: 2px solid #27ae60;
    }

    #pricing tr td {
        border: 1px solid #d5dadf;
        padding: 20px;
        text-align: center;
    }

    #pricing tr:first-child td {
        border: none;
        background-color: transparent;
    }

    #pricing tr:first-child .popular {
        background-color: #27ae60;
        color: white;
        padding: 10px;
        font-size: 12px;
        border-left: 2px solid #27ae60;
        border-right: 2px solid #27ae60;
    }

    #pricing .fa-check-circle {
        color: #27ae60;
        font-size: 22px;
    }

    #pricing .register-plan {
        background-color: #27ae60;
        padding: 5px;
        color: white;
        margin-top: 60px;
        margin-bottom: 20px;
        border-radius: 5px;
        font-size: 12px;
    }

    #pricing .tooltip-inner {
        background-color: #fafbfc;
        border: 1px solid #d5dadf;
        color: #555;
    }
</style>

<div class="content no-mobile" style="width: 1200px; text-align: center">
    <table id="pricing">
        <tr>
            <td style="width: 150px"></td>
            <td></td>
            <td class="popular">am beliebtesten</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <!--td style="width: 140px">
                <h2>Website</h2>
                <div class="price">
                    <span style="position: relative; top: -17px; left: -5px; font-size: 14px">EUR</span>
                    <span style="font-size: 40px; font-weight: 600">39</span>
                    <span style="color: #99a0a5;">/ Monat</span>
                    <a href="https://monitor.leankoala.com/secure_area/register/">
                        <div class="register-plan"><?php __('global.trial.start'); ?></div>
                    </a>
                </div>
            </td-->
            <td style="width: 140px">
                <h2>Web Project</h2>
                <div class="price">
                    <span style="position: relative; top: -17px; left: -5px; font-size: 14px">EUR</span>
                    <span style="font-size: 40px; font-weight: 600">69</span>
                    <span style="color: #99a0a5;">/ Monat</span>
                    <span style="color: #99a0a5; display: block; font-size: 10px">bei 12 Monaten Laufzeit</span>
                    <a href="https://monitor.leankoala.com/secure_area/register/">
                        <div class="register-plan"><?php __('global.trial.start'); ?></div>
                    </a>
                </div>
            </td>
            <td style="width: 140px">
                <h2>Web Company</h2>
                <div class="price">
                    <span style="position: relative; top: -17px; left: -5px; font-size: 14px">EUR</span>
                    <span style="font-size: 40px; font-weight: 600"><?php echo $prices['webcompany']; ?></span>
                    <span style="color: #99a0a5;">/ Monat</span>
                    <span style="color: #99a0a5; display: block; font-size: 10px">bei 12 Monaten Laufzeit</span>
                    <a href="https://monitor.leankoala.com/secure_area/register/">
                        <div class="register-plan"><?php __('global.trial.start'); ?></div>
                    </a>
                </div>
            </td>
            <td style="width: 140px">
                <h2>Web Group</h2>
                <div class="price">
                    <span style="position: relative; top: -17px; left: -5px; font-size: 14px">EUR</span>
                    <span style="font-size: 40px; font-weight: 600"><?php echo $prices['webgroup']; ?></span>
                    <span style="color: #99a0a5;">/ Monat</span>
                    <span style="color: #99a0a5; display: block; font-size: 10px">bei 12 Monaten Laufzeit</span>
                    <a href="https://monitor.leankoala.com/secure_area/register/">
                        <div class="register-plan"><?php __('global.trial.start'); ?></div>
                    </a>
                </div>
            </td>
        </tr>
        <!--tr>
            <td style="text-align: left">
                Preis (monatlich kündbar)
            </td>
            <td><?php echo $pricesMonthly['large']; ?> EUR / Monat</td>
            <td><?php echo $pricesMonthly['webcompany']; ?> EUR / Monat</td>
            <td><?php echo $pricesMonthly['webgroup']; ?> EUR / Monat</i>
            </td>
        </tr-->
        <tr>
            <td style="text-align: left">
                Systeme
                <p>Ein System wird durch eine Hauptdomain beschrieben. Komponenten müssen dieser oder einer Subdomain angehören.</p>
            </td>
            <td>1</td>
            <td>unbegrenzt <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom"
                              title="Das 'Web Company'-Paket beeinhaltet einen dedizierten Server, der bis zu acht parallele Checks ausführen kann." style="color: #7f8c8d"></i></td>
            <td>
                unbegrenzt <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom"
                              title="Das 'Web Company'-Paket beeinhaltet einen dedizierten Server, der bis zu acht parallele Checks ausführen kann." style="color: #7f8c8d"></i>
            </td>
        </tr>
        <tr>
            <td>
                Komponenten
                <p>Komponenten werden durch URLs repräsentiert und können zum Beispiel HTML-Seiten, XML- oder JSON-Dokumente sein.</p>
            </td>
            <td>50</td>
            <td>50</td>
            <td>
                unbegrenzt <i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom"
                              title="Das 'Web Company'-Paket beeinhaltet einen dedizierten Server. Je nach Antwortzeit der Komponenten entspricht dies bis zu 500 Komponenten."
                              style="color: #7f8c8d"></i>
            </td>
        </tr>
        <tr>
            <td>
                Werkzeuge
                <p>Leankoala bietet eine Vielzahl von Werkzeugen, die zum Überprüfen der Systeme genutzt werden können.</p>
            </td>
            <td colspan="3"><?php echo count($checks['de']); ?></td>
        </tr>
        <tr>
            <td>
                Integrationen
                <p>Leankoala bietet die Möglichkeit ein gemeinsames Dashboard für alle in einem Projekt eingesetzten Testwerkzeuge zu erstellen. Mögliche Integrationen sind Jenkins, Pingdom oder
                    NewRelic.</p>
            </td>
            <td></td>
            <td></td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></td>
        </tr>
        <tr>
            <td>
                Checks
                <p>
                    Egal, ob du Leankoala dazu nutzt deine wichtigsten Komponenten anzupingen oder ob du detaillierte
                    Überprüfungen einrichtest, alle Checks sind inklusive. Egal wie viele es sind.
                </p>
            </td>
            <td colspan="3">unbegrenzt</td>
        </tr>
        <tr>
            <td>
                Nutzer
                <p>Ob Du es allein nutzt oder mit einem ganzen Team. Füge jeden hinzu der informiert werden soll.</p>
            </td>
            <td colspan="3">unbegrenzt</td>
        </tr>
        <tr>
            <td>
                Check-Interval
                <p>Die Leankoala-Checks werden zyklisch ausgeführt, ohne dass Kunden diese explizit starten müssen.</p>
            </td>
            <td colspan="3" style="line-height: 30px">
                KoalaPing: alle 5 Minuten<br>
                sonstige Checks: stündlich
            </td>
        </tr>
        <tr>
            <td>
                Händischer Start einzelner Checks
                <p>Einzelne Überprüfungen können jederzeit händisch gestartet werden.</p>
            </td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></td>
        </tr>
        <tr>
            <td>
                Händischer Start aller Checks
                <p>Alle Überprüfungen eines Systems können jederzeit gleichzeitig händisch gestartet werden.</p>
            </td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td>
                Automatischer Start aller Checks
                <p>Der Start der Tests kann direkt im Deployment- und "Continuous Integration"-Prozess verankert werden.</p>
            </td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td>
                Feste IP-Adresse
                <p>Feste IP-Adressen können dazu genutzt werden Zugriff auf interne Systeme zu erteilen.</p>
            </td>
            <td></td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i>
            </td>
        </tr>
        <tr>
            <td>
                Community Support
                <p>Zugriff auf die Leankoala-Slack-Gruppe, in der Erfahrungen ausgetauscht und Fragen gestellt werden.</p>
            </td>
            <td colspan="3"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
            </td>
        </tr>
        <tr>
            <td>
                Live Support
                <p>Zwischen 9 und 17 Uhr bieten wir per Livechat Support an, der direkt über die Leankoala-Oberfläche angesprochen werden kann.</p>
            </td>
            <td></td>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i>
            <td><i class="fa fa-check-circle" aria-hidden="true"></i>
            </td>
        </tr>
    </table>
</div>

<!--div class="content no-mobile" style="width: 1220px; text-align: center">
    <ul class="price-models">
        <li>
            <h3>&nbsp</h3>
            <div class="feature">Anzahl Komponenten</div>
            <div class="feature">-</div>
            <div class="feature">Ping interval <strong>1 day</strong></div>
            <div class="feature">Unlimited alerts</div>
            <div class="feature">Community Support</div>
            <div class="price">0 EUR</div>
            <div class="info">per month</div>
            <div class="for-whom"></div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div class="register-plan">start free 14 day period</div>
            </a>
        </li>
        <li>
            <h3>Web Page</h3>
            <div class="feature"><strong>20</strong></div>
            <div class="feature">-</div>
            <div class="feature">Ping-Interval</div>
            <div class="feature">Stündliche</div>
            <div class="feature">Manuelles Starten der Tests</div>
            <div class="feature">-</div>
            <div class="feature">Keine Alarmierungsgrenzen</div>
            <div class="feature">Live-Support</div>
            <div class="price">39 EUR</div>
            <div class="info">pro Monat + 19% MwSt.</div>
            <div class="for-whom">Für kleine Webseiten wie z.B. Wordpress-Blogs.</div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div class="register-plan"><?php __('global.trial.start'); ?></div>
            </a>
        </li>
        <li class="active">
            <div class="recommended">am beliebtesten</div>
            <div></div>
            <h3>Web Project</h3>
            <div class="feature"><strong>50</strong> Komponenten</div>
            <div class="feature">-</div>
            <div class="feature">Ping-Interval <strong>5 Minuten</strong></div>
            <div class="feature">Stündliche Überprüfungen</div>
            <div class="feature">Manuelles Starten der Tests</div>
            <div class="feature">Automatisches Starten der Tests</div>
            <div class="feature">Keine Alarmierungsgrenzen</div>
            <div class="feature">Live Support</div>
            <div class="price">69 EUR</div>
            <div class="info">pro Monat + 19% MwSt.</div>
            <div class="for-whom">Für mittelgroße Webseite, wie Firmenauftritte.</div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div class="register-plan"><?php __('global.trial.start'); ?></div>
            </a>
        </li>
        <li>
            <h3>Web Company</h3>
            <div class="feature"><strong>Unbegrenzte</strong> Komponenten</div>
            <div class="feature">bis zu 8 gleichzeitige Tests</div>
            <div class="feature">Ping-Interval <strong>5 Minuten</strong></div>
            <div class="feature">Stündliche Überprüfungen</div>
            <div class="feature">Manuelles Starten der Tests</div>
            <div class="feature">Automatisches Starten der Tests</div>
            <div class="feature">Keine Alarmierungsgrenzen</div>
            <div class="feature">Live Support</div>
            <div class="price">299 EUR</div>
            <div class="info">pro Monat + 19% MwSt.</div>
            <div class="for-whom">Für große Webapplikationen mit mit Dev-, Stage- und Live-Umgebungen und vielen Funktionalitäten.</div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div class="register-plan"><?php __('global.trial.start'); ?></div>
            </a>
        </li>
    </ul>
</div>


<div class="content no-mobile" style="width: 820px; text-align: center">
    <ul class="price-models">
        <!--li>
            <h3>Free</h3>
            <div class="feature"><strong>5</strong> components</div>
            <div class="feature">Ping interval <strong>1 day</strong></div>
            <div class="feature">Unlimited alerts</div>
            <div class="feature">Community Support</div>
            <div class="price">0 EUR</div>
            <div class="info">per month</div>
            <div class="for-whom"></div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div class="register-plan">start free 14 day period</div>
            </a>
        </li>
        <li>
            <h3>Web Page</h3>
            <div class="feature"><strong>20</strong> Komponenten</div>
            <div class="feature">-</div>
            <div class="feature">Ping-Interval <strong>5 Minuten</strong></div>
            <div class="feature">Stündliche Überprüfungen</div>
            <div class="feature">Manuelles Starten der Tests</div>
            <div class="feature">-</div>
            <div class="feature">Keine Alarmierungsgrenzen</div>
            <div class="feature">Live-Support</div>
            <div class="price">39 EUR</div>
            <div class="info">pro Monat + 19% MwSt.</div>
            <div class="for-whom">Für kleine Webseiten wie z.B. Wordpress-Blogs.</div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div class="register-plan"><?php __('global.trial.start'); ?></div>
            </a>
        </li>
        <li class="active">
            <div class="recommended">am beliebtesten</div>
            <div></div>
            <h3>Web Project</h3>
            <div class="feature"><strong>50</strong> Komponenten</div>
            <div class="feature">-</div>
            <div class="feature">Ping-Interval <strong>5 Minuten</strong></div>
            <div class="feature">Stündliche Überprüfungen</div>
            <div class="feature">Manuelles Starten der Tests</div>
            <div class="feature">Automatisches Starten der Tests</div>
            <div class="feature">Keine Alarmierungsgrenzen</div>
            <div class="feature">Live Support</div>
            <div class="price">69 EUR</div>
            <div class="info">pro Monat + 19% MwSt.</div>
            <div class="for-whom">Für mittelgroße Webseite, wie Firmenauftritte.</div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div class="register-plan"><?php __('global.trial.start'); ?></div>
            </a>
        </li>
        <li>
            <h3>Web Company</h3>
            <div class="feature"><strong>Unbegrenzte</strong> Komponenten</div>
            <div class="feature">bis zu 8 gleichzeitige Tests</div>
            <div class="feature">Ping-Interval <strong>5 Minuten</strong></div>
            <div class="feature">Stündliche Überprüfungen</div>
            <div class="feature">Manuelles Starten der Tests</div>
            <div class="feature">Automatisches Starten der Tests</div>
            <div class="feature">Keine Alarmierungsgrenzen</div>
            <div class="feature">Live Support</div>
            <div class="price">299 EUR</div>
            <div class="info">pro Monat + 19% MwSt.</div>
            <div class="for-whom">Für große Webapplikationen mit mit Dev-, Stage- und Live-Umgebungen und vielen Funktionalitäten.</div>
            <a href="https://monitor.leankoala.com/secure_area/register/">
                <div class="register-plan"><?php __('global.trial.start'); ?></div>
            </a>
        </li-->
</ul>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
