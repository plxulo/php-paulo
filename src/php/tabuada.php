<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline PHP?</title>
    <style>
        .verde {
            background: green;
        }
        .amarelo {
            background: yellow;
        }
    </style>
</head>
<body>
    <?php
        $resultado = (2+1) * 5;

        echo("
            O resultado foi:
            <br>
        ");

        $valor = $_POST["valor"];

        for($x=1; $x<=10; $x++) {
            if($x%2 == 0) {
            echo("<div class='verde'>");
            } else {
                echo("<div class='amarelo'>");
            }
            echo($valor*$x);
            echo("</div>");
            
        }
    ?>
</body>
</html>