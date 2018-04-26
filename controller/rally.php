<html>
    <?php
    if (isset($_SESSION['ID_ALUNO'])) {
        include $root . 'controller/checkin.php';
        include $root . 'model/fase.php';
        if (isset($_GET['fase1'])) {
            include $root . 'view/common/header.html'
    ?>
            <body>
                <?php include $root . 'controller/perguntas.php'; ?>
                <?php include $root . 'view/common/bottom.html' ?>
            </body>
    <?php
        } else {
            include $root . 'view/rally/conteudo.html';
        }
    } else {
        header('location:/rally/');
    }
    ?>
</html>
