<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); 
        print "Hoje é dia " . date("d/M/Y") ;
        print " e a hora atual é " . date("G:i:s");
    ?>
</body>
</html>
