<?php
    require_once 'Pessoa.php';

    class Aluno extends Pessoa {
        // Atributos
        private $matricula;
        private $curso;

        // Métodos
        public function cancelarMatricula() {
            $this->setMatricula(null);
        }
        
        // Métodos Especiais
        public function __construct($nome, $idade, $sexo, $matricula, $curso) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setMatricula($matricula);
            $this->setCurso($curso);
        }

        protected function getMatricula() {
            return $this->matricula;
        }

        protected function setMatricula($matricula) {
            $this->matricula = $matricula;
        }

        protected function getCurso() {
            return $this->curso;
        }

        protected function setCurso($curso) {
            $this->curso = $curso;
        }
    }
?>