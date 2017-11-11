<html>
    <?php
    
    if (isset($_SESSION['ID_ALUNO'])) {
        include $root . '/view/rally/conteudo.html';
    } else {
        header('location:/hackton/rally/');
    }
    ?>
</html>
