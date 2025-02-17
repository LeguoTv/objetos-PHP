<?php

class ContaBanco{
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    // Metodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        } elseif ($t == "CP"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p>Conta está em débito. Impossivel encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de". $this->getDono() . " fechadacom sucesso </p>";
        }
    }
    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depôsito de R$ $v na conta de" . $this->getDono()."</p>";
        } else {
            echo "<p>Conta fechada. Não consigo depositar</p>";
        }
    }
    public function sacar($v){
        if ($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$:$v autorizadona conta de ". $this->getDono()."</p>";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Não posso sacar de uma conta fechada!</p>";
        }
    }
    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        } elseif ($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus()){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$:$v debitada na conta de" . $this->getDono() . "</p>";
            } else {
                echo "<p>Problemas com a conta. não posso cobrar</p>";
            }
        }

    }
    // Método Especiais
    public function __construct()
    {
       $this->setSaldo(0);
       $this->setStatus(false); 
       echo "<p>Conta criada com sucesso!</p>"; // não é recomendado!
    }
    public function getnumConta(){
        return $this->numConta;
    }
    public function setnumConta($n){
        $this->numConta = $n;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($s){
        $this->status = $s;
    }
}




?>