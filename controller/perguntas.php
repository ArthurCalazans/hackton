<?php

    $_SESSION['FASE1'] = TRUE;
include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/config.php';
$mysqli->set_charset('utf8');
if ($_GET['fase1'] == sha1('EUA')) {
    $fase = 1;
    $de = 1;
    $ate = 4;
} elseif ($_GET['fase1'] == sha1('SUICA')) {
    $fase = 2;
    $de = 5;
    $ate = 8;
} elseif ($_GET['fase1'] == sha1('ALEMANHA')) {
    $fase = 3;
    $de = 9;
    $ate = 12;
} elseif ($_GET['fase1'] == sha1('BRASIL')) {
    $fase = 4;
    $de = 13;
    $ate = 16;
} elseif ($_GET['fase1'] == sha1('AUSTRALIA')) {
    $fase = 5;
    $de = 17;
    $ate = 20;
}

include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/model/selecionar_perguntas.php';

include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/view/prova/perguntas.html';
?>