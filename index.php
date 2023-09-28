<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 06</title>
</head>

<body>
    <h1>PHP com POO - Exemplo 6</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Polimorfismo</li>
        <li>Sobreposição de métodos</li>
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
    <hr>

    <h2>Saída de dados</h2>
    <section>
        <!-- Saida Cliente PessoaFisica -->
        <?= $clientePF->exibirDados() ?>
    </section><!-- Aqui vai aparercer o que escrevemos na pagina Cliente.php no public function exibirDados -->

    <section>
        <!-- Saida Cliente PessoaJuridica -->
        <?= $clientePJ->exibirDados() ?>
    </section><!-- Aqui vai aparercer o que escrevemos na pagina Cliente.php no public function exibirDados -->













</body>

</html>