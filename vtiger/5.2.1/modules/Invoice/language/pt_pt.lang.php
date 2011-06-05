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
 * Contributor(s): Marco Silva ( marco.silva@intraneia.com )
 * Contributor(s): Joao Oliveira AND Pedro Tenreiro (vtiger@meticube.com)
 * Contributor(s): Rui Figueiredo - ( rui.figueiredo@gmail.com )
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_MODULE_NAME'=>'Factura',
'LBL_SO_MODULE_NAME'=>'Factura',
'LBL_RELATED_PRODUCTS'=>'Detalhes do Produto',
'LBL_MODULE_TITLE'=>'Factura: Início',
'LBL_SEARCH_FORM_TITLE'=>'Pesquisa de Factura',
'LBL_LIST_FORM_TITLE'=>'Lista de Facturas',
'LBL_LIST_SO_FORM_TITLE'=>'Lista de Encomendas de Clientes',
'LBL_NEW_FORM_TITLE'=>'Nova Factura',
'LBL_NEW_FORM_SO_TITLE'=>'Nova Encomenda de Cliente',
'LBL_MEMBER_ORG_FORM_TITLE'=>'Organizações Membro',

'LBL_LIST_ACCOUNT_NAME'=>'Nome da Conta',
'LBL_LIST_CITY'=>'Cidade',
'LBL_LIST_WEBSITE'=>'Website',
'LBL_LIST_STATE'=>'Concelho',
'LBL_LIST_PHONE'=>'Telefone',
'LBL_LIST_EMAIL_ADDRESS'=>'Email',
'LBL_LIST_CONTACT_NAME'=>'Nome do Contacto',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'Conta:',
'LBL_ACCOUNT_NAME'=>'Nome da Conta:',
'LBL_PHONE'=>'Telefone:',
'LBL_WEBSITE'=>'Website:',
'LBL_FAX'=>'Fax:',
'LBL_TICKER_SYMBOL'=>'Ticker Symbol:',
'LBL_OTHER_PHONE'=>'Outro Telefone:',
'LBL_ANY_PHONE'=>'Qualquer Telefone:',
'LBL_MEMBER_OF'=>'Membro De:',
'LBL_EMAIL'=>'Email:',
'LBL_EMPLOYEES'=>'Colaboradores:',
'LBL_OTHER_EMAIL_ADDRESS'=>'Outro Email:',
'LBL_ANY_EMAIL'=>'Qualquer Email:',
'LBL_OWNERSHIP'=>'Proprietário:',
'LBL_RATING'=>'Avaliação:',
'LBL_INDUSTRY'=>'Industria:',
'LBL_SIC_CODE'=>'Classif. Activ. Economicas:',
'LBL_TYPE'=>'Tipo:',
'LBL_ANNUAL_REVENUE'=>'Receita Anual:',
'LBL_ADDRESS_INFORMATION'=>'Informação da Morada',
'LBL_Quote_INFORMATION'=>'Informação da Conta',
'LBL_CUSTOM_INFORMATION'=>'Informação Específica',
'LBL_BILLING_ADDRESS'=>'Morada de Facturação:',
'LBL_SHIPPING_ADDRESS'=>'Morada de Entrega:',
'LBL_ANY_ADDRESS'=>'A Minha Morada:',
'LBL_CITY'=>'Cidade:',
'LBL_STATE'=>'Concelho:',
'LBL_POSTAL_CODE'=>'Código Postal:',
'LBL_COUNTRY'=>'País:',
'LBL_DESCRIPTION_INFORMATION'=>'Informação Descritiva',
'LBL_DESCRIPTION'=>'Descrição:',
'LBL_TERMS_INFORMATION'=>'Termos & Condições',
'NTC_COPY_BILLING_ADDRESS'=>'Copiar morada de facturação para morada de entrega',
'NTC_COPY_SHIPPING_ADDRESS'=>'Copiar morada de entrega para morada de facturação',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'Are you sure you want to remove this record as a member organization?',
'LBL_DUPLICATE'=>'Possibilidade de Duplicar Facturas',
'MSG_DUPLICATE' => 'Creating this vtiger_account may vtiger_potentialy create a duplicate vtiger_account. You may either select an vtiger_account from the list below or you may click on Create New Account to continue creating a new vtiger_account with the previously entered data.',

'LBL_INVITEE'=>'Contactos',
'ERR_DELETE_RECORD'=>"Indique um numero de registo para apagar a Conta.",

