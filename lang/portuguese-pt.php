<?php

/**
* Portuguese language file for phpPgAdmin.
* @maintainer Francisco Alves Cabrita (include@npf.pt.freebsd.org)
*
*/

// Language and character set
$lang['applang'] = 'Portugu�s-Portugu�s';
$lang['appcharset'] = 'ISO-8859-15';
$lang['applocale'] = 'pt_PT';
$lang['appdbencoding'] = 'LATIN9';
$lang['applangdir'] = 'ltr';
  
// Basic strings
$lang['strintro'] = 'Bem-vindo ao phpPgAdmin.';	
$lang['strppahome'] = 'P�gina inicial phpPgAdmin ';
$lang['strpgsqlhome'] = 'P�gina inicial PostgreSQL ';
$lang['strpgsqlhome_url'] = 'http://www.postgresql.org/';
$lang['strreportbug'] = 'Relat�rio de Bug';
$lang['strviewfaq'] = 'Visualizar FAQ';
$lang['strviewfaq_url'] = 'http://phppgadmin.sourceforge.net/?page=faq';
$lang['strlogin'] = 'Autentica��o';					
$lang['strloginfailed'] = 'Falha na autentica��o';		
$lang['strserver'] = 'Servidor';					
$lang['strlogout'] = 'Sair';					
$lang['strowner'] = 'Propiet�rio';					
$lang['straction'] = 'Ac��o';					
$lang['stractions'] = 'Ac��es';				
$lang['strname'] = 'Nome';						
$lang['strdefinition'] = 'Defini��o';		
$lang['stroperators'] = 'Operadores';			
$lang['straggregates'] = 'Agregados';			
$lang['strproperties'] = 'Propriedades';			
$lang['strbrowse'] = 'Navegar';					
$lang['strdrop'] = 'Eliminar';						
$lang['strdropped'] = 'Eliminado';				
$lang['strnull'] = 'Nulo';						
$lang['strnotnull'] = 'N�o Nulo';				
$lang['strprev'] = 'Anterior';						
$lang['strnext'] = 'Pr�ximo';							
$lang['strfailed'] = 'Falha';					
$lang['strcreate'] = 'Criar';					
$lang['strcreated'] = 'Criado';				
$lang['strcomment'] = 'Coment�rio';				
$lang['strlength'] = 'Extens�o';					
$lang['strdefault'] = 'Padr�o';
$lang['stralter'] = 'Alterar';
$lang['strok'] = 'OK';
$lang['strcancel'] = 'Cancelar';					
$lang['strsave'] = 'Gravar';						
$lang['strreset'] = 'Reiniciar';					
$lang['strinsert'] = 'Inserir';					
$lang['strselect'] = 'Seleccionar';					
$lang['strdelete'] = 'Eliminar';					
$lang['strupdate'] = 'Atualizar';				
$lang['strreferences'] = 'Refer�ncias';			
$lang['stryes'] = 'Sim';						
$lang['strno'] = 'N�o';							
$lang['stredit'] = 'Editar';					
$lang['strcolumns'] = 'Colunas';				
$lang['strrows'] = 'Linha(s)';					
$lang['strrowsaff'] = 'Linha(s) afectadas.';		
$lang['strexample'] = 'eg.';					
$lang['strback'] = 'Voltar';						
$lang['strqueryresults'] = 'Resultados da pesquisa';		
$lang['strshow'] = 'Exibir';						
$lang['strempty'] = 'Vazio';					
$lang['strlanguage'] = 'Linguagem';				
$lang['strencoding'] = 'Codifica��o';				
$lang['strvalue'] = 'Valor';					
$lang['strunique'] = '�nico';					
$lang['strprimary'] = 'Prim�rio';				
$lang['strexport'] = 'Exportar';				
$lang['strsql'] = 'SQL';						
$lang['strgo'] = 'Ir';							
$lang['strimport'] = 'Importar';
$lang['stradmin'] = 'Administrador';					
$lang['strvacuum'] = 'V�cuo';					
$lang['stranalyze'] = 'Analiza';				
$lang['strcluster'] = 'Cluster';				
$lang['strreindex'] = 'Reordenar';				
$lang['strrun'] = 'Executar';						
$lang['stradd'] = 'Adicionar';						
$lang['strevent'] = 'Evento';					
$lang['strwhere'] = 'Onde';					
$lang['strinstead'] = 'Fazer ao inv�s';				
$lang['strwhen'] = 'Quando';						
$lang['strformat'] = 'Formato';					

