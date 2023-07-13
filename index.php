<?php
require_once 'Database.php';
require_once 'Config.php';
require_once 'Validate.php';
require_once 'Input.php';

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

if (Input::exists()) {
    $validate = new Validate();

    $validation = $validate->check($_POST, [
        'username' => [
            'required' => true,
            'min' => 2,
            'max' => 15,
            'unique' => 'users'
        ],
        'password' => [
            'required' => true,
            'min' => 3
        ],
        'password_again' => [
            'required' => true,
            'matches' => 'password'
        ],
        'my_file' => [
                'file' => true
        ]
    ]);

    if ($validation->passed()) {
        echo 'passed';
    } else {
        foreach ($validation->errors() as $error) {
            echo $error . "<br>";
        }
    }
}
?>

<form action="" method="post">
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php echo Input::get('username')?>">
    </div>

    <div class="field">
        <label for="">Password</label>
        <input type="text" name="password">
    </div>

    <div class="field">
        <label for="">Password Again</label>
        <input type="text" name="password_again">
    </div>

    <input type="file" name="my_file">


    <div class="field">
        <button type="submit">Submit</button>
    </div>
</form>


