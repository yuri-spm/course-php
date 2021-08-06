<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirseName ="Yuri";
$userLastName ="Monte";
$userAge = "32";

echo "{$userFirseName} {$userLastName} tem {$userAge} anos";

//variavel variavel

$company = "UpInside";
$$company = "Treinamento";

echo "<h3> {$company} {$UpInside}</h3>";

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge > 50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;
var_dump($a, $b, $c, $d, $e);
if($a || $b ||$c || $d || $e ) {
    var_dump(true);
}else{
    var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function</h1></article>";
$codClear = call_user_func("strip_tags", $code);
var_dump($code, $codClear);

$codeMore = function($code){
    var_dump($code);
};

$codeMore("#BoraProgramar!");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Ola mundo";
$array = [$string];
$object = new stdClass();
$object-> hello = $string;
$null = null;
$int = 1234;
$float = 1.27344;

var_dump(
    [
        $string,
        $array,
        $object,
        $null,
        $int,
        $float
    ]);
