<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p[0] = new Pessoa('Claudio', 25, "M");
        $p[1] = new Aluno("Mirela", 15, "F", "001", "ADM");
        $p[2] = new Professor("André", 35, "M", "Banco de Dados", 4587.63);
        $p[3] = new Funcionario("Maria", 20, "F", "Recepção", false);

        foreach($p as $pessoa) {
            print_r($pessoa);
        }
    ?>
    </pre>
</body>
</html>