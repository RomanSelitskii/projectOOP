<?php
require_once 'Database.php';
require_once 'Config.php';

$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'test',
        'something' => [
            'no'=> [
                'foo' => [
                    'bar' => 'baz'
                ]
            ],
        ]
    ],

    'config_my' => []
];

//$users = Database::getInstance()->query("SELECT * FROM users WHERE username IN (?, ?)", ['John Doe', "Jane Koe"]);
//$users = Database::getInstance()->get('users', ['password', '=', "password"]);
//$users = Database::getInstance()->delete('users', ['username', '=', "Jane Koe"]);


//$users = Database::getInstance()->get('users', ['id', '=', "3"]);
//var_dump($users->results()[0]);
//$id = 3;
//$users = Database::getInstance()->update('users', $id, [
//    'username' => 'Marlin5',
//    'password' => 'password5',
//
//]);


//if ($users->error()) {
//    echo "we have an error";
//} else {
//    foreach ($users->results() as $user) {
//        echo $user->username . '<br>';
//    }
//}

//echo $users->first()->username;

$users = Database::getInstance()->query('select * from users');
var_dump($users->results());



