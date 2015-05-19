<?php
/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 19/05/15
 * Time: 09:52
 */

require_once "Conexao.php";
require_once "Cliente.php";

$conexao = new Conexao("localhost", "diservice", "root", "");

$cliente = new Cliente($conexao);
$listaCliente = $cliente->listar();

require_once "clientes.list.php";