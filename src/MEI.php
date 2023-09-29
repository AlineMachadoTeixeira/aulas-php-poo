<?php
//Declarando namespace
namespace Tabajara;

// require_once "PessoaJuridica.php"; Tiramos, pois fizemos o composer.json
/* Classe Final
Não permite estender recursos para novas subclasses,
ou seja, não permite herança. */
final class MEI extends PessoaJuridica {
    private string $areaDeAtuacao;

    public function getAreaDeAtuacao():string {
        return $this->areaDeAtuacao;
    }

    public function setAreaDeAtuacao(string $areaDeAtuacao):self {
        $this->areaDeAtuacao = $areaDeAtuacao;
        return $this;
    }
}