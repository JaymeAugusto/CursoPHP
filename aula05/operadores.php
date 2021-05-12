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
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            $m = ($n1 + $n2) / 2;
            echo "A soma vale ".($n1+$n2);
            echo "<br>A sub vale ".($n1-$n2);
            echo "<br>A mult vale ".($n1*$n2);
            echo "<br>A div vale ".($n1/$n2);
            echo "<br>A mod vale ".($n1%$n2);
            echo "<br>A media vale $m";
        ?>
    </div>
    
</body>
</html>