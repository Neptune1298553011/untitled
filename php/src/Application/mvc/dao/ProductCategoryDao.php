<?php

include_once 'SQLSession.php';
include_once '../model/NewProduct.php';
class ProductCategoryDao
{


    public function selectById($id){
        $conn = SQLSession::get_sql_connection();
        $sql = "select * from product where  id =" . $id;
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
                $temp->product_price = $row['product_price'];
                $temp->product_name = $row['product_name'];
                $temp->product_information=$row['product_information'];
                $temp->product_swiper_wrapper=$row['product_swiper_wrapper'];
                $temp->product_note_body_img1=$row['product_note_body_img1'];
                $temp->product_note_body_img2=$row['product_note_body_img2'];
                // 补充属性
                $response = $temp;
            }


        }
        return $response;

    }

}