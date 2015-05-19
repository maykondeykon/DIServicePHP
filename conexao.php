<?php
/**
 * Created by PhpStorm.
 * User: maykon
 * Date: 19/05/15
 * Time: 09:53
 */

$host = "localhost";
$db = "diservice";
$user = "root";
$password = "";

$db = new \PDO("mysql:host={$host};dbname={$db}", $user, $password);