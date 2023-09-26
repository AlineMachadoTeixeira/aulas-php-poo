<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança (Super Classe e Sub Classe)</li>        
    </ul> 
    
    <?php
    require_once "src/PessoaFisica.php";
    $clientePF = new PessoaFisica;

    //Colocar informação Cliente PF
    //SET é colocar ou retribuir 
    $clientePF->setNome("Fulano");
    $clientePF->setEmail("fulando@gmail.com");
    $clientePF->setIdade(20);
    $clientePF->setCpf("383.000.828-26");


    require_once "src/PessoaJuridica.php";
    $clientePJ = new PessoaJuridica;

    //Colocar informação Cliente PJ
    $clientePJ->setNome("Beltrano S/A");
    $clientePJ->setEmail("blablabla@gmail.com");
    $clientePJ->setAnoFundacao("2000");
    $clientePJ->setCnpj("32.088.0001/000.41");
    $clientePJ->setNomeFantasia("Bla Bla Bla Informatica");


    ?>

    <pre><?=var_dump($clientePF)?></pre>
    <pre><?=var_dump($clientePJ)?></pre>

    
</body>
</html>