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

        protected function getLogin() {
            return $this->login;
        }

        protected function setLogin($login) {
            return $this->login = $login;
        }

        protected function getTotAssistido() {
            return $this->totAssistido;
        }

        protected function setTotAssistido($totAssistido) {
            $this->totAssistido = $totAssistido;
        }
    }
?>