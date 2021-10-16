<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visibilidade em Objetos PHP</title>
</head>
<body>
    <?php
        include_once 'Caneta.php';
        
        $c1 = new Caneta();
        $c1->modelo = "Bic";
        var_dump($c1);
    ?>
</body>
</html>