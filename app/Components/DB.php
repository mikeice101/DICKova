<?php

namespace App\Components;
class DB
{
    private $host = "localhost";
    private $db_name = "employes";
    private $username = "root";
    private $password = "root";

    public function getConnection()
    {
        $this->connection = null;

        try {
            $this->connection = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (\PDOException $exception) {
            echo "Ошибка соединения: " . $exception->getMessage();
        }

        return $this->connection;
    }
}
