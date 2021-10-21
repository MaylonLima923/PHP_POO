<?php
    require_once 'Publicacao.php';
    require_once 'Pessoa.php';

    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPag;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {
            echo "<br>Livro: " . $this->getTitulo() . " escrito por " . $this->getAutor();
            echo "<br> O livro está: " . ($this->getAberto()?"Aberto":"Fechado");
            echo "<br> Páginas: " . $this->getTotPag() . "atual: " . $this->getPagAtual();
            echo "<br> sendo lido por: " . $this->getLeitor()->getNome();
        }

        public function abrir() {
            if ($this->getAberto() == false) {
                $this->setAberto(true);
            } else {
                echo "O livro já está aberto";
            }
        }

        public function fechar() {
            if ($this->getAberto() == true) {
                $this->setAberto(false);
            } else {
                echo "O livro já está fechado";
            }
        }

        public function folhear($pag) {
            if ($pag <= $this->getTotPag() && $pag > 0) {
                $this->setPagAtual($pag);
            }
        }

        public function avancarPag() {
            if ($this->getAberto()) {
                if ($this->getPagAtual() < $this->getTotPag()) {
                    $this->setPagAtual($this->getPagAtual + 1);
                } else {
                    echo "Você já está na última página";
                }
            } else {
                echo "O livro ainda está fechado";
            }
        }

        public function voltarPag() {
            if ($this->getAberto()) {
                if ($this->getPagAtual() > 1) {
                    $this->setPagAtual($this->getPagAtual() - 1);
                } else {
                    echo "Você ainda está na 1° página";
                }
            } else {
                echo "O livro ainda está fechado";
            }

        } 

        public function __construct($titulo, $autor, $totPag, Pessoa $leitor) {
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPag($totPag);
            $this->setPagAtual(0);
            $this->setAberto(false);
            $this->setLeitor($leitor);
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getAutor() {
            return $this->autor;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getTotPag() {
            return $this->totPag;
        }

        public function setTotPag($totPag) {
            $this->totPag = $totPag;
        }

        public function getPagAtual() {
            return $this->pagAtual;
        }

        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }

        public function getAberto() {
            return $this->aberto;
        }

        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }

        public function getLeitor() {
            return $this->leitor;
        }

        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }
    }
?>