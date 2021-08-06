<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");
//funcao anonima

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function($year){
    $age = date ("Y") -$year;
    return "<p>Você tem {$age} anos</p>";
};
echo $myAge(1986);
echo $myAge(1991);


$priceBrl = function($price){
    return number_format($price, 2, ",", ".");

};
echo "<p>O projeto custa {$priceBrl(36000)}. Vamos fechar!";


$myCart = [];
$myCart["totalPrice"]=0;
$cardAdd = function($item, $qtd, $price) use (&$myCart){
    $myCart[$item]= $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};


$cardAdd("HTML5", 1, 497);
$cardAdd("jQuery", 2, 497);


var_dump($myCart, $cardAdd);


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);


$iterator = 100;
//-------------------------------MANEIRA ERRADA-------------------------
function showDates($days){
    $saveDate = [];
    for($day=1; $day < $days; $day++){
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;

}



echo "<div style='text-align: center'>";
foreach(showDates(0) as $date ){
    echo"<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";


//----------------------------MANEIRA CORRETA--------------------------------------

function generatorDate($days){
    for($day=1; $day < $days; $day++){
        yield  date("d/m/Y", strtotime("+{$day}days"));
    }
   
}
echo "<div style='text-align: center'>";
foreach(generatorDate($iterator) as $date ){
    echo"<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";