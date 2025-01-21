<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>aula 06 </title>
    </head>
    <body>
        <h1>Pojeto Controle Remoto!</h1>
        <pre>
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto();
            
            $c ->menosVolume();
            $c ->abrirMenu();
        ?>
        </pre>
    </body>
</html>