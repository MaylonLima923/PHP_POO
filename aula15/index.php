<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 15 - PHP POO - Projeto Final</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

        $videos[0] = new Video("Aula 1");
        $videos[1] = new Video("Aula 2");
        $videos[2] = new Video("Aula 3");

        $pessoa[0] = new Gafanhoto("Roberto", 22, "M", "Robertin");
        $pessoa[1] = new Gafanhoto("Claudia", 14, "F", "Claudia_002");
        $pessoa[2] = new Gafanhoto("Nando", 38, "M", "885647899");

        $vis[0] = new Visualizacao($pessoa[0], $videos[1]);
        $vis[1] = new Visualizacao($pessoa[0], $videos[0]);

        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);

        print_r($vis);
    ?>
    </pre>
</body>
</html>