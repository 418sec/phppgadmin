<?php

	/**
	 * Japanese language file for phpPgAdmin.
	 * @maintainer Tadashi Jokagi [elf2000@users.sourceforge.net]
	 *
	 * $Id: japanese.php,v 1.12 2005/02/09 13:12:33 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = '���ܸ�(EUC-JP)';
	$lang['appcharset'] = 'EUC-JP';
	$lang['applocale'] = 'ja_JP';
  	$lang['appdbencoding'] = 'EUC_JP';
	$lang['applangdir'] = 'ltr';
  
	// Welcome  
	$lang['strintro'] = '�褦����phpPgAdmin�ء�';
	$lang['strppahome'] = 'phpPgAdmin �ۡ���ڡ���';
	$lang['strpgsqlhome'] = 'PostgreSQL �ۡ���ڡ���';
	$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
	$lang['strlocaldocs'] = 'PostgreSQL �ɥ������ (������)';
	$lang['strreportbug'] = '�Х���ݡ���';
	$lang['strviewfaq'] = 'FAQ�򸫤�';
	$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
	
	// Basic strings
	$lang['strlogin'] = '������';
	$lang['strloginfailed'] = '��������';
	$lang['strlogindisallowed'] = '�����󤬵��Ĥ���ޤ���Ǥ�����';
	$lang['strserver'] = '�����С�';
	$lang['strlogout'] = '��������';
	$lang['strowner'] = '��ͭ��';
	$lang['straction'] = '���������';
	$lang['stractions'] = '������';
	$lang['strname'] = '̾��';
	$lang['strdefinition'] = '���';
	$lang['straggregates'] = '���';
	$lang['strproperties'] = '�ץ�ѥƥ�';
	$lang['strbrowse'] = 'ɽ��';
	$lang['strdrop'] = '�˴�';
	$lang['strdropped'] = '�˴����ޤ���';
	$lang['strnull'] = 'NULL';
	$lang['strnotnull'] = 'NOT NULL';
	$lang['strprev'] = '����';
	$lang['strnext'] = '����';
	$lang['strfirst'] = '<< �ǽ�';
	$lang['strlast'] = '�Ǹ� >>';
	$lang['strfailed'] = '����';
	$lang['strcreate'] = '����';
	$lang['strcreated'] = '�������ޤ���';
	$lang['strcomment'] = '������';
	$lang['strlength'] = 'Ĺ��';
	$lang['strdefault'] = '�ǥե����';
	$lang['stralter'] = '�ѹ�';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = '���ä�';
	$lang['strsave'] = '��¸';
	$lang['strreset'] = '�ꥻ�å�';
	$lang['strinsert'] = '����';
	$lang['strselect'] = '����';
	$lang['strdelete'] = '���';
	$lang['strupdate'] = '����';
	$lang['strreferences'] = '����';
	$lang['stryes'] = '�Ϥ�';
	$lang['strno'] = '������';
	$lang['strtrue'] = '��';
	$lang['strfalse'] = '��';
	$lang['stredit'] = '�Խ�';
	$lang['strcolumn'] = '�����';
	$lang['strcolumns'] = '��������';
	$lang['strrows'] = '�쥳����';
	$lang['strrowsaff'] = '�ƶ���������쥳����';
	$lang['strobjects'] = '���֥�������';
	$lang['strexample'] = '��)';
	$lang['strback'] = '���';
	$lang['strqueryresults'] = '��������';
	$lang['strshow'] = 'ɽ��';
	$lang['strempty'] = '���ˤ���';
	$lang['strlanguage'] = '����';
	$lang['strencoding'] = '���󥳡���';
	$lang['strvalue'] = '��';
	$lang['strunique'] = '��ˡ���';
	$lang['strprimary'] = '�ץ饤�ޥ�';
	$lang['strexport'] = '�������ݡ���';
	$lang['strimport'] = '����ݡ���';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'Go';
	$lang['stradmin'] = '����';
	$lang['strvacuum'] = '�Х��塼��';
	$lang['stranalyze'] = '����';
	$lang['strcluster'] = '���饹����';
	$lang['strclustered'] = 'Clustered?';
	$lang['strreindex'] = '�ƥ���ǥå���';
	$lang['strrun'] = '�¥����';
	$lang['stradd'] = '�ɲ�';
	$lang['strevent'] = '���٥��';
	$lang['strwhere'] = 'Where';
	$lang['strinstead'] = '���';
	$lang['strwhen'] = 'When';
	$lang['strformat'] = '�ե����ޥå�';
	$lang['strdata'] = '�ǡ���';
	$lang['strconfirm'] = '��ǧ';
	$lang['strexpression'] = 'ɾ����';
	$lang['strellipsis'] = '...';
	$lang['strseparator'] = ': ';
	$lang['strexpand'] = 'Ÿ��';
	$lang['strcollapse'] = '�Ĥ���';
	$lang['strexplain'] = '�¹Ի���';
	$lang['strexplainanalyze'] = '�ܺٽ��ϲ���';
	$lang['strfind'] = '����';
	$lang['stroptions'] = '���ץ����';
	$lang['strrefresh'] = '��ɽ��';
	$lang['strdownload'] = '���������';
	$lang['strdownloadgzipped'] = 'gzip �ǰ��̤��ƥ��������';
	$lang['strinfo'] = '����';
	$lang['stroids'] = 'OID ����';
	$lang['stradvanced'] = '���٤ʰ���';
	$lang['strvariables'] = '�ѿ�����';
	$lang['strprocess'] = '�ץ���';
	$lang['strprocesses'] = '�ץ�������';
	$lang['strsetting'] = '����';
	$lang['streditsql'] = 'SQL �Խ�';
	$lang['strruntime'] = '��¹Ի���: %s ms';
	$lang['strpaginate'] = 'Paginate results';
	$lang['struploadscript'] = 'or upload an SQL script:';
	$lang['strstarttime'] = '���ϻ���';
	$lang['strfile'] = '�ե�����';
	$lang['strfileimported'] = '�ե�����򥤥�ݡ��Ȥ��ޤ�����';

	// Error handling
	$lang['strnoframes'] = '���Υ��ץꥱ����������Ѥ��뤿��ˤϥե졼�ब���Ѳ�ǽ�ʥ֥饦������ɬ�פǤ���';
	$lang['strbadconfig'] = 'config.inc.php ���켰�Ǥ��������� config.inc.php-dist ����ƺ�������ɬ�פ�����ޤ���';
	$lang['strnotloaded'] = '�ǡ����١����򥵥ݡ��Ȥ���褦�� PHP �Υ���ѥ��롦���󥹥ȡ��뤬����Ƥ��ޤ���(�����ƥ�ˤ�äƤ� php �ѥå�������¾�� php-pgsql �ѥå������Υ��󥹥ȡ��롦����ʤɤ�ɬ�פǤ�)��';
	$lang['strpostgresqlversionnotsupported'] = '���� PostgreSQL �ΥС������ϥ��ݡ��Ȥ��Ƥ��ޤ��󡣥С������ %s �ʾ�˥��åץ��졼�ɤ��Ƥ���������';
	$lang['strbadschema'] = '̵���Υ������ޤ����ꤵ��ޤ�����';
	$lang['strbadencoding'] = '�ǡ����١�������ǥ��饤����ȥ��󥳡��ɤ���ꤷ�ޤ���Ǥ�����';
	$lang['strsqlerror'] = 'SQL ���顼:';
	$lang['strinstatement'] = 'ʸ:';
	$lang['strinvalidparam'] = '������ץȥѥ�᡼����̵���Ǥ���';
	$lang['strnodata'] = '�쥳���ɤ����Ĥ���ޤ���';
	$lang['strnoobjects'] = '���֥������Ȥ����Ĥ���ޤ���';
	$lang['strrownotunique'] = '���Υ쥳���ɤˤϰ�ռ��̻Ҥ�����ޤ���';
	$lang['strnoreportsdb'] = '��ݡ��ȥǡ����١�������������Ƥ��ޤ��󡣥ǥ��쥯�ȥ�ˤ��� INSTALL �ե�������ɤ�Ǥ���������';
	$lang['strnouploads'] = '�ե����륢�åץ��ɤ�̵���Ǥ���';
	$lang['strimporterror'] = '����ݡ��ȥ��顼';
	$lang['strimporterrorline'] = '%s ���ܤ�����ݡ��ȥ��顼�Ǥ���';

	// Tables
	$lang['strtable'] = '�ơ��֥�';
	$lang['strtables'] = '�ơ��֥����';
	$lang['strshowalltables'] = '���ơ��֥�򸫤�';
	$lang['strnotables'] = '�ơ��֥뤬���Ĥ���ޤ���';
	$lang['strnotable'] = '�ơ��֥뤬���Ĥ���ޤ���';
	$lang['strcreatetable'] = '�ơ��֥����';
	$lang['strtablename'] = '�ơ��֥�̾';
	$lang['strtableneedsname'] = '�ơ��֥�̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strtableneedsfield'] = '���ʤ��Ȥ��ĤΥե�����ɤ���ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtableneedscols'] = 'ͭ���ʥ���������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtablecreated'] = '�ơ��֥��������ޤ�����';
	$lang['strtablecreatedbad'] = '�ơ��֥�κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroptable'] = '�ơ��֥��%s�פ��������˴����ޤ���?';
	$lang['strtabledropped'] = '�ơ��֥���˴����ޤ�����';
	$lang['strtabledroppedbad'] = '�ơ��֥���˴��˼��Ԥ��ޤ�����';
	$lang['strconfemptytable'] = '�����˥ơ��֥��%s�פ����Ƥ��˴����ޤ���?';
	$lang['strtableemptied'] = '�ơ��֥뤬���ˤʤ�ޤ���.';
	$lang['strtableemptiedbad'] = '�ơ��֥����ˤǤ��ޤ���Ǥ�����';
	$lang['strinsertrow'] = '�쥳���ɤ�����';
	$lang['strrowinserted'] = '�쥳���ɤ��������ޤ�����';
	$lang['strrowinsertedbad'] = '�쥳���ɤ������˼��Ԥ��ޤ�����';
	$lang['streditrow'] = '�쥳�����Խ�';
	$lang['strrowupdated'] = '�쥳���ɤ򹹿����ޤ�����';
	$lang['strrowupdatedbad'] = '�쥳���ɤι����˼��Ԥ��ޤ�����';
	$lang['strdeleterow'] = '�쥳���ɺ��';
	$lang['strconfdeleterow'] = '�����ˤ��Υ쥳���ɤ������ޤ���?';
	$lang['strrowdeleted'] = '�쥳���ɤ������ޤ�����';
	$lang['strrowdeletedbad'] = '�쥳���ɤκ���˼��Ԥ��ޤ�����';
	$lang['strinsertandrepeat'] = '�����ȷ����֤�';
	$lang['strnumcols'] = 'Number of columns';
	$lang['strcolneedsname'] = 'You must specify a name for the column';
	$lang['strtypeneedscols'] = 'You must specify a valid number of fields.';
	$lang['strselectallfields'] = '��ƤΥե�����ɤ�����';
	$lang['strselectneedscol'] = '���ʤ��Ȥ�쥫����ɬ�פǤ���';
	$lang['strselectunary'] = 'ñ��Υ��ڥ졼�������ͤ���Ĥ��Ȥ��Ǥ��ޤ���';
	$lang['straltercolumn'] = '�������ѹ�';
	$lang['strcolumnaltered'] = '�������ѹ����ޤ�����';
	$lang['strcolumnalteredbad'] = '�������ѹ��˼��Ԥ��ޤ�����';
	$lang['strconfdropcolumn'] = '�����˥�����%s�פ�ơ��֥��%s�פ����˴����Ƥ����Ǥ���?';
	$lang['strcolumndropped'] = '�������˴����ޤ�����';
	$lang['strcolumndroppedbad'] = '�������˴��˼��Ԥ��ޤ�����';
	$lang['straddcolumn'] = '������ɲ�';
	$lang['strcolumnadded'] = '�������ɲä��ޤ�����';
	$lang['strcolumnaddedbad'] = '�������ɲä˼��Ԥ��ޤ�����';
	$lang['strdataonly'] = '�ǡ����Τ�';
	$lang['strcascade'] = '����������';
	$lang['strtablealtered'] = '�ơ��֥���ѹ����ޤ�����';
	$lang['strtablealteredbad'] = '�ơ��֥���ѹ��˼��Ԥ��ޤ�����';
	$lang['strdataonly'] = '�ǡ����Τ�';
	$lang['strstructureonly'] = '��¤�Τ�';
	$lang['strstructureanddata'] = '��¤�ȥǡ���';
	$lang['strtabbed'] = 'Tabbed';
	$lang['strauto'] = '��ư';
	$lang['strconfvacuumtable'] = '������ "%s" �� vacuum ���ޤ���?';
	$lang['strestimatedrowcount'] = 'Estimated Row Count';

	// Users
	$lang['struser'] = '�桼����';
	$lang['strusers'] = '�桼��������';
	$lang['strusername'] = '�桼����̾';
	$lang['strpassword'] = '�ѥ����';
	$lang['strsuper'] = '�����ѡ��桼����?';
	$lang['strcreatedb'] = '�ǡ����١�����������ޤ���?';
	$lang['strexpires'] = 'ͭ������';
	$lang['strsessiondefaults'] = '���å����ǥե����';
	$lang['strnousers'] = '�桼���������Ĥ���ޤ���';
	$lang['struserupdated'] = '�桼�����򹹿����ޤ�����';
	$lang['struserupdatedbad'] = '�桼�����ι����˼��Ԥ��ޤ�����';
	$lang['strshowallusers'] = '���ƤΥ桼�����򸫤롣';
	$lang['strcreateuser'] = '�桼��������';
	$lang['struserneedsname'] = '�桼������̾����ɬ�פǤ���';
	$lang['strusercreated'] = '�桼������������ޤ�����';
	$lang['strusercreatedbad'] = '�桼�����κ����˼��Ԥ��ޤ�����';
	$lang['strconfdropuser'] = '�����˥桼������%s�פ��˴����ޤ���?';
	$lang['struserdropped'] = '�桼�������˴����ޤ�����';
	$lang['struserdroppedbad'] = '�桼�����κ�����˴����ޤ���';
	$lang['straccount'] = '���������';
	$lang['strchangepassword'] = '�ѥ�����ѹ�';
	$lang['strpasswordchanged'] = '�ѥ���ɤ��ѹ��򤷤ޤ�����';
	$lang['strpasswordchangedbad'] = '�ѥ���ɤ��ѹ��˼��Ԥ��ޤ�����';
	$lang['strpasswordshort'] = '�ѥ���ɤ�û�����ޤ���';
	$lang['strpasswordconfirm'] = '�ѥ���ɤγ�ǧ�����פ��ޤ���Ǥ�����';
		
	// Groups
	$lang['strgroup'] = '���롼��';
	$lang['strgroups'] = '���롼�װ���';
	$lang['strnogroup'] = '���롼�פ�����ޤ���';
	$lang['strnogroups'] = '���롼�פ����Ĥ���ޤ���';
	$lang['strcreategroup'] = '���롼�׺���';
	$lang['strshowallgroups'] = '�����롼�פ򸫤�';
	$lang['strgroupneedsname'] = '���롼��̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strgroupcreated'] = '���롼�פ�������ޤ�����';
	$lang['strgroupcreatedbad'] = '���롼�פκ����˼��Ԥ��ޤ�����';	
	$lang['strconfdropgroup'] = '�����˥��롼�ס�%s�פ��˴����ޤ���?';
	$lang['strgroupdropped'] = '���롼�פ��˴����ޤ�����';
	$lang['strgroupdroppedbad'] = '���롼�פ��˴��˼��Ԥ��ޤ�����';
	$lang['strmembers'] = '���С�';
	$lang['straddmember'] = '���С��ɲ�';
	$lang['strmemberadded'] = '���С����ɲä��ޤ�����';
	$lang['strmemberaddedbad'] = '���С����ɲä˼��Ԥ��ޤ�����';
	$lang['strdropmember'] = '���С��˴�';
	$lang['strconfdropmember'] = '�����˥��С���%s�פ򥰥롼�ס�%s�פ����˴����ޤ���?';
	$lang['strmemberdropped'] = '���С����˴����ޤ�����';
	$lang['strmemberdroppedbad'] = '���С����˴��˼��Ԥ��ޤ�����';

	// Privileges
	$lang['strprivilege'] = '�ø�';
	$lang['strprivileges'] = '�ø�����';
	$lang['strnoprivileges'] = '���Υ��֥������Ȥ��ø�����äƤ��ޤ���';
	$lang['strgrant'] = '����';
	$lang['strrevoke'] = '�ѻ�';
	$lang['strgranted'] = '�ø���Ϳ���ޤ�����';
	$lang['strgrantfailed'] = '�ø���Ϳ������˼��Ԥ��ޤ�����';
	$lang['strgrantbad'] = '���ʤ��Ȥ��ͤΥ桼���������롼�פˡ����ʤ��Ȥ�ҤȤĤ��ø�����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strgrantor'] = '��Ϳ';
	$lang['strasterisk'] = '*';

	// Databases
	$lang['strdatabase'] = '�ǡ����١���';
	$lang['strdatabases'] = '�ǡ����١�������';
	$lang['strshowalldatabases'] = '���ǡ����١����򸫤�';
	$lang['strnodatabase'] = '�ǡ����١��������Ĥ���ޤ���';
	$lang['strnodatabases'] = '�ǡ����١�������������ޤ���';
	$lang['strcreatedatabase'] = '�ǡ����١�������';
	$lang['strdatabasename'] = '�ǡ����١���̾';
	$lang['strdatabaseneedsname'] = '�ǡ����١���̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strdatabasecreated'] = '�ǡ����١�����������ޤ�����';
	$lang['strdatabasecreatedbad'] = '�ǡ����١����κ����˼��Ԥ��ޤ�����';	
	$lang['strconfdropdatabase'] = '�����˥ǡ����١�����%s�פ��˴����ޤ���?';
	$lang['strdatabasedropped'] = '�ǡ����١������˴����ޤ�����';
	$lang['strdatabasedroppedbad'] = '�ǡ����١������˴��˼��Ԥ��ޤ�����';
	$lang['strentersql'] = '���˼¹Ԥ���SQL�����Ϥ��ޤ�:';
	$lang['strsqlexecuted'] = 'SQL��¹Ԥ��ޤ�����';
	$lang['strvacuumgood'] = '�Х��塼���λ���ޤ�����';
	$lang['strvacuumbad'] = '�Х��塼��˼��Ԥ��ޤ�����';
	$lang['stranalyzegood'] = '���Ϥ�λ���ޤ�����';
	$lang['stranalyzebad'] = '���Ϥ˼��Ԥ��ޤ�����';
	$lang['strreindexgood'] = '�ƥ���ǥå�����λ���ޤ�����';
	$lang['strreindexbad'] = '�ƥ���ǥå����˼��Ԥ��ޤ�����';
	$lang['strfull'] = '���٤�';
	$lang['strfreeze'] = '�ե꡼��';
	$lang['strforce'] = '����';
	$lang['strsignalsent'] = '�����ʥ�����';
	$lang['strsignalsentbad'] = '�����ʥ������˼��Ԥ��ޤ���';
	$lang['strallobjects'] = '���٤ƤΥ��֥������Ȱ���';

	// Views
	$lang['strview'] = '�ӥ塼';
	$lang['strviews'] = '�ӥ塼����';
	$lang['strshowallviews'] = '���ӥ塼��ɽ��';
	$lang['strnoview'] = '�ӥ塼������ޤ���';
	$lang['strnoviews'] = '�ӥ塼�����Ĥ���ޤ���';
	$lang['strcreateview'] = '�ӥ塼����';
	$lang['strviewname'] = '�ӥ塼̾';
	$lang['strviewneedsname'] = '�ӥ塼̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strviewneedsdef'] = '���̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strviewneedsfields'] = '�ӥ塼�Τ��椫�����򤷡���˾�Υ�������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strviewcreated'] = '�ӥ塼��������ޤ�����';
	$lang['strviewcreatedbad'] = '�ӥ塼�κ����˼��Ԥ��ޤ�����';
	$lang['strconfdropview'] = '�����˥ӥ塼��%s�פ��˴����ޤ���?';
	$lang['strviewdropped'] = '�ӥ塼���˴����ޤ�����';
	$lang['strviewdroppedbad'] = '�ӥ塼���˴��˼��Ԥ��ޤ�����';
	$lang['strviewupdated'] = '�ӥ塼�򹹿����ޤ�����';
	$lang['strviewupdatedbad'] = '�ӥ塼�ι����˼��Ԥ��ޤ�����';
	$lang['strviewlink'] = 'Linking Keys';
	$lang['strviewconditions'] = '�ɲþ��';
	$lang['strcreateviewwiz'] = '���������ɤǥӥ塼���������';

	// Sequences
	$lang['strsequence'] = '��������';
	$lang['strsequences'] = '�������󥹰���';
	$lang['strshowallsequences'] = '���������󥹤򸫤�';
	$lang['strnosequence'] = '�������󥹤�����ޤ���';
	$lang['strnosequences'] = '�������󥹤����Ĥ���ޤ���';
	$lang['strcreatesequence'] = '�������󥹺���';
	$lang['strlastvalue'] = '�ǽ���';
	$lang['strincrementby'] = '���ÿ�';	
	$lang['strstartvalue'] = '������';
	$lang['strmaxvalue'] = '������';
	$lang['strminvalue'] = '�Ǿ���';
	$lang['strcachevalue'] = '����å�����';
	$lang['strlogcount'] = '���������';
	$lang['striscycled'] = 'Is Cycled?';
	$lang['striscalled'] = 'Is Called?';
	$lang['strsequenceneedsname'] = '��������̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strsequencecreated'] = '�������󥹤�������ޤ�����';
	$lang['strsequencecreatedbad'] = '�������󥹤κ����˼��Ԥ��ޤ�����'; 
	$lang['strconfdropsequence'] = '�����˥������󥹡�%s�פ��˴����ޤ���?';
	$lang['strsequencedropped'] = '�������󥹤��˴����ޤ�����';
	$lang['strsequencedroppedbad'] = '�������󥹤��˴��˼��Ԥ��ޤ�����';
	$lang['strsequencereset'] = '�������󥹥ꥻ�åȤ�Ԥ��ޤ�����';
	$lang['strsequenceresetbad'] = '�������󥹤Υꥻ�åȤ˼��Ԥ��ޤ�����'; 

	// Indexes
	$lang['strindex'] = '����ǥå���';
	$lang['strindexes'] = '����ǥå�������';
	$lang['strindexname'] = '����ǥå���̾';
	$lang['strshowallindexes'] = '������ǥå�����ɽ��';
	$lang['strnoindex'] = '����ǥå���������ޤ���';
	$lang['strnoindexes'] = '����ǥå��������Ĥ���ޤ���';
	$lang['strcreateindex'] = '����ǥå�������';
	$lang['strtabname'] = '����̾';
	$lang['strcolumnname'] = '�����̾';
	$lang['strindexneedsname'] = 'ͭ���ʥ���ǥå���̾����ꤷ�ʤ���Ф����ޤ���';
	$lang['strindexneedscols'] = 'ͭ���ʥ���������ꤷ�ʤ���Ф����ޤ���';
	$lang['strindexcreated'] = '����ǥå�����������ޤ�����';
	$lang['strindexcreatedbad'] = '����ǥå���������˼��Ԥ��ޤ�����';
	$lang['strconfdropindex'] = '�����˥���ǥå�����%s�פ��˴����ޤ���?';
	$lang['strindexdropped'] = '����ǥå������˴����ޤ�����';
	$lang['strindexdroppedbad'] = '����ǥå������˴��˼��Ԥ��ޤ�����';
	$lang['strkeyname'] = '����̾';
	$lang['struniquekey'] = '��ˡ�������';
	$lang['strprimarykey'] = '�ץ饤�ޥꥭ��';
 	$lang['strindextype'] = '����ǥå���������';
	$lang['strtablecolumnlist'] = '�ơ��֥���Υ����';
	$lang['strindexcolumnlist'] = '����ǥå�����Υ����';
	$lang['strconfcluster'] = '�����ˡ�%s�פ򥯥饹�����ˤ��ޤ���?';
	$lang['strclusteredgood'] = '���饹������λ�Ǥ���';
	$lang['strclusteredbad'] = '���饹�����˼��Ԥ��ޤ�����';

	// Rules
	$lang['strrules'] = '�롼�����';
	$lang['strrule'] = '�롼��';
	$lang['strshowallrules'] = '���롼���ɽ��';
	$lang['strnorule'] = '�롼�뤬����ޤ���';
	$lang['strnorules'] = '�롼�뤬���Ĥ���ޤ���';
	$lang['strcreaterule'] = '�롼�����';
	$lang['strrulename'] = '�롼��̾';
	$lang['strruleneedsname'] = '�롼��̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strrulecreated'] = '�롼���������ޤ�����';
	$lang['strrulecreatedbad'] = '�롼��κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroprule'] = '�����˥롼���%s�פ�ǡ����١�����%s�פ����˴����ޤ���?';
	$lang['strruledropped'] = '�롼����˴����ޤ�����';
	$lang['strruledroppedbad'] = '�롼����˴��˼��Ԥ��ޤ�����';

	// Constraints
	$lang['strconstraint'] = '��������';
	$lang['strconstraints'] = '�����������';
	$lang['strshowallconstraints'] = '�����������ɽ��';
	$lang['strnoconstraints'] = '�������󤬤���ޤ���';
	$lang['strcreateconstraint'] = '��������κ���';
	$lang['strconstraintcreated'] = '���������������ޤ�����';
	$lang['strconstraintcreatedbad'] = '��������κ����˼��Ԥ��ޤ�����';
	$lang['strconfdropconstraint'] = '�����˸��������%s�פ�ǡ����١�����%s�פ����˴����ޤ���?';
	$lang['strconstraintdropped'] = '����������˴����ޤ�����';
	$lang['strconstraintdroppedbad'] = '����������˴��˼��Ԥ��ޤ�����';
	$lang['straddcheck'] = '�����å��ɲ�';
	$lang['strcheckneedsdefinition'] = '��������ˤ������ɬ�פǤ���';
	$lang['strcheckadded'] = '����������ɲä��ޤ�����';
	$lang['strcheckaddedbad'] = '����������ɲä˼��Ԥ��ޤ�����';
	$lang['straddpk'] = '�ץ饤�ޥꥭ���ɲ�';
	$lang['strpkneedscols'] = '�ץ饤�ޥꥭ���Ͼ��ʤ��Ȥ�쥫����ɬ�פȤ��ޤ���';
	$lang['strpkadded'] = '�ץ饤�ޥꥭ�����ɲä��ޤ�����';
	$lang['strpkaddedbad'] = '�ץ饤�ޥꥭ�����ɲä˼��Ԥ��ޤ�����';
	$lang['stradduniq'] = '��ˡ��������ɲ�';
	$lang['struniqneedscols'] = '��ˡ��������Ͼ��ʤ��Ȥ�쥫����ɬ�פȤ��ޤ���';
	$lang['struniqadded'] = '��ˡ����������ɲä��ޤ�����';
	$lang['struniqaddedbad'] = '��ˡ����������ɲä˼��Ԥ��ޤ�����';
	$lang['straddfk'] = '�����������ɲ�';
	$lang['strfkneedscols'] = '���������Ͼ��ʤ��Ȥ�쥫����ɬ�פȤ��ޤ���';
	$lang['strfkneedstarget'] = '���������ϥ������åȥơ��֥��ɬ�פȤ��ޤ���';
	$lang['strfkadded'] = '�����������ɲä��ޤ�����';
	$lang['strfkaddedbad'] = '�����������ɲä˼��Ԥ��ޤ�����';
	$lang['strfktarget'] = '�оݥơ��֥�';
	$lang['strfkcolumnlist'] = '������Υ����';
	$lang['strondelete'] = 'ON DELETE';
	$lang['stronupdate'] = 'ON UPDATE';	

	// Functions
	$lang['strfunction'] = '�ؿ�';
	$lang['strfunctions'] = '�ؿ�����';
	$lang['strshowallfunctions'] = '���ؿ���ɽ��';
	$lang['strnofunction'] = '�ؿ�������ޤ���';
	$lang['strnofunctions'] = '�ؿ������Ĥ���ޤ���';
	$lang['strcreateplfunction'] = 'SQL/PL �ؿ�����';
	$lang['strcreateinternalfunction'] = 'Create internal function';
	$lang['strcreatecfunction'] = 'C �ؿ�����';
	$lang['strfunctionname'] = '�ؿ�̾';
	$lang['strreturns'] = '�֤���';
	$lang['strarguments'] = '����';
	$lang['strproglanguage'] = '�ץ���ߥ󥰸���';
	$lang['strfunctionneedsname'] = '�ؿ�̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strfunctionneedsdef'] = '�ؿ�������򤷤ʤ���Фʤꤢ����';
	$lang['strfunctioncreated'] = '�ؿ���������ޤ�����';
	$lang['strfunctioncreatedbad'] = '�ؿ��κ����˼��Ԥ��ޤ�����';
	$lang['strconfdropfunction'] = '�����˴ؿ���%s�פ��˴����ޤ���?';
	$lang['strfunctiondropped'] = '�ؿ����˴����ޤ�����';
	$lang['strfunctiondroppedbad'] = '�ؿ����˴��˼��Ԥ��ޤ�����';
	$lang['strfunctionupdated'] = '�ؿ��򹹿����ޤ�����';
	$lang['strfunctionupdatedbad'] = '�ؿ��ι����˼��Ԥ��ޤ�����';
	$lang['strobjectfile'] = '���֥������ȥե�����';
	$lang['strlinksymbol'] = '��󥯥���ܥ�';

	// Triggers
	$lang['strtrigger'] = '�ȥꥬ��';
	$lang['strtriggers'] = '�ȥꥬ������';
	$lang['strshowalltriggers'] = '���ȥꥬ����ɽ��';
	$lang['strnotrigger'] = '�ȥꥬ��������ޤ���';
	$lang['strnotriggers'] = '�ȥꥬ�������Ĥ���ޤ���';
	$lang['strcreatetrigger'] = '�ȥꥬ������';
	$lang['strtriggerneedsname'] = '�ȥꥬ��̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strtriggerneedsfunc'] = '�ȥꥬ���Τ���δؿ�����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtriggercreated'] = '�ȥꥬ����������ޤ�����';
	$lang['strtriggercreatedbad'] = '�ȥꥬ���κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroptrigger'] = '�����˥ȥꥬ����%s�פ�ǡ����١�����%s�פ����˴����ޤ���?';
	$lang['strtriggerdropped'] = '�ȥꥬ�����˴����ޤ�����';
	$lang['strtriggerdroppedbad'] = '�ȥꥬ�����˴��˼��Ԥ��ޤ�����';
	$lang['strtriggeraltered'] = '�ȥꥬ�����ѹ����ޤ�����';
	$lang['strtriggeralteredbad'] = '�ȥꥬ�����ѹ��˼��Ԥ��ޤ�����';

	// Types
	$lang['strtype'] = '�ǡ�����';
	$lang['strtypes'] = '�ǡ���������';
	$lang['strshowalltypes'] = '���ǡ�������ɽ������';
	$lang['strnotype'] = '�ǡ�����������ޤ���';
	$lang['strnotypes'] = '�ǡ����������Ĥ���ޤ���Ǥ�����';
	$lang['strcreatetype'] = '�ǡ������κ���';
	$lang['strcreatecomptype'] = 'ʣ�緿����';
	$lang['strtypeneedsfield'] = '���ʤ��Ȥ� 1 �ĤΥե�����ɤ���ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtypeneedscols'] = 'ͭ���ʥե�����ɤο�����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtypename'] = '�ǡ�����̾';
	$lang['strinputfn'] = '���ϴؿ�';
	$lang['stroutputfn'] = '���ϴؿ�';
	$lang['strpassbyval'] = 'Passed by val?';
	$lang['stralignment'] = '���饤����';
	$lang['strelement'] = '����';
	$lang['strdelimiter'] = '�ǥߥ꥿';
	$lang['strstorage'] = '���ȥ졼��';
	$lang['strfield'] = '�ե������';
	$lang['strnumfields'] = '�ե�����ɿ�';
	$lang['strtypeneedsname'] = '��̾����ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtypeneedslen'] = '�ǡ�������Ĺ������ꤷ�ʤ���Фʤ�ޤ���';
	$lang['strtypecreated'] = '�ǡ�������������ޤ�����';
	$lang['strtypecreatedbad'] = '�ǡ������κ����˼��Ԥ��ޤ���';
	$lang['strconfdroptype'] = '�����˥ǡ�������%s�פ��˴����ޤ���?';
	$lang['strtypedropped'] = '�ǡ��������˴����ޤ�����';
	$lang['strtypedroppedbad'] = '�ǡ��������˴��˼��Ԥ��ޤ�����';
	$lang['strflavor'] = 'Flavor';
	$lang['strbasetype'] = '����';
	$lang['strcompositetype'] = 'ʣ�緿';
	$lang['strpseudotype'] = 'Pseudo';

	// Schemas
	$lang['strschema'] = '��������';
	$lang['strschemas'] = '�������ް���';
	$lang['strshowallschemas'] = '���������ޤ�ɽ��';
	$lang['strnoschema'] = '�������ޤ�����ޤ���';
	$lang['strnoschemas'] = '�������ޤ����Ĥ���ޤ���';
	$lang['strcreateschema'] = '�������޺���';
	$lang['strschemaname'] = '��������̾';
	$lang['strschemaneedsname'] = '��������̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strschemacreated'] = '�������ޤ�������ޤ�����';
	$lang['strschemacreatedbad'] = '�������ޤκ����˼��Ԥ��ޤ�����';
	$lang['strconfdropschema'] = '�����˥������ޡ�%s�פ��˴����ޤ���?';
	$lang['strschemadropped'] = '�������ޤ��˴����ޤ�����';
	$lang['strschemadroppedbad'] = '�������ޤ��˴��˼��Ԥ��ޤ�����';
	$lang['strschemaaltered'] = '�������ޤ��ѹ����ޤ�����';
	$lang['strschemaalteredbad'] = '�������ޤ��ѹ��˼��Ԥ��ޤ�����';
        $lang['strsearchpath'] = '�������޸����ѥ�';

	// Reports
	$lang['strreport'] = '��ݡ���';
	$lang['strreports'] = '��ݡ��Ȱ���';
	$lang['strshowallreports'] = '����ݡ��Ȥ򸫤�';
	$lang['strnoreports'] = '��ݡ��Ȥ����Ĥ���ޤ���';
	$lang['strcreatereport'] = '��ݡ��Ⱥ���';
	$lang['strreportdropped'] = '��ݡ��Ȥ��˴����ޤ�����';
	$lang['strreportdroppedbad'] = '��ݡ��Ȥ��˴��˼��Ԥ��ޤ�����';
	$lang['strconfdropreport'] = '�����˥�ݡ��ȡ�%s�פ��˴����ޤ���?';
	$lang['strreportneedsname'] = '��ݡ���̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strreportneedsdef'] = '��ݡ����Ѥ�SQL����ꤹ��ɬ�פ�����ޤ���';
	$lang['strreportcreated'] = '��ݡ��Ȥ���¸�򤷤ޤ�����';
	$lang['strreportcreatedbad'] = '��ݡ��Ȥ���¸�˼��Ԥ��ޤ�����';

	// Domains
	$lang['strdomain'] = '�ɥᥤ��';
	$lang['strdomains'] = '�ɥᥤ�����';
	$lang['strshowalldomains'] = '���ɥᥤ��򸫤�';
	$lang['strnodomains'] = '�ɥᥤ�󤬤���ޤ���';
	$lang['strcreatedomain'] = '�ɥᥤ�����';
	$lang['strdomaindropped'] = '�ɥᥤ����˴����ޤ�����';
	$lang['strdomaindroppedbad'] = '�ɥᥤ����˴��˼��Ԥ��ޤ�����';
	$lang['strconfdropdomain'] = '�����˥ɥᥤ���%s�פ��˴����ޤ���?';
	$lang['strdomainneedsname'] = '�ɥᥤ��̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strdomaincreated'] = '�ɥᥤ���������ޤ�����';
	$lang['strdomaincreatedbad'] = '�ɥᥤ��κ����˼��Ԥ��ޤ�����';	
	$lang['strdomainaltered'] = '�ɥᥤ����ѹ����ޤ�����';
	$lang['strdomainalteredbad'] = '�ɥᥤ����ѹ��˼��Ԥ��ޤ�����';	

	// Operators
	$lang['stroperator'] = '�黻��';
	$lang['stroperators'] = '�黻�Ұ���';
	$lang['strshowalloperators'] = '���黻�Ҥ򸫤�';
	$lang['strnooperator'] = '�黻�Ҥ����Ĥ���ޤ���';
	$lang['strnooperators'] = '�黻�ҥ��饹�����Ĥ���ޤ���';
	$lang['strcreateoperator'] = '�黻�Ҥ�������ޤ�����';
	$lang['strleftarg'] = '������������';
	$lang['strrightarg'] = '������������';
	$lang['strcommutator'] = '����';
	$lang['strnegator'] = '����';
	$lang['strrestrict'] = '����';
	$lang['strjoin'] = '���';
	$lang['strhashes'] = '�ϥå���';
	$lang['strmerges'] = 'ʻ��';
	$lang['strleftsort'] = '��������';
	$lang['strrightsort'] = '��������';
	$lang['strlessthan'] = '̤��';
	$lang['strgreaterthan'] = '�ʾ�';
	$lang['stroperatorneedsname'] = '�黻��̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['stroperatorcreated'] = '�黻�Ҥ�������ޤ�����';
	$lang['stroperatorcreatedbad'] = '�黻�Ҥκ����˼��Ԥ��ޤ�����';
	$lang['strconfdropoperator'] = '�����˱黻�ҡ�%s�פ��˴����ޤ���?';
	$lang['stroperatordropped'] = '�黻�Ҥ��˴����ޤ�����';
	$lang['stroperatordroppedbad'] = '�黻�Ҥ��˴��˼��Ԥ��ޤ�����';

	// Casts
	$lang['strcasts'] = '���㥹�Ȱ���';
	$lang['strnocasts'] = '���㥹�Ȥ����Ĥ���ޤ���';
	$lang['strsourcetype'] = '������������';
	$lang['strtargettype'] = '�������åȥ�����';
	$lang['strimplicit'] = '����';
	$lang['strinassignment'] = 'In assignment';
	$lang['strbinarycompat'] = '(�Х��ʥ�ߴ�)';
	
	// Conversions
	$lang['strconversions'] = '�Ѵ�����';
	$lang['strnoconversions'] = '�Ѵ������Ĥ���ޤ���';
	$lang['strsourceencoding'] = '�Ѵ������󥳡���';
	$lang['strtargetencoding'] = '�Ѵ��襨�󥳡���';
	
	// Languages
	$lang['strlanguages'] = '�������';
	$lang['strnolanguages'] = '���줬¸�ߤ��ޤ���';
	$lang['strtrusted'] = 'Trusted';
	
	// Info
	$lang['strnoinfo'] = 'ͭ���ʾ��󤬤���ޤ���';
	$lang['strreferringtables'] = '���ȥơ��֥����';
	$lang['strparenttables'] = '�ƥơ��֥����';
	$lang['strchildtables'] = '�ҥơ��֥����';

	// Aggregates
	$lang['straggregates'] = '���װ���';
	$lang['strnoaggregates'] = '���פ�����ޤ���';
	$lang['stralltypes'] = '(���ƤΥ�����)';

	// Operator Classes
	$lang['stropclasses'] = '�黻�ҥ��饹����';
	$lang['strnoopclasses'] = '�黻�ҥ��饹�����Ĥ���ޤ���';
	$lang['straccessmethod'] = '����������ˡ';

	// Stats and performance
	$lang['strrowperf'] = '�ԥѥե����ޥ�';
	$lang['strioperf'] = 'I/O �ѥե����ޥ�';
	$lang['stridxrowperf'] = '����ǥå����ԥѥե����ޥ�';
	$lang['stridxioperf'] = '����ǥå��� I/O �ѥե����ޥ�';
	$lang['strpercent'] = '%';
	$lang['strsequential'] = '�������󥷥��';
	$lang['strscan'] = '����';
	$lang['strread'] = '�ɹ�';
	$lang['strfetch'] = '����';
	$lang['strheap'] = '�ҡ���';
	$lang['strtoast'] = 'TOAST';
	$lang['strtoastindex'] = 'TOAST ����ǥå���';
	$lang['strcache'] = '����å���';
	$lang['strdisk'] = '�ǥ�����';
	$lang['strrows2'] = '��';

	// Tablespaces
	$lang['strtablespaces'] = '�ơ��֥����';
	$lang['strtablespace'] = '�ơ��֥����';
	$lang['strshowalltablespaces'] = '���٤ƤΥơ��֥륹�ڡ�����ɽ��';
	$lang['strnotablespaces'] = '�ơ��֥���֤����Ĥ���ޤ���';
	$lang['strcreatetablespace'] = '�ơ��֥���ֺ���';
	$lang['strlocation'] = '���������';
	$lang['strtablespaceneedsname'] = '�ơ��֥����̾����ꤹ��ɬ�פ�����ޤ���';
	$lang['strtablespaceneedsloc'] = '�ơ��֥���ֺ����򤹤�ǥ��쥯�ȥ����ꤹ��ɬ�פ�����ޤ���';
	$lang['strtablespacecreated'] = '�ơ��֥���֤�������ޤ�����';
	$lang['strtablespacecreatedbad'] = '�ơ��֥���֤κ����˼��Ԥ��ޤ�����';
	$lang['strconfdroptablespace'] = '�����˥ơ��֥���֡�%s�פ��˴����ޤ���?';
	$lang['strtablespacedropped'] = '�ơ��֥���֤��˴����ޤ�����';
	$lang['strtablespacedroppedbad'] = '�ơ��֥���֤��˴��˼��Ԥ��ޤ�����';
	$lang['strtablespacealtered'] = '�ơ��֥���֤��ѹ����ޤ�����';
	$lang['strtablespacealteredbad'] = '�ơ��֥���֤��ѹ��˼��Ԥ��ޤ�����';

	// Miscellaneous
	$lang['strtopbar'] = '%s �� %s �ݡ����ֹ� %s ����³ -- �桼������%s�פǥۥ��ȡ�%s�פ˥�����';
	$lang['strtimefmt'] = 'Y ǯ n �� j �� G:i';
	$lang['strhelp'] = '�إ��';
	$lang['strhelpicon'] = '?';
?>
