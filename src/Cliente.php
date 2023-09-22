<?php
class Cliente {

    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;
 
    /* Método construtor
    Permite configurar a forma de inicialização do objeto, exigindo a atribuição de dados no momento de criar o objeto/instância. O construtor é sempre chamado de forma automática assim que o objeto é criado. */
    public function __construct(
        string $nome, string $email, ){
        /* Atribuindo os valores dos parâmetros às propriedades. Usamos o  $this para acessar as propriedades desta classe.  */
        //  $this->nome = $nome; ($this->nome esse nome está public string $nome; ) ($nome; esse nome com $ public function __construct(string $nome, string $email){ não precisa dar $nome poderia ser  $n ) Ficaria $this->nome = $n;
        $this->nome = $nome;
        $this->email =$email;
        // $this->telefones = $telefones;

    }
   

}



