<?php
    require_once 'Pessoa.php';

    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistido;

        public function viuMaisUm() {
            $this->setTotAssistido($this->getTotAssistido() + 1);
        }

        public function __construct($nome, $idade, $sexo, $login) {
            parent::__construct($nome, $idade, $sexo);
            $this->setTotAssistido(0);
            $this->setLogin($login);
        }

        public function getLogin() {
            return $this->login;
        }

        public function setLogin($login) {
            return $this->login = $login;
        }

        public function getTotAssistido() {
            return $this->totAssistido;
        }

        public function setTotAssistido($totAssistido) {
            $this->totAssistido = $totAssistido;
        }
    }
?>