<?php 
session_start();

require('header.php');

if (isset($_SESSION['aviso'])) {
    echo $_SESSION['aviso'];
    echo $_SESSION['aviso'] = '';
}
?>

        <a href="apagar.php">Apagar Cookie</a>

        <form method="POST" action="recebedor.php">
            <label>
                Nome:
                <br/>
                <input type="text" name="nome">
            </label>
        <br/>
        <br/>
            <label>
                Email:
                    <br/>
                    <input type="text" name="email">
            </label>
        <br/>
        <br/>
            <label>
                Senha:
                    <br/>
                    <input type="text" name="senha">
            </label>


            <input type="submit" value="enviar">
        </form>
