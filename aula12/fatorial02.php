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
            $v = $_GET["val"]?$_GET["val"]:1;
            echo "<h1> Calculando o Fatorial de $v";
            $c = $v;
            $fat = 1;
            do{
                $fat*=$c;
                $c--;
            }while($c>=1);
            echo "<h2> $v! = $fat";
        ?>
        <p>
            <a href="fatorial01.html">
                <input type="button" value="Voltar" class="botao">
            </a>
        </p>    
    </div>
</body>
</html>