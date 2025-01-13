<?php
    class ContaBanco{

     public $numConta;
     protected $tipo;
     private $dono;
     private $saldo;
     private $status;

     public function abrirconta($t){
          $this -> tipo = $t;
          $this -> status = true;
          if ($t == "CC"){
               $this-> saldo = 50;
          } elseif ($t =="CP"){
               $this-> saldo = 150;
          }
     }

     public function fecharConta(){
          if ($this -> saldo > 0){
               echo("Conta com Dinheiro!!!");
          } else if ($this -> saldo < 0){
               echo("Conta em Débito!!!");
          } else{
               $this-> status == false;
          }
     }
     public function depositar($v) {
          if ($this->status == true) {
              $this->setsaldo($this->getsaldo() + $v);
          } else {
              echo "Impossível depositar";
          }
      }
      
     public function sacar($v){
          if($this->status == true){
               if ($this-> saldo > $v){
                    $this->saldo = $this->saldo - $v;
               } else {
                    echo ("Saldo Insuficiente");
               }
          }else {
               echo ("Impossível sacar");
          }
     }
     public function pagarMensal(){
          $v = [];
          if($this->tipo == "CC"){
               $v = 12;
          } else if ($this->tipo == "CP"){
               $v = 20;
          }
          if($this->status == true){
               if($this->saldo > $v){
                    $this->saldo = $this->saldo - $v;
               } else {
                    echo("Saldo insuficiente");
               }
          } else{
               echo ("Impossível pagar");
          }
     }



    }
?>