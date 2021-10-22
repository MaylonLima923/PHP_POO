<?php
    abstract class Pessoa {
        // Atributos
        private $nome;
        private $idade;
        private $sexo;

        // Métodos
        public final function fazerAniver() {
            $this->setIdade($this->getIdade() + 1);
        }

        // Métodos Especiais
        public function __construct() {}

        protected function getNome() {
            return $this->nome;
        }

        protected function setNome($nome) {
            $this->nome = $nome;
        }

        protected function getIdade() {
            return $this->idade;
        }

        protected function setIdade($idade) {
            $this->idade = $idade;
        }

        protected function getSexo() {
            return $this->sexo;
        }

        protected function setSexo($sexo) {
            $this->sexo = $sexo;
        }
    }
?>