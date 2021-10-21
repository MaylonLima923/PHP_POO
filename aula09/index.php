<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercicios práticos em PHP</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $p[0] = new Pessoa("Maylon", 17, 'Masculino');
        $p[1] = new Pessoa("Claudia", 35, 'Feminino');

        $l[0] = new Livro("O luar", "Roberto Miranda", 75, $p[0]);
        $l[1] = new Livro("Resplandecer", "André Pedro", 91, $p[1]);
        $l[2] = new Livro("Alvorecer de Esperança", "Claudio Andrade", 325, $p[0]);

        foreach ($l as $livro) {
            $livro->detalhes();
            echo "<hr>";
        }
    ?>
    </pre>
</body>
</html>