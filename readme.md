# Mio - Manage your doors smart.

### 1. Beschreibung der Funktionalität

### *Use Cases*

#### Gast
###### **Begrüßungsseite**
Bei Mio können Sie Ihre Türen smart verwalten. Als Gast können Sie sich über unser Unternehmen auf den Willkommensseiten informieren. Auf der Begrüßungsseite sehen Sie erste Informationen sowie unsere Kundengruppen. Unsere Seite ist für Clients, User und Endgerät-Hersteller ausgelegt, wobei die Endgerät-Hersteller-Funktionen noch nicht implementiert sind. Der Schwerpunkt liegt somit auf den Clients und den Usern.
###### **Feature Seite**
Die Feature Seite gibt Ihnen einen Einblick in die Funktionen, die unsere Webapplikation bietet. 
###### **Informationsseite**
Auf der Informationsseite wird die Einleitung von der Begrüßungsseite weitergeführt. Hier ist noch einmal dargestellt, was Mio ist.
###### **Kontaktseite**
Auf der Kontaktseite finden Sie die Adresse unserer Hochschule sowie das Impressum. Hierbei achteten wir darauf, dass unseren Gästen klar wird, dass Mio ein Hochschulprojekt ist. Zudem können Sie auf dieser Seite die Datenschutzerklärung finden.

#### Client
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

#### User
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

#### Admin
###### **Übersicht über Clients, User und Türen**
Ein Admin hat dieselben Use Cases wie ein Client. Zusätzlich kann er jedoch auf seiner Home-Seite, den Button "Manage Clients" klicken, um auf eine View zu gelangen, in der er Clients verwalten und User löschen kann. Klickt er bei einem Client auf den Button "Manage", so wird er auf eine weitere View geleitet, in der er Türen des entsprechenden Clients sowie den Client selber löschen kann.

---

### *Wow-Faktor der Applikation*
Der Wow-Faktor unserer Applikation besteht darin, dass Buttons in Abhängigkeit der Rolle des authentifizierten Benutzers entweder möglich sind zu klicken oder blockiert sind. Außerdem ist es bei der Rechtewahl eines Users nicht möglich den Beginn des Zeitintervalls vor das Ende des Zeitintervalls zu setzen! Damit wird eine Fehlerquelle ausgeschlossen. Ein weiterer Wow-Faktor unserer Applikation ist, dass ein Client im Zusammenhang mit einer Tür mit einem einzigen Account gegebenenfalls auch die Rolle User annehmen kann. Zudem arbeiteten wir viel mit Buttons, sodass Texteingaben größtenteils umgangen wurden, um ein mögliches Sicherheitsrisiko auszuschließen.

---

### *Visual Design*
Allgemein versuchten wir mit unserem "Mio-Design" ein souverän und seriös wirkendes Ambiente zu schaffen. Damit unsere Gäste, Clients und User ein gewisses Vertrauen gegenüber Mio aufbauen und unsere Webapplikation nutzen möchten.\
Mit dem Bilder Karussell auf unserer Begrüßungsseite und der dunklen Farbwahl von schwarz und gold soll die Aufmerksamkeit unserer Gäste direkt geweckt werden. Durch Symbole und Bilder möchten wir unsere Seite aufregender wirken lassen. Ein eher geringer Anteil an Text und viele Bilder machen die Seite lebendiger und übersichtlicher. Unsere Gäste werden nicht mit Informationen zugeschüttet, sondern können sich langsam herantasten. Große Formulare und Buttons ermöglichen es auch älteren Leuten oder schlechten Augen alles zu erkennen. Zudem ist das Wichtige farblich hevorgehoben, wie beispielsweise der "Open"-Button in gelb. Auf diese Weise wissen unsere Benutzer auf was es ankommt.
 
--- 

### 2. Technische Implementierung

#### *1. Arbeitsauftrag (29.03.2018): Design & CSS*
###### **Begrüßungsseite erstellen**
Beim Erstellen der Begrüßungsseite haben wir uns zunächst überlegt wie grob der Aufbau unserer Begrüßungsseite aussehen soll. Anschließend implementierten wir entsprechend die "index.html"-Datei. 
###### **Implementierung des Designs**
Zusätzlich erstellten wir eine CSS-Datei "mio_styles.css", um unserer Begrüßungsseite einen eigenen Stil zu verleihen. Dabei hielten wir uns möglichst nahe an unseren Vorlagen aus dem Moodboard und dem Style Tile.

---

#### *2. Arbeitsauftrag (05.04.2018): Layout & Design*
###### **Implementierung der Begrüßungsseite als statische Webseite & Responsive Design (mit Bootstrap)**
Für diesen Arbeitsauftrag beschäftigten wir uns zunächst intensiv mit Bootstrap. Anschließend bauten wir sehr viele Elemente von Bootstrap in unsere Begrüßungsseite ein, um für diese Responsive Design zu implementieren. Dabei verwendeten wir vor allem das Grid-System, um die Anordnung der Elemente vom Viewport abhängig zu machen. Da wir einen eigenen Stil für unsere Webapplikation haben wollten, überschrieben wir viele von Bootstrap bereitgestellte CSS-Klassen, um ein individuelles Mio-Design zu implementieren.

---

