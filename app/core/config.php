<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{ //for the local version
    /**database config**/
    define('DBNAME', '');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');

    define('ROOT', 'http://localhost/GramaLink/public');
}else 
{ //for the online version
    /**database config**/
    define('DBNAME', '');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    
    define('ROOT', 'http://www.websitename.com');
}

define('APP_NAME', 'Grama-Link');
define('APP_DESCRIPTION', 'Grama Niladhari Services Management System');

define('DEBUG', true); //true -> show errors 