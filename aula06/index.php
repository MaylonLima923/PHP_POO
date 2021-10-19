<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 06 - Pilares da POO: Encapsulamento</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <?php
        require_once 'ControleRemoto.php';
        
        $c1 = new ControleRemoto();

        $c1->maisVolume();
        $c1->abrirMenu();
    ?>
</body>
</html>