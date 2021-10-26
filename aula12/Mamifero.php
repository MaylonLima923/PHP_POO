<?php
    require_once 'Animal.php';

    class Mamifero extends Animal {
        // Atributos
        private $corPelo;

        // Métodos
        public function locomover() {
            echo "<br>Correndo";
        }

        public function alimentar() {
            echo "<br>Mamando";
        }

        public function emitirSom() {
            echo "<br>Som de Mamífero";
        }

        // Métodos Especiais
        public function getCorPelo() {
            return $this->corPelo;
        }

        public function setCorPelo($cor) {
            $this->corPelo = $cor;
        }
    }   
?>