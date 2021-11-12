<?php
declare(strict_types=1);

class  DatabaseLoader
{
    public function openConnection(): PDO
    {
        $dbhost = "localhost";
        $dbuser = DB_USER;
        $dbpass = DB_PASS;
        $db = DB_NAME;

        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
    }


}


