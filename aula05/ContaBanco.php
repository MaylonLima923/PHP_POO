<?php
    class ContaBanco {
        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        // Métodos

        // Construtor
        public function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false);
        }

        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            if ($t == "CC") {
                $this->setSaldo(50);
            } else if ($t == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this->getSaldo() > 0) {
                echo "<p> A conta ainda tem dinheiro! Não posso fecha-la </p>";
            } else if ($this->getSaldo() < 0){
                echo "<p> A conta está em débito! Não é possivel fecha-la </p>";
            } else {
                echo "<p>Conta fechada</p>";
                $this->setStatus(false);
            }
        }

        public function depositar($v) {
            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() + $v);
            } else {
                echo "<p> Conta fechada, não é possivel depositar! </p>";
            }
        }

        public function sacar($v) {
            if ($this->getStatus()) {
                if ($v < $this->getSaldo()) {
                    $this->setSaldo($this->getSaldo() - $v);
                } else {
                    echo "<p>Valor insuficiente para saldo!</p>";
                }
            } else {
                echo "<p> A conta não está aberta, é impossivel sacar! </p>";
            }
        }

        public function pagarMensal() {
            if ($this->getTipo() == "CC") {
                $v = 12;
            } else if ($this->getTipo() == "CP") {
                $v = 20;
            }

            if ($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p> A conta está fechada, não é possivel cobrar </p>";
            }
        }

        // Getters e Setters
        public function setNumConta($n) {
            $this->numConta = $n;
        }

        public function getNumConta() {
            return $this->numConta;
        }

        public function setTipo($t) {
            $this->tipo = $t;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setDono($d) {
            $this->dono = $d;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setSaldo($s) {
            $this->saldo = $s;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setStatus($s) {
            $this->status = $s;
        }

        public function getStatus() {
            return $this->status;
        }
    }
?>