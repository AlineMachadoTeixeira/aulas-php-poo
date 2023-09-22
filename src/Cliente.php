<?php
class Cliente {

    //propriedade (ou atributos)
    //public é o sinal de + do Dia Portable
    //public string $email = "não informado"; esse não informado é para quando o cliente não informar um email e vai passar no php, pois colocamos "não informado"; para sair não informado na tela.
    public string $nome;
    public string $email = "não informado";
    public string $senha;
    public array $telefones;

    //Arquivo de class só a class (Cada class um arquivo)

    // Métodos (ou comportamentos)
    public function exibirDados():void {
        echo "<section>";
        echo "<h2> $this->nome </h2>";
        echo "<p>$this->email</p>";        
        echo "</section>";
    }

}



