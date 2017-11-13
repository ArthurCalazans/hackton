<?php

include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/model/consultar_respostas.php';


include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/view/common/header.html';
echo '<body>';
include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/view/prova/respostas.html';
include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/view/common/bottom.html';
echo '</body>';


?>