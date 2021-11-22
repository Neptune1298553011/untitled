<?php

class SQLSession
{
    static private $server_name = "localhost:3306";
    static private $user_name = "admin";
    static private $password = "123456";
    static private $db_name = "igg";

    public static function get_sql_connection(){
        // 创建连接
        $conn = new mysqli(SQLSession::$server_name,self::$user_name,self::$password,self::$db_name);

        // 检测连接
        if ($conn->connect_error) {
            echo "error conn";
            die("连接失败: " . $conn->connect_error);
        }

        return $conn;
    }
}
