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
desselben abgelegt wurden �ber eine MySQL-Datenbank und sorgt somit f�r eine leichte 
Ablage, wie auch Abfrage der Dateien.

----------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------

ZUR INSTALLATION:

Die Installation des Programms ist in zwei Setup-Dateien aufgeteilt.
Die erste leitet die Installation des erw�hnten Devservers ein, bei der der 
Standardinstallationspfad (nach ProgramFiles(x86)) gew�hlt werden muss.
Nachdem diese Installation erfolgreich abgeschlossen ist es m�glich die zweite Setup-Datei
auszuf�hren, welche nun unser Programm in den Server integriert und eine Desktop-
Verkn�pfung erstellt.

HINWEIS: 

Der Ordner mit den Setup.bat-Dateien darf in keinem Ordner liegen, in dem Rechte zur
�nderung und �berschreibung von Dateien vonn�ten sind, da die Installation sonst an
der UAC von Windows scheitert.

----------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------

AKTUELLE VERSION:

In der aktuellen Version ist die Desktop-Verkn�pfung noch nicht dazu in der Lage selbstst�ndig
die Dateien zum Starten des dbservers und des httpservers zu finden und auszuf�hren,
da der devserver die Namen der entsprechenden Verzeichnisse bei jeder Installation um eine 
andere Randomzahl erg�nzt und wir noch keine Methode gefunden haben diese trotzdem 
zu finden.

----------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------

