<?php

	/**
	 * French Language file for phpPgAdmin. 
	 * @maintainer Pascal PEYRE [pascal.peyre@cir.fr]
	 *
	 * $Id: french.php,v 1.1 2003/03/27 10:56:27 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = 'Fran�ais';
	$lang['appcharset'] = 'ISO-8859-1';

	// Basic strings
	$lang['strintro'] = 'Bienvenue sur phpPgAdmin.';
	$lang['strlogin'] = 'Login';
	$lang['strloginfailed'] = 'Echec � la connexion';
	$lang['strserver'] = 'Serveur';
	$lang['strlogout'] = 'D�connexion';
	$lang['strowner'] = 'Propriaitaire';
	$lang['straction'] = 'Action';
	$lang['stractions'] = 'Actions';
	$lang['strname'] = 'Nom';
	$lang['strdefinition'] = 'Definition';
	$lang['stroperators'] = 'Operateurs';
	$lang['straggregates'] = 'Aggregats';
	$lang['strproperties'] = 'Propri�t�es';
	$lang['strbrowse'] = 'Parcourir';
	$lang['strdrop'] = 'Supprimer';
	$lang['strdropped'] = 'Supprim�';
	$lang['strnull'] = 'Null';
	$lang['strnotnull'] = 'Not Null';
	$lang['strprev'] = 'Pr�c�dent';
	$lang['strnext'] = 'Suivant';
	$lang['strfailed'] = 'Echec';
	$lang['strcreate'] = 'Cr�er';
	$lang['strcreated'] = 'Cr��';
	$lang['strcomment'] = 'Commentaire';
	$lang['strlength'] = 'Longueur';
	$lang['strdefault'] = 'Defaut';
	$lang['stralter'] = 'Modifier';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Annuler';
	$lang['strsave'] = 'Sauvegarder';
	$lang['strreset'] = 'R�initialiser';
	$lang['strinsert'] = 'Inserer';
	$lang['strselect'] = 'Select';
	$lang['strdelete'] = 'Effacer';
	$lang['strupdate'] = 'Modifier';
	$lang['strreferences'] = 'R�f�rences';
	$lang['stryes'] = 'Oui';
	$lang['strno'] = 'Non';
	$lang['stredit'] = 'Editer';
	$lang['strcolumns'] = 'Colones';
	$lang['strrows'] = 'ligne(s)';
	$lang['strexample'] = 'Exple.';
	$lang['strback'] = 'Retour';
	$lang['strqueryresults'] = 'R�sultats de la requ�te';
	$lang['strshow'] = 'Voir';
	$lang['strempty'] = 'Vider';
	$lang['strlanguage'] = 'Langage';
	$lang['strencoding'] = 'Codage';
	$lang['strvalue'] = 'Valeur';
	$lang['strunique'] = 'Unique';
	$lang['strprimary'] = 'Primaire';
	$lang['strexport'] = 'Exporter';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'Go';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analyze';
	$lang['strcluster'] = 'Cluster';
	$lang['strreindex'] = 'Reindex';
	$lang['strrun'] = 'Lancer';
	$lang['stradd'] = 'Add';
	$lang['strevent'] = 'Event';
	$lang['strwhere'] = 'Where';
	$lang['strinstead'] = 'Do Instead';
	$lang['strwhen'] = 'When';

	// Error handling
	$lang['strnoframes'] = 'vous avez besoin d activer les frames sur votre navigateur pour utiliser cette application.';
	$lang['strbadconfig'] = 'Votre config.inc.php est obsol�te. Vous avez besoin de le reg�nerer � partirde config.inc.php-dist.';
	$lang['strnotloaded'] = 'Vous n avez pas compil� correctement le support de la base de donn�es dans votre installation de PHP.';
	$lang['strbadschema'] = 'Sch�ma sp�cifi� invalide.';
	$lang['strbadencoding'] = 'Failed to set client encoding in database.';
	$lang['strsqlerror'] = 'Erreur SQL :';
	$lang['strinstatement'] = 'In statement:';
	$lang['strinvalidparam'] = 'Param�tres de script invalides.';
	$lang['strnodata'] = 'Pas de R�sultats.';

	// Tables
	$lang['strtable'] = 'Table';
	$lang['strtables'] = 'Tables';
	$lang['strshowalltables'] = 'Voir toutes les Tables';
	$lang['strnotables'] = 'Pas de Tables Trouv�es.';
	$lang['strnotable'] = 'Pas de Table trouv�e.';
	$lang['strcreatetable'] = 'Cr�er table';
	$lang['strtablename'] = 'Nom de la Table';
	$lang['strtableneedsname'] = 'Vous devez donner un nom pour votre table.';
	$lang['strtableneedsfield'] = 'Vous devez sp�cifier au moins un champ.';
	$lang['strtableneedscols'] = 'Vous devez donner un nombre valide de colonnes.';
	$lang['strtablecreated'] = 'Table cr�e.';
	$lang['strtablecreatedbad'] = 'Cr�ation de Table Echou�e.';
	$lang['strconfdroptable'] = 'Etes-vous sur de vouloir supprimer la table "%s"?';
	$lang['strtabledropped'] = 'Table supprim�e.';
	$lang['strtabledroppedbad'] = 'Suppresion de Table Echou�e.';
	$lang['strconfemptytable'] = 'Etes-vous sur de vouloir vider la table "%s"?';
	$lang['strtableemptied'] = 'Table vide.';
	$lang['strtableemptiedbad'] = 'Echec de vidage de la table.';
	$lang['strinsertrow'] = 'Inserer Ligne';
	$lang['strrowinserted'] = 'Ligne Ins�r�e.';
	$lang['strrowinsertedbad'] = 'Echec d insertion de ligne.';
	$lang['streditrow'] = 'Editer Ligne';
	$lang['strrowupdated'] = 'Ligne Mise � Jour.';
	$lang['strrowupdatedbad'] = 'Mise � Jour de la ligne �chou�e.';
	$lang['strdeleterow'] = 'Effacer Ligne';
	$lang['strconfdeleterow'] = 'Etes-vous s^ur de vouloir supprimer cette ligne?';
	$lang['strrowdeleted'] = 'Ligne Supprim�e.';
	$lang['strrowdeletedbad'] = 'Echec de la Suppression de la ligne.';
	$lang['strsaveandrepeat'] = 'Sauvegarder & R�p�ter';
	$lang['strfield'] = 'Champ';
	$lang['strfields'] = 'Champs';
	$lang['strnumfields'] = 'Nombre de Champs';
	$lang['strfieldneedsname'] = 'Vous devez nommer vos champs';
	$lang['strselectneedscol'] = 'Vous devez montrer au moins une colonne';
	$lang['straltercolumn'] = 'Modifier Colonne';
	$lang['strcolumnaltered'] = 'Colonne Modifi�e.';
	$lang['strcolumnalteredbad'] = 'Echec de Modification de Colonne.';
        $lang['strconfdropcolumn'] = 'Etes-vous sur de vouloi supprimer la colonne "%s" de la table "%s"?';
	$lang['strcolumndropped'] = 'Colonne supprim�e.';
	$lang['strcolumndroppedbad'] = 'Echec de suppression de Colonne.';
	$lang['straddcolumn'] = 'Ajouter Une Colonne';
	$lang['strcolumnadded'] = 'Colonne Ajout�e.';
	$lang['strcolumnaddedbad'] = 'Echec d Ajout de Colonne.';

	// Users
	$lang['struseradmin'] = 'Administration Utilisateurs';
	$lang['struser'] = 'Utilisateur';
	$lang['strusers'] = 'Utilisateurs';
	$lang['strusername'] = 'Utilisateur';
	$lang['strpassword'] = 'Mot de Passe';
	$lang['strsuper'] = 'Super Utilisateur?';
	$lang['strcreatedb'] = 'Cr�er Base de Donn�es?';
	$lang['strexpires'] = 'Expiration';
	$lang['strnousers'] = 'Pas d utilisateur trouv�.';
        $lang['struserupdated'] = 'Utilisateur mis � jour.';
	$lang['struserupdatedbad'] = 'Mise � jour de l utilisateur �chou�e.';
	$lang['strshowallusers'] = 'Voir tous les utilisateurs';
	$lang['strcreateuser'] = 'Cr�er un Utilisateur';
	$lang['strusercreated'] = 'Utilisateur Cr��.';
	$lang['strusercreatedbad'] = 'Cr�ation de l Utilisateur Echou�e.';
	$lang['strconfdropuser'] = 'Etes-Vous sur de vouloir supprimer l Utilisateur "%s"?';
	$lang['struserdropped'] = 'Utilisateur Supprim�.';
	$lang['struserdroppedbad'] = 'Echec � la suppression de l Utilisateur.';
		
	// Groups
	$lang['strgroupadmin'] = 'Administration des Groupes';
	$lang['strgroup'] = 'Groupe';
	$lang['strgroups'] = 'Groupes';
	$lang['strnogroup'] = 'Groupe non trouv�.';
	$lang['strnogroups'] = 'Pas de Groupes trouv�.';
	$lang['strcreategroup'] = 'Cr�er un Groupe';
	$lang['strshowallgroups'] = 'Voir Tous les Groupes';
	$lang['strgroupneedsname'] = 'Vous devez donner un nom pour votre groupe.';
	$lang['strgroupcreated'] = 'Groupe cr��.';
	$lang['strgroupcreatedbad'] = 'Echec � la cr�ation du groupe.';	
	$lang['strconfdropgroup'] = 'Etes vous sur de vouloir supprimer le groupe "%s"?';
	$lang['strgroupdropped'] = 'Groupe supprim�.';
	$lang['strgroupdroppedbad'] = 'Suppression de groupe �chou�e.';
	$lang['strmembers'] = 'Membres';

	// Privilges
	$lang['strprivilege'] = 'Privil�ge';
	$lang['strprivileges'] = 'Privil�ges';
	$lang['strnoprivileges'] = 'Cet object n a pas de privil�ges.';
	$lang['strgrant'] = 'Accorder(Grant)';
	$lang['strrevoke'] = 'Revoquer';
	$lang['strgranted'] = 'Privil�ges Accord�.';
	$lang['strgrantfailed'] = 'Echec dans l accord de privil�ges.';
	$lang['strgrantuser'] = 'Accorder Utilisateur';
	$lang['strgrantgroup'] = 'Accorder Groupe';

	// Databases
	$lang['strdatabase'] = 'Base de Donn�es';
	$lang['strdatabases'] = 'Bases de Donn�es';
	$lang['strshowalldatabases'] = 'Voir Toutes les Bases de Donn�es';
	$lang['strnodatabase'] = 'Pas de Base de Donn�es trouv�e.';
	$lang['strnodatabases'] = 'Pas de Bases de Donn�es trouv�es.';
	$lang['strcreatedatabase'] = 'Cr�er une Base de Donn�es';
	$lang['strdatabasename'] = 'Nom de la Base de Donn�es';
	$lang['strdatabaseneedsname'] = 'Vous devez donner un nom pour votre Base de Donn�es.';
	$lang['strdatabasecreated'] = 'Base de Donn�es cr��e.';
	$lang['strdatabasecreatedbad'] = 'Cr�ation de la Base de Donn�es Echou�e.';	
	$lang['strconfdropdatabase'] = 'Etes-vous sur de vouloir supprimer la base de donn�es "%s"?';
	$lang['strdatabasedropped'] = 'Base de Donn�es supprim�e.';
	$lang['strdatabasedroppedbad'] = 'Echec � la suppression de la Base de Donn�es.';
	$lang['strentersql'] = 'Entrer la requ�te SQL � executer dessous:';
	$lang['strvacuumgood'] = 'Vacuum complet.';
	$lang['strvacuumbad'] = 'Vacuum Echou�.';
	$lang['stranalyzegood'] = 'Analyze complet.';
	$lang['stranalyzebad'] = 'Analyze Echou�.';

	// Views
	$lang['strview'] = 'Vue';
	$lang['strviews'] = 'Vues';
	$lang['strshowallviews'] = 'Voir toutes les Vues';
	$lang['strnoview'] = 'Pas de Vue trouv�e.';
	$lang['strnoviews'] = 'Pas de Vues trouv�es.';
	$lang['strcreateview'] = 'Cr�er une Vue';
	$lang['strviewname'] = 'Nom de la Vue';
	$lang['strviewneedsname'] = 'Vous devez donner un nom pour votre Vue.';
	$lang['strviewneedsdef'] = 'Vous devez donner une d�finition pour votre vue.';
	$lang['strviewcreated'] = 'Vue Cr��e.';
	$lang['strviewcreatedbad'] = 'Echec � la Cr�ation de la Vue.';
	$lang['strconfdropview'] = 'Ete-vous sur de vouloir supprimer la Vue "%s"?';
	$lang['strviewdropped'] = 'Vue Supprim�e.';
	$lang['strviewdroppedbad'] = 'Echec � la Suppression de la Vue.';
	$lang['strviewupdated'] = 'Vue Mise � Jour.';
	$lang['strviewupdatedbad'] = 'Mise � Jour de la Vue Echou�e.';

	// Sequences
	$lang['strsequence'] = 'S�quence';
	$lang['strsequences'] = 'S�quences';
	$lang['strshowallsequences'] = 'Voir toutes les s�quences';
	$lang['strnosequence'] = 'Pas de s�quence trouv�e.';
	$lang['strnosequences'] = 'Pas de s�quences trouv�es.';
	$lang['strcreatesequence'] = 'Cr�er une s�quence';
	$lang['strlastvalue'] = 'Derni�re Valeur';
	$lang['strincrementby'] = 'Incr�menter par ';	
	$lang['strstartvalue'] = 'Valeur de D�part';
	$lang['strmaxvalue'] = 'Valeur Maxilale';
	$lang['strminvalue'] = 'Valeur Minimale';
	$lang['strcachevalue'] = 'Valeur de Cache';
	$lang['strlogcount'] = 'Log Count';
	$lang['striscycled'] = 'Est Cycl�e?';
	$lang['striscalled'] = 'Est Appel�e?';
	$lang['strsequenceneedsname'] = 'Vous devez sp�cifier un nom pour votre s�quence.';
	$lang['strsequencecreated'] = 'S�quence cr�e.';
	$lang['strsequencecreatedbad'] = 'Cr�ation de la S�quence Echou�e.'; 
	$lang['strconfdropsequence'] = 'Etes vous sur de vouloir supprimer la s�quence "%s"?';
	$lang['strsequencedropped'] = 'S�quence supprim�e.';
	$lang['strsequencedroppedbad'] = 'Echec � la suppression de la s�quence.';

	// Indexes
	$lang['strindexes'] = 'Index';
	$lang['strindexname'] = 'Nom de l Index';
	$lang['strshowallindexes'] = 'Voir tous les Index';
	$lang['strnoindex'] = 'Pas d index trouv�.';
	$lang['strnoindexes'] = 'Pas d index trouv�s.';
	$lang['strcreateindex'] = 'Cr�er un Index';
	$lang['strindexname'] = 'Nom de l Index';
	$lang['strtabname'] = 'Nom de la Table';
	$lang['strcolumnname'] = 'Nom de la Colonne';
	$lang['strindexneedsname'] = 'Vous devez donner un nom pour votre index';
	$lang['strindexneedscols'] = 'Vous devez donner un nombre valide de colonnes.';
	$lang['strindexcreated'] = 'Index cr��';
	$lang['strindexcreatedbad'] = 'Cr�ation de l Index Echou�e.';
	$lang['strconfdropindex'] = 'Etes-vous sur de vouloir supprimer l index "%s"?';
	$lang['strindexdropped'] = 'Index supprim�.';
	$lang['strindexdroppedbad'] = 'Suppression de l Index Echou�e.';
	$lang['strkeyname'] = 'Nom de la Cl�';
	$lang['struniquekey'] = 'Cl� Unique';
	$lang['strprimarykey'] = 'Cl� Primaire';
 	$lang['strindextype'] = 'Type d index';
	$lang['strindexname'] = 'Nom de l index';
	$lang['strtablecolumnlist'] = 'Liste des Colonnes';
	$lang['strindexcolumnlist'] = 'Liste des Colonnes dans l Index';

	// Rules
	$lang['strrules'] = 'R�gles';
	$lang['strrule'] = 'R�gle';
	$lang['strshowallrules'] = 'Voir Toutes les R�gles';
	$lang['strnorule'] = 'Pas de R�gle Trouv�e.';
	$lang['strnorules'] = 'Pas de R�gles Trouv�es.';
	$lang['strcreaterule'] = 'Cr�er une R�gle';
	$lang['strrulename'] = 'Nom de la R�gle';
	$lang['strruleneedsname'] = 'Vous devez sp�cifier un nom pour votre r�gle.';
	$lang['strrulecreated'] = 'R�gle cr�e.';
	$lang['strrulecreatedbad'] = 'Cr�ation de la r�gle Echou�e.';
	$lang['strconfdroprule'] = 'Etes-vous sur de vouloir supprimer la r�gle "%s" sur "%s"?';
	$lang['strruledropped'] = 'R�gle Supprim�e.';
	$lang['strruledroppedbad'] = 'Suppression de R�gle Echou�e.';

	// Constraints
	$lang['strconstraints'] = 'Contraintes';
	$lang['strshowallconstraints'] = 'Voir toutes les Contraintes';
	$lang['strnoconstraints'] = 'Pas de Contrainte trouv�e.';
	$lang['strcreateconstraint'] = 'Cr�er une Contrainte';
	$lang['strconstraintcreated'] = 'Cr�ation d une contrainte.';
	$lang['strconstraintcreatedbad'] = 'Cr�ation de la Contrainte Echou�e.';
	$lang['strconfdropconstraint'] = 'Etes vous sur de vouloi supprimer la Contrainte "%s" sur "%s"?';
	$lang['strconstraintdropped'] = 'Contrainte Supprim�e.';
	$lang['strconstraintdroppedbad'] = 'Echec de la Contrainte supprim�e.';
	$lang['straddcheck'] = 'Ajouter une Contrainte';
	$lang['strcheckneedsdefinition'] = 'La Contrainte a besoin d une d�finition.';
	$lang['strcheckadded'] = 'Contrainte Ajout�e.';
	$lang['strcheckaddedbad'] = 'Echec � la cr�ation de la Contrainte.';

	// Functions
	$lang['strfunction'] = 'Fonction';
	$lang['strfunctions'] = 'Fonctions';
	$lang['strshowallfunctions'] = 'Voir toutes les Fonctions';
	$lang['strnofunction'] = 'Pas de Fonction trouv�e.';
	$lang['strnofunctions'] = 'Pas de Fonctions trouv�es.';
	$lang['strcreatefunction'] = 'Cr�er une fonction';
	$lang['strfunctionname'] = 'Nom de la Fonction';
	$lang['strreturns'] = 'Valeur de Sortie';
	$lang['strarguments'] = 'Arguments';
	$lang['strfunctionneedsname'] = 'Vous devez donner un nom pour votre fonction.';
	$lang['strfunctionneedsdef'] = 'Vous devez donner une d�finition pour votre fonction.';
	$lang['strfunctioncreated'] = 'Fonction cr��e.';
	$lang['strfunctioncreatedbad'] = 'Cr�ation de la Fonction �chou�e.';
	$lang['strconfdropfunction'] = 'Etes-vous sur de vouloi supprimer la fonction "%s"?';
	$lang['strfunctiondropped'] = 'Fonction supprim�e.';
	$lang['strfunctiondroppedbad'] = 'Suppression de la Fonction supprim�e.';
	$lang['strfunctionupdated'] = 'Fonction Mise � Jour.';
	$lang['strfunctionupdatedbad'] = 'Echec � la Mise � Jour de la Fonction.';

	// Triggers
	$lang['strtrigger'] = 'Trigger';
	$lang['strtriggers'] = 'Triggers';
	$lang['strshowalltriggers'] = 'Voir tous les triggers';
	$lang['strnotrigger'] = 'Pas de Trigger trouv�.';
	$lang['strnotriggers'] = 'Pas de Triggers trouv�s.';
	$lang['strcreatetrigger'] = 'Cr�er un Trigger';
	$lang['strtriggerneedsname'] = 'Vous devez sp�cifier un nom pour votre Trigger.';
	$lang['strtriggerneedsfunc'] = 'Vous devez sp�cifier une fonction pour votre trigger.';
	$lang['strtriggercreated'] = 'Trigger cr��.';
	$lang['strtriggercreatedbad'] = 'Cr�ation de Trigger Echou�e.';
	$lang['strconfdroptrigger'] = 'Etes-vous sur de vouloir supprimer le trigger "%s" sur "%s"?';
	$lang['strtriggerdropped'] = 'Trigger supprim�.';
	$lang['strtriggerdroppedbad'] = 'Suppression du Trigger Echou�e.';

	// Types
	$lang['strtype'] = 'Type';
	$lang['strtypes'] = 'Types';
	$lang['strshowalltypes'] = 'Voir tous les types';
	$lang['strnotype'] = 'Pas de Type trouv�.';
	$lang['strnotypes'] = 'Pas de Types trouv�s.';
	$lang['strcreatetype'] = 'Cr�er un Type';
	$lang['strtypename'] = 'Nom du Type';
	$lang['strinputfn'] = 'Fonction d Entr�e';
	$lang['stroutputfn'] = 'Fonction de Sortie';
	$lang['strpassbyval'] = 'Pass�e par valeur?';
	$lang['stralignment'] = 'Alignement';
	$lang['strelement'] = 'El�ment';
	$lang['strdelimiter'] = 'Delimiteur';
	$lang['strstorage'] = 'Stockage';
	$lang['strtypeneedsname'] = 'Vous devez donner un nom pour votre type.';
	$lang['strtypeneedslen'] = 'Vous devez donner une longueur pour votre type.';
	$lang['strtypecreated'] = 'Type cr��';
	$lang['strtypecreatedbad'] = 'Echec � la cr�ation du Type.';
	$lang['strconfdroptype'] = 'Etes-vous de vouloir supprim� le type "%s"?';
	$lang['strtypedropped'] = 'Type supprim�.';
	$lang['strtypedroppedbad'] = 'Echec � la suppression du Type.';

	// Schemas
	$lang['strschema'] = 'Sch�ma';
	$lang['strschemas'] = 'Sch�mas';
	$lang['strshowallschemas'] = 'Voir Tous les Schemas';
	$lang['strnoschema'] = 'Pas de sch�ma trouv�.';
	$lang['strnoschemas'] = 'Pas de sch�mas trouv�s.';
	$lang['strcreateschema'] = 'Cr�er un Sch�ma';
	$lang['strschemaname'] = 'Nom du Sch�ma';
	$lang['strschemaneedsname'] = 'Vous devez donner un nom pour votre sch�ma.';
	$lang['strschemacreated'] = 'Sch�ma cr��';
	$lang['strschemacreatedbad'] = 'Echec � la cr�ation du Sch�ma.';
	$lang['strconfdropschema'] = 'Etes-vous sur de vouloir supprimer le sch�ma "%s"?';
	$lang['strschemadropped'] = 'Sch�ma supprim�.';
	$lang['strschemadroppedbad'] = 'Echec � la suppression du Sch�ma.';

	// Reports
	$lang['strreport'] = 'Rapport';
	$lang['strreports'] = 'Rapports';
	$lang['strshowallreports'] = 'Voir tous les rapports';
	$lang['strnoreports'] = 'Pas de Rapport Trouv�.';
	$lang['strcreatereport'] = 'Cr�er un Rapport';
	$lang['strreportdropped'] = 'Rapport Supprim�.';
	$lang['strreportdroppedbad'] = 'Echec � la suppression du Rapport.';
	$lang['strconfdropreport'] = 'Etes-vous sur de vouloir supprimer le rapport "%s"?';
	$lang['strreportneedsname'] = 'Vous devez donner un nom pour votre rapport.';
	$lang['strreportneedsdef'] = 'Vous devez fournir une requ�te SQL pour votre Rapport.';
	$lang['strreportcreated'] = 'Rapport sauvegard�.';
	$lang['strreportcreatedbad'] = 'Echec � la sauvegarde du Rapport.';

	// Miscellaneous
	$lang['strtopbar'] = '%s Lanc� sur %s:%s -- Vous �tes connect� sous le nom "%s", %s';
	$lang['strtimefmt'] = 'jS M, Y g:iA';

?>
