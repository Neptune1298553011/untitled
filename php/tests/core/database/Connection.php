<?php

class Connection
{

    public  static function make()
    {

        try {
            return new PDO('localhost:3306 ; dbname=igg' ,'admin','123456');

            return new PDO(
                $config['connection'] . ";dbname=" . $config['name'],
                $config['username'],
                $config['password']
            );

        }

        catch (PDOException $e) {

            die($e->getMessage());
        }
    }
}
