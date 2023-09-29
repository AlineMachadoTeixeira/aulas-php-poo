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
    require_once "src/fornecedores/Pagamento.php";
    require_once "src/prestadores/Pagamento.php";

    //Forma 1 de usar classe com namespaces
    //$pagamentoFornecedor = new Fornecedor\Pagamento;
    //$pagamentoPrestador = new Prestador\Pagamento;

    //Forma 2 de usar classe com namespaces
    use Fornecedor\Pagamento;
    use Prestador\Pagamento as PrestadorPagamento;
                          //as PrestadorPagamento; é um apelido, poís não pode ter o mesmo nome (Pagamento)
    $pagamentoFornecedor = new Pagamento;
    $pagamentoPrestador = new Prestador\Pagamento // objeto através do alias


    ?>

    <pre><?=var_dump($pagamentoFornecedor)?></pre>
    <pre><?=var_dump($pagamentoPrestador)?></pre>
    

</body>

</html>