// Error handling
$lang['strdata'] = 'Data';
$lang['strconfirm'] = 'Confirmar';
$lang['strexpression'] = 'Express�o';
        $lang['strellipsis'] = '...';
$lang['strexpand'] = 'Expandir';
$lang['strcollapse'] = 'Diminuir';
$lang['strnoframes'] = 'Voc� necessita de um navegador com suporte de frames para utilizar esta aplica��o.';
$lang['strbadconfig'] = 'O config.inc.php est� desatualizado. Voc� deve cri�-lo novamente a partir do novo config.inc.php-dist.';
$lang['strnotloaded'] = 'A sua instala��o do PHP n�o suporta chamadas a este tipo de base de dados.';
$lang['strbadschema'] = 'Esquema inv�lido.';
$lang['strbadencoding'] = 'Falha ao definir codifica��o do cliente na base de dados.';
$lang['strsqlerror'] = 'Erro de SQL:';
$lang['strinstatement'] = 'Indica��o de entrada :';
$lang['strinvalidparam'] = 'Par�metros de script inv�lidos.';
$lang['strnodata'] = 'N�o foram encontradas linhas.';

// Tables
$lang['strtable'] = 'Tabela';
$lang['strtables'] = 'Tabelas';
$lang['strshowalltables'] = 'Exibir todas as tabelas';
$lang['strnotables'] = 'Tabelas n�o encontradas.';
$lang['strnotable'] = 'Tabela n�o encontradas.';
$lang['strcreatetable'] = 'Criar tabela';
$lang['strtablename'] = 'Nome da tabela ';
$lang['strtableneedsname'] = 'A tabela necessita de um nome.';
$lang['strtableneedsfield'] = 'Especifique pelo menos um campo.';
$lang['strtableneedscols'] = 'As tabelas requerem um n�mero v�lido de colunas.';
$lang['strtablecreated'] = 'Tabela criada.';
$lang['strtablecreatedbad'] = 'Falha na cria��o de tabela.';
$lang['strconfdroptable'] = 'Tem certeza que quer eliminar a tabela "%s"?';
$lang['strtabledropped'] = 'Tabela eliminada.';
$lang['strtabledroppedbad'] = 'Falha ao eliminar a tabela.';
$lang['strconfemptytable'] = 'Tem certeza que quer esvaziar a tabela "%s"?';
$lang['strtableemptied'] = 'Tabela vazia.';
$lang['strtableemptiedbad'] = 'Falha ao esvaziar a tabela.';
$lang['strinsertrow'] = 'Inserir linha';
$lang['strrowinserted'] = 'Linha inserida.';
$lang['strrowinsertedbad'] = 'Falha ao inserir linha.';
$lang['streditrow'] = 'Editar linha';
$lang['strrowupdated'] = 'Linha actualizada.';
$lang['strrowupdatedbad'] = 'Falha na actualiza��o da linha.';
$lang['strdeleterow'] = 'Eliminar linha';
$lang['strconfdeleterow'] = 'Tem certeza que quer eliminar esta linha?';
$lang['strrowdeleted'] = 'Linha eliminada.';
$lang['strrowdeletedbad'] = 'Falha ao eliminar a linha .';
$lang['strsaveandrepeat'] = 'Gravar & Repetir';
$lang['strfield'] = 'Campo';
$lang['strfields'] = 'Campos';
$lang['strnumfields'] = 'N�mero de campos';
$lang['strfieldneedsname'] = 'O campo necessita um nome';
$lang['strselectneedscol'] = 'Deve exibir pelo menos uma coluna';
$lang['straltercolumn'] = 'Alterar coluna';
$lang['strcolumnaltered'] = 'Coluna altereda.';
$lang['strcolumnalteredbad'] = 'Falha na altera��o de coluna.';
$lang['strconfdropcolumn'] = 'Tem certeza que quer eliminar a coluna "%s" da tabela "%s"?';
$lang['strcolumndropped'] = 'Coluna eliminada.';
$lang['strcolumndroppedbad'] = 'Elimina��o da coluna falhou.';
$lang['straddcolumn'] = 'Adicionar coluna';
$lang['strcolumnadded'] = 'Coluna adicionada.';
$lang['strcolumnaddedbad'] = 'Adi��o de coluna falhou.';
$lang['strschemaanddata'] = 'Esquema & Dados';
$lang['strschemaonly'] = 'Esquema apenas';
$lang['strdataonly'] = 'Dados apenas';

