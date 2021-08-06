<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "NIRVANA",
    "Alter Bridge",
];

$assoc =[
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];
//adicionar um novo indice no incio
array_unshift($index, "", "Pearl Jam");

$assoc = ["band_4" => "Pearl Jam", "band_5" => ""] + $assoc;

array_push($index, "");
$assoc = $assoc + ["band_6" => ""];

//apaga o primeiro indice do array
array_shift($index);
array_shift($assoc);

//apaga o ultimo valor

array_pop($index);
array_pop($assoc);

//filtra valores

array_unshift($index, "");

$index = array_filter($index);
$assoc = array_filter($assoc);


var_dump(
    $index,
    $assoc
);


/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

//inverte o array
$index = array_reverse($index);
$assoc = array_reverse($assoc);

//ordem alfabetica
asort($index);
asort($assoc);
 
//ordenar por indice
ksort($index);
ksort($assoc);

//inverso indice
krsort($index);
ksort($assoc);

//ordenar os valores

sort($index);
sort($assoc);

//inverter valores

rsort($index);
rsort($assoc);


var_dump(
    $index,
    $assoc
);


/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);


//separar indice de valores

var_dump([
    array_keys($assoc),
    array_values($assoc)
]);

if(in_array("AC/DC", $assoc)){
    echo "<p>Cause I'm back!</p>";
}


$arrToString = implode (", ", $assoc);
echo "<p> Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString));
/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);


$profile =[
    "name" => "Yuri",
    "company" =>"UpInside",
    "mail" => "yuri.spm@gmail.com"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}<br>
        <a haref="mailto:{{mail}} title= "Enviar e-mail para {{name}}">Enviar E-mail</a></p>
    </article>

TPL;

echo $template;
echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile))."}}";

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);





















