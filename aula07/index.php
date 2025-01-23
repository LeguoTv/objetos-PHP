<!DOCTYPE html>
<html>  
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Lutador.php';
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
            $l[0]->apresentar();
            $l[1] = new Lutador("Putscript","Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[1]->status();
            
            
            
        ?>
        </pre>
    </body>
</html>