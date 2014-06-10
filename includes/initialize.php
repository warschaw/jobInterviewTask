<?php

// Define the core paths
// Define them as absolute paths to make sure that require_once works as expected

// DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for Windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Site Root
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'var'.DS.'www'.DS.'voxbeam');

// Includes
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// Classes
defined('CLASS_PATH') ? null : define('CLASS_PATH', SITE_ROOT.DS.'classes');

// load config file first
require_once (LIB_PATH.DS."config.php");

// load basic functions next so that everything after can use them
require_once (LIB_PATH.DS."functions.php");

// load core objects
require_once (LIB_PATH.DS."session.php");
require_once (LIB_PATH.DS."database.php");
require_once (LIB_PATH.DS."database_object.php");
require_once (LIB_PATH.DS."pagination.php");

// load database-related classes
require_once (CLASS_PATH.DS.'generateCDR.php');
require_once (CLASS_PATH.DS.'generateRates.php');
require_once (CLASS_PATH.DS.'rateUnrated.php');
require_once (CLASS_PATH.DS.'viewCDR.php');
require_once (CLASS_PATH.DS.'viewRates.php');


