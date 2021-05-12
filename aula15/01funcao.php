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
            function teste(&$x){
                $x+=2;
                echo "<p>O valor de X e $x</p>";
            }

            $a = 3;
            teste($a);
            echo "<p>O valor de A e $a</p>";
        ?>
    </div>
</body>
</html>