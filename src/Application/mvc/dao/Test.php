<?php

namespace Application\mvc\dao;


use SQLSession;

class Test
{
    public static function selectById($id){
        $conn = SQLSession::get_sql_connection();
        $sql = "select * from img where  id =" . $id;
        $result = $conn->query($sql);
        if (!$result){
            echo  mysqli_errno();
            return ;
        }

        return $result->fetch_assoc();

    }
}