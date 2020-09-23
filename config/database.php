
// database.php

    'connections' => [

        'mysql' => [
            'driver'      => 'mysql',
            'host'        => env( 'DB_HOST', 'us-cdbr-east-02.cleardb.com' ),
            'port'        => env( 'DB_PORT', '3306' ),
            'database'    => env( 'DB_DATABASE', 'heroku_e090d535c0a387a' ),
            'username'    => env( 'DB_USERNAME', 'b0e251fa5d8501:4a552b36' ),
            'password'    => env( 'DB_PASSWORD', '4a552b36' ),
            'unix_socket' => env( 'DB_SOCKET', '' ),
            'charset'     => 'utf8mb4',
            'collation'   => 'utf8mb4_unicode_ci',
            'prefix'      => '',
            'strict'      => true,
            'engine'      => null,
            'modes'       => [
                'ONLY_FULL_GROUP_BY',
                'STRICT_TRANS_TABLES',
                'NO_ZERO_IN_DATE',
                'NO_ZERO_DATE',
                'ERROR_FOR_DIVISION_BY_ZERO',
                'NO_ENGINE_SUBSTITUTION',
            ],
        ],
    ],


