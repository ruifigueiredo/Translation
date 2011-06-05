<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
 * $Header$
 * Description:  Defines the Portuguese Language Pack
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Rui Figueiredo - ( rui.figueiredo@gmail.com )
 ********************************************************************************/

 
$mod_strings = Array(
// Mike Crowe Mod --------------------------------------------------------added for general search
'LBL_GENERAL_INFORMATION'=>'Informação Geral',

'LBL_MODULE_NAME'=>'Email',
'LBL_MODULE_TITLE'=>'Email: Principal',
'LBL_SEARCH_FORM_TITLE'=>'Procura Email',
'LBL_LIST_FORM_TITLE'=>'Lista Email',
'LBL_NEW_FORM_TITLE'=>'Seguir Email',

'LBL_LIST_SUBJECT'=>'Assunto',
'LBL_LIST_CONTACT'=>'Contacto',
'LBL_LIST_RELATED_TO'=>'Relacionado a',
'LBL_LIST_DATE'=>'Data de Envio',
'LBL_LIST_TIME'=>'Hora de Envio',

'ERR_DELETE_RECORD'=>"Para apagar uma conta é necessário um número de registo.",
'LBL_DATE_SENT'=>'Data de Envio:',
'LBL_DATE_AND_TIME'=>'Data & Hora de Envio:',
'LBL_DATE'=>'Data de Envio:',
'LBL_TIME'=>'Hora de Envio:',
'LBL_SUBJECT'=>'Assunto:',
'LBL_BODY'=>'Conteúdo:',
'LBL_CONTACT_NAME'=>' Nome do Contacto: ',
'LBL_EMAIL'=>'Email:', 
'LBL_DETAILVIEW_EMAIL'=>'E-Mail', 
'LBL_COLON'=>':',
'LBL_CHK_MAIL'=>'Verificar Email',
'LBL_COMPOSE'=>'Compôr',
//Single change for 5.0.3
'LBL_SETTINGS'=>'Configuração se Servidor de Email de Entrada',
'LBL_EMAIL_FOLDERS'=>'Pastas de Email',
'LBL_INBOX'=>'Caixa de Entrada',
'LBL_SENT_MAILS'=>'Emails Enviados',
'LBL_TRASH'=>'Lixo',
'LBL_JUNK_MAILS'=>'Não-solicitados',
'LBL_TO_LEADS'=>'Para Leads',
'LBL_TO_CONTACTS'=>'Para Contactos',
'LBL_TO_ACCOUNTS'=>'Para Contas',
'LBL_MY_MAILS'=>'Os Meus Emails',
'LBL_QUAL_CONTACT'=>'Emails Qualificados (Como Contactos)',
'LBL_MAILS'=>'Emails',
'LBL_QUALIFY_BUTTON'=>'Qualificar',
'LBL_REPLY_BUTTON'=>'Responder',
'LBL_FORWARD_BUTTON'=>'Reencaminhar',
'LBL_DOWNLOAD_ATTCH_BUTTON'=>'Transferir Anexos',
'LBL_FROM'=>'De :',
'LBL_CC'=>'Cc :',
'LBL_BCC'=>'Bcc :',

'NTC_REMOVE_INVITEE'=>'Tem a certeza que quer remove este destinatário do email?',
'LBL_INVITEE'=>'Destinatários',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
'LBL_BULK_MAILS'=>'Emails Massificados',
'LBL_ATTACHMENT'=>'Anexo',
'LBL_UPLOAD'=>'Upload',
'LBL_FILE_NAME'=>'Nome de Ficheiro',
'LBL_SEND'=>'Enviar',

'LBL_EMAIL_TEMPLATES'=>'Modelos de Email',
'LBL_TEMPLATE_NAME'=>'Nome do Modelo',
'LBL_DESCRIPTION'=>'Descrição',
'LBL_EMAIL_TEMPLATES_LIST'=>'Lista de Modelos de Email',
'LBL_EMAIL_INFORMATION'=>'Informação de Email',




//for v4 release added
'LBL_NEW_LEAD'=>'Novo Lead',
'LBL_LEAD_TITLE'=>'Leads',

'LBL_NEW_PRODUCT'=>'Novo Produto',
'LBL_PRODUCT_TITLE'=>'Produtos',
'LBL_NEW_CONTACT'=>'Novo Contacto',
'LBL_CONTACT_TITLE'=>'Contactos',
'LBL_NEW_ACCOUNT'=>'Nova Conta',
'LBL_ACCOUNT_TITLE'=>'Contas',

// Added vtiger_fields after vtiger4 - Beta
'LBL_USER_TITLE'=>'Utilizadores',
'LBL_NEW_USER'=>'Novo Utilizador',

// Added for 4 GA
'LBL_TOOL_FORM_TITLE'=>'Ferramentas de Email',
//Added for 4GA
'Date & Time Sent'=>'Data e Hora de Envio',
'Sales Enity Module'=>'Módulo de Entidade de Vendas',
'Related To'=>'Relacionado Com',
'Assigned To'=>'Atribuído A',
'Subject'=>'Assunto',
'Attachment'=>'Anexo',
'Description'=>'Descrição',
'Time Start'=>'Hora de Início',
'Created Time'=>'Hora de Criação',
'Modified Time'=>'Hora de Modificação',

'MESSAGE_CHECK_MAIL_SERVER_NAME'=>'Por favor Verifique o Nome do Servidor de Email...',
'MESSAGE_CHECK_MAIL_ID'=>'Por Favor Verifique o ID de Email do Utilizador "Atribuído A"...',
'MESSAGE_MAIL_HAS_SENT_TO_USERS'=>'O Email foi enviado para os seguintes Utilizador(es):',
'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS'=>'Email foi enviado para os seguintes contacto(s):',
'MESSAGE_MAIL_ID_IS_INCORRECT'=>'O ID de Email está incorrecto. Verifique este ID de Email...',
'MESSAGE_ADD_USER_OR_CONTACT'=>'Adicione Quaisquer Utilizador(es) ou Contacto(s)...',
'MESSAGE_MAIL_SENT_SUCCESSFULLY'=>' Email(s) enviados com sucesso!',

// Added for web mail post 4.0.1 release
'LBL_FETCH_WEBMAIL'=>'Ir Buscar Web Mail',
//Added for 4.2 Release -- CustomView
'LBL_ALL'=>'Todos',
'MESSAGE_CONTACT_NOT_WANT_MAIL'=>'Este Contacto não quer receber emails.',
'LBL_WEBMAILS_TITLE'=>'WebMails',
'LBL_EMAILS_TITLE'=>'Email',
'LBL_MAIL_CONNECT_ERROR_INFO'=>'Erro a ligar ao servidor de email!<br> Verifique nas Minhas Contas -> Lista de Servidores de Email -> Lista de Contas de Email',
'LBL_ALLMAILS'=>'Todos os Emails',
'LBL_TO_USERS'=>'Para Utilizadores',
'LBL_TO'=>'Para:',
'LBL_IN_SUBJECT'=>'em Assunto',
'LBL_IN_SENDER'=>'em Remetente',
'LBL_IN_SUBJECT_OR_SENDER'=>'em Assunto em Remetente',
'SELECT_EMAIL'=>'Escolha IDs de Email',
'Sender'=>'Remetente',
'LBL_CONFIGURE_MAIL_SETTINGS'=>'O seu Servidor de Recepção de Email não está configurado',
'LBL_MAILSELECT_INFO1'=>'Os seguintes tipos de Email ID estão associados aos selecionados',
'LBL_MAILSELECT_INFO2'=>'Escolha os tipos de Email ID para as quais deve ser enviado este email',
'LBL_MULTIPLE'=>'Múltiplos',
'LBL_COMPOSE_EMAIL'=>'Compôr Email',
'LBL_VTIGER_EMAIL_CLIENT'=>'Cliente de Webmail vtiger',

//Added for 5.0.3
'TITLE_VTIGERCRM_MAIL'=>'Email vtigerCRM',
'TITLE_COMPOSE_MAIL'=>'Compôr Email',

'MESSAGE_MAIL_COULD_NOT_BE_SEND'=>'Email pode não ser enviado para o utilizador atribuído.',
'MESSAGE_PLEASE_CHECK_ASSIGNED_USER_EMAILID'=>'Por favor verifique o id de email do utilizador "atribuído a"...',
'MESSAGE_PLEASE_CHECK_THE_FROM_MAILID'=>'Por favor verifique o id de email do remetente',
'MESSAGE_MAIL_COULD_NOT_BE_SEND_TO_THIS_EMAILID'=>'Email não pôde ser enviado para este id de email',
'PLEASE_CHECK_THIS_EMAILID'=>'Verifique este id de email...',
'LBL_CC_EMAIL_ERROR'=>'O seu id de email em cc não está correcto',
'LBL_BCC_EMAIL_ERROR'=>'O seu id de email em bcc não está correcto',
'LBL_NO_RCPTS_EMAIL_ERROR'=>'Nenhum destinatário especificado',
'LBL_CONF_MAILSERVER_ERROR'=>'Por favor configure o seu servidor de email de envio em Configurações ---> Servidor de Email de Envio',
'LBL_VTIGER_EMAIL_CLIENT'=>'Cliente de Webmail vtiger',
'LBL_MAILSELECT_INFO3'=>'Não tem permissão para ver os id(s) de email do(s) registo(s) selecionados.',
//Added  for script alerts
'FEATURE_AVAILABLE_INFO' => 'Esta característica só está disponível para Microsoft Internet Explorer 5.5 e acima\n\nActualize o seu navegador!',
'DOWNLOAD_CONFIRAMATION' => 'Quer transferir o ficheiro?',
'LBL_PLEASE_ATTACH' => 'Por favor indique um ficheiro válido para anexar e tente de novo!',
'LBL_KINDLY_UPLOAD' => 'Por favor configure a variável <font color="red">upload_tmp_dir</font> no ficheiro php.ini.',
'LBL_EXCEED_MAX' => 'O ficheiro enviado excede o tamanho máximo permitido. Por favor tente um ficheiro menor que ',
'LBL_BYTES' => ' bytes',
'LBL_CHECK_USER_MAILID' => 'Por favor verifique o id de email do utilizador corrente. Deve ser um endereço válido para enviar Emails',

// Added/Updated for vtiger CRM 5.0.4
'Activity Type'=>'Tipo de Actividade',
'LBL_MAILSELECT_INFO'=>'tem os Endereços seguintes associadas. Por favor Escolha os Endereços para os quais o email deve ser enviado',
'LBL_NO_RECORDS' => 'Nenhum registo encontrado',
'LBL_PRINT_EMAIL'=> 'Imprimir',

);

?>
