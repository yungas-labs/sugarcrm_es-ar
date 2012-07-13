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
  'LBL_MODULE_NAME' => 'Actividades',
  'LBL_MODULE_TITLE' => 'Actividades: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Actividades Search',
  'LBL_LIST_FORM_TITLE' => 'Actividades List',
  'LBL_LIST_SUBJECT' => 'Título',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_RELATED_TO' => 'Related to',
  'LBL_LIST_DATE' => 'Date',
  'LBL_LIST_TIME' => 'Start Time',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_SUBJECT' => 'Título:',
  'LBL_STATUS' => 'Status:',
  'LBL_LOCATION' => 'Location:',
  'LBL_DATE_TIME' => 'Start Date & Time:',
  'LBL_DATE' => 'Start Date:',
  'LBL_TIME' => 'Start Time:',
  'LBL_DURATION' => 'Duration:',
  'LBL_DURATION_MINUTES' => 'Duration Minutes:',
  'LBL_HOURS_MINS' => '(hours/minutes)',
  'LBL_CONTACT_NAME' => 'Contacto Name: ',
  'LBL_MEETING' => 'Reunión:',
  'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_COLON' => ':',
  'LNK_NEW_CALL' => 'Log Llamada',
  'LNK_NEW_MEETING' => 'Agendar Reunión',
  'LNK_NEW_TASK' => 'Crear Tarea',
  'LNK_NEW_NOTE' => 'Crear Note or Add Attachment',
  'LNK_NEW_EMAIL' => 'Crear Archived Email',
  'LNK_CALL_LIST' => 'View Llamadas',
  'LNK_MEETING_LIST' => 'View Reuniones',
  'LNK_TASK_LIST' => 'View Tareas',
  'LNK_NOTE_LIST' => 'View Notes',
  'LNK_EMAIL_LIST' => 'View Correos',
  'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
  'NTC_REMOVE_INVITEE' => 'Are you sure you want to remove this invitee from the meeting?',
  'LBL_INVITEE' => 'Invitees',
  'LBL_LIST_DIRECTION' => 'Direction',
  'LBL_DIRECTION' => 'Direction',
  'LNK_NEW_APPOINTMENT' => 'New Appointment',
  'LNK_VIEW_CALENDAR' => 'View Calendario',
  'LBL_OPEN_ACTIVITIES' => 'Open Actividades',
  'LBL_HISTORY' => 'History',
  'LBL_UPCOMING' => 'My Upcoming Appointments',
  'LBL_TODAY' => 'through ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Crear Tarea',
  'LBL_NEW_TASK_BUTTON_KEY' => 'N',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Crear Tarea',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Agendar Reunión',
  'LBL_SCHEDULE_MEETING_BUTTON_KEY' => 'M',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Agendar Reunión',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Log Llamada',
  'LBL_SCHEDULE_CALL_BUTTON_KEY' => 'C',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log Llamada',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Crear Note or Attachment',
  'LBL_NEW_NOTE_BUTTON_KEY' => 'T',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Crear Note or Attachment',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive Email',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archive Email',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_DUE_DATE' => 'Due Date',
  'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
  'NTC_NONE_SCHEDULED' => 'None scheduled.',
  'appointment_filter_dom' => array(
  	 'today' => 'today'
  	,'tomorrow' => 'tomorrow'
  	,'this Saturday' => 'this week'
  	,'next Saturday' => 'next week'
  	,'last this_month' => 'this month'
  	,'last next_month' => 'next month'
),
  'LNK_IMPORT_CALLS'=>'Importar Llamadas',
  'LNK_IMPORT_MEETINGS'=>'Importar Reuniones',
  'LNK_IMPORT_TASKS'=>'Importar Tareas',
  'LNK_IMPORT_NOTES'=>'Importar Notes',
  'NTC_NONE'=>'None',
  'LBL_ACCEPT_THIS'=>'Accept?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Open Actividades',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',

	'LBL_ACCEPT' => 'Accept' /*for 508 compliance fix*/,
);


?>