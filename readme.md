#Mio - Manage your doors smart.

##1. Beschreibung der Funktionalität

###*Use Cases*

####Gast
######Begrüßungsseite
Bei Mio können Sie Ihre Tür smart verwalten. Als Gast ist es Ihnen möglich, sich 
über unser Unternehmen auf den Willkommensseiten zu informieren.
Auf der Begrüßungsseite sehen Sie erste Informationen sowie unsere Kundengruppen.
Unsere Seite ist für Kunden, Benutzer und Händler ausgelegt, wobei die
Händler-Funktionen noch nicht implementiert wurden. Der Schwerpunkt liegt
somit auf Kunden und Benutzern.
######Feature Seite
Die Feature Seite gibt einen Einblick in die Funktionen, die man als 
Kunde oder Benutzer hat und wie man seinen Account verwendet. 
######Informationsseite
Auf der Informationsseite wird die Einleitung von der Begrüßungsseite weitergeführt.
Hier ist textlich zusammengefasst, was Mio bietet.
######Kontaktseite
Auf der Kontaktseite befindet sich die Adresse der Firma und ein Impressum.
Hierbei wurde darauf geachtet, das Projekt als Hochschulprojekt auszuzeichnen.
Auch die Datenschutzerklärung lässt sich hier finden.

####Kunde
######Türen hinzufügen
Nach der Anmeldung wird der Kunde auf eine Seite geleitet, auf der er
nach Einrichten der Hardware an der Tür, diese hinzufügen kann. 
Diese erscheint ab jetzt immer auf der Startseite. 
###### Benutzer hinzufügen, Rechte verwalten, Protokoll einsehen
Wählt man eine Tür aus,kommt man zu einer Übersicht, auf der man als Kunde 
neue oder bereits existierende Benutzer hinzufügen, ihre Rechte verwalten und
das Protokoll einsehen kann. 
######Rechte verwalten
Um Rechte zu verwalten, muss ein Benutzer ausgewählt
werden. Dann kann man entscheiden, ob er Zutrittsrechte oder das Protokollrecht haben darf.
Wird ein neuer Benutzer hinzugefügt, bekommt er alle Rechte!
Sobald das Zutrittsrecht gestattet wird, kann man wählen, an welchen Tagen und
zu welcher Uhrzeit der Benutzer Zutritt erlangen darf.

######Tür öffnen
Öffnet der Kunde die Tür über den Open Button, so wird diese Transaktion im Protokoll abgebildet.
######Protokolleinsicht
Der Kunde sieht alle Transaktionen seiner Benutzer und ihm selbst im Protokoll.

####Benutzer
######Türen hinzufügen und auswählen
Als Benutzer bekommt man auf der Startseite nach dem Login alle Türen 
angezeigt, bei denen man als Benutzer gemeldet ist. Die 
Möglichkeit Türen hinzuzufügen, kann einen Benutzer ebenso zu einem Kunden machen.
######Protokolleinsicht
Wählt der Benutzer eine Tür, gelangt er in dasselbe Menü wie der Kunde.
Allerdings ist der Button 'Add User' sowie 'Manage Rights' für Benutzer blockiert.
Die Ansicht des Protokolls hängt davon ab, was der Kunde dem Benutzer für Rechte
gegeben hat. Hat er das Protokollrecht, so sieht er alle Einträge von Benutzern und dem Kunde.
Hat er das Recht nicht, sieht er nur seine eigenen Transaktionen.
######Tür öffnen
Hat der Benutzer das Recht die Türe zu öffnen, so läuft das ab wie beim Kunden.
Hat er das Recht nicht oder zu bestimmten Zeiten nicht, dann wird auch dieser 
Button für den Benutzer blockiert. So wird sichergestellt, dass keiner 
unerlaubt Zugriff erlangen kann.

####Admin
######Übersicht über Kunden, Benutzer und Türen
Als Admin ist es möglich eine Übersicht über alle Türen zu erlangen, 
sowie über alle Benutzer und Kunden. Es ist möglich diese zu löschen.
Außerdem ist es möglich Admin, Benutzer und Kunde zugleich zu sein.

