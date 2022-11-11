<?php
/**
 * Orientação ao Objeto no PHP
 * 
 *  Objetivo
    * Reutilização de código (tempo economizado);
    * - Escalabilidade (código adicionado mais facilmente);
    * - Manutenibilidade (manutenção mais fácil);
    * - Desenvolvimento mais rápido.
*   Pilares da Orientação ao Objeto
*   Abstração: são tipos abstratos de dados;
*   -  Objetos: um objeto é uma entidade do mundo real, concreta ou abstrata, que seja aplicável ao sistema;
*   -  Classes: uma classe é a representação de vários objetos que possuem as mesmas características e comportamentos;
*   -  Atributos / Propriedades: são as características de um determinado objeto.

*   Classes e Objetos
*
*   As classes definem as características e o comportamento dos seus objetos. Cada característica é representada por um atributo e cada comportamento é definido por um método.
*
**
*/

Class Conta{
}
$conta = new Conta();
$conta2 = new Conta();

/**
 * Atributos e Métodos
 *  
 */

    Class Conta {
        public $saldo = 500;
        public $titular;
        function sacar($valor){
        }
        function depositar($valor){
        }
        function verSaldo() {
        }
        }
        $conta1 = new Conta();
        $conta->depositar(500);
        $conta1->sacar(20);
        
        $conta2 = new Conta();
        $conta2->depositar(250);
        $conta2->sacar(250);
        $conta2->verSaldo();
        
