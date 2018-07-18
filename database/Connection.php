<?php

namespace App\Database;

class Connection
{
    public static function make($config)
    {
        try {
            return new \PDO(
                "mysql:host={$config['hostname']};dbname={$config['name']}",
                $config['user'],
                $config['password']);
        } catch (\PDOException $error) {
            echo "Can't connect to database. Error: " . $error->getMessage();
            die;
        }
    }
}

