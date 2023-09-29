<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 09</title>
</head>

<body>
    <h1>PHP com POO - Exemplo 9</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Composer: gerenciador de depenência PHP</li>        
        <li>Configurar o projeto com Composer usando <code>composer.json</code></li>  
        <li>Autoload de classe evitando muitos requires e/ou require manuais</li>  
    </ul>   

    <?php       

    use Fornecedor\Pagamento;
    use Prestador\Pagamento as PrestadorPagamento;    
    use Tabajara\{Escola, MEI, PessoaFisica, PessoaJuridica };

    require_once "vendor/autoload.php";
         
     $tabajaraPF = new PessoaFisica; 
     $tabajaraPF->setNome("Aline");
     $tabajaraPF->setIdade(34);
     $tabajaraPF->setCpf("123.123.128-12");
 
         
     $tabajaraPJ = new PessoaJuridica;
     $tabajaraPJ->setNome("Aline Limitados");
     $tabajaraPJ->setEmail("limitados@gmail");
     $tabajaraPJ->setCnpj("00000000000-0001");    
     
         
     $tabajaraMEI = new MEI;
     $tabajaraMEI->setNome("Aline MEI");
     $tabajaraMEI->setAreaDeAtuacao("Artesanato");



   
    $pagamentoFornecedor = new Pagamento;
    $pagamentoPrestador = new PrestadorPagamento;
    
    ?>

    <pre><?=var_dump($pagamentoFornecedor)?></pre>
    <pre><?=var_dump($pagamentoPrestador)?></pre>

    <hr>
    <?php
    $escola = new Escola;
    var_dump($escola);
    ?>
    

     
    

</body>

</html>