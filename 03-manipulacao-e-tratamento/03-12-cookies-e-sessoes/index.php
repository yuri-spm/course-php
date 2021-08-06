<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.12 - Cookies e sessões");

/*
 * [ cookies ] http://php.net/manual/pt_BR/features.cookies.php
 */
fullStackPHPClassSession("cookies", __LINE__);

var_dump($_COOKIE);

setcookie('fsphp', "Esse e omeu cookie", time()+10);
//setcookie("fsphp",null, time()-60)

$cookie = filter_input_array(INPUT_COOKIE, FILTER_SANITIZE_STRIPPED);

var_dump(
    $_COOKIE,
    $cookie
);

$time = time() + 60 * 60 *24 * 7;
$user = [
    "user" => "root",
    "passwd" => "1234",
    "expire" => $time
];

setcookie(
    "fslogin",
    http_build_query($user),
    $time,
    "/",
    "www.localhost",
    true

);

$login = filter_input(INPUT_COOKIE, "fslogin", FILTER_SANITIZE_STRIPPED);
if($login){
 var_dump($login);
 parse_str($login, $user);
 var_dump($user);
}


/*
 * [ sessões ] http://php.net/manual/pt_BR/ref.session.php
 */
fullStackPHPClassSession("sessões", __LINE__);

session_save_path(__DIR__."/sess");
session_name("FSPHPSESSID");
session_start([
    "cokkie_lifetime" => (60 * 60 * 24)
]);

var_dump(
    [
        "id" => session_id(),
        "name" => session_name(),
        "status" => session_status(),
        "save_path" =>session_save_path(),
        "cokkie" => session_get_cookie_params()
    ]
);

$_SESSION['login'] = (object) $user;
$_SESSION['user'] = $user;
//unset($_SESSION['user]);
var_dump($_SESSION['user']);

session_destroy();

var_dump($_SESSION);