##Wow-Faktor der Applikation
Der Wow-Faktor unserer Applikation besteht darin, Buttons bereitzustellen
oder sie zu blockieren, auf Grund der Rechte des Benutzers an der Tür.
Außerdem wird bei der Rechtewahl eines Benutzers, dessen Zeiten und Tage
geladen und angezeigt. Es ist nicht möglich den Startzeitpunkt vor den Endzeitpunkt
zu setzen!! Damit wird eine Fehlerquelle umgangen.
Ein weiterer Wow-Faktor der Applikation ist die Möglichkeit, mehrere Rollen anzunehmen 
mit nur einem Konto. Es wird viel mit Buttons gearbeitet, sodass Texteingabe umgangen
wird, die eine Fehlerquelle darstellen kann.

##Visual Design
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

###*1. Arbeitsauftrag (29.03.2018): Design & CSS*
Beim Erstellen der Begrüßungsseite haben wir uns zunächst überlegt wie grob der Aufbau 
unserer Begrüßungsseite aussehehen soll. Anschließend implementierten wir entsprechend 
die "index.html"-Datei. Zusätzlich erstellten wir eine CSS-Datei "mio_styles.css", 
um unserer Begrüßungsseite einen eigenen Stil zu verleihen. Dabei hielten wir uns möglichst 
nahe an unseren Vorlagen aus dem Moodboard und dem Style Tile.

###*2. Arbeitsauftrag (05.04.2018): Layout & Design*
Für diesen Arbeitsauftrag beschäftigten wir uns zunächst intensiv mit Bootstrap.
Anschließend bauten wir sehr viele Elemente von Bootstrap in unsere Begrüßungsseite 
ein, um für diese von Beginn an Responsive Design zu implementieren. Da wir jedoch 
einen eigenen Stil für unsere Webapplikation haben wollten, überschrieben wir viele 
von Bootstrap bereitgestellte CSS-Klassen, um ein individuelles Mio-Design zu 
implementieren.

###*3. Arbeitsauftrag (12.04.2018): Laravel - PHP*
Wie in der Übung gemeinsam durchgeführt, erstellte ich später auf meinem eigenen Rechner
ein Laravel Projekt für unsere Webapplikation. Anschließend integrierten wir 
unsere "index.html"-Datei und unsere CSS-Datei "mio_styles.css" in das Projekt. 
Für unsere Begrüßungsseite erstellten wir ein Template "mio_welcome_app.blade.php" und
erweiterten es mit dem Blade "mio_welcome.blade.php".<br>
Außerdem erstellte jeder von uns auf seinem eigenen Rechner eine lokale MySQL-Datenbank 
und passte die ".env"-Datei entsprechend an. Ergänzend erzeugten wir mit dem 
Befehl "php artisan make:auth" die Views, Routen, den Controller, das Model "User.php" und 
die Tabelle "Users" in unserer Datenbank für die von Laravel bereitgestellte 
Authentifizierung.<br> 
Zudem implementierten wir weitere Blades, die alle das Template "mio_welcome_app.blade.php" 
erweitern, für unseren "Begrüßungsbereich". Für diese Blades implementierten wir einen 
zusätzlichen Controller "WelcomeController.php", der Funktionen enthält, die die eben 
erwähnten Blades returnt. Ergänzend passten wir die Routen in der "web.php"-Datei an, 
um die eben beschriebenen Funktionen im "WelcomeController" aufrufen zu können.<br>
Zum Schluss checkte ich das angepasste Projekt in GIT ein, damit meine 
Partnerin Lea es auschecken konnte.