// Users
$lang['strcascade'] = 'CASCATA';
$lang['struseradmin'] = 'Administra��o de utilizadores';
$lang['struser'] = 'Utilizador';
$lang['strusers'] = 'Utilizadores';
$lang['strusername'] = 'Nome do utilizador';
$lang['strpassword'] = 'Palavra-chave';
$lang['strsuper'] = 'Super-Utilizador?';
$lang['strcreatedb'] = 'Criar Base de Dados?';
$lang['strexpires'] = 'Expira';
$lang['strnousers'] = 'Utilizadores n�o encontrados.';
$lang['struserupdated'] = 'Utilizador alterado.';
$lang['struserupdatedbad'] = 'Altera��o do utilizador falhou.';
$lang['strshowallusers'] = 'Mostra todos os utilizadores';
$lang['strcreateuser'] = 'Criar Utilizador';
$lang['strusercreated'] = 'Utilizador criado.';
$lang['strusercreatedbad'] = 'Falhou ao criar utilizador.';
$lang['strconfdropuser'] = 'Tem certeza que quer eliminar o utilizador "%s"?';
$lang['struserdropped'] = 'Utilizador eliminado.';
$lang['struserdroppedbad'] = 'Falha ao eliminar utilizador.';
		
// Groups
$lang['straccount'] = 'Conta';
$lang['strchangepassword'] = 'Alterar palavra-chave';
$lang['strpasswordchanged'] = 'Palavra-chave alterada.';
$lang['strpasswordchangedbad'] = 'Falha ao alterar palavra-passe.';
$lang['strpasswordshort'] = 'Palavra-chave muito curta.';
$lang['strpasswordconfirm'] = 'Palavra-chave n�o coincide com a confirma��o.';
$lang['strgroupadmin'] = 'Administra��o de Grupo';
$lang['strgroup'] = 'Grupo';
$lang['strgroups'] = 'Grupos';
$lang['strnogroups'] = 'Grupos n�o encotrados.';
$lang['strshowallgroups'] = 'Exibir todos os grupos';
$lang['strgroupneedsname'] = 'Insira um nome para o seu grupo.';
$lang['strgroupcreated'] = 'Grupo criado.';
$lang['strgroupcreatedbad'] = 'Falha na cria��o de grupo.';	
$lang['strconfdropgroup'] = 'Tem certeza que quer eliminar o grupo "%s"?';
$lang['strgroupdropped'] = 'Grupo eliminado.';
$lang['strgroupdroppedbad'] = 'Falha ao eliminar grupo.';
$lang['strmembers'] = 'Membros';

