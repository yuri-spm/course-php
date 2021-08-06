<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

 
/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__."/file.txt";

if(file_exists($file)&& is_file($file)){
    echo "<p>Existe</p>";
}else{
    echo "<p>Não existe!</p>";
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

if(!file_exists($file)|| !is_file($file)){
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen,"Linha 01".PHP_EOL);
    fwrite($fileOpen,"Linha 02".PHP_EOL);
    fwrite($fileOpen,"Linha 03".PHP_EOL);
    fwrite($fileOpen,"Lorem Ipsum is simply dummy text of the printing and typesetting industry.".PHP_EOL);
    fclose($fileOpen);

}else{
    var_dump(
        file($file),
        pathinfo(($file))
    );
}
echo "<p>",file($file)[3],"</p>";

$open =fopen($file,"r");
while(!feof($open)){
    echo "<p>".fgets($open)."</p>";
}
fclose($open);
/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__."/teste2.txt";
if(file_exists($getContents) && is_file($getContents)){
    echo file_get_contents($getContents);
}else{
    $data="<article><h1>Robson</h1><p>CEO UpInside<br>cursos@upinside.com.br</p></article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}
if(file_exists(__DIR__."/teste3.txt") && is_file(__DIR__."/teste3.txt")){
    unlink(__DIR__."/teste3.txt");

}