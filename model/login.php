<?php

include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/config.php';

$select = "SELECT * FROM cad_aluno WHERE "
        . "ra = '" . $_POST['ra'] . "' "
        . "and senha = '" . sha1($_POST['password']) . "'";
$result = $mysqli->query($select);
if ($result->num_rows > 0) {
    $coluna = $result->fetch_object();
    //var_dump($result);
    session_start();

    $_SESSION['ID_ALUNO'] = $coluna->id_aluno;
    $_SESSION['RA'] = $coluna->ra;
    $_SESSION['NOME'] = $coluna->nome;
    $_SESSION['DTAHORA'] = date('d/m/Y H:i:s');
    $_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];

    $return = ['return' => true, 'mensagem' => "Seja bem vindo ao rally"];
} else {
    $return = ['return' => false, 'mensagem' => "RA ou Senha invalido"];
}
echo json_encode($return);
