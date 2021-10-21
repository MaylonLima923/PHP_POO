<?php
    require_once 'Pessoa.php';

    class Professor extends Pessoa {
        private $especialidade;
        private $salario;

        // Métodos

        public function aumentarSalario($aumento) {
            $this->setSalario($aumento);
        }
        
        // Métodos Especiais
        public function __construct($nome, $idade, $sexo, $espec, $salario) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setEspecialidade($espec);
            $this->setSalario($salario);
        }

        protected function getEspecialidade() {
            return $this->especialidade;
        }

        protected function setEspecialidade($espec) {
            $this->especialidade = $espec;
        }

        protected function getSalario() {
            return $this->salario;
        }

        protected function setSalario($salario) {
            $this->salario = $salario;
        }
    }
?>