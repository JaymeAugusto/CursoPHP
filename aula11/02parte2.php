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
            $i = 1;
            while($i<=5){
                $v = "num".$i;
                $aux = "v".$i;
                $$v = isset($_GET[$aux])?$_GET[$aux]:0;
                $i++;
            }
            $i = 1;
            while($i<=5){
                $v = "num".$i;
                echo "Valor $i: ". $$v . "<br>";
                $i++;
            }
        ?>
    </div>
</body>
</html>