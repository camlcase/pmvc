<?php
/**
 * Basic configuration for pMVC.
 */

// Site layout used by the View class
define('LAYOUT', 'Views/Shared/_Layout.phtml');

// Database (optional)
// (These constants are used by the Database class, 
//  but is not needed to get pMVC up and running.)
define('DB_HOSTNAME', 'localhost');
define('DB_PORT', '3307');
define('DB_DATABASE', 'pmvc');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

// Path of this application, other than server root
if (!defined('APPLICATION_URI'))
    define('APPLICATION_URI', '/pmvc');