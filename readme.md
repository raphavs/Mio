# Mio - Manage your doors smart.

### 1. Beschreibung der Funktionalität

### *Use Cases*

##### Gast
###### **Begrüßungsseite**
Bei Mio können Sie Ihre Türen smart verwalten. Als Gast können Sie sich über unser Unternehmen auf den Willkommensseiten informieren. Auf der Begrüßungsseite sehen Sie erste Informationen sowie unsere Kundengruppen. Unsere Seite ist für Clients, User und Endgerät-Hersteller ausgelegt, wobei die Endgerät-Hersteller-Funktionen noch nicht implementiert sind. Der Schwerpunkt liegt somit auf den Clients und den Usern.
###### **Feature Seite**
Die Feature Seite gibt Ihnen einen Einblick in die Funktionen, die unsere Webapplikation bietet. 
###### **Informationsseite**
Auf der Informationsseite wird die Einleitung von der Begrüßungsseite weitergeführt. Hier ist noch einmal dargestellt, was Mio ist.
###### **Kontaktseite**
Auf der Kontaktseite finden Sie die Adresse unserer Hochschule sowie das Impressum. Hierbei achteten wir darauf, dass unseren Gästen klar wird, dass Mio ein Hochschulprojekt ist. Zudem können Sie auf dieser Seite die Datenschutzerklärung finden.

##### Kunde
###### **Türen hinzufügen**
Ein Client kann auf der Home-Seite seines Accounts sowohl über den Button "Add Door" Türen hinzufügen als auch seine bereits registrierten Türen auswählen, um diese zu verwalten.
###### **Tür verwalten**
Wählt man eine Tür aus, kommt man zu einer View, auf der man als Client neue User für diese Tür hinzufügen, die Rechte der User dieser Tür verwalten, das Protokoll einsehen und diese Tür öffnen kann. 
###### **Benutzer hinzufügen**
Klickt man auf den Button "Add User", so wird man auf eine View weitergeleitet, in der man sowohl neue User registrieren und zu seiner Tür hinzufügen als auch bereits existierende User zu seiner Tür hinzufügen kann.
###### **Rechte verwalten**
Klickt man auf den Button "Manage Rights", wo wird man auf eine View weitergeleitet, in der man einen User auswählt, um für diesen in den folgenden Views seine Rechte einzustellen. Nachdem man einen User gewählt hat, kann man in der folgenden View entscheiden, ob er das Zutrittsrecht und/oder das Protokollrecht bekommen soll. Falls das Zutrittsrecht gestattet wird, kann man wiederum in der folgenden View wählen, an welchen Tagen und zu welcher Uhrzeit der User Zutritt haben soll. Wenn neue User zu einer Tür hinzugefügt werden, haben sie standardmäßig alle Rechte!
###### **Protokolleinsicht**
Klickt man auf den Button "See Transactions", wo wird man auf eine View weitergeleitet, in der man alle Transaktionen der Tür in Form einer Tabelle sieht. Zudem kann man nach einem Benutzernamen und einem Datum suchen.
###### **Tür öffnen**
Klickt man auf den Button "Open", wo wird die Tür geöffnet und die entsprechende Transaktion im Protokoll gespeichert.

##### User
###### **Türen auswählen**
Ein User kann auf der Home-Seite seines Accounts Türen, denen er zugeordnet wurde, auswählen, um diese zu öffnen und um das entsprechende Protokoll einzusehen. Ein User hat nicht die Möglichkeit, Türen hinzuzufügen.
###### **Tür verwalten**
Wählt man eine Tür aus, kommt man zu einer View, auf der man als User das Protokoll einsehen und diese Tür öffnen kann.  Ein User hat weder die Möglichkeit Rechte zu verwalten noch User hinzuzufügen.
###### **Protokolleinsicht**
Klickt man auf den Button "See Transactions", wo wird man auf eine View weitergeleitet, in der man alle Transaktionen der Tür in Form einer Tabelle sieht. Zudem kann man nach einem Benutzernamen und einem Datum suchen. Falls der User im Zusammenhang mit der Tür das Protokollrecht nicht hat, so werden dem User nur die Transaktionen angezeigt, die er selbst getätigt hat und der User kann nur nach einem Datum suchen. Andernfalls sieht er alle Transaktionen und er kann sowohl nach einem Benutzernamen als auch nach einem Datum suchen.
###### **Tür öffnen**
Besitzt der User das Recht die Tür zu öffnen, so kann er auf den Button "Open" klicken. Andernfalls ist der Button blockiert. Klickt er diesen, so wird die Tür geöffnet und die entsprechende Transaktion im Protokoll gespeichert. Auf diese Weise wird sichergestellt, dass kein unautorisierter User Zutritt erlangt.