###*4. Arbeitsauftrag (19.04.2018) & 5. Arbeitsauftrag (26.04.2018): Laravel - MVC*
Wir fassen diese beiden Arbeitsaufträge zusammen, da wir diese auch zusammen umgesetzt haben.
Uns war es wichtig unsere Webapplikation von Beginn an sinnvoll zu strukturieren. Aus diesem
Grund beschäftigten wir uns schon vorzeitig mit dem MVC-Ansatz sowie mit Migrations.<br>
Zu Beginn dieses Arbeitsauftrages erstellten wir zunächst ein weiteres 
Template "mio_home_app.blade.php" sowie weitere Blades, um den Such-Geschäftsprozess 
implementieren zu können. Nachdem das Frontend dafür entwickelt war, erstellten wir in 
unserer Datenbank mittels Migrations ("php artisan make:migration") die Tabelle "Transactions". 
Anschließend erzeugten wir mit dem Befehl "php artisan make:model" ein entsprechendes 
Model "TransactionsModel.php", um die Datenbank-Tabelle "Transactions" gemäß dem MVC-Ansatz 
auf eine Klasse abzubilden. Ergänzend erzeugten wir einen Seeder "TransactionsSeeder.php" 
mit dem Befehl "php artisan make:seeder", implementierten die "run()"-Funktion mit 
entsprechenden Insert-Statements und führten den Seeder schließlich aus, um unsere 
Tabelle "Transactions" mit Testdaten zu füllen.<br> 
Nachdem wir diese Schritte erfolgreich durchgeführt hatten, erstellten wir den 
Controller "BP_SearchController.php", um die Geschäftslogik für den Such-Geschäftsprozess 
zu implementieren. In dem eben erwähnten Controller implementierten wir eine 
Funktion "showTransactions()", in der wir die Daten, die wir im entsprechenden 
Blade "mio_transactions.blade.php" anzeigen lassen, aus dem "TransactionsModel" holen und 
in entsprechenden Variablen speichern. Schließlich returnt die Funktion die View 
beziehungsweise das Blade "mio_transactions.blade.php" und gibt die entsprechenden Variablen mit, 
damit das Blade die Daten anzeigen kann. Des Weiteren ergänzten wir im selben Controller eine 
weitere Funktion "filterTransactions()", die aufgerufen wird, wenn der Benutzer in dem 
Blade "mio_transactions.blade.php" Benutzername und Datum in ein entsprechendes Formular 
eingegeben hat. Diese Funktion holt sich zunächst die eingegebenen Daten aus dem Request und 
speichert sie in Variablen. Anschließend holt die Funktion die Daten, in Abhängigkeit der 
Variablen, aus dem "TransactionsModel" und speichert diese wiederum in entsprechenden Variablen. 
Schießlich returned die Funktion wieder die selbe View und gibt die entsprechenden  
Variablen mit.<br> 
Um das alles zu realisieren, ergänzten wir in der "web.php"-Datei entsprechende 
Routen, um die eben erwähnten Funktionen im entsprechenden Controller aufrufen zu können.<br> 
Somit war unsere Webapplikation in der Lage, dem Benutzer eine Suche zu ermöglichen und 
ihm Daten in Abhängigkeit seiner Eingaben anzeigen zu lassen.

