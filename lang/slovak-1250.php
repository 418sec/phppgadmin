<?php

	/**
	 * Slovenska lokalizacia phpPgAdmin-u.
	 *                                      ado(at)nirvanaclub.sk
	 *
	 * $Id: slovak-1250.php,v 1.1 2003/04/17 06:11:42 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = 'Slovensky';
	$lang['appcharset'] = 'windows-1250';
	$lang['applocale'] = 'sk_SK';

	// Basic strings
	$lang['strintro'] = 'Vitaje vo phpPgAdmin-e.';
	$lang['strlogin'] = 'Prihl�senie';
	$lang['strloginfailed'] = 'Prihl�senie zlyhalo';
	$lang['strserver'] = 'Server';
	$lang['strlogout'] = 'Odhl�si�';
	$lang['strowner'] = 'Vlastn�k';
	$lang['straction'] = 'Akcia';
	$lang['stractions'] = 'Akcie';
	$lang['strname'] = 'Meno';
	$lang['strdefinition'] = 'Defin�cia';
	$lang['stroperators'] = 'Oper�tory';
	$lang['straggregates'] = 'Agreg�ty';
	$lang['strproperties'] = 'Vlastnosti';
	$lang['strbrowse'] = 'Prehliada�';
	$lang['strdrop'] = 'Odstr�ni�';
	$lang['strdropped'] = 'Odstr�nen�';
	$lang['strnull'] = 'Nulov�';
	$lang['strnotnull'] = 'Ne-nulov�';
	$lang['strprev'] = 'Predch�dzaj�ci';
	$lang['strnext'] = '�a���';
	$lang['strfailed'] = 'Zlihalo';
	$lang['strcreate'] = 'Vytvori�';
	$lang['strcreated'] = 'Vytvoren�';
	$lang['strcomment'] = 'Koment�r';
	$lang['strlength'] = 'D�ka';
	$lang['strdefault'] = 'Predvolen�';
	$lang['stralter'] = 'Zmeni�';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Zru�i�';
	$lang['strsave'] = 'Ulo�i�';
	$lang['strreset'] = 'Reset';
	$lang['strinsert'] = 'Vlo�i�';
	$lang['strselect'] = 'Vybra�';
	$lang['strdelete'] = 'Zmaza�';
	$lang['strupdate'] = 'Aktualizova�';
	$lang['strreferences'] = 'Referencie';
	$lang['stryes'] = '�no';
	$lang['strno'] = 'Nie';
	$lang['stredit'] = 'Upravi�';
	$lang['strcolumns'] = 'St�pce';
	$lang['strrows'] = 'riadky';
	$lang['strexample'] = 'napr.';
	$lang['strback'] = 'Sp�';
	$lang['strqueryresults'] = 'V�sledky Dotazu';
	$lang['strshow'] = 'Uk�za�';
	$lang['strempty'] = 'Vypr�zdni�';
	$lang['strlanguage'] = 'Jazyk';
	$lang['strencoding'] = 'K�dovanie';
	$lang['strvalue'] = 'Hodnota';
	$lang['strunique'] = 'Unik�tny';
	$lang['strprimary'] = 'Prim�rny';
	$lang['strexport'] = 'Exportova�';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'Vykonaj';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analyzova�';
	$lang['strcluster'] = 'Cluster';
	$lang['strreindex'] = 'Reindex';
	$lang['strrun'] = 'Spusti�';
	$lang['stradd'] = 'Prida�';
	$lang['strevent'] = 'Pr�padne';
	$lang['strwhere'] = 'Kde';
	$lang['strinstead'] = 'Urobi� Namiesto';
	$lang['strwhen'] = 'Kedy';
	$lang['strformat'] = 'Form�t';

	// Error handling
	$lang['strnoframes'] = 'Potrebuje� prehliada� podporuj�ci \"frame-y\" pre t�to aplik�ciu.';
	$lang['strbadconfig'] = 'Your config.inc.php is out of date. You will need to regenerate it from the new config.inc.php-dist.';
	$lang['strnotloaded'] = 'Tvoje PHP nie je skompilovan� s potrebnou podporou datab�z.';
	$lang['strbadschema'] = '�pecifikovan� chybn� sch�ma.';
	$lang['strbadencoding'] = 'Nastavenie k�dovania v datab�ze zlyhalo.';
	$lang['strsqlerror'] = 'SQL chyba:';
	$lang['strinstatement'] = 'Vo v�raze:';
	$lang['strinvalidparam'] = 'Chybn� parametre skriptu.';
	$lang['strnodata'] = 'Nen�jden� �iadne z�znamy.';

	// Tables
	$lang['strtable'] = 'Tabu�ka';
	$lang['strtables'] = 'Tabu�ky';
	$lang['strshowalltables'] = 'Zobrazi� V�etky Tabu�ky';
	$lang['strnotables'] = 'Nen�jden� �iadne tabu�ky.';
	$lang['strnotable'] = 'Nen�jden� �iadna tabu�ka.';
	$lang['strcreatetable'] = 'Vytvori� tabu�ku';
	$lang['strtablename'] = 'N�zov tabu�ky';
	$lang['strtableneedsname'] = 'Mus� zada� n�zov pre tvoju tabu�ku.';
	$lang['strtableneedsfield'] = 'Mus� �pecifikova� aspo� jedno pole.';
	$lang['strtableneedscols'] = 'Tabu�ky vy�aduj� a valid number of columns.';
	$lang['strtablecreated'] = 'Tabu�ka vytvoren�.';
	$lang['strtablecreatedbad'] = 'Tabu�ka nebola vytvoren�.';
	$lang['strconfdroptable'] = 'Si si ist�, �e chce� odstr�ni� tabu�ku "%s"?';
	$lang['strtabledropped'] = 'Tabu�ka odstr�nen�.';
	$lang['strtabledroppedbad'] = 'Tabu�ka nebola odstr�nen�.';
	$lang['strconfemptytable'] = 'Si si ist�, �e chce� vypr�zsni� tabu�ku "%s"?';
	$lang['strtableemptied'] = 'Tabu�ka vypr�zdnen�.';
	$lang['strtableemptiedbad'] = 'Tabu�ka nebola vypr�zdnen�.';
	$lang['strinsertrow'] = 'Vlo�i� Riadok';
	$lang['strrowinserted'] = 'Riadok vlo�en�.';
	$lang['strrowinsertedbad'] = 'Riadok nebol vlo�en�.';
	$lang['streditrow'] = 'Upravi� Riadok';
	$lang['strrowupdated'] = 'Riadok upraven�.';
	$lang['strrowupdatedbad'] = 'Riadok nebol upraven�.';
	$lang['strdeleterow'] = 'Zmaza� Riadok';
	$lang['strconfdeleterow'] = 'Si si ist�, �e chce� zmaza� tento riadok?';
	$lang['strrowdeleted'] = 'Riadok zmazan�.';
	$lang['strrowdeletedbad'] = 'Riadok nebol zmazan�.';
	$lang['strsaveandrepeat'] = 'Ulo�i� & Zopakova�';
	$lang['strfield'] = 'Pole';
	$lang['strfields'] = 'Polia';
	$lang['strnumfields'] = 'Po�et Pol�';
	$lang['strfieldneedsname'] = 'Mus� pomenova� tvoje pole';
	$lang['strselectneedscol'] = 'Mus� vybra� aspo� jeden st�pec';
	$lang['straltercolumn'] = 'Zmeni� St�pec';
	$lang['strcolumnaltered'] = 'St�pec zmenen�.';
	$lang['strcolumnalteredbad'] = 'St�pec nebol zmenen�.';
        $lang['strconfdropcolumn'] = 'Si si ist�, �e chce� zmaza� st�pec "%s" z tabu�ky "%s"?';
	$lang['strcolumndropped'] = 'St�pec zmazan�.';
	$lang['strcolumndroppedbad'] = 'St�pec nebol zmazan�.';
	$lang['straddcolumn'] = 'Prida� St�pec';
	$lang['strcolumnadded'] = 'St�pec pridan�.';
	$lang['strcolumnaddedbad'] = 'St�pec nebol pridan�.';
	$lang['strschemaanddata'] = 'Sch�ma & D�ta';
	$lang['strschemaonly'] = 'Iba Sch�ma';
	$lang['strdataonly'] = 'Iba D�ta';

	// Users
	$lang['struseradmin'] = 'Spr�va U��vate�ov';
	$lang['struser'] = 'U��vate�';
	$lang['strusers'] = 'U��vatelia';
	$lang['strusername'] = 'Meno u��vate�a';
	$lang['strpassword'] = 'Heslo';
	$lang['strsuper'] = 'Superuser?';
	$lang['strcreatedb'] = 'Vytv�ranie DB?';
	$lang['strexpires'] = 'Expiruje';
	$lang['strnousers'] = 'Nen�jden� �iadny u��vatelia.';
	$lang['struserupdated'] = 'U��vatelia zmenen�.';
	$lang['struserupdatedbad'] = 'U��vatelia neboli zmenen�.';
	$lang['strshowallusers'] = 'Zobrazi� V�etk�ch U��vate�ov';
	$lang['strcreateuser'] = 'Vytvori� U��vate�a';
	$lang['strusercreated'] = 'U��vate� vytvoren�.';
	$lang['strusercreatedbad'] = 'U��vate� nebol vytvoren�.';
	$lang['strconfdropuser'] = 'Si si ist�, �e chce� zmaza� u��vate�a "%s"?';
	$lang['struserdropped'] = 'U��vate� zmazan�.';
	$lang['struserdroppedbad'] = 'U��vate� nebol zmazan�.';
		
	// Groups
	$lang['strgroupadmin'] = 'Spr�va Skup�n';
	$lang['strgroup'] = 'Skupina';
	$lang['strgroups'] = 'Skupiny';
	$lang['strnogroup'] = 'Skupina nen�jden�.';
	$lang['strnogroups'] = '�iadne skupiny nen�jden�.';
	$lang['strcreategroup'] = 'Vytvori� Skupinu';
	$lang['strshowallgroups'] = 'Zobrazi� V�etky Skupiny';
	$lang['strgroupneedsname'] = 'Mus� zada� n�zov pre tvoju skupinu.';
	$lang['strgroupcreated'] = 'Skupina Vytvoren�.';
	$lang['strgroupcreatedbad'] = 'Skupina nebola vytvoren�.';	
	$lang['strconfdropgroup'] = 'Si si ist�, �e chce� zmaza� skupinu "%s"?';
	$lang['strgroupdropped'] = 'Skupina zmazan�.';
	$lang['strgroupdroppedbad'] = 'Skupina nebola zmazan�.';
	$lang['strmembers'] = '�lenovia';

	// Privilges
	$lang['strprivilege'] = 'Privil�gi�';
	$lang['strprivileges'] = 'Privil�gi�';
	$lang['strnoprivileges'] = 'Tento objekt nem� privil�gi�.';
	$lang['strgrant'] = 'Povoli�';
	$lang['strrevoke'] = 'Odobra�';
	$lang['strgranted'] = 'Privil�gi� pridan�.';
	$lang['strgrantfailed'] = 'Privil�gi� neboli pridan�.';
	$lang['strgrantuser'] = 'Povoli� U��vate�a';
	$lang['strgrantgroup'] = 'Povoli� Skupinu';

	// Databases
	$lang['strdatabase'] = 'Datab�za';
	$lang['strdatabases'] = 'Datab�zy';
	$lang['strshowalldatabases'] = 'Zobrazi� v�etky datab�zy';
	$lang['strnodatabase'] = 'Nen�jden� �iadna Datab�za.';
	$lang['strnodatabases'] = 'Nen�jden� �iadne Datab�zy.';
	$lang['strcreatedatabase'] = 'Vytvori� datab�zu';
	$lang['strdatabasename'] = 'N�zov datab�zy';
	$lang['strdatabaseneedsname'] = 'Mus� zada� n�zov pre tvoju datab�zu.';
	$lang['strdatabasecreated'] = 'Datab�za vytvoren�.';
	$lang['strdatabasecreatedbad'] = 'Datab�za nebola vytvoren�.';	
	$lang['strconfdropdatabase'] = 'Si si ist�, �e chce� zmaza� datab�zu "%s"?';
	$lang['strdatabasedropped'] = 'Datab�ze zmazan�.';
	$lang['strdatabasedroppedbad'] = 'Datab�za nebola zmazan�.';
	$lang['strentersql'] = 'Vlo�i� SQL dotaz:';
	$lang['strvacuumgood'] = 'Vy�istenie kompletn�.';
	$lang['strvacuumbad'] = 'Vy�istnie zlyhalo.';
	$lang['stranalyzegood'] = 'Analyzovanie kompletn�.';
	$lang['stranalyzebad'] = 'Analyzovanie zlyhalo.';

	// Views
	$lang['strview'] = 'N�h�ady (Views)';
	$lang['strviews'] = 'N�h�ady';
	$lang['strshowallviews'] = 'Zobrazi� V�etky N�h�ady';
	$lang['strnoview'] = 'Nen�jden� �iadny n�h�ad.';
	$lang['strnoviews'] = 'Nen�jden� �iadne n�h�ady.';
	$lang['strcreateview'] = 'Vytvori� N�h�ad';
	$lang['strviewname'] = 'N�zov n�h�adu';
	$lang['strviewneedsname'] = 'Mus� zada� n�zov pre tvoj n�h�ad.';
	$lang['strviewneedsdef'] = 'Mus� zada� defin�ciu pre tvoj n�h�ad.';
	$lang['strviewcreated'] = 'N�h�ad vytvoren�.';
	$lang['strviewcreatedbad'] = 'N�h�ad nebol vytvoren�.';
	$lang['strconfdropview'] = 'Si si ist�, �e chce� zmaza� n�h�ad "%s"?';
	$lang['strviewdropped'] = 'N�h�ad zmazan�.';
	$lang['strviewdroppedbad'] = 'N�h�ad nebol zmazan�.';
	$lang['strviewupdated'] = 'N�h�ad upraven�.';
	$lang['strviewupdatedbad'] = 'N�h�ad nebol upraven�.';

	// Sequences
	$lang['strsequence'] = 'Sekvencie';
	$lang['strsequences'] = 'Sekvencie';
	$lang['strshowallsequences'] = 'Zobrazi� V�etky Sekvencie';
	$lang['strnosequence'] = '�iadna sekvencia nen�jden�.';
	$lang['strnosequences'] = '�iadne sekvencie nen�jden�.';
	$lang['strcreatesequence'] = 'Vytvori� Sekvenciu';
	$lang['strlastvalue'] = 'Posledn� Hodnota';
	$lang['strincrementby'] = 'Inkrementova� od';	
	$lang['strstartvalue'] = 'Start Hodnota';
	$lang['strmaxvalue'] = 'Max Hodnota';
	$lang['strminvalue'] = 'Min Hodnota';
	$lang['strcachevalue'] = 'Cache Hodnota';
	$lang['strlogcount'] = 'Log Count';
	$lang['striscycled'] = 'Je Cycled?';
	$lang['striscalled'] = 'Je Called?';
	$lang['strsequenceneedsname'] = 'Mus� zada� n�zov pre tvoju sekvenciu.';
	$lang['strsequencecreated'] = 'Sekvencia vytvoren�.';
	$lang['strsequencecreatedbad'] = 'Sekvencia nebola vytvoren�.'; 
	$lang['strconfdropsequence'] = 'Si si ist�, �e chce� zmaza� sekvenciu "%s"?';
	$lang['strsequencedropped'] = 'Sekvencia zmazan�.';
	$lang['strsequencedroppedbad'] = 'Sekvencia nebol zmazan�.';

	// Indexes
	$lang['strindexes'] = 'Indexy';
	$lang['strindexname'] = 'N�zov Indexu';
	$lang['strshowallindexes'] = 'Zobrazi� V�etky Indexy';
	$lang['strnoindex'] = 'Nen�jden� �iadny index.';
	$lang['strnoindexes'] = 'Nen�jden� �iadne indexy.';
	$lang['strcreateindex'] = 'Vytvori� Index';
	$lang['strindexname'] = 'N�zov indexu';
	$lang['strtabname'] = 'Tab Name';
	$lang['strcolumnname'] = 'N�zov st�pca';
	$lang['strindexneedsname'] = 'Mus� zada� n�zov pre tvoj index';
	$lang['strindexneedscols'] = 'Index vy�aduje a valid number of columns.';
	$lang['strindexcreated'] = 'Index vytvoren�';
	$lang['strindexcreatedbad'] = 'Index nebol vytvoren�.';
	$lang['strconfdropindex'] = 'Si si ist�, �e chce� zmaza� index "%s"?';
	$lang['strindexdropped'] = 'Index zmazan�.';
	$lang['strindexdroppedbad'] = 'Index nebol zmazan�.';
	$lang['strkeyname'] = 'N�zov K���u';
	$lang['struniquekey'] = 'Unik�tny K���';
	$lang['strprimarykey'] = 'Prim�rny K���';
 	$lang['strindextype'] = 'Typ indexu';
	$lang['strindexname'] = 'N�zov indexu';
	$lang['strtablecolumnlist'] = 'St�pce v Tabu�ke';
	$lang['strindexcolumnlist'] = 'St�pce v Indexe';

	// Rules
	$lang['strrules'] = 'Pravidl� (Rules)';
	$lang['strrule'] = 'Pravidlo';
	$lang['strshowallrules'] = 'Zobrazi� V�etky Pravidl�';
	$lang['strnorule'] = 'Nen�jden� �iadne pravidlo.';
	$lang['strnorules'] = 'Nen�jden� �iadne pravidl�.';
	$lang['strcreaterule'] = 'Vytvori� pravidlo';
	$lang['strrulename'] = 'N�zov pravidla';
	$lang['strruleneedsname'] = 'Mus� zada� n�zov pre tvoje pravidlo.';
	$lang['strrulecreated'] = 'Pravidlo vytvoren�.';
	$lang['strrulecreatedbad'] = 'Pravidlo nebolo vytvoren�.';
	$lang['strconfdroprule'] = 'Si si ist�, �e chce� zmaza� pravidlo "%s" na "%s"?';
	$lang['strruledropped'] = 'Pravidlo zmazan�.';
	$lang['strruledroppedbad'] = 'Pravidlo nebolo zmazan�.';

	// Constraints
	$lang['strconstraints'] = 'Obmedzenia (Constraints)';
	$lang['strshowallconstraints'] = 'Zobrazi� V�etky Obmedzenia';
	$lang['strnoconstraints'] = 'Nen�jden� �iadne obmedzenie.';
	$lang['strcreateconstraint'] = 'Vytvori� Obmedzenie';
	$lang['strconstraintcreated'] = 'Obmedzenie vytvoren�.';
	$lang['strconstraintcreatedbad'] = 'Obmedzenie nebolo vytvoren�.';
	$lang['strconfdropconstraint'] = 'Si si ist�, �e chce� zmaza� obmedzenie "%s" na "%s"?';
	$lang['strconstraintdropped'] = 'Obmedzenie zmazan�.';
	$lang['strconstraintdroppedbad'] = 'Obmedzenie nebolo zmazan�.';
	$lang['straddcheck'] = 'Prida� Overovanie';
	$lang['strcheckneedsdefinition'] = 'Overovanie Obmedzenia vy�aduje jeho definovanie.';
	$lang['strcheckadded'] = 'Overovanie obmedzenia pridan�.';
	$lang['strcheckaddedbad'] = 'Overovanie obmedzenia nebolo pridan�.';
	$lang['straddpk'] = 'Prida� Prim�rny K���';
	$lang['strpkneedscols'] = 'Prim�rny k��� vy�aduje aspo� jeden st�pec.';
	$lang['strpkadded'] = 'Prim�rny k��� pridan�.';
	$lang['strpkaddedbad'] = 'Prim�rny k��� nebol pridan�.';
	$lang['stradduniq'] = 'Prida� Unik�tny K���';
	$lang['struniqneedscols'] = 'Unik�tny k��� vy�aduje aspo� jeden st�pec.';
	$lang['struniqadded'] = 'Unik�tny k��� pridan�.';
	$lang['struniqaddedbad'] = 'Unik�tny k��� nebol pridan�.';
	$lang['straddfk'] = 'Prida� Cudz� K���';
	$lang['strfkneedscols'] = 'Cudz� k��� vy�aduje aspo� jeden st�pec.';
	$lang['strfkadded'] = 'Cudz� k��� pridan�.';
	$lang['strfkaddedbad'] = 'Cudz� k��� nebol pridan�.';
	$lang['strfktarget'] = 'Cie�ov� tabu�ka';

	// Functions
	$lang['strfunction'] = 'Funkcia';
	$lang['strfunctions'] = 'Funkcie';
	$lang['strshowallfunctions'] = 'Zobrazi� v�etky funkcie';
	$lang['strnofunction'] = 'Nen�jden� �iadna funkcia.';
	$lang['strnofunctions'] = 'Nen�jden� �iadne funkcie.';
	$lang['strcreatefunction'] = 'Vytvori� funkciu';
	$lang['strfunctionname'] = 'N�zov funkcie';
	$lang['strreturns'] = 'Vracia';
	$lang['strarguments'] = 'Argumenty';
	$lang['strfunctionneedsname'] = 'Mus� zada� n�zov pre tvoju funkciu.';
	$lang['strfunctionneedsdef'] = 'Mus� zada� defin�ciu pre tvoju funkciu.';
	$lang['strfunctioncreated'] = 'Funkcia vytvoren�.';
	$lang['strfunctioncreatedbad'] = 'Funkcia nebola vytvoren�.';
	$lang['strconfdropfunction'] = 'Si si ist�, �e chce� zmaza� funkciu "%s"?';
	$lang['strfunctiondropped'] = 'Funkcia zmazan�.';
	$lang['strfunctiondroppedbad'] = 'Funkcia nebola zmazan�.';
	$lang['strfunctionupdated'] = 'Funkcia upraven�.';
	$lang['strfunctionupdatedbad'] = 'Funkcia nebola upraven�.';

	// Triggers
	$lang['strtrigger'] = 'Medzipravidl� (Trigger)';
	$lang['strtriggers'] = 'Triggers';
	$lang['strshowalltriggers'] = 'Zobrazi� V�etky \"Triggers\"';
	$lang['strnotrigger'] = 'Nen�jden� �iadna \"Trigger\".';
	$lang['strnotriggers'] = 'Nen�jden� �iadne \"Triggers\".';
	$lang['strcreatetrigger'] = 'Vytvori� \"Trigger\"';
	$lang['strtriggerneedsname'] = 'Mus� zada� n�zov pre tvoju \"Trigger\".';
	$lang['strtriggerneedsfunc'] = 'Mus� zada� funkciu pre tvoju \"Trigger\".';
	$lang['strtriggercreated'] = '\"Trigger\" vytvoren�.';
	$lang['strtriggercreatedbad'] = '\"Trigger\" nebola vytvoren�.';
	$lang['strconfdroptrigger'] = 'Si si ist�, �e chce� zmaza� \"Trigger\" "%s" na "%s"?';
	$lang['strtriggerdropped'] = '\"Trigger\" zmazan�.';
	$lang['strtriggerdroppedbad'] = '\"Triggers\" nebola zmazan�.';

	// Types
	$lang['strtype'] = 'Typ';
	$lang['strtypes'] = 'Typy';
	$lang['strshowalltypes'] = 'Zobrazi� V�etky typy';
	$lang['strnotype'] = 'Nen�jden� �iadny typ.';
	$lang['strnotypes'] = 'Nen�jden� �iadne typy.';
	$lang['strcreatetype'] = 'Vytvori� Typ';
	$lang['strtypename'] = 'N�zov typu';
	$lang['strinputfn'] = 'Vstupn� funkcia';
	$lang['stroutputfn'] = 'V�stupn� funkcia';
	$lang['strpassbyval'] = 'Passed by val?';
	$lang['stralignment'] = 'Alignment';
	$lang['strelement'] = 'Element';
	$lang['strdelimiter'] = 'Delimiter';
	$lang['strstorage'] = 'Storage';
	$lang['strtypeneedsname'] = 'Mus� zada� n�zov pre tvoj typ.';
	$lang['strtypeneedslen'] = 'Mus� zada� d�ku pre tvoj typ.';
	$lang['strtypecreated'] = 'Typ Vytvoren�';
	$lang['strtypecreatedbad'] = 'Typ nebol vytvoren�.';
	$lang['strconfdroptype'] = 'Si si ist�, �e chce� zmaza� typ "%s"?';
	$lang['strtypedropped'] = 'Typ zmazan�.';
	$lang['strtypedroppedbad'] = 'Typ nebol zmazan�.';

	// Schemas
	$lang['strschema'] = 'Sch�ma (Schemas)';
	$lang['strschemas'] = 'Sch�my';
	$lang['strshowallschemas'] = 'Zobrazi� V�etky Sch�my';
	$lang['strnoschema'] = 'Nen�jden� �iadna sch�ma.';
	$lang['strnoschemas'] = 'Nen�jden� �iadne sch�my.';
	$lang['strcreateschema'] = 'Vytvori� Sch�mu';
	$lang['strschemaname'] = 'N�zov Sch�my';
	$lang['strschemaneedsname'] = 'Mus� zada� n�zov pre tvoju sch�mu.';
	$lang['strschemacreated'] = 'Sch�ma vytvoren�';
	$lang['strschemacreatedbad'] = 'Sch�ma nebola vytvoren�.';
	$lang['strconfdropschema'] = 'Si si ist�, �e chce� zmaza� sch�mu "%s"?';
	$lang['strschemadropped'] = 'Sch�ma zmazan�.';
	$lang['strschemadroppedbad'] = 'Sch�ma nebola zmazan�.';

	// Reports
	$lang['strreport'] = 'Reporty';
	$lang['strreports'] = 'Reporty';
	$lang['strshowallreports'] = 'Zobrazi� V�etky Reporty';
	$lang['strnoreports'] = 'Nen�jden� �iadne reporty.';
	$lang['strcreatereport'] = 'Vytvori� Report';
	$lang['strreportdropped'] = 'Report zmazan�.';
	$lang['strreportdroppedbad'] = 'Report nebol zmazan�.';
	$lang['strconfdropreport'] = 'Si si ist�, �e chce� zmaza� report "%s"?';
	$lang['strreportneedsname'] = 'Mus� zada� n�zov pre tvoj report.';
	$lang['strreportneedsdef'] = 'Mus� zada� SQL dotaz pre tvoj report.';
	$lang['strreportcreated'] = 'Report ulo�en�.';
	$lang['strreportcreatedbad'] = 'Report nebol ulo�en�.';

	// Miscellaneous
	$lang['strtopbar'] = '%s be�� na %s:%s -- Si prihl�sen� ako "%s", %s';
	$lang['strtimefmt'] = 'jS M, Y g:iA';

?>
