<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>abc</title>
</head>
<body>
    <div>
        <?php
            $t = "Aqiu temos um texto gigante criado por PHP e vai mostrar o funcionamento da funcao wordwrap ";
            $r = wordwrap($t,5,"<br>\n",true);
            echo $r;
        ?>
    </div>
</body>
</html>