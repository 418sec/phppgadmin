<?php

	/**
	 * Swedish language file for phpPgAdmin.
	 * maintainer S. Malmqvist <samoola@slak.nu>
	 * Due to lack of SQL knowledge som translations may be wrong, mail me the correct one and ill fix it
	 *
	 * $Id: swedish.php,v 1.1 2003/08/28 01:29:33 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = 'Svenska';
	$lang['appcharset'] = 'ISO-8859-1';
	$lang['applocale'] = 'sv_SV';

	// Welcome  
	$lang['strintro'] = 'V�lkommen till phpPgAdmin.';
	$lang['strppahome'] = 'phpPgAdmins Hemsida';
	$lang['strpgsqlhome'] = 'PostgreSQLs Hemsida';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'PostgreSQL Dokumentation (lokal)';
	$lang['strreportbug'] = 'Rapportera ett fel';
	$lang['strviewfaq'] = 'Visa Fr�gor & Svar';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
	
	// Basic strings
	$lang['strlogin'] = 'Logga in';
	$lang['strloginfailed'] = 'Inloggningen misslyckades';
	$lang['strserver'] = 'Server';
	$lang['strlogout'] = 'Logga ut';
	$lang['strowner'] = '�gare';
	$lang['straction'] = '�tg�rd';
	$lang['stractions'] = '�tg�rder';
	$lang['strname'] = 'Namn';
	$lang['strdefinition'] = 'Definition';
	$lang['stroperators'] = 'Operat�rer';
	$lang['straggregates'] = 'Sammanslagningar';
	$lang['strproperties'] = 'Egenskaper';
	$lang['strbrowse'] = 'Bl�ddra';
	$lang['strdrop'] = 'Ta bort';
	$lang['strdropped'] = 'Borttagen';
	$lang['strnull'] = 'Ingenting';
	$lang['strnotnull'] = 'Inte Ingenting';
	$lang['strprev'] = 'F�reg�ende';
	$lang['strnext'] = 'N�sta';
	$lang['strfailed'] = 'Misslyckades';
	$lang['strcreate'] = 'Skapa';
	$lang['strcreated'] = 'Skapad';
	$lang['strcomment'] = 'Kommentar';
	$lang['strlength'] = 'L�ngd';
	$lang['strdefault'] = 'Standardv�rde';
	$lang['stralter'] = '�ndra';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = '�ngra';
	$lang['strsave'] = 'Spara';
	$lang['strreset'] = 'Nollst�ll';
	$lang['strinsert'] = 'Infoga';
	$lang['strselect'] = 'V�lj';
	$lang['strdelete'] = 'Radera';
	$lang['strupdate'] = 'Uppdatera';
	$lang['strreferences'] = 'Referencer';
	$lang['stryes'] = 'Ja';
	$lang['strno'] = 'Nej';
	$lang['strtrue'] = 'Sant';
	$lang['strfalse'] = 'Falskt';
	$lang['stredit'] = 'Redigera';
	$lang['strcolumns'] = 'Kolumner';
	$lang['strrows'] = 'Rad(er)';
	$lang['strrowsaff'] = 'Rad(er) P�verkade.';
	$lang['strexample'] = 't. ex.';
	$lang['strback'] = 'Bak�t';
	$lang['strqueryresults'] = 'S�kresultat';
	$lang['strshow'] = 'Visa';
	$lang['strempty'] = 'Tom';
	$lang['strlanguage'] = 'Spr�k';
	$lang['strencoding'] = 'Kodning';
	$lang['strvalue'] = 'V�rde';
	$lang['strunique'] = 'Unik';
	$lang['strprimary'] = 'Prim�r';
	$lang['strexport'] = 'Exportera';
	$lang['strimport'] = 'Importera';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'K�r';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'St�da upp';
	$lang['stranalyze'] = 'Analysera';
	$lang['strcluster'] = 'Kluster';
	$lang['strreindex'] = '�terindexera';
	$lang['strrun'] = 'K�r';
	$lang['stradd'] = 'L�gg till';
	$lang['strevent'] = 'H�ndelse';
	$lang['strwhere'] = 'N�r';
	$lang['strinstead'] = 'G�r ist�llet';
	$lang['strwhen'] = 'N�r';
	$lang['strformat'] = 'Format';
	$lang['strdata'] = 'Data';
	$lang['strconfirm'] = 'Bekr�fta';
	$lang['strexpression'] = 'Uttryck';
	$lang['strellipsis'] = '...';
	$lang['strexpand'] = 'Utvidga';
	$lang['strcollapse'] = 'Kollapsa';

	// Error handling
	$lang['strnoframes'] = 'Du beh�ver en webl�sare som st�der frames f�r att anv�nda detta program.';
	$lang['strbadconfig'] = 'Din config.inc.php �r f�r gammal. Du beh�ver skapa en ny fr�n den nya config.inc.php-dist.';
	$lang['strnotloaded'] = 'Du har inte kompilerat in korrekt databasst�d i din PHP-installation.';
	$lang['strbadschema'] = 'Otill�tet schema angivet.';
	$lang['strbadencoding'] = 'Misslyckades att s�tta klientkodning i databasen.';
	$lang['strsqlerror'] = 'SQL fel:';
	$lang['strinstatement'] = 'I p�st�ende:';
	$lang['strinvalidparam'] = 'Otill�tna scriptparametrar.';
	$lang['strnodata'] = 'Hittade inga rader.';

	// Tables
	$lang['strtable'] = 'Tabell';
	$lang['strtables'] = 'Tabeller';
	$lang['strshowalltables'] = 'Visa alla tabeller';
	$lang['strnotables'] = 'Hittade inga tabeller.';
	$lang['strnotable'] = 'Hittade ingen tabell.';
	$lang['strcreatetable'] = 'Skapa tabell';
	$lang['strtablename'] = 'Tabellnamn';
	$lang['strtableneedsname'] = 'Du m�ste ge ett namn till din tabell.';
	$lang['strtableneedsfield'] = 'Du m�ste ange minst ett f�lt.';
	$lang['strtableneedscols'] = 'tabeller kr�ver ett till�tet antal kolumner.';
	$lang['strtablecreated'] = 'Tabell skapad.';
	$lang['strtablecreatedbad'] = 'Misslyckades med att skapa Tabell.';
	$lang['strconfdroptable'] = '�r du s�ker p� att du vill ta bort tabellen "%s"?';
	$lang['strtabledropped'] = 'Tabellen borttagen.';
	$lang['strtabledroppedbad'] = 'Misslyckades med att ta bort tabellen.';
	$lang['strconfemptytable'] = '�r du s�ker p� att du vill t�mma tabellen "%s"?';
	$lang['strtableemptied'] = 'Tabellen t�md.';
	$lang['strtableemptiedbad'] = 'Misslyckades med att t�mma tabellen';
	$lang['strinsertrow'] = 'Ifoga rad';
	$lang['strrowinserted'] = 'Rad infogad.';
	$lang['strrowinsertedbad'] = 'Misslyckades att infoga rad.';
	$lang['streditrow'] = 'Redigera Rad';
	$lang['strrowupdated'] = 'Rad Uppdaterad.';
	$lang['strrowupdatedbad'] = 'Misslyckades att uppdatera rad.';
	$lang['strdeleterow'] = 'Radera rad';
	$lang['strconfdeleterow'] = '�r du s�ker p� att du vill radera denna rad?';
	$lang['strrowdeleted'] = 'Raden raderad.';
	$lang['strrowdeletedbad'] = 'Misslyckades att radera rad.';
	$lang['strsaveandrepeat'] = 'Spara & upprepa';
	$lang['strfield'] = 'F�lt';
	$lang['strfields'] = 'F�lt';
	$lang['strnumfields'] = 'Antal F�lt';
	$lang['strfieldneedsname'] = 'Du m�ste namnge f�ltet';
	$lang['strselectneedscol'] = 'Du m�ste visa minst en kolumn';
	$lang['straltercolumn'] = '�ndra kolumn';
	$lang['strcolumnaltered'] = 'Kolumn �ndrad.';
	$lang['strcolumnalteredbad'] = 'Misslyckades att �ndra kolumn.';
	$lang['strconfdropcolumn'] = '�r du s�ker p� att du vill radera kolumn "%s" fr�n tabell "%s"?';
	$lang['strcolumndropped'] = 'Kolumn raderad.';
	$lang['strcolumndroppedbad'] = 'Misslyckades att radera kolumn.';
	$lang['straddcolumn'] = 'L�gg till kolumn';
	$lang['strcolumnadded'] = 'Kolumn inlagd.';
	$lang['strcolumnaddedbad'] = 'Misslyckades att l�gga till kolumne.';
	$lang['strschemaanddata'] = 'Schema & Data';
	$lang['strschemaonly'] = 'Endast Schema';
	$lang['strdataonly'] = 'Endast Data';
	$lang['strcascade'] = 'KASKAD';

	// Users
	$lang['struseradmin'] = 'Anv�ndar Admin';
	$lang['struser'] = 'Anv�ndare';
	$lang['strusers'] = 'Anv�ndare';
	$lang['strusername'] = 'Anv�ndarnamn';
	$lang['strpassword'] = 'L�senord';
	$lang['strsuper'] = 'Superanv�ndare?';
	$lang['strcreatedb'] = 'Skapa Databas?';
	$lang['strexpires'] = 'Utg�ngsdatum';
	$lang['strnousers'] = 'Hittade inga anv�ndare.';
	$lang['struserupdated'] = 'Anv�ndare uppdaterad.';
	$lang['struserupdatedbad'] = 'Misslyckades att uppdatera anv�ndare.';
	$lang['strshowallusers'] = 'Visa alla anv�ndare';
	$lang['strcreateuser'] = 'Skapa anv�ndare';
	$lang['strusercreated'] = 'Anv�ndare skapad.';
	$lang['strusercreatedbad'] = 'Misslyckades att skapa anv�ndare.';
	$lang['strconfdropuser'] = '�r du s�ker p� att du vill radera anv�ndare "%s"?';
	$lang['struserdropped'] = 'Anv�ndare raderad.';
	$lang['struserdroppedbad'] = 'Misslyckades att radera anv�ndare.';
	$lang['straccount'] = 'Konton';
	$lang['strchangepassword'] = '�ndra l�senord';
	$lang['strpasswordchanged'] = 'L�senord �ndrat.';
	$lang['strpasswordchangedbad'] = 'Misslyckades att �ndra l�senord.';
	$lang['strpasswordshort'] = 'F�r f� tecken i l�senordet.';
	$lang['strpasswordconfirm'] = 'L�senordet �r inte samma som bekr�ftelsen.';
	
	// Groups
	$lang['strgroupadmin'] = 'Grupp Admin';
	$lang['strgroup'] = 'Grupp';
	$lang['strgroups'] = 'Grupper';
	$lang['strnogroup'] = 'Hittade ej grupp.';
	$lang['strnogroups'] = 'Hittade inga grupper.';
	$lang['strcreategroup'] = 'Skapa grupp';
	$lang['strshowallgroups'] = 'Visa alla grupper';
	$lang['strgroupneedsname'] = 'Du m�ste namnge din grupp.';
	$lang['strgroupcreated'] = 'Grupp skapad.';
	$lang['strgroupcreatedbad'] = 'Misslyckades att skapa grupp.';	
	$lang['strconfdropgroup'] = '�r du s�ker p� att du vill radera grupp "%s"?';
	$lang['strgroupdropped'] = 'Grupp raderad.';
	$lang['strgroupdroppedbad'] = 'Misslyckades att radera grupp.';
	$lang['strmembers'] = 'Medlemmar';

	// Privilges
	$lang['strprivilege'] = 'R�ttighet';
	$lang['strprivileges'] = 'R�ttigheter';
	$lang['strnoprivileges'] = 'Detta objekt har standard �garr�ttigheter.';
	$lang['strgrant'] = 'Till�t';
	$lang['strrevoke'] = 'Ta tillbaka';
	$lang['strgranted'] = 'R�ttigheter �ndrade.';
	$lang['strgrantfailed'] = 'Misslyckades att �ndra r�ttigheter.';
	$lang['strgrantbad'] = 'Du m�ste ange minst en anv�ndare eller grupp och minst en r�ttighet.';
	$lang['stralterprivs'] = '�ndra r�ttigheter';

	// Databases
	$lang['strdatabase'] = 'Databas';
	$lang['strdatabases'] = 'Databaser';
	$lang['strshowalldatabases'] = 'Visa alla databaser';
	$lang['strnodatabase'] = 'Hittade ingen databas.';
	$lang['strnodatabases'] = 'Hittade inga databaser.';
	$lang['strcreatedatabase'] = 'Skapa databas';
	$lang['strdatabasename'] = 'Databasnamn';
	$lang['strdatabaseneedsname'] = 'Du m�ste namnge databasen.';
	$lang['strdatabasecreated'] = 'Databas skapad.';
	$lang['strdatabasecreatedbad'] = 'Misslyckades att skapa databas.';	
	$lang['strconfdropdatabase'] = '�r du s�ker p� att du vill radera databas "%s"?';
	$lang['strdatabasedropped'] = 'Databas raderad.';
	$lang['strdatabasedroppedbad'] = 'Misslyckades att radera databas.';
	$lang['strentersql'] = 'Skriv in SQL-kommando att k�ra nedan:';
	$lang['strsqlexecuted'] = 'SQL-kommando utf�rt.';
	$lang['strvacuumgood'] = 'Uppst�dning utf�rd.';
	$lang['strvacuumbad'] = 'Uppst�dning misslyckades.';
	$lang['stranalyzegood'] = 'Analysen lyckades.';
	$lang['stranalyzebad'] = 'Analysen misslyckades.';

	// Views
	$lang['strview'] = 'Vy';
	$lang['strviews'] = 'Vyer';
	$lang['strshowallviews'] = 'Visa alla vyer';
	$lang['strnoview'] = 'Hittade ingen vy.';
	$lang['strnoviews'] = 'Hittade inga vyer.';
	$lang['strcreateview'] = 'Skapa vy';
	$lang['strviewname'] = 'Vynamn';
	$lang['strviewneedsname'] = 'Du m�ste namnge Vy.';
	$lang['strviewneedsdef'] = 'Du m�ste ange en definition f�r din vy.';
	$lang['strviewcreated'] = 'Vy skapad.';
	$lang['strviewcreatedbad'] = 'Misslyckades att skapa vy.';
	$lang['strconfdropview'] = '�r du s�ker p� att du vill radera vyn "%s"?';
	$lang['strviewdropped'] = 'Vy raderad.';
	$lang['strviewdroppedbad'] = 'Misslyckades att radera vy.';
	$lang['strviewupdated'] = 'Vy uppdaterad.';
	$lang['strviewupdatedbad'] = 'Misslyckades att uppdatera vy.';

	// Sequences
	$lang['strsequence'] = 'F�ljd';
	$lang['strsequences'] = 'F�ljder';
	$lang['strshowallsequences'] = 'Visa alla f�ljder';
	$lang['strnosequence'] = 'Hittade ingen f�ljd.';
	$lang['strnosequences'] = 'Hittade inga f�ljder.';
	$lang['strcreatesequence'] = 'Skapa f�ljd';
	$lang['strlastvalue'] = 'Sista v�rde';
	$lang['strincrementby'] = '�ka med';
	$lang['strstartvalue'] = 'Startv�rde';
	$lang['strmaxvalue'] = 'St�rsta v�rde';
	$lang['strminvalue'] = 'Minsta v�rde';
	$lang['strcachevalue'] = 'V�rde p� cache';
	$lang['strlogcount'] = 'R�kna log';
	$lang['striscycled'] = '�r upprepad?';
	$lang['striscalled'] = '�r kallad?';
	$lang['strsequenceneedsname'] = 'Du m�ste ge ett namn till din f�ljd.';
	$lang['strsequencecreated'] = 'F�ljd skapad.';
	$lang['strsequencecreatedbad'] = 'Misslyckades att skapa f�ljd.'; 
	$lang['strconfdropsequence'] = '�r du s�ker p� att du vill radera f�ljden "%s"?';
	$lang['strsequencedropped'] = 'F�ljden borrtagen.';
	$lang['strsequencedroppedbad'] = 'Misslyckades att radera f�ljd.';

	// Indexes
	$lang['strindexes'] = 'Index';
	$lang['strindexname'] = 'Indexnamn';
	$lang['strshowallindexes'] = 'Visa alla index';
	$lang['strnoindex'] = 'Hittade inget index.';
	$lang['strnoindexes'] = 'Hittade inga index.';
	$lang['strcreateindex'] = 'Skapa index';
	$lang['strindexname'] = 'Indexnamn';
	$lang['strtabname'] = 'Tabellnamn';
	$lang['strcolumnname'] = 'Kolumnnamn';
	$lang['strindexneedsname'] = 'Du m�ste ge ett namn f�r ditt index';
	$lang['strindexneedscols'] = 'Det kr�vs ett giltigt antal kolumner f�r index.';
	$lang['strindexcreated'] = 'Index skapat';
	$lang['strindexcreatedbad'] = 'Misslyckades att skapa index.';
	$lang['strconfdropindex'] = '�r du s�ker p� att du vill radera index "%s"?';
	$lang['strindexdropped'] = 'Index raderat.';
	$lang['strindexdroppedbad'] = 'Misslyckades att radera index.';
	$lang['strkeyname'] = 'Nyckelv�rdesnamn';
	$lang['struniquekey'] = 'Unikt nyckelv�rde';
	$lang['strprimarykey'] = 'Prim�rnyckel';
 	$lang['strindextype'] = 'Typ av index';
	$lang['strindexname'] = 'Indexnamn';
	$lang['strtablecolumnlist'] = 'Tabellkolumner';
	$lang['strindexcolumnlist'] = 'Indexkolumner';

	// Rules
	$lang['strrules'] = 'Regler';
	$lang['strrule'] = 'Regel';
	$lang['strshowallrules'] = 'Visa alla regler';
	$lang['strnorule'] = 'Hittade ingen regel.';
	$lang['strnorules'] = 'Hittade inga regler.';
	$lang['strcreaterule'] = 'Skapa regel';
	$lang['strrulename'] = 'Regelnamn';
	$lang['strruleneedsname'] = 'Du m�ste ge ett namn till din regel.';
	$lang['strrulecreated'] = 'Regel skapad.';
	$lang['strrulecreatedbad'] = 'Misslyckades att skapa regel.';
	$lang['strconfdroprule'] = '�r du s�ker p� att du vill radera regel "%s" f�r "%s"?';
	$lang['strruledropped'] = 'Regel raderat.';
	$lang['strruledroppedbad'] = 'Misslyckades att radera regel.';

	// Constraints
	$lang['strconstraints'] = 'Begr�nsningar';
	$lang['strshowallconstraints'] = 'Visa alla begr�nsningar';
	$lang['strnoconstraints'] = 'Hittade inga begr�nsningar.';
	$lang['strcreateconstraint'] = 'Skapa begr�nsning';
	$lang['strconstraintcreated'] = 'Begr�nsning skapad.';
	$lang['strconstraintcreatedbad'] = 'Misslyckades att skapa begr�nsning.';
	$lang['strconfdropconstraint'] = '�r du s�ker p� att du vill radera begr�nsning "%s" f�r "%s"?';
	$lang['strconstraintdropped'] = 'Begr�nsning raderad.';
	$lang['strconstraintdroppedbad'] = 'Misslyckades att radera begr�nsning.';
	$lang['straddcheck'] = 'L�gg till en koll';
	$lang['strcheckneedsdefinition'] = 'En kollbegr�nsning beh�ver definieras.';
	$lang['strcheckadded'] = 'Kollbegr�nsning inlagd.';
	$lang['strcheckaddedbad'] = 'Misslyckades att l�gga till en koll.';
	$lang['straddpk'] = 'L�gg till prim�rnyckel';
	$lang['strpkneedscols'] = 'Prim�rnyckel beh�ver minst en kolumn.';
	$lang['strpkadded'] = 'Prim�rnyckel inlagd.';
	$lang['strpkaddedbad'] = 'Misslyckades att l�gga till prim�rnyckel.';
	$lang['stradduniq'] = 'L�gg till Unikt nyckelv�rde';
	$lang['struniqneedscols'] = 'Unikt nyckelv�rde beh�ver minst en kolumn.';
	$lang['struniqadded'] = 'Unikt nyckelv�rde inlagt.';
	$lang['struniqaddedbad'] = 'Misslyckades att l�gga till unikt nyckelv�rde.';
	$lang['straddfk'] = 'L�gg till utomst�ende nyckel';
	$lang['strfkneedscols'] = 'Utomst�ende nyckel beh�ver minst en kolumn.';
	$lang['strfkneedstarget'] = 'Utomst�ende nycket beh�ver en m�ltabell.';
	$lang['strfkadded'] = 'Utomst�ende nyckel inlagd.';
	$lang['strfkaddedbad'] = 'Misslyckades att l�gga till utomst�ende nyckel.';
	$lang['strfktarget'] = 'M�ltabell';
	$lang['strfkcolumnlist'] = 'Kolumner i nyckel';
	$lang['strondelete'] = 'VID RADERING';
	$lang['stronupdate'] = 'VID UPPDATERING';

	// Functions
	$lang['strfunction'] = 'Funktion';
	$lang['strfunctions'] = 'Funktioner';
	$lang['strshowallfunctions'] = 'Visa alla funktioner';
	$lang['strnofunction'] = 'Hittade ingen funktion.';
	$lang['strnofunctions'] = 'Hittade inga funktioner.';
	$lang['strcreatefunction'] = 'Skapa funktion';
	$lang['strfunctionname'] = 'Funktionsnamn';
	$lang['strreturns'] = '�terger';
	$lang['strarguments'] = 'Argument';
	$lang['strfunctionneedsname'] = 'Du m�ste namnge din funktion.';
	$lang['strfunctionneedsdef'] = 'Du m�ste definiera din funktion.';
	$lang['strfunctioncreated'] = 'Funktion skapad.';
	$lang['strfunctioncreatedbad'] = 'Misslyckades att skapa funktion.';
	$lang['strconfdropfunction'] = '�r du s�ker p� att du vill radera funktionen "%s"?';
	$lang['strfunctiondropped'] = 'Funktionen raderad.';
	$lang['strfunctiondroppedbad'] = 'Misslyckades att radera funktion.';
	$lang['strfunctionupdated'] = 'Funktion uppdaterad.';
	$lang['strfunctionupdatedbad'] = 'Misslyckades att uppdatera funktion.';

	// Triggers
	$lang['strtrigger'] = 'Mekanism';
	$lang['strtriggers'] = 'Mekanismer';
	$lang['strshowalltriggers'] = 'Visa alla Mekanismer';
	$lang['strnotrigger'] = 'Hittade ingen mekanism.';
	$lang['strnotriggers'] = 'Hittade inga mekanismer.';
	$lang['strcreatetrigger'] = 'Skapa mekanism';
	$lang['strtriggerneedsname'] = 'Du m�ste namnge din mekanism.';
	$lang['strtriggerneedsfunc'] = 'Du m�ste specificera en funktion f�r din mekanism.';
	$lang['strtriggercreated'] = 'Mekanism skapad.';
	$lang['strtriggercreatedbad'] = 'Misslyckades att skapa mekanism.';
	$lang['strconfdroptrigger'] = '�r du s�ker p� att du vill radera mekanismen "%s" f�r "%s"?';
	$lang['strtriggerdropped'] = 'Mekanism raderad.';
	$lang['strtriggerdroppedbad'] = 'Misslyckades att radera mekanism.';

	// Types
	$lang['strtype'] = 'Typ';
	$lang['strtypes'] = 'Typer';
	$lang['strshowalltypes'] = 'Visa alla typer';
	$lang['strnotype'] = 'Hittade ingen typ.';
	$lang['strnotypes'] = 'Hittade inga typer.';
	$lang['strcreatetype'] = 'Skapa typ';
	$lang['strtypename'] = 'Namn p� typen';
	$lang['strinputfn'] = 'Infogande funktion';
	$lang['stroutputfn'] = 'Funktion f�r utv�rden';
	$lang['strpassbyval'] = 'Genomg�tt utv�rdering?';
	$lang['stralignment'] = 'Justering';
	$lang['strelement'] = 'Element';
	$lang['strdelimiter'] = 'Avgr�nsare';
	$lang['strstorage'] = 'Lagringstyp';
	$lang['strtypeneedsname'] = 'Du m�ste namnge din typ.';
	$lang['strtypeneedslen'] = 'Du m�ste ge din typ en l�ngd.';
	$lang['strtypecreated'] = 'Typ skapad';
	$lang['strtypecreatedbad'] = 'Misslyckades att skapa typ.';
	$lang['strconfdroptype'] = '�r du s�ker p� att du vill radera typen "%s"?';
	$lang['strtypedropped'] = 'Typ raderad.';
	$lang['strtypedroppedbad'] = 'Misslyckades att radera typ.';

	// Schemas
	$lang['strschema'] = 'Schema';
	$lang['strschemas'] = 'Scheman';
	$lang['strshowallschemas'] = 'Visa alla scheman';
	$lang['strnoschema'] = 'Hittade inget schema.';
	$lang['strnoschemas'] = 'Hittade inga scheman.';
	$lang['strcreateschema'] = 'Skapa Schema';
	$lang['strschemaname'] = 'Schemanamn';
	$lang['strschemaneedsname'] = 'Du m�ste namnge ditt Schema.';
	$lang['strschemacreated'] = 'Schema skapat';
	$lang['strschemacreatedbad'] = 'Misslyckades att skapa schema.';
	$lang['strconfdropschema'] = '�r du s�ker p� att du vill radera schemat "%s"?';
	$lang['strschemadropped'] = 'Schema raderat.';
	$lang['strschemadroppedbad'] = 'Misslyckades att radera schema.';

	// Reports
	$lang['strreport'] = 'Rapport';
	$lang['strreports'] = 'Rapporter';
	$lang['strshowallreports'] = 'Visa alla rapporter';
	$lang['strnoreports'] = 'Hittade inga rapporter.';
	$lang['strcreatereport'] = 'Skapa rapport';
	$lang['strreportdropped'] = 'Rapport skapad.';
	$lang['strreportdroppedbad'] = 'Misslyckades att skapa rapport.';
	$lang['strconfdropreport'] = '�r du s�ker p� att du vill radera rapporten "%s"?';
	$lang['strreportneedsname'] = 'Du m�ste namnge din rapport.';
	$lang['strreportneedsdef'] = 'Du m�ste ange din SQL-fr�ga.';
	$lang['strreportcreated'] = 'Rapport sparad.';
	$lang['strreportcreatedbad'] = 'Misslyckades att spara rapport.';

	// Miscellaneous
	$lang['strtopbar'] = '%s p� port %s:%s -- Du �r inloggad som "%s", %s';
	$lang['strtimefmt'] = 'jS M, Y g:iA';

?>
