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
            $ini = $_GET["ini"];
            $fim = $_GET["fim"];
            $inc = $_GET["inc"];
            if($ini<$fim){
                while($ini<=$fim){
                    echo $ini." ";
                    $ini += $inc;
                }
            }else if($ini>$fim){
                while($ini>=$fim){
                    echo $ini." ";
                    $ini -= $inc;
                }
            }else{
                echo "Números Iguais";
            }
        ?>
        <br>
        <a href="final1.html">
            <input type="button" value="Voltar" class="botao">
        </a>
    </div>
</body>
</html>