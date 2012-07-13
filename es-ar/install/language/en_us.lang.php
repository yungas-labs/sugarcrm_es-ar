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

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'LBL_BASIC_SEARCH'					=> 'Búsqueda Básica',
	'LBL_ADVANCED_SEARCH'				=> 'Búsqueda Avanzada',
	'LBL_BASIC_TYPE'					=> 'Tipo Básico',
	'LBL_ADVANCED_TYPE'					=> 'Tipo Avanzado',
	'LBL_SYSOPTS_1'						=> 'Seleccione las opciones de la siguiente configuración del sistema.',
    'LBL_SYSOPTS_2'                     => '¿Que tipo de Base de Datos sera usada por esta implementación de Sugar a instalar?',
	'LBL_SYSOPTS_CONFIG'				=> 'Configuración del Sistema',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Especificar Tipo de Base de Datos',
    'LBL_SYSOPTS_DB_TITLE'              => 'Tipo de Base de Datos',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Por favor arregle los siguientes errores antes de continuar:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Por favor hacer escribible el siguiente directorio:',
    'ERR_DB_VERSION_FAILURE'			=> 'Deshabilitar para verificar versión de la Base de Datos.',
	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Escribir el nombre de usuario para el usuario Administrador de Sugar. ',
	'ERR_ADMIN_PASS_BLANK'				=> 'Escribir la contraseña del usuario Administrador de Sugar. ',
    //'ERR_CHECKSYS_CALL_TIME'			=> 'Allow Llamada Time Pass Reference is Off (please enable in php.ini)',
    'ERR_CHECKSYS'                      => 'Errores han sido detectados durante la comprobación de compatibilidad. Para que tu instalación de SugarCRM funcione correctamenteto, por favor toma los pasos apropiados para hacer frente a las cuestiones que se enumeran a continuación y presione el botón para recomprobar, o trata de instalar nuevamente.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Permitir Llamada Time Pass Reference en On (esto se debe establecer en Off en php.ini) ',
	'ERR_CHECKSYS_CURL'					=> 'No encontrado: El Planificador de Sugar tendrá funcionalidad limitada.',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Para resultados óptimos al usar el sapi IIS/FastCGI, establece fastcgi.logging a 0 en tu archivo php.ini.',
	'ERR_CHECKSYS_IMAP'					=> 'No encontrado: Correo Entrante y Campañas (Correo Electrónico) requiere de las bibliotecas de IMAP. Ninguna será funcional.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC no puede ser activado ("On") cuando se usa MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Aviso: ',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> ' (Establécelo a ',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M o más en tu archivo php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Versión Mínima 4.1.2 - Encontrada: ',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Hubo un error al escribir y leer las variables de sesión.  No se ha podido continuar con la instalación.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'No es un Directorio Válido',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Aviso: No es Escribible',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Tu versión de PHP no está soportada por Sugar. Necesitarás instalar una versión que sea compatible con la aplicación Sugar.  Por favor, consulta la Matriz de Compatibilidad en las Notas de Lanzamiento para más información sobre las versiones de PHP soportadas. Tu versión es ',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Tu versión de IIS no está soportada por Sugar. Necesitarás instalar una versión que sea compatible con la aplicación Sugar.  Por favor, consulte la Matriz de Compatibilidad en las Notas de Lanzamiento para más información sobre las versiones de IIS soportadas. Tu versión es ',
	'ERR_CHECKSYS_FASTCGI'              => 'Hemos detectado que no estás usando una asociación de manejador de FastCGI para PHP. Debes instalar/configurar una versión que sea compatible con la aplicación Sugar.  Por favor, consulta la Matriz de Compatibilidad en las Notas de Lanzamiento para más información sobre las versiones soportadas. Por favor, visita <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> para más detalles ',
	'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Versión de PHP Instalada No Soportada: ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Base de datos no disponible',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'No se ha encontrado el soporte de base de datos.  Por favor, asegúrate de que tiene los controladores necesarios para alguno de los siguientes tipo de Base de Datos: MySQL, MS SQLServer, u Oracle.  Es posible que tengas que descomentar la extensión en el archivo php.ini, o recompilarlo con el archivo binario apropiado, dependiendo de la versión de PHP.  Por favor, consulta el manual de PHP para más información sobre cómo habilitar el Soporte de Base de Datos.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Las funciones asociadas con las Bibliotecas de Análisis de XML que son requeridas por la aplicación Sugar no han sido encontradas. Es posible que tengas que descomentar la extensión en el archivo php.ini, o recompilarlo con el archivo binario apropiado, dependiendo de la versión de PHP.  Por favor, consulta el manual de PHP para más información.',
    'ERR_CHECKSYS_MBSTRING'             => 'Las funciones asociadas con la extensión de PHP para Cadenas Multibyte (mbstring) que son requeridas por la aplicación Sugar no han sido encontradas. <br/><br/>Normalmente, el módulo mbstring no está habilitado por defecto en PHP y debe ser activado con --enable-mbstring en la compilación de PHP. Por favor, consulta el manual de PHP para más información sobre como habilitar el soporte de mbstring.',
	'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'La opción session.save_path de tu archivo de configuración php (php.ini) no ha sido establecida o ha sido establecida a una carpeta que no existe. Es posible que tenga que establecer la opción save_path setting en php.ini o verificar que existe la carpeta establecida en save_path.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'La opción session.save_path de tu archivo de configuración php (php.ini) ha sido establecida a una carpeta que no es escribible.  Por favor, lleve a cabo los pasos necesarios para hacer la carpeta escribible.  <br>Dependiendo de tu Sistema Operativo, es posible que tenga que cambiar los permisos usando chmod 766, o hacer clic con el botón derecho del ratón sobre el archivo para acceder a las propiedades y desmarcar la opción de sólo lectura.',
	'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'El archivo de configuración (config.php) existe pero no es escribible.  Por favor, lleve a cabo los pasos necesarios para hacerlo escribible.  Dependiendo de tu Sistema Operativo, es posible que tenga que cambiar los permisos usando chmod 766, o hacer clic con el botón derecho del ratón sobre el archivo para acceder a las propiedades y desmarcar la opción de sólo lectura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'El archivo de configuración (config.php) existe pero no es escribible.  Por favor, lleva a cabo los pasos necesarios para hacerlo escribible.  Dependiendo de tu Sistema Operativo, es posible que tengas que cambiar los permisos usando chmod 766, o hacer clic con el botón derecho del ratón sobre el nombre del archivo para acceder a las propiedades y desmarcar la opción de sólo lectura.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'El Directorio Custom existe pero no es escribible.  Es posible que tenga que cambiar sus permisos (chmod 766) o hacer clic con el botón derecho del ratón sobre él y desmarcar la opción de sólo lectura, dependiendo de tu Sistema Operativo.  Por favor, lleve a cabo los pasos necesarios para que el archivo sea escribible.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Los siguientes archivos o directorios no son escribibles o no existen y no pueden ser creados.  Dependiendo de tu Sistema Operativo, corregir esto requerirá cambiar los permisos en los archivos o en tu directorio padre (chmod 766), o hacer clic con el botón derecho en el directorio padre y desmarcar la opción 'sólo lectura' y aplicarla en todas las subcarpetas.",



