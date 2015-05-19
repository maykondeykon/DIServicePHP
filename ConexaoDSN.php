<?php

/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 19/05/15
 * Time: 11:28
 */

require_once "ConexaoInterface.php";

class ConexaoDSN implements ConexaoInterface
{
    private $dsn;
    private $user;
    private $password;

    public function __construct($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        return new \PDO($this->dsn, $this->user, $this->password);
    }
}