<?php

	/**
	 * Polish language file for WebDB.
	 * @maintainer Rafal Slubowski [slubek@users.sourceforge.net]
	 *
	 * $Id: polish.php,v 1.8 2003/01/21 23:09:53 slubek Exp $
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
	$strSequence = 'Sekwencja';
	$strSequences = 'Sekwencje';
	$strOperators = 'Operatory';
	$strTypes = 'Typy';
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
	$strComment = 'Skomentuj';
	$strLength = 'D�ugo��';
	$strDefault = 'Domy�lny';
	$strAlter = 'Zmie�';
	$strCancel = 'Anuluj';
	$strSave = 'Zapisz';
	$strInsert = 'Wstaw';
	$strSelect = 'Wybierz';
	$strDelete = 'Usu�';
	$strUpdate = 'Zmie�';
	$strReferences = 'Odno�niki';
	$strYes = 'Tak';
	$strNo = 'Nie';
	$strEdit = 'Edycja';
	$strRows = 'wiersz(y)';
	$strExample = 'np.';
	$strBack = 'Wstecz';
	$strQueryResults = 'Wyniki zapytania';
	$strShow = 'Poka�';
 	$strEmpty = 'Pusty';
	$strLanguage = 'J�zyk';
	
	// Error handling
	$strNoFrames = 'Aby u�ywa� tej aplikacji potrzebujesz przegl�darki obs�uguj�cej ramki.';
	$strBadConfig = 'Tw�j plik config.inc.php jest przestarza�y. Musisz go utworzy� ponownie wykorzystuj�c nowy config.inc.php-dist.';
	$strNotLoaded = 'Nie wkompilowa�e� do PHP obs�ugi tej bazy danych.';
	$strBadSchema = 'Invalid schema specified.';
	$strBadEncoding = 'Failed to set client encoding in database.';
	$strSQLError = 'B��d SQL:';
	$strInStatement = 'W poleceniu:';
	$strInvalidScriptParam = 'B��dny parametr skryptu.';
	$strNoData = 'Nie znaleziono danych.';

	// Tables
	$strNoTables = 'Nie znaleziono tablic.';
	$strNoTable = 'Nie znaleziono tablicy.';
	$strTable = 'Tabela';
	$strTables = 'Tabele';
	$strTableCreated = 'Utworzono tabel�.';
	$strTableCreatedBad = 'Operacja utworzenia tabeli si� nie powiod�a.';
	$strTableNeedsField = 'Musisz poda� przynajmniej jedno pole.';
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
	$strConfEmptyTable = 'Czy na pewno chcesz wyczy�ci� tablic� "%s"?';
	$strTableEmptied = 'Tablica wyczyszczona.';
	$strTableEmptiedBad = 'Operacja wyczyszczenia tablicy si� nie powiod�a.';
	$strConfDropTable = 'Czy na pewno chcesz usun�� tablic� "%s"?';
	$strTableDropped = 'Tablica usuni�ta.';
	$strTableDroppedBad = 'Operacja usuni�cia tablicy si� nie powiod�a.';

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

	// Groups
	$strGroupAdmin = 'Administracja grupami u�ytkownik�w';
	$strGroup = 'Grupa';
	$strGroups = 'Grupy';
	$strNoGroups = 'Nie znaleziono grup.';
	$strCreateGroup = 'Utw�rz grup�';
	$strShowAllGroups = 'Poka� wszystkie grupy';
	$strGroupNeedsName = 'Musisz nazwa� grup�.';
	$strGroupCreated = 'Grupa utworzona.';
	$strGroupCreatedBad = 'Pr�ba utworzenia grupy si� nie powiod�a.';
	$strConfDropGroup = 'Czy na pewno chcesz utworzy� grup� "%s"?';
	$strGroupDropped = 'Grupa usuni�ta.';
	$strGroupDroppedBad = 'Usuni�cie grupy si� nie powiod�o.';
	$strMembers = 'Cz�onkowie';

	// Privileges
	$strPrivileges = 'Uprawnienia';
	$strGrant = 'Nadaj';
	$strRevoke = 'Zabierz';

	// Databases
	$strDatabase = 'Baza danych';
	$strDatabases = 'Bazy danych';
	$strNoDatabases = 'Nie znaleziono �adnej bazy danych.';
	$strDatabaseNeedsName = 'Musisz nazwa� baz� danych.';
	$strDatabaseCreated = 'Baza danych utworzona.';
	$strDatabaseCreatedBad = 'Pr�ba utworzenia bazy danych si� nie powiod�a.';
	
	// Views
	$strViewNeedsName = 'Musisz nazwa� widok.';
	$strViewNeedsDef = 'Musisz zdefiniowa� widok.';
	$strCreateView = 'Utw�rz widok';
	$strNoViews = 'Nie znaleziono widok�w.';
	$strView = 'Widok';
	$strViews = 'Widoki';

	// Sequences
	$strNoSequences = 'Nie znaleziono sekwencji.';
	$strSequenceName = 'sequence_name';
	$strLastValue = 'last_value';
	$strIncrementBy = 'increment_by';	
	$strMaxValue = 'max_value';
	$strMinValue = 'min_value';
	$strCacheValue = 'cache_value';
	$strLogCount = 'log_cnt';
	$strIsCycled = 'is_cycled';
	$strIsCalled = 'is_called';
	$strReset =	'Wyczy��';

	// Indeksy
	$strIndexes = 'Indeksy';
	$strIndexName = 'Nazwa Indeksu';
	$strTabName = 'Tab Name';
	$strColumnName = 'Nazwa Kolumny';
	$strUniqueKey = 'Klucz Unikatowy';
	$strPrimaryKey = 'Klucz G��wny';
	$strShowAllIndicies = 'Poka� wszystkie indeksy';
	$strCreateIndex = 'Utw�rz indeks';
	$strIndexNeedsName = 'Musisz nazwa� indeks.';
	$strIndexNeedsCols = 'W sk�ad indeksu musi wchodzi� przynajmniej jedna kolumna.';
	$strIndexCreated = 'Indeks utworzony';
	$strIndexCreatedBad = 'Pr�ba utworzenia indeksu si� nie powiod�a.';
	$strConfDropIndex = 'Czy na pewno chcesz usun�� indeks "%s"?';
	$strIndexDropped = 'Indeks usuni�ty.';
	$strIndexDroppedBad = 'Pr�ba usuni�cia indeksu si� nie powiod�a.';
	
	// Regu�y
	$strRule = 'Regu�a';
	$strRules = 'Regu�y';
	$strNoRules = 'Nie znaleziono regu�.';
	$strCreateRule = 'Utw�rz regu��';
	$strConfDropRule = 'Czy na pewno chcesz usun�� regu�� "%s" na "%s"?';
	$strRuleDropped = 'Regu�a usuni�ta.';
	$strRuleDroppedBad = 'Operacja usuni�cia regu�y si� nie powiod�a.';
	
	// Tablice
	$strField = 'Pole';
	$strFields = 'Pola';
	$strType = 'Typ';
	$strValue = 'Warto��';
	$strShowAllTables = 'Poka� wszystkie tablice';
	$strUnique = 'Unikatowy';
	$strPrimary = 'G��wny';
	$strKeyName = 'Nazwa klucza';
	$strNumFields = 'Ilo�� p�l';
	$strCreateTable = 'Utw�rz tabel�';
	$strTableNeedsName = 'Musisz nazwa� tabel�.';
	$strTableNeedsCols = 'Musisz poda� prawid�ow� liczb� kolumn.';
	$strExport = 'Eksport';
	$strColumns = 'Kolumny';

	// Wi�zy integralno�ci
	$strConstraints = 'Wi�zy integralno�ci';
	$strNoConstraints = 'Nie znaleziono wi�z�w integralno�ci.';
	$strCreateConstraint = 'Utw�rz wi�zy integralno�ci';
	$strConfDropConstraint = 'Czy na pewno chcesz usun�� wi�zy integralno�ci "%s" na "%s"?';
	$strConstraintDropped = 'Wi�zy integralno�ci usuni�te.';
	$strConstraintDroppedBad = 'Operacja usuni�cia wi�z�w integralno�ci si� nie powiod�a.';
		
	// Functions
	$strNoFunctions = 'Nie znaleziono funkcji.';
	$strFunction = 'Funkcja';
	$strFunctions = 'Funkcje';
	$strReturns = 'Zwraca';
	$strArguments = 'Parametry';
	$strFunctionNeedsName = 'Musisz nazwa� funkcj�.';
	$strFunctionNeedsDef = 'Musisz zdefiniowa� funkcj�.';
	
	// Triggers
	$strTrigger = 'Procedura wyzwalana';
	$strTriggers = 'Procedury wyzwalane';
	$strNoTriggers = 'Nie znaleziono procedur wyzwalanych.';
	$strCreateTrigger = 'Utw�rz procedur� wyzwalan�';
        $strConfDropTrigger = 'Czy na pewno chcesz usun�� procedur� "%s" wyzwalan� przez "%s"?';
	$strTriggerDropped = 'Procedura wyzwalana usuni�ta.';
	$strTriggerDroppedBad = 'Operacja usuni�cia procedury wyzwalanej si� nie powiod�a.';
		
	// Types
	$strType = 'Typ';
	$strTypes = 'Typy';
	$strNoTypes = 'Nie znaleziono typ�w.';
	$strCreateType = 'Utw�rz Typ';
	$strConfDropType = 'Czy na pewno chcesz usun�� typ "%s"?';
	$strTypeDropped = 'Typ usuni�ty.';
	$strTypeDroppedBad = 'Pr�ba usuni�cia typu si� nie powiod�a.';
	$strTypeCreated = 'Typ utworzony';
	$strTypeCreatedBad = 'Pr�ba utworzenia typu si� nie powiod�a.';
	$strShowAllTypes = 'Poka� wszystkie typy';
	$strInputFn = 'Funkcja wej�ciowa';
	$strOutputFn = 'Funkcja wyj�ciowa';
	$strPassByVal = 'Przekazywany przez warto��?';
	$strAlignment = 'Wyr�wnanie bajtowe';
	$strElement = 'Typ element�w';
	$strDelimiter = 'Znak oddzielaj�cy elementy tablicy';
	$strStorage = 'Technika przechowywania';
	$strTypeNeedsName = 'Musisz nazwa� typ.';
	$strTypeNeedsLen = 'Musisz poda� d�ugo�� typu.';

	// Schemas
	$strSchema = 'Schemat';
	$strSchemas = 'Schematy';
	$strCreateSchema = 'Utw�rz schemat';
	$strNoSchemas = 'Nie znaleziono schemat�w.';
	$strConfDropSchema = 'Czy na pewno chcesz usun�� schemat "%s"?';
	$strSchemaDropped = 'Schemat usuni�ty.';
	$strSchemaDroppedBad = 'Pr�ba usuni�cia schematu si� nie powiod�a.';
	$strSchemaCreated = 'Schemat zosta� utworzony';
	$strSchemaCreatedBad = 'Pr�ba utworzenia schematu si� nie powiod�a.';
	$strShowAllSchemas = 'Poka� wszystkie schematy';
	$strSchemaNeedsName = 'Musisz nada� schematowi nazw�.';

	// Miscellaneous
	$strTopBar = '%s uruchomiony na %s:%s -- Jeste� zalogowany jako "%s", %s';
	$strTimeFmt = 'jS M, Y g:iA';

?>
