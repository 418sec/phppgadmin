<?php

	/**
	 * Polish language file for WebDB.
	 * @maintainer Rafal Slubowski [rafal@gem.pl]
	 *
	 * $Id: polish.php,v 1.3 2003/01/02 02:27:47 chriskl Exp $
	 */

	$appLang = 'Polish';
	$appCharset = 'ISO-8859-2';

	$strNoFrames = 'Aby u�ywa� tej aplikacji potrzebujesz przegl�darki obs�uguj�cej ramki.';
	$strLogin = '- Zaloguj';
	$strLoginFailed = 'Pr�ba zalogowania nie powiod�a si�';
	$strNoTables = 'Nie znaleziono tablic.';
	$strNoTable = 'Nie znaleziono tablicy.';
	$strNoViews = 'Nie znaleziono widok�w.';
	$strNoFunctions = 'Nie znaleziono funkcji.';
	$strOwner = 'W�a�ciciel';
	$strAction = 'Akcja';	
	$strActions = 'Akcje';	
	$strName = 'Nazwa';
	$strTable = 'Tabela';
	$strTables = 'Tabele';
	$strView = 'Widok';
	$strViews = 'Widoki';
	$strDefinition = 'Definicja';
	$strTriggers = 'Wi�zy integralno�ci';
	$strRules = 'Regu�y';
	$strSequence = 'Sekwencja';
	$strSequences = 'Sekwencje';
	$strFunction = 'Funkcja';
	$strFunctions = 'Funkcje';
	$strOperators = 'Operatory';
	$strTypes = 'Typy';
	$strAggregates = 'Funkcje agreguj�ce';
	$strIndicies = 'Indeksy';
	$strProperties = 'W�a�ciwo�ci';
	$strBrowse = 'Przegl�daj';
	$strDrop = 'Usu�';
	$strDropped = 'Usuni�ty';
	$strNull = 'Null';
	$strNotNull = 'Not Null';
	$strPrev = 'Poprzedni';
	$strNext = 'Nast�pny';
	$strFailed = 'Failed';
	$strNotLoaded = 'Nie wkompilowa�e� do PHP obs�ugi tej bazy danych.';
	$strCreate = 'Utw�rz';
	$strComment = 'Skomentuj';
	$strNext = 'Nast�pny';
	$strLength = 'D�ugo��';
	$strDefault = 'Domy�lny';
	$strAlter = 'Zmie�';
	$strCancel = 'Anuluj';
	$strSave = 'Zapisz';
	$strPrivileges = 'Uprawnienia';
	$strInsert = 'Wstaw';
	$strSelect = 'Wybierz';
	$strDelete = 'Usu�';
	$strUpdate = 'Zmie�';
	$strRule = 'Regu�a';
	$strReferences = 'Odno�niki';
	$strTrigger = 'Trigger';
	$strYes = 'Tak';
	$strNo = 'Nie';
	$strEdit = 'Edycja';
	$strInvalidScriptParam = 'B��dny parametr skryptu.';
	$strRows = 'wiersz(y)';
	$strExample = 'np.';

	// Error handling
        $strSQLError = 'B��d SQL:';
        $strInStatement = 'W poleceniu:';
			
	// Users
	$strUser = 'U�ytkownik';
	$strGroup = 'Grupa';
	$strUsername = 'Nazwa u�ytkownika';
	$strPassword = 'Has�o';
	$strSuper = 'Administrator?';
	$strCreateDB = 'Tworzenie BD?';
	$strExpires = 'Wygasa';	
	$strNoUsers = 'Nie znaleziono u�ytkownik�w.';
	
	// Databases
	$strDatabase = 'Baza danych';
	$strDatabases = 'Bazy danych';
	$strNoDatabases = 'Nie znaleziono �adnej bazy danych.';
	$strDatabaseNeedsName = 'Musisz nazwa� baz� danych.';
	
	// Views
	$strViewNeedsName = 'Musisz nazwa� widok.';
	$strViewNeedsDef = 'Musisz zdefiniowa� widok.';

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

	// Indicies
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
	
	// Tables
	$strField = 'Pole';
	$strFields = 'Pola';
	$strType = 'Typ';
	$strValue = 'Warto��';
	$strShowAllTables = 'Poka� wszystkie tablice';
	$strUnique = 'Unikatowy';
	$strPrimary = 'G��wny';
	$strKeyName = 'Nazwa Klucza';
	$strNumFields = 'Ilo�� P�l';
	$strCreateTable = 'Utw�rz Tabel�';
	$strTableNeedsName = 'Musisz nazwa� tabel�.';
	$strTableNeedsCols = 'Musisz poda� prawid�ow� liczb� kolumn.';
	$strExport = 'Eksport';
        $strConstraints = 'Wi�zy integralno�ci';
        $strColumns = 'Kolumny';
		
	// Functions
	$strReturns = 'Zwraca';
	$strArguments = 'Parametry';
	$strLanguage = 'J�zyk';
	$strFunctionNeedsName = 'Musisz nazwa� funkcj�.';
	$strFunctionNeedsDef = 'Musisz zdefiniowa� funkcj�.';
	
	// Triggers
	$strTriggers = 'Triggery';
	$strNoTriggers = 'Nie znaleziono trigger�w.';
	$strCreateTrigger = 'Utw�rz Trigger';

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
																				
?>