###*6. Arbeitsauftrag (03.05.2018): Laravel - Session Handling, Authentifizierung & Autorisierung*
Zu Beginn dieses Arbeitsauftrages ergänzten wir unsere Datenbank um weitere Tabellen, die 
wir für die Realisierung unserer Webapplikation benötigen. Wir erzeugten mittels Migrations
die Tabellen "Doors", "Roles" und "Relations". Die Tabelle "Doors" speichert Türen, die 
Tabelle "Roles" speichert die Rollen "Admin", "Client" und "User" und die Tabelle "Relations" 
speichert die Beziehungen zwischen Benutzern und Türen mit der zugehörigen Rolle und den 
zugehörigen Rechten.<br> 
Die Tabelle "Relations" benötigen wir zum einen, da unsere Benutzer ihre Rollen in speziellen 
Fällen in Abhängigkeit der Tür einnehmen. Präziser, ein Kunde kann in Abhängigkeit der Tür 
gegebenenfalls auch die Rolle "User" einnehmen. Zum anderen benötigen wir die 
Tabelle "Relations", um die Rechte eines Benutzers in Abhängigkeit der Tür abspeichern zu 
können.<br> 
Des Weiteren ergänzten wir mittels Migrations die von Laravel bereitgestellte Tabelle "Users" 
um eine Spalte "role_id", um unseren Benutzern eine Rolle zuweisen zu können. Der letzte Satz 
kann für Verwirrung gesorgt haben, da wir oben beschrieben haben, dass unsere Benutzer ihre 
Rollen in Abhängigkeit der Tür einnehmen. Deswegen möchte ich diesen Sachverhalt im Folgenden 
genauer erläutern. Die Rolle unserer Benutzer wird primär in der Tabelle "Users" gespeichert. 
Da wie ebenfalls oben bereits beschrieben, ein Kunde in Abhängigkeit der Tür 
gegebenenfalls auch die Rolle "User" einnehmen kann, ist es unabdingbar die Rolle eines 
Benutzers noch ein zusätzliches Mal in der Tabelle "Relations" in Abhängigkeit der Tür zu 
speichern.<br> 
Im nächsten Schritt ergänzten wir wie im vorherigen Arbeitsauftrag entsprechende Models und 
Seeders für unsere Migrations. In dem Model "RelationsModel" ergänzten wir die 
Funktionen "door()", "user()" und "role()", um jedem Tupel unserer Tabelle "Relations" 
eindeutig eine Tür, einen Benutzer und eine Rolle zuweisen zu können. Hierfür verwendeten 
wir die von Laravel bereitgestellte Funktion "belongsTo()". Zudem ergänzten wir in dem 
Model "DoorsModel" die Funktionen "relations()" und "transactions()", um jedem Tupel 
unserer Tabelle "Doors" Relationen und Transaktionen zuweisen zu können. Hierfür verwendeten 
wir die von Laravel bereitgestellte Funktion "hasMany()". Fortführend ergänzten wir in 
dem Model "RolesModel" eine Funktion "relations()", in dem Model "TransactionsModel" eine 
Funktion "door()" und in dem Model "User" die Funktionen "relations()", "role()", 
"hasRole()" und "authorizeRole()". Die letzten beiden 
Funktionen dienen dazu, die Rolle eines Benutzers zu überprüfen. Ergänzend passten wir 
den "RegisterController.php" an. Damit bei der Registrierung eines neuen "Clients" die 
passende Rolle in der Tabelle "Users" gespeichert wird.<br> 
Außerdem erstellten wir weitere Blades, die das Template "mio_home_app.blade.php" erweitern 
sowie weitere Routen in der "web.php"-Datei, um den zweistufigen Eingabe-Geschäftsprozess 
implementieren zu können.<br> 
Nachdem wir alle diese Schritte vorgenommen hatten, integrierten wir die von Laravel 
bereitgestellte Authentifizierung in unsere Webapplikation. Hierfür erstellten wir die 
Blades "mio_login.blade.php" und "mio_register.blade.php", kopierten den Code aus den 
entsprechenden Blades von Laravel in unsere eben erwähnten Blades und gestalteten diese 
gemäß dem Mio-Design.<br> 
Damit kein authentifizierter Benutzer auf unseren "Begrüßungsbereich" gelangen kann, 
ergänzten wir den "WelcomeController" um einen Konstruktor, der die Funktion "middleware()" 
mit dem Übergabeparameter "guest" aufruft. Damit können all die Funktionen des 
"WelcomeControllers" nur aufgerufen werden, wenn der aktuelle Benutzer nicht 
authentifiziert ist.<br> 
Fortführend zum eben beschriebenen Schritt, ergänzten wir ebenfalls die 
Controller "HomeController", "BP_SearchController", "BP_AdjustController", 
"AdminController" und "AddUserController" um einen Konstruktor, der die 
Funktion "middleware()" mit dem Übergabeparameter "auth" aufruft. Damit können all die 
Funktionen dieser Controller nur aufgerufen werden, wenn der aktuelle Benutzer 
authentifiziert ist. Die Controller "BP_AdjustController", "AdminController" und 
"AddUserController" werde ich im weiteren Verlauf der Dokumentation genauer beschreiben.<br> 
Nachdem das Frontend für den zweistufigen Eingabe-Geschäftsprozess entwickelt war, 
erstellten wir den Controller "BP_AdjustController.php", um die Geschäftslogik für den 
diesen Geschäftsprozess zu implementieren. In dem eben erwähnten Controller implementierten 
wir drei Funktionen, die wir im Folgenden genauer beschreiben werden. Die erste 
Funktion "invokeRights()" verarbeitet zunächst die beiden Variablen "$door" und "$user". 
Die beiden Variablen definieren die Beziehung zwischen dem entsprechenden Benutzer und 
der entsprechenden Tür für die die Rechte eingestellt werden sollen. Danach holt die 
Funktion mithilfe dieser beiden Variablen, die entsprechende ID der Türe aus 
dem "DoorsModel" und die entsprechende ID des Benutzers aus dem Model "User" und speichert 
diese beiden IDs in der entsprechenden Session ab. 
Code Beispiel für die Speicherung der ID des "Users" in der Session: 
$request->session()->put('current_user_id', $user_id)<br>
Anschließend wird das Blade "mio_rights.blade.php" inklusive benötigter Variablen returnt. In 
diesem Blade bestimmt der autorisierte Kunde, ob der entsprechende Benutzer das Zutrittsrecht und 
das Protokollrecht bekommen soll. Sobald der Kunde seine Einstellung mit dem entsprechenden 
Knopfdruck speichern möchte, wird die zweite Funktion "invokeRightsExt()" aufgerufen. Diese 
Funktion verarbeitet zunächst die vom Kunden eingegebenen Daten (Zutrittsrecht und Protokollrecht) 
aus dem Request und speichert diese wie die beiden oben erwähnten IDs in der entsprechenden 
Session ab. 
Code Beispiel für das Lesen der ID des "Users" aus der Session:  
$request->session()->get('current_user_id', 'There is no User-ID')<br> 
Hat der Kunde dem Benutzer das Zutrittsrecht nicht gestattet, so werden die getätigten 
Einstellungen sofort in der Datenbank gespeichert. Hat der Kunde dem Benuter jedoch das 
Zutrittsrecht gestattet, so wird das Blade "mio_rights_ext.blade.php" inklusive benötigter 
Variablen returnt. In diesem Blade bestimmt der autorisierte Kunde, an welchen Wochentagen 
und zu welcher Uhrzeit der entsprechende Benutzer das Zutrittsrecht bekommen soll. Sobald 
der Kunde wie eben seine Einstellung mit dem entsprechenden Knopfdruck speichern möchte, 
wird die dritte Funktion "store()" aufgerufen. Diese Funktion holt sich zunächst die 
ID des Benutzers, die ID der Türe, das Zutrittsrecht und das Protokollrecht aus der Session. 
Anschließend verarbeitet die Funktion die vom Kunden eingegebenen Daten aus dem Request und 
speichert diese gemeinsam mit den Daten aus der Session in der Datenbank ab.<br> 
Zum Schluss dieses Arbeitsauftrages implementierten wir schließlich noch die Autorisierung für 
den zweistufigen Eingabe-Geschäftsprozess. Um die Rechte für einen Benutzer festlegen zu können, 
klickt unser "Client" in der View "mio_manage_door.blade.php" auf den Button "Manage Rights". 
Da nur "Clients" die Rechte von "Users" für eine entsprechende Tür verwalten dürfen, "disablen"
wir diesen Button für "Users". Hierfür schicken wir der View "mio_manage_door.blade.php" 
das entsprechende Tupel aus dem "RelationsModel" mit. In der View fragen wir dann mithilfe des 
Tupels die Rolle des authentifizierten Benutzers im Zusammenhang mit der Tür ab und geben dem 
Button die Eigenschaft "disabled", falls die Rolle "User" ist.
Code Beispiel für das Überprüfen der Rolle des authentifizierten Benutzers im Zusammenhang 
mit der Tür:
'''php
@if ($relation_row->role_id == 3) disabled @endif
'''
Im weiteren Verlauf der Dokumentation werden wir noch weitere Autorisierungsmaßnahmen beschreiben.