//'ERR_CHECKSYS_SAFE_MODE'			=> 'El Modo Seguro está activado (por favor, deshabilítalo en php.ini)',
	'ERR_CHECKSYS_SAFE_MODE'			=> 'El Modo Seguro está activado (On) (podrías querer deshabilítalo en php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Soporte ZLib - No encontrado: SugarCRM obtiene grandes beneficios de rendimiento con compresión zlib.',
    'ERR_CHECKSYS_ZIP'					=> 'Soporte ZIP - No encontrado: SugarCRM lo necesita para la compresión ZIP de archivos.',
	'ERR_DB_ADMIN'						=> 'El nombre de usuario o contraseña del administrador de base de datos no son válidos, y la conexión a base de datos no ha podido ser establecida. Por favor, introduce un nombre de usuario y contraseña válidos. (Error: ',
	'ERR_DB_ADMIN_MSSQL'				=> 'El nombre de usuario o contraseña del administrador de base de datos no son válidos, y la conexión a base de datos no ha podido ser establecida. Por favor, introduce un nombre de usuario y contraseña válidos.',
	'ERR_DB_EXISTS_NOT'					=> 'La base de datos especificada no existe.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'La base de datos ya existe y contiene datos de configuración.  Para ejecutar una instalación con la base de datos elegida, por favor, ejecuta de nuevo la instalación y selecciona: "¿Eliminar y crear de nuevo las tablas de SugarCRM?"  Para actualizar, usa el Asistente de Actualizaciones en la Consola de Administración.  Por favor, lee la documentación referente a actualizaciones <a href="http://www.sugarforge.org/content/downloads/" target="_new">aquí</a>.',
	'ERR_DB_EXISTS'						=> 'El nombre de base de datos suministrado ya existe -- no puede crearse otra con el mismo nombre.',
    'ERR_DB_EXISTS_PROCEED'             => 'El nombre de base de datos suministrado ya existe.  Puedes<br>1.  presionar el botón Atrás y elegir un nuevo nombre <br>2.  hacer clic en Siguiente y continuar, pero todas las tablas existentes en esta base de datos serán eliminadas.  <strong>Esto implica que sus tablas y datos serán eliminados permanentemente.</strong>',
	'ERR_DB_HOSTNAME'					=> 'El nombre de equipo no puede estar vacío.',
	'ERR_DB_INVALID'					=> 'Invalid database type selected.',
	'ERR_DB_LOGIN_FAILURE'				=> 'The provided database host, username, and/or password is invalid, and a connection to the database could not be established.  Please enter a valid host, username and password',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'The provided database host, username, and/or password is invalid, and a connection to the database could not be established.  Please enter a valid host, username and password',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'The provided database host, username, and/or password is invalid, and a connection to the database could not be established.  Please enter a valid host, username and password',
	'ERR_DB_MYSQL_VERSION'				=> 'Your MySQL version (%s) is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported MySQL versions.',
	'ERR_DB_NAME'						=> 'Database name cannot be blank.',
	'ERR_DB_NAME2'						=> "Database name cannot contain a '\\', '/', or '.'",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Database name cannot contain a '\\', '/', or '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Database name cannot begin with a number, '#', or '@' and cannot contain a space, '\"', \"'\", '*', '/', '\', '?', ':', '<', '>', '&', '!', or '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Database name can only consist of alphanumeric characters and the symbols '#', '_' or '$'",
	'ERR_DB_PASSWORD'					=> 'The passwords provided for the Sugar database administrator do not match.  Please re-enter the same passwords in the password fields.',
	'ERR_DB_PRIV_USER'					=> 'Provide a database administrator user name.  The user is required for the initial connection to the database.',
	'ERR_DB_USER_EXISTS'				=> 'User name for Sugar database user already exists -- cannot create another one with the same name. Please enter a new user name.',
	'ERR_DB_USER'						=> 'Enter a user name for the Sugar database administrator.',
	'ERR_DBCONF_VALIDATION'				=> 'Please fix the following errors before proceeding:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'The passwords provided for the Sugar database user do not match. Please re-enter the same passwords in the password fields.',
	'ERR_ERROR_GENERAL'					=> 'The following errors were encountered:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Cannot delete file: ',
	'ERR_LANG_MISSING_FILE'				=> 'Cannot find file: ',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'No language pack file found at include/language inside: ',
	'ERR_LANG_UPLOAD_1'					=> 'There was a problem with your upload.  Please try again.',
	'ERR_LANG_UPLOAD_2'					=> 'Language Packs must be ZIP archives.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP could not move the temp file to the upgrade directory.',
	'ERR_LICENSE_MISSING'				=> 'Missing Required Fields',
	'ERR_LICENSE_NOT_FOUND'				=> 'License file not found!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Log directory provided is not a valid directory.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Log directory provided is not a writable directory.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Log directory is required if you wish to specify your own.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Unable to process script directly.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Cannot use the single quotation mark for ',
	'ERR_PASSWORD_MISMATCH'				=> 'The passwords provided for the Sugar admin user do not match.  Please re-enter the same passwords in the password fields.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Cannot write to the <span class=stop>config.php</span> file.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'You can continue this installation by manually creating the config.php file and pasting the configuration information below into the config.php file.  However, you <strong>must </strong>create the config.php file before you continue to the next step.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Did you remember to create the config.php file?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Warning: Could not write to config.php file.  Please ensure it exists.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Cannot write to the ',
	'ERR_PERFORM_HTACCESS_2'			=> ' file.',
	'ERR_PERFORM_HTACCESS_3'			=> 'If you want to secure your log file from being accessible via browser, create an .htaccess file in your log directory with the line:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>We could not detect an Internet connection.</b> When you do have a connection, please visit <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> to register with SugarCRM. By letting us know a little bit about how your company plans to use SugarCRM, we can ensure we are always delivering the right application for your business needs.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Session directory provided is not a valid directory.',
	'ERR_SESSION_DIRECTORY'				=> 'Session directory provided is not a writable directory.',
	'ERR_SESSION_PATH'					=> 'Session path is required if you wish to specify your own.',
	'ERR_SI_NO_CONFIG'					=> 'You did not include config_si.php in the document root, or you did not define $sugar_config_si in config.php',
	'ERR_SITE_GUID'						=> 'Application ID is required if you wish to specify your own.',
    'ERROR_SPRITE_SUPPORT'              => "Currently we are not able to locate the GD library, as a result you will not be able to use the CSS Sprite functionality.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Upload File Size',
	'ERR_URL_BLANK'						=> 'Provide the base URL for the Sugar instance.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Could not locate installation record of',
	'ERROR_FLAVOR_INCOMPATIBLE'			=> 'The uploaded file is not compatible with this flavor (Community Edition, Professional, or Enterprise) of Sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Error: Your license expired ",
	'ERROR_LICENSE_EXPIRED2'			=> " day(s) ago.   Please go to the <a href='index.php?action=LicenseSettings&module=Administration'>'\"License Management\"</a>  in the Admin screen to enter your new license key.  If you do not enter a new license key within 30 days of your license key expiration, you will no longer be able to log in to this application.",
	'ERROR_MANIFEST_TYPE'				=> 'Manifest file must specify the package type.',
	'ERROR_PACKAGE_TYPE'				=> 'Manifest file specifies an unrecognized package type',
	'ERROR_VALIDATION_EXPIRED'			=> "Error: Your validation key expired ",
	'ERROR_VALIDATION_EXPIRED2'			=> " day(s) ago.   Please go to the <a href='index.php?action=LicenseSettings&module=Administration'>'\"License Management\"</a> in the Admin screen to enter your new validation key.  If you do not enter a new validation key within 30 days of your validation key expiration, you will no longer be able to log in to this application.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'The uploaded file is not compatible with this version of Sugar: ',

	'LBL_BACK'							=> 'Back',
    'LBL_CANCEL'                        => 'Cancelar',
    'LBL_ACCEPT'                        => 'I Accept',
	'LBL_CHECKSYS_1'					=> 'In order for your SugarCRM installation to function properly, please ensure all of the system check items listed below are green. If any are red, please take the necessary steps to fix them.<BR><BR> For help on these system checks, please visit the <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Writable Cache Sub-Directories',
	//'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Llamada Time Pass Reference Turned On',
    'LBL_DROP_DB_CONFIRM'               => 'The provided Database Name already exists.<br>You can either:<br>1.  Click on the Cancelar button and choose a new database name, or <br>2.  Click the Accept button and continue.  All existing tables in the database will be dropped. <strong>This means that all of the tables and pre-existing data will be blown away.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Llamada Time Pass Reference Turned Off',
    'LBL_CHECKSYS_COMPONENT'			=> 'Component',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Optional Components',
	'LBL_CHECKSYS_CONFIG'				=> 'Writable SugarCRM Configuration File (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Writable SugarCRM Configuration File (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL Module',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Session Guardar Path Setting',
	'LBL_CHECKSYS_CUSTOM'				=> 'Writeable Custom Directory',
	'LBL_CHECKSYS_DATA'					=> 'Writable Data Sub-Directories',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP Module',
	'LBL_CHECKSYS_FASTCGI'             => 'FastCGI',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings Module',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (No Limit)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (Unlimited)',
	'LBL_CHECKSYS_MEM'					=> 'PHP Memory Limit',
	'LBL_CHECKSYS_MODULE'				=> 'Writable Modules Sub-Directories and Files',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL Version',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Not Available',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> 'Location of your PHP configuration file (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver ',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP Version',
    'LBL_CHECKSYS_IISVER'               => 'IIS Version',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Re-check',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP Safe Mode Turned Off',
	'LBL_CHECKSYS_SESSION'				=> 'Writable Session Save Path (',
	'LBL_CHECKSYS_STATUS'				=> 'Status',
	'LBL_CHECKSYS_TITLE'				=> 'System Check Acceptance',
	'LBL_CHECKSYS_VER'					=> 'Found: ( ver ',
	'LBL_CHECKSYS_XML'					=> 'XML Parsing',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB Compression Module',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP Handling Module',
	'LBL_CHECKSYS_FIX_FILES'            => 'Please fix the following files or directories before proceeding:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Please fix the following module directories and the files under them before proceeding:',
    'LBL_CHECKSYS_UPLOAD'               => 'Writable Upload Directory',
    'LBL_CLOSE'							=> 'Cerrar',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'be created',
	'LBL_CONFIRM_DB_TYPE'				=> 'Database Type',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Please confirm the settings below.  If you would like to change any of the values, click "Back" to edit.  Otherwise, click "Next" to start the installation.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'License Information',
	'LBL_CONFIRM_NOT'					=> 'not',
	'LBL_CONFIRM_TITLE'					=> 'Confirm Settings',
	'LBL_CONFIRM_WILL'					=> 'will',
	'LBL_DBCONF_CREATE_DB'				=> 'Crear Database',
	'LBL_DBCONF_CREATE_USER'			=> 'Crear User',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Caution: All Sugar data will be erased<br>if this box is checked.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Drop and Recreate Existing Sugar tables?',
    'LBL_DBCONF_DB_DROP'                => 'Drop Tables',
    'LBL_DBCONF_DB_NAME'				=> 'Database Name',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Sugar Database User Contraseña',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Re-enter Sugar Database User Contraseña',
	'LBL_DBCONF_DB_USER'				=> 'Sugar Database Username',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Sugar Database Username',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Database Administrator Username',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Database Admin Contraseña',
	'LBL_DBCONF_DEMO_DATA'				=> 'Populate Database with Demo Data?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Choose Demo Data',
	'LBL_DBCONF_HOST_NAME'				=> 'Host Name',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Host Instance',
	'LBL_DBCONF_HOST_PORT'				=> 'Port',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Please enter your database configuration information below. If you are unsure of what to fill in, we suggest that you use the default values.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Use multi-byte text in demo data?',
    'LBL_DBCONFIG_MSG2'                 => 'Name of web server or machine (host) on which the database is located ( such as localhost or www.mydomain.com ):',
    'LBL_DBCONFIG_MSG3'                 => 'Name of the database that will contain the data for the Sugar instance you are about to install:',
    'LBL_DBCONFIG_B_MSG1'               => 'The username and password of a database administrator who can create database tables and users and who can write to the database is necessary in order to set up the Sugar database.',
    'LBL_DBCONFIG_SECURITY'             => 'For security purposes, you can specify an exclusive database user to connect to the Sugar database.  This user must be able to write, update and retrieve data on the Sugar database that will be created for this instance.  This user can be the database administrator specified above, or you can provide new or existing database user information.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Do it for me',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Provide existing user',
    'LBL_DBCONFIG_CREATE_DD'            => 'Define user to create',
    'LBL_DBCONFIG_SAME_DD'              => 'Same as Admin User',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Búsqueda de Texto Completo',
    'LBL_FTS_INSTALLED'                 => 'Installed',
    'LBL_FTS_INSTALLED_ERR1'            => 'Búsqueda de Texto Completo capability is not installed.',
    'LBL_FTS_INSTALLED_ERR2'            => 'You can still install but will not be able to use Búsqueda de Texto Completo functionality.  Please refer to your database server install guide on how to do this, or contact your Administrator.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Privileged Database User Contraseña',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Database Account Above Is a Privileged User?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'This privileged database user must have the proper permissions to create a database, drop/create tables, and create a user.  This privileged database user will only be used to perform these tasks as needed during the installation process.  You may also use the same database user as above if that user has sufficient privileges.',
	'LBL_DBCONF_PRIV_USER'				=> 'Privileged Database User Name',
	'LBL_DBCONF_TITLE'					=> 'Database Configuration',
    'LBL_DBCONF_TITLE_NAME'             => 'Provide Database Name',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Provide Database User Information',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'After this change has been made, you may click the "Start" button below to begin your installation.  <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'The installer has already been run once.  As a safety measure, it has been disabled from running a second time.  If you are absolutely sure you want to run it again, please go to your config.php file and locate (or add) a variable called \'installer_locked\' and set it to \'false\'.  The line should look like this:',
	'LBL_DISABLED_HELP_1'				=> 'For installation help, please visit the SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'support forums',
	'LBL_DISABLED_TITLE_2'				=> 'SugarCRM Installation has been Disabled',
	'LBL_DISABLED_TITLE'				=> 'SugarCRM Installation Disabled',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Character Set most commonly used in your locale',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Outbound Email Settings',
    'LBL_EMAIL_CHARSET_CONF'            => 'Character Set for Outbound Email ',
	'LBL_HELP'							=> 'Help',
    'LBL_INSTALL'                       => 'Install',
    'LBL_INSTALL_TYPE_TITLE'            => 'Installation Options',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Choose Install Type',
    'LBL_INSTALL_TYPE_TYPICAL'          => ' <b>Typical Install</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => ' <b>Custom Install</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'The key is required for general application functionality, but it is not required for installation. You do not need to enter the key at this time, but you will need to provide the key after you have installed the application.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Requires minimum information for the installation. Recommended for new users.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Provides additional options to set during the installation. Most of these options are also available after installation in the admin screens. Recommended for advanced users.',
	'LBL_LANG_1'						=> 'To use a language in Sugar other than the default language (US-English), you can upload and install the language pack at this time. You will be able to upload and install language packs from within the Sugar application as well.  If you would like to skip this step, click Next.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Install',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Remove',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Uninstall',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Upload',
	'LBL_LANG_NO_PACKS'					=> 'none',
	'LBL_LANG_PACK_INSTALLED'			=> 'The following language packs have been installed: ',
	'LBL_LANG_PACK_READY'				=> 'The following language packs are ready to be installed: ',
	'LBL_LANG_SUCCESS'					=> 'The language pack was successfully uploaded.',
	'LBL_LANG_TITLE'			   		=> 'Language Pack',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Installing Sugar now.  This may take up to a few minutes.',
	'LBL_LANG_UPLOAD'					=> 'Upload a Language Pack',
	'LBL_LICENSE_ACCEPTANCE'			=> 'License Acceptance',
    'LBL_LICENSE_CHECKING'              => 'Checking system for compatibility.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Checking Environment',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Verifying DB Credentials.',
    'LBL_LICENSE_CHECK_PASSED'          => 'System passed check for compatibility.',
    'LBL_LICENSE_REDIRECT'              => 'Redirecting in ',
	'LBL_LICENSE_DIRECTIONS'			=> 'If you have your license information, please enter it in the fields below.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Enter Download Key',
	'LBL_LICENSE_EXPIRY'				=> 'Expiration Date',
	'LBL_LICENSE_I_ACCEPT'				=> 'I Accept',
	'LBL_LICENSE_NUM_USERS'				=> 'Number of Usuarios',
	'LBL_LICENSE_OC_DIRECTIONS'			=> 'Please enter the number of purchased offline clients.',
	'LBL_LICENSE_OC_NUM'				=> 'Number of Offline Client Licenses',
	'LBL_LICENSE_OC'					=> 'Offline Client Licenses',
	'LBL_LICENSE_PRINTABLE'				=> ' Printable View ',
    'LBL_PRINT_SUMM'                    => 'Print Summary',
	'LBL_LICENSE_TITLE_2'				=> 'SugarCRM License',
	'LBL_LICENSE_TITLE'					=> 'License Information',
	'LBL_LICENSE_USERS'					=> 'Licensed Usuarios',

	'LBL_LOCALE_CURRENCY'				=> 'Currency Settings',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Default Currency',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Currency Symbol',
	'LBL_LOCALE_CURR_ISO'				=> 'Currency Code (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> '1000s Separator',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Decimal Separator',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Example',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Significant Digits',
	'LBL_LOCALE_DATEF'					=> 'Default Date Format',
	'LBL_LOCALE_DESC'					=> 'The specified locale settings will be reflected globally within the Sugar instance.',
	'LBL_LOCALE_EXPORT'					=> 'Character Set for Importar/Exportar<br> <i>(Email, .csv, vCard, PDF, data import)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Export (.csv) Delimiter',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Importar/Exportar Settings',
	'LBL_LOCALE_LANG'					=> 'Default Language',
	'LBL_LOCALE_NAMEF'					=> 'Default Name Format',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = salutation<br />f = first name<br />l = last name',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Default Time Format',
	'LBL_LOCALE_TITLE'					=> 'Locale Settings',
    'LBL_CUSTOMIZE_LOCALE'              => 'Customize Locale Settings',
	'LBL_LOCALE_UI'						=> 'User Interface',

	'LBL_ML_ACTION'						=> 'Action',
	'LBL_ML_DESCRIPTION'				=> 'Description',
	'LBL_ML_INSTALLED'					=> 'Date Installed',
	'LBL_ML_NAME'						=> 'Name',
	'LBL_ML_PUBLISHED'					=> 'Date Published',
	'LBL_ML_TYPE'						=> 'Type',
	'LBL_ML_UNINSTALLABLE'				=> 'Uninstallable',
	'LBL_ML_VERSION'					=> 'Version',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL2'                        => 'SQL Server (FreeTDS)',
	'LBL_MSSQL_SQLSRV'				    => 'SQL Server (Microsoft SQL Server Driver for PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (mysqli extension)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Next',
	'LBL_NO'							=> 'No',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Setting site admin password',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'audit table / ',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Creating Sugar configuration file',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Creating the database</b> ',
	'LBL_PERFORM_CREATE_DB_2'			=> ' <b>on</b> ',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Creating the Database username and password...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Creating default Sugar data',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Creating the Database username and password for localhost...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Creating Sugar relationship tables',
	'LBL_PERFORM_CREATING'				=> 'creating / ',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Creating default reports',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Creating default scheduler jobs',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Inserting default settings',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Creating default users',
	'LBL_PERFORM_DEMO_DATA'				=> 'Populating the database tables with demo data (this may take a little while)',
	'LBL_PERFORM_DONE'					=> 'done<br>',
	'LBL_PERFORM_DROPPING'				=> 'dropping / ',
	'LBL_PERFORM_FINISH'				=> 'Finish',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Updating license information',
	'LBL_PERFORM_OUTRO_1'				=> 'The setup of Sugar ',
	'LBL_PERFORM_OUTRO_2'				=> ' is now complete!',
	'LBL_PERFORM_OUTRO_3'				=> 'Total time: ',
	'LBL_PERFORM_OUTRO_4'				=> ' seconds.',
	'LBL_PERFORM_OUTRO_5'				=> 'Approximate memory used: ',
	'LBL_PERFORM_OUTRO_6'				=> ' bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'Your system is now installed and configured for use.',
	'LBL_PERFORM_REL_META'				=> 'relationship meta ... ',
	'LBL_PERFORM_SUCCESS'				=> 'Success!',
	'LBL_PERFORM_TABLES'				=> 'Creating Sugar application tables, audit tables and relationship metadata',
	'LBL_PERFORM_TITLE'					=> 'Perform Setup',
	'LBL_PRINT'							=> 'Print',
	'LBL_REG_CONF_1'					=> 'Please complete the short form below to receive product announcements, training news, special offers and special event invitations from SugarCRM. We do not sell, rent, share or otherwise distribute the information collected here to third parties.',
	'LBL_REG_CONF_2'					=> 'Your name and email address are the only required fields for registration. All other fields are optional, but very helpful. We do not sell, rent, share, or otherwise distribute the information collected here to third parties.',
	'LBL_REG_CONF_3'					=> 'Thank you for registering. Click on the Finish button to login to SugarCRM. You will need to log in for the first time using the username "admin" and the password you entered in step 2.',
	'LBL_REG_TITLE'						=> 'Registration',
    'LBL_REG_NO_THANKS'                 => 'No Thanks',
    'LBL_REG_SKIP_THIS_STEP'            => 'Skip this Step',
	'LBL_REQUIRED'						=> '* Required field',

    'LBL_SITECFG_ADMIN_Name'            => 'Sugar Application Admin Name',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Re-enter Sugar Admin User Contraseña',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Caution: This will override the admin password of any previous installation.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Sugar Admin User Contraseña',
	'LBL_SITECFG_APP_ID'				=> 'Application ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'If selected, you must provide an application ID to override the auto-generated ID. The ID ensures that sessions of one Sugar instance are not used by other instances.  If you have a cluster of Sugar installations, they all must share the same application ID.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Provide Your Own Application ID',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'If selected, you must specify a log directory to override the default directory for the Sugar log. Regardless of where the log file is located, access to it through a web browser will be restricted via an .htaccess redirect.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Use a Custom Log Directory',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'If selected, you must provide a secure folder for storing Sugar session information. This can be done to prevent session data from being vulnerable on shared servers.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Use a Custom Session Directory for Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Please enter your site configuration information below. If you are unsure of the fields, we suggest that you use the default values.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Please fix the following errors before proceeding:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Log Directory',
	'LBL_SITECFG_SESSION_PATH'			=> 'Path to Session Directory<br>(must be writable)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Select Security Options',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'If selected, the system will periodically check for updated versions of the application.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Automatically Check For Updates?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Sugar Updates Config',
	'LBL_SITECFG_TITLE'					=> 'Site Configuration',
    'LBL_SITECFG_TITLE2'                => 'Identify Administration User',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Site Security',
	'LBL_SITECFG_URL'					=> 'URL of Sugar Instance',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Use Defaults?',
	'LBL_SITECFG_ANONSTATS'             => 'Send Anonymous Usage Statistics?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'If selected, Sugar will send <b>anonymous</b> statistics about your installation to SugarCRM Inc. every time your system checks for new versions. This information will help us better understand how the application is used and guide improvements to the product.',
    'LBL_SITECFG_URL_MSG'               => 'Enter the URL that will be used to access the Sugar instance after installation. The URL will also be used as a base for the URLs in the Sugar application pages. The URL should include the web server or machine name or IP address.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Enter a name for your system.  This name will be displayed in the browser title bar when users visit the Sugar application.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'After installation, you will need to use the Sugar admin user (default username = admin) to log in to the Sugar instance.  Enter a password for this administrator user. This password can be changed after the initial login.  You may also enter another admin username to use besides the default value provided.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Select collation (sorting) settings for your system. This settings will create the tables with the specific language you use. In case your language doesn\'t require special settings please use default value.',
    'LBL_SPRITE_SUPPORT'                => 'Sprite Support',
	'LBL_SYSTEM_CREDS'                  => 'System Credentials',
    'LBL_SYSTEM_ENV'                    => 'System Environment',
	'LBL_START'							=> 'Start',
    'LBL_SHOW_PASS'                     => 'Show Passwords',
    'LBL_HIDE_PASS'                     => 'Hide Passwords',
    'LBL_HIDDEN'                        => '<i>(hidden)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Choose your language</b>',
	'LBL_STEP'							=> 'Step',
	'LBL_TITLE_WELCOME'					=> 'Welcome to the SugarCRM ',
	'LBL_WELCOME_1'						=> 'This installer creates the SugarCRM database tables and sets the configuration variables that you need to start. The entire process should take about ten minutes.',
	'LBL_WELCOME_2'						=> 'For installation documentation, please visit the <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> You can also find help from the Sugar Community in the <a href="http://www.sugarcrm.com/forums/" target="_blank">Sugar Forums</a>.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Are you ready to install?',
    'REQUIRED_SYS_COMP' => 'Required System Components',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Before you begin, please be sure that you have the supported versions of the following system
                      components:<br>
                      <ul>
                      <li> Database/Database Management System (Examples: MySQL, SQL Server, Oracle, DB2)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Consult the Compatibility Matrix in the Release Notes for
                      compatible system components for the Sugar version that you are installing.<br>',
    'REQUIRED_SYS_CHK' => 'Initial System Check',
    'REQUIRED_SYS_CHK_MSG' =>
                    'When you begin the installation process, a system check will be performed on the web server on which the Sugar files are located in order to
                      make sure the system is configured properly and has all of the necessary components
                      to successfully complete the installation. <br><br>
                      The system checks all of the following:<br>
                      <ul>
                      <li><b>PHP version</b> &#8211; must be compatible
                      with the application</li>
                                        <li><b>Session Variables</b> &#8211; must be working properly</li>
                                            <li> <b>MB Strings</b> &#8211; must be installed and enabled in php.ini</li>

                      <li> <b>Database Support</b> &#8211; must exist for MySQL, SQL
                      Server, Oracle, or DB2</li>

                      <li> <b>Config.php</b> &#8211; must exist and must have the appropriate
                                  permissions to make it writeable</li>
					  <li>The following Sugar files must be writeable:<ul><li><b>/custom</li>
