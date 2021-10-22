<?php
    require_once 'Aluno.php';

    class Bolsista extends Aluno {
        // Atributos
        private $bolsa;

        // Métodos
        public function renovarBolsa() {
            echo "<p> A bolsa do aluno " . $this->getNome() . " foi renovada. </p>";
        }

        public function pagarMensalidade() {
            echo "<p> O aluno " . $this->getNome() . " é bolsista então paga a com desconto!</p>";
        } 

        // Métodos Especiais
        protected function getBolsa() {
            return $this->bolsa;
        }

        protected function setBolsa($bolsa) {
            $this->bolsa = $bolsa;
        }
    }
?>