#### *3. Arbeitsauftrag (12.04.2018): Laravel - PHP*
###### **Laravel Projekt erstellen**
Wie in der Übung gemeinsam durchgeführt, erstellten wir später auf meinem eigenen Rechner ein Laravel Projekt für unsere Webapplikation. Anschließend implementierten wir ein Template "mio_welcome_app.blade.php" und erweiterten es mit der View "mio_welcome.blade.php". Hierfür kopierten wir Ausschnitte aus unserer "index.html"-Datei und fügten sie entsprechend in die beiden neuen Dateien ein. Zudem integrierten wir unsere CSS-Datei "mio_styles.css" in das Projekt.
###### **Erzeugen der Datenbank**
Des Weiteren erstellte jeder von uns auf seinem eigenen Rechner eine lokale MySQL-Datenbank und passte die ".env"-Datei entsprechend an. Ergänzend erzeugten wir mit dem Befehl "php artisan make:auth" die Views, die Routen, den Controller, das Model "User.php" und die Tabelle "Users" in unserer Datenbank für die von Laravel bereitgestellte Authentifizierung.
###### **Weitere notwendige Maßnahmen**
Zudem implementierten wir weitere Views, die alle das Template "mio_welcome_app.blade.php" erweitern, für unseren "Willkommensbereich". Für diese Views implementierten wir einen zusätzlichen Controller "WelcomeController.php", der Funktionen enthält, die die eben erwähnten Views returnt. Ergänzend passten wir die Routen in der "web.php"-Datei an, um die eben beschriebenen Funktionen im "WelcomeController.php" aufrufen zu können.
###### **Einchecken des Projekts in GIT**
Zum Schluss checkte ich das angepasste Projekt in GIT ein, damit meine Partnerin Lea es auschecken konnte.

---

#### *4. Arbeitsauftrag (19.04.2018) & 5. Arbeitsauftrag (26.04.2018): Laravel - MVC*
Wir fassen diese beiden Arbeitsaufträge zusammen, da wir diese auch zusammen umgesetzt haben.
Uns war es wichtig unsere Webapplikation von Beginn an sinnvoll zu strukturieren. Aus diesem
Grund beschäftigten wir uns schon vorzeitig mit dem MVC-Ansatz sowie mit Migrations.
###### **Erzeugen von Models, Views, Migrations & Seeder für den Such-Geschäftsprozess**
Zu Beginn dieses Arbeitsauftrages erstellten wir zunächst ein weiteres Template "mio_home_app.blade.php" sowie weitere Views, um den Such-Geschäftsprozess implementieren zu können. Nachdem das Frontend dafür entwickelt war, erstellten wir in unserer Datenbank mittels Migrations ("php artisan make:migration") die Tabelle "Transactions". Anschließend erzeugten wir mit dem Befehl "php artisan make:model" ein entsprechendes Model "TransactionsModel.php", um die Datenbank-Tabelle "Transactions" gemäß dem MVC-Ansatz auf eine Klasse abzubilden. Ergänzend erzeugten wir einen Seeder "TransactionsSeeder.php" mit dem Befehl "php artisan make:seeder", implementierten dessen "run()"-Funktion mit entsprechenden Insert-Statements und führten den Seeder schließlich aus, um unsere Datenbank-Tabelle "Transactions" mit Testdaten zu füllen. 
###### **Erstellen des Controllers für den Such-Geschäftsprozess**
Nachdem wir diese Schritte erfolgreich durchgeführt hatten, erstellten wir den Controller "BP_SearchController.php", um die Geschäftslogik unseres Such-Geschäftsprozesses zu implementieren. In dem eben erwähnten Controller implementierten wir eine Funktion "showTransactions()", welche die Transaktionen aus dem "TransactionsModel.php" holt und in eine Variable speichert. Schließlich returnt die Funktion die View "mio_transactions.blade.php" und gibt die entsprechende Variable mit, damit die View die Transaktionen anzeigen kann. 
<br>Code Beispiel:
```php
$transactions = TransactionsModel::where('door_id', $door_id)->get();
return view('mio_transactions', ['door' => $door, 'transactions' => $transactions]);
```
Die Variable "$door" beinhaltet den betreffenden Türnamen.
Des Weiteren ergänzten wir ebenfalls im "BP_SearchController.php" eine weitere Funktion "filterTransactions()", die aufgerufen wird, wenn der Benutzer in der View "mio_transactions.blade.php" einen Benutzernamen und ein Datum in ein entsprechendes Formular eingegeben hat. Diese Funktion holt Transaktionen in Abhängigkeit der Eingaben des Benutzers aus dem "TransactionsModel.php" und gibt sie der View "mio_transactions.blade.php" mit. Später erweiterten wir unseren Such-Geschäftsprozess um eine "Live-Suche". Deshalb werden wir im weiteren Verlauf der Dokumentation noch einmal im Zusammenhang mit AJAX auf den Such-Geschäftsprozess zurückkommen.
###### **Anpassen der Routen für den Such-Geschäftsprozess**
Um den "BP_SearchController.php" mit seinen Funktionen aufrufen zu können, ergänzten wir in der "web.php"-Datei entsprechende Routen.
<br>Code Beispiel:
```php
Route::get('/home/{door}/transactions', 'BP_SearchController@showTransactions')->name('home.managedoor.transactions');
```
Somit war unsere Webapplikation in der Lage, dem Benutzer Transaktionen in Abhängigkeit seiner Eingaben anzeigen zu lassen.

---

