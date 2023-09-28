<?php

abstract class Cliente {
    
    private string $nome;
    private string $email;
    private string $senha;
    private string $situacao = "a definir";

    //Exibir Dados
    public function exibirDados():void{        
        echo "<h3>". $this->getNome() ."</h4>";    
        echo "<p>Situação:" . $this->situacao . "</p>";
        
    }

   
    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

    public function getNome():string {
        return $this->nome;
    }

    public function setEmail(string $email):void {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
        //Fazer sanitização era assim  $this->email = $email ficou como o de cima;
        
    }
    
    public function getEmail():string {
        return $this->email;
        
    }

    public function setSenha(string $senha):void {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        // Era assim $this->senha = $senha;  com a sanitização ficou como o de cima;
        
    }
    
    public function getSenha():string {
        return $this->senha;
        
    }
 
 
    
   


    
    protected function getSituacao(): string
    {
        return $this->situacao;
    }

    
    protected function setSituacao(string $situacao): self
    {
        $this->situacao = $situacao;

        return $this;
    }
}



