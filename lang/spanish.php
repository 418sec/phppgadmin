<?php

	/**
	 * Spanish language file for phpPgAdmin.
	 * @maintainer Martin Marques (martin@bugs.unl.edu.ar)
	 *
	 * $Id: spanish.php,v 1.7 2003/04/30 01:42:23 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = 'Spanish';
	$lang['appcharset'] = 'ISO-8859-1';
	$lang['applocale'] = 'es_ES';
  
	// Basic strings
	$lang['strintro'] = 'Bienvenido a phpPgAdmin.';
	$lang['strlogin'] = 'Login';
	$lang['strloginfailed'] = 'Login fall�';
	$lang['strserver'] = 'Servidor';
	$lang['strlogout'] = 'Salir';
	$lang['strowner'] = 'Propietario';
	$lang['straction'] = 'Acci�n';
	$lang['stractions'] = 'Acciones';
	$lang['strname'] = 'Nombre';
	$lang['strdefinition'] = 'Definici�n';
	$lang['stroperators'] = 'Operadores';
	$lang['straggregates'] = 'Aggregates';
	$lang['strproperties'] = 'Propiedades';
	$lang['strbrowse'] = 'Examinar';
	$lang['strdrop'] = 'Eliminar';
	$lang['strdropped'] = 'Eliminado';
	$lang['strnull'] = 'Nulo';
	$lang['strnotnull'] = 'No Nulo';
	$lang['strprev'] = 'Previo';
	$lang['strnext'] = 'Pr�ximo';
	$lang['strfailed'] = 'Fall�';
	$lang['strcreate'] = 'Crear';
	$lang['strcreated'] = 'Creado';
	$lang['strcomment'] = 'Commentario';
	$lang['strlength'] = 'Longitud';
	$lang['strdefault'] = 'Predeterminado';
	$lang['stralter'] = 'Modificar';
	$lang['strok'] = 'OK';
	$lang['strcancel'] = 'Cancelar';
	$lang['strsave'] = 'Guardar';
	$lang['strreset'] = 'Reestablecer';
	$lang['strinsert'] = 'Insertar';
	$lang['strselect'] = 'Seleccionar';
	$lang['strdelete'] = 'Eliminar';
	$lang['strupdate'] = 'Actualizar';
	$lang['strreferences'] = 'Referencia';
	$lang['stryes'] = 'Si';
	$lang['strno'] = 'No';
	$lang['stredit'] = 'Editar';
	$lang['strcolumns'] = 'Columnas';
	$lang['strrows'] = 'fila(s)';
	$lang['strrowsaff'] = 'fila(s) affectadas.';
	$lang['strexample'] = 'eg.';
	$lang['strback'] = 'Atr�s';
	$lang['strqueryresults'] = 'Query Results';
	$lang['strshow'] = 'Mostrar';
	$lang['strempty'] = 'Vac�o';
	$lang['strlanguage'] = 'Lenguaje';
	$lang['strencoding'] = 'Codificaci�n';
	$lang['strvalue'] = 'Valor';
	$lang['strunique'] = 'Unico';
	$lang['strprimary'] = 'Primario';
	$lang['strexport'] = 'Exportar';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'Ir';
	$lang['stradmin'] = 'Admin';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analizar';
	$lang['strcluster'] = 'Cluster';
	$lang['strreindex'] = 'Reindexar';
	$lang['strrun'] = 'Correr';
	$lang['stradd'] = 'Agregar';
	$lang['strevent'] = 'Evento';
	$lang['strwhere'] = 'Donde';
	$lang['strinstead'] = 'Do Instead';
	$lang['strwhen'] = 'Cuando';
	$lang['strformat'] = 'Formato';

	// Error handling
	$lang['strnoframes'] = 'Necesitas un navegador con soporte de marcos para usar esta aplicaci�n.';
	$lang['strbadconfig'] = 'Su archivo config.inc.php est� desactualizado. Deber� regenerarlo a partir del archivo nuevo config.inc.php-dist.';
	$lang['strnotloaded'] = 'Su versi�n de PHP instalada no tiene el correcto soporte de bases de datos.';
	$lang['strbadschema'] = 'El esquema especificado es invalido.';
	$lang['strbadencoding'] = 'No se pudo setear la codificaci�n del cliente en la base de datos.';
	$lang['strsqlerror'] = 'Error de SQL:';
	$lang['strinstatement'] = 'En la declaraci�n:';
	$lang['strinvalidparam'] = 'Parametros de script invalidos.';
	$lang['strnodata'] = 'No se encontraron filas.';

	// Tables
	$lang['strtable'] = 'Tabla';
	$lang['strtables'] = 'Tablas';
	$lang['strshowalltables'] = 'Mostrar Todas las Tablas';
	$lang['strnotables'] = 'No se encontraron tablas.';
	$lang['strnotable'] = 'No se encontro la tabla.';
	$lang['strcreatetable'] = 'Crear tabla';
	$lang['strtablename'] = 'Nombre de la tabla';
	$lang['strtableneedsname'] = 'Debe darle un nombre a la tabla.';
	$lang['strtableneedsfield'] = 'Debe especificar al menos un campo.';
	$lang['strtableneedscols'] = 'Las tablas requieren un n�mero v�lido de columnas.';
	$lang['strtablecreated'] = 'Tabla creada.';
	$lang['strtablecreatedbad'] = 'Creaci�n de la tabla fall�.';
	$lang['strconfdroptable'] = 'Esta seguro que desea eliminar la tabla "%s"?';
	$lang['strtabledropped'] = 'Tabla eliminada.';
	$lang['strtabledroppedbad'] = 'La eliminaci�n tabla fall�.';
	$lang['strconfemptytable'] = 'esta seguro que desea vaciar la tabla "%s"?';
	$lang['strtableemptied'] = 'Tabla vaciada.';
	$lang['strtableemptiedbad'] = 'Vaciado de tabla fall�.';
	$lang['strinsertrow'] = 'Insertar Fila';
	$lang['strrowinserted'] = 'Fila insertada.';
	$lang['strrowinsertedbad'] = 'Inserci�n de fila fall�.';
	$lang['streditrow'] = 'Editar fila';
	$lang['strrowupdated'] = 'Fila actualizada.';
	$lang['strrowupdatedbad'] = 'Actualizaci�n de fila fall�.';
	$lang['strdeleterow'] = 'Eliminar Fila';
	$lang['strconfdeleterow'] = 'esta seguro que quiere eliminar esta fila?';
	$lang['strrowdeleted'] = 'Fila eliminada.';
	$lang['strrowdeletedbad'] = 'Eliminaci�n de fila fall�.';
	$lang['strsaveandrepeat'] = 'Guardar y Repetir';
	$lang['strfield'] = 'Campo';
	$lang['strfields'] = 'Campos';
	$lang['strnumfields'] = 'Num. de Campos';
	$lang['strfieldneedsname'] = 'Debe darle un nombre al campo';
	$lang['strselectneedscol'] = 'Debe mostar al menos una columna';
	$lang['straltercolumn'] = 'Modificar Columna';
	$lang['strcolumnaltered'] = 'Columna Modificada.';
	$lang['strcolumnalteredbad'] = 'Modificaci�n de columna fall�.';
	$lang['strconfdropcolumn'] = 'esta seguro que quiere eliminar la columna "%s" de la tabla "%s"?';
	$lang['strcolumndropped'] = 'Columna eliminada.';
	$lang['strcolumndroppedbad'] = 'Eliminaci�n de columna fall�.';
	$lang['straddcolumn'] = 'Agragar columna';
	$lang['strcolumnadded'] = 'Columna agregada.';
	$lang['strcolumnaddedbad'] = 'Agregado de columna fall�.';
	$lang['strschemaanddata'] = 'Esquema y datos';
	$lang['strschemaonly'] = 'Esquemas solamente';
	$lang['strdataonly'] = 'Datos solamente';

	// Users
	$lang['struseradmin'] = 'Administraci�n de Usuarios';
	$lang['struser'] = 'Usuario';
	$lang['strusers'] = 'Usuarios';
	$lang['strusername'] = 'Nombre de usuario';
	$lang['strpassword'] = 'Contrase�a';
	$lang['strsuper'] = 'Superuser?';
	$lang['strcreatedb'] = 'Crear DB?';
	$lang['strexpires'] = 'Expira';
	$lang['strnousers'] = 'No se encontraron usuarios.';
        $lang['struserupdated'] = 'Usuario actualizado.';
	$lang['struserupdatedbad'] = 'Actualizaci�n de usuario fall�.';
	$lang['strshowallusers'] = 'Mostar Todos los Usuarios';
	$lang['strcreateuser'] = 'Crear Usuario';
	$lang['strusercreated'] = 'Usuario creado.';
	$lang['strusercreatedbad'] = 'Fall� al crear usuario.';
	$lang['strconfdropuser'] = 'Est� seguro que quiere eliminar el usuario "%s"?';
	$lang['struserdropped'] = 'Usuario eliminado.';
	$lang['struserdroppedbad'] = 'Fall� al eliminar el usuario.';
		
	// Groups
	$lang['strgroupadmin'] = 'Administraci�n de Grupos';
	$lang['strgroup'] = 'Grupo';
	$lang['strgroups'] = 'Grupos';
	$lang['strnogroup'] = 'Grupo no encontrado.';
	$lang['strnogroups'] = 'No se encontraron grupos.';
	$lang['strcreategroup'] = 'Crear Grupo';
	$lang['strshowallgroups'] = 'Mostrar Todos los Grupos';
	$lang['strgroupneedsname'] = 'Debe darle un nombre al grupo.';
	$lang['strgroupcreated'] = 'Grupo creado.';
	$lang['strgroupcreatedbad'] = 'Creaci�n de grupo fall�.';	
	$lang['strconfdropgroup'] = 'Esta seguro que quiere eliminar el grupo "%s"?';
	$lang['strgroupdropped'] = 'Grupo eliminado.';
	$lang['strgroupdroppedbad'] = 'Eliminaci�n de grupo fall�.';
	$lang['strmembers'] = 'Miembros';

	// Privilges
	$lang['strprivilege'] = 'Privilegio';
	$lang['strprivileges'] = 'Privilegios';
	$lang['strnoprivileges'] = 'Este objeto tiene privilegios de usuario por defecto.';
	$lang['strgrant'] = 'Otorgar';
	$lang['strrevoke'] = 'Revocar';
	$lang['strgranted'] = 'Privilegios otorgados.';
	$lang['strgrantfailed'] = 'Fall� al intendar otorgar privilegios.';
	$lang['strgrantuser'] = 'Otorgar al Usuario';
	$lang['strgrantgroup'] = 'Otorgar al Grupo';

	// Databases
	$lang['strdatabase'] = 'Base de Datos';
	$lang['strdatabases'] = 'Bases de Datos';
	$lang['strshowalldatabases'] = 'Mostrar Todas las Bases de datos';
	$lang['strnodatabase'] = 'No se encontr� la Base de Datos.';
	$lang['strnodatabases'] = 'No se encontraron Bases de Datos.';
	$lang['strcreatedatabase'] = 'Crear base de datos';
	$lang['strdatabasename'] = 'Nombre de la base de datos';
	$lang['strdatabaseneedsname'] = 'Debe darle un nombre a la base de datos.';
	$lang['strdatabasecreated'] = 'Base de Datos creada.';
	$lang['strdatabasecreatedbad'] = 'Fall� la creaci�n de la base de datos.';	
	$lang['strconfdropdatabase'] = 'Est� seguro que quiere eliminar la base de datos "%s"?';
	$lang['strdatabasedropped'] = 'Base de datos eliminada.';
	$lang['strdatabasedroppedbad'] = 'Fall� al eliminar la base de datos.';
	$lang['strentersql'] = 'Ingrese la sentencia de SQL para ejecutar abajo:';
	$lang['strsqlexecuted'] = 'SQL ejecutada.';
	$lang['strvacuumgood'] = 'Vacuum completado.';
	$lang['strvacuumbad'] = 'Vacuum fall�.';
	$lang['stranalyzegood'] = 'Analisis completado.';
	$lang['stranalyzebad'] = 'Analisis fall�.';

	// Views
	$lang['strview'] = 'Vista';
	$lang['strviews'] = 'Vistas';
	$lang['strshowallviews'] = 'Mostrar todas las vistas';
	$lang['strnoview'] = 'No se encontr� la vista.';
	$lang['strnoviews'] = 'No se encontraron vistas.';
	$lang['strcreateview'] = 'Crear Vista';
	$lang['strviewname'] = 'Nombre de Vista';
	$lang['strviewneedsname'] = 'Debe darle un nombre a la vista.';
	$lang['strviewneedsdef'] = 'Debe darle una definici�n a su vista.';
	$lang['strviewcreated'] = 'Vista creada.';
	$lang['strviewcreatedbad'] = 'Fall� al crear la vista.';
	$lang['strconfdropview'] = 'Esta seguro que quiere eliminar la vista "%s"?';
	$lang['strviewdropped'] = 'Vista eliminada.';
	$lang['strviewdroppedbad'] = 'Fall� a eliminar la vista.';
	$lang['strviewupdated'] = 'Vista actualizada.';
	$lang['strviewupdatedbad'] = 'Fall� al actualizar la vista.';

	// Sequences
	$lang['strsequence'] = 'Secuencia';
	$lang['strsequences'] = 'Secuencias';
	$lang['strshowallsequences'] = 'Mostrar todas las secuencias';
	$lang['strnosequence'] = 'No se encontr� la secuencia.';
	$lang['strnosequences'] = 'No se encontraron secuencias.';
	$lang['strcreatesequence'] = 'Crear secuencia';
	$lang['strlastvalue'] = 'Ultimo Valor';
	$lang['strincrementby'] = 'Incremento';	
	$lang['strstartvalue'] = 'Valor Inicial';
	$lang['strmaxvalue'] = 'Valor M�ximo';
	$lang['strminvalue'] = 'Valor M�nimo';
	$lang['strcachevalue'] = 'Valor de Cache';
	$lang['strlogcount'] = 'Log Count';
	$lang['striscycled'] = 'Rotar?';
	$lang['striscalled'] = 'Nombre?';
	$lang['strsequenceneedsname'] = 'Debe darle un nombre a la secuencia.';
	$lang['strsequencecreated'] = 'Secuencia creada.';
	$lang['strsequencecreatedbad'] = 'Fall� la creaci�n de la secuencia.'; 
	$lang['strconfdropsequence'] = 'Esta seguro que quiere eliminar la secuencia "%s"?';
	$lang['strsequencedropped'] = 'Secuencia eliminada.';
	$lang['strsequencedroppedbad'] = 'Fall� la eliminaci�n de la secuencia.';

	// Indexes
	$lang['strindexes'] = 'Indices';
	$lang['strindexname'] = 'Nombre del Indice';
	$lang['strshowallindexes'] = 'Mostrar Todos los Indices';
	$lang['strnoindex'] = 'No se encontr� el indice.';
	$lang['strnoindexes'] = 'No se encontraron indices.';
	$lang['strcreateindex'] = 'Crear Indice';
	$lang['strindexname'] = 'Nombre del Indice';
	$lang['strtabname'] = 'Tab Name';
	$lang['strcolumnname'] = 'Nombre de Columna';
	$lang['strindexneedsname'] = 'debe darle un nombre al indice';
	$lang['strindexneedscols'] = 'Los �ndices requieren un n�mero valido de columnas.';
	$lang['strindexcreated'] = 'Indice creado';
	$lang['strindexcreatedbad'] = 'Fall� al crear el �ndice.';
	$lang['strconfdropindex'] = 'Esta seguro que quiere eliminar el �ndice "%s"?';
	$lang['strindexdropped'] = 'Indice eliminado.';
	$lang['strindexdroppedbad'] = 'Fall� al eliminar el �ndice.';
	$lang['strkeyname'] = 'Key Name';
	$lang['struniquekey'] = 'Unique Key';
	$lang['strprimarykey'] = 'Primary Key';
 	$lang['strindextype'] = 'Tipo de �ndice';
	$lang['strindexname'] = 'Nombre de �ndice';
	$lang['strtablecolumnlist'] = 'Columnas en Tabla';
	$lang['strindexcolumnlist'] = 'Columnas en Indice';

	// Rules
	$lang['strrules'] = 'Reglas';
	$lang['strrule'] = 'Regla';
	$lang['strshowallrules'] = 'Mostrar todas las reglas';
	$lang['strnorule'] = 'No se encontr� la regla.';
	$lang['strnorules'] = 'No se encontraron reglas.';
	$lang['strcreaterule'] = 'Crear regla';
	$lang['strrulename'] = 'Nombre de regla';
	$lang['strruleneedsname'] = 'Debe darle un nombre a la regla.';
	$lang['strrulecreated'] = 'Regla creada.';
	$lang['strrulecreatedbad'] = 'Fall� al crear la regla.';
	$lang['strconfdroprule'] = 'Esta seguro que quiere eliminar la regla "%s" en "%s"?';
	$lang['strruledropped'] = 'Regla eliminada.';
	$lang['strruledroppedbad'] = 'Fall� al eliminar la regla.';

	// Constraints
	$lang['strconstraints'] = 'Restricci�n';
	$lang['strshowallconstraints'] = 'Mostrar todas las restricciones';
	$lang['strnoconstraints'] = 'No se encontraron restricciones.';
	$lang['strcreateconstraint'] = 'Crear Restricci�n';
	$lang['strconstraintcreated'] = 'Restricci�n creada.';
	$lang['strconstraintcreatedbad'] = 'Fall� al crear la Restricci�n.';
	$lang['strconfdropconstraint'] = 'Esta seguro que quiere eliminar la restricci�n "%s" de "%s"?';
	$lang['strconstraintdropped'] = 'Restricci�n eliminada.';
	$lang['strconstraintdroppedbad'] = 'Fall� al eliminar la restricci�n.';
	$lang['straddcheck'] = 'Add Check';
	$lang['strcheckneedsdefinition'] = 'Check constraint needs a definition.';
	$lang['strcheckadded'] = 'Check constraint added.';
	$lang['strcheckaddedbad'] = 'Failed to add check constraint.';
	$lang['straddpk'] = 'Add Primary Key';
	$lang['strpkneedscols'] = 'Primary key requires at least one column.';
	$lang['strpkadded'] = 'Primary key added.';
	$lang['strpkaddedbad'] = 'Failed to add primary key.';
	$lang['stradduniq'] = 'Add Unique Key';
	$lang['struniqneedscols'] = 'Unique key requires at least one column.';
	$lang['struniqadded'] = 'Unique key added.';
	$lang['struniqaddedbad'] = 'Failed to add unique key.';
	$lang['straddfk'] = 'Add Foreign Key';
	$lang['strfkneedscols'] = 'Foreign key requires at least one column.';
	$lang['strfkneedstarget'] = 'Foreign key requires a target table.';
	$lang['strfkadded'] = 'Foreign key added.';
	$lang['strfkaddedbad'] = 'Failed to add foreign key.';
	$lang['strfktarget'] = 'Target table';
	$lang['strfkcolumnlist'] = 'Columns in key';
	$lang['strondelete'] = 'AL ELIMINAR';
	$lang['stronupdate'] = 'AL ACTUALIZAR';	

	// Functions
	$lang['strfunction'] = 'Funci�n';
	$lang['strfunctions'] = 'Funciones';
	$lang['strshowallfunctions'] = 'Mostrar todas las funciones';
	$lang['strnofunction'] = 'No se econtr� la funci�n.';
	$lang['strnofunctions'] = 'No se encontraron funciones.';
	$lang['strcreatefunction'] = 'Crear funci�n';
	$lang['strfunctionname'] = 'Nombre de la funci�n';
	$lang['strreturns'] = 'Devuelve';
	$lang['strarguments'] = 'Argumentos';
	$lang['strfunctionneedsname'] = 'Debe darle un nombre a la funci�n.';
	$lang['strfunctionneedsdef'] = 'Debe darle una definici�n a la funci�n.';
	$lang['strfunctioncreated'] = 'Funci�n creada.';
	$lang['strfunctioncreatedbad'] = 'Fall� la creaci�n de la funci�n.';
	$lang['strconfdropfunction'] = 'Esta seguro que quiere eliminar la funci�n "%s"?';
	$lang['strfunctiondropped'] = 'Funci�n eliminada.';
	$lang['strfunctiondroppedbad'] = 'Fall� al eliminar la funci�n.';
	$lang['strfunctionupdated'] = 'Funci�n updated.';
	$lang['strfunctionupdatedbad'] = 'Fall� al actualizar la funci�n.';

	// Triggers
	$lang['strtrigger'] = 'Gatillo';
	$lang['strtriggers'] = 'Gatillos';
	$lang['strshowalltriggers'] = 'Mostrar todos los gatillos';
	$lang['strnotrigger'] = 'No se encontr el gatillo.';
	$lang['strnotriggers'] = 'No se encontraron los gatillos found.';
	$lang['strcreatetrigger'] = 'Crear Gatillo';
	$lang['strtriggerneedsname'] = 'Debe darle un nombre al gatillo.';
	$lang['strtriggerneedsfunc'] = 'Debe especificar una funci�n para el gatillo.';
	$lang['strtriggercreated'] = 'Gatillo creado.';
	$lang['strtriggercreatedbad'] = 'Fall� la creaci�n del gatillo.';
	$lang['strconfdroptrigger'] = 'Esta seguro que quiere eliminar el gatillo "%s" en "%s"?';
	$lang['strtriggerdropped'] = 'Gatillo eliminado.';
	$lang['strtriggerdroppedbad'] = 'Fall� al eliminar el gatillo.';

	// Types
	$lang['strtype'] = 'Tipo';
	$lang['strtypes'] = 'Tipos';
	$lang['strshowalltypes'] = 'Mostrar todos los tipos';
	$lang['strnotype'] = 'No se encontro el tipo.';
	$lang['strnotypes'] = 'No se encontraron tipos.';
	$lang['strcreatetype'] = 'Crear Tipo';
	$lang['strtypename'] = 'Nombre del tipo';
	$lang['strinputfn'] = 'Funci�n de entrada';
	$lang['stroutputfn'] = 'Funci�n de salida';
	$lang['strpassbyval'] = 'Pasar por valor?';
	$lang['stralignment'] = 'Alignment';
	$lang['strelement'] = 'Elemento';
	$lang['strdelimiter'] = 'Delimitador';
	$lang['strstorage'] = 'Almacenamiento';
	$lang['strtypeneedsname'] = 'Debe especificar un nombre para el tipo.';
	$lang['strtypeneedslen'] = 'Debe especificar una longitud para el tipo.';
	$lang['strtypecreated'] = 'Tipo creado';
	$lang['strtypecreatedbad'] = 'Fall� al crear el tipo.';
	$lang['strconfdroptype'] = 'Esta seguro que quiere eliminar el tipo "%s"?';
	$lang['strtypedropped'] = 'Tipo eliminado.';
	$lang['strtypedroppedbad'] = 'Fall� al eliminar el tipo.';

	// Schemas
	$lang['strschema'] = 'Esquema';
	$lang['strschemas'] = 'Esquemas';
	$lang['strshowallschemas'] = 'Mostrar Todos los Esquemas';
	$lang['strnoschema'] = 'No se encontr� el esquema.';
	$lang['strnoschemas'] = 'No se encontraron esquemas.';
	$lang['strcreateschema'] = 'Crear Esquema';
	$lang['strschemaname'] = 'Nombre del esquema';
	$lang['strschemaneedsname'] = 'Debe especificar un nombre para el esquema.';
	$lang['strschemacreated'] = 'Esquema creado';
	$lang['strschemacreatedbad'] = 'Fall� al crear el esquema.';
	$lang['strconfdropschema'] = 'esta seguro que quiere eliminar el esquema "%s"?';
	$lang['strschemadropped'] = 'Esquema eliminado.';
	$lang['strschemadroppedbad'] = 'Fall� al eliminar el esquema.';

	// Reports
	$lang['strreport'] = 'Reporte';
	$lang['strreports'] = 'Reportes';
	$lang['strshowallreports'] = 'Mostrar todos los reportes';
	$lang['strnoreports'] = 'No se encontro el reporte.';
	$lang['strcreatereport'] = 'Crear Reporte';
	$lang['strreportdropped'] = 'Reporte eliminado.';
	$lang['strreportdroppedbad'] = 'Fall� al eliminar el Reporte.';
	$lang['strconfdropreport'] = 'Esta seguro que quiere eliminar el reporte "%s"?';
	$lang['strreportneedsname'] = 'Debe especificar un nombre para el reporte.';
	$lang['strreportneedsdef'] = 'Debe especificar un SQL para el reporte.';
	$lang['strreportcreated'] = 'Reporte guardado.';
	$lang['strreportcreatedbad'] = 'Fall� al guardar el reporte.';

	// Miscellaneous
	$lang['strtopbar'] = '%s corriendo en %s:%s -- Usted est� logueado con usuario "%s", %s';
	$lang['strtimefmt'] = 'd/m/Y, G:i:s';

?>
