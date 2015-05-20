<?php
/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 19/05/15
 * Time: 09:52
 */

require_once "Conexao.php";
require_once "Cliente.php";
require_once "Container.php";

$cliente = Container::getCliente();
$listaCliente = $cliente->listar();

require_once "clientes.list.php";