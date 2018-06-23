#Mio - Manage your doors smart.

##1. Beschreibung der Funktionalität

###*Use Cases*

####Gast:
Bei Mio können Sie Ihre Tür smart verwalten. Als Gast ist es Ihnen möglich, sich 
über unser Unternehmen auf den Willkommensseiten zu informieren.
Auf der Begrüßungsseite sehen Sie erste Informationen sowie unsere Kundengruppen.
Unsere Seite ist für Kunden, Benutzer und Händler ausgelegt, wobei die
Händler-Funktionen noch nicht implementiert wurden. Der Schwerpunkt liegt
somit auf Kunden und Benutzern. <br>
Die Feature Seite gibt einen Einblick in die Funktionen, die man als 
Kunde oder Benutzer hat und wie es zu verwenden ist. <br>
Auf der Informationsseite wird die Einleitung von der Begrüßungsseite weitergeführt.
Hier ist textlich zusammengefasst, was Mio bietet. <br>
Auf der Kontaktseite befindet sich die Adresse der Firma und ein Impressum.
Hierbei wurde darauf geachtet, das Projekt als Hochschulprojekt auszuzeichnen.
Auch die Datenschutzerklärung lässt sich hier finden.<br>

####Kunde:
Nach der Anmeldung wird der Kunde auf eine Seite geleitet, auf der er
nach Einrichten der Hardware an der Tür, diese hinzufügen kann. 
Diese erscheint ab jetzt immer auf der Startseite. Wählt man diese aus,
kommt man zu einer Übersicht, auf der man als Kunde 
neue oder bereits existierende Benutzer hinzufügen kann, ihre Rechte verwalten und
das Protokoll einsehen. Um Rechte zu verwalten, muss ein Benutzer ausgewählt
werden. Dann kann man entscheiden, ob er Zutrittsrechte oder das Protokollrecht haben darf.
Wird ein neuer Benutzer hinzugefügt, bekommt er alle Rechte!
Sobald das Zutrittsrecht gestattet wird, kann man wählen, an welchen Tagen und
zu welcher Uhrzeit der Benutzer Zutritt erlangen darf.
Öffnet der Kunde die Tür, so wird diese Transaktion im Protokoll abgebildet.
Der Kunde sieht alle Transaktionen seiner Benutzer und ihm selbst im Protokoll.

####Benutzer:
Als Benutzer bekommt man auf der Startseite nach dem Login alle Türen 
angezeigt, bei denen man als Benutzer gemeldet ist. Die 
Möglichkeit Türen hinzuzufügen, kann einen Benutzer ebenso zu einem Kunden machen.
Wählt der Benutzer eine Tür, gelangt er in dasselbe Menü wie der Kunde.
Allerdings ist der Button 'Add User' sowie 'Manage Rights' für Benutzer blockiert.
Die Ansicht des Protokolls hängt davon ab, was der Kunde dem Benutzer für Rechte
gegeben hat. Hat er das Protokollrecht, so sieht er alle Einträge von Benutzern und dem Kunde.
Hat er das Recht nicht, sieht er nur seine eigenen Transaktionen.
Hat der Benutzer das Recht die Türe zu öffnen, so läuft das ab wie beim Kunden.
Hat er das Recht nicht oder zu bestimmten Zeiten nicht, dann wird auch dieser 
Button für den Benutzer blockiert. So wird sichergestellt, dass keiner 
unerlaubt Zugriff erlangen kann.

####Admin:
Als Admin ist es möglich eine Übersicht über alle Türen zu erlangen, 
sowie über alle Benutzer und Kunden. Es ist möglich diese zu löschen.
Außerdem ist es möglich Admin, Benutzer und Kunde zugleich zu sein.

###*Wow-Faktor der Applikation*
Der Wow-Faktor unserer Applikation besteht darin, Buttons bereitzustellen
oder sie zu blockieren, auf Grund der Rechte des Benutzers an der Tür.
Außerdem wird bei der Rechtewahl eines Benutzers, dessen Zeiten und Tage
geladen und angezeigt. Es ist nicht möglich den Startzeitpunkt vor den Endzeitpunkt
zu setzen!! Damit wird eine Fehlerquelle umgangen.
Ein weiterer Wow-Faktor der Applikation ist die Möglichkeit, mehrere Rollen anzunehmen 
mit nur einem Konto. Es wird viel mit Buttons gearbeitet, sodass Texteingabe umgangen
wird, die eine Fehlerquelle darstellen kann.