'LBL_SELECT_ACCOUNT'=>'Seleccione Conta',
'LBL_GENERAL_INFORMATION'=>'Informação Geral',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'Novas Oportunidades',
'LBL_POTENTIAL_TITLE'=>'Oportunidades',

'LBL_NEW_TASK'=>'Nova Tarefa',
'LBL_TASK_TITLE'=>'Tarefa',
'LBL_NEW_CALL'=>'Nova Chamada',
'LBL_CALL_TITLE'=>'Chamadas',
'LBL_NEW_MEETING'=>'Nova Reunião',
'LBL_MEETING_TITLE'=>'Reuniões',
'LBL_NEW_EMAIL'=>'Novo Email',
'LBL_EMAIL_TITLE'=>'Emails',
'LBL_NEW_CONTACT'=>'Novo Contacto',
'LBL_CONTACT_TITLE'=>'Contactos',

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'Todos',
'LBL_PROSPECT'=>'Prospect',
'LBL_INVESTOR'=>'Investidor',
'LBL_RESELLER'=>'Revendedor',
'LBL_PARTNER'=>'Parceiro',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'Ferramentas de Conta-1',
//Added for 4GA
'Subject'=>'Assunto',
'Quote Name'=>'Nome do Orçamento',
'Vendor Name'=>'Nome do Fornecedor',
'Invoice Terms'=>'Condições de Pagamento',
'Contact Name'=>'Nome do Contacto',//to include contact name vtiger_field in Invoice
'Invoice Date'=>'Data da Factura',
'Sub Total'=>'Sub-Total',
'Due Date'=>'Data de Vencimento',
'Carrier'=>'Transportador',
'Type'=>'Tipo',
'Sales Tax'=>'Imposto',
'Sales Commission'=>'Comissão de Venda',
'Excise Duty'=>'Imposto Extra',
'Total'=>'Total',
'Product Name'=>'Nome do Produto',
'Assigned To'=>'Atribuído a',
'Billing Address'=>'Morada de Facturação',
'Shipping Address'=>'Morada de Entrega',
'Billing City'=>'Cidade de Facturação',
'Billing State'=>'Concelho de Facturação',
'Billing Code'=>'Código Postal de Facturação',
'Billing Country'=>'País de Facturação',
'Billing Po Box'=>'Apartado de Facturação',
'Shipping Po Box'=>'Apartado de Entrega',
'Shipping City'=>'Cidade de Entrega',
'Shipping State'=>'Concelho de Entrega',
'Shipping Code'=>'Código Postal de Entrega',
'Shipping Country'=>'País de Entrega',
'City'=>'Cidade',
'State'=>'Concelho',
'Code'=>'Código Postal',
'Country'=>'País',
'Created Time'=>'Criado a',
'Modified Time'=>'Actualizado a',
'Description'=>'Descrição',
'Potential Name'=>'Nome da Oportunidade',
'Customer No'=>'Cliente N.',
'Sales Order'=>'Encomenda',
'Pending'=>'Pendente',
'Account Name'=>'Nome da Conta',
'Terms & Conditions'=>'Termos & Condições',
//Quote Info
'LBL_INVOICE_INFORMATION'=>'Informação de Facturação',
'LBL_INVOICE'=>'Factura:',
'LBL_SO_INFORMATION'=>'Informação da Encomenda',
'LBL_SO'=>'Encomenda:',

//Added in release 4.2
'LBL_SUBJECT'=>'Assunto:',
'LBL_SALES_ORDER'=>'Encomenda:',
'Invoice Id'=>'Id da Facturação',
'LBL_MY_TOP_INVOICE'=>'Top Facturas Abertas',
'LBL_INVOICE_NAME'=>'Nome da Factura:',
'Purchase Order'=>'Encomenda ao Fornecedor',
'Status'=>'Estado',
'Id'=>'Id da Factura',
'Invoice'=>'Factura',

//Added for existing Picklist Entries

'Created'=>'Criado',
'Approved'=>'Aprovado',
'Sent'=>'Enviado',
'Credit Invoice'=>'Credit Invoice',
'Paid'=>'Pago',
//Added to Custom Invoice Number
'Invoice No'=>'Factura N.',
'Adjustment'=>'Ajuste',

//Added for Reports (5.0.4)
'Tax Type'=>'Tipo de Imposto',
'Discount Percent'=>'Percentagem de Desconto',
'Discount Amount'=>'Quantia de Desconto',
'Terms & Conditions'=>'Termos & Condições',
'No'=>'Não',
'Date'=>'Data',

// Added affter 5.0.4 GA
//Added for Documents module
'Documents'=>'Documentos',
);

?>
