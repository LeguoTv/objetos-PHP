<?php
require_once 'Controlador.php';
    class ControleRemoto implements Controlador {
        //Atributo
        private $volume;
        private $ligado;
        private $tocando;

        //Métodos especiais
        public function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        private function getVolume(){
            return $this->volume;
        }
        private function getLigado(){
            return $this->ligado;
        }
        private function getTocando(){
            return $this->tocando;
        }
        private function setVolume($volume){
            $this->volume = $volume;
        }
        private function setLigado($ligado){
            $this->ligado = $ligado;
        }
        private function setTocando($tocando){
            $this->tocando = $tocando;
        }
        public  function ligar(){
            $this-> setLigado(true);
        }
        public  function desligar(){
            $this->setLigado(false);
        }
        public  function abrirMenu(){
            echo "<p>----- MENU -----</p>";
            echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
            echo "<br> Está Tocando? " . ($this->getTocando()?"SIM":"NÃO");
            echo "<br> Volume: " . $this->getVolume();
            for($i=0; $i <= $this->getVolume(); $i+=10) {
                echo "|";
            }
            echo "<br>";
        }
        public  function fecharMenu(){
            echo "<br> Fechando Menu...";
        }
        public  function maisVolume(){
            if ($this-> getLigado()) {
                $this->setVolume( $this->getVolume() + 10);
            } else {
                echo "<p style='color: red; font-size: 20px;'>ERRO! Não posso diminuir o volume</p>";

            }
        }
        public  function menosVolume(){
            if ($this->getLigado()){
                $this->setLigado($this->getVolume() - 10);
            } else {
                echo "<pstyle='color: red; font-size: 20px;'>ERRO! Não posso diminuir o volume</pstyle=>";
            }
        }
        public  function ligarMudo(){
            if( $this-> getLigado() && $this->getVolume() > 0) {
                $this-> setVolume(0);
            }
        }
        public  function desligarMudo(){
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        public  function play(){
            if ($this->getLigado() && ! ($this->getTocando())) {
                $this->setTocando(true);
            }
        }
        public  function pause(){
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }
    }

?>