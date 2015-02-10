<?php defined('DYNALOADER_ROOT') OR die('No direct script access.');

class Dynaloader
{
	// Release version and codename
	const VERSION  = '0.1';
	const CODENAME = 'tenchi';

	const PRODUCTION = 10;
	const STAGING = 20;
	const TESTING = 30;
	const DEVELOPMENT = 40;

	const FILE_CACHE = ":header \n\n// :name\n\n:data\n";

	/**
	 * @var  string  Current environment name
	 */
	public static $environment = Dynaloader::DEVELOPMENT;

	/**
	 * @var  boolean true if running on windows
	 */
	public static $is_windows = false;

	/**
	 * @var  boolean  Has [Dynaloader::init] been called?
	 */
	protected static $_init = false;

	/**
	 * @var  array   Include paths that are used to find files
	 */
	protected static $_paths = array(APPPATH, SYSPATH);


}