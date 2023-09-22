<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 3</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Método construtor com atribuição obrigatória de valores aos parâmetros/propriedades do objeto</li>
        <li>Usando do <code>$this</code> para acessar às propriedades dentro do objetos</li>
        
    </ul>

    <?php   
    require_once "src/Cliente.php";
    $clienteA = new Cliente("Fulando", "fulando@gmail.com");
    $clienteB = new Cliente("Ozzy", "ozzu@msn.com");

    $clienteA->telefones =["11-2135-0300"];
    ?>
    
    <pre>
        <?= var_dump($clienteA, $clienteB )?>
    </pre>

    
    


    
</body>
</html>