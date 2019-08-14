<?php

define("DEBUG",true);

define('DB_NAME','mvc_php'); //database name
define('DB_USER','root'); //database username
define('DB_PASSWORD',''); //database password
define('DB_HOST','127.0.0.1'); //database host *** use IP Address to avoid DNS Lookup 

define("DEFAULT_CONTROLLER","Home"); // DEFAULT_CONTROLLER if there isn't one defined in the url

define("DEFAULT_LAYOUT","default"); // if no layout is set in the controller use this layout 

define("PROOT","/mvc_php/"); //set this to "/" for live server.

define("SITE_TITLE","MVC_PHP framework"); // this will be used if no site title is set