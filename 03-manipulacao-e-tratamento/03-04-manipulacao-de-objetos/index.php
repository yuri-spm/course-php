<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arr_Profile =[
    "name" => "Yuri",
    "company" => "Helpx",
    "e-mail" => "helpx.suporte@gmail.com",

];

$objProfile =(object) $arr_Profile; $arr_Profile;

echo "<p>{$arr_Profile['name']} trabalha na {$arr_Profile['company']} </p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);
var_dump($ceo);

$company = new stdClass();
$company->company = "Helpx";
$company->ceo = $ceo;
$company->manager = new stdClass();
$company->manager->name = "Junior";
$company->manager->mail = "helpx.suporte@gmail.com";

var_dump($company);



/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump([
    "class" => get_class($date),
    "methods" => get_class_methods($date),
    "vars" => get_object_vars($date),
    "parent"=> get_parent_class($date),
    "subclass" => is_subclass_of($date, "DateTime"),
]);

$exception = new PDOException();

var_dump([
    "class" => get_class($exception),
    "methods" => get_class_methods($exception),
    "vars" => get_object_vars($exception),
    "parent"=> get_parent_class($exception),
    "subclass" => is_subclass_of($exception, "Execption"),
]);