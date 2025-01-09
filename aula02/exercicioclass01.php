<?php

    class teclado{
        var $cor;
        var $marca;
        var $uso;
        var $conexao;

        function digitar(){
            if($this-> conexao == false){
                echo "<p>não posso digitar por que estou desconectado...<br></p>";
            } else {
                echo "<p>Agora digitarei o que você quiser :D<br></p>";
            }
        }
        function jogar(){
            if($this-> uso == "jogar" ){
                echo "<p><br>A fincionalidade deste teclado é para Estudar</p>";
            } else {
                echo "<p><br>Porde usar este teclado para estudar :D</p>";
            }
        }
    }




?>