// Privilges
$lang['strprivilege'] = 'Privil�gio';
$lang['strprivileges'] = 'Privil�gios';
$lang['strnoprivileges'] = 'Este objeto tem privil�gios padr�es de propriet�rio.';
$lang['strgrant'] = 'Concede';
$lang['strrevoke'] = 'Revoga';
$lang['strgranted'] = 'Privil�gios concedidos.';
$lang['strgrantfailed'] = 'Falha ao conceder privil�gios.';
$lang['strgrantbad'] = 'Dever� especificar um utilizador ou grupo e pelo menos um previl�gio.';
$lang['stralterprivs'] = 'Alterar privil�gios';

// Databases
$lang['strdatabase'] = 'Base de dados';
$lang['strdatabases'] = 'Base de dados';
$lang['strshowalldatabases'] = 'Exibir todos os base de dados';
$lang['strnodatabase'] = 'Base de dados n�o encontrada.';
$lang['strnodatabases'] = 'Bases de dados n�o encontradas.';
$lang['strcreatedatabase'] = 'Criar base de dados';
$lang['strdatabasename'] = 'Nome da base de dados';
$lang['strdatabaseneedsname'] = 'Insira um nome para a sua base de dados.';
$lang['strdatabasecreated'] = 'Base de dados criada.';
$lang['strdatabasecreatedbad'] = 'Falhou na cria��o da Base de dados.';	
$lang['strconfdropdatabase'] = 'Tem certeza que quer eliminar a base de dados "%s"?';
$lang['strdatabasedropped'] = 'Base de dados eliminada.';
$lang['strdatabasedroppedbad'] = 'Falha ao eliminar a base de dados.';
$lang['strentersql'] = 'Digite abaixo a instru��o SQL a ser executado:';
$lang['strsqlexecuted'] = 'SQL executado.';
$lang['strvacuumgood'] = 'V�cuo completo.';
$lang['strvacuumbad'] = 'Falha ao executar v�cuo.';
$lang['stranalyzegood'] = 'An�lize completa.';
$lang['stranalyzebad'] = 'Falha ao executar an�lize.';

// Views
$lang['strview'] = 'Visualiza��o';
$lang['strviews'] = 'Visualiza��es';
$lang['strshowallviews'] = 'Exibir todas as visualiza��es';
$lang['strnoview'] = 'Visualiza��o n�o encontrada.';
$lang['strnoviews'] = 'Visualiza��es n�o encontradas.';
$lang['strcreateview'] = 'Criar visualiza��o';
$lang['strviewname'] = 'Nome da visualiza��o';
$lang['strviewneedsname'] = 'Voc� deve dar um nome a sua visualiza��o.';
$lang['strviewneedsdef'] = 'Crie uma defini��o para sua visualiza��o.';
$lang['strviewcreated'] = 'Visualiza��o criada.';
$lang['strviewcreatedbad'] = 'Falha na cria��o de visualiza��o.';
$lang['strconfdropview'] = 'Tem certeza que quer eliminar a visualiza��o "%s"?';
$lang['strviewdropped'] = 'Visualiza��o eliminada.';
$lang['strviewdroppedbad'] = 'Falha ao eliminar a visualiza��o.';
$lang['strviewupdated'] = 'Visualiza��o alterada.';
$lang['strviewupdatedbad'] = 'Falha ao alterar visualiza��o.';

// Sequences
$lang['strsequence'] = 'Sequ�ncia';
$lang['strsequences'] = 'Sequ�ncias';
$lang['strshowallsequences'] = 'Listar todas as sequ�ncias';
$lang['strnosequence'] = 'Sequ�ncia n�o encontrada.';
$lang['strnosequences'] = 'Sequ�ncias n�o encontradas.';
$lang['strcreatesequence'] = 'Criar sequ�ncia';
$lang['strlastvalue'] = '�ltimo valor';
$lang['strincrementby'] = 'Incrementar por';	
$lang['strstartvalue'] = 'Valor inicial';
$lang['strmaxvalue'] = 'Valor m�ximo';
$lang['strminvalue'] = 'Valor m�nimo';
$lang['strcachevalue'] = 'Valor de cache';
$lang['strlogcount'] = 'Contador do log';
	$lang['striscycled'] = 'Foi dado um ciclo ?';
	$lang['striscalled'] = 'Foi chamado ?';
