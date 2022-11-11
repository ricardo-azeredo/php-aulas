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
        
        // Note que para acessarmos nossos atributos dentro dos métodos utilizamos a variável reservada $this. Se fosse preciso chamar algum método da própria classe dentro de um outro método teríamos de usar $this, que é usado para acessar atributos e métodos da própria classe e só existe dentro deste escopo. No PHP ele é fundamental e obrigatório,
        // já em algumas outras linguagens de programação $this é opcional.

        // Herança:  permite que uma classe estenda outra e a classe filha vai herdar todos os atributos e métodos da classe pai. Ela pode então tanto possuir novos métodos e atributos, quanto reescrever métodos já existentes.

        //https://www.devmedia.com.br/orientacao-a-objetos-e-pdo-no-php/32644#:~:text=A%20orienta%C3%A7%C3%A3o%20a%20objetos%20(OO,n%C3%A3o%20%C3%A9%20preso%20a%20ela.