###*7. Arbeitsauftrag (17.05.2018): JavaScript - jQuery & AJAX*
Wir verwenden an verschiedenen Stellen JavaScript, um unsere Webapplikation dynamisch 
zu gestalten. In der View "mio_home.blade.php" verwenden wir zum einen JavaScript, um ein 
Formular anzeigen zu lassen, wenn unsere "Clients" in dieser View auf den Button "Add Door" 
klicken. In diesem Formular geben unsere "Clients" einen Türnamen ein und fügen auf dieses Weise 
Türen zu ihrem Account hinzu. Da Türnamen in unserer Webapplikation nur einmalig vergeben werden 
können, verwenden wir zum anderen ebenfalls in dieser View JavaScript, um eine Fehlermeldung 
anzeigen zu lassen, falls der vom "Client" eingegebene Türname bereits vergeben ist.<br> 
Ein weiteres Mal verwenden wir JavaScript in der View "mio_add_user.blade.php". In dieser View 
kann ein "Client" neue Benutzer oder auch bereits existierende Benutzer zu seiner Tür hinzufügen. 
Hierfür verwenden wir zwei verschiedene Formulare. Eines um einen neuen Benutzer zu registrieren 
und ihn gleichzeitig zu seiner Tür hinzuzufügen. Das Zweite um einen bereits existierenden 
Benutzer seiner Tür hinzuzufügen. Durch einen entsprechenden Knopfdruck, können unsere "Clients" 
das Formular wechseln. Hierfür wenden wir JavaScript an. Ein zweites Mal wenden wir in dieser 
View JavaScript an, um wie im ersten Anwendungsfall entsprechende Fehlermeldungen anzeigen lassen 
zu können. Es wird mithilfe von JavaScript eine Fehlermeldung angezeigt, falls ein "Client" 
einen "User"-Account hinzufügen möchte, der nicht existiert. Es wird eine Fehlermedlung angezeigt, 
falls ein "Client" das falsche Passwort für den entsprechenden "User"-Account eingibt. Und es 
wird noch ein weiteres Mal eine Fehlermeldung angezeigt, falls ein "Client" einen 
"User"-Account hinzufügen möchte, der bereits "User" der entsprechenden Tür ist.<br> 
All diese Überprüfungen aus diesen ersten beiden Anwendungsfällen finden im Backend statt. 
Daher geben wir im Controller "AddUserController.php" in der Funktion "addExistingUser()" in 
Abhängigkeit des Ergebnisses der Überprüfung der selben View "mio_add_user.blade.php" eine 
Variable mit, die den entsprechenden Fehler repräsentiert und rufen dann in der View in 
Abhängigkeit dieser Variable eine entsprechende JavaScript-Datei auf.<br> 
Ein weiterer Anwendungsfall von JavaScript befindet sich in der View "mio_rights_ext.blade.php". 
In dieser View bestimmt ein "Client" an welchen Wochentagen und zu welcher Uhrzeit ein 
entsprechender "User" eine entsprechende Tür öffnen darf. In diesem Fall verhindern wir zum einen 
mithilfe von JavaScript, dass die Einstellungen in der Datenbank gespeichert werden, falls 
ein "Client" keinen der Wochentage auswählt und anschließend auf den Button "save changes" klickt. 
Ist dies jedoch der Fall, wird eine entsprechende Fehlermeldung angezeigt. Diese Überprüfung fand 
im Vergleich zu den bisherigen Anwendungsfällen im Frontend statt. Zum anderen verhindern wir in 
dieser View mithilfe von JavaScript, dass ein "Client" eine ungültige Zeitspanne angeben kann. Es 
ist nicht möglich den Beginn der Zeitspanne hinter das Ende der Zeitspanne zu setzen.<br> 
In userem letzten Anwendungsfall wenden wir in der View "mio_transactions.blade.php" JavaScript 
in Verbindung mit AJAX an. In dieser View zeigen wir in Form einer Tabelle Transaktionen einer 
entsprechenden Tür an und ermöglichen es Benutzern nach Benutzername und Datum zu suchen. Um die 
bisherige Suche zu einer "Live-Suche" umzuwandeln, erstellten wir zunächst in dem 
Verzeichnis "/resources/views" den Ordner "ajax". In diesem Ordner erstellten wir dann eine View, 
die die Tabelle mit aktualisierten Daten anzeigt. Anschließend erweiterten wir 
den "BP_SearchController", den wir für den Such-Geschäftsprozess erstellt hatten. Wir ergänzten 
Funktionen, die nach jeder Eingabe des Benutzers die eingegebenen Daten aus dem Request 
verarbeitet und ...

###*8. Arbeitsauftrag (07.06.2018): Deployment & Performance*
Zu Beginn dieses Arbeitsauftrages stellten wir gemeinsam mit Ihnen in der Übung unsere 
Webapplikation auf Heroku bereit.\ 
Anschließend verwendeten wir YSlow, um die Performance unserer Webapplikation zu analysieren. Um 
die Performance zu verbessern, führten wir mithilfe der Datei "webpack.mix.js" die beiden 
CSS-Dateien "mio_styles.css" und "bootstrap.css" zu einer CSS-Datei "mixOfMioAndBootstrap.css" 
zusammen. Zudem komprimierten wir die Datei "mixOfMioAndBootstrap.css". Ergänzend führten wir auch 
unsere JavaScript-Dateien zu einer JavaScript-Datei "mixOfMio.js" zusammen und komprimierten diese 
ebenfalls.\ 
Des Weiteren optimierten wir unsere Datenbankzugriffe, um die Performance unserer Webapplikation 
zu verbessern.\ 

###*9. Arbeitsauftrag (14.06.2018): Search Engine Optimization*
...

###*10. Arbeitsauftrag (21.06.2018): Security*
...