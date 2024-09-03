<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de nomes</title>
</head>
<body>
    <main>
        <form method="POST">
            <label>
                Novo Nome:
                <input type="text" name="nome" required>
            </label>
            <input type="submit" value="adicionar">
        </form>
    </main>
    <?php    
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    
    
    if($nome){
        $texto = file_get_contents('nome.txt');
        $texto .="\n<li>".$nome."</li>";
        file_put_contents('nome.txt', $texto);
    }
    echo "<li>".$texto."</li>";
?>
</body>
</html>