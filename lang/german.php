<?php

	/**
	 * German Language file for phpPgAdmin.
	 * @maintainer H. Etzel [hetzel.devel@web.de]
	 *
	 * $Id: german.php,v 1.8 2003/04/28 11:50:16 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = 'Deutsch';
	$lang['appcharset'] = 'ISO-8859-1';
	$lang['applocale'] = 'de_DE';

	// Basic strings
	$lang['strintro'] = 'Willkommen bei phpPgAdmin.';
	$lang['strlogin'] = 'Einloggen';
	$lang['strloginfailed'] = 'Einloggen fehlgeschlagen';
	$lang['strserver'] = 'Server';
	$lang['strlogout'] = 'Ausloggen';
	$lang['strowner'] = 'Besitzer';
	$lang['straction'] = 'Aktion';
	$lang['stractions'] = 'Aktionen';
	$lang['strname'] = 'Name';
	$lang['strdefinition'] = 'Definition';
	$lang['stroperators'] = 'Operatoren';
	$lang['straggregates'] = 'Aggregationen';
	$lang['strproperties'] = 'Eigenschaften';
	$lang['strbrowse'] = 'Durchsuchen';
	$lang['strdrop'] = 'L�schen';
	$lang['strdropped'] = 'Gel�scht';
	$lang['strnull'] = 'Null';
	$lang['strnotnull'] = 'Not Null';
	$lang['strprev'] = 'zur�ck';
	$lang['strnext'] = 'weiter';
	$lang['strfailed'] = 'misslungen';
	$lang['strcreate'] = 'Erzeugen';
	$lang['strcreated'] = 'Erzeugt';
	$lang['strcomment'] = 'Kommentar';
	$lang['strlength'] = 'L�nge';
	$lang['strdefault'] = 'Vorgabe';
	$lang['stralter'] = '�ndern';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Abbruch';
	$lang['strsave'] = 'Speichern';
	$lang['strreset'] = 'Zur�cksetzen';
	$lang['strinsert'] = 'Einf�gen';
	$lang['strselect'] = 'Select-Abfrage';
	$lang['strdelete'] = 'L�schen';
	$lang['strupdate'] = 'Aktualisieren';
	$lang['strreferences'] = 'Referenzen';
	$lang['stryes'] = 'Ja';
	$lang['strno'] = 'Nein';
	$lang['stredit'] = 'Bearbeiten';
	$lang['strcolumns'] = 'Spalten';
	$lang['strrows'] = 'Zeile(n)';
	$lang['strexample'] = 'z.B.';
	$lang['strback'] = 'Zur�ck';
	$lang['strqueryresults'] = 'Abfrageergebnis';
	$lang['strshow'] = 'Zeigen';
	$lang['strempty'] = 'Leeren';
	$lang['strlanguage'] = 'Sprache';
	$lang['strencoding'] = 'Codierung';
	$lang['strvalue'] = 'Wert';
	$lang['strunique'] = 'eindeutig';
	$lang['strprimary'] = 'Prim�r';
	$lang['strexport'] = 'Exportieren';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'Go';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analysieren';
	$lang['strcluster'] = 'Cluster';
	$lang['strreindex'] = 'Reindizierung';
	$lang['strrun'] = 'Los';
	$lang['stradd'] = 'Hinzuf�gen';
	$lang['strevent'] = 'Ereignis';
	$lang['strwhere'] = 'wo';
	$lang['strinstead'] = 'mache stattdessen';
	$lang['strwhen'] = 'Wann';
	$lang['strformat'] = 'Format';

        // Error handling
	$lang['strnoframes'] = 'F�r dieses Programm wird ein ein Frame-f�higer Browser ben�tigt.';
	$lang['strbadconfig'] = 'Ihre config.inc.php ist nicht aktuell. Sie m�ssen die aus der config.inc.php-dist neu erzeugen.<br/>(Siehe auch INSTALL im Installationsverzeichnis von phpPgAdmin)';
	$lang['strnotloaded'] = 'Ihre PHP - Installation besitzt keine Datenbankunterst�tzung.';
	$lang['strbadschema'] = 'Unzul�ssiges Schema angegeben.';
	$lang['strbadencoding'] = 'Abbruch beim Setzen der Benutzer-Codierung in der Datenbank.';
	$lang['strsqlerror'] = 'SQL Fehler:';
	$lang['strinstatement'] = 'In Anweisung:';
	$lang['strinvalidparam'] = 'Unz�l�ssige Scriptparameter.';
	$lang['strnodata'] = 'Keine Zeilen gefunden.';

	// Tables
	$lang['strtable'] = 'Tabelle';
	$lang['strtables'] = 'Tabellen';
	$lang['strshowalltables'] = 'Zeige alle Tabellen';
	$lang['strnotables'] = 'Keine Tabellen gefunden.';
	$lang['strnotable'] = 'Keine Tabelle gefunden.';
	$lang['strcreatetable'] = 'Neue Tabelle erzeugen';
	$lang['strtablename'] = 'Tabellenname';
	$lang['strtableneedsname'] = 'Sie m�ssen f�r die Tabelle einen Namen angeben.';
	$lang['strtableneedsfield'] = 'Sie m�ssen mindestens ein Feld angeben.';
	$lang['strtableneedscols'] = 'Sie m�ssen eine zul�ssige Anzahl an Spalten angeben.';
	$lang['strtablecreated'] = 'Tabelle erzeugt.';
	$lang['strtablecreatedbad'] = 'Ergeugen der Tabelle fehlgeschlagen.';
	$lang['strconfdroptable'] = 'Sind Sie sicher, dass Sie die Tabelle "%s" l�schen m�chten?';
	$lang['strtabledropped'] = 'Tabelle gel�scht.';
	$lang['strtabledroppedbad'] = 'L�schen der Tabelle fehlgeschlagen.';
	$lang['strconfemptytable'] = 'Sind Sie sicher, dass Sie den Tabelleninhalt der Tabelle "%s" l�schen m�chten?';
	$lang['strtableemptied'] = 'Tabelleninhalt gel�scht.';
	$lang['strtableemptiedbad'] = 'L�schen des Tabelleninhaltes fehlgeschlagen.';
	$lang['strinsertrow'] = 'Zeile einf�gen';
	$lang['strrowinserted'] = 'Zeile eingef�gt.';
	$lang['strrowinsertedbad'] = 'Einf�gen der Zeile fehlgeschlagen.';
	$lang['streditrow'] = 'Zeile bearbeiten';
	$lang['strrowupdated'] = 'Zeile aktualisiert.';
	$lang['strrowupdatedbad'] = 'Aktualisieren der Zeile fehlgeschlagen.';
	$lang['strdeleterow'] = 'Zeile l�schen';
	$lang['strconfdeleterow'] = 'Sind Sie sicher, dass Sie diese Zeile l�schen m�chten?';
	$lang['strrowdeleted'] = 'Zeile gel�scht.';
	$lang['strrowdeletedbad'] = 'L�schen der Zeile fehlgeschlagen.';
	$lang['strsaveandrepeat'] = 'Speichern und Wiederholen';
	$lang['strfield'] = 'Feld';
	$lang['strfields'] = 'Felder';
	$lang['strnumfields'] = 'Anz. der Felder';
	$lang['strfieldneedsname'] = 'Sie m�ssen f�r das Feld einen Namen angeben';
	$lang['strselectneedscol'] = 'Sie m�ssen mindestens eine Spalte anzeigen lassen';
	$lang['straltercolumn'] = 'Spalte �ndern';
	$lang['strcolumnaltered'] = 'Spalte ge�ndert.';
	$lang['strcolumnalteredbad'] = '�ndern der Spalte fehlgeschlagen.';
        $lang['strconfdropcolumn'] = 'Sind Sie sicher, dass Sie die Spalte "%s" aus der Tabelle "%s" l�schen m�chten?';
	$lang['strcolumndropped'] = 'Spalte gel�scht.';
	$lang['strcolumndroppedbad'] = 'L�schen der Spalte fehlgschlagen.';
	$lang['straddcolumn'] = 'Spalte hinzuf�gen';
	$lang['strcolumnadded'] = 'Spalte hinzugef�gt.';
	$lang['strcolumnaddedbad'] = 'Hinzuf�gen der Spalte fehlgeschlagen.';
	$lang['strschemaanddata'] = 'Schema  Daten';
	$lang['strschemaonly'] = 'nur Schema';
	$lang['strdataonly'] = 'nur Daten';

	// Users
	$lang['struseradmin'] = 'Benutzer-Administration';
	$lang['struser'] = 'Benutzer';
	$lang['strusers'] = 'Benutzer';
	$lang['strusername'] = 'Benutzername';
	$lang['strpassword'] = 'Password';
	$lang['strsuper'] = 'Superuser?';
	$lang['strcreatedb'] = 'DB erzeugen?';
	$lang['strexpires'] = 'G�ltig bis';
	$lang['strnousers'] = 'Keine Benutzer gefunden.';
        $lang['struserupdated'] = 'Benutzer aktualisiert.';
	$lang['struserupdatedbad'] = 'Aktualisieren des Benutzers fehlgeschlagen.';
	$lang['strshowallusers'] = 'Zeige alle Benutzer';
	$lang['strcreateuser'] = 'Erzeuge Benutzer';
	$lang['strusercreated'] = 'Benutzer erzeugt.';
	$lang['strusercreatedbad'] = 'Erzeugen des Benutzers fehlgeschlagen.';
	$lang['strconfdropuser'] = 'Sind Sie sicher, dass Sie den Benutzer "%s" l�schen m�chten?';
	$lang['struserdropped'] = 'Benutzer gel�scht.';
	$lang['struserdroppedbad'] = 'L�schen des Benutzers fehlgeschlagen.';

	// Groups
	$lang['strgroupadmin'] = 'Gruppen-Administration';
	$lang['strgroup'] = 'Gruppe';
	$lang['strgroups'] = 'Gruppen';
	$lang['strnogroup'] = 'Gruppe nicht gefunden.';
	$lang['strnogroups'] = 'Keine Gruppen gefunden.';
	$lang['strcreategroup'] = 'Gruppe erzeugen';
	$lang['strshowallgroups'] = 'Alle Gruppen anzeigen';
	$lang['strgroupneedsname'] = 'Sie m�ssen f�r die Gruppe einen Namen angeben.';
	$lang['strgroupcreated'] = 'Gruppe erzeugt.';
	$lang['strgroupcreatedbad'] = 'Erzeugen der Gruppe fehlgeschlagen.';
	$lang['strconfdropgroup'] = 'Sind Sie sicher, dass Sie die Gruppe "%s" l�schen m�chten?';
	$lang['strgroupdropped'] = 'Gruppe gel�scht.';
	$lang['strgroupdroppedbad'] = 'L�schen der Gruppe fehlgeschlagen.';
	$lang['strmembers'] = 'Mitglieder';

	// Privilges
	$lang['strprivilege'] = 'Privilegie';
	$lang['strprivileges'] = 'Privilegien';
	$lang['strnoprivileges'] = 'Dieses Objekt hat keine Privilegien.';
	$lang['strgrant'] = 'Privilegien geben';
	$lang['strrevoke'] = 'Privilegien entziehen';
	$lang['strgranted'] = 'Privilegien vergeben.';
	$lang['strgrantfailed'] = 'Vergeben von Privilegien fehlgeschlagen.';
	$lang['strgrantuser'] = 'Privilegien Benutzer geben';
	$lang['strgrantgroup'] = 'Privilegien Gruppe geben';

	// Databases
	$lang['strdatabase'] = 'Datenbank';
	$lang['strdatabases'] = 'Datenbanken';
	$lang['strshowalldatabases'] = 'Zeige alle Datenbanken';
	$lang['strnodatabase'] = 'Keine Datenbank gefunden.';
	$lang['strnodatabases'] = 'Keine Datenbanken gefunden.';
	$lang['strcreatedatabase'] = 'Datenbank erzeugen';
	$lang['strdatabasename'] = 'Datenbank Name';
	$lang['strdatabaseneedsname'] = 'Sie m�ssen f�r die Datenbank einen Namen angeben.';
	$lang['strdatabasecreated'] = 'Datenbank erzeugt.';
	$lang['strdatabasecreatedbad'] = 'Erzeugen der Datenbank fehlgeschlagen.';
	$lang['strconfdropdatabase'] = 'Sind Sie sicher, dass Sie die Datenbank "%s" l�schen m�chten?';
	$lang['strdatabasedropped'] = 'Datenbank gel�scht.';
	$lang['strdatabasedroppedbad'] = 'L�schen der Datenbank fehlgeschlagen.';
	$lang['strentersql'] = 'Auszuf�hrenden SQL-Code eingeben:';
	$lang['strvacuumgood'] = 'Vacuum abgeschlossen.';
	$lang['strvacuumbad'] = 'Vacuum fehlgeschlagen.';
	$lang['stranalyzegood'] = 'Analysieren abgeschlossen.';
	$lang['stranalyzebad'] = 'Analysieren fehlgeschlagen.';

	// Views
	$lang['strview'] = 'Sicht';
	$lang['strviews'] = 'Sichten';
	$lang['strshowallviews'] = 'Zeige alle Sichten';
	$lang['strnoview'] = 'Kein Sicht gefunden.';
	$lang['strnoviews'] = 'Keine Sichten gefunden.';
	$lang['strcreateview'] = 'Sicht erzeugen';
	$lang['strviewname'] = 'Sicht Name';
	$lang['strviewneedsname'] = 'Sie m�ssen f�r die Sicht einen Namen angeben.';
	$lang['strviewneedsdef'] = 'Sie m�ssen f�r die Sicht eine Definition angeben.';
	$lang['strviewcreated'] = 'Sicht erzeugt.';
	$lang['strviewcreatedbad'] = 'Erzeugen der Sicht fehlgeschlagen.';
	$lang['strconfdropview'] = 'Sind Sie sicher, dass Sie die Sicht "%s" l�schen m�chten?';
	$lang['strviewdropped'] = 'Sicht gel�scht.';
	$lang['strviewdroppedbad'] = 'L�schen der Sicht fehlgeschlagen.';
	$lang['strviewupdated'] = 'Sicht aktualisiert.';
	$lang['strviewupdatedbad'] = 'Aktualisieren der Sicht fehlgeschlagen.';

	// Sequences
	$lang['strsequence'] = 'Sequenz';
	$lang['strsequences'] = 'Sequenzen';
	$lang['strshowallsequences'] = 'Zeige alle Sequenzen';
	$lang['strnosequence'] = 'Keine Sequenz gefunden.';
	$lang['strnosequences'] = 'Keine Sequenzen gefunden.';
	$lang['strcreatesequence'] = 'Erzeuge Sequenz';
	$lang['strlastvalue'] = 'Letzer Wert';
	$lang['strincrementby'] = 'Erh�hung um';
	$lang['strstartvalue'] = 'Startwert';
	$lang['strmaxvalue'] = 'Max. Wert';
	$lang['strminvalue'] = 'Min. Wert';
	$lang['strcachevalue'] = 'Cache Value';
	$lang['strlogcount'] = 'Log Anz.';
	$lang['striscycled'] = 'Zyklisch?';
	$lang['striscalled'] = 'Aufgerufen?';
	$lang['strsequenceneedsname'] = 'Sie m�ssen f�r die Sequenz einen Namen angeben.';
	$lang['strsequencecreated'] = 'Sequenz erzeugt.';
	$lang['strsequencecreatedbad'] = 'Erzeugen der Sequenz fehlgeschlagen.';
	$lang['strconfdropsequence'] = 'Sind Sie sicher, dass die die Sequenz "%s" l�schen m�chten?';
	$lang['strsequencedropped'] = 'Sequenz gel�scht.';
	$lang['strsequencedroppedbad'] = 'L�schen der Sequenz fehlgeschlagen.';

	// Indexes
	$lang['strindexes'] = 'Indizes';
	$lang['strindexname'] = 'Index Name';
	$lang['strshowallindexes'] = 'Zeige alle Indizes';
	$lang['strnoindex'] = 'Kein Index gefunden.';
	$lang['strnoindexes'] = 'Keine Indizes gefunden.';
	$lang['strcreateindex'] = 'Index erzeugen';
	$lang['strtabname'] = 'Tab. Name';
	$lang['strcolumnname'] = 'Spalten Name';
	$lang['strindexneedsname'] = 'Sie m�ssen f�r den Index einen Namen angeben.';
	$lang['strindexneedscols'] = 'Sie m�ssen eine zul�ssige Anzahl an Spalten angeben.';
	$lang['strindexcreated'] = 'Index erzeugt';
	$lang['strindexcreatedbad'] = 'Erzeugen des Indizes fehlgeschlagen.';
	$lang['strconfdropindex'] = 'Sind Sie sicher, dass sie den Index "%s" l�schen m�chten?';
	$lang['strindexdropped'] = 'Index gel�scht.';
	$lang['strindexdroppedbad'] = 'L�schen des Indizes fehlgeschlagen.';
	$lang['strkeyname'] = 'Schl�ssel Name';
	$lang['struniquekey'] = 'Eindeutiger Schl�ssel';
	$lang['strprimarykey'] = 'Prim�rer Schl�ssel';
 	$lang['strindextype'] = 'Typ des Indizes';
	$lang['strindexname'] = 'Name des Indizes';
	$lang['strtablecolumnlist'] = 'Spalten in der Tabelle';
	$lang['strindexcolumnlist'] = 'Spalten im Index';

	// Rules
	$lang['strrules'] = 'Regeln';
	$lang['strrule'] = 'Regel';
	$lang['strshowallrules'] = 'Zeige alle Regeln';
	$lang['strnorule'] = 'Keine Regel gefunden.';
	$lang['strnorules'] = 'Keine Regeln gefunden.';
	$lang['strcreaterule'] = 'Regel erzeugen';
	$lang['strrulename'] = 'Regel Name';
	$lang['strruleneedsname'] = 'Sie m�ssen f�r die Regel einen Namen angeben.';
	$lang['strrulecreated'] = 'Regel erzeugt.';
	$lang['strrulecreatedbad'] = 'Erzeugen der Regel fehlgeschlagen.';
	$lang['strconfdroprule'] = 'Sind Sie sicher, dass Sie die Regel "%s" in der Tabelle "%s" l�schen m�chten?';
	$lang['strruledropped'] = 'Regel gel�scht.';
	$lang['strruledroppedbad'] = 'L�schen der Regel fehlgeschlagen.';

	// Constraints
	$lang['strconstraints'] = 'Constraints';
	$lang['strshowallconstraints'] = 'Zeige alle Constraints';
	$lang['strnoconstraints'] = 'Keine Constraints gefunden.';
	$lang['strcreateconstraint'] = 'Erzeuge constraint';
	$lang['strconstraintcreated'] = 'Constraint erzeugt.';
	$lang['strconstraintcreatedbad'] = 'Erzeugen des Constraints fehlgeschlagen.';
	$lang['strconfdropconstraint'] = 'Sind Sie sicher, dass Sie den Constraint "%s" in der Tabelle "%s" l�schen m�chten?';
	$lang['strconstraintdropped'] = 'Constraint gel�scht.';
	$lang['strconstraintdroppedbad'] = 'L�schen des Constraint fehlgeschlagen.';
	$lang['straddcheck'] = 'Check Constraint hinzuf�gen';
	$lang['strcheckneedsdefinition'] = 'Check Constraint braucht eine Definition.';
	$lang['strcheckadded'] = 'CheckCconstraint hinzugef�gt.';
	$lang['strcheckaddedbad'] = 'Hinzuf�gen des Check Constraints fehlgeschlagen.';
	$lang['straddpk'] = 'Prim�r-Schl�ssel hinzuf�gen';
	$lang['strpkneedscols'] = 'Ein Prim�r-Schl�ssel ben�tigt mindestens eine Spalte.';
	$lang['strpkadded'] = 'Prim�r-Schl�ssel hinzugef�gt.';
	$lang['strpkaddedbad'] = 'Hinzuf�gen des Prim�r-Schl�ssels fehlgeschlagen.';
	$lang['stradduniq'] = 'Eindeutigen Schl�ssel (unique key) hinzuf�gen';
	$lang['struniqneedscols'] = 'Ein eindeutiger Schl�ssel (Unique Key) ben�tigt mindestens eine Spalte.';
	$lang['struniqadded'] = 'Eindeutiger Schl�ssel (Unique Key) hinzugef�gt.';
	$lang['struniqaddedbad'] = 'Hinzuf�gen eines eindeutigen Schl�ssels (Unique Key) fehlgeschlagen.';
	$lang['straddfk'] = 'Fremd-Schl�ssel hinzuf�gen';
	$lang['strfkneedscols'] = 'Ein Fremd-Schl�ssel ben�tigt mindestens eine Spalte.';
	$lang['strfkadded'] = 'Fremd-Schl�ssel hinzugef�gt.';
	$lang['strfkaddedbad'] = 'Hinzuf�gen eines Fremd-Schl�ssels fehlgeschlagen.';
	$lang['strfktarget'] = 'Zieltabelle';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';

	// Functions
	$lang['strfunction'] = 'Funktion';
	$lang['strfunctions'] = 'Funktionen';
	$lang['strshowallfunctions'] = 'Zeige alle Funktionen';
	$lang['strnofunction'] = 'Keine Funktion gefunden.';
	$lang['strnofunctions'] = 'Keine Funktionen gefunden.';
	$lang['strcreatefunction'] = 'Funktion erzeugen';
	$lang['strfunctionname'] = 'Funktion Name';
	$lang['strreturns'] = 'Liefert';
	$lang['strarguments'] = 'Argumente';
	$lang['strfunctionneedsname'] = 'Sie m�ssen f�r die Funktion einen Namen angeben.';
	$lang['strfunctionneedsdef'] = 'Sie m�ssen f�r die Funktion eine Definition angeben.';
	$lang['strfunctioncreated'] = 'Funktion erzeugt.';
	$lang['strfunctioncreatedbad'] = 'Erzeugen der Funktion fehlgeschlagen.';
	$lang['strconfdropfunction'] = 'Sind Sie sicher, dass sie die Funktion "%s" l�schen m�chten?';
	$lang['strfunctiondropped'] = 'Funktion gel�scht.';
	$lang['strfunctiondroppedbad'] = 'L�schen der Funktion fehlgeschlagen.';
	$lang['strfunctionupdated'] = 'Funktion aktualisiert.';
	$lang['strfunctionupdatedbad'] = 'Aktualiseren der Funktion fehlgeschlagen.';

	// Triggers
	$lang['strtrigger'] = 'Trigger';
	$lang['strtriggers'] = 'Trigger';
	$lang['strshowalltriggers'] = 'Zeige alle Trigger';
	$lang['strnotrigger'] = 'Kein Trigger gefunden.';
	$lang['strnotriggers'] = 'Keine Trigger gefunden.';
	$lang['strcreatetrigger'] = 'Trigger erzeugen';
	$lang['strtriggerneedsname'] = 'Sie m�ssen f�r den Trigger einen Namen angeben.';
	$lang['strtriggerneedsfunc'] = 'Sie m�ssen f�r den Trigger eine Funktion angeben.';
	$lang['strtriggercreated'] = 'Trigger erzeugt.';
	$lang['strtriggercreatedbad'] = 'Erzeugen des Triggers fehlgeschlagen.';
	$lang['strconfdroptrigger'] = 'Sind Sie sicher, dass Sie den Trigger "%s" in der Tabelle "%s" l�schen m�chten?';
	$lang['strtriggerdropped'] = 'Trigger gel�scht.';
	$lang['strtriggerdroppedbad'] = 'L�schen des Triggers fehlgeschlagen.';

	// Types
	$lang['strtype'] = 'Datentyp';
	$lang['strtypes'] = 'Datentypen';
	$lang['strshowalltypes'] = 'Zeige alle Datentypen';
	$lang['strnotype'] = 'Kein Datentyp gefunden.';
	$lang['strnotypes'] = 'Keine Datentypen gefunden.';
	$lang['strcreatetype'] = 'Datentyp erzeugen';
	$lang['strtypename'] = 'Datentyp Name';
	$lang['strinputfn'] = 'Eingabefunktion';
	$lang['stroutputfn'] = 'Ausgabefunktion';
	$lang['strpassbyval'] = 'Passed by val?';
	$lang['stralignment'] = 'Alignment';
	$lang['strelement'] = 'Element';
	$lang['strdelimiter'] = 'Trennzeichen';
	$lang['strstorage'] = 'Speicherung';
	$lang['strtypeneedsname'] = 'Sie m�ssen einen Namen f�r den Datentyp angeben.';
	$lang['strtypeneedslen'] = 'Sie m�ssen eine L�nge f�r den Datentyp angeben.';
	$lang['strtypecreated'] = 'Datentyp erzeugt.';
	$lang['strtypecreatedbad'] = 'Erzeugen des Datentypen fehlgeschlagen.';
	$lang['strconfdroptype'] = 'Sind Sie sicher, dass Sie den Datentypen "%s" l�schen m�chten?';
	$lang['strtypedropped'] = 'Datentyp gel�scht.';
	$lang['strtypedroppedbad'] = 'L�schen des Datentypen fehlgeschlagen.';

	// Schemas
	$lang['strschema'] = 'Schema';
	$lang['strschemas'] = 'Schemas';
	$lang['strshowallschemas'] = 'Zeige alle Schemas';
	$lang['strnoschema'] = 'Kein Schema gefunden.';
	$lang['strnoschemas'] = 'Keine Schemas gefunden.';
	$lang['strcreateschema'] = 'Schema erzeugen';
	$lang['strschemaname'] = 'Schema Name';
	$lang['strschemaneedsname'] = 'Sie m�ssen f�r das Schema einen Namen angeben.';
	$lang['strschemacreated'] = 'Schema erzeugt';
	$lang['strschemacreatedbad'] = 'Erzeugen des Schemas fehlgeschlagen.';
	$lang['strconfdropschema'] = 'Sind Sie sicher, dass sie das Schema "%s" l�schen m�chten?';
	$lang['strschemadropped'] = 'Schema gel�scht.';
	$lang['strschemadroppedbad'] = 'L�schen des Schemas fehlgeschlagen';

	// Reports
	$lang['strreport'] = 'Report';
	$lang['strreports'] = 'Reporte';
	$lang['strshowallreports'] = 'Zeige alle Reporte';
	$lang['strnoreports'] = 'Keione Reporte gefunden.';
	$lang['strcreatereport'] = 'Report erzeugen';
	$lang['strreportdropped'] = 'Report gel�scht.';
	$lang['strreportdroppedbad'] = 'L�schen des Reports fehlgeschlagen.';
	$lang['strconfdropreport'] = 'Sind Sie sicher, dass Sie den Report "%s" l�schen wollen?';
	$lang['strreportneedsname'] = 'Sie m�ssen f�r den Report einen Namen angeben.';
	$lang['strreportneedsdef'] = 'Sie m�ssen SQL-Code f�r den Report eingeben.';
	$lang['strreportcreated'] = 'Report gespeichert.';
	$lang['strreportcreatedbad'] = 'Speichern des Reports fehlgeschlagen.';

	// Miscellaneous
	$lang['strtopbar'] = '%s l�uft auf host:%s port:%s -- Sie sind angemeldet als Benutzer "%s", %s';
	$lang['strtimefmt'] = 'j. M Y H:i:s';


?>
