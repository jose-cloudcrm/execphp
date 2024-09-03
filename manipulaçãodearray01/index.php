<?php
$array = [
    'nome' => 'José',
    'idade' => 90,
    'empresa' => 'Cloud',
    'cor' => 'Vermelho',
    'profissao' => 'Programador'
];

$chaves = array_keys($array);
$valores = array_values($array);


?>

<table border=1>
    

    <tr>
        <?php foreach($chaves as $chave): ?>
            <th><?php echo $chave; ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach($valores as $valor): ?>
            <td><?php echo $valor; ?></td>
        <?php endforeach; ?>
    </tr>
</table>


<table border="1">
    <?php foreach($array as $chave => $valor):?>
    <tr class="tablea">
        <th><?php echo $chave ?></th>
        <td><?php echo $valor ?></td>
    </tr>
    <?php endforeach; ?>
</table>
