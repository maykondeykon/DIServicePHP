<?php

/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 19/05/15
 * Time: 10:32
 */


class Cliente
{
    private $db;

    public function __construct($host, $dbname, $user, $password)
    {
        $conexao = new Conexao($host, $dbname, $user, $password);
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