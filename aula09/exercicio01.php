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
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Voe nasceu em $a e tem $i anos<br>";
            if($i >= 18){
                $v = "Já pode votar";
                $d = "Já pode dirigir";
            }else{
                $v = "Não pode votar";
                $d = "Não pode dirigir";
            }
            echo "Com essa idade voce $v e tambem $d";
        ?>
    </div>
</body>
</html>