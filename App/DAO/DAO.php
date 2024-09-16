<?php

    namespace App\DAO;

    use \PDO;

    abstract class DAO extends PDO
    {

        protected $conexao = null;

        public function __construct()
        {

            $dsn = "mysql:host=" . $_ENV["database"]["host"] . ";dbname=" . $_ENV["database"]["db_name"];

            $user = $_ENV["database"]["user"];

            $password = $_ENV["database"]["password"];

            $this->conexao = new PDO($dsn, $user, $password);
            
        }

    }

?>