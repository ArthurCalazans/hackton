<?php

include $_SERVER['DOCUMENT_ROOT'] . '/rally/config.php';

if($_GET['fase1'] == sha1('EUA')){
    $fase = 1;
    $de = 1;
    $ate = 4;
}elseif($_GET['fase1'] == sha1('SUICA')){
    $fase = 2;
    $de = 5;
    $ate = 8;
}elseif($_GET['fase1'] == sha1('ALEMANHA')){
    $fase = 3;
    $de = 9;
    $ate = 12;
}elseif($_GET['fase1'] == sha1('BRASIL')){
    $fase = 4;
    $de = 13;
    $ate = 16;
}elseif($_GET['fase1'] == sha1('AUSTRALIA')){
    $fase = 5;
    $de = 17;
    $ate = 20;    
}

$insert = "INSERT INTO fase_equipe SET id_equipe = '".$_SESSION['ID_EQUIPE']."', fase = '".$fase."';";