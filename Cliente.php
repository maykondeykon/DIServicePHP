<?php

/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 19/05/15
 * Time: 10:32
 */

require_once "conexao.php";

class Cliente
{

    public function listar()
    {
        global $db;

        $query = "SELECT * FROM clientes";
        $stmt = $db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}