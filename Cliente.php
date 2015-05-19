<?php

/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 19/05/15
 * Time: 10:32
 */

require_once "Conexao.php";

class Cliente
{
    private $db;

    public function __construct()
    {
        $conexao = new Conexao("localhost", "diservice", "root", "");
        $this->db = $conexao->connect();
    }

    public function listar()
    {


        $query = "SELECT * FROM clientes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}