<?php
    class Lutador {
        // Atributos
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $empates;
        private $derrotas;

        // Métodos
        public function apresentar() {
            echo "<p>----------------------<br>";
            echo "<br> CHEGOU A HORA! O lutador " . $this->getNome();
            echo "<br> Veio diretamente de " . $this->getNacionalidade();
            echo "<br> Tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "KG";
            echo "<br> Com " . $this->getVitorias() . " vitórias, ";
            echo $this->getEmpates() . " empates e " . $this->getDerrotas() . " derrotas. </p>";
        }

        public function status() {
            echo "<h3>" . $this->getNome() . "</h3>";
            echo "<p> É um peso: " . $this->getCategoria() . "<br>";
            echo $this->getVitorias() . " vitórias<br>";
            echo $this->getEmpates() . " empates<br>";
            echo $this->getDerrotas() . " derrotas. </p>";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        // Métodos Especiais
        public function __construct($no, $na, $id, $al, $pe, $vi, $em, $de) {
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setEmpates($em);
            $this->setDerrotas($de);
        }

        private function getNome() {
            return $this->nome;
        }

        private function setNome($no) {
            $this->nome = $no;
        }

        private function getNacionalidade() {
            return $this->nacionalidade;
        }

        private function setNacionalidade($na) {
            $this->nacionalidade = $na;
        }  

        private function getIdade() {
            return $this->idade;
        }

        private function setIdade($id) {
            $this->idade = $id;
        }

        private function getAltura() {
            return $this->altura;
        }

        private function setAltura($al) {
            $this->altura = $al;
        }

        private function getPeso() {
            return $this->peso;
        }

        private function setPeso($pe) {
            $this->peso = $pe;
            $this->setCategoria();
        }

        private function getCategoria() {
            return $this->categoria;
        }

        private function setCategoria() {
            if ($this->peso < 52.2) {
                $this->categoria = "Inválido";
            } else if ($this->peso < 70.3) {
                $this->categoria = "Peso Leve";
            } else if ($this->peso < 83.9) {
                $this->categoria = "Peso Médio";
            } else if ($this->peso < 120.2) {
                $this->categoria = "Peso Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }

        private function getVitorias() {
            return $this->vitorias;
        }

        private function setVitorias($vi) {
            $this->vitorias = $vi;
        }

        private function getEmpates() {
            return $this->empates;
        }

        private function setEmpates($em) {
            $this->empates = $em;
        }

        private function getDerrotas() {
            return $this->derrotas;
        }

        private function setDerrotas($de) {
            $this->derrotas = $de;
        }
    }
?>