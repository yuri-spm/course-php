<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string = "O último show do AC/DC foi incrível!";
var_dump([
    "string" => $string,
    "strlen" => strlen($string),
    "mb_strlen"=> mb_strlen($string),
    "substr" => substr($string, "9"),
    "mb_substr"=> mb_substr($string, "9"),
    "strupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string)
    ]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString =$string;
var_dump([
    "mb_strtoupper" => mb_strtoupper($mbString),
    "mb_strtolower" => mb_strtolower($mbString),
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_LOWER),
    "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE)
]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);
$mb_Replace =$mbString . " Fui, iria novamente, e foi épico!";
var_dump([
 
    "mb_strlen" => mb_strlen($mb_Replace),
    "mb_strpos" => mb_strpos($mb_Replace, ', '),
    "mb_strrpos" => mb_strrpos($mb_Replace, ","),
    "mb_substr" => mb_substr($mb_Replace, 40+2, 14),
    "mb_strstr" => mb_strstr($mb_Replace, "," , true),
    "mb_strlen" => mb_strstr($mb_Replace, ",", true),
    "mb_strlen" => mb_strrchr($mb_Replace, ",", true),

]);


$mbStrReplace = $string;

echo "<p>",$mbStrReplace,"</p>";
echo "<p>", str_replace(["AC/DC","eu fui", "ultimo"], "Nirvana", $mbStrReplace),"</p>";
echo "<p>", str_replace("AC/DC" , "Nirvana", $mbStrReplace),"</p>";
echo "<p>", str_replace(["AC/DC","incrível"] , ["Nirvana", "ÉPICOO!!!"], $mbStrReplace),"</p>";

$article = <<< ROCK

    <article>
        <h3>event</h3>
        <h3>desc</h3>
    </article>
ROCK;

$articleData =[
    "event" => "Rock in Rio",
    "desc" => $mbStrReplace
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);



/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endPoint = "name=Robson&email=curso#upinside.com.br";
mb_parse_str($endPoint, $parseEndPoint);

var_dump([
    $endPoint,
    $parseEndPoint,
    (object) $parseEndPoint
]);