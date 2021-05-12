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
        <form action="tabuada2.php" method="get">
            Número: <select name="seleciona">
            <?php
                $i = 1;
                while($i<=10){
                    echo "<option> $i </option>";
                    $i++;
                }
            ?>
            </select>
            <input type="submit" value="Gerar Tabuada" class="botao">
        </form>    
    </div>
</body>
</html>