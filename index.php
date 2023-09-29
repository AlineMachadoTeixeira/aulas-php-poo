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
        <li>Namespaces: Agrupamento de recursos (classes, funções, constantes)</li>     
        <li>Prevenção de conflitos entre classes de mesmo nome</li>  
        <li>Configurar e usar <code>namespaces</code> e alias</li>      
    </ul>   

    <?php    
    /*Só de fazer o require_once/importação das classes (SEM NAMESPACE), já dá erro no servidor devido a terem o mesmo nome.  */

    use Fornecedor\Pagamento;
    use Prestador\Pagamento as PrestadorPagamento;
    use Tabajara\MEI;
    use Tabajara\PessoaFisica;
    use Tabajara\PessoaJuridica;
    /* DE cima usamos o use um por um agora em baixo vamos fazer o use como classe */
    //use Tabajara\{MEI, PessoaFisica, PessoaJuridica };

    require_once "src/fornecedores/Pagamento.php";
    require_once "src/prestadores/Pagamento.php";

    //Forma 1 de usar classe com namespaces
    //$pagamentoFornecedor = new Fornecedor\Pagamento;
    //$pagamentoPrestador = new Prestador\Pagamento;

    //Forma 2 de usar classe com namespaces
    //use Fornecedor\Pagamento;
    //use Prestador\Pagamento as PrestadorPagamento;
                          //as PrestadorPagamento; é um apelido, poís não pode ter o mesmo nome (Pagamento)
    //$pagamentoFornecedor = new Pagamento;
    //$pagamentoPrestador = new Prestador\Pagamento // objeto através do alias

    //Forma 3 de usar classe com namespaces 
    $pagamentoFornecedor = new Pagamento;
    $pagamentoPrestador = new PrestadorPagamento;
    
    ?>

    <pre><?=var_dump($pagamentoFornecedor)?></pre>
    <pre><?=var_dump($pagamentoPrestador)?></pre>

    <hr>

    <!--  Exercicio 
     - Criar objeto cliente PF, cliente PJ e cliente MEI
     - Coloque alguns dados usando setters
     - Exiba alguns dados no HTML  -->

     <?php
     require_once "src/PessoaFisica.php";
     //use está na linha 26
     $tabajaraPF = new PessoaFisica; 
     $tabajaraPF->setNome("Aline");
     $tabajaraPF->setIdade(34);
     $tabajaraPF->setCpf("123.123.128-12");
 
     require_once "src/PessoaJuridica.php";
     //use está na linha 27
     $tabajaraPJ = new PessoaJuridica;
     $tabajaraPJ->setNome("Aline Limitados");
     $tabajaraPJ->setEmail("limitados@gmail");
     $tabajaraPJ->setCnpj("00000000000-0001");    
     
     require_once "src/MEI.php";
     //use está na linha 25
     $tabajaraMEI = new MEI;
     $tabajaraMEI->setNome("Aline MEI");
     $tabajaraMEI->setAreaDeAtuacao("Artesanato");
     ?>

     <h3>Dados ( Pessoa Fisica )</h3>
     <ul>
        <li>
            nome: <?=$tabajaraPF->getNome()?>
        </li>
        <li>
            Idade: <?=$tabajaraPF->getIdade()?>
        </li>
        <li>
            CPF: <?=$tabajaraPF->getCpf()?>
        </li>
     </ul>

     <h3>Dados ( Pessoa Juridica )</h3>
     <ul>
        <li>
            nome: <?=$tabajaraPJ->getNome()?>
        </li>
        <li>
            E-mail: <?=$tabajaraPJ->getEmail()?>
        </li>
        <li>
            CPF: <?=$tabajaraPJ->getCnpj()?>
        </li>
     </ul>

     <h3>Dados ( Mei )</h3>
     <ul>
        <li>
            nome: <?=$tabajaraMEI->getNome()?>
        </li>
        <li>
            Area: <?=$tabajaraMEI->getAreaDeAtuacao()?>
        </li>
        
     </ul>
    

</body>

</html>