###*Visual Design*
Mit einem Bilder Karussell und der dunklen Farbwahl von schwarz und gold
ist die Aufmerksamkeit des Kunden direkt geweckt. Durch Symbole wie für die 
Benutzergruppen, wirkt die Seite aufregender. Wenig Text und viele Bilder
 machen die Seite lebendiger und übersichtlicher. Die Kunden werden 
 nicht mit Informationen zugeschüttet, sondern können sich langsam herantasten.
 Große Formulare und Buttons ermöglichen es auch älteren Leuten oder
 schlechten Augen alles zu erkennen.
 Das Wichtige ist farblich hevorgehoben, wie z.B. der Open Button in gelb.
 So weiß auch jeder, der technisch keine Kenntnisse besitzt, worauf es ankommt.
 
##2. Technische Implementierung

###*Arbeitsauftrag 1, 29.03.2018: Design & CSS*
Beim Erstellen der Begrüßungsseite haben wir uns zunächst überlegt 
wie grob der Aufbau der Seite aussehehen soll. Anschließend implementierten 
wir entsprechend die "index.html"-Datei.
Zusätzlich erstellten wir eine CSS-Datei "mio_styles.css", um unserer 
Begrüßungsseite einen eigenen Stil zu verleihen. Dabei hielten wir uns möglichst nahe 
an unseren Vorlagen aus dem Moodboard und dem Style Tile.

###*Arbeitsauftrag 1, 05.04.2018: Layout & Design*
Für diesen Arbeitsauftrag beschäftigten wir uns zunächst intensiv mit Bootstrap.
Anschließend bauten wir sehr viele Elemente von Bootstrap in unsere Begrüßungsseite 
ein, um für diese von Anfang an Responsive Design zu implementieren. Da wir jedoch 
einen eigenen Stil für unsere Webapplikation haben wollten, überschrieben wir viele 
von Bootstrap bereitgestellte CSS-Klassen, um ein individuelles Mio-Design zu 
implementieren.

###*Arbeitsauftrag 1, 12.04.2018: Laravel - PHP*
Wie in der Übung gemeinsam durchgeführt, erstellte ich später auf meinem eigenen Rechner
ein Laravel Projekt für unsere Webapplikation. Anschließend integrierten wir 
unsere "index.html"-Datei und unsere CSS-Datei "mio_styles.css" in das Projekt. 
Für unsere Begrüßungsseite erstellten wir ein Template "mio_welcome_app.blade.php" und
erweiterten es mit dem Blade "mio_welcome.blade.php".
Außerdem erstellten wir eine lokale MySQL-Datenbank und passten die ".env"-Datei 
entsprechend an. Ergänzend erzeugten wir mit dem Befehl "php artisan make:auth" die Views, 
Routen und den Controller für die von Laravel bereitgestellte Authentifizierung. 
Des Weiteren passten wir die Routen in der "web.php"-Datei und eine Methode im 
entsprechenden Controller an, um unsere Begrüßungsseite auf dem "localhost" aufrufen 
zu können. Zum Schluss checkte ich das angepasste Projekt in GIT ein, damit meine 
Partnerin Lea es auschecken konnte.

###*Arbeitsauftrag 1, 19.04.2018: Laravel - MVC*
Für diesen Arbeitsauftrag erstellten wir zunächst ein weiteres 
Template "mio_home_app.blade.php" sowie weitere Blades, um den Such-Prozess implementieren 
zu können. Nachdem das Frontend dafür entwickelt war, erstellten wir in unserer Datenbank
eine Tabelle "Transactions" mit dem Befehl "php artisan make:migration". 
Zusätzlich erzeugten wir mit dem Befehl "php artisan make:model" ein entsprechendes
Model, um die Datenbank-Tabelle gemäß dem MVC-Ansatz auf eine Klasse abzubilden.
