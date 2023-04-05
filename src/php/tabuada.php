<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline PHP?</title>
</head>
<body>
    <?php
        $nome = "Maicol do SENAI";
        $resultado = (2+1) * 5;
        echo("
            Linha 1
            <br>
            Linha 2
            <br>
            Meu nome é $nome
            <br>
            O resultado foi: $resultado
        ")
    ?>
</body>
</html>