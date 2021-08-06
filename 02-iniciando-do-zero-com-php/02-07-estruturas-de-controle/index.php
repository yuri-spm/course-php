<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = true;

if($test){
    var_dump(true);
}else{
    var_dump(false);
}


$age = 32;

if($age < 20){
    var_dump("Bandas Coloridas");
}elseif ($age > 20 && $age < 50){
    var_dump("Ótimas bandas");
}else{
    var_dump("Rock And Roll Raiz");
}
/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock ="";

//isset = verifica se existe 
if(isset($rock)){
    var_dump("Rock And Roll!");
}


if(!isset($rock)){
    var_dump("Rock And Roll!");
}else{
    var_dump("Die");
}


$rockAndRoll = "AC/DC";

//empty = não existe ou não esta vazia
if(!empty($rockAndRoll)){
    var_dump("Rock existe e toca {$rockAndRoll}");
}else{
    var_dump("Não existe ou não esta tocando");
}


/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment ="canceled";

switch ($payment){
    case "Billet_printed":
        var_dump("Boleto impresso!");
        break;
    case "Canceled":
        var_dump("Pagamento cancelado");
        break;
    case "past_due":
    case "pending":
        var_dump("Aguardando pagamento");
        break;
    case "approved":
    case "completed":
        var_dump("Pagamento aprovado");
        break;
    default:
        var_dump("Erro ao processar pagamento!");
        break;
};



