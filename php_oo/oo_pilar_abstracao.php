<?php

    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;


        //getters setters(overloading / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        /* function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        } */

        //métodos
        function resumirCadFunc(){
            /* this, operador de ajuste de contexto */
            return "Nome: " . $this->__get('nome') . "<br>" . "Telefone: " . $this->__get('telefone') . "<br>" . "Filhos: " . $this->__get('numFilhos') . "<br>" . "Cargo: " . $this->__get('cargo') . "<br>" . "Sálario: " . $this->__get('salario');
        }

        function modificarNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
            //numFilhos: variavel do objeto que pertence a class
            //$numFilhos: variavel do método recebido por parametro
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'José');
    $y->__set('telefone', '(85) 99999-9999');
    $y->__set('numFilhos', 2);
    $y->__set('cargo', 'Analista de suporte');
    $y->__set('salario', 2500);
    echo $y->resumirCadFunc();
    // echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) ';
    echo '<br />';
    echo '<hr>';
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('telefone', '(85) 99999-9999');
    $x->__set('numFilhos', 0);
    $x->__set('cargo', 'Analista sênior');
    $x->__set('salario', 7000);
    echo $x->resumirCadFunc();
    // echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) ';