#### *6. Arbeitsauftrag (03.05.2018): Laravel - Session Handling, Authentifizierung & Autorisierung*
###### **Erzeugen weiterer Migrations**
Zu Beginn dieses Arbeitsauftrages ergänzten wir unsere Datenbank um weitere Tabellen, die wir für die Realisierung unserer Webapplikation benötigen. Wir erzeugten mittels Migrations die Tabellen "Doors", "Roles" und "Relations". Die Tabelle "Doors" speichert Türen, die Tabelle "Roles" speichert die Rollen "Admin", "Client" und "User" und die Tabelle "Relations" speichert die Beziehungen zwischen Benutzern und Türen mit der zugehörigen Rolle und den zugehörigen Rechten. Die Tabelle "Relations" benötigen wir zum einen, da, wie bereits im 1. Abschnitt ("Beschreibung der Funktionalität") beschrieben, unsere Clients ihre Rollen in speziellen Fällen in Abhängigkeit der Tür einnehmen. Präziser, ein Client kann mit einem einzigen Account in Abhängigkeit der Tür gegebenenfalls auch die Rolle "User" einnehmen. Zum anderen benötigen wir die 
Tabelle "Relations", um die Rechte eines Benutzers in Abhängigkeit der Tür abspeichern zu können. Des Weiteren ergänzten wir mittels Migrations die von Laravel bereitgestellte Tabelle "Users" um eine Spalte "role_id", um unseren Benutzern eine Rolle zuweisen zu können. Der letzte Satz kann für Verwirrung gesorgt haben, da wir eben oben beschrieben haben, dass unsere Benutzer ihre Rollen in Abhängigkeit der Tür einnehmen. Deswegen möchte ich diesen Sachverhalt im Folgenden noch einmal genauer erläutern. Die Rolle unserer Benutzer wird primär in der Tabelle "Users" gespeichert. Da wie ebenfalls bereits oben beschrieben, ein Client in Abhängigkeit der Tür gegebenenfalls auch die Rolle "User" einnehmen kann, ist es unabdingbar die Rolle eines Benutzers noch ein zusätzliches Mal in der Tabelle "Relations" in Abhängigkeit der Tür zu definieren und zu speichern.
###### **Erzeugen weiterer Models & Seeder**
Im nächsten Schritt ergänzten wir wie im vorherigen Arbeitsauftrag entsprechende Models und Seeders für unsere Migrations. In dem Model "RelationsModel.php" ergänzten wir die Funktionen "door()", "user()" und "role()", um jedem Tupel unserer Tabelle "Relations" eindeutig eine Tür, einen Benutzer und eine Rolle zuweisen zu können. Hierfür verwendeten wir die von Laravel bereitgestellte Funktion "belongsTo()".
<br>Code Beispiel:
```php
public function door()
{
    return $this->belongsTo(DoorsModel::class, 'door_id');
}
public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
public function role()
{
    return $this->belongsTo(RolesModel::class, 'role_id');
}
```
Zudem ergänzten wir in dem Model "DoorsModel.php" die Funktionen "relations()" und "transactions()", um jedem Tupel unserer Tabelle "Doors" Relationen und Transaktionen zuweisen zu können. Hierfür verwendeten wir die von Laravel bereitgestellte Funktion "hasMany()". 
Code Beispiel:
```php
public function relations()
{
    return $this->hasMany(RelationsModel::class, 'door_id');
}
public function transactions()
{
    return $this->hasMany(TransactionsModel::class, 'door_id');
}
```
Fortführend ergänzten wir in dem Model "RolesModel.php" eine Funktion "relations()", in dem Model "TransactionsModel.php" eine Funktion "door()" und in dem Model "User.php" die Funktionen "relations()", "role()", "hasRole()" und "authorizeRole()". Die letzten beiden Funktionen dienen dazu, die Rolle eines Benutzers zu überprüfen.
Code Beispiel:
```php
 public function hasRole($role)
{
    return $this->role->name == $role;
}
public function authorizeRole($role)
{
    return $this->hasRole($role) || abort(401, 'This action is unauthorized.');
}
```
Ergänzend passten wir den "RegisterController.php" an. Damit bei der Registrierung eines neuen Clients die passende Rolle in der Tabelle "Users" gespeichert wird.
Code Beispiel:
```php
protected function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role_id' => RolesModel::where('name', 'client')->value('id')
    ]);
}
```
###### **Erstellen weiterer Views für den zweistufigen Eingabe-Geschäftsprozess**
Des Weiteren erstellten wir weitere Views, die das Template "mio_home_app.blade.php" erweitern sowie weitere Routen in der "web.php"-Datei, um den zweistufigen Eingabe-Geschäftsprozess implementieren zu können.
###### **Implementierung des Controllers für den zweistufigen Eingabe-Geschäftsprozess inklusive Session Handling**
Nachdem das Frontend für den zweistufigen Eingabe-Geschäftsprozess entwickelt war, erstellten wir den Controller "BP_AdjustController.php", um die Geschäftslogik für diesen Geschäftsprozess zu implementieren. In dem eben erwähnten Controller implementierten wir drei Funktionen, die wir im Folgenden genauer beschreiben werden. Die erste Funktion "invokeRights()" verarbeitet zunächst die Variablen "$door" und "$user", die über den URL übergeben wurden. Diese beiden Variablen definieren die Beziehung zwischen dem User und der Tür für die die Rechte eingestellt werden soll. Danach holt die Funktion mithilfe dieser beiden Variablen, die entsprechende ID der Türe aus dem "DoorsModel.php" und die entsprechende ID des Users aus dem Model "User.php" und speichert diese beiden IDs in der entsprechenden Session ab. 
<br>Code Beispiel:
```php
$user_id = User::where('name', $user)->value('id');
$request->session()->put('current_user_id', $user_id);
$door_id = DoorsModel::where('door_name', $door)->value('id');
$request->session()->put('current_door_id', $door_id);
```
Anschließend holt die Funktion das Zutritts- und das Protokollrecht der entsprechenden Beziehung aus dem "RelationsModel.php" und speichert diese in Variablen. Danach returnt die Funktion die View "mio_rights.blade.php" inklusive der beiden und noch weiterer Variablen.
<br>Code Beispiel:
```php
$access_right = RelationsModel::where('user_id', $user_id)->where('door_id', $door_id)->value('access_right');
$protocol_right = RelationsModel::where('user_id', $user_id)->where('door_id', $door_id)->value('protocol_right');
return view('mio_rights', ['door' => $door, 'user' => $user, 'access_right' => $access_right, 'protocol_right' => $protocol_right]);
```
In dieser View bestimmt der autorisierte Client, ob der entsprechende User das Zutritts- und das Protokollrecht bekommen soll. Speichert der Client seine Einstellungen ab, wird die zweite Funktion "invokeRightsExt()" aufgerufen. Diese 
Funktion verarbeitet zunächst die vom Client eingegebenen Daten (Zutritts- und Protokollrecht) aus dem Request und speichert diese wie die beiden IDs der Tür und des Users in der entsprechenden Session ab. 
<br>Code Beispiel:
```php
$request->session()->put('access_right', $request->input('access_option') == 'true' ? 1 : 0);
$request->session()->put('protocol_right', $request->input('protocol_option') == 'true' ? 1 : 0);
```
Hat der Client dem User das Zutrittsrecht nicht gestattet, so werden die getätigten Einstellungen aus der Session geholt und sofort in der Datenbank gespeichert.
<br>Code Beispiel:
```php
$access_right = $request->session()->get('access_right','There is no Access Right');
$protocol_right = $request->session()->get('protocol_right','There is no Protocol Right');
$current_user = RelationsModel::where('user_id', $user_id)->where('door_id', $door_id)->first();
$current_user->access_right = $access_right;
$current_user->protocol_right = $protocol_right;
$current_user->save();
```
Hat der Client dem User jedoch das Zutrittsrecht gestattet, so wird die View "mio_rights_ext.blade.php" inklusive benötigter Variablen returnt.
<br>Code Beispiel:
```php
$relation_row = RelationsModel::where('user_id', User::where('name', $user)->value('id'))->where('door_id', DoorsModel::where('door_name', $door)->value('id'))->first();
return view('mio_rights_ext', ['door' => $door, 'user' => $user, 'relation_row' => $relation_row]);
```
In dieser View bestimmt der autorisierte Client, an welchen Wochentagen und zu welcher Uhrzeit der entsprechende User das Zutrittsrecht bekommen soll. Speichert der Client seine Einstellungen ab, wird die dritte Funktion "store()" aufgerufen. Diese Funktion holt sich zunächst die ID des Users, die ID der Tür, das Zutritts- und das Protokollrecht aus der Session. Anschließend verarbeitet die Funktion die vom Client eingegebenen Daten aus dem Request und speichert diese gemeinsam mit den Daten aus der Session in der Datenbank ab.
<br>Code Beispiel:
```php
$current_user = RelationsModel::where('user_id', $request->session()->get('current_user_id', 'There is no User-ID'))->where('door_id', $request->session()->get('current_door_id', 'There is no Door-ID'))->first();
$current_user->access_right = $request->session()->get('access_right','There is no Access Right');
$current_user->protocol_right = $request->session()->get('protocol_right','There is no Protocol Right');
$request->has('MON') ? $current_user->mon = 1 : $current_user->mon = 0;
... 
s. Controller: "BP_AdjustController.php", Funktion: "store()"
switch ($request->input('my-from-range')) {
    case 0:  $current_user->from_time = "00:00:00"; break;
... 
s. Controller: "BP_AdjustController.php", Funktion: "store()"
switch ($request->input('my-to-range')) {
    case 1:  $current_user->to_time = "01:00:00"; break;
... 
s. Controller: "BP_AdjustController.php", Funktion: "store()"
$current_user->save();
```
###### **Implementierung der Authentifizierung**
Nachdem wir all diese Schritte vorgenommen hatten, integrierten wir die von Laravel bereitgestellte Authentifizierung in unsere Webapplikation. Hierfür erstellten wir die Views "mio_login.blade.php" und "mio_register.blade.php", kopierten den Code aus den entsprechenden Views von Laravel in unsere beiden eben erwähnten Views und gestalteten diese gemäß dem Mio-Design. Die hierfür benötigten Models, Controller, Migrations und Routen erzeugten wir bereits im 3. Arbeitsauftrag. Damit kein authentifizierter Benutzer auf unseren "Willkommensbereich" gelangen kann, ergänzten wir den "WelcomeController.php" um einen Konstruktor, der die Funktion "middleware()" mit dem Übergabeparameter "guest" aufruft. Damit können all die Funktionen des "WelcomeControllers.php" nur aufgerufen werden, wenn der aktuelle Benutzer nicht 
authentifiziert ist.
<br>Code Beispiel:
```php
public function __construct()
{
    $this->middleware('guest');
}
```
Fortführend zum eben beschriebenen Schritt, ergänzten wir ebenfalls die Controller "HomeController.php", "BP_SearchController.php", "BP_AdjustController.php", "AdminController.php" und "AddUserController.php" um einen Konstruktor, der die Funktion "middleware()" mit dem Übergabeparameter "auth" aufruft. Damit können all die Funktionen dieser Controller nur aufgerufen werden, wenn der aktuelle Benutzer authentifiziert ist.
<br>Code Beispiel:
```php
public function __construct()
{
    $this->middleware('auth');
}
```
Der "AdminController.php" definiert die Geschäftslogik der Admin-Funktionen unserer Webapplikation und der "AddUserController.php" definiert die Geschäftslogik für das Hinzufügen von neuen Usern für eine Tür.
###### **Implementierung der Autorisierung für den zweistufigen Eingabe-Geschäftsprozess**
Zum Schluss dieses Arbeitsauftrages implementierten wir schließlich noch die Autorisierung für den zweistufigen Eingabe-Geschäftsprozess. Um die Rechte für einen User festlegen zu können, klicken Clients in der View "mio_manage_door.blade.php" auf den Button "Manage Rights". Da nur Clients die Rechte von Usern für eine Tür verwalten dürfen, blockieren wir diesen Button für User. Hierfür schicken wir der View "mio_manage_door.blade.php" das entsprechende Tupel aus dem "RelationsModel.php" mit.
<br>Code Beispiel:
```php
$id = Auth::id();
$door_id = DoorsModel::where('door_name', $door)->value('id');
$relation_row = RelationsModel::where('user_id', $id)->where('door_id', $door_id)->first();
return view('mio_manage_door', ['door' => $door, 'relation_row' => $relation_row]);
```
In der View fragen wir dann mithilfe des Tupels die Rolle des authentifizierten Benutzers im Zusammenhang mit der Tür ab und blockieren den Button "Manage Rights", falls die Rolle "User" ist.
<br>Code Beispiel:
```php
@if ($relation_row->role_id == 3) disabled @endif
```
###### **Implementierung weiterer Autorisierungsmaßnahmen**
Ausschließlich Admins haben auf der Home-Seite das Recht auf den Button "Manage Clients" zu drücken. Klickt ein Admin diesen Button, so wird er auf eine View weitergeleitet, auf der er Clients verwalten und User löschen kann. Dieser Use Case wurde bereits im 1. Abschnitt ("Beschreibung der Funktionalität") genauer beschrieben. Um diese Autorisierung zu realisieren, fragten wir in der entsprechenden View "mio_home.blade.php" ab, ob der authentifizierte Benutzer ein Admin ist. Ist der authentifizierte Benutzer kein Admin, so wird der Button "Manage Clients" blockiert.
<br>Code Beispiel:
```php
@if (!\Illuminate\Support\Facades\Auth::user()->hasRole('admin')) disabled @endif
```
Zudem schrieben wir eine eigene Middleware "CheckRole.php", um sicherzustellen, dass kein unautorisierter Benutzer über den URL auf die entsprechenden Views gelangen kann.
<br>Code Beispiel:
```php
class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!$request->user()->hasRole($role)) {
            return redirect('/home');
        }
        return $next($request);
    }
}
```
Dementsprechend passten wir auch die entsprechenden Routen in der "web.php"-Datei an.
<br>Code Beispiel:
```php
Route::get('/admin', 'AdminController@manage')->name('home.admin')->middleware('checkRole:admin');
Route::post('/admin', 'AdminController@deleteUser')->name('home.admin.deleteuser')->middleware('checkRole:admin');
Route::get('/admin/{user}', 'AdminController@manageClient')->name('home.admin.client')->middleware('checkRole:admin');
Route::post('/admin/{user}', 'AdminController@delete')->name('home.admin.client.deletedoor')->middleware('checkRole:admin');
```
Des Weiteren haben ausschließlich Clients und Admins auf der Home-Seite das Recht auf den Button "Add Door" zu drücken. Klickt ein Client oder ein Admin diesen Button, so wird ihm ein Formular angezeigt, in dem er eine neue Tür registrieren kann. Dieser Use Case wurde ebenfalls bereits im 1. Abschnitt ("Beschreibung der Funktionalität") genauer beschrieben. Um diese Autorisierung zu realisieren, fragten wir in der entsprechenden View "mio_home.blade.php" ab, ob der authentifizierte Benutzer ein Client oder ein Admin ist. Ist der authentifizierte Benutzer weder Client noch Admin, so wird der Button "Add Door" blockiert.
<br>Code Beispiel:
```php
@if (!\Illuminate\Support\Facades\Auth::user()->hasRole('client') and !\Illuminate\Support\Facades\Auth::user()->hasRole('admin')) disabled @endif
```
Um User für eine Tür hinzufügen zu können, klicken Clients in der View "mio_manage_door.blade.php" auf den Button "Add User". Da nur Clients User zu einer Tür hinzufügen dürfen, blockieren wir diesen Button für User. Hierfür schicken wir der View "mio_manage_door.blade.php" das entsprechende Tupel aus dem "RelationsModel.php" mit. In der View fragen wir dann mithilfe des Tupels die Rolle des authentifizierten Benutzers im Zusammenhang mit der Tür ab und blockieren den Button "Add User", falls die Rolle "User" ist. Das Code Beispiel sieht identisch wie bei der Autorisierung des "Manage Rights"-Buttons aus.
In der View "mio_transactions.blade.php" können authentifizierte Benutzer eine Übersicht über alle Transaktionen einer entsprechenden Tür einsehen. Zudem können authentifizierte Benutzer nach einem Benutzernamen und nach einem Datum suchen. User ohne Protokollrecht, können jedoch nur ihre eigenen Transaktionen einsehen und nur nach einem Datum suchen. Um diese Autorisierung zu realisieren, gingen wir sehr ähnlich vor wie bei den bisherigen Autorisierungsmaßnahmen.
###### **Weitere Infos zum Thema Autorisierung**
Viele unserer Views, für die eine Autorisierung erforderlich sind, können über einen entsprechenden URL erreicht werden. Auf die Umsetzung dieser Autorisierungsmaßnahmen, die die Integrität unserer Webapplikation trotz dieser Gefahr gewährleisten, werden wir im 10. Arbeitsauftrag zum Thema Security genauer eingehen. 