<li>/cache</li>
<li>/modules</li>
<li>/upload</b></li></ul></li></ul>
                                  If the check fails, you will not be able to proceed with the installation. An error message will be displayed, explaining why your system
                                  did not pass the check.
                                  After making any necessary changes, you can undergo the system
                                  check again to continue the installation.<br>',
    'REQUIRED_INSTALLTYPE' => 'Typical or Custom install',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    'After the system check is performed, you can choose either
                      the Typical or the Custom installation.<br><br>
                      For both <b>Typical</b> and <b>Custom</b> installations, you will need to know the following:<br>
                      <ul>
                      <li> <b>Type of database</b> that will house the Sugar data <ul><li>Compatible database
                      types: MySQL, MS SQL Server, Oracle, DB2.<br><br></li></ul></li>
                      <li> <b>Name of the web server</b> or machine (host) on which the database is located
                      <ul><li>This may be <i>localhost</i> if the database is on your local computer or is on the same web server or machine as your Sugar files.<br><br></li></ul></li>
                      <li><b>Name of the database</b> that you would like to use to house the Sugar data</li>
                        <ul>
                          <li> You might already have an existing database that you would like to use. If
                          you provide the name of an existing database, the tables in the database will
                          be dropped during installation when the schema for the Sugar database is defined.</li>
                          <li> If you do not already have a database, the name you provide will be used for
                          the new database that is created for the instance during installation.<br><br></li>
                        </ul>
                      <li><b>Database administrator user name and password</b> <ul><li>The database administrator should be able to create tables and users and write to the database.</li><li>You might need to
                      contact your database administrator for this information if the database is
                      not located on your local computer and/or if you are not the database administrator.<br><br></ul></li></li>
                      <li> <b>Sugar database user name and password</b>
                      </li>
                        <ul>
                          <li> The user may be the database administrator, or you may provide the name of
                          another existing database user. </li>
                          <li> If you would like to create a new database user for this purpose, you will
                          be able to provide a new username and password during the installation process,
                          and the user will be created during installation. </li>
                        </ul></ul><p>

                      For the <b>Custom</b> setup, you might also need to know the following:<br>
                      <ul>
                      <li> <b>URL that will be used to access the Sugar instance</b> after it is installed.
                      This URL should include the web server or machine name or IP address.<br><br></li>
                                  <li> [Optional] <b>Path to the session directory</b> if you wish to use a custom
                                  session directory for Sugar information in order to prevent session data from
                                  being vulnerable on shared servers.<br><br></li>
                                  <li> [Optional] <b>Path to a custom log directory</b> if you wish to override the default directory for the Sugar log.<br><br></li>
                                  <li> [Optional] <b>Application ID</b> if you wish to override the auto-generated
                                  ID that ensures that sessions of one Sugar instance are not used by other instances.<br><br></li>
                                  <li><b>Character Set</b> most commonly used in your locale.<br><br></li></ul>
                                  For more detailed information, please consult the Installation Guide.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Por favor, lea la siguiente información importante antes de continuar con la instalación.  La información te ayudará a determinar si estás o no preparado para instalar la aplicación en este momento.',

	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Selecciona tu idioma</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Asistente de Instalación',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Bienvenido a SugarCRM ',
	'LBL_WELCOME_TITLE'					=> 'Asistente de Instalación de SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Asistente de Instalación de Sugar: ',
	'LBL_YES'							=> 'Sí',
	'LBL_YES_MULTI'						=> 'Sí - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Procesar Tareas del Workflow',
	'LBL_OOTB_REPORTS'		=> 'Ejecutar Tareas Programadas de Generación de Informes',
	'LBL_OOTB_IE'			=> 'Comprobar Bandejas de Entrada',
	'LBL_OOTB_BOUNCE'		=> 'Ejecutar Proceso Nocturno de Correos de Campaña Rebotados',
	'LBL_OOTB_CAMPAIGN'		=> 'Ejecutar Proceso Nocturno de Campañas de Correo Masivo',
	'LBL_OOTB_PRUNE'		=> 'Truncar Base de datos al Inicio del Mes',
	'LBL_OOTB_TRACKER'		=> 'Limpiar Tablas de Monitorización',    
    
    'LBL_OOTB_SEND_EMAIL_REMINDERS'	=> 'Ejecutar Notificaciones de Recordatorio via Email',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualizar la tabla tracker_sessions',

	'LBL_PATCHES_TITLE'     => 'Instalar Los Últimos Parches',
    'LBL_MODULE_TITLE'      => 'Descargar e Instalar Paquetes de Idioma',
    'LBL_PATCH_1'           => 'Si deseas saltar este paso, haz clic en Siguiente.',
    'LBL_PATCH_TITLE'       => 'Parche del Sistema',
    'LBL_PATCH_READY'       => 'Los siguientes parches están listos para ser instalados:',
    
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM depende de las sesiones de PHP para almacenar información importante mientras que está conectado a tu servidor web. Tu instalación de PHP no tiene la información de Sesión correctamente configurada.
											<br><br>Un error de configuración bastante común es que la directiva <b>'session.save_path'</b> no apunte a un directorio válido.  <br>
											<br> Por favor, corrige tu <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>configuración PHP</a> en el archivo php.ini localizado donde se indica a continuación.",
	'LBL_SESSION_ERR_TITLE'				=> 'Error de Configuración de Sesiones PHP',
	
	'LBL_SYSTEM_NAME'=>'Nombre del Sistema',
    'LBL_COLLATION' => 'Collation Settings',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Introduce un Nombre de Sistema para la implementación de Sugar.',
	'LBL_PATCH_UPLOAD' => 'Selecciona un archivo de parche de tu equipo local',
	'LBL_INCOMPATIBLE_PHP_VERSION' => 'Se requiere la versión de PHP 5 o superior.',
	'LBL_MINIMUM_PHP_VERSION' => 'La versión mínima requerida de PHP es la 5.1.0. Se recomienda usar la versión de PHP 5.2.x.',
	'LBL_YOUR_PHP_VERSION' => '(Tu versión actual de PHP es ',
	'LBL_RECOMMENDED_PHP_VERSION' =>' La versión recomendada de PHP es la 5.2.x)',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'El modo de compatibilidad hacia atrás de PHP está habilitado. Establece zend.ze1_compatibility_mode en Off antes de continuar',



	
	
    'advanced_password_new_account_email' => array(
        'subject' => 'Información de la Nueva Cuenta',
        'description' => 'This template is used when the System Administrator sends a new password to a user.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Contraseña : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'
Here is your account username and temporary password:
Username : $contact_user_user_name
Contraseña : $contact_user_user_hash

$config_site_url

After you log in using the above password, you may be required to reset the password to one of your own choice.',
        'name' => 'System-generated password email',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Reset your account password',
        'description' => "This template is used to send a user a link to click to reset the user's account password.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'
You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.

Click on the link below to reset your password:

$contact_user_link_guid',
        'name' => 'Forgot Password email',
        ),
);

?>
