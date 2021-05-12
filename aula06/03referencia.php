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
            $a =3;
            $b = &$a;
            $b += 5;
            echo " Variavel A vale $a";
            echo "<br> A variavel b vale $b";
        ?>
    </div>
</body>
</html>