<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 14 - PHP POO - Projeto Final</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Video.php';
        require_once 'Gafanhoto.php';

        $videos[0] = new Video("Aula 1");
        $videos[2] = new Video("Aula 2");
        $videos[3] = new Video("Aula 3");

        $pessoa[0] = new Gafanhoto("Roberto", 22, "M", "Robertin");
        $pessoa[1] = new Gafanhoto("Claudia", 14, "F", "Claudia_002");
        $pessoa[2] = new Gafanhoto("Nando", 38, "M", "885647899");

        print_r($videos);
        echo "<br>";
        print_r($pessoa);
    ?>
    </pre>
</body>
</html>