---

#### *7. Arbeitsauftrag (17.05.2018): JavaScript - jQuery & AJAX*
###### **JavaScript 1. Use Case**
Wir verwenden an verschiedenen Stellen JavaScript, um unsere Webapplikation dynamisch zu gestalten. In der View "mio_home.blade.php" verwenden wir zum einen JavaScript, um ein Formular anzeigen zu lassen, mit dem ein Client eine Tür hinzufügen kann. Dieses Formular erscheint, wenn ein Client auf den Button "Add Door" klickt. Da Türnamen in unserer Webapplikation nur einmalig vergeben werden, verwenden wir zum anderen ebenfalls in dieser View JavaScript, um eine Fehlermeldung anzeigen zu lassen, falls ein Client einen Türnamen eingibt, der bereits vergeben ist.
<br>Code Beispiel:
```javascript
$("#btn-add-door").click(function () {
    $("#div-manage-clients").hide();
    $("#div-doors").hide();
    $("#btn-add-door").hide();
    $("#btn-close-add-door").show();
    $("#div-add-door-form").show();
});
$("#btn-close-add-door").click(function () {
    $("#div-add-door-form").hide();
    $("#btn-close-add-door").hide();
    $("#div-manage-clients").show();
    $("#div-doors").show();
    $("#btn-add-door").show();
    $("#new-door-id").val("");
});
```
###### **JavaScript 2. Use Case**
Ein weiteres Mal verwenden wir JavaScript in der View "mio_add_user.blade.php". In dieser View kann ein Client neue User oder auch bereits existierende User zu seiner Tür hinzufügen. Hierfür verwenden wir zwei verschiedene Formulare. Eines um einen neuen User zu registrieren und ihn gleichzeitig zu seiner Tür hinzuzufügen. Das Zweite um einen bereits existierenden User seiner Tür hinzuzufügen. Durch einen Klick auf den entsprechenden Button, können unsere Clients das Formular wechseln. Hierfür wenden wir JavaScript an. Ein zweites Mal wenden wir in dieser View JavaScript an, um wie im ersten Anwendungsfall entsprechende Fehlermeldungen anzeigen zu lassen. Es wird mithilfe von JavaScript eine Fehlermeldung angezeigt, falls ein Client einen User hinzufügen möchte, der nicht existiert. Zudem wird eine Fehlermedlung angezeigt, falls ein Client das falsche Passwort für den entsprechenden User eingibt. Und es wird noch ein weiteres Mal eine Fehlermeldung angezeigt, falls ein Client einen User hinzufügen möchte, der bereits ein User der entsprechenden Tür ist. Das Code Beispiel sieht sehr ähnlich wie beim ersten Anwendungsfall aus.
###### **JavaScript - Überprüfungen im Backend**
All diese Überprüfungen aus diesen ersten beiden Anwendungsfällen finden im Backend statt. Daher geben wir im Controller "AddUserController.php" in der Funktion "addExistingUser()" in Abhängigkeit des Ergebnisses der Überprüfung der selben View "mio_add_user.blade.php" eine Variable mit, die den entsprechenden Fehler repräsentiert und rufen dann in der View in 
Abhängigkeit dieser Variable eine entsprechende JavaScript-Datei auf.
<br>Code Beispiel 1:
```php
$hashedPassword = User::where('email', $request->input('email'))->value('password');
if ($hashedPassword == null) 
{
    return view ('mio_add_user', ['door' => $door, 'error' => 'user-not-exists']);
}
if (!Hash::check($request->input('password'), $hashedPassword)) 
{
    return view ('mio_add_user', ['door' => $door, 'error' => 'wrong-password']);
}
$door_id = DoorsModel::where('door_name', $door)->value('id');
$existing_user_id = User::where('email', $request->input('email'))->value('id');
$is_user_already_user = RelationsModel::where('door_id', $door_id)->where('user_id', $existing_user_id)->get();
if ($is_user_already_user->count() > 0) 
{
    return view ('mio_add_user', ['door' => $door, 'error' => 'user-already-exists']);
}
```
Code Beispiel 2:
```php
@if ($error == 'user-already-exists')
    <script type="text/javascript">
        $("#add-new-user").hide();
        $("#not-error").hide();
        $("#wrong-error").hide();
        $("#div-existing-email").hide();
        $("#div-existing-password").hide();
        $("#add-btn").hide();
        $("#add-existing-user").show();
        $("#already-error").show();
        setTimeout(function () {
                $("#already-error").hide();
                $("#div-existing-email").show();
                $("#div-existing-password").show();
                $("#add-btn").show();
            },
            5000
        );
    </script>
@else
...
s. View "mio_add_user.blade.php"
```
###### **JavaScript 3. Use Case**
Ein weiterer Anwendungsfall von JavaScript befindet sich in der View "mio_rights_ext.blade.php". In dieser View bestimmt ein Client an welchen Wochentagen und zu welcher Uhrzeit ein User eine entsprechende Tür öffnen darf. In diesem Fall verhindern wir zum einen mithilfe von JavaScript, dass die Einstellungen in der Datenbank gespeichert werden, falls 
ein Client keinen der Wochentage auswählt und anschließend speichern möchte. Ist dies jedoch der Fall, wird eine entsprechende Fehlermeldung angezeigt. Diese Überprüfung fand im Vergleich zu den bisherigen Anwendungsfällen im Frontend statt.
<br>Code Beispiel 1:
```html
<form action="/home/{{ $door }}/selectuser" class="col-12" onsubmit="return checkValidation()" method="post">
```
Code Beispiel 2:
```javascript
$("#checkboxes-error").hide();
function checkValidation()
{
    if ($(":checkbox:checked").length <= 0) {
        showCheckboxError();
        return false;
    }
    return true;
}
function showCheckboxError()
{
    $("#checkboxes-id").hide();
    $("#checkboxes-error").show();
    setTimeout(function()
        {
            $("#checkboxes-error").hide();
            $("#checkboxes-id").show();
        },
        3000
    );
}
```
Zum anderen verhindern wir in dieser View mithilfe von JavaScript, dass ein Client eine ungültige Zeitspanne angeben kann. Es ist nicht möglich den Beginn der Zeitspanne hinter das Ende der Zeitspanne zu setzen.
<br>Code Beispiel 1:
```html
<div class="slidecontainer">
    <?php
    $from_time = substr($relation_row->from_time, 0, 2);
    $from_time = (integer)$from_time;
    ?>
    <input type="range" min="0" max="24" step="1" value="{{ $from_time }}" class="slider" name="my-from-range" id="my-from-range">
    <p id="time-value-from" class="my-range-value">Error</p>
</div>
<div class="slidecontainer">
    <?php
    if ($relation_row->to_time == '23:59:00') {
        $to_time = 24;
    } else {
        $to_time = substr($relation_row->to_time, 0, 2);
        $to_time = (integer)$to_time;
    }
    ?>
    <input type="range" min="0" max="24" step="1" value="{{ $to_time }}" class="slider" name="my-to-range" id="my-to-range">
    <p id="time-value-to" class="my-range-value">Error</p>
</div>
```
Code Beispiel 2:
```javascript
$("#time-value-from").text($("#my-from-range").val() + " h");
$("#time-value-to").text($("#my-to-range").val() + " h");
$("#my-from-range").on("input", function()
{
    if ($(this).val() >= parseInt($("#my-to-range").val())) {
        $(this).val(parseInt($("#my-to-range").val()) - 1);
    }
    $("#time-value-from").text($(this).val() + " h");
});
$("#my-to-range").on("input", function()
{
    if ($(this).val() <= parseInt($("#my-from-range").val())) {
        $(this).val(parseInt($("#my-from-range").val()) + 1);
    }
    $("#time-value-to").text($(this).val() + " h");
});
```
###### **AJAX Funktionalität**
In userem letzten Anwendungsfall wenden wir in der View "mio_transactions.blade.php" JavaScript in Verbindung mit AJAX an. In dieser View zeigen wir in Form einer Tabelle Transaktionen einer entsprechenden Tür an und ermöglichen es authentifizierten Benutzern nach einem Benutzername und einem Datum zu suchen. Um die bisherige Suche zu einer "Live-Suche" umzuwandeln, erstellten wir zunächst in dem Verzeichnis "/resources/views" den Ordner "ajax". In diesem Ordner erstellten wir dann eine View, die die Tabelle mit aktualisierten Transaktionen anzeigt.
<br>Code Beispiel für die View:
```html
@foreach($transactions as $v)
    <tr>
        <td class="col-2">{{ $v->id }}</td>
        <td class="col-4">{{ $v->user_name }}</td>
        <td class="col-3">{{ $v->entrance_date }}</td>
        <td class="col-3">{{ $v->entrance_time }}</td>
    </tr>
@endforeach
```
Anschließend fügten wir in der View "mio_transactions.blade.php" in den entsprechenden Formularen den Input-Feldern die Eigenschaft "onkeyup" hinzu. Somit wird nach jeder Eingabe des Benutzers eine entsprechende JavaScript-Funktion aufgerufen. Diese JavaScript-Funktion ruft wiederum die jQuery-Funktion "load()" auf. Die "load()"-Funktion bekommt eine URL inklusive Parameter übergeben. Somit wird im "BP_SearchController.php" eine entsprechende Funktion aufgerufen, die die Parameter aus dem Request verarbeitet, entsprechende Transaktionen aus dem "TransactionsModel.php" holt und diese Transaktionen dann der AJAX-View mitgibt. Auf diese Weise wird das Element der View "mio_transaction.blade.php", das innerhalb der JavaScript-Funktion die "load()"-Funktion aufruft, nach jeder Eingabe des Benutzers aktualisiert, ohne dass die Webseite neu geladen wird.
<br>Code Beispiel für die Erweiterung der Input-Felder um die Eigenschaft "onkeyup":
```html
<input id="username-big" type="search" onkeyup="reload_big()" class="form-control" name="username" placeholder="Username ..." autocomplete="off" @if ($protocol_right == 0) disabled @endif>
```
Code Beispiel für die JavaScript-Funktion:
```javascript
function reload_big()
{
    $("#my-agile-tbody").load("transactions/ajax?username=" + $("#username-big").val() + "&date=" + $("#date-big").val());
}
```
Code Beispiel für die entsprechende Route:
```php
Route::get('/home/{door}/transactions/ajax', 'BP_SearchController@filterAJAX')->name('home.managedoor.transactions.ajax');
```
Code Beispiel für die Funktion im Controller:
```php
public function filterAJAX(Request $request, $door)
{      
    $transactions = $this->filterLIKE($request, $door);
    return view('ajax.mio_transactions', ['transactions' => $transactions]);
}
private function filterLIKE(Request $request, $door)
{
    $door_id = DoorsModel::where('door_name', $door)->value('id');
    $username = '%' . $request->input('username') . '%';
    $date = '%' . $request->input('date') . '%';
    return TransactionsModel::where('user_name', 'LIKE', $username)->where('entrance_date', 'LIKE', $date)->where('door_id', $door_id)->get();
}
s. "BP_SearchController.php"
```

