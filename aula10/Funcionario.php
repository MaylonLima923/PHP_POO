<?php
    require_once 'Pessoa.php';

    class Funcionario extends Pessoa {
        // Atributos
        private $setor;
        private $trabalhando;

        // Métodos
        public function mudarTrabalho($trabalho) {
            $this->setSetor($trabalho);
        }
        
        // Métodos Especiais
        public function __construct($nome, $idade, $sexo, $setor, $trabalhando) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setSetor($setor);
            $this->setTrabalhando($trabalhando);
        }

        protected function getSetor() {
            return $this->setor;
        }

        protected function setSetor($setor) {
            $this->setor = $setor;
        }

        protected function getTrabalhando() {
            return $this->trabalhando;
        }

        protected function setTrabalhando($trabalhando) {
            $this->trabalhando = $trabalhando;
        }
    }
?>