<?php
    session_start();

    if ($_SESSION['aviso']) {
        echo $_SESSION['aviso'];
        echo $_SESSION['aviso'] = '';
    }
?>

    <form method="POST" action="recebedor.php">
        <label>Qual seu nome:
            <input type="text" name="nome">
        </label>
            <button>Entrar</button>
    </form>
