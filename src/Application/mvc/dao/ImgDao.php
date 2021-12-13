<?php

include_once 'SQLSession.php';
include_once '../model/NewProduct.php';
class ImgDao
{


    public static function selectById($id){
        $conn = SQLSession::get_sql_connection();
        $sql = "select * from img where  id =" . $id;
        $result = $conn->query($sql);

        if (!$result){
            echo  mysqli_errno();
            return ;
        }
        $response  = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // todo 通过类构造器获取
                $temp = new NewProduct();
                $temp->id = $row['id'];
                $temp->product_id = $row['product_id'];
                $temp->product_swiper_wrapper = $row['product_swiper_wrapper'];
                $temp->product_not_body_img = $row['product_not_body_img'];
                // 补充属性
                $response = $temp;
            }


        }
        return $response;

    }

}