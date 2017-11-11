<?php

include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/config.php';

if (is_numeric($_POST['ra_lider']) and is_numeric($_POST['ra1']) and is_numeric($_POST['ra2'])) {

    $insert['equipe'] = "INSERT INTO cad_equipe SET ";
    $insert['equipe'] .= "equipe = '" . $_POST['nome_equipe'] . "'";
    $result = $mysqli->query($insert['equipe']);
    if ($result) {
        $id_equipe = $mysqli->insert_id;
        $insert['aluno'] = "INSERT INTO cad_aluno SET ";
        $insert['aluno'] .= "nome = '" . $_POST['nome_lider'] . "',";
        $insert['aluno'] .= "ra = '" . $_POST['ra_lider'] . "',";
        $insert['aluno'] .= "senha = '" . $_POST['password'] . "',";
        $insert['aluno'] .= "lider = '1',";
        $insert['aluno'] .= "id_equipe = '" . $id_equipe . "'";

        $result = $mysqli->query($insert['aluno']);
        if ($result) {
            $insert['aluno'] = "INSERT INTO cad_aluno SET ";
            $insert['aluno'] .= "nome = '" . $_POST['nome1'] . "',";
            $insert['aluno'] .= "ra = '" . $_POST['ra1'] . "',";
            $insert['aluno'] .= "lider = '0',";
            $insert['aluno'] .= "id_equipe = '" . $id_equipe . "'";

            $result = $mysqli->query($insert['aluno']);
            if ($result) {
                $insert['aluno'] = "INSERT INTO cad_aluno SET ";
                $insert['aluno'] .= "nome = '" . $_POST['nome2'] . "',";
                $insert['aluno'] .= "ra = '" . $_POST['ra2'] . "',";
                $insert['aluno'] .= "lider = '0',";
                $insert['aluno'] .= "id_equipe = '" . $id_equipe . "'";

                $result = $mysqli->query($insert['aluno']);
                if ($result) {
                    $retorno = ['return' => true, 'mensagem' => 'Cadastro Realizado Com Sucesso'];
                } else {
                    $retorno = ['return' => false, 'mensagem' => $mysqli->error];
                }
            } else {
                $retorno = ['return' => false, 'mensagem' => $mysqli->error];
            }
        } else {
            $retorno = ['return' => false, 'mensagem' => $mysqli->error];
        }
    } else {
        $retorno = ['return' => false, 'mensagem' => $mysqli->error];
    }
} else {
    $retorno = ['return' => false, 'mensagem' => "RA INVALIDO"];
}
echo json_encode($retorno);
