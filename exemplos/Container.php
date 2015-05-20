<?php

/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 20/05/15
 * Time: 09:23
 */
class Container
{

    public static function getCliente()
    {
        $cliente = new Cliente(self::getConexao());
        return $cliente;
    }

    public static function getConexao()
    {
        $conexao = new Conexao("localhost", "diservice", "root", "");
        return $conexao;
    }
}