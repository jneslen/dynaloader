<?php
define('DYNALOADER_ROOT', realpath(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR);

if(!defined('DOCROOT'))
{
	define('DOCROOT', dirname($_SERVER['DOCUMENT_ROOT']));
}

//"DEV", "BETA", "RC", "LIVE"
if(!defined('ENVIRONMENT'))
{
	define('ENVIRONMENT', 'DEV');
}

/**
 * The directory in which your application specific resources are located.
 *
 */
$application = 'app';

/**
 * The directory in which your modules are located.
 *
 */
$modules = 'modules';

/**
 * The default extension of resource files. If you change this, all resources
 * must be renamed to use the new extension.
 *
 */
if(!defined('EXT'))
{
	define('EXT', '.php');
}

