<?php

	/**
	 * Russian KOI8 language file for phpPgAdmin. 
	 * @maintainer Alexander Khodorivsky [askh@ukr.net]
	 *
	 * $Id: russian.php,v 1.1 2003/05/01 01:40:43 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = '�������';
	$lang['appcharset'] = 'KOI8-R';
	$lang['applocale'] = 'ru_RU';

	// Basic strings
	$lang['strintro'] = '����� ���������� � phpPgAdmin.';
	$lang['strlogin'] = '�����';
	$lang['strloginfailed'] = '�������� �����';
	$lang['strserver'] = '������';
	$lang['strlogout'] = '���������������';
	$lang['strowner'] = '������������';
	$lang['straction'] = '��������';
	$lang['stractions'] = '��������';
	$lang['strname'] = '���';
	$lang['strdefinition'] = '�����������';
	$lang['stroperators'] = '���������';
	$lang['straggregates'] = '���������� �������';
	$lang['strproperties'] = '��������';
	$lang['strbrowse'] = '�����������';
	$lang['strdrop'] = '�������';
	$lang['strdropped'] = '�������';
	$lang['strnull'] = 'Null';
	$lang['strnotnull'] = 'Not Null';
	$lang['strprev'] = '������.';
	$lang['strnext'] = '����.';
	$lang['strfailed'] = '��������';
	$lang['strcreate'] = '�������';
	$lang['strcreated'] = '�������';
	$lang['strcomment'] = '�����������';
	$lang['strlength'] = '�����';
	$lang['strdefault'] = '�� ���������';
	$lang['stralter'] = '��������';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = '��������';
	$lang['strsave'] = '���������';
	$lang['strreset'] = '��������';
	$lang['strinsert'] = '��������';
	$lang['strselect'] = '�������';
	$lang['strdelete'] = '�������';
	$lang['strupdate'] = '��������';
	$lang['strreferences'] = '������';
	$lang['stryes'] = '��';
	$lang['strno'] = '���';
	$lang['stredit'] = '�������������';
	$lang['strcolumns'] = '��������';
	$lang['strrows'] = '�����[�/�/��]';
	$lang['strexample'] = '� �.�.';
	$lang['strback'] = '�����'; 	
	$lang['strqueryresults'] = '���������� �������';
	$lang['strshow'] = '��������';
	$lang['strempty'] = '��������';
	$lang['strlanguage'] = '����';
	$lang['strencoding'] = '���������';
	$lang['strvalue'] = '��������';
	$lang['strunique'] = '����������';
	$lang['strprimary'] = '���������';
	$lang['strexport'] = '�������';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = '���������';
	$lang['stradmin'] = '����������';
	$lang['strvacuum'] = '�����������';
	$lang['stranalyze'] = '�������������';
	$lang['strcluster'] = '�������� �������������';
	$lang['strreindex'] = '����������� ������';
	$lang['strrun'] = '���������';
	$lang['stradd'] = '��������';
	$lang['strevent'] = '�������';
	$lang['strwhere'] = '���';
	$lang['strinstead'] = '������ ������';
	$lang['strwhen'] = '�����';
	$lang['strformat'] = '������';

	// Error handling
	$lang['strnoframes'] = '��� ������������� ������� ���������� ��� ���������� ����� �������, �������������� ������.';
	$lang['strbadconfig'] = '��� config.inc.php �������� ����������. ��� ���������� �������� ��� �� config.inc.php-dist.';
	$lang['strnotloaded'] = '�� �� ������ ���������� ��������� ������ � ������ ������ � ����� ���������� ���.';
	$lang['strbadschema'] = '���������� �������� �����.';
	$lang['strbadencoding'] = 'Failed to set client encoding in database.';
	$lang['strsqlerror'] = '������ SQL:';
	$lang['strinstatement'] = '� ���������:';
	$lang['strinvalidparam'] = '�������� �������� �������.';
	$lang['strnodata'] = '������ �� ����������.';

	// Tables
	$lang['strtable'] = '�������';
	$lang['strtables'] = '�������';
	$lang['strshowalltables'] = '�������� ��� �������';
	$lang['strnotables'] = '������ �� ����������.';
	$lang['strnotable'] = ' ������� �� ����������.';
	$lang['strcreatetable'] = '������� �������';
	$lang['strtablename'] = '��� �������';
	$lang['strtableneedsname'] = '��� ���������� ���������� ��� �������.';
	$lang['strtableneedsfield'] = '��� ���������� ���������� �� ������� ���� ���� ����.';
	$lang['strtableneedscols'] = '��� ���������� ������� ���������� ����� ���������.';
	$lang['strtablecreated'] = '������� �������.';
	$lang['strtablecreatedbad'] = '�������� ������� ��������.';
	$lang['strconfdroptable'] = '�� �������, ��� ������ ������� ������� "%s"?';
	$lang['strtabledropped'] = '������� �������.';
	$lang['strtabledroppedbad'] = '�������� ������� ��������.';
	$lang['strconfemptytable'] = '�� �������, ��� ������ �������� ������� "%s"?';
	$lang['strtableemptied'] = '������� �������.';
	$lang['strtableemptiedbad'] = '������� ������� ��������.';
	$lang['strinsertrow'] = '�������� ������';
	$lang['strrowinserted'] = '������ ���������.';
	$lang['strrowinsertedbad'] = '���������� ������ ��������.';
	$lang['streditrow'] = '������������� ������';
	$lang['strrowupdated'] = '������ ���������.';
	$lang['strrowupdatedbad'] = '���������� ������ ��������.';
	$lang['strdeleterow'] = '������� ������';
	$lang['strconfdeleterow'] = '�� �������, ��� ������ ������� ������?';
	$lang['strrowdeleted'] = '������ �������.';
	$lang['strrowdeletedbad'] = '�������� ������ ��������.';
	$lang['strsaveandrepeat'] = '��������� � ���������';
	$lang['strfield'] = '����';
	$lang['strfields'] = '����';
	$lang['strnumfields'] = '���-�� �����';
	$lang['strfieldneedsname'] = '��� ���������� ������� ����';
	$lang['strselectneedscol'] = '��� ���������� ������� �� ������� ���� ���� �������';
	$lang['straltercolumn'] = '�������� �������';
	$lang['strcolumnaltered'] = '������� �������.';
	$lang['strcolumnalteredbad'] = '��������� �������� ��������.';
	$lang['strconfdropcolumn'] = '�� �������, ��� ������ ������� ������� "%s" ������� "%s"?';
	$lang['strcolumndropped'] = '������� ������.';
	$lang['strcolumndroppedbad'] = '�������� �������� ��������.';
	$lang['straddcolumn'] = '�������� �������';
	$lang['strcolumnadded'] = '������� ��������.';
	$lang['strcolumnaddedbad'] = '���������� �������� ��������.';
	$lang['strschemaanddata'] = '����� � ������';
	$lang['strschemaonly'] = '������ �����';
	$lang['strdataonly'] = '������ ������';
	$lang['strcascade'] = '��������';

	// Users
	$lang['struseradmin'] = '������������';
	$lang['struser'] = '������������';
	$lang['strusers'] = '������������';
	$lang['strusername'] = '��� ������������';
	$lang['strpassword'] = '������';
	$lang['strsuper'] = '�����������������?';
	$lang['strcreatedb'] = '������� ���� ������?';
	$lang['strexpires'] = '���� ��������';
	$lang['strnousers'] = '��� ����� �������������.';
	$lang['struserupdated'] = '������������ ��������.';
	$lang['struserupdatedbad'] = '���������� ������������ ��������.';
	$lang['strshowallusers'] = '�������� ���� �������������';
	$lang['strcreateuser'] = '������� ������������';
	$lang['strusercreated'] = '������������ ������.';
	$lang['strusercreatedbad'] = '�������� ������������ ��������.';
	$lang['strconfdropuser'] = '�� �������, ��� ������ ������� ������������ "%s"?';
	$lang['struserdropped'] = '������������ ������.';
	$lang['struserdroppedbad'] = '�������� ������������ ��������.';

	// Groups
	$lang['strgroupadmin'] = '������';
	$lang['strgroup'] = '������';
	$lang['strgroups'] = '������';
	$lang['strnogroup'] = '������ �� ����������.';
	$lang['strnogroups'] = '�� ����� ������ �� ����������.';
	$lang['strcreategroup'] = '������� ������';
	$lang['strshowallgroups'] = '�������� ��� ������';
	$lang['strgroupneedsname'] = '��� ���������� ������� �������� ������.';
	$lang['strgroupcreated'] = '������ �������.';
	$lang['strgroupcreatedbad'] = '�������� ������ ��������.';
	$lang['strconfdropgroup'] = '�� �������, ��� ������ ������� ������ "%s"?';
	$lang['strgroupdropped'] = '������ �������.';
	$lang['strgroupdroppedbad'] = '�������� ������ ��������.';
	$lang['strmembers'] = '����������';

	// Privilges
	$lang['strprivilege'] = '����������';
	$lang['strprivileges'] = '����������';
	$lang['strnoprivileges'] = '������ �� ����� ����������.';
	$lang['strgrant'] = '�������';
	$lang['strrevoke'] = '��������';
	$lang['strgranted'] = '���������� �������.';
	$lang['strgrantfailed'] = '�������� ���������� ��������.';
	$lang['strgrantuser'] = '������� ������������';
	$lang['strgrantgroup'] = '������� ������';

	// Databases
	$lang['strdatabase'] = '���� ������';
	$lang['strdatabases'] = '���� ������';
	$lang['strshowalldatabases'] = '�������� ��� ���� ������';
	$lang['strnodatabase'] = '���� ������ �� ����������.';
	$lang['strnodatabases'] = '�� ����� ���� ������ �� ����������.';
	$lang['strcreatedatabase'] = '������� ���� ������';
	$lang['strdatabasename'] = '��� ���� ������';
	$lang['strdatabaseneedsname'] = '��� ���������� ��������� ��� ����� ���� ������.';
	$lang['strdatabasecreated'] = '���� ������ �������.';
	$lang['strdatabasecreatedbad'] = '�������� ���� ������ ��������.';
	$lang['strconfdropdatabase'] = '�� �������, ��� ������ ���������� ���� ������ "%s"?';
	$lang['strdatabasedropped'] = ' ���� ������ ����������.';
	$lang['strdatabasedroppedbad'] = '����������� ���� ������ ��������.';
	$lang['strentersql'] = '������� SQL-������ ����:';
	$lang['strvacuumgood'] = '�������� ����������� ���������.';
	$lang['strvacuumbad'] = '�������� ����������� ��������.';
	$lang['stranalyzegood'] = ' �������� ������� ���������.';
	$lang['stranalyzebad'] = ' �������� ������� ���������.';

	// Views
	$lang['strview'] = '�������������';
	$lang['strviews'] = '�������������';
	$lang['strshowallviews'] = '�������� ��� �������������';
	$lang['strnoview'] = '������������� �� ����������.';
	$lang['strnoviews'] = '�� ������ ������������� �� ����������.';
	$lang['strcreateview'] = '������� �������������';
	$lang['strviewname'] = '��� �������������';
	$lang['strviewneedsname'] = '��� ���������� ������� ��� �������������.';
	$lang['strviewneedsdef'] = ' ��� ���������� ���������� �������� �������������.';
	$lang['strviewcreated'] = '������������� �������.';
	$lang['strviewcreatedbad'] = '�������� ������������� ��������.';
	$lang['strconfdropview'] = '�� �������, ��� ������ ���������� ������������� "%s"?';
	$lang['strviewdropped'] = '������������� ����������.';
	$lang['strviewdroppedbad'] = '����������� ������������� ��������.';
	$lang['strviewupdated'] = '������������� ���������.';
	$lang['strviewupdatedbad'] = '���������� ������������� ��������.';

	// Sequences
	$lang['strsequence'] = '������������������';
	$lang['strsequences'] = ' ������������������';
	$lang['strshowallsequences'] = '�������� ��� ������������������';
	$lang['strnosequence'] = '������������������ �� ����������.';
	$lang['strnosequences'] = '�� ����� ������������������ �� ����������.';
	$lang['strcreatesequence'] = '������� ������������������';
	$lang['strlastvalue'] = '��������� ��������';
	$lang['strincrementby'] = '���������� ��';
	$lang['strstartvalue'] = '��������� ��������';
	$lang['strmaxvalue'] = '����. ��������';
	$lang['strminvalue'] = '���. ��������';
	$lang['strcachevalue'] = '������ ����';
	$lang['strlogcount'] = 'Log Count';
	$lang['striscycled'] = '���������?';
	$lang['striscalled'] = '��� ����������?';
	$lang['strsequenceneedsname'] = '��� ���������� ������� ��� ������������������.';
	$lang['strsequencecreated'] = '������������������ �������.';
	$lang['strsequencecreatedbad'] = '�������� ������������������ ��������.';
	$lang['strconfdropsequence'] = '�� �������, ��� ������ ���������� ������������������ "%s"?';
	$lang['strsequencedropped'] = '������������������ ����������.';
	$lang['strsequencedroppedbad'] = '����������� ������������������ ��������.';

	// Indexes
	$lang['strindexes'] = '������';
	$lang['strindexname'] = '��� �������';
	$lang['strshowallindexes'] = '�������� ��� �������';
	$lang['strnoindex'] = '������ �� ���������.';
	$lang['strnoindexes'] = '�� ������ ������� �� ����������.';
	$lang['strcreateindex'] = '������� ������';

	$lang['strtabname'] = '��� �������';
	$lang['strcolumnname'] = '��� ��������';
	$lang['strindexneedsname'] = '��� ���������� ������� ��� �������';
	$lang['strindexneedscols'] = '��� ���������� ������� ���������� ���������� ���������.';
	$lang['strindexcreated'] = '������ ������.';
	$lang['strindexcreatedbad'] = '�������� ������� ��������.';
	$lang['strconfdropindex'] = '�� �������, ��� ������ ���������� ������ "%s"?';
	$lang['strindexdropped'] = '������ ���������.';
	$lang['strindexdroppedbad'] = '����������� ������� ��������.';
	$lang['strkeyname'] = '��� �����';
	$lang['struniquekey'] = '���������� ����';
	$lang['strprimarykey'] = '��������� ����';
	 $lang['strindextype'] = '��� �������';
	$lang['strindexname'] = '��� �������';
	$lang['strtablecolumnlist'] = '��������� � �������';
	$lang['strindexcolumnlist'] = '��������� � �������';

	// Rules
	$lang['strrules'] = '�������';
	$lang['strrule'] = '�������';
	$lang['strshowallrules'] = '�������� ��� �������';
	$lang['strnorule'] = '������� �� ����������.';
	$lang['strnorules'] = '�� ������ ������� �� ����������.';
	$lang['strcreaterule'] = '������� �������';
	$lang['strrulename'] = '��� �������';
	$lang['strruleneedsname'] = '��� ���������� ������� ��� �������.';
	$lang['strrulecreated'] = '������� �������.';
	$lang['strrulecreatedbad'] = '�������� ������� ��������.';
	$lang['strconfdroprule'] = '�� �������, ��� ������ ���������� ������� "%s" on "%s"?';
	$lang['strruledropped'] = '������� ����������.';
	$lang['strruledroppedbad'] = '����������� ������� ��������.';

	// Constraints
	$lang['strconstraints'] = '�����������';
	$lang['strshowallconstraints'] = '�������� ��� �����������';
	$lang['strnoconstraints'] = '�� ������ ����������� �� ����������.';
	$lang['strcreateconstraint'] = '������� �����������';
	$lang['strconstraintcreated'] = '����������� �������.';
	$lang['strconstraintcreatedbad'] = '�������� ����������� ��������.';
	$lang['strconfdropconstraint'] = '�� �������, ��� ������ ���������� ����������� "%s" on "%s"?';
	$lang['strconstraintdropped'] = '����������� ����������.';
	$lang['strconstraintdroppedbad'] = '����������� ����������� ��������.';
	$lang['straddcheck'] = '�������� ��������';
	$lang['strcheckneedsdefinition'] = '����������� �������� ��������� � �����������.';
	$lang['strcheckadded'] = '����������� �������� ���������.';
	$lang['strcheckaddedbad'] = '���������� ����������� �������� ��������.';
	$lang['straddpk'] = '�������� ��������� ����';
	$lang['strpkneedscols'] = '��������� ���� ������ �������� ���� �� ���� �������.';
	$lang['strpkadded'] = '��������� ���� ��������.';
	$lang['strpkaddedbad'] = '���������� ���������� ����� ��������.';
	$lang['stradduniq'] = '�������� ���������� ����';
	$lang['struniqneedscols'] = '���������� ���� ������ �������� ���� �� ���� �������.';
	$lang['struniqadded'] = '���������� ���� ��������.';
	$lang['struniqaddedbad'] = '���������� ����������� ����� ��������.';
	$lang['straddfk'] = '�������� ������� ����';
	$lang['strfkneedscols'] = '������� ���� ������ �������� ���� �� ���� �������.';
	$lang['strfkneedstarget'] = '�������� ����� ���������� ������� ������� �������.';
	$lang['strfkadded'] = '������� ���� ��������.';
	$lang['strfkaddedbad'] = '���������� �������� ����� ��������.';
	$lang['strfktarget'] = '������� �������';
	$lang['strfkcolumnlist'] = '�������� � �����';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';	

// Functions
$lang['strfunction'] = '�������';
$lang['strfunctions'] = ' �������';
	$lang['strshowallfunctions'] = '�������� ��� �������';
	$lang['strnofunction'] = '������� �� ����������.';
	$lang['strnofunctions'] = '�� ����� ������� �� ����������.';
	$lang['strcreatefunction'] = '������� �������';
	$lang['strfunctionname'] = '��� �������';
	$lang['strreturns'] = '������������ ��������';
	$lang['strarguments'] = '���������';
	$lang['strfunctionneedsname'] = '��� ���������� ������� ��� �������.';
	$lang['strfunctionneedsdef'] = '��� ���������� ���������� �������.';
	$lang['strfunctioncreated'] = '������� �������.';
	$lang['strfunctioncreatedbad'] = '�������� ������� ��������.';
	$lang['strconfdropfunction'] = '�� �������, ��� ������ ���������� ������� "%s"?';
	$lang['strfunctiondropped'] = '������� ����������.';
	$lang['strfunctiondroppedbad'] = '����������� ������� ��������.';
	$lang['strfunctionupdated'] = '������� ���������.';
	$lang['strfunctionupdatedbad'] = '���������� ������� ��������.';

	// Triggers
	$lang['strtrigger'] = '�������';
	$lang['strtriggers'] = ' ��������';
	$lang['strshowalltriggers'] = '�������� ��� ��������';
	$lang['strnotrigger'] = '������� �� ���������.';
	$lang['strnotriggers'] = '�� ������ �������� �� ����������.';
	$lang['strcreatetrigger'] = '������� �������';
	$lang['strtriggerneedsname'] = '��� ���������� ������� ��� ��������.';
	$lang['strtriggerneedsfunc'] = '��� ���������� ���������� ������� ��������.';
	$lang['strtriggercreated'] = '������� ������.';
	$lang['strtriggercreatedbad'] = '�������� �������� ��������.';
	$lang['strconfdroptrigger'] = '�� �������, ��� ������ ���������� ������� "%s" �� "%s"?';
	$lang['strtriggerdropped'] = '������� ���������.';
	$lang['strtriggerdroppedbad'] = '����������� �������� ��������.';

	// Types
	$lang['strtype'] = '��� ������';
	$lang['strtypes'] = '���� ������';
	$lang['strshowalltypes'] = '�������� ��� ���� ������';
	$lang['strnotype'] = '��� ������ �� ���������.';
	$lang['strnotypes'] = '�� ������ ���� ������ �� ����������.';
	$lang['strcreatetype'] = '������� ��� ������';
	$lang['strtypename'] = '��� ���� ������';
	$lang['strinputfn'] = '������� �����';
	$lang['stroutputfn'] = '������� ������';
	$lang['strpassbyval'] = '�������� �� ��������?';
	$lang['stralignment'] = '������������';
	$lang['strelement'] = '�������';
	$lang['strdelimiter'] = '�����������';
	$lang['strstorage'] = 'Storage';
	$lang['strtypeneedsname'] = '��� ���������� ������� ��� ���� ������.';
	$lang['strtypeneedslen'] = '��� ���������� ������� ������ ��� ���� ������.';
	$lang['strtypecreated'] = '��� ������ ������.';
	$lang['strtypecreatedbad'] = '�������� ���� ������ ��������.';
	$lang['strconfdroptype'] = '�� �������, ��� ������ ���������� ��� ������ "%s"?';
	$lang['strtypedropped'] = '��� ������ ���������.';
	$lang['strtypedroppedbad'] = '����������� ���� ������ ��������.';

	// Schemas
	$lang['strschema'] = '�����';
	$lang['strschemas'] = '�����';
	$lang['strshowallschemas'] = '�������� ��� �����';
	$lang['strnoschema'] = '����� �� ����������.';
	$lang['strnoschemas'] = '�� ����� ����� �� ����������.';
	$lang['strcreateschema'] = '������� �����';
	$lang['strschemaname'] = '��� �����';
	$lang['strschemaneedsname'] = '��� ���������� ������� ��� �����.';
	$lang['strschemacreated'] = '����� �������.';
	$lang['strschemacreatedbad'] = '�������� ����� ��������.';
	$lang['strconfdropschema'] = '�� �������, ��� ������ ���������� ����� "%s"?';
	$lang['strschemadropped'] = '����� ����������.';
	$lang['strschemadroppedbad'] = '����������� ����� ��������.';

	// Reports
	$lang['strreport'] = '�����';
	$lang['strreports'] = '������';
	$lang['strshowallreports'] = '�������� ��� ������';
	$lang['strnoreports'] = '������� ���.';
	$lang['strcreatereport'] = '������� �����';
	$lang['strreportdropped'] = '����� ���������.';
	$lang['strreportdroppedbad'] = '����������� ������ ��������.';
	$lang['strconfdropreport'] = '�� �������, ��� ������ ���������� ����� "%s"?';
	$lang['strreportneedsname'] = '��� ���������� ������� ��� ������.';
	$lang['strreportneedsdef'] = '��� ���������� ������� SQL-������ ��� ������ ������.';
	$lang['strreportcreated'] = '����� ��������.';
	$lang['strreportcreatedbad'] = '���������� ������ ��������.';

	// Miscellaneous
	$lang['strtopbar'] = '%s ����������� �� %s:%s -- �� ���������������� ��� "%s", %s';
	$lang['strtimefmt'] = ' j-m-Y  g:i';

?>

