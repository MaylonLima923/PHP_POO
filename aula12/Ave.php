<?php
    require_once 'Animal.php';

    class Ave extends Animal {
        private $corPena;

        public function locomover() {
            echo "<br> Voando";
        }

        public function alimentar() {
            echo "<br> Comendo frutas";
        }

        public function emitirSom() {
            echo "<br> Som de ave";
        }

        public function fazerNinho() {
            echo "<br> Ave fez ninho";
        }

        public function getCorPena() {
            return $this->corPena;
        }

        public function setCorPena($cor) {
            $this->corPena = $cor;
        }
    }
?>