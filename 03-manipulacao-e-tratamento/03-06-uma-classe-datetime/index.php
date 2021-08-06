<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define ("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime;
$dateBirth = new DateTime("1991-09-07");
$dateStatic = DateTime::createFromFormat(DATE_BR, "10/03/2020 12:00:00");
var_dump(
    $dateNow,
    $dateBirth,
    $dateStatic
);

var_dump([
    $dateNow->format(DATE_BR),
    $dateNow->format("d"),
]);

echo "<p>Hoje e dia {$dateNow->format("d")} do {$dateNow->format("m")} de {$dateNow->format("Y")} </p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    $newTimeZone,
    $newDateTime,
    $dateNow
]);



/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateNowInterval = new DateInterval("P10Y2MT10M");
var_dump($dateNowInterval);
$dateTime = new DateTime("now");
$dateTime->add($dateNowInterval);
$dateTime->sub($dateNowInterval);

var_dump(
    $dateTime,
);

$birth = new DateTime(date("Y")."09-07");
$dateNow = new DateTime("now");
$diff = $dateNow->diff($birth);

var_dump(
    $birth,
    $diff,
);

if($diff->invert){
    echo "<p>Seu aniversário foi a {$diff->days}";
}else{
    echo "<p>Faltam  {$diff->days}para seu aniversário</p>"; 
}

$dateResources = new DateTime("now");
var_dump([
    $dateResources->format(DATE_BR),
    $dateResources->sub(DateInterval ::createFromDateString("10days"))->format(DATE_BR),
    $dateResources->add(DateInterval ::createFromDateString("30days"))->format(DATE_BR),
]);




/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$interval = new DateInterval("P1M");
$end = new DateTime("2020-01-01");

$period= new DatePeriod($start, $interval, $end);

var_dump([
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR)

],$period, get_class_methods($period));


//corrigir essa parte
echo "<h1>Sua assinatura:</h1>";
foreach($period as $recurrences){
    var_dump($recurrences);
    die;
    echo "<p>Proximo vencimento {$recurrences->format(DATE_BR)}</p>";
}



