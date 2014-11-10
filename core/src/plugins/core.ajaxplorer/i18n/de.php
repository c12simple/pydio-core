<?php
/*
* Copyright 2007-2013 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
* This file is part of Pydio.
*
* Pydio is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* Pydio is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
*
* The latest code can be found at <http://pyd.io/>.
*/
//	german translation: Philip Schädler <philip.schaedler@gmail.com>
//  	+ update: Axel Otterstätter <axel.otterstaetter@googlemail.com>
//  	+ update: Stefan Huber <sh@signalwerk.ch>
//---------------------------------------------------------------------------------------------------

$mess=array(
"languageLabel" => "Deutsch",
"date_format"  => "Y/m/d H:i",
"date_intl_locale" => "de_DE",
"date_relative_date" => "am DATE",
"date_relative_time" => "TIME",
"date_relative_date_format" => "d F Y",
"date_relative_time_format" => "H:i",
"date_relative_today" => "Heute um TIME",
"date_relative_yesterday" => "Gestern um TIME",
"date_relative_tomorrow" => "Morgen at TIME",
"date_relative_days_ago" => "%s Tagen",
"date_relative_days_ahead" => "in %s Tagen",
"byte_unit_symbol" => "b",
"0" => "Aktuelle Version",
"1" => "Dateiname",
"2" => "Größe",
"3" => "Typ",
"4" => "Bearbeitet",
"5" => "Aktion",
"6" => "Umbenennen",
"7" => "Löschen",
"8" => "Verzeichnis",
"9" => "MIDI-Datei",
"10" => "Textdatei",
"11" => "Javascript",
"12" => "GIF-Bild",
"13" => "JPG-Bild",
"14" => "HTML-Datei",
"15" => "HTML-Datei",
"16" => "REAL-Datei",
"17" => "REAL-Datei",
"18" => "PERL-Skript",
"19" => "ZIP-Datei",
"20" => "WAV-Datei",
"21" => "PHP-Skript",
"22" => "PHP-Skript",
"23" => "Datei",
"24" => "Aufwärts",
"25" => "Eine oder mehrere Dateien (max. ".ConfService::getConf('UPLOAD_MAX_NUMBER').") in folgendes Verzeichnis hochladen: ",
"26" => "Erstelle ein neues Verzeichnis in: ",
"27" => "Hochladen",
"28" => "Erstelle neue Datei in: ",
"29" => "Erstellen",
"30" => "Bitte einen Namen für das Verzeichnis eingeben und auf &quot;Erstellen&quot; klicken.",
"31" => "Mindestens eine Datei muss ausgewählt werden",
"32" => "Öffnen",
"33" => "Fehler beim Hochladen!",
"34" => "Die Datei",
"35" => "wurde im Verzeichnis erfolgreich erstellt",
"36" => "Die Größe beträgt",
"37" => "Bitte einen gültigen Namen eingeben",
"38" => "Das Verzeichnis",
"39" => "wurde erstellt in",
"40" => "Dieses Verzeichnis existiert bereits (Groß- und Kleinschreibung wird nicht beachtet)",
"41" => "wurde umbenannt zu",
"42" => "zu",
"43" => "existiert bereits (Groß- und Kleinschreibung wird nicht beachtet)",
"44" => "wurde gelöscht.",
"45" => "Verzeichnis",
"46" => "Datei",
"47" => "Löschen bestätigen von",
"48" => "OK",
"49" => "Abbruch",
"50" => "exe-Datei",
"51" => "Bearbeiten",
"52" => "Datei wird bearbeitet",
"53" => "Speichern",
"54" => "Abbrechen",
"55" => "wurde geändert",
"56" => "BMP-Bild",
"57" => "PNG-Bild",
"58" => "CSS-Datei",
"59" => "MP3-Datei",
"60" => "RAR-Datei",
"61" => "GZ-Datei",
"62" => "Hauptverzeichnis",
"63" => "Abmelden",
"64" => "XLS-Tabelle",
"65" => "Word-Dokument",
"66" => "Kopieren",
"67" => "Ausgewählte Datei",
"68" => "Einfügen in",
"69" => "oder ein anderes Verzeichnis wählen",
"70" => "Verschieben",
"71" => "Diese Datei existiert bereits (Groß- und Kleinschreibung wird nicht beachtet)",
"72" => "Der Pfad zum Hauptverzeichnis ist nicht korrekt. Bitte in der Datei conf/conf.php korrigieren.",
"73" => "wurde kopiert in Verzeichnis",
"74" => "wurde verschoben in Verzeichnis",
"75" => "Die Datei users.txt ist nicht im Verzeichnis privat",
"76" => "Diese Datei wurde entfernt",
"77" => "Senden",
"78" => "Weitergeben",
"79" => "PDF-Datei",
"80" => "MOV-Datei",
"81" => "AVI-Datei",
"82" => "MPG-Datei",
"83" => "MPEG-Datei",
"84" => "Hilfe",
"85" => "Aktualisieren",
"86" => "Schließen",
"87" => "Suche",
"88" => "Download",
"89" => "Die Datei konnte nicht geöffnet werden",
"90" => "Drucken",
"91" => "Flash-Datei",
"92" => "Sprache",
"93" => "Um die Sprache anzupassen, müssen Cookies im Browser zugelassen werden.",
"94" => "Anmelden",
"95" => "Sprache wählen:",
"96" => "Zielordner aus der Verzeichnisliste wählen: ",
"97" => "Datei hochladen",
"98" => "Zum Schliessen irgendwo auf dieses Fenster klicken.",
"99" => "kann nicht gespeichert werden. Dies könnte ein Berechtigungsproblem sein, wenden Sie sich an den Systemadministrator.",
"100"=> "Datei konnte nicht gefunden werden ",
"101"=> "Quell- und Zielordner sind identisch!",
"102"=> "Fehler beim Erstellen der Datei: ",
"103"=> "Ordner wurde nicht gefunden ",
"104"=> "Zum angegebenen Ordner wechseln",
"105"=> "Die URL für den direkten Zugriff auf diesen Ordner versenden.",
"106"=> "Sende E-Mail",
"107"=> "Name oder E-Mail-Adresse: ",
"108"=> "Ziel E-Mail-Adresse: ",
"109"=> "Aufrufbare URL",
"110"=> "Kommentar hinzufügen",
"111"=> "Die folgende E-Mail wurde erfolgreich versendet: ",
"112"=> "Senden der E-Mail fehlgeschlagen: ",
"113"=> "Nichts ausgewählt!",
"114"=> "Ein unbekannter Fehler ist beim Kopieren aufgetreten!",
"115"=> "Die Datei wurde erfolgreich gespeichert",
"116"=> "Dateien",
"117"=> "Der Ordner",
"118"=> "Mehrere Dateien herunterladen",
"119"=> "Zum Herunterladen auf einzelne Dateien klicken.",
"120"=> "Sie haben keine Berechtigung, um die gesamte Verzeichnisstruktur zu löschen!",
"121"=> "Bild Datei ",
"122"=> "Papierkorb",
"123"=> "wurde verschoben nach ",
"124"=> "Bestehende Dateien überschreiben?",
"125"=> "Eine Datei oder ein Ordner mit diesem Namen existiert bereits (Groß- und Kleinschreibung wird nicht beachtet). Bitte wählen Sie einen anderen Namen!",
"126"=> "Symbolansicht",
"127"=> "Größe",
"128"=> "Dateien ausgewählt.",
"129"=> "Ansicht",
"130"=> "Ordner",
"131"=> "Details",
"132"=> "Keine Datei ausgewählt",
"133"=> "Name",
"134"=> "Typ",
"135"=> "Abmessungen",
"136"=> "Größeres Bild anzeigen",
"138"=> "Zuletzt bearbeitet.",
"139"=> "Online bearbeiten",
"140"=> "Verzeichnisinhalt abspielen",
"141"=> "Öffne Ordner",
"142"=> "Angemeldet als ",
"143"=> "Bitte anmelden.",
"144"=> "Nicht angemeldet.",
"145"=> "Meine Lesezeichen",
"146"=> "Lesezeichen löschen",
"147"=> "Lesezeichen",
"148"=> "Aufwärts",
"149"=> "Aktualisieren",
"150"=> "Ansicht",
"151"=> "Ansicht wechseln...",
"152"=> "Lesezeichen",
"153"=> 'Aktuelles Verzeichnis zu "Meine Lesezeichen" hinzufügen',
"154"=> "Neuer Ordner",
"155"=> "Neues Verzeichnis erstellen",
"156"=> "Neue Datei",
"157"=> "Neue Datei erstellen",
"158"=> "Ausgewählte Datei/Ordner umbennen",
"159"=> "Kopieren der Auswahl nach...",
"160"=> "Verschieben der Auswahl nach...",
"161"=> "Auswahl löschen",
"162"=> "Datei bearbeiten",
"163"=> "Anmelden",
"164"=> "Abmelden",
"165"=> "Einstellungen",
"166"=> "Info",
"167"=> "Über Pydio",
"168" => "Anmelden",
"169" => "APPLICATION_TITLE verlassen",
"170" => "Aktueller Ordner",
"parent_access_key" => "A",
"refresh_access_key" => "k",
"list_access_key" => "i",
"thumbs_access_key" => "S",
"bookmarks_access_key" => "z",
"upload_access_key" => "H",
"folder_access_key" => "O",
"file_access_key" => "D",
"rename_access_key" => "U",
"copy_access_key" => "K",
"move_access_key" => "V",
"delete_access_key" => "L",
"edit_access_key" => "b",
"view_access_key" => "c",
"download_access_key" => "n",
"settings_access_key" => "s",
"about_access_key" => "o",
"empty_recycle_access_key" => "e",
"restore_access_key" => "W",
"171" => "Computer durchsuchen",
"172" => "Auswahl",
"173" => "Neuer Ordnername",
"174" => "Name der Datei",
"175" => "Zielordner",
"176" => "Die ausgewählten Dateien/Ordner werden in den Papierkorb verschoben.",
"177" => "Sollen die gewählten Dateien/Ordner wirklich gelöscht werden?",
"178" => "Vorheriges",
"179" => "Nächstes",
"180" => "Bitte den Benutzernamen und das Passwort eingeben",
"181" => "Name",
"182" => "Passwort",
"183" => "Bitte einen vom Quellordner unterschiedlichen Zielordner wählen!",
"184" => "Im aktuellen Ordner und dessen Unterordnern suchen",
"185" => "Suche beenden",
"186" => "Bildvorschau",
"187" => "Online Bearbeitung - ",
"189" => "Meine Einstellungen bearbeiten",
"190" => "Sprache",
"191" => "Standardanzeige",
"192" => "Details",
"193" => "Symbolansicht",
"194" => "Passwort ändern",
"195" => "Benutzereinstellungen",
"196" => "Die gewählte Sprache entspricht nicht der aktuellen Sprache!\\n Soll die Seite neu geladen werden, um die Sprache zu ändern?",
"197" => "Die Benutzereinstellungen wurden erfolgreich gespeichert!\\n\\nFalls das Passwort geändert wurde, ist es beim nächsten Anmelden aktiv.\\n\\nFalls die Sprache geändert wurde, drücken Sie bitte &quot;Neu laden (F5)&quot; des Internet-Browsers.",
"198" => "Neues Passwort",
"199" => "Passwort wiederholen",
"200" => "Speicherort wechseln",
"201" => "Achtung, einige Änderungen wurden nicht gespeichert!\\nOhne Speichern fortfahren?",
"202" => "Achtung, rekursive Kopie!",
"203" => "Der Zielordner ist identischt mit dem Quellordner!",
/* GROUPED SENTENCE : 'the file "filename.ext" exceeds size limit (1Mb)\nIt will not be uploaded.*/
"204" => "Die Datei \"",
"205" => "\" ist größer als die maximal erlaubte Dateigröße (",
"206" => "Mb).\\nDie Datei konnte nicht hochgeladen werden.",
"207" => "Sie haben keine Schreibrechte in diesem Ordner",
"208" => "Sie haben keine Leserechte in diesem Ordner",
"209" => "Ein interner Serverfehler ist aufgetreten, bitte wenden Sie sich an den Systemadministrator!",
"210" => "Das Hochladen ist fehlgeschlagen",
"211" => "Die Datei ist zu groß!",
"212" => "Keine Datei auf dem Server gefunden!",
"213" => "Ein Fehler ist beim Kopieren der Datei in den aktuellen Ordner aufgetreten",
"214" => "Durchsuchen der Dateien",
"215" => "Beginne mit dem Hochladen",
"216" => "Löschen der Warteschlange",
"217" => "Fertig mit dem Löschen",
"218" => "Aus der Warteschlange entfernen",
"219" => "Fertig",
"220" => "Leeren",
"221" => "Papierkorb leeren",
"222" => "Wiederherstellen",
"223" => "Die Datei wird an dem ursprünglichen Ort wiederhergestellt",
"224" => "Wechseln nach",
"225" => "Lesezeichen umbenennen",
"226" => "Liste",
"227" => "Zur Detailansicht wechseln",
"228" => "Symbole",
"229" => "Zur Symbol-/Miniaturansicht wechseln",
"230" => "Diashow",
"231" => "Diashow starten",
"232" => "Stop",
"233" => "Diashow stoppen",
"234" => "Bilder anzeigen",
"235" => "Vollbild",
"236" => "Wiederherstellen",
"237" => "Altes Passwort",
"238" => "Die Passwörter sind unterschiedlich!",
"239" => "Bitte das aktuelle Passwort eingeben!",
"240" => "Falsches Passwort!",
"241" => "Die Voreinstellungen wurden erfolgreich gespeichert!",
"242" => "SVN-Logdatei",
"svn_log_access_key" => "g",
"243" => "Versionsstand",
"244" => "Autor",
"245" => "Datum",
"246" => "Meldung",
"247" => "Entpacken",
"248" => "Ausgewählte Dateien entpacken nach...",
"249" => "Benutzerverwaltung",
"250" => "Verzeichnisverwaltung",
"251" => "Log-Dateien",
"252" => "Maximal erlaubte Dateigröße erreicht.",
"253" => "Ein HTTP-Fehler ist aufgetreten:",
"254" => "Ein Ein-/Ausgabefehler ist aufgetreten:",
"255" => "Ein Sicherheitsfehler ist aufgetreten:",
"256" => "Hochladen",
"257" => "Entfernen",
"258" => "Anzahl der Dateien:",
"259" => "Gesamtgröße:",
"260" => "bytes",
"261" => "Auf diesem Computer merken.",
"262" => "Eine oder mehrere Dateien \\nexistieren im Zielverzeichnis!",
"263" => "Überschreiben",
"264" => "Überspringen",
"265" => "Dateien",
"266" => "B",
"267" => "Anlegen",
"268" => "Eine neue Tabelle anlegen",
"269" => "Struktur",
"270" => "Tabellenstruktur bearbeiten",
"271" => "Verwerfen",
"272" => "Offene Tabelle verwerfen",
"273" => "Einfügen",
"274" => "Neuen Datensatz einfügen",
"275" => "Wollen Sie die ausgewählten Tabellen wirklich löschen?",
"276" => "Ausgewählte Datensätze bearbeiten",
"277" => "Ausgewählte Datensätze löschen",
"278" => "Wollen Sie die ausgewählten Datensätze wirklich löschen?",
"279" => "Tabellen",
"280" => "Datensätze",
"281" => "Grenzen",
"282" => "Größe pro Datei",
"283" => "Gesamtgröße",
"284" => "Anzahl Dateien",
"285" => "Der Benutzer wurde nicht gefunden, bitte erneut versuchen!\\n Stellen Sie sicher, dass Caps-Lock nicht aktiviert ist!",
"286" => "Der Benutzer ist nicht mit der installierten Version kompatibel, bitte verwenden Sie die Upgrade-Funktion.",
"287" => "Dateirechte",
"288" => "Benutzer",
"289" => "Gruppe",
"290" => "Alle",
"291" => "Rekursiv übernehmen?",
"292" => "Teilen",
"293" => "Für diese Datei einen öffentlichen Link erstellen",
"294" => "Gültigkeit des Links (in Tagen) und Passwort (nichts Eintragen für bisheriges)",
"295" => "Gültigkeit",
"296" => "Bitte den untenstehenden Link kopieren:",
"297" => "Neuer Benutzer",
"298" => "Neuen Benutzer anlegen",
"299" => "Neue Arbeitsumgebung",
"300" => "Neue Arbeitsumgebung anlegen",
"create_repo_accesskey" => "R",
"create_user_accesskey" => "t",
"301" => "Konfiguration ändern",
"302" => "Als Text kopieren",
"303" => "Den Text durch Tabs getrennt kopieren.",
"304" => "Zurück",
"305" => "Zurück zur Hauptseite",
"306" => "Zu viele Ordner",
"307" => "Optionale Felder ausfüllen",
"308" => "Link erzeugen",
"309" => "Erzeugen",
"310" => "Optionen",
"311" => "Eine neue Datei automatisch hochladen",
"312" => "Optionen zum Upload",
"313" => "Komprimieren...",
"314" => "Auswahl als Zip-Datei komprimieren...",
"315" => "Auswahl komprimieren nach",
"316" => "Öffnen mit...",
"open_with_access" => "f",
"317" => "Quelltextbetrachter",
"318" => "CodePress Quelltextbetrachter",
"319" => "HTML Editor",
"320" => "WYSIWYG Editor für HTML",
"321" => "Auswählen",
"322" => "Die aktuelle Datei auswählen",
"323" => "URL per E-Mail",
"324" => "Kein Editor verfügbar",
"325" => "Größe anpassen",
"326" => "Ohne Anpassung",
"327" => "100%",
"328" => "IMagick Viewer",
"329" => "PDF,SVG und TIF online anzeigen",
"330" => "Bitte warten, die Seiten werden gerendert...",
"331" => "Seite",
"332" => "von",
"333" => "Pixlr Bildbearbeitung",
"334" => "mehr",
"335" => "Bitte eine Seitenzahl eingeben zwischen 1 und ",
"336" => "Es können nur Dateien, keine Verzeichnisse abgelegt werden!",
"337" => "Upload automatisch starten",
"338" => "Beendeten Upload schließen",
"339" => "Vorherige Datei",
"340" => "Fragen",
"341" => "Datei-Info",
"342" => "Verzeichnis-Info",
"343" => "Bild-Info",
"344" => "Suchen nach",
"345" => "Es wurden keine Versionsinformationen gefunden",
"346" => "Die Version ist auf dem aktuellsten Stand",
"347" => "Eine neue Version (%s) ist verfügbar! Besuchen Sie %s",
"348" => "Eine neue Arbeitsumgebung wurde freigegeben.",
"349" => "Warnung! Es fehlen Parameter",
"350" => "Ein Benutzer mit diesem Namen existiert bereits. Bitte wählen Sie einen anderen Namen.",
"351" => "Es ist nicht erlaubt Elemente freizugeben.",
"352" => "Eine Arbeitsumgebung mit diesem Namen existiert bereits. Bitte wählen Sie einen anderen Namen.",
"353" => "Ziel-Benutzer",
"354" => "Einen neuen Benutzer anlegen oder einen vorhandenen aus der Liste wählen.",
"355" => "Benutzername",
"356" => "Benutzerpasswort",
"357" => "Ziel-Arbeitsumgebung",
"358" => "Wählen Sie einen Namen für das freigegebene Element und legen Sie die Zugriffsrechte für die Benutzer fest.",
"359" => "Markierung",
"360" => "Rechte",
"361" => "Lesen",
"362" => "Schreiben",
"363" => "Freigegebene Elemente",
"364" => "Für diese Operation fehlt die Berechtigung",
"365" => "Es dürfen nicht mehr als %s Dateien auf einmal hochgeladen werden.",
"366" => "Dieser Benutzer hat keine aktiven Arbeitsumgebungen.",
"367" => "Dieser Dateityp ist beim Hochladen nicht erlaubt. Bitte nur folgende Typen verwenden: ",
"368" => "Die Auswahl wurde erfolgreich aus dem Archive %s in das Verzeichnis %s extrahiert.",
"369" => "APPLICATION_TITLE Link",
"370" => "APPLICATION_TITLE Öffentlicher Download",
"371" => "Für diesen Download wird ein Passwort benötigt",
"372" => "Aktuelle Arbeitsumgebung",
"373" => "Ziel",
"374" => "Ordner können nicht zwischen Arbeitsumgebungen kopiert werden",
"375" => "Achtung, inaktivität seit mehr als __IDLE__, ein automatischer Logout erfolgt nach __LOGOUT__",
"376" => "Zum Zurücksetzen irgendwo klicken",
"378" => "Achtung! Sie haben entweder ein leeres, oder ein zu kurzes Passwort eingegeben!",
"379" => "Unsichers Wort!",
"380" => "Zu kurz",
"381" => "Sehr unsicher",
"382" => "Unsicher",
"383" => "Medium",
"384" => "Sicher",
"385" => "Sehr sicher",
"386" => "Drei Loginversuche sind fehlgeschlagen.\\nZur Sicherheit bitte das Wort im Bild eingeben.",
"389" => "Bitte den untenstehenden Code lesen:",
"390" => "Code",
"391" => "Keine Arbeitsumgebungen",
"392" => "Achtung, die Version des APPLICATION_TITLE hat sich geändert (jetzt %s). Bitte den Browser-Cache leeren und die Seite neu laden!",
"393" => "Achtung, der Name muss kürzer als %s sein, dieser Dateiname wird abgeschnitten!",
"394" => "Entschuldigung, aber zur Zeit ist das Teilen der Verzeichnisse (sharing) aufgrund des aktuellen Authentifizierungstreiber nicht möglich (Benutzer können nicht verändert werden). Aber das Datei-Sharing funktioniert.",
"395" => "Das fallengelassene Element scheint ein Ordner zu sein, aber Verzeichnisse können nicht zum Server hochgeladen werden! Soll der Upload trotzdem gestartet werden?",
"396" => "Auth. Methode",
"397" => "Download segmentiert",
"398" => "Download der ausgewählten Dateien in einzelnen Segmenten",
"399" => "Geben Sie die Anzahl der Dateisegmente an, klicken Sie auf den Knopf und wählen Sie die entsprechende Datei zum Download aus.",
"400" => "Anzahl der Segmente:",
"401" => "Laden Sie die folgende Software herunter und installieren Sie sie, um die einzelnen Segmente zusammen zufügen: ",
"402" => "http://www.hjsplit.org/",
"403" => "WebDAV Voreinstellungen",
"404" => "Das WebDAV-Protokoll kann verwendet werden, um die APPLICATION_TITLE Arbeitsumgebungen als 'Netzwerklaufwerk' unter Windows, Mac, iPhone usw. zu nutzen.",
"405" => "Nutzen Sie die folgenden URLs um auf die Arbeitsumgebungen mit ihren eingegebenen Benutzernamen und Passwort zu zugreifen. Achtung, die Freigabe arbeitet nur, wenn diese auf 'Aktiv' gesetzt ist und das Passwort eingegeben wurde.",
"406" => "Aktiviere die WebDAV-Freigaben",
"407" => "Bitte das Passwort eingeben, wenn die WebDAV-Freigaben zum ersten Mal aktiviert werden oder ein neues Passwort verwendet werden soll:",
"408" => "WebDAV-Freigaben erfolgreich aktiviert, falls es die erste Aktivierung ist, bitte nicht vergessen das Passwort zu aktualisieren!",
"409" => "WebDAV-Freigaben erfolgreich deaktiviert",
"410" => "WebDAV-Passwort erfolgreich aktualisiert",
"411" => "Öffnen",
"412" => "Nur Hochladen",
"413" => "Freigegeben von",
"414" => "Benutzen Sie die Pfeile zum Navigieren und die +/- Symbole zum Ändern der Grösse.",
"415" => "Die linke Seite Ein- und Ausschalten",
"416" => "Linke Seite",
"leftpane_accesskey" => "L",
"417" => "Arbeitsumgebung hinzufügen...",
"418" => "Eigene Arbeitsumgebung erstellen",
"419" => "Lade Vorlagen...",
"420" => "Vorlagen",
"421" => "Neu %s",
"422" => "Bitte geben Sie die erforderlichen Parameter an. Fahren Sie mit der Maus über die Titel um weitere Informationen zu erhalten.",
"423" => "Arbeitsumgebung löschen",
"424" => "Arbeitsumgebung wirklich löschen? Das Löschen kann nicht rückgängig gemacht werden.",
"425" => "Die Arbeitsumgebung wurde erstellt und Ihrer Arbeitsumgebungen-Liste hinzugefügt. Falls es wieder gelöscht werden soll, wechseln Sie auf eine andere Arbeitsumgebung und klicken dann auf das rote Kreuz neben Arbeitsumgebungsnamen.",
"426" => "Es ist ein Fehler beim Erstellen der Arbeitsumgebung aufgetreten.",
"427" => "Es ist ein Fehler beim Löschen der Arbeitsumgebung aufgetreten.",
"428" => "Die Arbeitsumgebung wurde gelöscht.",
"429" => "Dies gibt an, wie die Arbeitsumgebung in der Liste dargestellt wird.",
"430" => "Standard Dateien",
"431" => "Beispiel Template",
"432" => "Meine Dateien",
"433" => "bereit",
"434" => "senden",
"435" => "fertig",
"436" => "Fehler",
"437" => "Oh, es scheint, dass das Sicherheitstoken abgelaufen ist! Bitte %s durch drücken von Neuladen oder F5 im Browser!",
"438" => "Neuladen der Seite",
"439" => "Hauptoptionen",
"440" => "Ja",
"441" => "Nein",
"442" => "Mein Account",
"443" => "Persönliche Informationen aktualisieren",
"444" => "Bitte das Passwort neu setzen, ansonsten ist ein erneutes Anmelden nicht möglich.",
"445" => "Sie wurden ausgeloggt, bitte mit dem neuen Passwort erneut anmelden, Danke!",
"446" => "Präsentation",
"447" => "Meine Gruppe",
"448" => "Benutzer erstellen",
"449" => "erstelle %s, wähle ein Passwort",
"450" => "Sortieren nach ...",
"451" => "Sortiere Thumbnails nach ...",
"452" => "Thumbnails Größe",
"453" => "Setze Grösse der Thumbnails",
"454" => "Dateien von PC auswählen",
"455" => "Meine Arbeitsumgebung",
"456" => "Mehr",
"457" => "update",
"458" => "löschen",
"459" => "Hauptordner",
"460" => "Details",
"461" => "Zur Detailansicht wechseln",
"detail_access_key" => "D",
"462" => "Vorschau",
"preview_access_key" => "r",
"463" => "Alle herunterladen",
"464" => "Alle Arbeitsumgebungsinhalte auf einmal herunterladen (gezippt)",
"465" => "Zeigen alternative URLs (momentane Arbeitsumgebung)",
"466" => "Lade...",
"467" => "Alle geteilten Inhalte",
"468" => "Meine Arbeitsumgebung",
"469" => "Mit mir Geteilt",
"470" => "Erstellt %date",
"471" => "Erstellt von %user %date",
"472" => "Geteilt von %user",
"473" => "Geteilt von %user %date",
"474" => "Keine Beschreibung verfügbar",
"475" => "Für alle Benutzer freigegeben",
"476" => "Ihre persöhnliche Arbeitsumgebung",
"477" => "Datei oder Ordner wählen um deren Details hier zu sehen",
"478" => "Keine Ergebnisse gefunden",
"479" => "Passwort vergessen?",
"480" => "Alle Ordner der aktuellen Arbeitsumgebung anzeigen.",
"481" => "Alle freigegebenen Dateien und Ordner",
"482" => "Schnellzugriff auf vorgemerkte Dinge",
"483" => "Sie sind nicht autorisiert zusätzliche Benutzer zu erstellen!",
"484" => "Benutzer erstellen",
"485" => "Erstelle ein gemeinsamer Benutzer",
"486" => "Erweitert",
"487" => "Einfach",
"488" => "Erweiterte Filter",
"489" => "Metadaten",
"490" => "Zeitraum",
"491" => "Nach",
"492" => "bis",
"493" => "Heute",
"494" => "Gestern",
"495" => "Letzte Woche",
"496" => "Letzten Monat",
"497" => "Letztes Jahr",
"498" => "Dokumenteeigenschaften",
"499" => "Datei",
"500" => "Erweiterung",
"501" => "oder",
"502" => "Ordner",
"503" => "Grösse",
"504" => "1k,1M,1G",
"505" => "bis",
"506" => "Einstellungen der Anwendung (Benutzer, Arbeitsumgebungen, Konfigurationen)",
"507" => "Willkommen bei %s",
"508" => "Wir erstellten ein Konto für dich bei %s. Um sich zu verbinden bitte folgenden Link klicken %link und mit diesen Zugangsdaten einloggen:  <br><br> Login: %user <br><br> Passwort: %pass",
"509" => "Aktuelle Benutzerliste als persöhnliches Team speichern",
"510" => "Bitte eine Markierung für das Team eingeben",
"511" => "Mein(e) %s",
"512" => "Vollbildanzeige",
"513" => "anzeigen",
"514" => "verbergen",
"515" => "Keine Lesezeichen! Dateien oder Ordner für den Schnellzugriff per Drag und Drop hinzufügen.",
"516" => "ausklappen",
"517" => "einklappen",
"518" => "Sie könnnen auch eine <a class='create_file_alt_link'>leere Datei erstellen</a>.",
"519" => "Benutzer akualisieren",
"520" => "Kontoangaben und Passwort aktualsiere",
"521" => "Benutzerkonto erfolgreich aktualisiert",
"522" => "Benutzer-ID",
"523" => "Passwort",
"524" => "Passwort ändern",
"525"=> "Originalbild anzeigen",
"526"=> "Niedrig aufgelöste Version zur schnellen Anzeige",
"527"=> "Geteilt mit",
"528"=> "Interne Benutzer",
"530"=> "Externe Benutzer",
"531"=> "Int.",
"532"=> "Ext.",
"plugtype.title.access" => "Arbeitsumgebung Treiber",
"plugtype.desc.access" => "Plugins defining how a workspace will both access its backend (a file storage or whatever else) and major layouts and actions.",
"plugtype.title.action" => "Action plugins",
"plugtype.desc.action" => "Feature oriented plugins for various aspects",
"plugtype.title.authfront" => "Authentication Frontends",
"plugtype.desc.authfront" => "Methods for gathering identification credentials (web form, api key, etc)",
"plugtype.title.cypher" => "Encryption Tools",
"plugtype.desc.cypher" => "Data encryption plugins",
"plugtype.title.editor" => "Editors",
"plugtype.desc.editor" => "Viewers or editors for wide range of mime types",
"plugtype.title.gui" => "Graphical User Interface",
"plugtype.desc.gui" => "Main web interface and its declinations",
"plugtype.title.index" => "Indexation",
"plugtype.desc.index" => "Tools for indexing data and providing quick search option",
"plugtype.title.meta" => "Workspace Meta Aspects",
"plugtype.desc.meta" => "Additionnal features to be added to the workspaces",
"plugtype.title.metastore" => "Metadata Storage",
"plugtype.desc.metastore" => "Various implementations for storing metadata along with files and folders",
"plugtype.title.shorten" => "URL Shortening",
"plugtype.desc.shorten" => "Webservices bridges for shortening public links",
"plugtype.title.uploader" => "Uploaders",
"plugtype.desc.uploader" => "Implementation of uploaders using various technologies (html, js, java...)",
"plugtype.title.auth" => "Authentication Backends",
"plugtype.desc.auth" => "How users data are stored in the backend",
"plugtype.title.boot" => "Loader",
"plugtype.desc.boot" => "Unique plugin for loading the framework.",
"plugtype.title.conf" => "Configuration Storage",
"plugtype.desc.conf" => "How configuration data are stored in the backend",
"plugtype.title.feed" => "Events Feed Storage",
"plugtype.desc.feed" => "Implementations for storing data events (only SQL yet)",
"plugtype.title.log" => "Loggers",
"plugtype.desc.log" => "Send application logs to various channels",
"plugtype.title.mailer" => "Mailers",
"plugtype.desc.mailer" => "Tools for letting the application send emails",
"plugtype.title.mq" => "Instant Messaging",
"plugtype.desc.mq" => "Implementations of a simple PUB/SUB server",
/* END SENTENCE */
);