##### **Wichtig**: 
Clients und User haben in unserer Webapplikation feste Rollen. Es ist jedoch möglich, dass ein Client im Zusammenhang mit einer Tür gegebenenfalls auch die Rolle "User" annehmen kann. Sein Account ist in diesem Fall immernoch ein Client-Account. Das heißt, er besitzt immernoch die Möglichkeit Türen hinzuzufügen. Aber wenn er auf eine entsprechende Tür, bei der er selbst nur "User" ist, klickt, so besitzt er für diese Tür weder die Möglichkeit User hinzuzufügen noch Rechte zu verwalten.

##### Admin
###### **Übersicht über Kunden, Benutzer und Türen**
Ein Admin hat dieselben Use Cases wie ein Client. Zusätzlich kann er jedoch auf seiner Home-Seite, den Button "Manage Clients" klicken, um auf eine View zu gelangen, in der er Clients verwalten und User löschen kann. Klickt er bei einem Client auf den Button "Manage", so wird er auf eine weitere View geleitet, in der er Türen des entsprechenden Clients sowie den Client selber löschen kann.

### *Wow-Faktor der Applikation*
Der Wow-Faktor unserer Applikation besteht darin, dass Buttons in Abhängigkeit der Rolle des authentifizierten Benutzers entweder möglich sind zu klicken oder blockiert sind. Außerdem ist es bei der Rechtewahl eines Users nicht möglich den Beginn des Zeitintervalls vor das Ende des Zeitintervalls zu setzen! Damit wird eine Fehlerquelle ausgeschlossen. Ein weiterer Wow-Faktor unserer Applikation ist, dass ein Client im Zusammenhang mit einer Tür mit ein und dem selben Account gegebenenfalls auch die Rolle User annehmen kann. Zudem arbeiteten wir viel mit Buttons, sodass Texteingaben größtenteils umgangen wurden, um ein mögliches Sicherheitsrisiko auszuschließen.

### *Visual Design*
Allgemein versuchten wir mit unserem "Mio-Design" ein souverän und seriös wirkendes Ambiente zu schaffen. Damit unsere Gäste, Clients und User ein gewisses Vertrauen gegenüber Mio aufbauen und unsere Webapplikation nutzen möchten.\
Mit dem Bilder Karussell auf unserer Begrüßungsseite und der dunklen Farbwahl von schwarz und gold soll die Aufmerksamkeit unserer Gäste direkt geweckt werden. Durch Symbole und Bilder möchten wir unsere Seite aufregender wirken lassen. Ein eher geringer Anteil an Text und viele Bilder machen die Seite lebendiger und übersichtlicher. Unsere Gäste werden nicht mit Informationen zugeschüttet, sondern können sich langsam herantasten. Große Formulare und Buttons ermöglichen es auch älteren Leuten oder schlechten Augen alles zu erkennen. Zudem ist das Wichtige farblich hevorgehoben, wie beispielsweise der "Open"-Button in gelb. Auf diese Weise wissen unsere Benutzer auf was es ankommt.
 

## 2. Technische Implementierung

### *1. Arbeitsauftrag (29.03.2018): Design & CSS*
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
```php
if ($relation_row->role_id == 3) disabled endif
```
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
unsere JavaScript-Dateien zu einer einzigen JavaScript-Datei "mixOfMio.js" zusammen und komprimierten 
diese ebenfalls.\ 
Des Weiteren optimierten wir unsere Datenbankzugriffe, um die Performance unserer Webapplikation 
zu verbessern.\ 

