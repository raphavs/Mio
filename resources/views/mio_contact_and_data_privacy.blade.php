@extends('layouts.mio_welcome_app')

@section('content')
    <div class="container-fluid">
        <!-- Contact -->
        <section class="my-padding-welcome-section">
            <!-- Headline -->
            <h1 class="display-5">Contact</h1>

            <div class="row justify-content-center">
                <hr class="col-8">
            </div>

            <!-- Two Column Section Doors-->
            <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <div class="row text-center">
                    <div class="col-lg-6 my-about-padding">
                        <h4 class="my-contact-header-big">Address</h4>
                        <br>
                        <p class="my-contact-header-little"><b>Mio (University Project)</b></p>
                        <p>- Manage your doors smart -</p>
                        <p>Hochschule Konstanz</p>
                        <p>Alfred-Wachtel-Str. 8</p>
                        <p>78462 Konstanz</p>
                    </div>
                    <div class="col-lg-6 my-about-padding">
                        <h4 class="my-contact-header-big">Imprint</h4>
                        <br>
                        <p class="my-contact-header-little"><b>Mio (University Project)</b></p>
                        <p>- Manage your doors smart -</p>
                        <p>We, the developers of Mio, are studying Business Computer Science at the HTWG in
                            Constance.</p>
                        <p>As part of the Web Technologies module, we developed a web application that allows you to
                            manage your doors smart.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Datenschutzerklärung -->
        <section id="mio-data-privacy" class="my-terms-of-use-style">
            <!-- Headline -->
            <h1 class="display-5">Datenschutzerklärung</h1>

            <div class="row justify-content-center">
                <hr class="col-8">
            </div>

            <div class="my-about-padding row justify-content-center">
                <div class="col-sm-10">
                    <!-- <p><strong><big>Datenschutzerklärung</big></strong></p> -->
                    <p><strong>Allgemeiner Hinweis und Pflichtinformationen</strong></p>
                    <p><strong>Benennung der verantwortlichen Stelle</strong></p>
                    <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
                    <p><span id="s3-t-firma">Mio (University Project)</span><br><span id="s3-t-ansprechpartner">Lea Scholtes | Raphael Vosseler</span><br><span
                                id="s3-t-strasse">Alfred-Wachtel-Straße 8</span><br><span id="s3-t-plz">78462</span>
                        <span id="s3-t-ort">Konstanz</span></p>
                    <p></p>
                    <p>Die verantwortliche Stelle entscheidet allein oder gemeinsam mit anderen über die Zwecke und
                        Mittel der Verarbeitung von personenbezogenen Daten (z.B. Namen, Kontaktdaten o. Ä.).</p>

                    <p><strong>Widerruf Ihrer Einwilligung zur Datenverarbeitung</strong></p>
                    <p>Nur mit Ihrer ausdrücklichen Einwilligung sind einige Vorgänge der Datenverarbeitung möglich.
                        Ein Widerruf Ihrer bereits erteilten Einwilligung ist jederzeit möglich. Für den Widerruf
                        genügt eine formlose Mitteilung per E-Mail. Die Rechtmäßigkeit der bis zum Widerruf
                        erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.</p>

                    <p><strong>Recht auf Beschwerde bei der zuständigen Aufsichtsbehörde</strong></p>
                    <p>Als Betroffener steht Ihnen im Falle eines datenschutzrechtlichen Verstoßes ein
                        Beschwerderecht bei der zuständigen Aufsichtsbehörde zu. Zuständige Aufsichtsbehörde
                        bezüglich datenschutzrechtlicher Fragen ist der Landesdatenschutzbeauftragte des
                        Bundeslandes, in dem sich der Sitz unseres Unternehmens befindet. Der folgende Link stellt
                        eine Liste der Datenschutzbeauftragten sowie deren Kontaktdaten bereit: <a
                                href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html"
                                target="_blank">https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html</a>.
                    </p>

                    <p><strong>Recht auf Datenübertragbarkeit</strong></p>
                    <p>Ihnen steht das Recht zu, Daten, die wir auf Grundlage Ihrer Einwilligung oder in Erfüllung
                        eines Vertrags automatisiert verarbeiten, an sich oder an Dritte aushändigen zu lassen. Die
                        Bereitstellung erfolgt in einem maschinenlesbaren Format. Sofern Sie die direkte Übertragung
                        der Daten an einen anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch
                        machbar ist.</p>

                    <p><strong>Recht auf Auskunft, Berichtigung, Sperrung, Löschung</strong></p>
                    <p>Sie haben jederzeit im Rahmen der geltenden gesetzlichen Bestimmungen das Recht auf
                        unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten, Herkunft der Daten,
                        deren Empfänger und den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung,
                        Sperrung oder Löschung dieser Daten. Diesbezüglich und auch zu weiteren Fragen zum Thema
                        personenbezogene Daten können Sie sich jederzeit über die im Impressum aufgeführten
                        Kontaktmöglichkeiten an uns wenden.</p>

                    <p><strong>SSL- bzw. TLS-Verschlüsselung</strong></p>
                    <p>Aus Sicherheitsgründen und zum Schutz der Übertragung vertraulicher Inhalte, die Sie an uns
                        als Seitenbetreiber senden, nutzt unsere Website eine SSL-bzw. TLS-Verschlüsselung. Damit
                        sind Daten, die Sie über diese Website übermitteln, für Dritte nicht mitlesbar. Sie erkennen
                        eine verschlüsselte Verbindung an der „https://“ Adresszeile Ihres Browsers und am
                        Schloss-Symbol in der Browserzeile.</p>

                    <p><strong>Server-Log-Dateien</strong></p>
                    <p>In Server-Log-Dateien erhebt und speichert der Provider der Website automatisch
                        Informationen, die Ihr Browser automatisch an uns übermittelt. Dies sind:</p>
                    <ul class="my-terms-of-use-list-style">
                        <li>Besuchte Seite auf unserer Domain</li>
                        <li>Datum und Uhrzeit der Serveranfrage</li>
                        <li>Browsertyp und Browserversion</li>
                        <li>Verwendetes Betriebssystem</li>
                        <li>Referrer URL</li>
                        <li>Hostname des zugreifenden Rechners</li>
                        <li>IP-Adresse</li>
                    </ul>
                    <p>Es findet keine Zusammenführung dieser Daten mit anderen Datenquellen statt. Grundlage der
                        Datenverarbeitung bildet Art. 6 Abs. 1 lit. b DSGVO, der die Verarbeitung von Daten zur
                        Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen gestattet.</p>

                    <p><strong>Registrierung auf dieser Website</strong></p>
                    <p>Zur Nutzung bestimmter Funktionen können Sie sich auf unserer Website registrieren. Die
                        übermittelten Daten dienen ausschließlich zum Zwecke der Nutzung des jeweiligen Angebotes
                        oder Dienstes. Bei der Registrierung abgefragte Pflichtangaben sind vollständig anzugeben.
                        Andernfalls werden wir die Registrierung ablehnen.</p>
                    <p>Im Falle wichtiger Änderungen, etwa aus technischen Gründen, informieren wir Sie per E-Mail.
                        Die E-Mail wird an die Adresse versendet, die bei der Registrierung angegeben wurde.</p>
                    <p>Die Verarbeitung der bei der Registrierung eingegebenen Daten erfolgt auf Grundlage Ihrer
                        Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Ein Widerruf Ihrer bereits erteilten Einwilligung
                        ist jederzeit möglich. Für den Widerruf genügt eine formlose Mitteilung per E-Mail. Die
                        Rechtmäßigkeit der bereits erfolgten Datenverarbeitung bleibt vom Widerruf unberührt.</p>
                    <p>Wir speichern die bei der Registrierung erfassten Daten während des Zeitraums, den Sie auf
                        unserer Website registriert sind. Ihren Daten werden gelöscht, sollten Sie Ihre
                        Registrierung aufheben. Gesetzliche Aufbewahrungsfristen bleiben unberührt.</p>

                    <p><strong>Kontaktformular</strong></p>
                    <p>Per Kontaktformular übermittelte Daten werden einschließlich Ihrer Kontaktdaten gespeichert,
                        um Ihre Anfrage bearbeiten zu können oder um für Anschlussfragen bereitzustehen. Eine
                        Weitergabe dieser Daten findet ohne Ihre Einwilligung nicht statt.</p>
                    <p>Die Verarbeitung der in das Kontaktformular eingegebenen Daten erfolgt ausschließlich auf
                        Grundlage Ihrer Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Ein Widerruf Ihrer bereits
                        erteilten Einwilligung ist jederzeit möglich. Für den Widerruf genügt eine formlose
                        Mitteilung per E-Mail. Die Rechtmäßigkeit der bis zum Widerruf erfolgten
                        Datenverarbeitungsvorgänge bleibt vom Widerruf unberührt.</p>
                    <p>Über das Kontaktformular übermittelte Daten verbleiben bei uns, bis Sie uns zur Löschung
                        auffordern, Ihre Einwilligung zur Speicherung widerrufen oder keine Notwendigkeit der
                        Datenspeicherung mehr besteht. Zwingende gesetzliche Bestimmungen - insbesondere
                        Aufbewahrungsfristen - bleiben unberührt.</p>

                    <p><strong>Cookies</strong></p>
                    <p>Unsere Website verwendet Cookies. Das sind kleine Textdateien, die Ihr Webbrowser auf Ihrem
                        Endgerät speichert. Cookies helfen uns dabei, unser Angebot nutzerfreundlicher, effektiver
                        und sicherer zu machen. </p>
                    <p>Einige Cookies sind “Session-Cookies.” Solche Cookies werden nach Ende Ihrer Browser-Sitzung
                        von selbst gelöscht. Hingegen bleiben andere Cookies auf Ihrem Endgerät bestehen, bis Sie
                        diese selbst löschen. Solche Cookies helfen uns, Sie bei Rückkehr auf
                        unserer Website wiederzuerkennen.</p>
                    <p>Mit einem modernen Webbrowser können Sie das Setzen von Cookies überwachen, einschränken oder
                        unterbinden. Viele Webbrowser lassen sich so konfigurieren, dass Cookies mit dem Schließen
                        des Programms von selbst gelöscht werden. Die Deaktivierung von Cookies
                        kann eine eingeschränkte Funktionalität unserer Website zur Folge haben.</p>
                    <p>Das Setzen von Cookies, die zur Ausübung elektronischer Kommunikationsvorgänge oder der
                        Bereitstellung bestimmter, von Ihnen erwünschter Funktionen (z.B. Warenkorb) notwendig sind,
                        erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Als Betreiber dieser
                        Website haben wir ein berechtigtes Interesse an der Speicherung von Cookies zur technisch
                        fehlerfreien und reibungslosen Bereitstellung unserer Dienste. Sofern die Setzung anderer
                        Cookies (z.B. für Analyse-Funktionen) erfolgt, werden diese in dieser
                        Datenschutzerklärung separat behandelt.</p>
                    <p>
                        <small>Quelle: Datenschutz-Konfigurator von <a
                                    href="http://www.mein-datenschutzbeauftragter.de" target="_blank">mein-datenschutzbeauftragter.de</a>
                        </small>
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection