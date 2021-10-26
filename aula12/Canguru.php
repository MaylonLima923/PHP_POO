<?php
    require_once 'Mamifero.php';

    class Canguru extends Mamifero {
        public function usarBolsa() {
            echo "<br> Usando bolsa";
        }

        public function locomover() {
            echo "<br> Pulando";
        }
    }
?>