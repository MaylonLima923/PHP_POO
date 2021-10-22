<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Herança em PHP - Parte 2</title>
</head>
<body>
    <?php
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';

        $p[0] = new Visitante();
        $p[1] = new Aluno();
        $p[2] = new Bolsista();

        foreach ($p as $pessoa) {
            print_r($pessoa);
        }
    ?>
</body>
</html>