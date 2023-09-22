<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 2</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto às propriedades</li>
        <li>Atribuição e leitura de dados</li>
        <li>Chamada de método</li>        
    </ul>

    <?php   
    require_once "src/Cliente.php";
    
    $clienteA = new Cliente;
    $clienteB = new Cliente;

    //Acesso e atribuição
    $clienteA->nome ="Aline";
    $clienteB->nome ="Rafaela";

    $clienteA->telefones = ["11-2135-0300", "11-95555-5555"];

    $clienteA->senha = password_hash("123abc", PASSWORD_DEFAULT);

    ?>

    <hr>
    <h2>Dados dos objetos</h2>
    <h3><?=$clienteA->nome?></h3>
    <h3><?=$clienteB->nome?></h3>

    <p>E-mail <?=$clienteA->nome?></p>
    <p>Telefones (acesso um por um):
       <?=$clienteA->telefones[0]?>, <?=$clienteA->telefones[1]?>,
    </p>

    <p>Telefone (convertendo para string):
         <?=implode (", ", $clienteA->telefones)?>,
    </p>

    <p>Telefones (usando loop):</p>
    <ul>
    <?php foreach($clienteA->telefones as $telefone){ ?>
        <li><?=$telefone?> </li>  
  
    <?php
    }
    ?>
    </ul>
    
    <pre>
        <?=var_dump($clienteA, $clienteB)?>
    </pre>


    
</body>
</html>