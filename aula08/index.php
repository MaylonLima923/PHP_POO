<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregação entre Objetos em PHP</title>
</head>
<body>
    <pre>
    <?php
        include_once 'Luta.php';
        include_once 'Lutador.php';

        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 1, 2);
        $l[1] = new Lutador("Put Script", "Brasil", 29, 1.68, 57.8, 14, 3, 2);
        $l[2] = new Lutador("Snap  Shadow", "EUA", 35, 1.65, 80.9, 12, 0, 2);
        $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 2, 0);
        $l[4] = new Lutador("UfoCobol", "Brasil", 37, 1.70, 119.3, 5, 3, 4);
        $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 4, 2);
    
        $uec01 = new Luta();

        var_dump($uec01);
        $uec01->marcarLuta($l[0], $l[1]);
        $uec01->lutar();

        $l[0]->status();
        $l[1]->status();
    ?>
    </pre>
</body>
</html>