$lang['strsequenceneedsname'] = 'D� um nome a sua sequ�ncia.';
$lang['strsequencecreated'] = 'Sequ�ncia criada.';
$lang['strsequencecreatedbad'] = 'Falha na cria��o da sequ�ncia.'; 
$lang['strconfdropsequence'] = 'Tem certeza que quer eliminar a sequ�ncia "%s"?';
$lang['strsequencedropped'] = 'Sequ�ncia eliminada.';
$lang['strsequencedroppedbad'] = 'Falha ao eliminar a sequ�ncia.';

// Indexes
$lang['strindexes'] = '�ndices';
$lang['strindexname'] = 'Nome do �ndice';
$lang['strshowallindexes'] = 'Exibir todos os �ndices';
$lang['strnoindex'] = '�ndice n�o encontrado.';
$lang['strnoindexes'] = '�ndices n�o encontrados.';
$lang['strcreateindex'] = 'Criar �ndice';
$lang['strindexname'] = 'Nome do �ndice';
$lang['strtabname'] = 'Nome da tabela';
$lang['strcolumnname'] = 'Nome da coluna';
$lang['strindexneedsname'] = 'D� um nome ao seu �ndice';
$lang['strindexneedscols'] = '�ndices requerem um n�mero v�lido de colunas.';
$lang['strindexcreated'] = '�ndice criado';
$lang['strindexcreatedbad'] = 'Falha na cria��o do �ndice.';
$lang['strconfdropindex'] = 'Tem a certeza que quer eliminar o �ndice "%s"?';
$lang['strindexdropped'] = 'Indice eliminado.';
$lang['strindexdroppedbad'] = 'Falha ao eliminar o �ndice.';
$lang['strkeyname'] = 'Nome da chave';
$lang['struniquekey'] = 'Chave �nica';
$lang['strprimarykey'] = 'Chave prim�ria';
$lang['strindextype'] = 'Tipo de �ndice';
$lang['strindexname'] = 'Nome do �ndice';
$lang['strtablecolumnlist'] = 'Colunas na tabela';
$lang['strindexcolumnlist'] = 'Colunas no �ndice';

// Rules
$lang['strrules'] = 'Regras';
$lang['strrule'] = 'Regra';
$lang['strshowallrules'] = 'Exibir todas as regras';
$lang['strnorule'] = 'Regra n�o encontrada.';
$lang['strnorules'] = 'Regras n�o encontradas.';
$lang['strcreaterule'] = 'Criar regra';
$lang['strrulename'] = 'Nome da regra';
$lang['strruleneedsname'] = 'D� um nome para sua regra.';
$lang['strrulecreated'] = 'Regra criada.';
$lang['strrulecreatedbad'] = 'Falha na cria��o de regra.';
$lang['strconfdroprule'] = 'Tem certeza que quer eliminar a regra "%s" on "%s"?';
$lang['strruledropped'] = 'Regra eliminada.';
$lang['strruledroppedbad'] = 'Falha ao eliminar a regra.';

