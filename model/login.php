<?php

include $_SERVER['DOCUMENT_ROOT'] . '/rally/config.php';

$select = "SELECT * FROM cad_aluno a "
        . "INNER JOIN cad_equipe e on (a.id_equipe=e.id_equipe) WHERE "
        . "ra = '" . $_POST['ra'] . "' "
        . "and senha = '" . sha1($_POST['password']) . "'";
$result = $mysqli->query($select);
if ($result->num_rows > 0) {
    $coluna = $result->fetch_object();
    session_start();

    $_SESSION['ID_ALUNO'] = $coluna->id_aluno;
    $_SESSION['ID_EQUIPE'] = $coluna->id_equipe;
    $_SESSION['EQUIPE'] = $coluna->equipe;
    $_SESSION['RA'] = $coluna->ra;
    $_SESSION['NOME'] = $coluna->nome;
    if (isset($coluna->agrupamento) and ( $coluna->agrupamento > 0)) {
        $_SESSION['AGRUPAMENTO'] = $coluna->agrupamento;
    } else {
        include $_SERVER['DOCUMENT_ROOT'] . '/rally/model/agrupamento.php';        
    }
    $_SESSION['DTAHORA'] = date('d/m/Y H:i:s');
    $_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['LOGIN'] = true;
    $_SESSION['CHECKIN'] = false;
    $_SESSION['EUA'] = false;
    $_SESSION['SUICA'] = false;
    $_SESSION['ALEMANHA'] = false;
    $_SESSION['BRASIL'] = false;
    $_SESSION['AUSTRALIA'] = false;

    $return = ['return' => true, 'mensagem' => "Seja bem vindo ao rally"];
} else {
    $return = ['return' => false, 'mensagem' => "RA ou Senha invalido"];
}
echo json_encode($return);
