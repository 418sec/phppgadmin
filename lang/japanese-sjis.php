<?php

	/**
	 * Japanese language file for phpPgAdmin.  Use this as a basis
	 * for new translations.
	 *
	 * $Id: japanese-sjis.php,v 1.1 2003/04/04 02:13:30 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = '���{��(SHIFT_JIS)';
	$lang['appcharset'] = 'SHIFT_JIS';

	// Basic strings
	$lang['strintro'] = '�悤����phpPgAdmin�ցB';
	$lang['strlogin'] = '���O�C��';
	$lang['strloginfailed'] = '���O�C�����s';
	$lang['strserver'] = '�T�[�o�[';
	$lang['strlogout'] = '���O�A�E�g';
	$lang['strowner'] = '���L��';
	$lang['straction'] = '�A�N�V����';
	$lang['stractions'] = '����ꗗ';
	$lang['strname'] = '���O';
	$lang['strdefinition'] = '��`';
	$lang['stroperators'] = '����';
	$lang['straggregates'] = '���v';
	$lang['strproperties'] = '�v���p�e�B';
	$lang['strbrowse'] = '�{��';
	$lang['strdrop'] = '�j��';
	$lang['strdropped'] = '�j�����܂���';
	$lang['strnull'] = 'NULL';
	$lang['strnotnull'] = 'NOT NULL';
	$lang['strprev'] = '�O��';
	$lang['strnext'] = '����';
	$lang['strfailed'] = '���s';
	$lang['strcreate'] = '�쐬';
	$lang['strcreated'] = '�쐬���܂���';
	$lang['strcomment'] = '�R�����g';
	$lang['strlength'] = '����';
	$lang['strdefault'] = '�f�t�H���g';
	$lang['stralter'] = '�ύX';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = '������';
	$lang['strsave'] = '�ۑ�';
	$lang['strreset'] = '���Z�b�g';
	$lang['strinsert'] = '�}��';
	$lang['strselect'] = '�I��';
	$lang['strdelete'] = '�폜';
	$lang['strupdate'] = '�X�V';
	$lang['strreferences'] = '�Q��';
	$lang['stryes'] = '�͂�';
	$lang['strno'] = '������';
	$lang['stredit'] = '�ҏW';
	$lang['strcolumns'] = '�J�����ꗗ';
	$lang['strrows'] = '���R�[�h';
	$lang['strexample'] = '��)';
	$lang['strback'] = '�߂�';
	$lang['strqueryresults'] = '�N�G������';
	$lang['strshow'] = '�{��';
	$lang['strempty'] = '��';
	$lang['strlanguage'] = '����';
	$lang['strencoding'] = '�G���R�[�h';
	$lang['strvalue'] = '�l';
	$lang['strunique'] = '���j�[�N';
	$lang['strprimary'] = '�v���C�}��';
	$lang['strexport'] = '�G�N�X�|�[�g';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'Go';
	$lang['stradmin'] = '�Ǘ�';
	$lang['strvacuum'] = '�o�L���[��';
	$lang['stranalyze'] = '���';
	$lang['strcluster'] = '�N���X�^�[';
	$lang['strreindex'] = '�ăC���f�b�N�X';
	$lang['strrun'] = '���J����';
	$lang['stradd'] = '�ǉ�';
	$lang['strevent'] = '�C�x���g';
	$lang['strwhere'] = 'Where';
	$lang['strinstead'] = 'Do Instead';
	$lang['strwhen'] = 'When';
	$lang['strformat'] = '�t�H�[�}�b�g';

	// Error handling
	$lang['strnoframes'] = '���̃A�v���P�[�V�������g�p���邽�߂ɂ̓t���[�����g�p�\�ȃu���E�U�[���K�v�ł��B';
	$lang['strbadconfig'] = 'config.inc.php�������ł��B�V����config.inc.php-dist����č쐬����K�v������܂��B';
	$lang['strnotloaded'] = '�f�[�^�x�[�X���T�|�[�g����悤��PHP�̃R���p�C���E�C���X�g�[��������Ă��܂���';
	$lang['strbadschema'] = '�����̃X�L�[�}���w�肳��܂����B';
	$lang['strbadencoding'] = '�f�[�^�x�[�X�̒��ŃN���C�A���g�G���R�[�h���w�肵�܂���ł����B';
	$lang['strsqlerror'] = 'SQL�G���[:';
	$lang['strinstatement'] = 'In statement:';
	$lang['strinvalidparam'] = '�X�N���v�g�p�����[�^�������ł��B';
	$lang['strnodata'] = '���R�[�h��������܂���B';

	// Tables
	$lang['strtable'] = '�e�[�u��';
	$lang['strtables'] = '�e�[�u���ꗗ';
	$lang['strshowalltables'] = '�S�e�[�u��������';
	$lang['strnotables'] = '�e�[�u����������܂���B';
	$lang['strnotable'] = '�e�[�u����������܂���B';
	$lang['strcreatetable'] = '�e�[�u���쐬';
	$lang['strtablename'] = '�e�[�u����';
	$lang['strtableneedsname'] = '�e�[�u�������w�肷��K�v������܂��B';
	$lang['strtableneedsfield'] = '���Ȃ��Ƃ���̃t�B�[���h���w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strtableneedscols'] = '�L���ȃJ���������w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strtablecreated'] = '�e�[�u�����쐬���܂����B';
	$lang['strtablecreatedbad'] = '�e�[�u���̍쐬�Ɏ��s���܂����B';
	$lang['strconfdroptable'] = '�e�[�u���u%s�v��{���ɔj�����܂���?';
	$lang['strtabledropped'] = '�e�[�u����j�����܂����B';
	$lang['strtabledroppedbad'] = '�e�[�u���̔j���Ɏ��s���܂����B';
	$lang['strconfemptytable'] = '�e�[�u���u%s�v�̑S���R�[�h��{���ɔj�����܂���?';
	$lang['strtableemptied'] = '�e�[�u������ɂȂ�܂���.';
	$lang['strtableemptiedbad'] = '�e�[�u������ɂł��܂���ł����B';
	$lang['strinsertrow'] = '���R�[�h�̑}��';
	$lang['strrowinserted'] = '���R�[�h��}�����܂����B';
	$lang['strrowinsertedbad'] = '���R�[�h�̑}���Ɏ��s���܂����B';
	$lang['streditrow'] = '���R�[�h�ҏW';
	$lang['strrowupdated'] = '���R�[�h���X�V���܂����B';
	$lang['strrowupdatedbad'] = '���R�[�h�̍X�V�Ɏ��s���܂����B';
	$lang['strdeleterow'] = '���R�[�h�폜';
	$lang['strconfdeleterow'] = '�{���ɂ��̃��R�[�h���폜���܂���?';
	$lang['strrowdeleted'] = '���R�[�h���폜���܂����B';
	$lang['strrowdeletedbad'] = '���R�[�h�̍폜�Ɏ��s���܂����B';
	$lang['strsaveandrepeat'] = '�ۑ��ƌJ��Ԃ�';
	$lang['strfield'] = '�t�B�[���h';
	$lang['strfields'] = '�t�B�[���h�ꗗ';
	$lang['strnumfields'] = 'Num. Of Fields';
	$lang['strfieldneedsname'] = '�t�B�[���h�����w�肷��K�v������܂��B';
	$lang['strselectneedscol'] = '���Ȃ��Ƃ�1�J�����͕K�v�ł��B';
	$lang['straltercolumn'] = '�J�����̕ύX';
	$lang['strcolumnaltered'] = '�J������ύX���܂����B';
	$lang['strcolumnalteredbad'] = '�J�����̕ύX�Ɏ��s���܂����B';
        $lang['strconfdropcolumn'] = '�{���ɃJ�����u%s�v���e�[�u���u%s�v����j�����Ă����ł���?';
	$lang['strcolumndropped'] = '�J������j�����܂����B';
	$lang['strcolumndroppedbad'] = '�J�����̔j���Ɏ��s���܂����B';
	$lang['straddcolumn'] = '�J�����ǉ�';
	$lang['strcolumnadded'] = '�J������ǉ����܂����B';
	$lang['strcolumnaddedbad'] = '�J�����̒ǉ��Ɏ��s���܂����B';

	// Users
	$lang['struseradmin'] = '���[�U�[�Ǘ�';
	$lang['struser'] = '���[�U�[';
	$lang['strusers'] = '���[�U�[�ꗗ';
	$lang['strusername'] = '���[�U�[��';
	$lang['strpassword'] = '�p�X���[�h';
	$lang['strsuper'] = '�X�[�p�[���[�U�[?';
	$lang['strcreatedb'] = 'DB���쐬���܂���?';
	$lang['strexpires'] = '�L������';
	$lang['strnousers'] = '���[�U�[��������܂���B';
        $lang['struserupdated'] = '���[�U�[���X�V���܂����B';
	$lang['struserupdatedbad'] = '���[�U�[�̍X�V�Ɏ��s���܂����B';
	$lang['strshowallusers'] = '�S�Ẵ��[�U�[������B';
	$lang['strcreateuser'] = '���[�U�[�쐬';
	$lang['strusercreated'] = '���[�U�[���쐬���܂����B';
	$lang['strusercreatedbad'] = '���[�U�[�̍쐬�Ɏ��s���܂����B';
	$lang['strconfdropuser'] = '�{���Ƀ��[�U�[�u%s�v��j�����܂���?';
	$lang['struserdropped'] = '���[�U�[��j�����܂����B';
	$lang['struserdroppedbad'] = '���[�U�[�̍폜�ɔj�����܂���';
		
	// Groups
	$lang['strgroupadmin'] = '�O���[�v�Ǘ�';
	$lang['strgroup'] = '�O���[�v';
	$lang['strgroups'] = '�O���[�v�ꗗ';
	$lang['strnogroup'] = '�O���[�v������܂���B';
	$lang['strnogroups'] = '�O���[�v��������܂���B';
	$lang['strcreategroup'] = '�O���[�v�쐬';
	$lang['strshowallgroups'] = '�S�O���[�v������';
	$lang['strgroupneedsname'] = '�O���[�v�����w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strgroupcreated'] = '�O���[�v���쐬���܂����B';
	$lang['strgroupcreatedbad'] = '�O���[�v�̍쐬�Ɏ��s���܂����B';	
	$lang['strconfdropgroup'] = '�{���ɃO���[�v�u%s�v��j�����܂���?';
	$lang['strgroupdropped'] = '�O���[�v��j�����܂����B';
	$lang['strgroupdroppedbad'] = '�O���[�v�̔j���Ɏ��s���܂����B';
	$lang['strmembers'] = '�����o�[';

	// Privilges
	$lang['strprivilege'] = '����';
	$lang['strprivileges'] = '�����ꗗ';
	$lang['strnoprivileges'] = '���̃I�u�W�F�N�g�͓����������Ă��܂���B';
	$lang['strgrant'] = '����';
	$lang['strrevoke'] = '�p�~';
	$lang['strgranted'] = '������^���܂����B';
	$lang['strgrantfailed'] = '������^���鎖�Ɏ��s���܂����B';
	$lang['strgrantuser'] = '���[�U�[����';
	$lang['strgrantgroup'] = '�O���[�v����';

	// Databases
	$lang['strdatabase'] = '�f�[�^�x�[�X';
	$lang['strdatabases'] = '�f�[�^�x�[�X�ꗗ';
	$lang['strshowalldatabases'] = '�S�f�[�^�x�[�X������';
	$lang['strnodatabase'] = '�f�[�^�x�[�X��������܂���B';
	$lang['strnodatabases'] = 'No Databases found.';
	$lang['strcreatedatabase'] = '�f�[�^�x�[�X�쐬';
	$lang['strdatabasename'] = '�f�[�^�x�[�X��';
	$lang['strdatabaseneedsname'] = '�f�[�^�x�[�X�����w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strdatabasecreated'] = '�f�[�^�x�[�X���쐬���܂����B';
	$lang['strdatabasecreatedbad'] = '�f�[�^�x�[�X�̍쐬�Ɏ��s���܂����B';	
	$lang['strconfdropdatabase'] = '�{���Ƀf�[�^�x�[�X�u%s�v��j�����܂���?';
	$lang['strdatabasedropped'] = '�f�[�^�x�[�X��j�����܂����B';
	$lang['strdatabasedroppedbad'] = '�f�[�^�x�[�X�̔j���Ɏ��s���܂����B';
	$lang['strentersql'] = '���Ɏ��s����SQL����͂��܂�:';
	$lang['strvacuumgood'] = '�o�L���[�����������܂����B';
	$lang['strvacuumbad'] = '�o�L���[���Ɏ��s���܂����B';
	$lang['stranalyzegood'] = '��͂��������܂����B';
	$lang['stranalyzebad'] = '��͂Ɏ��s���܂����B';

	// Views
	$lang['strview'] = '�r���[';
	$lang['strviews'] = '�r���[�ꗗ';
	$lang['strshowallviews'] = '�S�r���[�̕\��';
	$lang['strnoview'] = '�r���[������܂���B';
	$lang['strnoviews'] = '�r���[��������܂���B';
	$lang['strcreateview'] = '�r���[�쐬';
	$lang['strviewname'] = '�r���[��';
	$lang['strviewneedsname'] = '�r���[�����w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strviewneedsdef'] = '��`�����w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strviewcreated'] = '�r���[���쐬���܂����B';
	$lang['strviewcreatedbad'] = '�r���[�̍쐬�Ɏ��s���܂����B';
	$lang['strconfdropview'] = '�{���Ƀr���[�u%s�v��j�����܂���?';
	$lang['strviewdropped'] = '�r���[��j�����܂����B';
	$lang['strviewdroppedbad'] = '�r���[�̔j���Ɏ��s���܂����B';
	$lang['strviewupdated'] = '�r���[���X�V���܂����B';
	$lang['strviewupdatedbad'] = '�r���[�̍X�V�Ɏ��s���܂����B';

	// Sequences
	$lang['strsequence'] = '�V�[�P���X';
	$lang['strsequences'] = '�V�[�P���X�ꗗ';
	$lang['strshowallsequences'] = '�S�V�[�P���X������';
	$lang['strnosequence'] = '�V�[�P���X������܂���B';
	$lang['strnosequences'] = '�V�[�P���X��������܂���B';
	$lang['strcreatesequence'] = '�V�[�P���X�쐬';
	$lang['strlastvalue'] = '�ŏI�l';
	$lang['strincrementby'] = 'Increment By';	
	$lang['strstartvalue'] = '�J�n�l';
	$lang['strmaxvalue'] = '�ő�l';
	$lang['strminvalue'] = '�ŏ��l';
	$lang['strcachevalue'] = '�L���b�V���l';
	$lang['strlogcount'] = '���O�J�E���g';
	$lang['striscycled'] = 'Is Cycled?';
	$lang['striscalled'] = 'Is Called?';
	$lang['strsequenceneedsname'] = '�V�[�P���X�����w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strsequencecreated'] = '�V�[�P���X���쐬���܂����B';
	$lang['strsequencecreatedbad'] = '�V�[�P���X�̍쐬�Ɏ��s���܂����B'; 
	$lang['strconfdropsequence'] = '�{���ɃV�[�P���X�u%s�v��j�����܂���?';
	$lang['strsequencedropped'] = '�V�[�P���X��j�����܂����B';
	$lang['strsequencedroppedbad'] = '�V�[�P���X�̔j���Ɏ��s���܂����B';

	// Indexes
	$lang['strindexes'] = '�C���f�b�N�X�ꗗ';
	$lang['strindexname'] = '�C���f�b�N�X��';
	$lang['strshowallindexes'] = '�S�C���f�b�N�X�̕\��';
	$lang['strnoindex'] = '�C���f�b�N�X������܂���B';
	$lang['strnoindexes'] = '�C���f�b�N�X��������܂���B';
	$lang['strcreateindex'] = '�C���f�b�N�X�쐬';
	$lang['strindexname'] = '�C���f�b�N�X��';
	$lang['strtabname'] = '�^�u��';
	$lang['strcolumnname'] = '�J������';
	$lang['strindexneedsname'] = '�L���ȃC���f�b�N�X�����w�肵�Ȃ���΂����܂���B';
	$lang['strindexneedscols'] = '�L���ȃJ���������w�肵�Ȃ���΂����܂���B';
	$lang['strindexcreated'] = '�C���f�b�N�X���쐬���܂����B';
	$lang['strindexcreatedbad'] = '�C���f�b�N�X���쐬�Ɏ��s���܂����B';
	$lang['strconfdropindex'] = '�C���f�b�N�X�u%s�v��{���ɔj�����܂���?';
	$lang['strindexdropped'] = '�C���f�b�N�X��j�����܂����B';
	$lang['strindexdroppedbad'] = '�C���f�b�N�X�̔j���Ɏ��s���܂����B';
	$lang['strkeyname'] = '�L�[��';
	$lang['struniquekey'] = '���j�[�N�L�[';
	$lang['strprimarykey'] = '�v���C�}���L�[';
 	$lang['strindextype'] = '�C���f�b�N�X�^�C�v';
	$lang['strindexname'] = '�C���f�b�N�X��';
	$lang['strtablecolumnlist'] = '�e�[�u�����̃J����';
	$lang['strindexcolumnlist'] = '�C���f�b�N�X���̃J����';

	// Rules
	$lang['strrules'] = '���[���ꗗ';
	$lang['strrule'] = '���[��';
	$lang['strshowallrules'] = '�S���[���̕\��';
	$lang['strnorule'] = '���[��������܂���B';
	$lang['strnorules'] = '���[����������܂���B';
	$lang['strcreaterule'] = '���[���쐬';
	$lang['strrulename'] = '���[����';
	$lang['strruleneedsname'] = '���[�������w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strrulecreated'] = '���[�����쐬���܂����B';
	$lang['strrulecreatedbad'] = '���[���̍쐬�Ɏ��s���܂����B';
	$lang['strconfdroprule'] = '%s�̃��[���u%s�v��{���ɔj�����܂���?';
	$lang['strruledropped'] = '���[����j�����܂����B';
	$lang['strruledroppedbad'] = '���[���̔j���Ɏ��s���܂����B';

	// Constraints
	$lang['strconstraints'] = 'Constraints';
	$lang['strshowallconstraints'] = 'Show all constraints';
	$lang['strnoconstraints'] = 'No constraints found.';
	$lang['strcreateconstraint'] = 'Create Constraint';
	$lang['strconstraintcreated'] = 'Constraint created.';
	$lang['strconstraintcreatedbad'] = 'Constraint creation failed.';
	$lang['strconfdropconstraint'] = 'Are you sure you want to drop the constraint "%s" on "%s"?';
	$lang['strconstraintdropped'] = 'Constraint dropped.';
	$lang['strconstraintdroppedbad'] = 'Constraint drop failed.';
	$lang['straddcheck'] = '�`�F�b�N�ǉ�';
	$lang['strcheckneedsdefinition'] = 'Check constraint needs a definition.';
	$lang['strcheckadded'] = 'Check constraint added.';
	$lang['strcheckaddedbad'] = 'Failed to add check constraint.';
	$lang['strcheckaddedbad'] = 'Failed to add check constraint.';
	$lang['straddpk'] = '�v���C�}���L�[�ǉ�';
	$lang['strpkneedscols'] = '�v���C�}���L�[�͏��Ȃ��Ƃ�1�J������K�v�Ƃ��܂��B';
	$lang['strpkadded'] = '�v���C�}���L�[��ǉ����܂����B';
	$lang['strpkaddedbad'] = '�v���C�}���L�[�̒ǉ��Ɏ��s���܂����B';
	$lang['stradduniq'] = '���j�[�N�L�[�ǉ�';
	$lang['struniqneedscols'] = '���j�[�N�L�[�͏��Ȃ��Ƃ�1�J������K�v�Ƃ��܂��B';
	$lang['struniqadded'] = '���j�[�N�L�[��ǉ����܂����B';
	$lang['struniqaddedbad'] = '���j�[�N�L�[�̒ǉ��Ɏ��s���܂����B';

	// Functions
	$lang['strfunction'] = '�֐�';
	$lang['strfunctions'] = '�֐��ꗗ';
	$lang['strshowallfunctions'] = '�S�֐��̕\��';
	$lang['strnofunction'] = '�֐�������܂���B';
	$lang['strnofunctions'] = '�֐���������܂���B';
	$lang['strcreatefunction'] = '�֐��쐬';
	$lang['strfunctionname'] = '�֐���';
	$lang['strreturns'] = '�Ԃ�l';
	$lang['strarguments'] = '����';
	$lang['strfunctionneedsname'] = '�֐������w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strfunctionneedsdef'] = '�֐��̒�`�����Ȃ���΂Ȃ肠����B';
	$lang['strfunctioncreated'] = '�֐����쐬���܂����B';
	$lang['strfunctioncreatedbad'] = '�֐��̍쐬�Ɏ��s���܂����B';
	$lang['strconfdropfunction'] = '�֐��u%s�v��{���ɔj�����܂���?';
	$lang['strfunctiondropped'] = '�֐���j�����܂����B';
	$lang['strfunctiondroppedbad'] = '�֐��̔j���Ɏ��s���܂����B';
	$lang['strfunctionupdated'] = '�֐����X�V���܂����B';
	$lang['strfunctionupdatedbad'] = '�֐��̍X�V�Ɏ��s���܂����B';

	// Triggers
	$lang['strtrigger'] = '�g���K';
	$lang['strtriggers'] = '�g���K�ꗗ';
	$lang['strshowalltriggers'] = '�S�g���K��\��';
	$lang['strnotrigger'] = '�g���K������܂���B';
	$lang['strnotriggers'] = '�g���K��������܂���B';
	$lang['strcreatetrigger'] = '�g���K�쐬';
	$lang['strtriggerneedsname'] = '�g���K�����w�肷��K�v������܂��B';
	$lang['strtriggerneedsfunc'] = '�g���K�̂��߂̊֐����w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strtriggercreated'] = '�g���K���쐬���܂����B';
	$lang['strtriggercreatedbad'] = '�g���K�̍쐬�Ɏ��s���܂����B';
	$lang['strconfdroptrigger'] = '%s�̃g���K�u%s�v��{���ɔj�����܂���?';
	$lang['strtriggerdropped'] = '�g���K��j�����܂����B';
	$lang['strtriggerdroppedbad'] = '�g���K�̔j���Ɏ��s���܂����B';

	// Types
	$lang['strtype'] = '�f�[�^�^';
	$lang['strtypes'] = '�f�[�^�^�ꗗ';
	$lang['strshowalltypes'] = '�S�f�[�^�^��\������';
	$lang['strnotype'] = '�f�[�^�^������܂���B';
	$lang['strnotypes'] = '�f�[�^�^��������܂���ł����B';
	$lang['strcreatetype'] = '�f�[�^�^�̍쐬';
	$lang['strtypename'] = '�f�[�^�^��';
	$lang['strinputfn'] = '���͊֐�';
	$lang['stroutputfn'] = '�o�͊֐�';
	$lang['strpassbyval'] = 'Passed by val?';
	$lang['stralignment'] = '�A���C�����g';
	$lang['strelement'] = '�v�f';
	$lang['strdelimiter'] = '�f�~���^';
	$lang['strstorage'] = 'Storage';
	$lang['strtypeneedsname'] = '�^�����w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strtypeneedslen'] = '�f�[�^�^�̒������w�肵�Ȃ���΂Ȃ�܂���B';
	$lang['strtypecreated'] = '�f�[�^�^���쐬���܂����B';
	$lang['strtypecreatedbad'] = '�f�[�^�^�̍쐬�Ɏ��s���܂���';
	$lang['strconfdroptype'] = '�{���Ƀf�[�^�^�u%s�v��j�����܂���?';
	$lang['strtypedropped'] = '�f�[�^�^��j�����܂����B';
	$lang['strtypedroppedbad'] = '�f�[�^�^�̔j���Ɏ��s���܂����B';

	// Schemas
	$lang['strschema'] = '�X�L�[�}';
	$lang['strschemas'] = '�X�L�[�}�ꗗ';
	$lang['strshowallschemas'] = '�S�X�L�[�}�̕\��';
	$lang['strnoschema'] = '�X�L�[�}������܂���B';
	$lang['strnoschemas'] = '�X�L�[�}��������܂���B';
	$lang['strcreateschema'] = '�X�L�[�}�쐬';
	$lang['strschemaname'] = '�X�L�[�}��';
	$lang['strschemaneedsname'] = '�X�L�[�}�����w�肷��K�v������܂��B';
	$lang['strschemacreated'] = '�X�L�[�}���쐬���܂����B';
	$lang['strschemacreatedbad'] = '�X�L�[�}�̍쐬�Ɏ��s���܂����B';
	$lang['strconfdropschema'] = '�X�L�[�}�u%s�v��{���ɔj�����܂���?';
	$lang['strschemadropped'] = '�X�L�[�}��j�����܂����B';
	$lang['strschemadroppedbad'] = '�X�L�[�}�̔j���Ɏ��s���܂����B';

	// Reports
	$lang['strreport'] = '���|�[�g';
	$lang['strreports'] = '���|�[�g�ꗗ';
	$lang['strshowallreports'] = '�S���|�[�g������';
	$lang['strnoreports'] = '���|�[�g��������܂���.';
	$lang['strcreatereport'] = '���|�[�g�쐬';
	$lang['strreportdropped'] = '���|�[�g��j�����܂����B';
	$lang['strreportdroppedbad'] = '���|�[�g�̔j���Ɏ��s���܂����B';
	$lang['strconfdropreport'] = '�{���Ƀ��|�[�g�u%s�v��j�����܂���?';
	$lang['strreportneedsname'] = '���|�[�g�����w�肷��K�v������܂��B';
	$lang['strreportneedsdef'] = '���|�[�g�p��SQL���w�肷��K�v������܂��B';
	$lang['strreportcreated'] = '���|�[�g�̕ۑ������܂����B';
	$lang['strreportcreatedbad'] = '���|�[�g�̕ۑ��Ɏ��s���܂����B';

	// Miscellaneous
	$lang['strtopbar'] = '%s��%s:%s��ŋN�����Ă��܂��B���[�U�[�u%s�v��%s�Ƀ��O�C�����Ă��܂��B';
	$lang['strtimefmt'] = 'Y�Nn��j�� G:i';

?>
