<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 4</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade (public, private e protected)</li>
        
    </ul>

    <?php   
    require_once "src/Cliente.php";  
    $clienteA = new Cliente;

    //Código a baixo vai dar erro pois a propriedade é privada e Não pode alterar fora da classe
    //$clienteA->nome = "Aline"; 

    // Usando o setter para atribuir um valor à propriedade privada "nome"
    $clienteA->setNome("Fulando da Silva");
    ?>
    

    <!-- Usando o getter para ler/acessar dados privados -->
    <p>Nome: <?=$clienteA->getNome()?></p>

    
    <pre>
        <?=var_dump($clienteA)?>       
    </pre>

    
    


    
</body>
</html>