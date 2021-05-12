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
            $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
            $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
            $media = ($n1 + $n2)/2;
            if($media < 5) $sit = "Reprovado";
            else if($media >= 5 && $media < 7) $sit = "Em Exame";
            else $sit = "Aprovado";
            
            echo "A média entre ".number_format($n1,1)." e ".
            number_format($n2,1)." é igual a ". 
            number_format($media,1)."<br>";
            echo "Situação do aluno: $sit<br>";
        ?>
        <a href="exercicio03.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>