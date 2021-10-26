<?php
    require_once 'Animal.php';

    class Reptil extends Animal {
        private $corEscama;

        public function locomover() {
            echo "<br>Rastejando";
        }

        public function alimentar() {
            echo "<br>Comendo vegetais";
        }

        public function emitirSom() {
            echo "<br>Som de reptil";
        }

        public function getCorEscama() {
            return $this->corEscama;
        }

        public function setCorEscama($cor) {
            $this->corEscama = $cor;
        }
    }
?>