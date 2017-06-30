----------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------

JRL-Database-Management-Program

----------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------

ENTWICKLER:

Lars Schmalbach
Jakob Fleischer
Robin Schlaak

----------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------

ZUM PROGRAMM:

Dieses Programm arbeitet mit dem EasyPHP-Devserver17.
Mithilfe der Server dieses Programms verwaltet unser Programm die Dateien, welche mithilfe 
desselben abgelegt wurden über eine MySQL-Datenbank und sorgt somit für eine leichte 
Ablage, wie auch Abfrage der Dateien.

----------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------

ZUR INSTALLATION:

Die Installation des Programms ist in zwei Setup-Dateien aufgeteilt.
Die erste leitet die Installation des erwähnten Devservers ein, bei der der 
Standardinstallationspfad (nach ProgramFiles(x86)) gewählt werden muss.
Nachdem diese Installation erfolgreich abgeschlossen ist es möglich die zweite Setup-Datei
auszuführen, welche nun unser Programm in den Server integriert und eine Desktop-
Verknüpfung erstellt.

HINWEIS: 

Der Ordner mit den Setup.bat-Dateien darf in keinem Ordner liegen, in dem Rechte zur
Änderung und Überschreibung von Dateien vonnöten sind, da die Installation sonst an
der UAC von Windows scheitert.

----------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------

AKTUELLE VERSION:

In der aktuellen Version ist die Desktop-Verknüpfung noch nicht dazu in der Lage selbstständig
die Dateien zum Starten des dbservers und des httpservers zu finden und auszuführen,
da der devserver die Namen der entsprechenden Verzeichnisse bei jeder Installation um eine 
andere Randomzahl ergänzt und wir noch keine Methode gefunden haben diese trotzdem 
zu finden.

Desweiteren treten manchmal noch Probleme bei der Ausführung der JRL-Setup2.bat- Datei auf.
Diese sind komischerweise bei allen Rechnern auf denen der Setup getestet wurde,
bis auf dem Laptop, auf dem dieser programmiert worden ist, vorgekommen.
Eine fehlerhafte Installation erkennt man daran, dass der bin Ordner im Ordner assets
nicht verschoben wurde.
Wenn dies der Fall ist muss er manuell in  den eds-www Ordner des Devservers verschoben werden.

----------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------