// Constraints
$lang['strconstraints'] = 'Restri��o';
$lang['strshowallconstraints'] = 'Exibir todos as restri��es';
$lang['strnoconstraints'] = 'Restri��es n�o encontradas.';
$lang['strcreateconstraint'] = 'Criar restri��o';
$lang['strconstraintcreated'] = 'Restri��o criada.';
$lang['strconstraintcreatedbad'] = 'Falha na cria��o de restri��o.';
$lang['strconfdropconstraint'] = 'Tem certeza que quer eliminar a restri��o "%s" on "%s"?';
$lang['strconstraintdropped'] = 'Restri��o eliminada.';
$lang['strconstraintdroppedbad'] = 'Falha ao eliminar de restri��o.';
$lang['straddcheck'] = 'Adicona verifica��o';
$lang['strcheckneedsdefinition'] = 'Verifica��o de regras necessita de uma defini��o.';
$lang['strcheckadded'] = 'Verifica��o de restri��o adicionada.';
$lang['strcheckaddedbad'] = 'Falha ao adicionar verifica��o de restri��o.';
$lang['straddpk'] = 'Adicionar chave prim�ria';
$lang['strpkneedscols'] = 'Chave prim�ria requer pelo menos uma coluna.';
$lang['strpkadded'] = 'Chave prim�ria adicionada.';
$lang['strpkaddedbad'] = 'Falha ao adicinoar chave prim�ria.';
$lang['stradduniq'] = 'Adiciona chave �nica';
$lang['struniqneedscols'] = 'Chave �nica requer ao menos uma coluna.';					
$lang['struniqadded'] = 'Chave �nica adicionada.';
$lang['struniqaddedbad'] = 'Falha ao adicionar chave �nica.';
$lang['straddfk'] = 'Adicionar chave estrangeira';
$lang['strfkneedscols'] = 'Chave estrangeira requer ao menos uma coluna.';
$lang['strfkneedstarget'] = 'Chave estrangeira requer uma tabela de refer�ncia.';
$lang['strfkadded'] = 'Chave estrangeira adicionada.';
$lang['strfkaddedbad'] = 'Falha ao adicionar chave estrangeira.';
$lang['strfktarget'] = 'Tabela alvo';
$lang['strfkcolumnlist'] = 'Colunas em chaves';									
$lang['strondelete'] = 'ELIMINAR ACTIVO';
$lang['stronupdate'] = 'ALTERAR ACTIVO';

// Functions
$lang['strfunction'] = 'Fun��o';
$lang['strfunctions'] = 'Fun��es';
$lang['strshowallfunctions'] = 'Exibir todas as fun��es';
$lang['strnofunction'] = 'Fun��o n�o encontrada.';
$lang['strnofunctions'] = 'Fun��es n�o encontradas.';
$lang['strcreatefunction'] = 'Criar fun��es';
$lang['strfunctionname'] = 'Nome da fun��o';
$lang['strreturns'] = 'Retorno';
$lang['strarguments'] = 'Argumentos';
$lang['strproglanguage'] = 'Linguagem';				
$lang['strfunctionneedsname'] = 'D� um nome � sua fun��o.';
$lang['strfunctionneedsdef'] = 'A fun��o precisa de uma defini��o.';
$lang['strfunctioncreated'] = 'Fun��o criada.';
$lang['strfunctioncreatedbad'] = 'Falha na cria��o de fun��o.';
$lang['strconfdropfunction'] = 'Tem certeza que quer eliminar a fun��o "%s"?';
$lang['strfunctiondropped'] = 'Fun��o eliminada.';
$lang['strfunctiondroppedbad'] = 'Falha ao eliminar de fun��o.';
$lang['strfunctionupdated'] = 'Fun��o actualizada';
$lang['strfunctionupdatedbad'] = 'Falha na actualiza��o da fun��o.';

// Triggers
$lang['strtrigger'] = 'Gatilho';	
$lang['strtriggers'] = 'Gatilhos';	
$lang['strshowalltriggers'] = 'Exibir todos os gatilhos';	
$lang['strnotrigger'] = 'N�o foi encontrado gatilho.';		
$lang['strnotriggers'] = 'N�o foram encontrados gatilhos.';		
$lang['strcreatetrigger'] = 'Criar Gatilhos';		
$lang['strtriggerneedsname'] = 'D� um nome ao gatilho.';	
	$lang['strtriggerneedsfunc'] = 'Especifique uma fun��o para seu gatilho.';
