<?php
require_once "Cliente.php";

//extends Cliente é para ligar a tabela PessoaFisica com a tabela Cliente. É tipo a seta (E a tabela PessoaFisica só vai pegar o publico+ da tabela Cliente )  lembra de fazer o require_once "Cliente.php"; para ligar as tabela no visual
class PessoaFisica extends Cliente{
    private int $idade;
    private string $cpf;


    // Para fazer isso usamos a instenção PHP8 and Setters assim não precisa escrever tudo.
    // clique na propriedade $idade; com direito e vai em Isert PHP8  Getter & Setter    
    public function getIdade(): int
    {
        return $this->idade;
    }
    
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    
    public function getCpf(): string
    {
        return $this->cpf;
    }
    
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}