---

#### *8. Arbeitsauftrag (07.06.2018): Deployment & Performance*
###### **Deployment**
Zu Beginn dieses Arbeitsauftrages stellten wir gemeinsam mit Ihnen in der Übung unsere 
Webapplikation auf Heroku bereit.
###### **Analyse der Performance mithilfe von YSlow**
Anschließend verwendeten wir YSlow, um die Performance unserer Webapplikation zu analysieren.
###### **Optimierung der Auslieferung der CSS- & JS-Dateien mit LaravelMix**
Um die Performance zu verbessern, führten wir mithilfe der Datei "webpack.mix.js" die beiden CSS-Dateien "mio_styles.css" und "bootstrap.css" zu einer CSS-Datei "mixOfMioAndBootstrap.css" zusammen. Zudem komprimierten wir die Datei "mixOfMioAndBootstrap.css". Ergänzend führten wir all unsere JavaScript-Dateien zu einer einzigen JavaScript-Datei "mixOfMio.js" zusammen und komprimierten diese ebenfalls.
###### **Sonstige Optimierungen der Performance**
Des Weiteren optimierten wir unsere Datenbankzugriffe, um die Performance unserer Webapplikation zu verbessern.

---

#### *9. Arbeitsauftrag (14.06.2018): Search Engine Optimization*
###### **Technical SEO**
Zu Beginn dieses Arbeitsauftrages registrierten wir unsere Webapplikation in der "Google Search Console" und bindeten das von Google bereitgestellte  Meta-Tag in das Template "mio_welcome_app.blade.php" unserer Begrüßungsseite ein. Somit konnte man "Mio" ab sofort auf Google finden. 
Zudem fügten wir eine Beschreibung unserer Webapplikation in den Head des eben erwähnten Templates ein.
```html
<meta name="description" content="Mio - Manage your doors smart. Mio is an access control system that allows modern living and modern home."/>
```
Des Weiteren entwickelten wir, wie am Anfang der Dokumentation bereits beschrieben, Responsive Design für "Mio". Somit wird unsere Webapplikation im "Google Page Rank" tendenziell höher eingestuft, da sie Smartphone freundlich ist.
###### **OnPage SEO**
Um "Mio" möglichst gut finden zu können, überlegten wir uns zunächst ein paar Schlagworte, die höchst wahrscheinlich in der "Google Suche" eingegeben werden, wenn man eine Webappklikation wie "Mio" sucht. Folgende Schlagworte empfanden wir für sinnvoll: "manage doors smart", "modern living", "access control system", "smart home" und "modern home". Anschließend integrierten wir diese Schlagworte in den Titel, in die Beschreibung, in Überschriften und 
in Paragraphen unserer Begrüßungsseite. Ergänzend optimierten wir den Inhalt unserer Begrüßungsseite, indem wir doppelt vorkommende Überschriften oder Paragraphen vermieden.
###### **Social Networks**
Exemplarisch ergänzten wir Social Network Links in unserer Begrüßungsseite.

