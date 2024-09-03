<?php 
if(isset($_COOKIE['nome'])){
    $nome =  $_COOKIE['nome'];
}
?>
<html>
    <head>

    </head>
    <body>
        <h1>Olá, <?= $nome ?>  - <a href="sair.php">Sair</a></h1>
    </body>
</html>