<?php

require_once 'init.php';

//echo Session::get(Config::get('session.user_session'));

$user = new User;

$anotherUser = new User(6);

if ($user->isLoggegIn()) {
    echo "Hi, <a href='#'>{$user->data()->username}</a>";
    echo "<p><a href='logout.php'>Logout</a></p>";
} else {
    echo "<a href='login.php'>Login</a> or <a href='register.php'>Register</a>";
}
//echo $user->data()->username;
//echo $anotherUser->data()->username;
//if ($user->isLoggedIn()) {
//    //
//} else {
//    //
//}
//Redirect::to('test.php');
//Redirect::to(404);

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

//$users = Database::getInstance()->query('select * from users');