---

#### *10. Arbeitsauftrag (21.06.2018): Security*
###### **Authentifizierung & Autorisierung**
Bezüglich des Themas Sicherheit stellten wir, wie bereits in der Dokumentation beschrieben, durch eine 
Registrierung sowie durch einen Login sicher, dass ausschließlich authentifizierte Benutzer Zugang zu den 
entsprechenden Views erhalten. Zudem stellten wir sicher, dass authentifizierte Benutzer nur das Lesen und 
Bearbeiten können, wofür sie autorisiert sind.
###### **Mio spezifische Sicherheitsmaßnahmen**
Da in unserer Webapplikation Tür- und Benutzernamen oft über den URL übergeben werden, war es anfangs sehr leicht die Webapplikation zum Absturz zu bringen. Gab man nicht existierende Tür- und Benutzername im URL ein, so konnte man die Rechte eines Benutzers für eine Tür einstellen, obwohl weder die Tür noch der Benutzer existierte. Aus diesem Grund mussten wir zusätzliche Schutzmaßnahmen in unsere Controller integrieren, um die Integrität unserer Webapplikation weiterhin sicherzustellen. Ein Code Beispiel für solch eine Maßnahme sieht wie folgt aus:
```php
if (RelationsModel::where('door_id', $door_id)->where('user_id', $user_id)->get()->count() < 1
    or RelationsModel::where('door_id', $door_id)->where('user_id', Auth::id())->where('role_id', RolesModel::where('name', 'client')->value('id'))->get()->count() < 1) 
{
    return redirect('/home');
}
```
Auf diese Weise wurde zum einen überprüft, ob die Beziehung zwischen Tür und User überhaupt existiert. Zum  anderen aber auch, ob der authentifizierte Benutzer überhaupt das Recht besitzt, die Rechte des Users im Zusammenhang mit dieser Tür zu verwalten.
###### **AJAX Sicherheitsmaßnahmen**
Eine ähnliche Maßnahme führten wir im Zusammenhang mit AJAX durch. Im "BP_SearchController", der die AJAX-Anfragen entgegennimmt, ergänzten wir folgenden Code, um sicherzustellen, dass kein unautorisierter Benutzer über den URL eine Datenbank-Abfrage durchführen kann: 
```php
if (!$request->ajax())
{
    return redirect("/home/$door/transactions");
}
```
###### **Eloquent ORM**
Wir wenden konsequent das Eloquent ORM für die Verwaltung unserer Datenbank an. Durch diese Maßnahme ist "Mio" relativ stark vor SQL-Injections beziehungsweise unerlaubten Datenbankzugriffen geschützt.
###### **Weitere Sicherheitsmaßnahmen**
Eine weitere Sicherheitsmaßnahme war das Festlegen des Typs eines jeden Input-Feldes, in das unsere Benutzer Daten eingeben können. Außerdem wählten wir stets die POST-Methode (bis auf AJAX-Suche), um die in ein Formular eingegebenen Daten unserer Benutzer zu übertragen. Ergänzend bindeten wir ein verstecktes CSRF-Token in jedes unserer Formulare ein. 