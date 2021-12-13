<?php

namespace Application\mvc\controller;

use Application\mvc\dao\Test;
use Application\mvc\service\TestService;

class Producttect
{
    public static function run(){

        $id=$_GET['id'];
        if ($id!="" && is_numeric($id))
        {
            $res=TestService::test1($id);
            echo json_encode($res); // 编码中文
        }else{

            echo 404; // 编码中文
        }


    }

}