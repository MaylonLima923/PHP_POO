<?php
    require_once 'AcoesVideo.php';

    class Video implements AcoesVideo {
        // Atributos
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;
        // Métodos
        public function play() {
            $this->setReproduzindo(true);
        }

        public function pause() {
            $this->setReproduzindo(false);
        }

        public function like() {
            $this->setCurtidas($this->getCurtidas() + 1);
        }
        // Métodos Especiais
        public function __construct($titulo) {
            $this->setTitulo($titulo);
            $this->setAvaliacao(1);
            $this->setReproduzindo(false);
            $this->setViews(0);
            $this->setCurtidas(0);
        }
        protected function getTitulo() {
            return $this->titulo;
        }

        protected function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        protected function getAvaliacao() {
            return $this->avaliacao;
        }

        protected function setAvaliacao($avaliacao) {
            $this->avaliacao = $avaliacao;
        }

        protected function getViews() {
            return $this->views;
        }

        protected function setViews($views) {
            $this->views = $views;
        }

        protected function getCurtidas() {
            return $this->curtidas;
        }

        protected function setCurtidas($curtidas) {
            $this->curtidas = $curtidas;
        }

        protected function getReproduzindo() {
            return $this->reproduzindo;
        }

        protected function setReproduzindo($reproduzindo) {
            $this->reproduzindo = $reproduzindo;
        }
    }
?>