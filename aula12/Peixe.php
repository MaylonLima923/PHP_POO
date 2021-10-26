<?php
    require_once 'Animal.php';

    class Peixe extends Animal {
        private $corEscama;

        public function locomover() {
            echo "<br> Nadando";
        }

        public function alimentar() {
            echo "<br> Comendo substâncias";
        }
        
        public function emitirSom() {
            echo "<br> peixe não faz som";
        }

        public function fazerBolha() {
            echo "<br> Fez bolha";
        }
        
        public function getCorEscama() {
            return $this->corEscama;
        }

        public function setCorEscama($cor) {
            $this->corEscama = $cor;
        }
    }
?>