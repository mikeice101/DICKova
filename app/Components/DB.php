<?php

namespace App\Components;
class DB
{
    private $host = "host.docker.internal";
    private $db_name = "nadyaBD";
    private $port = "8101";
    private $username = "root";
    private $password = "root";

    public function getConnection()
    {
        $this->connection = null;

        try {
            $this->connection = new \PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (\PDOException $exception) {
            echo "Ошибка соединения: " . $exception->getMessage();
        }

        return $this->connection;
    }
}
