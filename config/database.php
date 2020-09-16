


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

    'default' => 'mysql',

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

    'connections' => [

       
        
        
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'sh4ob67ph9l80v61.cbetxkdyhwsb.us-east-1.rds.amazonaws.com',
            'port'      => 3306,
            'database'  => 'ngcpbqfxngcgaoqj',
            'username'  => 'iyxg6whzentos83o',
            'password'  => 'omy5fuavklvzg60m',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
        ],



    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk have not actually be run in the databases.
    |
    */

    'migrations' => 'migrations',

   
    |--------------------------------------------------------------------------
    | Use DB configuration for testing
    |--------------------------------------------------------------------------
    |
    | When running plugin tests OctoberCMS by default uses SQLite in memory.
    | You can override this behavior by setting `useConfigForTesting` to true.
    |
    | After that OctoberCMS will take DB parameters from the config.
    | If file `/config/testing/database.php` exists, config will be read from it,
    | but remember that when not specified it will use parameters specified in
    | `/config/database.php`.
    |
    */

    'useConfigForTesting' => false,
];
