<?php
    abstract class Pessoa {
        protected $nome; 
        protected $idade; 
        protected $sexo;
        protected $experiencia;

        protected function ganharExp() {
            $this->setExperiencia($this->getExperiencia() + 1);
        }


    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
      }

        protected function getNome() {
            return $this->nome;
        }

        protected function setNome($nome) {
            $this->nome = $nome;
        }

        protected function getIdade() {
            return $this->idade;
        }

        protected function setIdade($idade) {
            $this->idade = $idade;
        }

        protected function getSexo() {
            return $this->sexo;
        }

        protected function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        protected function getExperiencia() {
            return $this->experiencia;
        }

        protected function setExperiencia($experiencia) {
            $this->experiencia = $experiencia;
        }
    }
?>