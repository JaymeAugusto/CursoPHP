<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title></title>
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";
            echo "O conteudo da variavel x é $x";
            echo "<br>A variavel ABC recebeu o valor $abc";
        ?>
    </div>
</body>
</html>