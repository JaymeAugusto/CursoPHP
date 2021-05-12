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
        <form action="02tabuada.php" method="get">
            <select name="num">
                <?php
                    for($i=1;$i<=10;$i++) echo "<option>$i</option>";
                ?>        
            </select>
            <input type="submit" value="Tabuada" class="botao">
        </form>
        <?php
            
        ?>
    </div>
</body>
</html>