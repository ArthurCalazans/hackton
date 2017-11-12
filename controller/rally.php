<html>
    <?php
    
    if (isset($_SESSION['ID_ALUNO'])) {
        include $root. '/controller/checkin.php';
        include $root. '/model/fase.php';
        include $root . '/view/rally/conteudo.html';
    } else {
        header('location:/hackton/rally/');
    }
    ?>
</html>
