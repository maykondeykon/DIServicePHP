<?php
/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 19/05/15
 * Time: 09:52
 */

require "conexao.php";

$query = "SELECT * FROM clientes";
$stmt = $db->prepare($query);
$stmt->execute();

$clientes = $stmt->fetchAll(\PDO::FETCH_ASSOC);

?>

<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
    </tr>
    <?php foreach($clientes as $cliente): ?>
    <tr>
        <td><?=$cliente['id'] ?></td>
        <td><?=$cliente['nome'] ?></td>
        <td><?=$cliente['email'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>