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
            $n = $_GET["num"]?$_GET["num"]:1;
            for($c=1;$c<=10;$c++) echo "$n X $c = ".($n*$c)."<br>";
        ?>
        <p>
            <a href="02index.php">
                <input type="button" value="Voltar" class="botao">
            </a>
        </p>
    </div>
</body>
</html>