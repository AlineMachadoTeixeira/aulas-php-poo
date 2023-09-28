<?php
require_once "Cliente.php";

class PessoaJuridica extends Cliente{
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia; 

    // Esse é o $situação do cliente.php
    public function __construct(){
        //Acesssando o metodo setter PROTEGIDO (existente em CLIENTE)
        $this->setSituacao("em análise");       
    }
    
    //Exibir dados
    public function exibirDados(): void{
        echo "<h3>Método exibirDados - classe PessoaJuridica</h3>";
        echo "<h4>" . $this->getNome() . "</h4>"; 
        echo "<p>Situação:" . $this->getSituacao() . "</p>";
        echo "<p>Nome Fantasia:" . $this->nomeFantasia . "</p>";

        // Usamos getSituacao e na linhas 18 e 19, poís não faz parte dessa class já a linha 20  fizemos $this->nomeFantasia, pois é dessa class, na duvida coloque tudo com get
        
    }

    // Ano Fundacao
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }   
    public function setAnoFundacao(int $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }

    //CNPJ    
    public function getCnpj(): string
    {
        return $this->cnpj;
    }
    
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    // Nome Fantasia
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}