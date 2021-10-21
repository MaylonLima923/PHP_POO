<?php
    require_once 'Lutador.php';

    class Luta {
        // Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Métodos
        public function marcarLuta($l1, $l2) {
            if ($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2) {
                $this->setAprovada(true);
                $this->setDesafiante($l1);
                $this->setDesafiado($l2);
            } else {
                $this->setAprovada(false);
                $this->setDesafiante(null);
                $this->setDesafiado(null);
            }
        }

        public function lutar() {
            if ($this->getAprovada()) {
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0, 2);
                switch ($vencedor) {
                    case 0:
                        echo "<p> O lutador " . $this->getDesafiante() . " ganhou! </p>";
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    case 1:
                        echo "<p>O lutador " . $this->getDesafiado() . " ganhou!</p>";
                        $this->getDesafiante()->ganharLuta();
                        $this->getDesafiado()->perderLuta();
                        break;
                    case 2:
                        echo "<p>A luta empatou</p>";
                        $this->getDesafiante()->empatarLuta();
                        $this->getDesafiado()->empatarLuta();
                        break;
                }
            } else {
                echo "Luta não pode acontecer";
            }
        }

        // Métodos Especiais
        private function getDesafiado() {
            return $this->desafiado;
        }

        private function setDesafiado($dd) {
            $this->desafiado = $dd;
        }

        private function getDesafiante() {
            return $this->desafiante;
        }

        private function setDesafiante($dt) {
            $this->desafiante = $dt;
        }

        private function getRounds() {
            return $this->rounds;
        }

        private function setRounds($r) {
            $this->rounds = $r;
        }

        private function getAprovada() {
            return $this->aprovada;
        }

        private function setAprovada($a) {
            $this->aprovada = $a;
        }
    }
?>