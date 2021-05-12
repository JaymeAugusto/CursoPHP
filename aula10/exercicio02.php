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
            $d = isset($_GET["ds"])?$_GET["ds"]:0;
            switch($d){
                case 2:
                case 3:
                case 4:
                case 5:    
                case 6:
                    echo "Levanta e vai estudar vagabundo";
                break;
                case 7:
                case 1:
                    echo "Vai estudar php vagabundo";
                break;
                default:
                    echo "Dia invalido";
                break;
            }
        ?>
        <br><a href="javascript:history.go(-1)">
        <input type="button" value="Voltar" class="botao"></a>
    </div>
</body>
</html>