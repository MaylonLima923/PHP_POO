<?php
    require_once 'Pessoa.php';

    class Aluno extends Pessoa {
        // Atributos
        private $matricula;
        private $curso;

        // Métodos
        public function pagarMensalidade() {
            echo "<p> O aluno " . $this->getNome() . " está pagando a mensalidade </p>";
        }

        // Métodos Especiais
        public function __construct() {}

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