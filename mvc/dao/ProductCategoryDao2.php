<?php

include_once 'SQLSession.php';
include_once '../model/NewProduct.php';
class ProductCategoryDaoHOT
{


    public function selectById($id){
        $conn = SQLSession::get_sql_connection();
        $sql = "select * from hot_product where  id =" . $id;
        $result = $conn->query($sql);

        if (!$result){
            echo  mysqli_errno();
            return ;
        }
        $response  = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // todo 通过类构造器获取
                $temp = new HotProduct();
                $temp->id = $row['id'];
                $temp->product_price = $row['product_price'];
                $temp->product_name = $row['product_name'];
                $temp->product_information=$row['product_information'];
                // 补充属性
                $response = $temp;
            }


        }
        return $response;

    }

}
