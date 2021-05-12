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
            $num = $_GET["num"]?$_GET["num"]:1;
            echo "<h1>Analizando o número $num...</h1>";
            echo "Valores Múltiplos: ";
            $cont = 0;
            $resp;
            for($i=1;$i<=$num;$i++){
                if($num%$i==0){
                    echo "$i ";
                    $cont++;
                }
            }
            if($cont==2) $resp = "É PRIMO!";
            else $resp = "NÃO É PRIMO!";
            echo "<h3>Total de múltiplos: $cont";
            echo "<h3>Resultado: $num <span>$resp</span>";
        ?>
        <p>
            <a href="primo1.php">
                <input type="button" value="Voltar" class="botao">
            </a>
        </p>
    </div>
</body>
</html>