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
            $num = $_GET["seleciona"];
            $cont = 1;
            while($cont<=10){
                echo "$num X $cont = ".($num*$cont)."<br>";
                $cont++;
            }
        ?>
        <p>
            <a href="tabuada1.php">
                <input type="button" value="Voltar" class="botao">
            </a>
        </p>
    </div>
</body>
</html>