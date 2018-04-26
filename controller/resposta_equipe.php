<?php

include $_SERVER['DOCUMENT_ROOT'] . '/rally/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/rally/model/consultar_respostas.php';


include $_SERVER['DOCUMENT_ROOT'] . '/rally/view/common/header.html';
echo '<body>';
include $_SERVER['DOCUMENT_ROOT'] . '/rally/view/prova/respostas.html';
include $_SERVER['DOCUMENT_ROOT'] . '/rally/view/common/bottom.html';
echo '</body>';


?>