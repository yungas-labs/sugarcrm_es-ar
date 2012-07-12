<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
 $mod_strings = array (
  'LBL_MODULE_NAME' => 'Venta',
  'LBL_MODULE_TITLE' => 'Venta: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Venta',
  'LBL_VIEW_FORM_TITLE' => 'Vista de Venta',
  'LBL_LIST_FORM_TITLE' => 'Lista de Venta',
  'LBL_SALE_NAME' => 'Nombre de Venta:',
  'LBL_SALE' => 'Venta:',
  'LBL_NAME' => 'Nombre de Venta',
  'LBL_LIST_SALE_NAME' => 'Nombre',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre de la Cuenta',
  'LBL_LIST_AMOUNT' => 'Cantidad',
  'LBL_LIST_DATE_CLOSED' => 'Cerrado',
  'LBL_LIST_SALE_STAGE' => 'Etapa de Ventas',
  'LBL_ACCOUNT_ID'=>'Cuenta ID',
   'LBL_CURRENCY_ID'=>'Moneda ID',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Venta - Moneda Actual',
  'UPDATE_DOLLARAMOUNTS' => 'Montos en U.S. Dólares Actuales',
  'UPDATE_VERIFY' => 'Verrificar Montos',
  'UPDATE_VERIFY_TXT' => 'Verifica que los valores de cantidad en ventas sean números decimales válidos, únicamente caracteres numéricos(0-9) y decimales(.)',
  'UPDATE_FIX' => 'Fijar Cantidad',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for sales based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Creating New Currency:',
  'UPDATE_VERIFY_FAIL' => 'Record Failed Verification:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Cantidad Actual:',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'UPDATE_INCLUDE_CLOSE' => 'Include Closed Records',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nueva Cantidad:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nueva Moneda:',
  'UPDATE_DONE' => 'Hecho',
  'UPDATE_BUG_COUNT' => 'Bugs Encontrados y Se Trató de Resolver:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs Encontrados:',
  'UPDATE_COUNT' => 'Registros Actualizados:',
  'UPDATE_RESTORE_COUNT' => 'Cantidades de Registro Restauradas:',
  'UPDATE_RESTORE' => 'Restaurar Cantidades',
  'UPDATE_RESTORE_TXT' => 'Restaura los valores de cantidad desde las copias de seguridad creadas durante la revisión.',
  'UPDATE_FAIL' => 'No se pudo actualizar - ',
  'UPDATE_NULL_VALUE' => 'La Cantidad es NULL poniendola a 0 -',
  'UPDATE_MERGE' => 'Combinar Monedas',
  'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
  'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta:',
  'LBL_AMOUNT' => 'Monto:',
  'LBL_AMOUNT_USDOLLAR' => 'Monto USD:',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_DATE_CLOSED' => 'Fecha Prevista de Cerrado:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN' => 'Campaña:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',  
  'LBL_NEXT_STEP' => 'Próxima Etapa:',
  'LBL_LEAD_SOURCE' => 'Lead Source:',
  'LBL_SALES_STAGE' => 'Etapa de Ventas:',
  'LBL_PROBABILITY' => 'Probabilidad (%):',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DUPLICATE' => 'Posible Duplicación de Venta',
  'MSG_DUPLICATE' => 'El registro de venta que está a punto de crear puede ser un duplicado de un registro de venta que ya existe. Los registros de venta que contengan nombres similares se enumeran a continuación.<br>Click en Guardar para continuar creando esta nueva Venta, o click en Cancelar para retornar al módulo sin crear la venta.',
  'LBL_NEW_FORM_TITLE' => 'Creación de Venta',
  'LNK_NEW_SALE' => 'Creación de Venta',
  'LNK_SALE_LIST' => 'Venta',
  'ERR_DELETE_RECORD' => 'Debe especificarse un número de registro para borrar la venta.',
  'LBL_TOP_SALES' => 'Mi Principal Venta Abierta',
  'NTC_REMOVE_OPP_CONFIRMATION' => '¿Está seguro de querer remover este contacto de la venta?',
	'SALE_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de querer remover esta venta del proyecto?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Venta',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Actividades',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
    'LBL_RAW_AMOUNT'=>'Monto Bruto',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
	'LBL_ASSIGNED_TO_NAME' => 'Usuario:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_MY_CLOSED_SALES' => 'Mis Ventas Terminadas',
  'LBL_TOTAL_SALES' => 'Total de Ventas',
  'LBL_CLOSED_WON_SALES' => 'Ventas Ganadas Terminadas',
  'LBL_ASSIGNED_TO_ID' =>'Asignado a ID',
  'LBL_CREATED_ID'=>'Creado por ID',
  'LBL_MODIFIED_ID'=>'Modificado por ID',
  'LBL_MODIFIED_NAME'=>'Modificado por Nombre de Usuario',
  'LBL_SALE_INFORMATION'=>'Información de Venta',
  'LBL_CURRENCY_ID'=>'Moneda ID',
  'LBL_CURRENCY_NAME'=>'Nombre de la Moneda',
  'LBL_CURRENCY_SYMBOL'=>'Símbolo de la Moneda',

);

?>
