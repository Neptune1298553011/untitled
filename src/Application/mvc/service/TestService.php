<?php

namespace Application\mvc\service;

use Application\mvc\dao\Test;

class TestService
{
    public static function test1($id){
        $row=Test::selectById($id);
        return array(
            'id'=>$row['id'],
            'productId'=>$row['product_id']  ,
            'wrapper'=>$row['product_swiper_wrapper'],
            'img'=>$row['product_note_body_img']
        );


    }

}