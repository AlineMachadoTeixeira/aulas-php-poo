<?php
//Declarando namespace
namespace Tabajara;

class Utilitarios{
    public static string $dataAtual;

    //Método estático
    public static function obterData(){
        /* self::propriedade
        Permite o acesso à propriedade estática. */
        self::$dataAtual = date("d/m/Y");
    }

    public static function definirAtendimento(int $idade):string{
        // ? : é tipo if else verdadeiro mostra prioridade : falso  normal
        return $idade >= 60 ? "prioridade" : "normal";
    }

}