###*9. Arbeitsauftrag (14.06.2018): Search Engine Optimization*
<h5>Technical SEO</h5>
Zu Beginn dieses Arbeitsauftrages registrierten wir unsere Webapplikation in der "Google Search Console" 
und bindeten das von Google bereitgestellte  Meta-Tag in das Template "mio_welcome_app.blade.php" unserer 
Begrüßungsseite ein. Somit konnte man "Mio" ab sofort auf Google finden.<br> 
Zudem fügten wir eine Beschreibung unserer Webapplikation in den Head des eben beschriebenen 
Templates ein.<br> 
```html
<meta name="description" content="Mio - Manage your doors smart. Mio is an access control system that allows modern living."/>
```
Des Weiteren entwickelten wir, wie am Anfang der Dokumentation bereits beschrieben, Responsive Design 
für "Mio". Somit wird unsere Webapplikation im "Google Page Rank" tendenziell höher eingestuft, da 
sie Smartphone freundlich ist.
<h5>OnPage SEO</h5>
Um "Mio" möglichst gut finden zu können, überlegten wir uns zunächst ein paar Schlagworte, die 
höchst wahrscheinlich in der "Google Suche" eingegeben werden, wenn man eine Webappklikation 
wie unsere sucht. Folgende Schlagworte empfanden wir für sinnvoll: 
"manage doors smart", "modern living", "access control system", "smart home" und "modern home". 
Anschließend integrierten wir diese Schlagworte in den Titel, in die Beschreibung, in Überschriften und 
in Paragraphen unserer Begrüßungsseite.<br> 
Ergänzend optimierten wir den Inhalt unserer Begrüßungsseite, indem wir doppelt vorkommende Überschriften 
oder Paragraphen vermieden.
<h5>Social Networks</h5>
Exemplarisch ergänzten wir Social Network Links in unserer Begrüßungsseite.

###*10. Arbeitsauftrag (21.06.2018): Security*
Bezüglich des Themas Sicherheit stellten wir, wie bereits in der Dokumentation beschrieben, durch eine 
Registrierung sowie durch einen Login sicher, dass ausschließlich authentifizierte Benutzer Zugang zu den 
entsprechenden Views erhalten. Zudem stellten wir sicher, dass authentifizierte Benutzer nur das Lesen und 
Bearbeiten können, wofür sie autorisiert sind. Da in unserer Webapplikation Tür- und Benutzernamen oft 
über den URL übergeben werden, war es anfangs sehr leicht die Webapplikation zum Absturz zu bringen. Gab man 
nicht existierende Tür- und Benutzername im URL ein, so konnte man die Rechte eines Benutzers für eine Tür 
einstellen, obwohl weder die Tür noch der Benutzer existierte. Aus diesem Grund mussten wir zusätzliche 
Schutzmaßnahmen in unsere Controller integrieren, um die Integrität unserer Webapplikation weiterhin 
sicherzustellen. Ein Code Beispiel für solch eine Maßnahme sieht wie folgt aus:
```php
if (RelationsModel::where('door_id', $door_id)->where('user_id', $user_id)->get()->count() < 1
    or RelationsModel::where('door_id', $door_id)->where('user_id', Auth::id())->where('role_id', RolesModel::where('name', 'client')->value('id'))->get()->count() < 1) 
{
    return redirect('/home');
}
```
Auf diese Weise wurde zum einen überprüft, ob die Beziehung zwischen Tür und "User" überhaupt existiert. Zum 
anderen, ob der authentifizierte Benutzer überhaupt das Recht besitzt, die Rechte des "Users" im Zusammenhang 
mit dieser Tür zu verwalten.<br> 
Eine ähnliche Maßnahme führten wir im Zusammenhang mit AJAX durch. Im "BP_SearchController", der die AJAX-Anfragen 
entgegennimmt, ergänzten wir folgenden Code: 
```php
if (!$request->ajax())
{
    return redirect("/home/$door/transactions");
}
```
um sicherzustellen, dass kein unautorisierter Benutzer über den URL eine Datenbank-Abfrage durchführen kann.<br> 
Eine weitere Sicherheitsmaßnahme war das festlegen des Typs eines jeden Input-Felds, in das unsere 
Benutzer Daten eingeben können. Außerdem wählten wir stets die POST-Methode, um die in ein Formular eingegebenen 
Daten (bis auf AJAX-Suche) unserer Benutzer zu übertragen. Ergänzend bindeten wir ein verstecktes CSRF-Token in 
jedes unserer Formulare ein. Des Weiteren wenden wir konsequent das Eloquent ORM für die Verwaltung unserer 
Datenbank an. Durch diese Maßnahmen ist "Mio" relativ stark vor SQL-Injections beziehungsweise unerlaubten 
Datenbankzugriffen geschützt.<br> 