<?php

	/**
	 * Polish language file for WebDB.
	 * @maintainer Rafal Slubowski [slubek@users.sourceforge.net]
	 *
	 * $Id: polish.php,v 1.13 2003/02/27 14:30:09 slubek Exp $
	 */

	// Language and character set
	$appLang = 'Polish';
	$appCharset = 'ISO-8859-2';

	// Basic strings
	$strIntro = 'Witaj w phpPgAdmin.';
	$strLogin = '- Zaloguj';
	$strLoginFailed = 'Pr�ba zalogowania nie powiod�a si�';
	$strServer = 'Serwer';
	$strLogout = 'Wyloguj si�';
	$strOwner = 'W�a�ciciel';
	$strAction = 'Akcja';	
	$strActions = 'Akcje';	
	$strName = 'Nazwa';
	$strDefinition = 'Definicja';
	$strOperators = 'Operatory';
	$strAggregates = 'Funkcje agreguj�ce';
	$strProperties = 'W�a�ciwo�ci';
	$strBrowse = 'Przegl�daj';
	$strDrop = 'Usu�';
	$strDropped = 'Usuni�ty';
	$strNull = 'Null';
	$strNotNull = 'Not Null';
	$strPrev = 'Poprzedni';
	$strNext = 'Nast�pny';
	$strFailed = 'Nieudany';
	$strCreate = 'Utw�rz';
	$strComment = 'Komentarz';
	$strLength = 'D�ugo��';
	$strDefault = 'Domy�lny';
	$strAlter = 'Zmie�';
	$strCancel = 'Anuluj';
	$strSave = 'Zapisz';
	$strReset = 'Wyczy��';
	$strInsert = 'Wstaw';
	$strSelect = 'Wybierz';
	$strDelete = 'Usu�';
	$strUpdate = 'Zmie�';
	$strReferences = 'Odno�niki';
	$strYes = 'Tak';
	$strNo = 'Nie';
	$strEdit = 'Edycja';
	$strColumns = 'Kolumny';
	$strRows = 'wiersz(y)';
	$strExample = 'np.';
	$strBack = 'Wstecz';
	$strQueryResults = 'Wyniki zapytania';
	$strShow = 'Poka�';
 	$strEmpty = 'Wyczy��';
	$strLanguage = 'J�zyk';
	$strEncoding = 'Kodowanie';
	$strValue = 'Warto��';
	$strUnique = 'Unikatowy';
	$strPrimary = 'G��wny';
	$strExport = 'Eksport';
	$strSQL = 'SQL';
	$strGo = 'Wykonaj';
		
	// Error handling
	$strNoFrames = 'Aby u�ywa� tej aplikacji potrzebujesz przegl�darki obs�uguj�cej ramki.';
	$strBadConfig = 'Tw�j plik config.inc.php jest przestarza�y. Musisz go utworzy� ponownie wykorzystuj�c nowy config.inc.php-dist.';
	$strNotLoaded = 'Nie wkompilowa�e� do PHP obs�ugi tej bazy danych.';
	$strBadSchema = 'Podano b��dny schemat.';
	$strBadEncoding = 'B��dne kodowanie bazy.';
	$strSQLError = 'B��d SQL:';
	$strInStatement = 'W poleceniu:';
	$strInvalidScriptParam = 'B��dny parametr skryptu.';
	$strNoData = 'Nie znaleziono danych.';

	// Tables
	$strTable = 'Tabela';
	$strTables = 'Tabele';
	$strShowAllTables = 'Poka� wszystkie tabele';
	$strNoTable = 'Nie znaleziono tablicy.';
	$strNoTables = 'Nie znaleziono tablic.';
	$strCreateTable = 'Utw�rz tabel�';
	$strTableName = 'Nazwa tabeli';
	$strTableNeedsName = 'Musisz nazwa� tabel�.';
	$strTableNeedsField = 'Musisz poda� przynajmniej jedno pole.';
	$strTableNeedsCols = 'Musisz poda� prawid�ow� liczb� kolumn.';
	$strTableCreated = 'Utworzono tabel�.';
	$strTableCreatedBad = 'Operacja utworzenia tabeli si� nie powiod�a.';
	$strConfDropTable = 'Czy na pewno chcesz usun�� tablic� "%s"?';
	$strTableDropped = 'Tablica usuni�ta.';
	$strTableDroppedBad = 'Operacja usuni�cia tablicy si� nie powiod�a.';
	$strConfEmptyTable = 'Czy na pewno chcesz wyczy�ci� tablic� "%s"?';
	$strTableEmptied = 'Tablica wyczyszczona.';
	$strTableEmptiedBad = 'Operacja wyczyszczenia tablicy si� nie powiod�a.';
	$strInsertRow = 'Wstaw wiersz';
	$strRowInserted = 'Wiersz wstawiony.';
	$strRowInsertedBad = 'Operacja wstawienia wiersza si� nie powiod�a.';
	$strEditRow = 'Edycja wiersza';
	$strRowUpdated = 'Wiersz zaktualizowany.';
	$strRowUpdatedBad = 'Operacja aktalizacji wiersza si� nie powiod�a.';
	$strDeleteRow = 'Usu� wiersz';
	$strConfDeleteRow = 'Czy na pewno chcesz usun�� ten wiersz?';
	$strRowDeleted = 'Wiersz usuni�ty.';
	$strRowDeletedBad = 'Operacja usuni�cia wiersza si� nie powiod�a.';
	$strSaveAndRepeat = 'Zapisz i powt�rz';
	$strField = 'Pole';
	$strFields = 'Pola';
	$strNumFields = 'Ilo�� p�l';
	$strFieldNeedsName = 'Musisz nazwa� pole';
        $strSelectNeedsCol = 'Musisz wybra� przynajmniej jedn� kolumn�';
	$strAlterColumn = 'Zmie� kolumn�';
	$strColumnAltered = 'Kolumna zmodyfikowana.';
	$strColumnAlteredBad = 'Operacja modyfikacji kolumny si� nie powiod�a.';
	$strConfDropColumn = 'Czy na pewno chcesz usun�� kolumn� "%s" z tablicy "%s"?';
	$strColumnDropped = 'Kolumna usuni�ta.';
	$strColumnDroppedBad = 'Operacja usuni�cia kolumny si� nie powiod�a.';

	// Users
	$strUserAdmin = 'Administracja kontami u�ytkownik�w';
	$strUser = 'U�ytkownik';
	$strUsers = 'U�ytkownicy';
	$strUsername = 'Nazwa u�ytkownika';
	$strPassword = 'Has�o';
	$strSuper = 'Administrator?';
	$strCreateDB = 'Tworzenie BD?';
	$strExpires = 'Wygasa';	
	$strNoUsers = 'Nie znaleziono u�ytkownik�w.';
	$strUserUpdated = 'Parametry u�ytkownika zaktualizowane.';
	$strUserUpdatedBad = 'Operacja aktualizacji parametr�w u�ytkownika si� nie powiod�a.';
	
	// Groups
	$strGroupAdmin = 'Administracja grupami u�ytkownik�w';
	$strGroup = 'Grupa';
	$strGroups = 'Grupy';
	$strShowAllGroups = 'Poka� wszystkie grupy';
	$strNoGroup = 'Nie znaleziono grupy.';
	$strNoGroups = 'Nie znaleziono grup.';
	$strCreateGroup = 'Utw�rz grup�';
	$strGroupNeedsName = 'Musisz nazwa� grup�.';
	$strGroupCreated = 'Grupa utworzona.';
	$strGroupCreatedBad = 'Pr�ba utworzenia grupy si� nie powiod�a.';
	$strConfDropGroup = 'Czy na pewno chcesz utworzy� grup� "%s"?';
	$strGroupDropped = 'Grupa usuni�ta.';
	$strGroupDroppedBad = 'Usuni�cie grupy si� nie powiod�o.';
	$strMembers = 'Cz�onkowie';

	// Privileges
	$strPrivilege = 'Uprawnienie';
	$strPrivileges = 'Uprawnienia';
	$strNoPrivileges = 'Ten obiekt nie ma uprawnie�.';
	$strGrant = 'Nadaj';
	$strRevoke = 'Zabierz';
        $strGranted = 'Uprawnienia nadane.';
	$strGrantFailed = 'Pr�ba nadania uprawnie� si� nie powiod�a.';
	$strGrantUser = 'Nadaj u�ytkownikowi';
	$strGrantGroup = 'Nadaj grupie';
				
	// Databases
	$strDatabase = 'Baza danych';
	$strDatabases = 'Bazy danych';
	$strShowAllDatabases = 'Poka� wszystkie bazy danych';
	$strNoDatabase = 'Nie znaleziono bazy danych.';
	$strNoDatabases = 'Nie znaleziono �adnej bazy danych.';
	$strCreateDatabase = 'Utw�rz baz� danych';
	$strDatabaseName = 'Nazwa bazy danych';
	$strDatabaseNeedsName = 'Musisz nazwa� baz� danych.';
	$strDatabaseCreated = 'Baza danych utworzona.';
	$strDatabaseCreatedBad = 'Pr�ba utworzenia bazy danych si� nie powiod�a.';
	$strConfDropDatabase = 'Czy na pewno chcesz usun�� baz� danych "%s"?';
	$strDatabaseDropped = 'Baza danych usuni�ta.';
	$strDatabaseDroppedBad = 'Pr�ba usuni�cia bazy danych si� nie powiod�a.';
	$strEnterSQL = 'Podaj polecenie SQL do wykonania:';
	 
	// Views
	$strView = 'Widok';
	$strViews = 'Widoki';
	$strShowAllViews = 'Poka� wszystkie widoki';
	$strNoView = 'Nie znaleziono widoku.';
	$strNoViews = 'Nie znaleziono widok�w.';
	$strCreateView = 'Utw�rz widok';
	$strViewName = 'Nazwa widoku';
	$strViewNeedsName = 'Musisz nazwa� widok.';
	$strViewNeedsDef = 'Musisz zdefiniowa� widok.';
	$strViewCreated = 'Widok utworzony.';
	$strViewCreatedBad = 'Pr�ba utworzenia widoku si� nie powiod�a.';
	$strConfDropView = 'Czy na pewno chcesz usun�� widok "%s"?';
	$strViewDropped = 'Widok usuni�ty.';
	$strViewDroppedBad = 'Pr�ba usuni�cia widoku si� nie powiod�a.';
	$strViewUpdated = 'Widok zaktualizowany.';
	$strViewUpdatedBad = 'Pr�ba aktualizacji widoku si� nie powiod�a.';

	// Sequences
	$strSequence = 'Sekwencja';
	$strSequences = 'Sekwencje';
	$strShowAllSequences = 'Poka� wszystkie sekwencje';
	$strNoSequence = 'Nie znaleziono sekwencji.';
	$strNoSequences = 'Nie znaleziono sekwencji.';
	$strCreateSequence = 'Utw�rz sekwencj�';
	$strSequenceName = 'Nazwa sekwencji';
	$strLastValue = 'last_value';
	$strIncrementBy = 'increment_by';	
	$strMaxValue = 'max_value';
	$strMinValue = 'min_value';
	$strCacheValue = 'cache_value';
	$strLogCount = 'log_cnt';
	$strIsCycled = 'is_cycled';
	$strIsCalled = 'is_called';
	$strSequenceNeedsName = 'Musisz nazwa� sekwencj�';
	$strSequenceCreated = 'Utworzono sekwencj�';
	$strSequenceCreatedBad = 'Pr�ba utworzenia sekwencji si� nie powiod�a.';
	$strConfDropSequence = 'Czy na pewno chcesz usun�� sekwencj� "%s"?';
	$strSequenceDropped = 'Sekwencja usuni�ta.';
	$strSequenceDroppedBad = 'Pr�ba usuni�cia sekwencji si� nie powiod�a.';
						
	// Indeksy
	$strIndex = 'Indeks';
	$strIndexes = 'Indeksy';
	$strShowAllIndexes = 'Poka� wszystkie indeksy';
	$strNoIndex = 'Nie znaleziono indeksu.';
	$strNoIndexes = 'Nie znaleziono indeks�w.';
	$strCreateIndex = 'Utw�rz indeks';
	$strIndexName = 'Nazwa indeksu';
	$strTabName = 'Tab Name';
	$strColumnName = 'Nazwa kolumny';
	$strIndexNeedsName = 'Musisz nazwa� indeks.';
	$strIndexNeedsCols = 'W sk�ad indeksu musi wchodzi� przynajmniej jedna kolumna.';
	$strIndexCreated = 'Indeks utworzony';
	$strIndexCreatedBad = 'Pr�ba utworzenia indeksu si� nie powiod�a.';
	$strConfDropIndex = 'Czy na pewno chcesz usun�� indeks "%s"?';
	$strIndexDropped = 'Indeks usuni�ty.';
	$strIndexDroppedBad = 'Pr�ba usuni�cia indeksu si� nie powiod�a.';
	$strKeyName = 'Nazwa klucza';
	$strUniqueKey = 'Klucz Unikatowy';
	$strPrimaryKey = 'Klucz G��wny';
	
	// Regu�y
	$strRule = 'Regu�a';
	$strRules = 'Regu�y';
	$strShowAllRules = 'Poka� wszystkie regu�y';
	$strNoRule = 'Nie znaleziono regu�y.';
	$strNoRules = 'Nie znaleziono regu�.';
	$strCreateRule = 'Utw�rz regu��';
	$strRuleName = 'Nazwa regu�y';
	$strRuleNeedsName = 'Musisz nazwa� regu��.';
	$strRuleCreated = 'Utworzono regu��.';
	$strRuleCreatedBad = 'Pr�ba utworzenia regu�y si� nie powiod�a.';
	$strConfDropRule = 'Czy na pewno chcesz usun�� regu�� "%s" na "%s"?';
	$strRuleDropped = 'Regu�a usuni�ta.';
	$strRuleDroppedBad = 'Operacja usuni�cia regu�y si� nie powiod�a.';
	
	// Wi�zy integralno�ci
	$strConstraints = 'Wi�zy integralno�ci';
	$strShowAllConstraints = 'Poka� wszystkie wi�zy integralno�ci';
	$strNoConstraints = 'Nie znaleziono wi�z�w integralno�ci.';
	$strCreateConstraint = 'Utw�rz wi�zy integralno�ci';
	$strConstraintCreated = 'Utworzono wi�zy integralno�ci.';
	$strConstraintCreatedBad = 'Pr�ba utworzenia wi�z�w integralno�ci si� nie powiod�a.';
	$strConfDropConstraint = 'Czy na pewno chcesz usun�� wi�zy integralno�ci "%s" na "%s"?';
	$strConstraintDropped = 'Wi�zy integralno�ci usuni�te.';
	$strConstraintDroppedBad = 'Operacja usuni�cia wi�z�w integralno�ci si� nie powiod�a.';
		
	// Functions
	$strFunction = 'Funkcja';
	$strFunctions = 'Funkcje';
	$strShowAllFunctions = 'Poka� wszystkie funkcje';
	$strNoFunction = 'Nie znaleziono funkcji.';
	$strNoFunctions = 'Nie znaleziono funkcji.';
	$strCreateFunction = 'Utw�rz funkcj�';
	$strFunctionName = 'Nazwa funkcji';
	$strReturns = 'Zwraca';
	$strArguments = 'Parametry';
	$strFunctionNeedsName = 'Musisz nazwa� funkcj�.';
	$strFunctionNeedsDef = 'Musisz zdefiniowa� funkcj�.';
	$strFunctionCreated = 'Utworzono funkcj�.';
	$strFunctionCreatedBad = 'Pr�ba utworzenia funkcji si� nie powiod�a';
        $strConfDropFunction = 'Czy na pewno chcesz usun�� funkcj� "%s"?';
	$strFunctionDropped = 'Funkcja usuni�ta.';
	$strFunctionDroppedBad = 'Operacja usuni�cia funkcji si� nie powiod�a.';
	$strFunctionUpdated = 'Funkcja zaktualizowana.';
	$strFunctionUpdatedBad = 'Operacja aktualizacji funkcji si� nie powiod�a.';

	// Triggers
	$strTrigger = 'Procedura wyzwalana';
	$strTriggers = 'Procedury wyzwalane';
	$strShowAllTriggers = 'Poka� wszystkie procedury wyzwalane';
	$strNoTrigger = 'Nie znaleziono procedury wyzwalanej.';
	$strNoTriggers = 'Nie znaleziono procedur wyzwalanych.';
	$strCreateTrigger = 'Utw�rz procedur� wyzwalan�';
	$strTriggerName = 'Nazwa procedury wyzwalanej';
	$strTriggerNeedsName = 'Musisz nazwa� procedur� wyzwalan�';
	$strTriggerCreated = 'Utworzono procedur� wyzwalan�.';
	$strTriggerCreatedBad = 'Pr�ba utworzenia procedury wyzwalanej si� nie powiod�a';
        $strConfDropTrigger = 'Czy na pewno chcesz usun�� procedur� "%s" wyzwalan� przez "%s"?';
	$strTriggerDropped = 'Procedura wyzwalana usuni�ta.';
	$strTriggerDroppedBad = 'Operacja usuni�cia procedury wyzwalanej si� nie powiod�a.';
		
	// Types
	$strType = 'Typ';
	$strTypes = 'Typy';
	$strShowAllTypes = 'Poka� wszystkie typy';
	$strNoType = 'Nie znaleziono typu.';
	$strNoTypes = 'Nie znaleziono typ�w.';
	$strCreateType = 'Utw�rz typ';
	$strTypeName = 'Nazwa typu';
	$strInputFn = 'Funkcja wej�ciowa';
	$strOutputFn = 'Funkcja wyj�ciowa';
	$strPassByVal = 'Przekazywany przez warto��?';
	$strAlignment = 'Wyr�wnanie bajtowe';
	$strElement = 'Typ element�w';
	$strDelimiter = 'Znak oddzielaj�cy elementy tablicy';
	$strStorage = 'Technika przechowywania';
	$strTypeNeedsName = 'Musisz nazwa� typ.';
	$strTypeNeedsLen = 'Musisz poda� d�ugo�� typu.';
	$strTypeCreated = 'Typ utworzony';
	$strTypeCreatedBad = 'Pr�ba utworzenia typu si� nie powiod�a.';
	$strConfDropType = 'Czy na pewno chcesz usun�� typ "%s"?';
	$strTypeDropped = 'Typ usuni�ty.';
	$strTypeDroppedBad = 'Pr�ba usuni�cia typu si� nie powiod�a.';

	// Schemas
	$strSchema = 'Schemat';
	$strSchemas = 'Schematy';
	$strShowAllSchemas = 'Poka� wszystkie schematy';
	$strNoSchema = 'Nie znaleziono schematu.';
	$strNoSchemas = 'Nie znaleziono schemat�w.';
	$strCreateSchema = 'Utw�rz schemat';
	$strSchemaName = 'Nazwa schematu';
	$strSchemaNeedsName = 'Musisz nada� schematowi nazw�.';
	$strSchemaCreated = 'Schemat zosta� utworzony';
	$strSchemaCreatedBad = 'Pr�ba utworzenia schematu si� nie powiod�a.';
	$strConfDropSchema = 'Czy na pewno chcesz usun�� schemat "%s"?';
	$strSchemaDropped = 'Schemat usuni�ty.';
	$strSchemaDroppedBad = 'Pr�ba usuni�cia schematu si� nie powiod�a.';

	// Reports
	$strReport = 'Raport';
	$strReports = 'Raporty';
	$strNoReports = 'Nie znaleziono raport�w.';
	$strCreateReport = 'Utw�rz raport';
	$strReportDropped = 'Raport usuni�ty.';
	$strReportDroppedBad = 'Pr�ba usuni�cia raportu si� nie powiod�a.';
	$strConfDropReport = 'Czy na pewno chcesz usun�� raport "%s"?';
        $strReportNeedsName = 'Musisz nada� raportowi nazw�.';
	$strReportNeedsDef = 'Musisz zdefiniowa� zapytanie SQL tworz�ce raport.';
	$strReportCreated = 'Raport utworzony.';
	$strReportCreatedBad = 'Pr�ba utworzenia raportu si� nie powiod�a.';

	// Miscellaneous
	$strTopBar = '%s uruchomiony na %s:%s -- Jeste� zalogowany jako "%s", %s';
	$strTimeFmt = 'jS M, Y g:iA';

?>
