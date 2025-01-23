<?php

    class Lutador{
            //ATRIBUTOS
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

            //METODOS
        
        public function apresentar(){
            echo "<p>--------------------------------------</p>";
            echo "<p>CHEGOU A HORA! O Lutador " . $this->getNome();
            echo " veio diretamente de " . $this->getNacionalidade();
            echo ", tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg";
            echo "<br>Ele tem " . $this->getVitorias() . " Vitorias, ";
            echo $this->getDerrotas() . " Derrotas e " . $this->getEmpates() . " Empates.
            </p>";
        }
        public function status(){
            echo "<p>--------------------------------------</p>";
            echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
            echo " e já ganhou " . $this->getVitorias() . " Vezes e ";
            echo " perdeu " . $this->getDerrotas() . " Vezes e ";
            echo " empatou " . $this->getEmpates() . " Vezes!";
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
        
            //METODOS ESPECIAIS
        public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em)
        {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;

        }public function getNome(){
            return $this->nome;
        }
        
        public function getPeso(){
            return $this->peso;
        }
        
        function getNacionalidade(){
            return $this->nacionalidade;
        }
        function getIdade(){
            return $this->idade;
        }
        function getAltura(){
            return $this->altura;
        }
        function getCategoria(){
            return $this->categoria;
        }
        function getVitorias(){
            return $this->vitorias;
        }
        function getDerrotas(){
            return $this->derrotas;
        }
        function getEmpates(){
            return $this->empates;
        }
        //set
        public function setNome($no){
            $this->nome = $no;
        }
        function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        function setAltura($altura){
            $this->altura = $altura;
        }
        public function setPeso($pe){
            $this->peso = $pe;
            $this->setCategoria();
        }
        private function setCategoria(){
            if ($this->peso < 52.2){
                $this->categoria = "Inválido Abaixo do peso";
            } elseif ($this->peso <= 70.3){
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9){
                $this->categoria = "Média";
            } elseif ($this->peso <= 120.2){
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "INVÁLIDO!!!";
            }
        }
        function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        function setEmpates($empates){
            $this->empates = $empates;
        }
    }



?>