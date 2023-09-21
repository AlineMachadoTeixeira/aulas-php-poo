<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 1</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação de classe</li>
        <li>Importação do arquivo de classe</li>
        <li>Criação de instâncias/objetos</li>
    </ul>

    <?php
    // Importando Classe
    require_once "src/Cliente.php";

    //Criando instâncias da Classe (Objetos!)
    $ClienteA = new Cliente;
    $ClienteB = new Cliente;
    ?>
    
    <pre>
        <?=var_dump($ClienteA, $ClienteB)?>
    </pre>


    
</body>
</html>