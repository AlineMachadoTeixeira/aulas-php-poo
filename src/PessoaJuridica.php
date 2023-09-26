<?php
require_once "Cliente.php";

class PessoaJuridica extends Cliente{
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia; 
    

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