<?php

class Sql extends PDO{

    private $dsn =("mysql:dbname=bd_escrevasuahistoria;host=localhost");
    private $usuario = "root";
    private $senha = "";
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO($this->dsn, $this->usuario, $this->senha);
    }

}


?>