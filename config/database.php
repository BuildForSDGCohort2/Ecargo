


<?php
 $url = getenv('mysql://iyxg6whzentos83o:omy5fuavklvzg60m@sh4ob67ph9l80v61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/ngcpbqfxngcgaoqj');
$dbparts = parse_url($url);

$hostname = $dbparts['sh4ob67ph9l80v61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
$username = $dbparts['iyxg6whzentos83o'];
$password = $dbparts['omy5fuavklvzg60m'];
$database = ltrim($dbparts['ngcpbqfxngcgaoqj'],'/');

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_CLASS,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */



    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

   
    'useConfigForTesting' => false,
];
