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
            function soma ($a,$b){
                #$s = $a + $b;
                return $a + $b;
            }
            $x = 3;
            $y = 8;
            $r = soma($x,$y);
            echo " A soma entre $x e $y é = $r";
        ?>
    </div>
</body>
</html>