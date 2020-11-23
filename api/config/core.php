<?php
// show error reporting
error_reporting(E_ALL);
 
// set your default time-zone
date_default_timezone_set('Europe/Zagreb');
 
// variables used for jwt
$key = "example_key";
$iss = "https://api2.mycodes4you.com/";
$aud = "https://api2.mycodes4you.com/";
$iat = 1356999524;
$nbf = 1357000000;
?>