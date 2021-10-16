<?php
    class Caneta {
        public $modelo;
        private $cor;
        protected $ponta;
        public $carga;
        private $tampada;

        public function rabiscar() {
            if ($this->tampada) {
                echo "<p>  A caneta está tampada </p>";
            } else {
                echo "<p>Estou rabiscando<p>";
            }
        }

        public function tampar() {
            $this->tampada = true;
        }

        public function destampar() {
            $this->tampada = false;
        }
    }
?>