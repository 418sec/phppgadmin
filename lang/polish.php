<?php

	/**
	 * Polish language file for WebDB.
	 * @maintainer Rafal Slubowski [slubek@users.sourceforge.net]
	 *
	 * $Id: polish.php,v 1.44 2005/04/01 21:02:36 slubek Exp $
	 */

	// Language and character set
	$lang['applang'] = 'Polski';
	$lang['appcharset'] = 'ISO-8859-2';
	$lang['applocale'] = 'pl_PL';
	$lang['appdbencoding'] = 'LATIN2';
	$lang['applangdir'] = 'ltr';
 
	// Welcome
	$lang['strintro'] = 'Witaj w phpPgAdmin.';
	$lang['strppahome'] = 'Strona domowa phpPgAdmin';
	$lang['strpgsqlhome'] = 'Strona domowa PostgreSQL';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'Dokumentacja PostgreSQL (lokalna)';
	$lang['strreportbug'] = 'Zg�o� raport o b��dzie';
	$lang['strviewfaq'] = 'Przejrzyj FAQ';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';

	// Basic strings
	$lang['strlogin'] = 'Zaloguj';
	$lang['strloginfailed'] = 'Pr�ba zalogowania nie powiod�a si�';
	$lang['strlogindisallowed'] = 'Logowanie niedozwolone';
	$lang['strserver'] = 'Serwer';
	$lang['strlogout'] = 'Wyloguj si�';
	$lang['strowner'] = 'W�a�ciciel';
	$lang['straction'] = 'Akcja';	
	$lang['stractions'] = 'Akcje';	
	$lang['strname'] = 'Nazwa';
	$lang['strdefinition'] = 'Definicja';
	$lang['strproperties'] = 'W�a�ciwo�ci';
	$lang['strbrowse'] = 'Przegl�daj';
	$lang['strdrop'] = 'Usu�';
	$lang['strdropped'] = 'Usuni�ty';
	$lang['strnull'] = 'Null';
	$lang['strnotnull'] = 'Not Null';
	$lang['strprev'] = 'Poprzedni';
	$lang['strnext'] = 'Nast�pny';
	$lang['strfirst'] = '<< Pierwszy';
	$lang['strlast'] = 'Ostatni >>';
	$lang['strfailed'] = 'Nieudany';
	$lang['strcreate'] = 'Utw�rz';
	$lang['strcreated'] = 'Utworzony';
	$lang['strcomment'] = 'Komentarz';
	$lang['strlength'] = 'D�ugo��';
	$lang['strdefault'] = 'Domy�lny';
	$lang['stralter'] = 'Zmie�';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Anuluj';
	$lang['strsave'] = 'Zapisz';
	$lang['strreset'] = 'Wyczy��';
	$lang['strinsert'] = 'Wstaw';
	$lang['strselect'] = 'Wybierz';
	$lang['strdelete'] = 'Usu�';
	$lang['strupdate'] = 'Zmie�';
	$lang['strreferences'] = 'Odno�niki';
	$lang['stryes'] = 'Tak';
	$lang['strno'] = 'Nie';
	$lang['strtrue'] = 'Prawda';
	$lang['strfalse'] = 'Fa�sz';
	$lang['stredit'] = 'Edycja';
	$lang['strcolumn']  =  'Kolumna';
	$lang['strcolumns'] = 'Kolumny';
	$lang['strrows'] = 'wiersz(y)';
	$lang['strrowsaff'] = 'wiersz(y) dotyczy.';
	$lang['strobjects'] = 'obiekty';
	$lang['strexample'] = 'np.';
	$lang['strback'] = 'Wstecz';
	$lang['strqueryresults'] = 'Wyniki zapytania';
	$lang['strshow'] = 'Poka�';
 	$lang['strempty'] = 'Wyczy��';
	$lang['strlanguage'] = 'J�zyk';
	$lang['strencoding'] = 'Kodowanie';
	$lang['strvalue'] = 'Warto��';
	$lang['strunique'] = 'Unikatowy';
	$lang['strprimary'] = 'G��wny';
	$lang['strexport'] = 'Eksport';
	$lang['strimport'] = 'Import';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'Wykonaj';
	$lang['stradmin'] = 'Administruj';
	$lang['strvacuum'] = 'Przeczy��';
	$lang['stranalyze'] = 'Analizuj';
	$lang['strcluster'] = 'Klastruj';
	$lang['strclustered'] = 'Klastrowany?';
	$lang['strreindex'] = 'Przeindeksuj';
	$lang['strrun'] = 'Uruchom';
	$lang['stradd'] = 'Dodaj';
	$lang['strevent'] = 'Zdarzenie';
	$lang['strwhere'] = 'Gdzie';
	$lang['strinstead'] = 'Wykonaj zamiast';
	$lang['strwhen'] = 'Kiedy';
	$lang['strformat'] = 'Format';
	$lang['strdata'] = 'Dane';
	$lang['strconfirm'] = 'Potwierd�';
	$lang['strexpression'] = 'Wyra�enie';
	$lang['strellipsis'] = '...';
	$lang['strseparator']  =  ': ';
	$lang['strexpand'] = 'Rozwi�';
	$lang['strcollapse'] = 'Zwi�';
	$lang['strexplain'] = 'Explain';
	$lang['strexplainanalyze'] = 'Explain Analyze';
	$lang['strfind'] = 'Znajd�';
	$lang['stroptions'] = 'Opcje';
	$lang['strrefresh'] = 'Od�wie�';
	$lang['strdownload'] = 'Pobierz';
	$lang['strdownloadgzipped'] = 'Pobierz skompresowane gzip-em';
	$lang['strinfo'] = 'Informacje';
	$lang['stroids'] = 'OIDy';
	$lang['stradvanced'] = 'Zaawansowane';
	$lang['strvariables'] = 'Zmienne';
	$lang['strprocess'] = 'Proces';
	$lang['strprocesses'] = 'Procesy';
	$lang['strsetting'] = 'Ustawienie';
	$lang['streditsql'] = 'Edycja zapytania SQL';
	$lang['strruntime']  =  'Ca�kowity czas pracy: %s ms.';
	$lang['strpaginate'] = 'Wy�wietl wyniki stronami';
	$lang['struploadscript'] = 'lub za�aduj skrypt SQL:';
	$lang['strstarttime'] = 'Czas pocz�tku';
	$lang['strfile'] = 'Plik';
	$lang['strfileimported']  = 'Plik zosta� zaimportowany.';

	// Error handling
	$lang['strnoframes'] = 'Aby u�ywa� tej aplikacji potrzebujesz przegl�darki obs�uguj�cej ramki.';
	$lang['strbadconfig'] = 'Tw�j plik config.inc.php jest przestarza�y. Musisz go utworzy� ponownie wykorzystuj�c nowy config.inc.php-dist.';
	$lang['strnotloaded'] = 'Nie wkompilowa�e� do PHP obs�ugi tej bazy danych.';
	$lang['strpostgresqlversionnotsupported']  =  'Nieobs�ugiwana wersja PostgreSQL. Uaktualnij do wersji %s lub nowszej.';
	$lang['strbadschema'] = 'Podano b��dny schemat.';
	$lang['strbadencoding'] = 'B��dne kodowanie bazy.';
	$lang['strsqlerror'] = 'B��d SQL:';
	$lang['strinstatement'] = 'W poleceniu:';
	$lang['strinvalidparam'] = 'B��dny parametr.';
	$lang['strnodata'] = 'Nie znaleziono danych.';
	$lang['strnoobjects'] = 'Nie znaleziono obiekt�w.';
	$lang['strrownotunique'] = 'Brak unikatowego identyfikatora dla tego wiersza.';
	$lang['strnoreportsdb'] = 'Nie utworzy�e� bazy raport�w. Instrukcj� znajdziesz w pliku INSTALL.';
	$lang['strnouploads']  =  '�adowanie plik�w wy��czone.';
	$lang['strimporterror']  =  'B��d importu.';
	$lang['strimporterrorline']  =  'B��d importu w linii %s.';

	// Tables
	$lang['strtable'] = 'Tabela';
	$lang['strtables'] = 'Tabele';
	$lang['strshowalltables'] = 'Poka� wszystkie tabele';
	$lang['strnotables'] = 'Nie znaleziono tabel.';
	$lang['strnotable']  =  'Nie znaleziono tabeli.';
	$lang['strcreatetable'] = 'Utw�rz tabel�';
	$lang['strtablename'] = 'Nazwa tabeli';
	$lang['strtableneedsname'] = 'Musisz nazwa� tabel�.';
	$lang['strtableneedsfield'] = 'Musisz poda� przynajmniej jedno pole.';
	$lang['strtableneedscols'] = 'Musisz poda� prawid�ow� liczb� kolumn.';
	$lang['strtablecreated'] = 'Tabela zosta�a utworzona.';
	$lang['strtablecreatedbad'] = 'Pr�ba utworzenia tabeli si� nie powiod�a.';
	$lang['strconfdroptable'] = 'Czy na pewno chcesz usun�� tabel� "%s"?';
	$lang['strtabledropped'] = 'Tabela zosta�a usuni�ta.';
	$lang['strtabledroppedbad'] = 'Pr�ba usuni�cia tabeli si� nie powiod�a.';
	$lang['strconfemptytable'] = 'Czy na pewno chcesz wyczy�ci� tabel� "%s"?';
	$lang['strtableemptied'] = 'Tabela zosta�a wyczyszczona.';
	$lang['strtableemptiedbad'] = 'Pr�ba wyczyszczenia tabeli si� nie powiod�a.';
	$lang['strinsertrow'] = 'Wstaw wiersz';
	$lang['strrowinserted'] = 'Wiersz zosta� wstawiony.';
	$lang['strrowinsertedbad'] = 'Pr�ba wstawienia wiersza si� nie powiod�a.';
	$lang['strrowduplicate']  =  'Pr�ba wstawienia zduplikowanego wiersza.';
	$lang['streditrow'] = 'Edycja wiersza';
	$lang['strrowupdated'] = 'Wiersz zosta� zaktualizowany.';
	$lang['strrowupdatedbad'] = 'Pr�ba aktualizacji wiersza si� nie powiod�a.';
	$lang['strdeleterow'] = 'Usu� wiersz';
	$lang['strconfdeleterow'] = 'Czy na pewno chcesz usun�� ten wiersz?';
	$lang['strrowdeleted'] = 'Wiersz zosta� usuni�ty.';
	$lang['strrowdeletedbad'] = 'Pr�ba usuni�cia wiersza si� nie powiod�a.';
	$lang['strinsertandrepeat']  =  'Wstaw i powt�rz';
	$lang['strnumcols']  =  'Ilo�� kolumn';
	$lang['strcolneedsname']  =  'Musisz poda� nazw� kolumny';
	$lang['strselectallfields'] = 'Wybierz wszystkie pola';
	$lang['strselectneedscol'] = 'Musisz wybra� przynajmniej jedn� kolumn�';
	$lang['strselectunary'] = 'Operatory bezargumentowe (IS NULL/IS NOT NULL) nie mog� mie� podanej warto�ci';
	$lang['straltercolumn'] = 'Zmie� kolumn�';
	$lang['strcolumnaltered'] = 'Kolumna zosta�a zmodyfikowana.';
	$lang['strcolumnalteredbad'] = 'Pr�ba modyfikacji kolumny si� nie powiod�a.';
	$lang['strconfdropcolumn'] = 'Czy na pewno chcesz usun�� kolumn� "%s" z tabeli "%s"?';
	$lang['strcolumndropped'] = 'Kolumna zosta�a usuni�ta.';
	$lang['strcolumndroppedbad'] = 'Pr�ba usuni�cia kolumny si� nie powiod�a.';
	$lang['straddcolumn'] = 'Dodaj kolumn�';
	$lang['strcolumnadded'] = 'Kolumna zosta�a dodana.';
	$lang['strcolumnaddedbad'] = 'Pr�ba dodania kolumny si� nie powiod�a.';
	$lang['strcascade'] = 'CASCADE';
	$lang['strtablealtered'] = 'Tabela zosta�a zmodyfikowana.';
	$lang['strtablealteredbad'] = 'Pr�ba modyfikacji tabeli si� nie powiod�a.';
	$lang['strdataonly'] = 'Tylko dane';
	$lang['strstructureonly'] = 'Tylko struktura';
	$lang['strstructureanddata'] = 'Struktura i dane';
	$lang['strtabbed']  =  'Z tabulacjami';
	$lang['strauto']  =  'Automatyczny';
	$lang['strconfvacuumtable']  =  'Czy na pewno chcesz wykona� vacuum "%s"?';
	$lang['strestimatedrowcount']  =  'Przybli�ona ilo�� wierszy';
			
	// Users
	$lang['struser'] = 'U�ytkownik';
	$lang['strusers'] = 'U�ytkownicy';
	$lang['strusername'] = 'Nazwa u�ytkownika';
	$lang['strpassword'] = 'Has�o';
	$lang['strsuper'] = 'Administrator?';
	$lang['strcreatedb'] = 'Tworzenie BD?';
	$lang['strexpires'] = 'Wygasa';	
	$lang['strsessiondefaults'] = 'Warto�ci domy�lne sesji';
	$lang['strnousers'] = 'Nie znaleziono u�ytkownik�w.';
	$lang['struserupdated'] = 'Parametry u�ytkownika zosta�y zaktualizowane.';
	$lang['struserupdatedbad'] = 'Pr�ba aktualizacji parametr�w u�ytkownika si� nie powiod�a.';
	$lang['strshowallusers'] = 'Poka� wszystkich u�ytkownik�w';
	$lang['strcreateuser'] = 'Utw�rz u�ytkownika';
	$lang['struserneedsname'] = 'Musisz poda� nazw� u�ytkownika.';
	$lang['strusercreated'] = 'U�ytkownik zosta� utworzony.';
	$lang['strusercreatedbad'] = 'Pr�ba utworzenia u�ytkownika si� nie powiod�a.';
	$lang['strconfdropuser'] = 'Czy na pewno chcesz usun�� u�ytkownika "%s"?';
	$lang['struserdropped'] = 'U�ytkownik zosta� usuni�ty.';
	$lang['struserdroppedbad'] = 'Pr�ba usuni�cia u�ytkownika si� nie powiod�a.';
	$lang['straccount'] = 'Konto';
	$lang['strchangepassword'] = 'Zmie� has�o';
	$lang['strpasswordchanged'] = 'Has�o zosta�o zmienione.';
	$lang['strpasswordchangedbad'] = 'Pr�ba zmiany has�a si� nie powiod�a.';
	$lang['strpasswordshort'] = 'Has�o jest za kr�tkie.';
	$lang['strpasswordconfirm'] = 'Has�o i potwierdzenie musz� by� takie same.';
							
	// Groups
	$lang['strgroup'] = 'Grupa';
	$lang['strgroups'] = 'Grupy';
	$lang['strnogroup'] = 'Nie znaleziono grupy.';
	$lang['strnogroups'] = 'Nie znaleziono grup.';
	$lang['strcreategroup'] = 'Utw�rz grup�';
	$lang['strshowallgroups'] = 'Poka� wszystkie grupy';
	$lang['strgroupneedsname'] = 'Musisz nazwa� grup�.';
	$lang['strgroupcreated'] = 'Grupa zosta�a utworzona.';
	$lang['strgroupcreatedbad'] = 'Pr�ba utworzenia grupy si� nie powiod�a.';
	$lang['strconfdropgroup'] = 'Czy na pewno chcesz utworzy� grup� "%s"?';
	$lang['strgroupdropped'] = 'Grupa zosta�a usuni�ta.';
	$lang['strgroupdroppedbad'] = 'Pr�ba usuni�cia grupy si� nie powiod�a.';
	$lang['strmembers'] = 'Cz�onkowie';
	$lang['straddmember'] = 'Dodaj cz�onka grupy';
	$lang['strmemberadded'] = 'Cz�onek grupy zosta� dodany.';
	$lang['strmemberaddedbad'] = 'Pr�ba dodania cz�onka grupy si� nie powiod�a.';
	$lang['strdropmember'] = 'Usu� cz�onka grupy';
	$lang['strconfdropmember'] = 'Czy na pewno chcesz usun�� "%s" z grupy "%s"?';
	$lang['strmemberdropped'] = 'Cz�onek grupy zosta� usuni�ty.';
	$lang['strmemberdroppedbad']  =  'Pr�ba usuni�cia cz�onka grupy si� nie powiod�a.';

	// Privileges
	$lang['strprivilege'] = 'Uprawnienie';
	$lang['strprivileges'] = 'Uprawnienia';
	$lang['strnoprivileges'] = 'Ten obiekt nie ma uprawnie�.';
	$lang['strgrant'] = 'Nadaj';
	$lang['strrevoke'] = 'Zabierz';
	$lang['strgranted'] = 'Uprawnienia zosta�y nadane.';
	$lang['strgrantfailed'] = 'Pr�ba nadania uprawnie� si� nie powiod�a.';
	$lang['strgrantbad'] = 'Musisz poda� u�ytkownika lub grup�, a tak�e uprawnienia, jakie chcesz nada�.';
	$lang['strgrantor'] = 'Kto nada�';
	$lang['strasterisk'] = '*';
				
	// Databases
	$lang['strdatabase'] = 'Baza danych';
	$lang['strdatabases'] = 'Bazy danych';
	$lang['strshowalldatabases'] = 'Poka� wszystkie bazy danych';
	$lang['strnodatabase'] = 'Nie znaleziono bazy danych.';
	$lang['strnodatabases'] = 'Nie znaleziono �adnej bazy danych.';
	$lang['strcreatedatabase'] = 'Utw�rz baz� danych';
	$lang['strdatabasename'] = 'Nazwa bazy danych';
	$lang['strdatabaseneedsname'] = 'Musisz nazwa� baz� danych.';
	$lang['strdatabasecreated'] = 'Baza danych zosta�a utworzona.';
	$lang['strdatabasecreatedbad'] = 'Pr�ba utworzenia bazy danych si� nie powiod�a.';
	$lang['strconfdropdatabase'] = 'Czy na pewno chcesz usun�� baz� danych "%s"?';
	$lang['strdatabasedropped'] = 'Baza danych zosta�a usuni�ta.';
	$lang['strdatabasedroppedbad'] = 'Pr�ba usuni�cia bazy danych si� nie powiod�a.';
	$lang['strentersql'] = 'Podaj polecenie SQL do wykonania:';
	$lang['strsqlexecuted'] = 'Polecenie SQL zosta�o wykonane.';
	$lang['strvacuumgood'] = 'Czyszczenie bazy zosta�o zako�czone.';
	$lang['strvacuumbad'] = 'Pr�ba czyszczenia bazy si� nie powiod�a.';
	$lang['stranalyzegood'] = 'Analiza bazy zosta�a zako�czona.';
	$lang['stranalyzebad'] = 'Pr�ba analizy si� nie powiod�a.';
	$lang['strreindexgood']  =  'Reindeksacja zosta�a zako�czona.';
	$lang['strreindexbad']  =  'Pr�ba reindeksacji si� nie powiod�a.';
	$lang['strfull']  =  'Pe�ne';
	$lang['strfreeze']  =  'Zamro�enie';
	$lang['strforce']  =  'Wymuszenie';
	$lang['strsignalsent']  =  'Sygna� zosta� wys�any.';
	$lang['strsignalsentbad']  =  'Pr�ba wys�ania sygna�u si� nie powiod�a.';
	$lang['strallobjects']  =  'Wszystkie obiekty';

	// Views
	$lang['strview'] = 'Widok';
	$lang['strviews'] = 'Widoki';
	$lang['strshowallviews'] = 'Poka� wszystkie widoki';
	$lang['strnoview'] = 'Nie znaleziono widoku.';
	$lang['strnoviews'] = 'Nie znaleziono widok�w.';
	$lang['strcreateview'] = 'Utw�rz widok';
	$lang['strviewname'] = 'Nazwa widoku';
	$lang['strviewneedsname'] = 'Musisz nazwa� widok.';
	$lang['strviewneedsdef'] = 'Musisz zdefiniowa� widok.';
	$lang['strviewneedsfields']  =  'Musisz poda� kolumny, kt�re maj� by� widoczne w widoku.';
	$lang['strviewcreated'] = 'Widok zosta� utworzony.';
	$lang['strviewcreatedbad'] = 'Pr�ba utworzenia widoku si� nie powiod�a.';
	$lang['strconfdropview'] = 'Czy na pewno chcesz usun�� widok "%s"?';
	$lang['strviewdropped'] = 'Widok zosta� usuni�ty.';
	$lang['strviewdroppedbad'] = 'Pr�ba usuni�cia widoku si� nie powiod�a.';
	$lang['strviewupdated'] = 'Widok zosta� zaktualizowany.';
	$lang['strviewupdatedbad'] = 'Pr�ba aktualizacji widoku si� nie powiod�a.';
	$lang['strviewlink'] = 'Klucze ��cz�ce';
	$lang['strviewconditions'] = 'Dodatkowe warunki';
	$lang['strcreateviewwiz']  =  'Utw�rz widok przy u�yciu kreatora widok�w';

	// Sequences
	$lang['strsequence'] = 'Sekwencja';
	$lang['strsequences'] = 'Sekwencje';
	$lang['strshowallsequences'] = 'Poka� wszystkie sekwencje';
	$lang['strnosequence'] = 'Nie znaleziono sekwencji.';
	$lang['strnosequences'] = 'Nie znaleziono sekwencji.';
	$lang['strcreatesequence'] = 'Utw�rz sekwencj�';
	$lang['strlastvalue'] = 'Ostatnia warto��';
	$lang['strincrementby'] = 'Zwi�kszana o';	
	$lang['strstartvalue'] = 'Warto�� pocz�tkowa';
	$lang['strmaxvalue'] = 'Warto�� maks.';
	$lang['strminvalue'] = 'Warto�� min.';
	$lang['strcachevalue'] = 'cache_value';
	$lang['strlogcount'] = 'log_cnt';
	$lang['striscycled'] = 'is_cycled';
	$lang['striscalled'] = 'is_called';
	$lang['strsequenceneedsname'] = 'Musisz nazwa� sekwencj�';
	$lang['strsequencecreated'] = 'Sekwencja zosta�a utworzona.';
	$lang['strsequencecreatedbad'] = 'Pr�ba utworzenia sekwencji si� nie powiod�a.';
	$lang['strconfdropsequence'] = 'Czy na pewno chcesz usun�� sekwencj� "%s"?';
	$lang['strsequencedropped'] = 'Sekwencja zosta�a usuni�ta.';
	$lang['strsequencedroppedbad'] = 'Pr�ba usuni�cia sekwencji si� nie powiod�a.';
	$lang['strsequencereset'] = 'Sekwencja zosta�a wyzerowana.';
	$lang['strsequenceresetbad'] = 'Pr�ba zerowania sekwencji si� nie powiod�a.';
						
	// Indeksy
	$lang['strindex'] = 'Indeks';
	$lang['strindexes'] = 'Indeksy';
	$lang['strindexname'] = 'Nazwa indeksu';
	$lang['strshowallindexes'] = 'Poka� wszystkie indeksy';
	$lang['strnoindex'] = 'Nie znaleziono indeksu.';
	$lang['strnoindexes'] = 'Nie znaleziono indeks�w.';
	$lang['strcreateindex'] = 'Utw�rz indeks';
	$lang['strtabname'] = 'Tab Name';
	$lang['strcolumnname'] = 'Nazwa kolumny';
	$lang['strindexneedsname'] = 'Musisz nazwa� indeks.';
	$lang['strindexneedscols'] = 'W sk�ad indeksu musi wchodzi� przynajmniej jedna kolumna.';
	$lang['strindexcreated'] = 'Indeks zosta� utworzony';
	$lang['strindexcreatedbad'] = 'Pr�ba utworzenia indeksu si� nie powiod�a.';
	$lang['strconfdropindex'] = 'Czy na pewno chcesz usun�� indeks "%s"?';
	$lang['strindexdropped'] = 'Indeks zosta� usuni�ty.';
	$lang['strindexdroppedbad'] = 'Pr�ba usuni�cia indeksu si� nie powiod�a.';
	$lang['strkeyname'] = 'Nazwa klucza';
	$lang['struniquekey'] = 'Klucz Unikatowy';
	$lang['strprimarykey'] = 'Klucz G��wny';
	$lang['strindextype'] = 'Typ indeksu';
	$lang['strtablecolumnlist'] = 'Kolumny w tabeli';
	$lang['strindexcolumnlist'] = 'Kolumny w indeksie';
	$lang['strconfcluster'] = 'Czy na pewno chcesz zklastrowa� "%s"?';
	$lang['strclusteredgood'] = 'Klastrowanie zosta�o zako�czone.';
	$lang['strclusteredbad'] = 'Pr�ba klastrowania si� nie powiod�a.';
	
	// Rules
	$lang['strrules'] = 'Regu�y';
	$lang['strrule']  =  'Regu�a';
	$lang['strshowallrules'] = 'Poka� wszystkie regu�y';
	$lang['strnorule'] = 'Nie znaleziono regu�y.';
	$lang['strnorules'] = 'Nie znaleziono regu�.';
	$lang['strcreaterule'] = 'Utw�rz regu��';
	$lang['strrulename'] = 'Nazwa regu�y';
	$lang['strruleneedsname'] = 'Musisz nazwa� regu��.';
	$lang['strrulecreated'] = 'Regu�a zosta�a utworzona.';
	$lang['strrulecreatedbad'] = 'Pr�ba utworzenia regu�y si� nie powiod�a.';
	$lang['strconfdroprule'] = 'Czy na pewno chcesz usun�� regu�� "%s" na "%s"?';
	$lang['strruledropped'] = 'Regu�a zosta�a usuni�ta.';
	$lang['strruledroppedbad'] = 'Pr�ba usuni�cia regu�y si� nie powiod�a.';
	
	// Constraints
	$lang['strconstraint']  =  'Wi�z integralno�ci';
	$lang['strconstraints'] = 'Wi�zy integralno�ci';
	$lang['strshowallconstraints'] = 'Poka� wszystkie wi�zy integralno�ci';
	$lang['strnoconstraints'] = 'Nie znaleziono wi�z�w integralno�ci.';
	$lang['strcreateconstraint'] = 'Utw�rz wi�zy integralno�ci';
	$lang['strconstraintcreated'] = 'Wi�zy integralno�ci zosta�y utworzone.';
	$lang['strconstraintcreatedbad'] = 'Pr�ba utworzenia wi�z�w integralno�ci si� nie powiod�a.';
	$lang['strconfdropconstraint'] = 'Czy na pewno chcesz usun�� wi�zy integralno�ci "%s" na "%s"?';
	$lang['strconstraintdropped'] = 'Wi�zy integralno�ci zosta�y usuni�te.';
	$lang['strconstraintdroppedbad'] = 'Pr�ba usuni�cia wi�z�w integralno�ci si� nie powiod�a.';
	$lang['straddcheck'] = 'Dodaj warunek';
	$lang['strcheckneedsdefinition'] = 'Musisz zdefiniowa� warunek.';
	$lang['strcheckadded'] = 'Warunek zosta� dodany.';
	$lang['strcheckaddedbad'] = 'Operacja dodania warunku si� nie powiod�a.';
	$lang['straddpk'] = 'Dodaj klucz g��wny';
	$lang['strpkneedscols'] = 'Klucz g��wny musi zawiera� przynajmniej jedn� kolumn�.';
	$lang['strpkadded'] = 'Klucz g��wny zosta� dodany.';
	$lang['strpkaddedbad'] = 'Pr�ba dodania klucza g��wnego si� nie powiod�a.';
	$lang['stradduniq'] = 'Dodaj klucz unikatowy';
	$lang['struniqneedscols'] = 'Klucz unikatowy musi zawiera� przynajmniej jedn� kolumn�.';
	$lang['struniqadded'] = 'Klucz unikatowy zosta� dodany.';
	$lang['struniqaddedbad'] = 'Pr�ba dodania klucza unikatowego si� nie powiod�a.';
	$lang['straddfk'] = 'Dodaj klucz obcy';
	$lang['strfkneedscols'] = 'Obcy klucz musi zawiera� przynajmniej jedn� kolumn�.';
	$lang['strfkneedstarget'] = 'Klucz obcy wymaga podania nazwy tabeli docelowej.';
	$lang['strfkadded'] = 'Klucz obcy zosta� dodany.';
	$lang['strfkaddedbad'] = 'Pr�ba dodania klucza obcego si� nie powiod�a.';
	$lang['strfktarget'] = 'Tabela docelowa';
	$lang['strfkcolumnlist'] = 'Kolumna w kluczu';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';
					
	// Functions
	$lang['strfunction'] = 'Funkcja';
	$lang['strfunctions'] = 'Funkcje';
	$lang['strshowallfunctions'] = 'Poka� wszystkie funkcje';
	$lang['strnofunction'] = 'Nie znaleziono funkcji.';
	$lang['strnofunctions'] = 'Nie znaleziono funkcji.';
	$lang['strcreateplfunction']  =  'Utw�rz funkcj� SQL/PL';
	$lang['strcreateinternalfunction']  =  'Utw�rz funkcj� wewn�trzn�';
	$lang['strcreatecfunction']  =  'Utw�rz funkcj� C';
	$lang['strfunctionname'] = 'Nazwa funkcji';
	$lang['strreturns'] = 'Zwraca';
	$lang['strarguments'] = 'Parametry';
	$lang['strproglanguage'] = 'J�zyk';
	$lang['strfunctionneedsname'] = 'Musisz nazwa� funkcj�.';
	$lang['strfunctionneedsdef'] = 'Musisz zdefiniowa� funkcj�.';
	$lang['strfunctioncreated'] = 'Funkcja zosta�a utworzona.';
	$lang['strfunctioncreatedbad'] = 'Pr�ba utworzenia funkcji si� nie powiod�a';
	$lang['strconfdropfunction'] = 'Czy na pewno chcesz usun�� funkcj� "%s"?';
	$lang['strfunctiondropped'] = 'Funkcja zosta�a usuni�ta.';
	$lang['strfunctiondroppedbad'] = 'Pr�ba usuni�cia funkcji si� nie powiod�a.';
	$lang['strfunctionupdated'] = 'Funkcja zosta�a zaktualizowana.';
	$lang['strfunctionupdatedbad'] = 'Pr�ba aktualizacji funkcji si� nie powiod�a.';
    $lang['strobjectfile']  =  'Plik objekt�w';
    $lang['strlinksymbol']  =  '��cz symbol';

	// Triggers
	$lang['strtrigger'] = 'Procedura wyzwalana';
	$lang['strtriggers'] = 'Procedury wyzwalane';
	$lang['strshowalltriggers'] = 'Poka� wszystkie procedury wyzwalane';
	$lang['strnotrigger'] = 'Nie znaleziono procedury wyzwalanej.';
	$lang['strnotriggers'] = 'Nie znaleziono procedur wyzwalanych.';
	$lang['strcreatetrigger'] = 'Utw�rz procedur� wyzwalan�';
	$lang['strtriggerneedsname'] = 'Musisz nazwa� procedur� wyzwalan�';
	$lang['strtriggerneedsfunc'] = 'Musisz poda� funkcj� procedury wyzwalanej.';
	$lang['strtriggercreated'] = 'Procedura wyzwalana zosta�a utworzona.';
	$lang['strtriggercreatedbad'] = 'Pr�ba utworzenia procedury wyzwalanej si� nie powiod�a';
	$lang['strconfdroptrigger'] = 'Czy na pewno chcesz usun�� procedur� "%s" wyzwalan� przez "%s"?';
	$lang['strtriggerdropped'] = 'Procedura wyzwalana zosta�a usuni�ta.';
	$lang['strtriggerdroppedbad'] = 'Pr�ba usuni�cia procedury wyzwalanej si� nie powiod�a.';
	$lang['strtriggeraltered'] = 'Procedura wyzwalana zosta�a zmieniona.';
	$lang['strtriggeralteredbad'] = 'Pr�ba modyfikacji procedury wyzwalanej si� nie powiod�a.';
		
	// Types
	$lang['strtype'] = 'Typ';
	$lang['strtypes'] = 'Typy';
	$lang['strshowalltypes'] = 'Poka� wszystkie typy';
	$lang['strnotype'] = 'Nie znaleziono typu.';
	$lang['strnotypes'] = 'Nie znaleziono typ�w.';
	$lang['strcreatetype'] = 'Utw�rz typ';
	$lang['strcreatecomptype']  =  'Utw�rz typ z�o�ony';
	$lang['strtypeneedsfield']  =  'Musisz poda� przynajmniej jedno pole.';
	$lang['strtypeneedscols']  =  'Musisz poda� poprawn� ilo�� p�l.';	
	$lang['strtypename'] = 'Nazwa typu';
	$lang['strinputfn'] = 'Funkcja wej�ciowa';
	$lang['stroutputfn'] = 'Funkcja wyj�ciowa';
	$lang['strpassbyval'] = 'Przekazywany przez warto��?';
	$lang['stralignment'] = 'Wyr�wnanie bajtowe';
	$lang['strelement'] = 'Typ element�w';
	$lang['strdelimiter'] = 'Znak oddzielaj�cy elementy tabeli';
	$lang['strstorage'] = 'Technika przechowywania';
	$lang['strfield']  =  'Pole';
	$lang['strnumfields']  =  'Ilo�� p�l';
	$lang['strtypeneedsname'] = 'Musisz nazwa� typ.';
	$lang['strtypeneedslen'] = 'Musisz poda� d�ugo�� typu.';
	$lang['strtypecreated'] = 'Typ zosta� utworzony';
	$lang['strtypecreatedbad'] = 'Pr�ba utworzenia typu si� nie powiod�a.';
	$lang['strconfdroptype'] = 'Czy na pewno chcesz usun�� typ "%s"?';
	$lang['strtypedropped'] = 'Typ zosta� usuni�ty.';
	$lang['strtypedroppedbad'] = 'Pr�ba usuni�cia typu si� nie powiod�a.';
    $lang['strflavor']  =  'Flavor';
	$lang['strbasetype']  =  'podstawowy';
	$lang['strcompositetype']  =  'z�o�ony';
	$lang['strpseudotype']  =  'pseudo';

	// Schemas
	$lang['strschema'] = 'Schemat';
	$lang['strschemas'] = 'Schematy';
	$lang['strshowallschemas'] = 'Poka� wszystkie schematy';
	$lang['strnoschema'] = 'Nie znaleziono schematu.';
	$lang['strnoschemas'] = 'Nie znaleziono schemat�w.';
	$lang['strcreateschema'] = 'Utw�rz schemat';
	$lang['strschemaname'] = 'Nazwa schematu';
	$lang['strschemaneedsname'] = 'Musisz nada� schematowi nazw�.';
	$lang['strschemacreated'] = 'Schemat zosta� utworzony';
	$lang['strschemacreatedbad'] = 'Pr�ba utworzenia schematu si� nie powiod�a.';
	$lang['strconfdropschema'] = 'Czy na pewno chcesz usun�� schemat "%s"?';
	$lang['strschemadropped'] = 'Schemat zosta� usuni�ty.';
	$lang['strschemadroppedbad'] = 'Pr�ba usuni�cia schematu si� nie powiod�a.';
	$lang['strschemaaltered']  =  'Schemat zosta� zmieniony.';
	$lang['strschemaalteredbad']  =  'Pr�ba zmiany schematu si� nie powiod�a';
	$lang['strsearchpath']  =  '�cie�ka wyszukiwania schematu';

	// Reports
	$lang['strreport'] = 'Raport';
	$lang['strreports'] = 'Raporty';
	$lang['strshowallreports'] = 'Poka� wszystkie raporty';
	$lang['strnoreports'] = 'Nie znaleziono raport�w.';
	$lang['strcreatereport'] = 'Utw�rz raport';
	$lang['strreportdropped'] = 'Raport zosta� usuni�ty.';
	$lang['strreportdroppedbad'] = 'Pr�ba usuni�cia raportu si� nie powiod�a.';
	$lang['strconfdropreport'] = 'Czy na pewno chcesz usun�� raport "%s"?';
	$lang['strreportneedsname'] = 'Musisz nazwa� raport.';
	$lang['strreportneedsdef'] = 'Musisz poda� zapytanie SQL definiuj�ce raport.';
	$lang['strreportcreated'] = 'Raport zosta� utworzony.';
	$lang['strreportcreatedbad'] = 'Pr�ba utworzenia raportu si� nie powiod�a.';

	// Domeny
	$lang['strdomain'] = 'Domena';
	$lang['strdomains'] = 'Domeny';
	$lang['strshowalldomains'] = 'Poka� wszystkie domeny';
	$lang['strnodomains'] = 'Nie znaleziono domen.';
	$lang['strcreatedomain'] = 'Utw�rz domen�';
	$lang['strdomaindropped'] = 'Domena zosta�a usuni�ta.';
	$lang['strdomaindroppedbad'] = 'Pr�ba usuni�cia domeny si� nie powiod�a.';
	$lang['strconfdropdomain'] = 'Czy na pewno chcesz usun�� domen� "%s"?';
	$lang['strdomainneedsname'] = 'Musisz nazwa� domen�.';
	$lang['strdomaincreated'] = 'Domena zosta�a utworzona.';
	$lang['strdomaincreatedbad'] = 'Pr�ba utworzenia domeny si� nie powiod�a.';
	$lang['strdomainaltered'] = 'Domena zosta�a zmieniona.';
	$lang['strdomainalteredbad'] = 'Pr�ba modyfikacji domeny si� nie powiod�a.';

	// Operators
	$lang['stroperator'] = 'Operator';
	$lang['stroperators'] = 'Operatory';
	$lang['strshowalloperators'] = 'Poka� wszystkie operatory';
	$lang['strnooperator'] = 'Nie znaleziono operatora.';
	$lang['strnooperators'] = 'Nie znaleziono operator�w.';
	$lang['strcreateoperator'] = 'Utw�rz operator';
	$lang['strleftarg'] = 'Typ lewego argumentu';
	$lang['strrightarg'] = 'Typ prawego argumentu';
    $lang['strcommutator'] = 'Commutator';
	$lang['strnegator'] = 'Negacja';
	$lang['strrestrict'] = 'Zastrze�enie';
	$lang['strjoin'] = 'Po��czenie';
    $lang['strhashes'] = 'Hashes';
    $lang['strmerges'] = 'Merges';
	$lang['strleftsort'] = 'Lewe sortowanie';
	$lang['strrightsort'] = 'Prawe sortowanie';
	$lang['strlessthan'] = 'Mniej ni�';
	$lang['strgreaterthan'] = 'Wi�cej ni�';
	$lang['stroperatorneedsname'] = 'Musisz nazwa� operator.';
	$lang['stroperatorcreated'] = 'Operator zosta� utworzony.';
	$lang['stroperatorcreatedbad'] = 'Pr�ba utworzenia operatora si� nie powiod�a.';
	$lang['strconfdropoperator'] = 'Czy na pewno chcesz usun�� operator "%s"?';
	$lang['stroperatordropped'] = 'Operator zosta� usuni�ty.';
	$lang['stroperatordroppedbad'] = 'Pr�ba usuni�cia operatora si� nie powiod�a.';

	// Casts
	$lang['strcasts'] = 'Rzutowania';
	$lang['strnocasts'] = 'Nie znaleziono rzutowa�.';
	$lang['strsourcetype'] = 'Typ �r�d�owy';
	$lang['strtargettype'] = 'Typ docelowy';
	$lang['strimplicit'] = 'Niezaprzeczalny';
	$lang['strinassignment'] = 'W przydziale';
	$lang['strbinarycompat'] = '(Kompatybilny binarnie)';

	// Conversions
	$lang['strconversions'] = 'Konwersje';
	$lang['strnoconversions'] = 'Nie znaleziono konwersji.';
	$lang['strsourceencoding'] = 'Kodowanie �r�d�owe';
	$lang['strtargetencoding'] = 'Kodowanie docelowe';

	// Languages
	$lang['strlanguages'] = 'J�zyki';
	$lang['strnolanguages'] = 'Nie znaleziono j�zyk�w.';
	$lang['strtrusted'] = 'Zaufany';

	// Info
	$lang['strnoinfo'] = 'Brak informacji na ten temat';
	$lang['strreferringtables'] = 'Tabele zale�ne';
	$lang['strparenttables'] = 'Tabela nadrz�dne';
	$lang['strchildtables'] = 'Tabela podrz�dna';

	// Aggregates
	$lang['straggregates'] = 'Funkcje agreguj�ce';
	$lang['strnoaggregates'] = 'Nie znaleziono funkcji agreguj�cych.';
	$lang['stralltypes'] = '(Wszystkie typy)';

	// Operator Classes
	$lang['stropclasses'] = 'Klasy operator�w';
	$lang['strnoopclasses'] = 'Nie znaleziono klas operator�w.';
	$lang['straccessmethod'] = 'Metoda dost�pu';

	// Stats and performance
	$lang['strrowperf'] = 'Wydajno�� wierszowa';
	$lang['strioperf'] = 'Wydajno�� I/O';
	$lang['stridxrowperf'] = 'Wydajno�� indeksu wierszowego';
	$lang['stridxioperf'] = 'Wydajno�� indeksu We/Wy';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = 'Sekwencyjny';
	$lang['strscan'] = 'Skanuj';
	$lang['strread'] = 'Czytaj';
	$lang['strfetch'] = 'Pobierz';
	$lang['strheap'] = 'Sterta';
	$lang['strtoast'] = 'TOAST';
	$lang['strtoastindex'] = 'Indeks TOAST';
	$lang['strcache'] = 'Kesz';
	$lang['strdisk'] = 'Dysk';
	$lang['strrows2'] = 'Wiersze';

	// Tablespaces
	$lang['strtablespace']  =  'Przestrze� tabel';
	$lang['strtablespaces']  =  'Przestrzenie tabel';
	$lang['strshowalltablespaces']  =  'Poka� wszystkie przestrzenie tabel';
	$lang['strnotablespaces']  =  'Nie znaleziono przestrzeni tabel.';
	$lang['strcreatetablespace']  =  'Utw�rz przestrze� tabel';
	$lang['strlocation']  =  'Po�o�enie';
	$lang['strtablespaceneedsname']  =  'Musisz poda� nazw� przestrzeni tabel.';
	$lang['strtablespaceneedsloc']  =  'Musisz poda� nazw� katalogu, w kt�rym chcesz utworzy� przestrze� tabel.';
	$lang['strtablespacecreated']  =  'Przestrze� tabel zosta�a utworzona.';
	$lang['strtablespacecreatedbad']  =  'Pr�ba utworzenia przestrzeni tabel si� nie powiod�a.';
	$lang['strconfdroptablespace']  =  'Czy na pewno chcesz usun�� przestrze� tabel "%s"?';
	$lang['strtablespacedropped']  =  'Przestrze� tabel zosta�a usuni�ta.';
	$lang['strtablespacedroppedbad']  =  'Pr�ba usuni�cia przestrzeni tabel si� nie powiod�a.';
	$lang['strtablespacealtered']  =  'Przestrze� tabel zosta�a zmieniona.';
	$lang['strtablespacealteredbad']  =  'Pr�ba modyfikacji przestrzeni tabel si� nie powiod�a.';

	// Miscellaneous
	$lang['strtopbar'] = '%s uruchomiony na %s:%s -- Jeste� zalogowany jako "%s", %s';
	$lang['strtimefmt'] = 'jS M, Y g:iA';
	$lang['strhelp'] = 'Pomoc';
	$lang['strhelpicon']  =  '?';

?>
