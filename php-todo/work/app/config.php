<?php

session_start();

require(dirname(__FILE__) . '/db/dbconnect.php');
require(dirname(__FILE__) . '/functions.php');

define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

