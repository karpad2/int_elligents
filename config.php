<?php
date_default_timezone_set('Europe/Belgrade');

$start_of_build=microtime(true);

define("Websitename","Alma");

session_start();

if(defined("secret") and secret=="mikroci") {
    define("host", "localhost");
    define("user", "root");
    define("password", "");
    define("db","db");

    $conn=mysqli_connect(host,user,password,db) or mysqli_error($conn);

    function salting($string)
    {
        define("salt","asdfghjkl");
        return md5(salt.$string.salt);
    }

    function esc_str($string)
    {
        global $conn;
        return mysqli_escape_string($conn,$string);
    }


}