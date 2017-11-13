<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/config.php';
foreach ($_POST as $a) {
    $resposta[] = $a;
}
for ($i = 0; $i < count($resposta); $i++) {
    $insert = "INSERT INTO resposta_equipe SET "
            . "id_equipe = '" . $_SESSION['ID_EQUIPE'] . "', id_resposta = '" . $resposta[$i] . "';";

    $result = $mysqli->query($insert);
    if (!$result) {
        $erro = $mysqli->error;
    }
}
if (!isset($erro)) {
    //$_SESSION['']
    $retorno = ['return' => true, 'mensagem' => "Perguntas Respondidas, vamos pra próxima!"];
} else {
    $retorno = ['return' => false, 'mensagem' => $erro];
}
echo json_encode($retorno);