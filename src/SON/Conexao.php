<?php

/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 19/05/15
 * Time: 09:53
 */
namespace SON;

class Conexao implements ConexaoInterface
{
    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct($host, $db, $user, $password)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        return new \PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->password);
    }
}
