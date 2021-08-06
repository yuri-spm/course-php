<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);

$folder = __DIR__."/uploads";
if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder, 0755);
}else{
    var_dump(
        scandir($folder),
    );
}

/*
 * [ copiar e renomear ] copy | rename
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

$file = __DIR__."/file.txt";
var_dump(
    pathinfo($file),
    scandir($folder),
    scandir(__DIR__),
);
if(!file_exists($file)||!is_file($file)){
    fopen($file, "w");
}else{
     //var_dump(filemtime($file), filemtime(__DIR__."/uploads/file.txt"));
    //copy($file, $folder."/".basename($file));
    //rename(__DIR__."/uploads/file.txt", __DIR__."/uploads/".time().".".pathinfo($file)["extension"] );
    rename($file,  __DIR__."/uploads/".time().".".pathinfo($file)["extension"]);
}
/*
 * [ remover e deletar ] unlink | rmdir
 */
fullStackPHPClassSession("remover e deletar", __LINE__);


$remove = __DIR__."/remove";
if(!file_exists($remove) || !is_dir($remove)){
    mkdir($remove, 0755);
}

//rmdir(__DIR__."/remove");
$dirRemove = __DIR__."/remove";
$dirFiles = array_diff(scandir($dirRemove),['.','..']);
$dirCount = count($dirFiles);

var_dump($dirFiles, $dirCount);

if($dirCount >=1){
    echo "<h3>Clear...</h3>";
    foreach(scandir($dirRemove) as $fileItem){
        $fileItem =__DIR__."/remove/{$fileItem}";
        if (file_exists($fileItem) && is_file($fileItem)){
            unlink($fileItem);
        }
    }
}else{
    rmdir($dirRemove);
}

