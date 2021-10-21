<?php
    class Pessoa {
        // Atributos
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniver() {
            $this->setIdade($this->getIdade() + 1);
        }

        public function __construct($nome, $idade, $sexo) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }

        protected function setNome($nome) {
            $this->nome = $nome;
        }

        protected function getNome() {
            return $this->nome;
        }

        protected function setIdade($idade) {
            $this->idade = $idade;
        }

        protected function getIdade() {
            return $this->idade;
        }
        protected function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        protected function getSexo() {
            return $this->sexo;
        }

    }
?>