$lang['strtriggercreated'] = 'Gatilho criado.';
$lang['strtriggercreatedbad'] = 'Falha na cria��o do gatilho.';			
$lang['strconfdroptrigger'] = 'Tem certeza que quer eliminar o gatilho "%s" em "%s"?';	 
$lang['strtriggerdropped'] = 'Gatilho eliminado.'; 
$lang['strtriggerdroppedbad'] = 'Falha ao eliminar o gatilho.';

// Types
$lang['strtype'] = 'Tipo';		
$lang['strtypes'] = 'Tipos';	
$lang['strshowalltypes'] = 'Exibir todos os tipos';	
$lang['strnotype'] = 'Tipo n�o encontrado.';			
$lang['strnotypes'] = 'Tipos n�o encontrados.';		
$lang['strcreatetype'] = 'Criar tipo';			
$lang['strtypename'] = 'Nome do tipo';				
$lang['strinputfn'] = 'Fun��o de entrada';			
$lang['stroutputfn'] = 'Fun��o de sa�da';		
	$lang['strpassbyval'] = 'Passado por valor?';		
$lang['stralignment'] = 'Alinhamento';			
$lang['strelement'] = 'Elemento';				
$lang['strdelimiter'] = 'Delimitador';			
$lang['strstorage'] = 'Armazenamento';				
$lang['strtypeneedsname'] = 'D� um nome ao seu tipo.';
$lang['strtypeneedslen'] = 'Tipo precisa de exten��o.';
$lang['strtypecreated'] = 'Tipo criado';								
$lang['strtypecreatedbad'] = 'Cria��o de tipo falhou.';					
$lang['strconfdroptype'] = 'Tem certeza que que eliminar o tipo "%s"?';	
$lang['strtypedropped'] = 'Tipo eliminado.';									
$lang['strtypedroppedbad'] = 'Elimina��o de tipo falhou.';							

// Schemas
$lang['strschema'] = 'Esquema';	 
$lang['strschemas'] = 'Esquemas';		
$lang['strshowallschemas'] = 'Exibir todos os esquemas';	
$lang['strnoschema'] = 'Esquema n�o encontado.';		
$lang['strnoschemas'] = 'N�o foram encontrados esquemas.';	
$lang['strcreateschema'] = 'Criar esquema';		
$lang['strschemaname'] = 'Nome do esquema';		
$lang['strschemaneedsname'] = 'D� um nome ao seu esquema.';
$lang['strschemacreated'] = 'Esquema criado';		
$lang['strschemacreatedbad'] = 'Falha na cria��o dos esquemas.';		
$lang['strconfdropschema'] = 'Tem a certeza que quer eliminar o esquema "%s"?';	
$lang['strschemadropped'] = 'Esquema eliminado.';
$lang['strschemadroppedbad'] = 'Falha ao eliminar o esquema.';

// Reports
$lang['strreport'] = 'Relat�rio';			
$lang['strreports'] = 'Relat�rios';			
$lang['strshowallreports'] = 'Exibir todos os relat�rios';		
$lang['strnoreports'] = 'Relat�rio n�o encontrado.';		
$lang['strcreatereport'] = 'Criar relat�rio';		
$lang['strreportdropped'] = 'Relat�rio eliminado.';		
$lang['strreportdroppedbad'] = 'Falha ao eliminar o relat�rio.';		
$lang['strconfdropreport'] = 'Tem certeza que quer eliminar o relat�rio "%s"?';		
$lang['strreportneedsname'] = 'D� um nome ao seu relat�rio.';	
$lang['strreportneedsdef'] = 'Adicione a instru��o SQL ao seu relat�rio.';	
$lang['strreportcreated'] = 'Relat�rio salvo.';					
$lang['strreportcreatedbad'] = 'Falha ao salvar o relat�rio.';		

// Miscellaneous
$lang['strtopbar'] = '%s a correr  em %s:%s -- Voc� est� ligado como "%s", %s';
$lang['strtimefmt'] = 'jS M, Y g:iA';

?>
